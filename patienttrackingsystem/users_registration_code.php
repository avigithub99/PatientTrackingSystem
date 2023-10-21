<?php 
session_start();
include './dbconnect.php';

if(isset($_REQUEST['full_name']))
	$full_name=$_REQUEST['full_name'];
else
	$full_name='null';

if(isset($_REQUEST['email']))
	$email=$_REQUEST['email'];
else
	$email='null';

if(isset($_REQUEST['mobile']))
	$mobile=$_REQUEST['mobile'];
else
	$mobile='null';

if(isset($_REQUEST['password']))
	$password=$_REQUEST['password'];
else
	$password='null';

$qry="insert into users(full_name,email,mobile,password) values('$full_name','$email','$mobile','$password')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>window.location='user_login.php';</script>";
}
 else 
 {
	echo "<script language='javascript'>window.location='users_registration.php?r=0';</script>";
}
mysqli_close($conn);
?>