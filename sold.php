<?php

session_start();
include('db.php');
$item=$_POST['name'];
$quantity=$_POST['quantity'];
$query="INSERT INTO menu values "
?>