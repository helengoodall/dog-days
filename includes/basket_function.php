<?php
session_start();

if(isset($_POST["product_id"])){
	
	$product = $_POST["product_id"];
	
	if($_POST["user_id"]!=0){
	
		include 'connect.php';
		
		$user = $_POST["user_id"];
		
		$date = time();
		
		$find = $db->query("SELECT product_id, quantity FROM basket WHERE user_id='".$user."' AND product_id='".$product."'");
		
		if(($find->num_rows) < 1){
			
			$insert = $db->query("INSERT INTO basket (product_id, user_id, quantity, date_added) VALUES ('$product', '$user', '1', '$date')");
			echo "Item added to basket";
			
		}elseif(($find->num_rows) > 0){
			
			$item = $find->fetch_assoc();
			
			$quantity = $item['quantity'];
			$quantity = $quantity + 1;
			
			$update = $db->query("UPDATE basket SET quantity='".$quantity."' WHERE user_id='".$user."' AND product_id='".$product."' ");
			echo "Added another to basket";
			
		}
	
	}else{
		
		if(isset($_SESSION['bag'])){
			
			$bag = $_SESSION['bag'];
			$key = "product_id";
			$exists = false;
			
			for ($i = 0; $i < count($bag); $i++) {
				
				foreach ($bag[$i] as $key => $value) {
  				if($product == $value){
       				$exists = true;
					$qty = $bag[$i]["quantity"];
					$qty = $qty + 1;
					
					$replacement = array($i => array("product_id" => $product, "quantity" => $qty));
					$bag = array_replace($bag, $replacement);
					$_SESSION['bag'] = $bag;
					
					echo "Quantity updated";
  				}
			}
				
			}
			
			if(!$exists){
				
				$data  = array("product_id" => $product,"quantity" => "1");
				array_push($bag,$data);
				
				$_SESSION['bag'] = $bag;
				
				echo "Item added to basket";
				
			}
			
			
			
		}else{
			
			$_SESSION['bag'] = array(
			
				array(
					
					"product_id" => $product,
					"quantity" => "1"
				
				)
			
			);
			
			echo "Item added to basket";
				
		}
		
	}
	
}
    
?>