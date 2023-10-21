<?php session_start(); ?>
<html lang="en">
<head>
<title>Login Form</title>
<?php 
include '../head_includes.php';
 ?>
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body style="background-color: #ffffff;background-image: url(images/)">

<?php 
include 'doctor_dashboard_menu.php';
 ?>
<div class="login-form" style="background-color: #ffffff;width:%">
    <form name='f1' method='post' action="doctors_login_code.php" enctype="">
        <h3 class="text-center">Doctors Login</h3>       
         
<div class='row'>
	<div class='col-md-12'>
		<label for='doctor_name'>Doctor Name</label>
		<input type='text' class='form-control' id='doctor_name' placeholder='Enter doctor_name' name='doctor_name' required >
	</div>
</div>
<div class='row'><br>
	<div class='col-md-12'>
		<label for='specialization'>Specialization</label>
		<input type='text' class='form-control' id='specialization' placeholder='Enter specialization' name='specialization' required >
	</div>
</div>
				<br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    
</div>
<br><center>
			<?php
if(isset($_REQUEST['msg']))
{
	 echo '<br><h2>Invalid Username/Password</h2>';
} ?>

			</center>
</body>
</html>                                		                            