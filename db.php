<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost","root","pratibhamom","bhawani");
if($con){
	//echo "connected";
}
else{
	echo "Not Connected";
}
?>