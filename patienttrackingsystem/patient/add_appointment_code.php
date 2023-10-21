<?php 
session_start();
include '../dbconnect.php';

if(isset($_POST['doctor_name'])){
	$doctor_name=$_POST['doctor_name'];
	$ss = explode('-', $doctor_name);
	$doctor_name = $ss[0];
}else
	$doctor_name='null';

if(isset($_POST['patient_name']))
	$patient_name=$_POST['patient_name'];
else
	$patient_name='null';

if(isset($_POST['appointment_date']))
	$appointment_date=$_POST['appointment_date'];
else
	$appointment_date='null';

if(isset($_POST['appointment_time']))
	$appointment_time=$_POST['appointment_time'];
else
	$appointment_time='null';

if(isset($_POST['purpose']))
	$purpose=$_POST['purpose'];
else
	$purpose='null';

$qry="insert into appoint_booking(user_id,doctor_name,patient_name,appointment_date,appointment_time,purpose) values('".$_SESSION['user_id']."','$doctor_name','$patient_name','$appointment_date','$appointment_time','$purpose')";

if(mysqli_query($conn, $qry))
 {
	 echo "<script language='javascript'>window.location='show_appointments.php?r=1';</script>";
 }
 else 
 {
	echo "<script language='javascript'>window.location='show_appointments.php?r=0';</script>";
}
mysqli_close($conn);
?>