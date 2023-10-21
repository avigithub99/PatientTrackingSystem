<?php 
session_start();
include '../dbconnect.php';

if(isset($_POST['doctor_name']))
	$doctor_name=$_REQUEST['doctor_name'];
else
	$doctor_name='null';

if(isset($_POST['specialization']))
	$specialization=$_REQUEST['specialization'];
else
	$specialization='null';

if(isset($_POST['email']))
	$email=$_REQUEST['email'];
else
	$email='null';

if(isset($_POST['mobile']))
	$mobile=$_REQUEST['mobile'];
else
	$mobile='null';

if(isset($_POST['password']))
	$password=$_REQUEST['password'];
else
	$password='null';

$qry="insert into doctors(doctor_name,specialization,email,mobile,password) values('$doctor_name','$specialization','$email','$mobile','$password')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>window.location='view_doctors.php?r=1';</script>";
 }
 else 
 {
	echo "<script language='javascript'>window.location='view_doctors.php?r=0';</script>";
}
mysqli_close($conn);
?>