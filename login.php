<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sitedata');
$email=$_POST['email'];
$password=$_POST['password'];

$q="select * from data where email='$email' and password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$q2="select name from data where email='$email' and password='$password' limit 1";
$result2=mysqli_query($con,$q2);
$row=mysqli_fetch_assoc($result2);
if($num==1)
{
	$_SESSION['name']=$row['name'];



	header("location:index.php");
}
else
{
	echo "login failed! try again";

}


?>