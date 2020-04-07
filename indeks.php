<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<style type="text/css">
		body {
			font-family: arial;
			font-size: 18px;
			background-color: #FFE4B5;
		}
		input {
			font-family: arial;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<center>
	<h2>Login Admin</h2>
	<br>
	<form action="login.php" method="POST">
		<p>Username : <input type="text" name="user"></p>
		<p>Password : <input type="Password" name="password"></p>
		<p><input type="submit" name="login" value="login">
		</p>
	</form>
</center>
</body>
</html>