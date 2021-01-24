<?php
include('includes/header.php');
include('dbConnection.php');
?>
<?php
 if(isset($_REQUEST['view'])){
  $sql = "SELECT * FROM event WHERE sr_no = {$_REQUEST['id']}";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 }
 ?>
<!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/img10.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Events</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
								 <li class="breadcrumb-item"><a href="index.html">Events</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php if(isset($row['title'])) {echo $row['title']; }?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->
<!-- View Event Form Page-->

	<div class="container wow fadeInUp justify-content-between" style="border: 7px solid #df42b1;
border-radius: 10px;
margin-top: 50px;
margin-bottom: 50px;">

	<h1 style="text-align:center; padding-top:20px;"> <?php if(isset($row['title'])) {echo $row['title']; }?></h1>
	<h4 style="text-align:center; padding-top:20px;">Organiserd by  <?php if(isset($row['organiser'])) {echo $row['organiser']; }?></h4>
	<div class="row">
		<h5 class="col-6" style="padding-top;20px;padding-left:100px;">
		Date : <?php if(isset($row['from_date'])) {echo $row['from_date']; }?> to <?php if(isset($row['to_date'])) {echo $row['to_date']; }?>
		</h5>
		<h5 class="col-6" style="padding-top;20px;padding-left:300px;">
		Time :  <?php if(isset($row['time'])) {echo $row['time']; }?>
		</h5>
    </div>
	
	<h5 style="text-align:center; padding-top:20px;">Venue : <?php if(isset($row['venue'])) {echo $row['venue']; }?><h5>
	<h5 style="text-align:center; padding-top:20px;">Link : <?php if(isset($row['link'])) {echo $row['link']; }?><h5>
	
	<h5 style="text-align:center; padding-top:20px; padding-left:200px;padding-right:200px"> <?php if(isset($row['description'])) {echo $row['description']; }?><h5>
	<div class="text-center">
	 <a href="#" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="100ms">Downlaod PDF </a>
	 <a href="schedule.php" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="100ms">close</a>
	  <a href="registration.php" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="100ms">Register Here</a>
	
	</div>
	</div>	





<?php
include('includes/footer.php');

?>