<?php
session_start();

?>


<!DOCTYPE html>

<html lang="en" xmls="https://www.w3.org/1993/xhtml">
<head>
	<meta charset="utf-8"/>
	<script type="text/javascript" src="../js/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui-1.10.4.min.js"></script>
	<title>Forrest Weston Homework 2</title>
</head>
<body>

<form>

	<h1>Email</h1>
	<input type="email" name="email" required>

	<h1>Password:</h1>
	<input type="password" name="password" required>

	<h1>First Name:</h1>
	<input type="name" name="firstName" required>

	<h1>Last Name:</h1>
	<input type="name" name="lastName" required>

	<h1>Nickname:</h1>
	<input type="nickname" name="nickname" required>

	<h1>Gender:</h1>
	<input type="radio" name="sex" value="male" required>Male
	<input type="radio" name="sex" value="female" required>Female
	<input type="radio" name="sex" value="Other" required>Other
	
	<h1>Preferenced:</h1>
	<input type="checkbox" name="pref" value="subscribe">Subscribe to Monthly Spam?

	<h1><input type="Submit" value="submit"></h1>
	
</form>
</body>
</html>
