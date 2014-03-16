<?php

	if(isset($_POST['user_id'])){
		
		$user_id = $_POST['user_id'];
		$cd_name = $_POST['cd_name'];
		$cd_number = $_POST['cd_number'];
		$cd_type = $_POST['cd_type'];
		$sec_code = $_POST['sec_code'];
		$expire = $_POST['expire'];
		$expire = strtotime($expire);
		
		//include("cryptastic.php");
		
		//$pass = "9ed9c31e604f1b72cb6c0797dbe859bfaf4eaa9e7328cd072ba4305a67765ccdc928e57ba450bdbe4131cf37e034070f6214a5764a60bc18e8278ec3739f127a";
		//$salt = "dbded3b76d06de0eaa4a3c4f324f888e6a84851cd37b0151ac896b2bd47f62b9cc08a93d0071356c607845d4f90ec8e419ebfd072bfcd8ae99e992f70fc3b590";
		
		//$cryptastic = new cryptastic;

		//$key = $cryptastic->pbkdf2($pass, $salt, 1000, 32) or
			//die("Failed to generate secret key.");

		//$encrypted = $cryptastic->encrypt($cd_number, $key) or
			//die("Failed to complete encryption.");
		
		include("connect.php");
		$add = $db->query("INSERT INTO card (user_id, card_type, card_number, card_name, security_code, expiry) VALUES
		('".$user_id."', '".$cd_type."', '".$cd_number."', '".$cd_name."', '".$sec_code."', '".$expire."') ");
		
		echo "You card has been added";
		
	}

?>