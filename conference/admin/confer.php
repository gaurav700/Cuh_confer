<?php
define('TITLE', 'conference');
define('PAGE', 'confer');
include('includes/header.php'); 
include('../dbConnection.php');
session_start();
 if(isset($_SESSION['is_adminlogin'])){
  $aEmail = $_SESSION['aEmail'];
 } else {
  echo "<script> location.href='login.php'; </script>";
 }
?>
<div class="col-sm-9 col-md-10 text-center wow fadeInUp" style="margin-top:120px;">
  <!--Table-->
  <p class=" bg-dark text-white p-2">List of Conferences</p>
  <?php
    $sql = "SELECT * FROM conference";
    $result = $conn->query($sql);
    if($result->num_rows > 0){

  while($row = $result->fetch_assoc()){
   echo' <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
											<!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="img/bg-img/img9.png" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>'. $row["title"].'</h6>
                                                    <p>organised by <span>'.$row["organiser"].'</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i>'.$row["from_date"].' to '.$row["to_date"].' at '.$row["time"].' </p>
                                                <p><i class="zmdi zmdi-map"></i>'.$row["venue"].'</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                             <form action="view_confer.php" method="POST" class="d-inline">
										<input type="hidden" name="id" value='. $row["sr_no"] .'>
										<button type="submit" class="btn btn-success" name="view" value="View"  "><i class="far fa-eye"></i></button>
										</form>
                                      
										<form action="edit_confer.php" method="POST" class="d-inline">
										<input type="hidden" name="id" value='. $row["sr_no"] .'>
										<button type="submit" class="btn btn-primary" name="view" value="View" ><i class="fas fa-pen"></i></button>
										</form>
										
										<form action="" method="POST" class="d-inline">
										<input type="hidden" name="id" value='. $row["sr_no"] .'>
										<button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
										</form>
										
										
		  </div>';
  }

 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
if(isset($_REQUEST['delete'])){
  $sql = "DELETE FROM conference WHERE sr_no = {$_REQUEST['id']}";
  if($conn->query($sql) === TRUE){
    // echo "Record Deleted Successfully";
    // below code will refresh the page after deleting the record
    echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
    } else {
      echo "Unable to Delete Data";
    }
  }
?>
</div>
</div>
<div><a class="btn btn-success mt-4 wow fadeInUp box" data-wow-delay="100ms" href="add_confer.php"><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>

<?php
include('includes/footer.php'); 
?>