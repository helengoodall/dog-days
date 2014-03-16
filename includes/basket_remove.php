<?php

session_start();

if(isset($_POST["product_id"])){
	
	$product = $_POST['product_id'];
	
	if(isset($_SESSION['bag'])){
		
		$bag = $_SESSION['bag'];
		$key = "product_id";
		
		for ($i = 0; $i < count($bag); $i++) {
			
			foreach ($bag[$i] as $key => $value) {
  				if($product == $value){
					
       				$exists = true;
					$item = $i;

  				}
			}
			
		}
		
		if($exists){
			
			if(count($bag)==1){
				
				unset($_SESSION['bag']);
				
				echo "Your bag is now empty :(";	
				
			}else{
				
				unset($bag[$item]);
				
				$bag = array_values($bag);
				
				$_SESSION['bag'] = $bag;
				
				echo "Item removed";
				
			}
			
		}
		
	}
	
}

?>