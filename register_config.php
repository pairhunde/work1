<?php
	include('conn.php');
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	function check_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}

	$email=check_input($_POST['email']);
	$password=md5(check_input($_POST['password']));

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  		$_SESSION['sign_msg'] = "Invalid email format";
  		header('location:register.php');
	}

	else{

		$query=mysqli_query($conn,"select * from user where email='$email'");
		if(mysqli_num_rows($query)>0){
			$_SESSION['sign_msg'] = "Email already taken";
  			header('location:register.php');
		}
		else{
		//depends on how you set your verification code
		$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$code=substr(str_shuffle($set), 0, 12);

		mysqli_query($conn,"insert into user (email, password, code) values ('$email', '$password', '$code')");
		$uid=mysqli_insert_id($conn);
		//default value for our verify is 0, means it is unverified

		//sending email verification
		$to = $email;
			$subject = "AIRHCO Intensive Web development Bootcamp";
			$message = "
				<html>
				<head>
				</head>
				<body>
				<header>
			    <div class='container main-menu'>
			    	<div class='row align-items-center justify-content-between d-flex'>
				<div id='logo'>
				<span style='font-family:OCR A; font-size:25px; color:black'><img src='https://airhco.org/img/airhlogo.PNG'>
				<hr>
					</div>	
					</div>
				</div>
				</header>
				<div class='section-top-border'>
						<div class='row height align-items-center justify-content-center'>
							<div class='col-lg-4 col-md-4'>
					<blockquote class='generic-blockquote'>
                    <h4>Thank you for Registering at AIRHCO Intensive Web development bootcamp</h4>
                    <img src='https://airhco.org/img/IMG_3075.JPG'>
					<p style='font-family:OCR A; font-size:19px; color:black'>Your Account:</p>
					<p style='font-family:OCR A; font-size:13px; color:black'>Email: ".$email."</p>
					<p style='font-family:OCR A; font-size:13px; color:black'>Password: ".$_POST['password']."</p>
					<hr>
                    <p style='font-family:tahoma; font-size:13px;'>You are one step from becoming a software developer</p>
                    <p  style='font-family:tahoma; font-size:13px;'> Kindly follow the link below to complete your registration</p>
					<h4><a class='btn' style='bg-color:orange' href='https://airhco.org/activate.php?uid=$uid&code=$code'>Continue Registration</a></h4>
					</blockquote>
					<br>
                    <p style='font-family:tahoma; font-size:13px; text-align:left;' >Kind regards<br><b> AIRHCO Enterprise</b></p>
							</div>
						</div>
				</div>
				<br>
				<br>
				<footer>
				<hr>
				<div class='col-lg-3  col-md-12'>
                        
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<p class='col-lg-8 col-sm-12 footer-text m-0 text-white' style='font-family:OCR A; font-size:13px; color:black'>&copy; <script>document.write(new Date().getFullYear());</script> All rights reserved |AIRHCO Enterpries</p>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						   
                        </div>
                    </div>
				</footer>
				</body>
				</html>
				";
			//dont forget to include content-type on header if your sending html
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: noreply@airhco.org". "\r\n" ;

		mail($to,$subject,$message,$headers);

		$_SESSION['sign_msg'] = "Kindly verify your email to continue your registration.";
  		header('location:register.php');

  		}
	}
	}
?>