<?php 
include "../dbconnect.php";  
$qry="delete from appoint_booking where booking_id= '".$_REQUEST['booking_id']."'";
if (mysqli_query($conn, $qry))
{
    echo "<script language='javascript'>window.location='show_appointments.php?r=3';</script>";
}
mysqli_close($conn);
?>