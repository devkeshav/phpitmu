<html>
<head>
	<title>Login</title>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<style type="text/css">
	
</style>
<body>
<div id="header" align="center">
	<table align="center">
		<tr>
			<td width="640px"><img src="images/logo.png" height="50" width="300" align="center"></td>
			<td align="right" width="640px">
			</td>
		</tr>
	</table>
</div>
<div id="nav" align="center">
	<ul>
		<li><a href="index.php">Home</a></li>&nbsp;
		<li><a href="#">About Us</a></li>&nbsp;
		<li><a href="#">Gallery</a></li>&nbsp;
		<li><a href="contact.php">Contact Us</a></li>&nbsp;
	</ul>
</div>
<div id="main">
	<h1>Login</h1>
	<hr>
	<table>
		<form method="post" action="confirm.php" id="contactus">
		<tr>
			<td>Username</td>
		</tr>
		<tr>
			<td><input type="text" name="user" required></td>
		</tr>
		<tr>
			<td>Password</td>
		</tr>
		<tr>
			<td><input type="text" name="pswd" required></td>
		</tr>
		<tr>
			<td><input type="submit" value="Login"></td>
		</tr>
		</form>
	</table>
	<h4>New User ?</h4>
	<a href="register.php">Register</a>
</div>
<div id="footer">
	<hr>
	Maruti India Limited &copy; 2014
</div>
</body>
</html>
