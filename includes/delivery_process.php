<?php

	if(isset($_POST['submit'])){
		
		
		if (isset($_POST["delivery"])){
			
			$data  = array(
			
				"delivery_method" => $_POST["delivery"]
			
			);
			
			$_SESSION["checkout"] = $data;
			
		}

		
	}

?>