<?php
	session_start();
    include "conn.php";


if(isset($_POST["submit_odr"])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $email = $_SESSION["id"];
	$errors = array();
	$response = array();
	
    
	if(empty($first_name) || empty($last_name) || empty($phone) || empty($address)|| empty($state)){ 

	
		if(empty($first_name)){
			$errors["first_name"] = "* first name is required";
		}
	
		if(empty($last_name)){
			$errors["last_name"] = "* last name is required";
        }
	
		if(empty($phone)){
			$errors["phone"] = "* phone is required";
        }
        
        if(empty($address)){
			$errors["address"] = "* address is required";
		}
	
		if(empty($state)){
			$errors["state"] = "* state is required";
		}
	
        $errors["id"] = $_SESSION["id"];
        
		$response["errors"] = $errors;

		$response["success"] = false;
		echo json_encode($response);
	}elseif(!empty($first_name) && !empty($last_name) && !empty($phone) && !empty($address) && !empty($state)){

        
        if(isset($email)){
            $bytes = random_bytes(5);
            $reg_numb = bin2hex($bytes);
            $_SESSION['reg_numb'] = $reg_numb;

            $working = "its working";
            $response["working"] = $working;
            $sql = "UPDATE user SET first_name = '$first_name',last_name='$last_name',phone_number='$phone',reg_numb='$reg_numb',add_ress='$address',city='$state' 
WHERE email = '$email'";
            $run_query = mysqli_query($conn,$sql);
            if($run_query){
            $worked = "Updated";
            $response["worked"] = $worked;
            $response["success"] = true;
            echo json_encode($response);
            
        }
        }
		

	}

}

?>


