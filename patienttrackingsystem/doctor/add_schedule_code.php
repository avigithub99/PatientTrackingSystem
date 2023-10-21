<?php 
session_start();
include '../dbconnect.php';

if(isset($_POST['schedule_date']))
	$schedule_date=$_REQUEST['schedule_date'];
else
	$schedule_date='null';

if(isset($_POST['available_time']))
	$available_time=$_REQUEST['available_time'];
else
	$available_time='null';


$qry="insert into doctor_schedule(doctor_id,schedule_date,available_time) values('".$_SESSION['doctor_id']."','$schedule_date','$available_time')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>window.location='view_schedule.php?r=1';</script>";
 }
 else 
 {
	echo "<script language='javascript'>window.location='view_schedule.php?r=0';</script>";
}
mysqli_close($conn);
?>