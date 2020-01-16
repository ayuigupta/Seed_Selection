<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>WHEAT</title>
</head>
<style type="text/css">
	.nav
	{
		overflow: hidden;
		background-color: #333;
	}
	.nav a:hover {
  	background-color: green;
	}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 10px;
}
	
</style>
<body style="background-image: url(back22.jpg); background-repeat: no-repeat; background-size: cover;">
	<center><h1>HOME</h1></center>

	<div class="nav">
		<a href="home.php" style="text-decoration: none; color: white; float: left; padding: 15px 20px;">ABOUT</a>
		<a href="guide.php" style="text-decoration: none; color: white; float: left; padding: 15px 20px;">CROP GUIDE</a>
		
		<a href="buy.php" style="text-decoration: none; color: white; float: left; padding: 15px 20px;">BUY</a>
		<a href="sell.php" style="text-decoration: none; color: white; float: left; padding: 15px 20px;">SELL</a>
		<a href="logout.php" style="text-decoration: none; color: white; float: right; padding: 15px 20px;">LOGOUT</a>
	</div>
	<div style="margin-left: 450px;margin-top: 70px;">
	<form action="sold.php" method="POST">
		<input type="text" name="name" placeholder="Enter product name" style="width: 300px; background-color: #B8BC86;">
		<br><br>
		<input type="number" name="quantity" placeholder="Enter product quantity" style="width: 300px; background-color: #B8BC86;">
		<br><br>  
		<input type="submit" name="sell" value="sell" style="width: 300px; background-color: #B8BC86;">
	</form>
	</div>
	</body>
</html>


