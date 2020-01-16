<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<script type="text/javascript">
	function validate()
	{
		var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID");
            return false;
         }
         return( true );
	}
</script>
<body style="background-image: url(back22.jpg); background-repeat: no-repeat; background-size: cover;">

<h2><center>REGISTRATION PAGE</center></h2>
<div style="margin-left: 400px; margin-right:400px; margin-top: 10px; background-color: #013220;">
<form method="POST" style="border: 2px solid #000000;" name="myForm" action="insert.php" onsubmit="return validate();">
	<div class="login-form" style="padding:16px;">
		<img src="user.png" style="width: 100px; padding-left: 160px;">
		<br><br>
		<label style="font-size: 20px; color: white;"><strong>FIRSTNAME:</strong></label>
		<input type="text" name="firstname" style="width:60%; float: right; border:1px solid #000000; padding: 5px; background-color: #f1f1f1;" placeholder="Enter your firstname"maxlength="10" minlength="5" required>
		<br><br>
		<label style="font-size: 20px; color: white;"><strong>LASTNAME:</strong></label>
		<input type="text" name="lastname" style="width:60%; float: right; border:1px solid #000000; padding: 5px; background-color: #f1f1f1;" placeholder="Enter your lastname" required>
		<br><br>
		<label style="font-size: 20px; color: white;"><strong>GENDER:</strong></label>
		<input type="radio" name="gender" value="male" style="margin-left: 60px;" required><span style="color: white;">MALE</span>
		<input type="radio" name="gender" value="female"><span style="color:white;">FEMALE</span>
		<input type="radio" name="gender" value="other"><span style="color:white;">OTHER</span>
		<br><br>
		<label style="font-size: 20px; color: white;"><strong>USERNAME:</strong></label>
		<input type="text" name="username" style="width:60%; float: right; border:1px solid #000000; padding: 5px; background-color: #f1f1f1;" placeholder="Enter your username" required>
		<br><br>
		<label style="font-size: 20px; color: white;"><strong>EMAIL:</strong></label>
		<input type="email" name="email" style="width:60%; float: right; border:1px solid #000000; padding: 5px; background-color: #f1f1f1;" placeholder="Enter your email" required>
		<br><br>
		<label style="font-size: 20px; color: white;"><strong>PASSWORD:</strong></label>
		<input type="password" name="password" style="width:60%; float: right; border: 1px solid #000000; padding: 5px;background-color: #f1f1f1;" placeholder="Enter your password" required>
		<br><br><br>
		<center><button type="submit" style="width: 100%;background-color: green;color: white; padding: 10px;" onclick="validate()">REGISTER</button></center>
		<br>
		<center><button style="width: 100%;background-color: green;color: white; padding: 10px;"><a href="login.php" style="text-decoration: none;
		color: white;">LOGIN</a></button></center>
		
	</div>
</form>
</div>
</body>
</html>