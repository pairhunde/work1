<?php
session_start();
include('conn.php');

if(isset($_SESSION['id'])){
	header('location:home.php');
}
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

			   <header id="header" id="home">
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
				  				<a class="text-uppercase top-head-btn" href="#">Booking course</a>
				  			</div>
				  		</div>			  					
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
                            <div id="logo">
				        <a href="index.html"><span style="font-family:OCR A; font-size:25px; color:black"><img src="img/logo.JPG" >AIRHCO</span><br><span style="font-family:OCR A; font-size:10px; color:black">Processing ideas for a better future </span></a>
                              </div>	 
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Home</a></li>
				          <li><a href="about.html">About</a></li>
				          <li><a href="services.html">Service</a></li>
				          <li class="menu-has-children">Educational/Training
				            <ul>
				              <li><a href="educationalandtraining.html">Courses</a></li>
				              <li><a href="register.php">Register</a></li>
				              <li><a href="login.php">Login</a></li>
				            </ul>
				            </ul>
				          </li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
            <!-- Start banner Area -->
			<div class="container">
				<div class="row">
                <br>
                <br>
                <br>
				</div>
				<div class="section-top-border">
						<div class="row height align-items-center justify-content-center">
							<div class="col-lg-4 col-md-4">
                                <hr>
								<h3 class="mb-30">Login</h3>
									<?php
						if(isset($_SESSION['log_msg'])){
							?>
							<div style="height: 30px;"></div>
							<div class="alert alert-danger">
								<span><center>
								<?php echo $_SESSION['log_msg'];
									unset($_SESSION['log_msg']); 
								?>
								</center></span>
							</div>
							<?php
						}
					?>	
								<form method="POST" action="login_config.php">
									<div class="mt-10">
										<input type="text" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input">
									</div>
                                    <!-- For Gradient Border Use --> 
                                    
									<div class="mt-10">
                                        <br>
				              <p><a href="elements.html">I have Forgotten my Password?</a></p>
                            </div>
								<hr> 
									
                                <div class="mt-10">
                                        <p>Don' have an account <a href="register.php">Register now</a></p>
                                </div>
                                <br>
						<button type="submit" class="genric-btn success circle arrow">Login<span class="lnr lnr-arrow-right"></span></button>
							
					</form>
							</div>
					</div>	
					</div>	
					</div>	
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
                        <a href="https://twitter.com/AIRHCO_Tech"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/airhco/"><i class="fa fa-instagram"></i></a>
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