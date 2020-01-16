<?php
session_start();
	include('db.php');
	$fname=$_POST["firstname"];
	$lname=$_POST["lastname"];
	$gender=$_POST["gender"];
	$uname=$_POST["username"];
	$email=$_POST["email"];
	$password=$_POST["password"];

	$query="INSERT INTO users values ('$fname','$lname','$gender','$uname','$email','$password')";
	$result=mysqli_query($conn,$query);
	if($result)
	{
	header("Location:login.php");
	}
	else
	{
		header('Location:register.php');
	}
?>