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
				<a href="login.php">Login</a>
				<a href="register.php">Register</a>
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
	<h1>Contact Us</h1>
	<hr>
	<table>
		<form method="post" action="confirm.php" id="contactus">
		<tr>
			<td>First Name</td>
			<td><input type="text" name="fname"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lname"></td>
		</tr>
		<tr>
			<td>Information</td>
			<td>
				<input type="radio" name="info" value="Book">Book
				<input type="radio" name="info" value="Query">Query
			</td>
		</tr>
		<tr>
			<td>Number</td>
			<td><input type="text" name="mobile"></td>
		</tr>
		<tr>
			<td>Message</td>
			<td>
				<textarea rows="4" cols="50" name="comment" form="contactus">Enter text here...</textarea>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Send"></td></tr>
		</form>
	</table>
</div>
<div id="footer">
	<hr>
	Maruti India Limited &copy; 2014
</div>
</body>
</html>
