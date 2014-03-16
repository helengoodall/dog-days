<?php

if(isset($_POST["submit"])){
	
		if(
			isset($_POST["inputProductID"]) &&
			isset($_POST["inputProduct"]) &&
			isset($_POST["inputDescription"]) &&
			isset($_POST["inputPrice"]) &&
			isset($_POST["inputStock"]) 
			
		){
	
			
				
			}
	
			$data = array(
			
				"product_id" => $_POST["inputProductID"],
				"product_title" => $_POST["inputProduct"],
				"product_description" => $_POST["inputDescription"],
				"price" => $_POST["inputPrice"],
				"stock" => $_POST["inputStock"],
				
			
			);
			
			$update = $product->update_product($data);
		
		}
		
	
	


?>