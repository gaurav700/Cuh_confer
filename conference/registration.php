<?php
include('includes/header.php');
include('dbConnection.php');
?>
<?php
if(isset($_REQUEST['submit'])){
 // Checking for Empty Fields
 if(($_REQUEST['title'] == "") || ($_REQUEST['first'] == "") || ($_REQUEST['last'] == "") || ($_REQUEST['add1'] == "") || ($_REQUEST['add2'] == "") || ($_REQUEST['city'] == "") || ($_REQUEST['state'] == "") || ($_REQUEST['zip'] == "") || ($_REQUEST['email'] == "") || ($_REQUEST['phone'] == "") || ($_REQUEST['date'] == "")){
  // msg displayed if required field missing
  $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
 } else {
   // Assigning User Values to Variable
   $title = $_REQUEST['title'];
   $first = $_REQUEST['first'];
   $last = $_REQUEST['last'];
   $college=$_REQUEST['college'];
   $add1 = $_REQUEST['add1'];
   $add2 = $_REQUEST['add2'];
   $city = $_REQUEST['city'];
   $state = $_REQUEST['state'];
   $zip = $_REQUEST['zip'];
   $email = $_REQUEST['email'];
   $phone = $_REQUEST['phone'];
   $date = $_REQUEST['date'];
   $sql = "INSERT INTO registered_students(title, first, last, college, add1, add2, city, state, zip, email, phone, date) VALUES ('$title','$first', '$last','$college', '$add1', '$add2', '$city', '$state', '$zip', '$email', '$phone', '$date')";
   if($conn->query($sql) == TRUE){
       // below msg display on form submit success
       $passmsg = '<div class="alert alert-success col-sm-8 ml-5 mt-2" role="alert"> Registered Successfully </div>';
      } else {
       // below msg display on form submit failed
       $passmsg = '<div class="alert alert-danger col-sm-8 ml-5 mt-2" role="alert"> Unable to Register </div>';
      }
 }
}
?>
<!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/img10.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">Register Here</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->
	
	 <!--start profile are col 2-->
    <div class="col-sm-9 col-md-9 mt-5 mb-5 wow fadeInUp">
  <form class="mx-5" action="" method="POST">
    <div class="form-group">
       <div class="form-group">
      <label for="inputRequestDescription">Event Name</label>
      <input type="text" class="form-control" id="inputRequestDescription" placeholder="" name="title">
    </div>
    <div class="form-group">
      <label for="inputfirst">First Name</label>
      <input type="text" class="form-control" id="inputRequestDescription" placeholder="First Name" name="first">
    </div>
    <div class="form-group">
      <label for="inputName"> Last Name</label>
      <input type="text" class="form-control" id="inputName" placeholder="Last Name" name="last">
    </div>
	<div class="form-group">
      <label for="inputName">College</label>
      <input type="text" class="form-control" id="inputName" placeholder="College/University Name" name="college">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputAddress">Address Line 1</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="House No. 123" name="add1">
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress2">Address Line 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Railway Colony" name="add2">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" name="city">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <input type="text" class="form-control" id="inputState" name="state">
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip" name="zip" onkeypress="isInputNumber(event)">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="email">
      </div>
      <div class="form-group col-md-2">
        <label for="inputMobile">Mobile</label>
        <input type="text" class="form-control" id="inputMobile" name="phone" onkeypress="isInputNumber(event)">
      </div>
      <div class="form-group col-md-2">
        <label for="inputDate">Date</label>
        <input type="date" class="form-control" id="inputDate" name="date">
      </div>
	  <div class="form-group col-md-2">
        <label for="inputFees">Fees</label>
        <input type="text" class="form-control" id="inputfees" placeholder="Fees" name="fees">
      </div>
    </div>

      <button type="submit" class="btn btn-success" name="submit">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </form>
    <!--end profile area col 2-->
    <?php if(isset($passmsg)) {echo $passmsg; } ?>
    </div>
    <!--end row-->
</div>
<!--end container-->
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