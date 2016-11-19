<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form action="verifylogin" method="post">
	<table style="margin: 20px auto">
		<tr>
			<td>
				<label for="email">Email:</label>
				<td><input type="email" id="email" name="email"/></td>
			</td>
		</tr>
		<tr>
			<td><label for="password">Password:</label></td>
			<td><input type="password" id="password" name="password"/></td>
		</tr>
		<tr>
			<td><input type="submit" value="Login"></td>
		</tr>
	</table>
</form>
</body>
</html>