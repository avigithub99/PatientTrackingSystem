<?php 
session_start();
include 'dbconnect.php';

if(isset($_POST['username']))
	$username=$_POST['username'];
else
	$username='null';

if(isset($_POST['password']))
	$password=$_POST['password'];
else
	$password='null';

if(isset($_POST['usertype']))
	$usertype=$_POST['usertype'];
else
	$usertype='null';

if($usertype == "Admin"){

$qry="select * from admin where username='".$username."' and password='".$password."'";
$rs=mysqli_query($conn, $qry);
if($row = mysqli_fetch_assoc($rs))
{
    header("Location: ./admin/admin_home.php");
}
 else 
 {
    header("Location: hospital_login.php?r=0");
}

}else if($usertype == "Doctor"){

	$qry="select * from doctors where email='".$username."' and password='".$password."'";
	$rs=mysqli_query($conn, $qry);
	if($row = mysqli_fetch_assoc($rs))
	{
		$_SESSION['doctor_id'] = $row['doctor_id'];
		$_SESSION['doctor_name'] = $row['doctor_name'];
		header("Location: ./doctor/doctor_home.php");
	}
	 else 
	 {
		header("Location: hospital_login.php?r=0");
	}
}	
mysqli_close($conn);
?>