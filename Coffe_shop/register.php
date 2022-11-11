<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
	<h3>Register</h3>
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
				<td><input type="submit" name="login" value="Submit"></td>
			</tr>
		</table>
	</form>

	<?php 
// tambah data
include "connect.php";
if(isset($_POST['login'])){
    mysqli_query($connect,"insert into user set
    username = '$_POST[username]',
    password = '$_POST[password]'");
}
?>
</body>
</html>