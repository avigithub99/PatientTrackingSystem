<?php session_start(); ?>
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
    <h2>Edit Doctor</h2>
        <form name='f1' method='post' action="#" enctype="">
<?php			
$qry="select doctor_id,doctor_name,specialization,email,mobile,password from doctors where doctor_id='".$_REQUEST['doctor_id']."'";
$rs=mysqli_query($conn, $qry);
if (mysqli_num_rows($rs) > 0) 
{
	$i=1;
	if($row = mysqli_fetch_assoc($rs))
	{
		echo "<div class='row'>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Doctor Id</label>";
		echo "<input type='text' class='form-control' name='doctor_id' value='".$row['doctor_id']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Doctor Name</label>";
		echo "<input type='text' class='form-control' name='doctor_name' value='".$row['doctor_name']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Specialization</label>";
		echo "<input type='text' class='form-control' name='specialization' value='".$row['specialization']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Email</label>";
		echo "<input type='text' class='form-control' name='email' value='".$row['email']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Mobile</label>";
		echo "<input type='text' class='form-control' name='mobile' value='".$row['mobile']."'>";
		echo "</div>";
		echo "<div class='col-sm-3'>";
		echo "<label class='form-check-label'>Password</label>";
		echo "<input type='text' class='form-control' name='password' value='".$row['password']."'>";
		echo "</div>";
		echo "</div><hr></hr>";
	}
}


?>
    <br>
    <button type="submit" name='submit' class="btn btn-default btn-outline-primary	">Update</button>
    </form>
       
                  			
<?php
if(isset($_REQUEST['submit']))
{
	$updateqry="update doctors set doctor_name='".$_REQUEST['doctor_name']."' , specialization='".$_REQUEST['specialization']."' , email='".$_REQUEST['email']."' , mobile='".$_REQUEST['mobile']."' , password='".$_REQUEST['password']."'  where doctor_id='".$_REQUEST['doctor_id']."'";;
	if (mysqli_query($conn, $updateqry))
	{
		echo "<script language='javascript'>window.location='view_doctors.php?r=2';</script>";
	}
}
mysqli_close($conn);
?>
   </div>    
    </div>
</body>
</html>
