<?php

	if(isset($_POST['submit'])){
		
		$email = $_POST['email'];
		$fname = $_POST['first_name'];
		$lname = $_POST['last_name'];
		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];
		$city = $_POST['city'];
		$postcode = $_POST['postcode'];
		$country = $_POST['country'];
		
		$userid = $user->user_id();
		
		$userdata = array(
			'user_id' => $userid,
			'email' => $email,
			'first_name' => $fname,
			'last_name' => $lname,
			'addr1' => $address1,
			'addr2' => $address2,
			'city' => $city,
			'postcode' => $postcode,
			'country' => $country
		);
		 
		echo $user->update_user($userdata);
		
		
		
	}

?>