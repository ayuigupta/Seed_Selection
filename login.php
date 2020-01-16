<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>

<body style="background-image: url(back22.jpg); background-repeat: no-repeat; background-size: cover;">
	<br>
<h1><center>SMART FARMING FOR CROP ANALYSIS</center></h1>
<div style="margin-left: 450px; margin-right:450px; margin-top: 40px; background-color: #013220;">
<form method="POST" style="border: 2px solid #000000;" action="verify.php">
	<div class="login-form" style="padding:16px;">
		<br>
		<img src="user.png" style="width: 100px; padding-left: 110px;">
		<br><br>
		<label style="font-size: 20px; color: white;"><strong>USERNAME:</strong></label>
		<br><br>
		<input type="text" name="username" id="username" style="width: 97%; border:1px solid #000000; padding: 5px; background-color: #f1f1f1;" placeholder="Enter your username" required>
		<br><br>
		<label style="font-size: 20px; color: white;"><strong>PASSWORD:</strong></label>
		<br><br>
		<input type="password" name="password" id="password" style="width: 97%; border: 1px solid #000000; padding: 5px; margin-right: 10px; background-color: #f1f1f1;" placeholder="Enter your password" required>
		<br><br><br>
		<center><button type="submit" id="submit" style="width: 100%; background-color: green;color: white; padding: 5px;">LOGIN</button></center>
		<br>
		<center><button id="submit1" style="width: 100%; background-color: green;color: white; padding: 5px;"><a href="register.php" style="text-decoration: none; color: white;">REGISTER</a></button></center>
		<br>
	</div>
</form>
</div>
</body>
</html>