<?php
define('TITLE', 'Work Order');
define('PAGE', 'events');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
?>

<div class="col-sm-6 mx-3" style="margin-top:120px;">
 <h3 class="text-center">View Webinar Details</h3>
 <?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM webinar WHERE sr_no = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
 <table class="table table-bordered">
  <tbody>
   <tr>
    <td>Title</td>
    <td>
     <?php if(isset($row['title'])) {echo $row['title']; }?>
    </td>
   </tr>
   <tr>
    <td>Organiser</td>
    <td>
     <?php if(isset($row['organiser'])) {echo $row['organiser']; }?>
    </td>
   </tr>
   <tr>
    <td>Date</td>
    <td>
     <?php if(isset($row['date'])) {echo $row['date']; }?>
    </td>
   </tr>
   <tr>
    <td>Description</td>
    <td>
     <?php if(isset($row['description'])) {echo $row['description']; }?>
    </td>
   </tr>
   <tr>
    <td>Link</td>
    <td>
     <?php if(isset($row['link'])) {echo $row['link']; }?>
    </td>
   </tr>
   <tr>
    <td>Time</td>
    <td>
     <?php if(isset($row['time'])) {echo $row['time']; }?>
    </td>
   </tr>
   <tr>
    <td>Venue</td>
    <td>
     <?php if(isset($row['venue'])) {echo $row['venue']; }?>
    </td>
   </tr>
   
  </tbody>
 </table>
 <div class="text-center">
  <form class='d-print-none d-inline mr-3'><input class='btn btn-success' type='submit' value='Print' onClick='window.print()'></form>
  <form class='d-print-none d-inline' action="webinar.php"><input class='btn btn-secondary' type='submit' value='Close'></form>
 </div>
</div>

<?php
include('includes/footer.php'); 
?>