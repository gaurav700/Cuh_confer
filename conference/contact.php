	<!--include header files here->
<?php
include('includes/header.php');
?>


    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/img4.jpeg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Contact</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Area Start -->
    <section class="contact--us-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Contact Us Thumb -->
                <div class="col-12 col-lg-6">
                    <div class="contact-us-thumb mb-100">
                        <img src="img/bg-img/44.jpg" alt="">
                    </div>
                </div>
<!--contactus form -->
              <?php
					include('contactus.php');
			?>
			<!--end contact us form-->

            </div>
        </div>
    </section>
    <!-- Contact Us Area End -->

    <!-- Map Area -->
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3511.2546428899827!2d76.131507050228!3d28.35115000342618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39129577ce587a0b%3A0xbdc1de187d4dccf9!2sCentral%20University%20of%20Haryana!5e0!3m2!1sen!2sin!4v1600920909249!5m2!1sen!2sin"  allowfullscreen></iframe>
    </div>

    <!-- Contact Info Area -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact--info-area bg-boxshadow">
                    <div class="row">
                        <!-- Single Contact Info -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-contact--info text-center">
                                <!-- Contact Info Icon -->
                                <div class="contact--info-icon">
                                    <img src="img/core-img/icon-5.png" alt="">
                                </div>
                                <h5> Jant-Pali, Mahendergarh
								Haryana</h5>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-contact--info text-center">
                                <!-- Contact Info Icon -->
                                <div class="contact--info-icon">
                                    <img src="img/core-img/icon-6.png" alt="">
                                </div>
                                <h5>0124-2350283, 2350284</h5>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-contact--info text-center">
                                <!-- Contact Info Icon -->
                                <div class="contact--info-icon">
                                    <img src="img/core-img/icon-7.png" alt="">
                                </div>
                                <h5>vc@cuh.ac.in</h5>
                            </div>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="single-contact--info text-center">
                                <!-- Contact Info Icon -->
                                <div class="contact--info-icon">
                                    <img src="img/core-img/icon-8.png" alt="">
                                </div>
                                <h5>www.cuh.ac.in</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--include footer area-->
	<?php
	include('includes/footer.php')
	?>

 