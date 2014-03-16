<?php

require_once("includes/global.php");

include("includes/login_process.php");

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Dog Days</title>


<link href="style/main.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/loginval.js"></script>

<?php
if(isset($returnLogin)){
	if($returnLogin==2){
?>
<script type="text/javascript">
	$(document).ready(function() {
		$("#returnError").html('Incorrect Email Address or Password');
		$("#returnError").fadeIn('fast');
	});	
</script>
<?php	
	}elseif ($returnLogin==3){
?>
<script type="text/javascript">
	$(document).ready(function() {
		$("#returnError").html('Please enter both your Email Address and Password');
		$("#returnError").fadeIn('fast');
	});	
</script>
<?php
	}
}
?>

</head>

<body>
<div id="wrap">

<div id="header-wrap">
	<?php include("includes/header.php"); ?>
</div>


<div id="container">

    <div class="content">
    
    	<div class="login-wrap">
    		
    		<h1>Login</h1>
    		
    		<div class="login_error" id="returnError">
                
            	Incorrect Username or Password. <?php echo $returnLogin; ?>
                
            </div>
    		
    		<form action="login.php" method="post">
    		
	    		<div class="login-row">
	    			<input type="text" id="email" name="email" class="reg-textbox login-tb" placeholder="Email Address" />
	    		</div>
	    		
	    		<div class="login-row">
	    			<input type="password" id="pass" name="pass" class="reg-textbox login-tb" placeholder="Password" />
	    		</div>
	    		
	    		<div class="login-row">
	    			<input type="submit" id="submit" name="submit" class="button" value="Login" />
	    		</div>
    		
    		</form>
    		
    	</div>
    
    </div>

</div>

<div id="footer-wrap">
	<?php include("includes/footer.php"); ?>
</div>
    
</div>
</body>
</html>