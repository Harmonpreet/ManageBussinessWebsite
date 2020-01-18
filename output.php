<?php

session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'sitedata');


$q="select * from data";
$result=mysqli_query($con,$q);

while( $row= mysqli_fetch($result))
{
	echo $row;
}


?>