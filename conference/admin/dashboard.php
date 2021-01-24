<?php
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 $sql = "SELECT * FROM conference";
 $result = $conn->query($sql);
 $totalconfer = $result->num_rows;

 $sql = "SELECT * FROM webinar";
 $result = $conn->query($sql);
 $totalwebinar = $result->num_rows;

 $sql = "SELECT * FROM event";
 $result = $conn->query($sql);
 $totalevent = $result->num_rows;
 
 $sql = "SELECT * FROM workshop";
 $result = $conn->query($sql);
 $totalworkshop = $result->num_rows;
 
 ?>
 <?php
 include('includes/header.php'); 
 ?>

 
	<!--dashboard coloumns-->
	<div class="col-sm-12 col-md-10 wow fadeInUp" style="margin-top:80px;">
  <div class="row mx-5 text-center">
    <div class="col-sm-3 mt-5">
      <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-header">Events</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $totalevent; ?>
          </h4>
          <a class="btn text-white" href="events.php">View</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 mt-5">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Conferences</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $totalconfer; ?>
          </h4>
          <a class="btn text-white" href="confer.php">View</a>
        </div>
      </div>
    </div>
    <div class="col-sm-3 mt-5">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Workshops</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $totalworkshop; ?>
          </h4>
          <a class="btn text-white" href="workshop.php">View</a>
        </div>
      </div>
    </div>
	 <div class="col-sm-3 mt-5">
      <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Webinar</div>
        <div class="card-body">
          <h4 class="card-title">
            <?php echo $totalwebinar; ?>
          </h4>
          <a class="btn text-white" href="webinar.php">View</a>
        </div>
      </div>
    </div>
  </div>
 </div>
</div>
</div>
<?php
include('includes/footer.php'); 
?>

