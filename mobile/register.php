<?php

require_once("includes/global.php");

include ("includes/register_process.php");

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PetsUK</title>


<link href="style/Mobmain.css" rel="stylesheet" type="text/css" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/regvalidation.js"></script>

</head>

<body>
<div id="wrap">

<div id="header-wrap">
	<?php include("includes/header.php"); ?>
</div>
<div id="nav-wrap">
	<menu>
        </div>
		<nav class="vertical menu">
            <ul>
                <li><a href="category.php?id=1">Dogs</a></li>
                <li><a href="category.php?id=2">Cats</a></li>
                <li><a href="category.php?id=3">Fish</a></li>
                <li><a href="category.php?id=4">Small Pets</a></li>
                <li><a href="category.php?id=5">Horse</a></li>
                <li><a href="adoption.php">Adoption</a></li>
            </ul>
        </nav> 
        <div class="clear"></div>
         </menu>
</div>

<div id="container">

    <div class="content">
    
    	<form action="register.php" method="POST">
    		
    		<div class="reg-wrap">
    			
    			<h1>Create Account</h1>
    			
	    		<div class="reg-row">
	    			<div class="reg-left">
	    				<input type="text" name="email" id="email" class="reg-textbox" placeholder="Email Address"/>
	    			</div>
	    			<div class="reg-tip" id="reg_emailtip">
	    				Please enter your email address
	    			</div>
	    		</div>
	    		
	    		<div class="reg-row">
	    			<div class="reg-left">
	    				<input type="text" name="fname" id="fname" class="reg-textbox" placeholder="First Name"/>
	    			</div>
	    			<div class="reg-tip" id="reg_fnametip">
	    				Please enter your first name
	    			</div>
	    		</div>
	    		
	    		<div class="reg-row">
	    			<div class="reg-left">
	    				<input type="text" name="lname" id="lname" class="reg-textbox" placeholder="Last Name"/>
	    			</div>
	    			<div class="reg-tip" id="reg_lnametip">
	    				Please enter your last name
	    			</div>
	    		</div>
	    		
	    		<div class="reg-break"></div>
	    		
	    		<div class="reg-row">
	    			<div class="reg-left">
	    				<input type="password" name="pass1" id="pass1" class="reg-textbox" placeholder="Choose a password"/>
	    			</div>
	    			<div class="reg-tip" id="reg_pass1tip">
	    				Please enter a password
	    			</div>
	    		</div>
	    		
	    		<div class="reg-row">
	    			<div class="reg-left">
	    				<input type="password" name="pass2" id="pass2" class="reg-textbox" placeholder="Confirm Password"/>
	    			</div>
	    			<div class="reg-tip" id="reg_pass2tip">
	    				Please repeat your password
	    			</div>
	    		</div>
	    		
	    		<div class="reg-break"></div>
	    		
	    		<div class="reg-row">
	    			<div class="reg-left">
	    				<input type="text" name="address1" id="address1" class="reg-textbox" placeholder="Address 1"/>
	    			</div>
	    			<div class="reg-tip" id="reg_address1tip">
	    				Please enter your address
	    			</div>
	    		</div>
	    		
	    		<div class="reg-row">
	    			<div class="reg-left">
	    				<input type="text" name="address2" id="address2" class="reg-textbox" placeholder="Address 2"/>
	    			</div>
	    		</div>
	    		
	    		<div class="reg-row">
	    			<div class="reg-left">
	    				<input type="text" name="city" id="city" class="reg-textbox" placeholder="City"/>
	    			</div>
	    			<div class="reg-tip" id="reg_citytip">
	    				Please enter your city
	    			</div>
	    		</div>
	    		
	    		<div class="reg-row">
	    			<div class="reg-left">
	    				<input type="text" name="postcode" id="postcode" class="reg-textbox" placeholder="Postal Code"/>
	    			</div>
	    			<div class="reg-tip" id="reg_postcodetip">
	    				Please enter your postcode
	    			</div>
	    		</div>
	    		
	    		<div class="reg-row">
	    			<div class="reg-left">
	    				<input type="text" name="country" id="country" class="reg-textbox" placeholder="Country"/>
	    			</div>
	    			<div class="reg-tip" id="reg_countrytip">
	    				Please enter your country
	    			</div>
	    		</div>
	    		
	    		<div class="reg-row">
	    			<div class="reg-submit">
	    				<input type="submit" name="submit" id="submit" class="button">
	    			</div>
	    		</div>
	    		
    		</div>
    		
    	</form>
    
    </div>

</div>

<div>
	<?php include("includes/footer.php"); ?>
</div>
    
</div>
</body>
</html>