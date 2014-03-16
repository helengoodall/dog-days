<?php

require_once("includes/global.php");

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PetsUK</title>


<link href="style/main.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/billing.js"></script>

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
    	
        <form action="order.php" method="post">
        
        <div class="right">
        
            <div class="checkout-summary">
            
                <h2>Summary</h2>
                1 X Dog Item Food Stuff <span class="checkout-summary-totalR">£0.00</span>
                
                <div class="checkout-summary-total">
                    Total <span class="checkout-summary-totalR">£0.00</span>
                </div>
            
            </div>
        	
            <div class="checkout-button">
            	<button class="button">Continue</button>
            </div>
            
        </div>
        
        
        
        <h1>Payment</h1>
        
        <div class="noitems">&bull; You've not added any cards yet</div>
        
        <button class="button" type="button" id="addcardbtn">Add New Card</button>
        
        <div class="checkout-libox-form left co-del" id="addcard" style="display:none;">
        
        	<ul>
            	<li>
                    <input type="text" class="checkout-tb" id="" placeholder="Card Type">
                </li>
                <li>
                    <input type="text" class="checkout-tb" id="" placeholder="Card Number">
                </li>
                <li>
                    <input type="text" class="checkout-tb" id="" placeholder="Card Name">
                </li>
                <li>
                    <input type="text" class="checkout-tb" id="" placeholder="Expires">
                </li>
                <li>
                    <input type="text" class="checkout-tb" id="" placeholder="Security Code">
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