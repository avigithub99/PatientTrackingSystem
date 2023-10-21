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


<div class="container-fluid main mt-5">

    <div class="container">
    <p class='display-6'>Your Pofile</p>
    <table class='table'>
   <tbody>
        <?php
        $qry="select user_id,	full_name, mobile,	email,	password from users where user_id='".$_SESSION['user_id']."'";
        $rs=mysqli_query($conn, $qry);

        if($row = mysqli_fetch_assoc($rs))
        {			
            echo "<tr></tr>";
            echo "<tr><th>User Id</th><td>".$row['user_id']."</td></tr>";
            echo "<tr><th>Full Name</th><td>".$row['full_name']."</td></tr>";
            echo "<tr><th>Mobile </th><td>".$row['mobile']."</td></tr>";
            echo "<tr><th>Email</th><td>".$row['email']."</td></tr>";
            echo "<tr><th>Password</th><td>".$row['password']."</td></tr>";
            echo "</tr>";

        }
        ?>

    </tbody>
        
    </table>
    <?php
        mysqli_close($conn);
    ?>
  </div>
  <br>

    </div>
</div>
