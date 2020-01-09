<?php
  session_start();
  if(!isset($_SESSION["id"])){
    header("Location:login.php");
  }
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
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
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
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
				  				<a class="text-uppercase top-head-btn" href="#"><?php echo $_SESSION['id']; ?></a>
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
						  <li><a href="logout.php">Logout</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
			<!-- Start banner Area -->
			<div class="container">
				<div class="row">
				<br>
				</div>
				<div class="section-top-border">
						<div class="row">
							<div class="col-lg-6 col-md-4">
                                <hr>
								<blockquote class="generic-blockquote">
										<h5 class="mb-30">Reg No: <?php echo $_SESSION['Regno']; ?></h5>
									<p class="mb-20" style="font-size:14px;color:#999"><span style="font-weight:bold;">FullName:</span> <?php echo $_SESSION['fname']; ?>  <?php echo $_SESSION['lname']; ?></p>
									<p class="mb-20"style="font-size:14px;color:#999"><span style="font-weight:bold;">Email: </span><?php echo $_SESSION['id']; ?></p>
									<p class="mb-20"style="font-size:14px;color:#999"><span style="font-weight:bold;">Phone Number: </span><?php echo $_SESSION['Phonenumb']; ?></p>
									<hr>
									<p class="mb-20"style="font-size:14px;color:#999"><span style="font-weight:bold;">Duration: </span><?php echo $_SESSION['sta_date']; ?>-<?php echo $_SESSION['sta_date']; ?></p>
									<p class="mb-20"style="font-size:14px;color:#999"><span style="font-weight:bold;">center: </span><?php echo $_SESSION['camplocat']; ?></p>
									
									</blockquote>
							</div>
							<div class="col-lg-6 col-md-8 mt-sm-30">
								
								<hr>
								
					<br>
					<blockquote class="generic-blockquote">
							<div class="col-lg-12 col-md-12 mt-sm-30">
								<!-- dynamic text area -->
				<span> <?php echo $_SESSION['courseid']; ?> <?php echo $_SESSION['courseid2']; ?><?php echo $_SESSION['courseid3']; ?></span>
									
								<!-- dynamic text area -->
								</div>
					</blockquote>
						</div>
					</div>	
					</div>	
					</div>		
			
			<!-- facebook widget starts-->
			<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-c8d3cf10-18cf-40b3-b2e8-1cfd8da1d251"></div>
			<!-- facebook widget ends-->
			
			<!--WhatsApp widget starts-->
			
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-e6681cce-9889-4121-9860-aea0c95b8fb5"></div>

			<!--WhatsApp widget ends-->
			
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
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>



