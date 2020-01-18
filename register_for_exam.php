<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sitedata');
$fname=$_POST['fname'];
$fnum=$_POST['fnum'];
$course=$_POST['course'];
$batch=$_POST['batch'];
$name=$_SESSION['name'];
$q="update data set father_name='$fname' where name='$name' ";
mysqli_query($con,$q);
$q="update data set course='$course' where name='$name' ";
mysqli_query($con,$q);
$q="update data set batch='$batch' where name='$name' ";
mysqli_query($con,$q);
$q="update data set registred='yes' where name='$name' ";
mysqli_query($con,$q);

$_SESSION['fname']=$fname;
header("Location:index.php");


?>