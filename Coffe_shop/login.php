<?php 

session_start();

if(isset($_SESSION["nama"])){
    header("location: index.php");
} 

include "connect.php";

if(isset($_POST['login'])){
	   $username = $_POST['username'];
	   $password = $_POST['password'];
	   $qry = mysqli_query($connect,"SELECT * FROM user WHERE username='$username' AND 
	   password = '$password'");
	   $cek = mysqli_num_rows($qry);
	   if ($cek==1){
		   $_SESSION["nama"] = $username;
		   header("location: index.php");
		   exit;
	   } else {
           echo "<h4 class='peringatan'>Data Tidak Valid!</h4>";
       }
	   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
	<h3>Login</h3>
	<form action="" method="post">		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="login"></td>
			</tr>
		</table>
	</form>

</body>
</html>