<?php

	if(isset($_POST['submit'])){
		
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		 
		$returnLogin = $user->login_user($email, $pass);
		
		if($returnLogin=="admin"){
			
			header("Location: admin/");
				
		}else if($returnLogin==1){
			
			header("Location: index.php");
				
		}

	}
	
?>