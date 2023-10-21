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

<div class="container login-form mx-auto" style="width:40%">
    <form name='f1' method='post' action="user_login_code.php" enctype="">
	<div class='row'>
		<div class='col-md-12'>
			<img src='./images/title1.png'>
		</div>
	
		<div class='row'>
			<div class='col-md-12'>
        		<p class='display-6 text-center'>User Login</p>  
			</div>
		</div>

         
		<div class='row'>
			<div class='col-md-12'>
				<label for='email'>E-Mail</label>
				<input type='email' class='form-control' id='email' placeholder='Enter email' name='email' required >
			</div>
		</div>
		<div class='row'>
			<div class='col-md-12'>
				<label for='password'>Password</label>
				<input type='password' class='form-control' id='password' placeholder='Enter password' name='password' required >
			</div>
		</div>
		
		<br>
        <div class="form-group"><br>
        <center>    <button type="submit" class="btn btn-primary btn-block">Login</button></center><br>
        </div>
    </form>
    <p class="text-center"><a href="users_registration.php">New Patient? Register Here</a></p>
</div>
<br><center>
		<?php
			if(isset($_REQUEST['r']) && $_REQUEST['r']==0){
				echo "<h3 class='display-6 text-danger'>Invalid username/password</h3>";
			}

		?>

			</center>
</body>
</html>                                		                            