<?php
define('TITLE', 'Add New Technician');
define('PAGE', 'technician');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
if(isset($_REQUEST['submit'])){
 // Checking for Empty Fields
 if(($_REQUEST['title'] == "") || ($_REQUEST['organiser'] == "") || ($_REQUEST['from_date'] == "") || ($_REQUEST['to_date'] == "") || ($_REQUEST['time'] == "")){
  // msg displayed if required field missing
  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
 } else {
   // Assigning User Values to Variable
   $title = $_REQUEST['title'];
   $organiser = $_REQUEST['organiser'];
   $from_date = $_REQUEST['from_date'];
   $to_date = $_REQUEST['to_date'];
   $time = $_REQUEST['time'];
   $description = $_REQUEST['description'];
   $link = $_REQUEST['link'];
     $venue=$_REQUEST['venue'];
   $photo=$_REQUEST['photo'];
   $fees=$_REQUEST['fees'];
   $sql = "INSERT INTO conference(title, organiser, from_date , to_date,time, description, link, venue,fees, photo) VALUES ('$title' ,'$organiser', '$from_date', '$to_date' ,'$time','$description' , '$link',  '$venue', '$fees', '$photo')";
   if($conn->query($sql) == TRUE){
    // below msg display on form submit success
    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Added Successfully </div>';
   } else {
    // below msg display on form submit failed
    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Add </div>';
   }
 }
 }
?>
<div class="col-sm-9 mt-80 mx-3 jumbotron">
  <h3 class="text-center">Add New Conference</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
      <label for="organiser">Organiser</label>
      <input type="text" class="form-control" id="organiser" name="organiser">
    </div>
    <div class="form-group">
      <label for="from_date">From Date</label>
      <input type="date" class="form-control" id="from_date" name="from_date" onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="to_date">To Date</label>
      <input type="date" class="form-control" id="to_date" name="to_date">
    </div>
	<div class="form-group">
      <label for="time">Time</label>
      <input type="time" class="form-control" id="time" name="time">
    </div>
	<div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
	<div class="form-group">
      <label for="link">Link</label>
      <input type="text" class="form-control" id="link" name="link">
    </div>
	<div class="form-group">
      <label for="venue">Venue</label>
      <input type="text" class="form-control" id="venue" name="venue">
    </div>
	<div class="form-group">
      <label for="fees">Fees</label>
      <input type="text" class="form-control" id="fees" name="fees">
    </div>
	<div class="form-group">
      <label for="photo">Photo</label>
      <input type="file" class="form-control" id="photo" name="photo">
    </div>
    <div class="text-center">
      <button type="submit" class="btn confer-btn mt-4 wow fadeInUp" data-wow-delay="100ms" id="submit" name="submit">Submit</button>
      <a href="confer.php" class="btn confer-btn mt-4 wow fadeInUp" data-wow-delay="100ms">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
	
  </form>
</div>
<!-- Only Number for input fields -->
<script>
  function isInputNumber(evt) {
    var ch = String.fromCharCode(evt.which);
    if (!(/[0-9]/.test(ch))) {
      evt.preventDefault();
    }
  }
</script>
<?php
include('includes/footer.php'); 
?>