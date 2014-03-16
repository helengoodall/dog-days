<?php

if(isset($_POST["submit"])){
	
		if(
			isset($_POST["inputUserID"]) &&
			isset($_POST["inputEmail"]) &&
			isset($_POST["inputFname"]) &&
			isset($_POST["inputLname"]) &&
			isset($_POST["inputAddr1"]) &&
			isset($_POST["inputCity"]) &&
			isset($_POST["inputPostcode"]) &&
			isset($_POST["inputCountry"])
		){
	
			if (isset($POST["inputAddr2"])){
				
				$addr2 = $POST["inputAddr2"];
				
			}else{
				
				$addr2 = "";
				
			}
	
			$data = array(
			
				"user_id" => $_POST["inputUserID"],
				"email" => $_POST["inputEmail"],
				"first_name" => $_POST["inputFname"],
				"last_name" => $_POST["inputLname"],
				"addr1" => $_POST["inputAddr1"],
				"addr2" => $addr2,
				"city" => $_POST["inputCity"],
				"postcode" => $_POST["inputPostcode"],
				"country" => $_POST["inputCountry"]
			
			);
			
			$update = $user->update_user($data);
		
		}
		
	
	
}

?>