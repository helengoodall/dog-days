<?php

require_once("includes/global.php");

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PetsUK</title>


<link href="style/Mobmain.css" rel="stylesheet" type="text/css" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

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
    
    	<form action="delivery.php" method="post">
    	
        <div class="right">
        
            <div class="checkout-summary">
            
                <h2>Summary</h2>
                
                <div class="checkout-summary-total">
                    Total <span class="checkout-summary-totalR">£<?php echo $user->get_basket_amount(); ?></span>
                </div>
            
            </div>
        	
            <div class="checkout-button">
            	<button type="submit" name="submit" class="button">Continue</button>
            </div>
            
        </div>
        
        
        
        <h1>Checkout</h1>
        
        <?php
        
        	$data = $_SESSION["checkout"];
			
			if($user->is_loggedin()){
					
					$userdata = $user->user_data();
				
			}
        
        ?>
        
        <div class="checkout-libox-form left">
        
        	<ul>
            	<li>
            		<label class="checkout-label checkout-label2">Email Address</label>
                    <input type="text" class="checkout-tb" id="email" name="email" placeholder="Email Address" value="<?php echo $data["email"]; ?>">
                </li>
                <li>
                	<label class="checkout-label checkout-label2">First Name</label>
                    <input type="text" class="checkout-tb" id="first_name" name="first_name" placeholder="First Name" value="<?php if($user->is_loggedin()){ echo $user->get_first_name(); } ?>">
                </li>
                <li>
                	<label class="checkout-label checkout-label2">Last Name</label>
                    <input type="text" class="checkout-tb" id="last_name" name="last_name" placeholder="Last Name" value="<?php if($user->is_loggedin()){ echo $user->get_last_name(); } ?>">
                </li>
                <li class="lispace"></li>
            	<li>
            		<label class="checkout-label checkout-label2">Address 1</label>
                    <input type="text" class="checkout-tb" id="address1" name="address1" placeholder="Address 1" value="<?php if($user->is_loggedin()){ echo $userdata["address1"]; } ?>">
                </li>
                <li>
                	<label class="checkout-label checkout-label2">Address 2</label>
                    <input type="text" class="checkout-tb" id="address2" name="address2" placeholder="Address 2" value="<?php if($user->is_loggedin()){ echo $userdata["address2"]; } ?>">
                </li>
                <li>
                	<label class="checkout-label checkout-label2">City</label>
                    <input type="text" class="checkout-tb" id="city" name="city" placeholder="City" value="<?php if($user->is_loggedin()){ echo $userdata["city"]; } ?>">
                </li>
                <li>
                	<label class="checkout-label checkout-label2">Postal Code</label>
                    <input type="text" class="checkout-tb" id="postcode" name="postcode" placeholder="Postal Code" value="<?php if($user->is_loggedin()){ echo $userdata["postcode"]; } ?>">
                </li>
                <li>
                	<label class="checkout-label checkout-label2">Country</label>
                    <input type="text" class="checkout-tb" id="country" name="country" placeholder="Country" value="<?php if($user->is_loggedin()){ echo $userdata["country"]; } ?>">
                </li>
                
            </ul>
        
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