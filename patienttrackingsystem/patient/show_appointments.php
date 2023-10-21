<html lang="en">
<head>
    <?php include '../head_includes.php';?>
    <?php include 'head_include.php';?>
    <script>
      function setAppointmentDate(){
       // window.alert('ok');
        let doctor = document.getElementById('doctor_name').value;
        const doc = doctor.split("Date: ");
        const ss = doc[1];
        const s = ss.split(" ");
        //window.alert(doc[2]);
        document.getElementById('appointment_date').value = s[0];
      }
    </script>
</head>
<body >
<?php 
    include 'side_menu.php';
?>

<div class="container-fluid main mt-5 ">
<div class="container table-responsive">
<?php
    if(isset($_REQUEST['r']) && $_REQUEST['r'] == 0){
  ?>
  <div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Failed!</strong> Record not added.
  </div>
  <?php
    }
  ?>
<?php
    if(isset($_REQUEST['r']) && $_REQUEST['r'] == 1){
  ?>
  <div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Success!</strong> Record added successfully.
  </div>
  <?php
    }
  ?>
  <?php
    if(isset($_REQUEST['r']) && $_REQUEST['r'] == 2){
  ?>
  <div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Success!</strong> Record updated successfully.
  </div>
  <?php
    }
  ?>

<?php
    if(isset($_REQUEST['r']) && $_REQUEST['r'] == 3){
  ?>
  <div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Success!</strong> Record deleted successfully.
  </div>
  <?php
    }
  ?>
  
  <A href='add_appointment.php' class='btn btn-md btn-outline-primary ' data-bs-toggle="modal" data-bs-target="#myModal">Add Appointment</A>
  <br>
<?php
  echo "<br><table class='table table-sm ' id='table_id'>";
  echo "<thead class='table-dark'>";
  echo "<tr><th></th>";
  echo "<th>Book Id</th>";
  echo "<th>Patient Name</th>";
  echo "<th>Appointment Date</th>";
  echo "<th>Appointment Time</th>";
  echo "<th>Doctor Name</th>";
  echo "<th>Purpose</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
include '../dbconnect.php';
$qry="select booking_id, patient_name, appointment_date, appointment_time,doctor_name,purpose from appoint_booking where user_id='".$_SESSION['user_id']."' order by booking_id desc";
$rs=mysqli_query($conn, $qry);

if (mysqli_num_rows($rs) > 0) 
{
    $today =date('Y-m-d');
	while($row = mysqli_fetch_assoc($rs))
	{	

     if($today > $row['appointment_date'] ){
      echo "<tr class='table-danger'><th>&nbsp;</th>";
		 
     }else{
	   echo "<tr><th><A class='btn btn-sm btn-outline-danger' href='show_appointments_code.php?booking_id=".$row['booking_id']."'>Delete</A></th>";
     }
		 echo "<td>".$row['booking_id']."</td>";
     echo "<td>".$row['patient_name']."</td>";
		 echo "<td>".$row['appointment_date']."</td>";
		 echo "<td>".$row['appointment_time']."</td>";
     echo "<td>".$row['doctor_name']."</td>";
     echo "<td>".$row['purpose']."</td>";
	   echo "</tr>";
	}
	
}
echo "</tbody>";

echo "</table>";


?>
   </div>
   <br>
</div>


<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header" style='background-color:#C99A21'>
        <h4 class="modal-title">Book Appointment</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form name='f2' method='post' action='add_appointment_code.php'>
            <div class='row'>
            <div class='col-md-12 mt-3'>
              <label for='doctor_name'>Doctor Name</label>
              <select name='doctor_name' id='doctor_name' class='form-control' onchange='setAppointmentDate()'>
                <option>--select doctor--</option>
              <?php
                    
                    $qry1="SELECT A.doctor_name, A.specialization, B.schedule_date, B.available_time FROM doctors A, doctor_schedule B WHERE B.schedule_date >= '".date('Y-m-d')."' ORDER BY A.doctor_name";

                    $rs1=mysqli_query($conn, $qry1);
                    while($row1 = mysqli_fetch_assoc($rs1))
                    {
                        echo '<option>'.$row1['doctor_name'].'-'.$row1['specialization'].' Date: '.$row1['schedule_date'].' Time: '.$row1['available_time'].'</option>';
                    }


              ?> 
              </select>
              
              </div>

              <div class='col-md-12 mt-3'>
                    <label for='doctor_name'>Patient Name</label>
                    <input type='text' class='form-control' name='patient_name'>
                </div>
                <div class='col-md-12 mt-3'>
                    <label for='appointment_date'>Appointment Date</label>
                    <input type='text' class='form-control' id='appointment_date'  name='appointment_date' required>
                </div>
                
                <div class='col-md-12 mt-3'>
                    <label for='appointment_time'>Appointment Time</label>
                    <input type='text' class='form-control' name='appointment_time'>
                </div>
                
                <div class='col-md-12 mt-3'>
                    <label for='doctor_name'>Purpose</label>
                    <textarea rows='4' class='form-control' name='purpose'></textarea>
                </div>
            </div>
            <br>
                <button type="submit" class="btn btn-default btn-success">Book Appointment</button>
            </div>
        </form>
      </div>

     

    </div>
  </div>
</div>

<?php

mysqli_close($conn);
?>





<script>
  $(document).ready( function () {
    $('#table_id').DataTable({order: []});
    
} );

$(".alert").delay(2000).slideUp(600, function() {
    $(this).alert('close');
});
</script>
		
</body>
</html>
