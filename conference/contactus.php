<?php
include('dbconnection.php');
if(isset($_REQUEST['submit']))
{  //Cheaking for empty field
    if( ($_REQUEST['name1']=="") ||($_REQUEST['email']=="")||
    ($_REQUEST['phone']=="") || ($_REQUEST['message']==""))
    {
         $msg= '<div class="alert alert-warning mt-2" role="alert">
         All Fields are required</div>';
    }
    else
         // submit database to the user
        {
        $Name1 =  $_REQUEST['name1'];
        $Name2 = $_REQUEST['name2'];
		$Phone = $_REQUEST['phone'];
        $Email = $_REQUEST['email'];
        $Message =$_REQUEST['message'];
        $sql="INSERT INTO contactus_tb(name1,name2,email,phone,message)
        VALUES('$Name1','$Name2','$Email',$Phone,'$Message')";
        // message show for successful email id alerdy or unable to create account
        if( $conn->query($sql)== TRUE)
            {
                    $msg= '<div class="alert alert-success mt-2"
                    role="alert">Send Successfully</div>';
            }
        else
            {
                    $msg= '<div class="alert alert-danger mt-2"
                    role="alert">Unable To send</div>';
            }
        }
}
?>
 <!-- Contact Form -->
                <div class="col-12 col-lg-6">
                    <div class="contact_from_area mb-100 clearfix">
                        <!-- Contact Heading -->
                        <div class="contact-heading">
                            <h4>Contact us</h4>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae</p>
                        </div>
                        <div class="contact_form">
                            <form action="" method="post">
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name1" id="name" placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="name2" id="name-2" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail" required>
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-30" name="phone" id="phone" placeholder="Your Number">
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control mb-30" id="message" cols="30" rows="6" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" class="btn confer-btn" name="submit">Send Message <i class="zmdi zmdi-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>