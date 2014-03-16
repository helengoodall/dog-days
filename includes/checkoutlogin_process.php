<?php
	
	if($user->is_loggedin()){
		
		$email = $user->user_email();
		$data = array("email" => $email);
		
		$_SESSION["checkout"] = $data;
		
		header("Location: checkout.php");
		
		
	}
	
	if(isset($_POST["eulogin"])){
		
		if(isset($_POST["email"])){
			
			$user->login_user($_POST["email"], $_POST["pass"]);
			
			if($user->is_loggedin()){
				
				$data = array("email" => $_POST["email"]);
			
				$_SESSION["checkout"] = $data;
				
				header("Location: checkout.php");
				
			}
			
		}
		
	}elseif(isset($_POST["login"])){
		
		if(isset($_POST["email"])){
			
			$data = array("email" => $_POST["email"]);
			
			$_SESSION["checkout"] = $data;
			
			header("Location: checkout.php");
			
		}		
		
	}
	
?>