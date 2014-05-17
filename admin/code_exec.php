<?php
session_start();
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];

$username=$_POST['username'];
$password=$_POST['password'];
mysql_query("INSERT INTO users(fname, lname, gender, address, contact,  username, password)VALUES('$fname', '$lname', '$gender', '$address', '$contact',  '$username', '$password')");
header("location: sign_up.php?remarks=success");
mysql_close($con);
?>