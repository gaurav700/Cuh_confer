<?php    
define('TITLE', 'Update confer');
define('PAGE', 'edit_confer');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
 // update
 if(isset($_REQUEST['update'])){
  // Checking for Empty Fields
  if(($_REQUEST['title'] == "") || ($_REQUEST['organiser'] == "") || ($_REQUEST['from_date'] == "") || ($_REQUEST['to_date'] == "") || ($_REQUEST['time'] == "") || ($_REQUEST['description'] == "") || ($_REQUEST['link'] == "") ){
   // msg displayed if required field missing
   $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    // Assigning User Values to Variable
   $sr_no = $_REQUEST['sr_no'];
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
  $sql = "UPDATE conference SET  title= '$title', organiser = '$organiser', from_date = '$from_date', to_date = '$to_date' , time= '$time', description = '$description', link = '$link' , venue='$venue' ,fees='$fees', photo='$photo' WHERE sr_no = '$sr_no'";
    if($conn->query($sql) == TRUE){
     // below msg display on form submit success
     $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
    } else {
     // below msg display on form submit failed
     $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
    }
  }
  }
 ?>
<div class="col-sm-9 mt-80  mx-3 jumbotron">
  <h3 class="text-center">Update Conference Details</h3>
  <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM conference WHERE sr_no = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
  <form action="" method="POST">
   <div class="form-group">
      <label for="sr_no">Sr  No.</label>
      <input type="text" class="form-control" id="sr_no" name="sr_no" value="<?php if(isset($row['sr_no'])) {echo $row['sr_no']; }?>"
        readonly>
    </div>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="<?php if(isset($row['title'])) {echo $row['title']; }?>">
    </div>
    <div class="form-group">
      <label for="organiser">Organiser</label>
      <input type="text" class="form-control" id="organiser" name="organiser" value="<?php if(isset($row['organiser'])) {echo $row['organiser']; }?>">
    </div>
    <div class="form-group">
      <label for="from_date">From Date</label>
      <input type="date" class="form-control" id="from_date" name="from_date" value="<?php if(isset($row['from_date'])) {echo $row['from_date']; }?>">
    </div>
    <div class="form-group">
      <label for="to_date">To Date</label>
      <input type="date" class="form-control" id="to_date" name="to_date" value="<?php if(isset($row['to_date'])) {echo $row['to_date']; }?>"
        onkeypress="isInputNumber(event)">
    </div>
    <div class="form-group">
      <label for="time">Time</label>
      <input type="time" class="form-control" id="time" name="time" value="<?php if(isset($row['time'])) {echo $row['time']; }?>">
    </div>
	<div class="form-group">
      <label for="description">Description</label>
      <input type="text" class="form-control" id="description" name="description" value="<?php if(isset($row['description'])) {echo $row['description']; }?>">
    </div>
    <div class="form-group">
      <label for="link">Link</label>
      <input type="text" class="form-control" id="link" name="link" value="<?php if(isset($row['link'])) {echo $row['link']; }?>">
    </div>
	 <div class="form-group">
      <label for="venue">Venue</label>
      <input type="text" class="form-control" id="venue" name="venue" value="<?php if(isset($row['venue'])) {echo $row['venue']; }?>">
    </div>
	 <div class="form-group">
      <label for="fees">Fees</label>
      <input type="text" class="form-control" id="fees" name="fees" value="<?php if(isset($row['fees'])) {echo $row['fees']; }?>">
    </div>
	 <div class="form-group">
      <label for="photo">Photo</label>
      <input type="file" class="form-control" id="photo" name="photo" value="">
    </div>
    <div class="text-center">
      <button type="submit" class="btn confer-btn mt-4 wow fadeInUp" data-wow-delay="100ms" id="update" name="update">Update</button>
      <a href="confer.php" class="btn confer-btn mt-4 wow fadeInUp box" data-wow-delay="100ms">Close</a>
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