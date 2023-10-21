<?php 
include "../dbconnect.php";  
$qry="delete from doctor_schedule where schedule_id= '".$_REQUEST['schedule_id']."'";			
if (mysqli_query($conn, $qry))
{
    echo "<script language='javascript'>window.location='view_schedule.php?r=3';</script>";
}
mysqli_close($conn);
?>