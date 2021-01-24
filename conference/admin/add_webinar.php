<?php
define('TITLE', 'Add New events');
define('PAGE', 'add_events');
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
 if(($_REQUEST['title'] == "") || ($_REQUEST['organiser'] == "") || ($_REQUEST['date'] == "") ){
  // msg displayed if required field missing
  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
 } else {
   // Assigning User Values to Variable
   $title = $_REQUEST['title'];
   $organiser = $_REQUEST['organiser'];
   $date = $_REQUEST['date'];
   $time = $_REQUEST['time'];
   $description = $_REQUEST['description'];
   $link = $_REQUEST['link'];
    $venue=$_REQUEST['venue'];
   $photo=$_REQUEST['photo'];
   $sql = "INSERT INTO webinar(title, organiser, date,  description, link, time , venue, photo) VALUES ('$title' ,'$organiser', '$date', '$description' , '$link','$time' , '$venue', '$photo')";
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
  <h3 class="text-center">Add New Webinar</h3>
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
      <label for="from_date">Date</label>
      <input type="date" class="form-control" id="date" name="date" onkeypress="isInputNumber(event)">
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
      <label for="photo">Photo</label>
      <input type="file" class="form-control" id="photo" name="photo">
    </div>
    <div class="text-center">
      <button type="submit" class="btn confer-btn mt-4 wow fadeInUp" data-wow-delay="100ms" id="submit" name="submit">Submit</button>
      <a href="webinar.php" class="btn confer-btn mt-4 wow fadeInUp" data-wow-delay="100ms">Close</a>
    </div>
    <?php if(isset($msg)) {echo $msg; } ?>
	<?php  if(isset($_POST['submit'])){
	$file_name= $_FILES['photo']['name'];
	$file_type= $_FILES['photo']['type'];
	$file_size= $_FILES['photo']['size'];
	$file_tem_Loc= $_FILES['photo']['tmp_name'];
	$file_store= "upload/".$file_name;
	move_uploaded_file($file_tem_Loc,$file_store);
			
 }
 ?>
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