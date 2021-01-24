	<!--include header files here->
<?php
include('includes/header.php');
include('dbConnection.php');
?>

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/img10.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Schedule</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Schedule</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Our Schedule Area Start -->
	 <section class="our-schedule-area bg-white section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="100ms">
                        <p>Our Timetable</p>
                        <h4>Schedule Plan</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="100ms" id="conferScheduleTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="first-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">Events</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="second-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">Conferences</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="third-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-three" aria-expanded="true">Webinars</span></a>
                            </li>
							 <li class="nav-item">
                                <a class="nav-link" id="fourth-tab" data-toggle="tab" href="#step-fourth" role="tab" aria-controls="step-fourth" aria-expanded="true">Workshops</span></a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content" id="conferScheduleTabContent">
                        <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="first-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                      <?php
											$sql = "SELECT * FROM event";
											$result = $conn->query($sql);
											if($result->num_rows > 0){
											while($row = $result->fetch_assoc()){
											echo' <div class="single-schedule-area single-page  d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
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
															 <form action="view_event.php" method="POST" class="d-inline">
										<input type="hidden" name="id" value='. $row["sr_no"] .'>
										<button type="submit" class="btn btn-primary" name="view" value="View"  ">View More</button>
										</form>
															</div>';
																				}
																		}
																		?>
                                        <!-- end Single Schedule Area -->
                                         
									</div>

                                  
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="second-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                         <?php
											$sql = "SELECT * FROM conference";
											$result = $conn->query($sql);
											if($result->num_rows > 0){
											while($row = $result->fetch_assoc()){
											echo' <div class="single-schedule-area single-page  d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
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
															 <form action="view_conference.php" method="POST" class="d-inline">
										<input type="hidden" name="id" value='. $row["sr_no"] .'>
										<button type="submit" class="btn btn-primary" name="view" value="View"  ">View More</button>
										</form>
															
															</div>';
																				}
																		} 																		?>
                                        <!-- end Single Schedule Area -->
									</div>

                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-three" role="tabpanel" aria-labelledby="third-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                         <?php
											$sql = "SELECT * FROM webinar";
											$result = $conn->query($sql);
											if($result->num_rows > 0){
											while($row = $result->fetch_assoc()){
											echo' <div class="single-schedule-area single-page  d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
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
																<p><i class="zmdi zmdi-time"></i>'.$row["date"].'  at '.$row["time"].' </p>
																<p><i class="zmdi zmdi-map"></i>'.$row["venue"].'</p>
															</div>
															<!-- Schedule Btn -->
															 <form action="view_webinar.php" method="POST" class="d-inline">
										<input type="hidden" name="id" value='. $row["sr_no"] .'>
										<button type="submit" class="btn btn-primary" name="view" value="View"  ">View More</button>
										</form>
															</div>';
																				}
																		} 
																		?>
                                        <!-- end Single Schedule Area -->
                                    </div>

                                   </div> 
                                </div>
                            </div>
							
							<div class="tab-pane fade" id="step-fourth" role="tabpanel" aria-labelledby="fourth-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                         <?php
											$sql = "SELECT * FROM workshop";
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
																<p><i class="zmdi zmdi-time"></i>'.$row["from_date"].' to '.$row["to_date"].'  at '.$row["time"].' </p>
																<p><i class="zmdi zmdi-map"></i>'.$row["venue"].'</p>
															</div>
															<!-- Schedule Btn -->
															 <form action="view_workshop.php" method="POST" class="d-inline">
										<input type="hidden" name="id" value='. $row["sr_no"] .'>
										<button type="submit" class="btn btn-primary" name="view" value="View"  ">View More</button>
										</form>
															</div>';
																				}
																		} ?>
                                        <!-- end Single Schedule Area -->
                                    </div>

                                    
                                </div>
                            </div>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
    </section>
   
    <!-- Our Schedule Area End -->

    <!-- Map Area Start -->
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3511.2546428899827!2d76.131507050228!3d28.35115000342618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39129577ce587a0b%3A0xbdc1de187d4dccf9!2sCentral%20University%20of%20Haryana!5e0!3m2!1sen!2sin!4v1600920909249!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Map Area End -->

  <!--include footer area-->
	<?php
	include('includes/footer.php')
	?>

 