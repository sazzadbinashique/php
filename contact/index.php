<?php
include ('../template-parts/header.php')
?>

<!--Price Contact Section-->
<section class="contact-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <?php

                $Msg = "";
                $alert="";
                if(isset($_GET['error']))
                {
                    $Msg = " Please Fill in the Blanks ";
                    $alert= 'danger';
                }
                if(isset($_GET['success']))
                {
                    $Msg = " Your Message Has Been Sent ";
                    $alert= 'success';
                }
                if(isset($_GET['not_sent']))
                {
                    $Msg = "Message could not be sent ";
                    $alert= 'danger';
                }
                if(isset($_GET['email']))
                {
                    $Msg = "Please type a valid email number ";
                    $alert= 'danger';
                }
                if(isset($_GET['phone']))
                {
                    $Msg = "Please type a valid phone number ";
                    $alert= 'danger';
                }
                if (!empty($Msg)){
                    echo '<div class="alert alert-'.$alert.' alert-dismissible fade show text-center">'.$Msg.
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>';
                }

                ?>
                <div class="contact-form wow fadeInUp">
                    <form action="process.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control" id="phone" placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <textarea name="message" id="" cols="100" rows="10"  placeholder="Give Us More Details" required></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit"  name="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Contact Section-->

<?php
include ('../template-parts/footer.php')
?>
