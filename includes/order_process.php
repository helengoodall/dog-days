<?php
			
			include("includes/encryption_class.php");
			include("includes/connect.php");
			
			$crypt = new encryption_class();

			$key = "A-COMPLETELY-RANDOM-KEY-THAT-I-HAVE-USED";
			$min_length = 8;
			
			
			
			$findlastid = $db->query("SELECT order_id FROM `order` ORDER BY order_id DESC LIMIT 1");
			$lastid = $findlastid->fetch_assoc();
			
			$order_id = $lastid["order_id"] + 1;
			
			$encrypt_result = $crypt->encrypt($key, $order_id, $min_length); 
			
			$userid = $user->user_id();
			$date = time();
			$delivery_method = $_SESSION["checkout"]["delivery_method"];
			$card_id = $_SESSION["checkout"]["card_id"];
			
			$add = $db->query("INSERT INTO `order` (order_id_user, user_id, card_id, delivery_method, order_date) 
			VALUES ('".$encrypt_result."', '".$userid."', '".$card_id."', '".$delivery_method."', '".$date."')");
			
			$getbasket = $db->query("SELECT * FROM basket WHERE user_id='".$userid."'");
			
			while($basket = $getbasket->fetch_assoc()){
					
				$insert = $db->query("INSERT INTO order_detail (order_id, product_id, quantity)
				VALUES ('".$order_id."', '".$basket['product_id']."', '".$basket['quantity']."')");
				
			}
			
			$delete = $db->query("DELETE FROM basket WHERE user_id='".$userid."'");

?>