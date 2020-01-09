<?php
	include('conn.php');
	session_start();
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}

		$email=check_input($_POST['email']);
		$password=md5(check_input($_POST['password']));

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$_SESSION['log_msg'] = "Invalid email format";
  			header('location:index.php');
		}
		else{
			$query=mysqli_query($conn,"select * from user where email='$email' and password='$password'");
			if(mysqli_num_rows($query)==0){
				$_SESSION['log_msg'] = "User not found";
  				header('location:login.php');
				
			}
			else{
				$row=mysqli_fetch_array($query);
				if($row['verify']==0){
					$_SESSION['id']=$row['email'];
					$_SESSION['log_msg'] = "Please activate account";
  					header('location:initialize.php');
				}
				else{
					$_SESSION['id']=$row['email'];
					$_SESSION['fname']=$row['first_name'];
					$_SESSION['lname']=$row['last_name'];
					$_SESSION['Phonenumb']=$row['phone_number'];
					$_SESSION['Regno']=$row['reg_numb'];
					$_SESSION['camplocat']=$row['camp_location'];
					$_SESSION['sta_date']=$row['start_date'];
					$_SESSION['en_date']=$row['end_date'];
					$query=mysqli_query($conn,"select * from  mobiledevelopment where verify='1'");
					$row=mysqli_fetch_array($query);
					$_SESSION['courseid']='<b class="mb-30" style="font-size:20px;font-weight:bold">'.$row['descript'].'</b><br><strong style="font-weight:bold">Course Code: </strong>'. 
					$row['course_code'].'<br><strong style="font-weight:bold">'.$row['course_id'].'</strong><br>'.$row['cert'].'<hr>';
					
					$query=mysqli_query($conn,"select * from  weddesignanddevelopment where verify='1'");
					$row=mysqli_fetch_array($query);
					$_SESSION['courseid2']='<b class="mb-30" style="font-size:20px;font-weight:bold">'.$row['descript'].'</b><br><strong style="font-weight:bold">Course Code: </strong>'. 
					$row['course_code'].'<br><strong style="font-weight:bold">'.$row['course_id'].'</strong><br>'.$row['cert'].'<hr>';
					
					$query=mysqli_query($conn,"select * from  advancewebdesignanddevelopment where verify='1'");
					$row=mysqli_fetch_array($query);
					$_SESSION['courseid3']='<b class="mb-30" style="font-size:20px;font-weight:bold">'.$row['descript'].'</b><br><strong style="font-weight:bold">Course Code: </strong>'. 
					$row['course_code'].'<br><strong style="font-weight:bold">'.$row['course_id'].'</strong><br>'.$row['cert'].'<hr>';
					
					header('location:home.php');
				}
			}
		}

	}
?>