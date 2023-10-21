<?php 
session_start();$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'medicalteamdb';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(! $conn ){
	die('Could not connect: ' . mysqli_error());
}

if(isset($_REQUEST['doctor_name']))
	$doctor_name=$_REQUEST['doctor_name'];
else
	$doctor_name='null';

if(isset($_REQUEST['specialization']))
	$specialization=$_REQUEST['specialization'];
else
	$specialization='null';

$qry="select * from doctors where doctor_name='".$doctor_name."' and specialization='".$specialization."'";
$rs=mysqli_query($conn, $qry);
 if($row = mysqli_fetch_assoc($rs))
{
	
			
			$_SESSION['doctor_name']=$doctor_name;			
			$_SESSION['specialization']=$specialization; 
 echo "<script language='javascript'>alert('Login Successful');window.location='doctors_login.php';</script>";}
 else 
 {
	 echo "<script language='javascript'>window.location='doctors_login.php?msg=Invalid username/password';</script>";}
mysqli_close($conn);
?>