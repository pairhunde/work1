<?php
session_start();
include "conn.php";



?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/elements/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>AIRHCO</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/nice-select.css">			
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">

    
    </head>
    <body>

              <div class="header-top">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-6 col-sm-8 col-4 header-top-left no-padding">
                              <ul>
                                  <li><a href="tel:+234 8077 403 689"><span class="lnr lnr-phone-handset"> </span><span class="text"> +234 8077 403 689</span></a></li>
                                  <li><a href="mailto:info@airhco.org"><span class="lnr lnr-envelope"> </span><span class="text"> info@airhco.org</span></a></li>
                              </ul>
                          </div>
                          <div class="col-lg-6 col-sm-4 col-8 header-top-right no-padding">
                          </div>
                      </div>			  					
                  </div>
            </div>
           <div class="container main-menu">
                <div class="row align-items-center justify-content-between d-flex">
                 <div id="logo">
				        <a href="index.html"><span style="font-family:OCR A; font-size:25px; color:black"><img src="img/logo.JPG" >AIRHCO</span><br><span style="font-family:OCR A; font-size:10px; color:black">Processing ideas for a better future </span></a>
				      </div>	    		
                </div>
            </div><!-- #header -->
        <!-- Start banner Area -->
            <div class="container">
            <div class="section-top-border">
                    <div class="row container">
                        <div class="col-lg-6 col-md-6">
                            <h3 class="mb-18">Intense Web Development Training</h3>
                            <hr>
                            <form id="update_user" action="">
                                <div class="mt-10">
                                    <div class="first_name" style="color:red;"></div>
                                    <input id="first_name" type="text" name="first_name" placeholder="First Name"  onblur="this.placeholder = 'First Name'" class="single-input">
                                </div>

                                <div class="mt-10">
                                    <div class="last_name" style="color:red;"></div>
                                    <input id="last_name" type="text" name="last_name" placeholder="Last Name"  onblur="this.placeholder = 'Last Name'" class="single-input">
                                </div>

                                <div class="mt-10">
                                    <div class="email" style="color:red;"></div>
                                    <input id="email" type="email" name="EMAIL" placeholder="<?php echo $_SESSION["id"];?>"  onblur="this.placeholder = 'Email address'" class="single-input" disabled>
                                </div>

                                <div class="phone" style="color:red;"></div>
                                <div class="input-group-icon mt-10">    
                                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                    <input id="phone_number" type="text" name="phone_number" placeholder="Phone Number"  onblur="this.placeholder = 'Phone Number'" class="single-input">
                                </div>
                                
                                <div class="address" style="color:red;"></div>
                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                                    <input id="address" type="text" name="address" placeholder="Address"  onblur="this.placeholder = 'Address'" class="single-input">
                                </div>

                                <div class="state" style="color:red;"></div>
                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                    <div class="form-select" id="default-select">
                                        <select name="state" id="state" class="form-control">
                                        <option value="">Choose State</option>
                                        <option value="Abia">Abia</option>
                                        <option value="Akwa Ibom">Akwa Ibom</option>
                                        <option value="Bayelsa">Bayelsa</option>
                                        <option value="Cross River">Cross River</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Imo">Imo</option>
                                        <option value="Rivers">Rivers</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                    <div class="form-select" id="default-select">
                                        <select disabled>
                                            <option value="1">Nigeria</option>
                                        </select>
                                    </div>
                                </div>
                                
                            
                        </div>
                        <div class="col-lg-6 col-md-6 mt-sm-30">
                                <p><strong>Upload Passport Photograph</strong>
                                <br>(.jpg, .png, .img).</p>
                                
                                    <input type="file" class="genric-btn single-input" name="" placeholder="">
                                
                                
                                <!-- For Gradient Border Use -->
                                
                                    <hr>
                                    <p><b>Duration:</b>
                                        <br>Weekdays: 1week/5days</p>
                                            <br>
                                        <h4>Fee: N50,000.00</h4>
                        </div>
                        
                        
                    </div><hr> 
                    <div class="col-lg-10 mt-10 text-right">
                    <button id='place_order_btn' class="genric-btn primary circle arrow" active="yes">Submit<span class="lnr lnr-arrow-right"></span></button>
                    </div>
                    </form>
                </div>
                </div>
        <!-- End banner Area -->
        <!-- Start Sample Area -->
        
        <!-- End Sample Area -->
        
        <!-- Start Align Area -->
        <section class="brand-area pt-40">
            <div class="container">
                <div class="row logo-wrap">
                        <a class="col single-img" href="#">
                            <img class="d-block mx-auto" src="img/l1.PNG" alt="">
                        </a>
                        <a class="col single-img" href="#">
                            <img class="d-block mx-auto" src="img/l2.PNG" alt="">
                        </a>
                        <a class="col single-img" href="#">
                            <img class="d-block mx-auto" src="img/l3.PNG" alt="">
                        </a>
                        <a class="col single-img" href="#">
                            <img class="d-block mx-auto" src="img/l4.PNG" alt="">
                        </a>
                        <a class="col single-img" href="#">
                            <img class="d-block mx-auto" src="img/l5.PNG" alt="">
                        </a>
                </div>	
            </div>	
        </section>
        <!-- End Align Area -->

        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-12">
                        <div class="single-footer-widget">
                            <h6>Contact Us</h6>
                            <p>20 Okabie Rumorosi, Off Psychiatric Road, Rumigbo Port Harcourt, Rivers State.</p>
                            <ul>
                                  <li><a href="tel:+234 8077 403 689"><span class="lnr lnr-phone-handset"></span><span class="text">+234 8077 403 689</span></a></li>
                                  <li><a href="mailto:info@airhco.org"><span class="lnr lnr-envelope"></span><span class="text">info@airhco.org</span></a></li>
                              </ul>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-12">
                    <div class="row">
                    <div class="col-lg-3  col-md-12">
            
                    </div>
                    <div class="col-lg-4  col-md-12">
                        <ul class="footer-nav">
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="educationalandtraining.html">Educational & Training</a></li>
                            </ul>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-3  col-md-12">
                        <div class="single-footer-widget mail-chimp">
                            <div class="footer-social d-flex align-items-center">
                        <a href="https://www.facebook.com/Airhco-Enterprise-559970304525363/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                        </div>
                    </div>						
                </div>

                <div class="footer-bottom d-flex justify-content-between align-items-center flex-wrap">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">&copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | AIRHCO Enterpries</a></p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    
                </div>
            </div>
        </footer>	
        <!-- End footer Area -->	


        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>			
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="mobiledevelopmentregistration.js"></script>
        <script src="js/easing.min.js"></script>			
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>	
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>	
        <script src="js/owl.carousel.min.js"></script>			
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>			
        <script src="js/parallax.min.js"></script>	
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/mail-script.js"></script>				
        <script src="js/main.js"></script>	
    </body>
</html>