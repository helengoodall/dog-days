<?php

	if(isset($_POST['submit'])){
		
		if (isset($_POST["card"])){
			
			$prev_data = $_SESSION["checkout"];
			
			$data  = array(
			
				"card_id" => $_POST["card"]
			
			);
			
			$new_data = array_merge($prev_data, $data);
			
			$_SESSION["checkout"] = $new_data;
			
		}
		
	}

?>