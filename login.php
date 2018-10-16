<?php

	if(isset($_GET['error'])){
		echo $_GET['error'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post" action="logcheck.php">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>User id</td> <br>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td> <br>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
				
					<td><input type="submit" name="submit" value="Submit"></td>
					<td><a href="">Register</a> </td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>