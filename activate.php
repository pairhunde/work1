<?php
    session_start();
	include('conn.php');
	
	if(isset($_GET['code'])){
	$user=$_GET['uid'];
	$code=$_GET['code'];

	$query=mysqli_query($conn,"select * from user where userid='$user'");
	$row=mysqli_fetch_array($query);

	if($row['code']==$code){
		//activate account
		
					$_SESSION['id'] = $row['email'];
		header('location:mobiledevelopmentregistration.php');
	}
	
	}
?>