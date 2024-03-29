<?php

require_once("includes/global.php");

include("includes/checkout_process.php");

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PetsUK</title>


<link href="style/main.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

</head>

<body>
<div id="wrap">

<div id="header-wrap">
	<?php include("includes/header.php"); ?>
</div>
<div id="nav-wrap">
	<?php include("includes/nav.php"); ?>
</div>

<div id="container">

    <div class="content">
    	
        <form action="billing.php" method="post">
        
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
        
        
        
        <h1>Delivery</h1>
        
        <div class="checkout-libox-form left co-del">
        
        	<ul>
            	<li>
                    <input type="radio" name="delivery" value="FedEX Priority" /> FedEX Priority <span class="right">£10.00</span>
                </li>
                <li>
                    <input type="radio" name="delivery" value="FedEX Standard" /> FedEX Standard <span class="right">£6.00</span>
                </li>
                <li>
                    <input type="radio" name="delivery" value="First Class" /> First Class <span class="right">£5.00</span>
                </li>
                <li>
                    <input type="radio" name="delivery" value="Super-Saver Delivery" checked="checcked" /> Super-Saver Delivery <span class="right">£4.00</span>
                </li>
            </ul>
        
        </div>
        
        </form>
    
    </div>

</div>

<div id="footer-wrap">
	<?php include("includes/footer.php"); ?>
</div>
    
</div>
</body>
</html>