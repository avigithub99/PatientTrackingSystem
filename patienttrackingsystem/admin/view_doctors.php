<?php session_start(); ?>
<html lang="en">
<head>
    <?php include '../head_includes.php';?>
    <?php include 'head_include.php';?>
</head>
<body >
<?php 
    include 'side_menu.php';
?>

<div class="container-fluid main mt-5 ">
<div class="container table-responsive">
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
  
  <A href='add_doctor.php' class='btn btn-md btn-outline-primary ' data-bs-toggle="modal" data-bs-target="#myModal">Add Doctor</A>
  <br>
<?php
  echo "<br><table class='table table-sm ' id='table_id'>";
  echo "<thead class='table-dark'>";
  echo "<tr><th></th><th></th>";
  echo "<th>Doctor Id</th>";
  echo "<th>Doctor Name</th>";
  echo "<th>Specialization</th>";
  echo "<th>Email-Id</th>";
  echo "<th>Mobile</th>";
  echo "<th>Password</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
include '../dbconnect.php';
$qry="select doctor_id, doctor_name, specialization, email, mobile, password from doctors";
$rs=mysqli_query($conn, $qry);

if (mysqli_num_rows($rs) > 0) 
{
	
	while($row = mysqli_fetch_assoc($rs))
	{			
	    echo "<tr><th><A class='btn btn-sm btn-outline-success' href='view_doctors_edit_code.php?doctor_id=".$row['doctor_id']."'>Edit</th> <th><A class='btn btn-sm btn-outline-danger' href='view_doctors_code.php?doctor_id=".$row['doctor_id']."'>Delete</A></th>";
		 echo "<td>".$row['doctor_id']."</td>";
		 echo "<td>".$row['doctor_name']."</td>";
		 echo "<td>".$row['specialization']."</td>";
		 echo "<td>".$row['email']."</td>";
		 echo "<td>".$row['mobile']."</td>";
		 echo "<td>".$row['password']."</td>";
	    echo "</tr>";
	}
	
}
echo "</tbody>";

echo "</table>";

mysqli_close($conn);
?>
   </div>
   <br>
</div>



<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      
      <div class="modal-header"  style='background-color:#C99A21'>
        <h4 class="modal-title">New Doctor</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      
      <div class="modal-body">
        <form name='f2' method='post' action='add_doctor_code.php'>
            <div class='row'>
                <div class='col-md-6 mt-3'>
                    <label for='doctor_name'>Doctor Name</label>
                    <input type='text' class='form-control' id='doctor_name' placeholder='Doctor Name' name='doctor_name' required >
                </div>
                <div class='col-md-6 mt-3'>
                    <label for='specialization'>Specialization</label>
                    <select name='specialization' class='form-control'>
                        <option>--select--</option>
                        <option>Cardiology</option>
                        <option>Dermatology</option>
                        <option>Neurology</option>
                        <option>Oncology</option>
                        <option>Otolaryngology</option>
                    </select>
                </div>
                <div class='col-md-6 mt-3'>
                    <label for='doctor_name'>Email-Id</label>
                    <input type='email' class='form-control' id='email' placeholder='Doctor email' name='email' required >
                </div>
                <div class='col-md-6 mt-3'>
                    <label for='doctor_name'>Mobile</label>
                    <input type='number' class='form-control' id='mobile' placeholder='Doctor mobile' name='mobile' required >
                </div>
                <div class='col-md-6 mt-3'>
                    <label for='doctor_name'>Password</label>
                    <input type='text' class='form-control' id='password' placeholder='Doctor password' name='password' required >
                </div>
            </div>
            <br>
                <button type="submit" class="btn btn-default btn-success">Add Doctor</button>
            </div>
        </form>
      </div>

     

    </div>
  </div>
</div>


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
