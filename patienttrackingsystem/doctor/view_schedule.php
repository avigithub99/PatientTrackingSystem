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
  
  <A href='add_schedule.php' class='btn btn-md btn-outline-primary ' data-bs-toggle="modal" data-bs-target="#myModal">Add Schedule</A>
  <br>
<?php
  echo "<br><table class='table table-sm ' id='table_id'>";
  echo "<thead class='table-dark'>";
  echo "<tr><th></th><th></th>";
  echo "<th>SlNo.</th>";
  echo "<th>Schedule Date</th>";
  echo "<th>Available Time</th>";
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
include '../dbconnect.php';
$qry="select schedule_id, doctor_id, schedule_date, available_time from doctor_schedule where doctor_id='".$_SESSION['doctor_id']."'";
$rs=mysqli_query($conn, $qry);

if (mysqli_num_rows($rs) > 0) 
{
    $i=1;
	while($row = mysqli_fetch_assoc($rs))
	{			
	    echo "<tr><th><A class='btn btn-sm btn-outline-success' href='view_schedule_edit_code.php?schedule_id=".$row['schedule_id']."'>Edit</th> <th><A class='btn btn-sm btn-outline-danger' href='view_schedule_code.php?schedule_id=".$row['schedule_id']."'>Delete</A></th>";
		 echo "<td>".$i++."</td>";
		 echo "<td>".$row['schedule_date']."</td>";
		 echo "<td>".$row['available_time']."</td>";
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

      <div class="modal-header" style='background-color:#C99A21'>
        <h4 class="modal-title">New Schedule</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <form name='f2' method='post' action='add_schedule_code.php'>
            <div class='row'>
                <div class='col-md-12 mt-3'>
                    <label for='schedule_date'>Schedule Date</label>
                    <input type='date' class='form-control' id='schedule_date'  name='schedule_date' required >
                </div>
                
                <div class='col-md-12 mt-3'>
                    <label for='doctor_name'>Available Time</label>
                    <textarea rows='4' class='form-control' name='available_time'></textarea>
                </div>
            </div>
            <br>
                <button type="submit" class="btn btn-default btn-success">Add Schedule</button>
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
