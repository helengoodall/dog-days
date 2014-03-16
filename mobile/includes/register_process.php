<?php

	if(isset($_POST['submit'])){
		
		$email = $_POST['email'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$pass = $_POST['pass1'];
		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];
		$city = $_POST['city'];
		$postcode = $_POST['postcode'];
		$country = $_POST['country'];
		
		$userdata = array(
			'email' => $email,
			'fname' => $fname,
			'lname' => $lname,
			'pass' => $pass,
			'address1' => $address1,
			'address2' => $address2,
			'city' => $city,
			'postcode' => $postcode,
			'country' => $country
		);
		 
		if ($user->register_user($userdata)==true){
			
			$_SESSION['reg'] = true;
			header("Location: login.php");
			
		}else{
			
			$fail = true;
			echo "fail";
				
		}
		
		
		
	}

?>