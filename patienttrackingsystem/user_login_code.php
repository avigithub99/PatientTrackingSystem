<?php 
session_start();
include './dbconnect.php';
if(isset($_REQUEST['email']))
	$email=$_REQUEST['email'];
else
	$email='null';

if(isset($_REQUEST['password']))
	$password=$_REQUEST['password'];
else
	$password='null';

$qry="select * from users where email='".$email."' and password='".$password."'";
$rs=mysqli_query($conn, $qry);
 if($row = mysqli_fetch_assoc($rs))
{
	$_SESSION['user_id']=$row['user_id'];
	$_SESSION['full_name']=$row['full_name'];			
	echo "<script language='javascript'>window.location='patient/user_home.php';</script>";
}
 else 
 {
	 echo "<script language='javascript'>window.location='user_login.php?r=0';</script>";
}
mysqli_close($conn);
?>