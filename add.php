<?php
session_start();
    include('db.php');

    $item=$_POST['item'];
    $qty=$_POST['qty'];
if(!empty($item )&& !empty($qty))

{

    $query = "SELECT * FROM market WHERE pname = '$item'";  
    $result = mysqli_query($conn, $query);  
    $row = mysqli_fetch_array($result);
    $price=$row['pcost'];

$item_price=$price*$qty;

        $query = "REPLACE INTO  cart values ('$item','$item_price')";  
    $result = mysqli_query($conn, $query);  
  $query = "REPLACE INTO  tempcart values ('$item','$item_price')";  
    $result = mysqli_query($conn, $query);
}
header('Location:cart.php');

?>