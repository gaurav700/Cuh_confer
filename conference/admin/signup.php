<?php
include('../dbconnection.php');
if(isset($_REQUEST['rSignup']))
{  //Cheaking for empty field
    if(($_REQUEST['aName']=="") ||($_REQUEST['aEmail']=="")||
        ($_REQUEST['aPassword']=="")|| ($_REQUEST['aRepeatPassword']=="") )
        {
             $msg= '<div class="alert alert-warning mt-2" role="alert">
             All Fields are required</div>';
        }
    // cheaking for duplication of email id
    else
        {
         $sql="SELECT a_email FROM admin_tb WHERE
         a_email='".$_REQUEST['aEmail']."'";
         $result=$conn->query($sql);
         if($result->num_rows==1)
         {
             $msg= '<div class="alert alert-danger mt-2"
             role="alert">Email ID ALready Registered</div>';
         }
         else
         // submit database to the user
        {
        $user_name=  $_REQUEST['aName'];
        $user_email= $_REQUEST['aEmail'];
        $user_password= $_REQUEST['aPassword'];
        $sql="INSERT INTO admin_tb(a_name,a_email,a_password)
        VALUES('$user_name','$user_email','$user_password')";
        // message show for successful email id alerdy or unable to create account
       if( $conn->query($sql)== TRUE)
       {
           $msg= '<div class="alert alert-success mt-2"
            role="alert">Account Successfully Created</div>';
       }
       else
       {
           $msg= '<div class="alert alert-danger mt-2"
            role="alert">Unable To Create Account</div>';
       }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/font-awesome.min">
  
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">
	
	 <!-- Title -->
    <title>Admin Login</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/bg-img/img8.png">

  <style>
    .custom-margin {
         margin-top: 8vh;
      }
   </style>
  <title>Sign Up</title>
</head>
<body>
	<!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->
  <div class="mb-3 text-center mt-5" style="font-size: 30px;">
    <i class="fas fa-university"></i>
    <span>Central University Of Haryana</span>
  </div>
<!--user registration from -->
<div class="container pt-3" id="registration">
    <h6 class="text-center" style="font-size:30px;">Create an Account</h6>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="name" 
                    class="font-weight-bold pl-2">Name</label>
                    <input type="text" class="form-control" placeholder="Name"
                     name="aName">
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="email" 
                    class="font-weight-bold pl-2">email</label>
                    <input type="email" class="form-control" placeholder="Email"
                     name="aEmail">
                     <small class="form-text">We'll never share your email with anyone else</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="name" 
                    class="font-weight-bold pl-2">Password</label>
                    <input type="password" class="form-control" placeholder="Password"
                     name="aPassword">
                </div>
				<div class="form-group">
                    <i class="fas fa-key"></i><label for="name" 
                    class="font-weight-bold pl-2">Repeat Password</label>
                    <input type="password" class="form-control" placeholder="Repeat Password"
                     name="aRepeatPassword">
                </div>
                <button type="submit" class="btn confer-btn mt-10 wow fadeInUp" data-wow-delay="100ms" name="rSignup">Sign Up<i class="zmdi zmdi-long-arrow-right"></i></button> <br>
                <em style="font-size:10px">Note - By clicking Sign Up,
            you agree to our Terms, Data Policy and Cookie Policy</em>
        <?php
        if(isset($msg))
        {
            echo $msg;
        }
            ?>
            </form>
        </div>
    </div>
</div>
 <!-- Boostrap JavaScript -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>
   <!-- All Plugins -->
    <script src="../js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="../js/default-assets/active.js"></script>
</body>

</html>
