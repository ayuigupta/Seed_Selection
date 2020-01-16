<?php
session_start();
include('db.php');
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
  border: 3px solid black;
  border-collapse: collapse;
  margin-left: 200px;
  margin-top: 50px;
  background-color: #B8BC86;
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
	$query="SELECT * FROM market";
	$result = mysqli_query($conn,$query);

echo "<table>"; // start a table tag in the HTML
echo "<tr><td> Product ID</td> <td>Product Name</td> <td>Price (per kg)</td></tr>";
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['pid'] . "</td><td>" . $row['pname'] . "</td><td>" . $row['pcost'] . "</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>";
	?>
	 <form action='add.php' method="POST">
  
<select name="item" required style="width: 304px; float: right; margin-top: -400px; margin-right: 150px; padding: 5px; background-color: #B8BC86;">

<?php 
$query = "SELECT * FROM market"; //You don't need a ; like you do in SQL
$result = mysqli_query($conn,$query);

while ($row = mysqli_fetch_array($result))
{
    echo "<option value='".$row['pname']."'>'".$row['pname']."'</option>";
}
?>        
</select>
<input type="number" required name="qty" id="qty" placeholder="Enter quantity..." style="width: 290px; float: right;  margin-top: -350px; margin-right: 150px; padding: 5px; background-color: #B8BC86;">
<input type="submit" name="submit" id="submit" value="Add" style="width: 300px; float: right;  margin-top: -300px; margin-right: 150px; padding: 5px; background-color: #B8BC86;">
 </form>
</body>
</html>


