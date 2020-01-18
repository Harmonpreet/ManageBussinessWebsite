<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sitedata');
$email=$_POST['email'];
$password=$_POST['password'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$q="insert into data(name, email, password, mobile) values('$name','$email','$password','$mobile' )";
mysqli_query($con,$q);
 header("Location:login.html");
?>