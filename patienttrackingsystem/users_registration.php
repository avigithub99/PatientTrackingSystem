<!DOCTYPE html>
<html lang="en">
<head>
  <?php
	include 'medical_teamfiles/medical_teamfiles.php';
  ?>
<body style="background-color: bodycolor;background-image: url(images/)">

<?php 
include 'menu.php';
 ?>

<div class="container signup-form" style="background-color: #ffffff;width:45%">
    <form name='f1' method='post' action="users_registration_code.php" enctype="multipart/form-data">
	
 
<div class='row'>
	<div class='col-md-12'>
		<img src='./images/title1.png'>
	</div>
</div>
<div class='row'>
	<div class='col-md-12 text-center'>
	<p class='display-6'>New User Registration</a>
	</div>
</div>		
<div class='row mt-2'>
	<div class='col-md-12'>
	<label for='full_name'>Full Name</label>
		<input type='text' class='form-control' id='full_name' placeholder='Full Name' name='full_name' required >
	</div>
</div>
<div class='row mt-2'>
	<div class='col-md-12'>
		<label for='email'>E-Mail</label>
		<input type='email' class='form-control' id='email' placeholder='Email' name='email' required >
	</div>
</div>
<div class='row mt-2'>
	<div class='col-md-12'>
		<label for='mobile'>Mobile</label>
		<input type='text' class='form-control' id='mobile' placeholder='Mobile' name='mobile' required >
	</div>
</div>
<div class='row mt-2'>
	<div class='col-md-12'>
		<label for='password'>Password</label>
		<input type='password' class='form-control' id='password' placeholder='Password' name='password' required >
	</div>

	<div class='col-md-12 mt-2'>
		<label for='cpassword'>Confirm-password</label>
		<input type='password' class='form-control' id='cpassword' placeholder='Confirm-Password' name='cpassword' onfocusout='Validate()'required >
	</div>
</div>
		<br>
		<div class="form-group mt-2">
        <center>    <button type="submit" class="btn btn-primary btn-md">Create Account</button></center>
        </div>
    </form>
	
</div>
<br><br>
</body>
</html>                            