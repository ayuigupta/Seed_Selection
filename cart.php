<?php
include('db.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
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
  margin-left: 200px;
  margin-top: 50px;
  background-color: #B8BC86;
  margin-left: 530px;
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
		<?php
$query = "SELECT * FROM cart"; //You don't need a ; like you do in SQL
$result = mysqli_query($conn,$query);

echo "<table>"; // start a table tag in the HTML
$total=0;
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
while($row = mysqli_fetch_array($result)){ 
 
 $total+=$row['pcost'];

  //Creates a loop to loop through results
echo "<tr><td>" . $row['pname'] . "</td><td>" . $row['pcost'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML
?>

<h4 style="text-align: center; color: black;">Total Bill: <?php echo $total; ?></h4>
 <form action='placeorder.php' method="POST">
 
<center><input type="submit" name="submit" id="submit" value="Place Order" style="width: 300px; margin-top: 1em; margin-bottom: 1em;"></center>

 </form>

 <form action="buy.php" method="POST">
  <center><input type="submit" name="submit" id="submit" value="Add More Items" style="width: 300px; margin-top: 1em; margin-bottom: 1em;"></center>
</form>
</body>
</html>