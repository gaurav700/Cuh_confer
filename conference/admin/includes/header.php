
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Admin Panel</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/bg-img/img8.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">
	
	<!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between " id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.php"><img src="../img/bg-img/img9.png" alt=""  style="height: 70px;width: 350px;"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                       
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
	
	 <!-- Side Bar -->
 <div class="container-fluid mb-5">
  <div class="row">
   <nav class="col-sm-3 col-md-2 sidebar d-print-none" style="margin-top:110px;">
    <div class="sidebar-sticky">
     <ul class="nav flex-column">
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'dashboard') { echo 'active'; } ?> " href="dashboard.php">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'events') { echo 'active'; } ?>" href="events.php">
        <i class="far fa-calendar-alt"></i>
        Events
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'confer') { echo 'active'; } ?>" href="confer.php">
        <i class="fas fa-database"></i>
        Conferences
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'webinar') { echo 'active'; } ?>" href="webinar.php">
        <i class="fab fa-teamspeak"></i>
        Webinar
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'workshop') { echo 'active'; } ?>" href="workshop.php">
        <i class="fas fa-users"></i>
        Workshops
       </a>
      </li>
	  <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'contact us') { echo 'active'; } ?>" href="changepass.php">
        <i class="fas fa-id-card-alt"></i>
        Contact Us
       </a>
      </li>
      <li class="nav-item">
       <a class="nav-link <?php if(PAGE == 'changepass') { echo 'active'; } ?>" href="changepass.php">
        <i class="fas fa-key"></i>
        Change Password
       </a>
      </li>
		<li class="nav-item">
       <a class="nav-link" href="../loginlogout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
       </a>
      </li>
     </ul>
    </div>
   </nav>