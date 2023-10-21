<html lang="en">
<head>
    <?php include '../head_includes.php';?>
    <?php include 'head_include.php';?>
</head>
<body >
<?php 
    include 'side_menu.php';
	include '../dbconnect.php';
?>

<div class="container-fluid main mt-5 ">
<div class="container">
    <h2>Edit Schedule</h2>
	<hr></hr>
        <form name='f1' method='post' action="#" enctype="">
<?php			
$qry="select schedule_id,schedule_date,available_time from doctor_schedule where schedule_id='".$_REQUEST['schedule_id']."'";

$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	$i=1;
	if($row = mysqli_fetch_assoc($rs))
	{
		echo "<div class='row'>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Schedule Id</label>";
		echo "<input type='text' class='form-control' name='schedule_id' value='".$row['schedule_id']."' readonly>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>schedule_date</label>";
		echo "<input type='date' class='form-control' name='schedule_date' value='".$row['schedule_date']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Available Time</label>";
		echo "<input type='text' class='form-control' name='available_time' value='".$row['available_time']."'>";
		echo "</div>";
		echo "</div>";
	}
}


?>
    <br>
    <button type="submit" name='submit' class="btn btn-default btn-outline-primary	">Update</button>
    </form>
       
                  			
<?php
if(isset($_REQUEST['submit']))
{
	$updateqry="update doctor_schedule set schedule_date='".$_REQUEST['schedule_date']."' , available_time='".$_REQUEST['available_time']."'  where schedule_id='".$_REQUEST['schedule_id']."'";;
	if (mysqli_query($conn, $updateqry))
	{
		echo "<script language='javascript'>window.location='view_schedule.php?r=2';</script>";
	}
}
mysqli_close($conn);
?>
   </div>    
    </div>
</body>
</html>
