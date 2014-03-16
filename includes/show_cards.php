<?php

	if(!isset($user)){
		
		include("user.php");
		
		$user = new user;
		
		include("connect.php");
		include("cryptastic.php");
		
	}else{
		include("includes/connect.php");
		include("includes/cryptastic.php");
	}

	$user_id = $user->user_id();
	
	
	
	//$pass = "9ed9c31e604f1b72cb6c0797dbe859bfaf4eaa9e7328cd072ba4305a67765ccdc928e57ba450bdbe4131cf37e034070f6214a5764a60bc18e8278ec3739f127a";
	//$salt = "dbded3b76d06de0eaa4a3c4f324f888e6a84851cd37b0151ac896b2bd47f62b9cc08a93d0071356c607845d4f90ec8e419ebfd072bfcd8ae99e992f70fc3b590";
		
	//$cryptastic = new cryptastic;

	//$key = $cryptastic->pbkdf2($pass, $salt, 1000, 32) or die("Failed to generate secret key.");

	
	
	$findcard = $db->query("SELECT * FROM card WHERE user_id='".$user_id."'");
	
	if(($findcard->num_rows) > 0){
		
		echo '<div class="checkout-libox-form left co-del">';
		echo '<ul>';
		
		while($card = $findcard->fetch_assoc()){
			
			//$cardno = $cryptastic->decrypt($card['card_number'], $key);
			$cardno = $card["card_number"];
			$cardno = str_split($cardno, 4);
			
			
			echo "<li>";
				echo '<input type="radio" name="card" value="'.$card['card_id'].'" /><span class="card_type">'.$card['card_type'].'</span> 
				 **** **** **** '.$cardno[3].'<span class="right">'.$card['card_name'].'</span>';
			echo "</li>";
			
		}
		
		echo '</ul>';
		echo '</div>';
		
	}else{
		
		echo '<div class="noitems">&bull; You\'ve not added any cards yet</div>';
		
	}

?>