<?php session_start(); ?>
<html lang="en">
<head>
    <title>Login Form</title>
    <?php 
        include 'head_includes.php';
    ?>
   
</head>
<body>

<?php 
    include 'menu.php';
 ?>
<div class="card container-fluid mt-5 mx-auto" style="width:50%">
    <form name='f1' method='post' action="hospital_login_code.php" enctype="">
        <h3 class="display-5 text-center">Hospital Login</h3>       
         
        <div class='row'>
            <div class='col-md-12'>
                <label>Username</label>
                <input type='text' class='form-control' id='username' placeholder='Username' name='username' required >
            </div>
        </div>
        <div class='row mt-3'>
            <div class='col-md-12'>
                <label for='specialization'>Password</label>
                <input type='password' class='form-control' id='password' placeholder='Password' name='password' required >
            </div>
        </div>
        <div class='row mt-3'>
			<div class='col-md-12'>
				<label for='password'>User Type</label>
                <select class='form-control' name='usertype'>
                    <option>Admin</option>
                    <option>Doctor</option>
                    <option>Ward</option>
                </select>
			</div>
		</div>
        
        <div class='row mt-3'>
            <div class='col-md-12 text-center'>
                
                    <button type="submit" class="btn btn-primary ">&nbsp;Log in&nbsp;</button>
                    <br>
                    <?php
                        if(isset($_REQUEST['r']) && $_REQUEST['r']==0){
                            echo "<h3 class='display-6 text-danger'>Invalid username/password</h3>";
                        }

                    ?>
               
            </div>
        </div>

                      
    </form>
            
</div>
        <br><center>
    <?php
        if(isset($_REQUEST['msg']))
        {
            echo "<br><h2 class='bg-danger'>Invalid Username/Password</h2>";
        } 
    ?>

	</center>
</body>
</html>                                		                            