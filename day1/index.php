<html>
<head>
	<title>Contact Us</title>
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
	<h1>Register Here</h1>
	<hr>
	All fields are required.
	<table>
		<form method="post" action="confirm.php" id="contactus">
		<tr>
			<td>First Name</td>
			<td><input type="text" name="fname" required></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lname" required></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender" value="f" required>Female
				<input type="radio" name="gender" value="m" required>Male
			</td>
		</tr>
		<tr>
			<td>Mobile</td>
			<td><input type="text" name="mobile" required></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="user" required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pswd" required></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="cpswd" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Send"></td></tr>
		</form>
	</table>
	<h4>Existing User ?</h4>
	<a href="login.php">Login</a>
</div>
<div id="footer">
	<hr>
	Maruti India Limited &copy; 2014
</div>
</body>
</html>
