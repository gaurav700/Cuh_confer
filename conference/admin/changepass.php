<?php
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 $aEmail = $_SESSION['aEmail'];
 if(isset($_REQUEST['passupdate'])){
  if(($_REQUEST['aPassword'] == "")){
   // msg displayed if required field missing
   $passmsg = '<div class="alert alert-warning col-sm-8 ml-5 mt-2" role="alert">All Fields Required</div>';
  } 
  else {
    $sql = "SELECT * FROM admin_tb WHERE a_email='$aEmail'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
     $aPass = $_REQUEST['aPassword'];
     $sql = "UPDATE admin_tb SET a_password = '$aPass' WHERE a_email = '$aEmail'";
      if($conn->query($sql) == TRUE){
       // below msg display on form submit success
       $passmsg = '<div class="alert alert-success col-sm-8 ml-5 mt-2" role="alert"> Updated Successfully </div>';
      } else {
       // below msg display on form submit failed
       $passmsg = '<div class="alert alert-danger col-sm-8 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
   }
}
?>
 <?php
 include('includes/header.php'); 
 ?>

<div class="col-sm-9 col-md-10" style="margin-top:80px;">
  <div class="row">
    <div class="col-sm-6">
      <form class="mt-5 mx-5">
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" value=" <?php echo $aEmail ?>" readonly>
        </div>
        <div class="form-group">
          <label for="inputnewpassword">New Password</label>
          <input type="text" class="form-control" id="inputnewpassword" placeholder="******" name="aPassword">
        </div>
		<button type="submit" class="btn confer-btn mt-10 wow fadeInUp" name="passupdate" data-wow-delay="100ms"> Update</button>
        <button type="reset" class="btn confer-btn mt-10 wow fadeInUp" data-wow-delay="100ms"> Reset</button>
        <?php if(isset($passmsg)) {echo $passmsg; } ?>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<?php
include('includes/footer.php'); 
?>