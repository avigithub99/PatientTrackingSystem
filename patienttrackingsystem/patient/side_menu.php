<?php session_start();?>
<div class='row' style='width:100%;height:90px;background-color:#00C4B4'>
    <div class='col-sm-9'>
	    <h1 class='mt-2' style='margin-left:20px;font-family:Arial;font-size:30;color:black'><b>Health First</b></h1>
	    <h2 style='margin-left:20px;margin-top:-15px;font-family:Arial;font-size:22;color:white'><b>Hospitals</b></h2>
    </div>
    <div class='col-sm-3 text-right'>
        <big class='mt-3 text-white'><u>User</u></big>
        <p><?php echo "Full Name: <b class='text-white'>".$_SESSION['full_name']."</b><br>Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b class='text-white'>".$_SESSION['user_id'];?></b></p>
    </div>
<div> 
<div class="sidenav">
  <a href="profile.php" style='color:black'>Profile</a> 
  <hr></hr>
  <a href="show_appointments.php" style='color:black'>Appointment</a>
    <hr></hr>
  <a href="#" style='color:black'>My Records</a>
    <hr></hr>
  <a href="#" style='color:black'>Medication Remainder</a>
    <hr></hr>
  <a href="#" style='color:black'>Send Email</a>
    <hr></hr>
    <a href="#" style='color:black'>Feedback</a>
    <hr></hr>
	<a href="../logout.php" style='color:black'>Logout</a>
	<hr></hr>
</div>