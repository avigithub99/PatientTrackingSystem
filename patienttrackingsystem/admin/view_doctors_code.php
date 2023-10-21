<?php 
include "../dbconnect.php";  
$qry="delete from doctors where doctor_id= '".$_REQUEST['doctor_id']."'";			
if (mysqli_query($conn, $qry))
{
    echo "<script language='javascript'>window.location='view_doctors.php?r=3';</script>";
}
mysqli_close($conn);
?>