<?php
session_start();
	include('db.php');
	$uname=$_POST["username"];
	$password=$_POST["password"];
 
 	$query = "SELECT * FROM users WHERE username = '$uname' AND password = '$password'";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result) > 0)
	{
	header("Location:home.php");
	}
	else
	{
	header('Location:login.php');
	}
?>