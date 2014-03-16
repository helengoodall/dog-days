<?php

require_once("includes/global.php");

include("includes/delivery_process.php");

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
                
                	<?php
        			$del = $_SESSION["checkout"]["delivery_method"];
        			if($del == "Super-Saver Delivery"){
        				
						$delcost = "4.00";
						
        			}elseif($del == "FedEX Priority"){
        				
						$delcost = "10.00";
						
        			}elseif($del == "FedEX Standard"){
        				
						$delcost = "6.00";
						
        			}
        			else{
        				
						$delcost = "5.00";
						
        			}

					$total = $user->get_basket_amount();
					$total = $total + $delcost;
					
					
        
        			?>
        			<?php echo $_SESSION["checkout"]["delivery_method"]; ?>
        			<span class="checkout-summary-totalR">£<?php echo number_format($delcost, 2); ?></span>
                
                <div class="checkout-summary-total">
                    Total <span class="checkout-summary-totalR">£<?php echo number_format($total, 2); ?></span>
                </div>
            
            </div>
        	
            <div class="checkout-button">
            	<button type="submit" name="submit" class="button">Continue</button>
            </div>
            
        </div>
        
        
        
        <h1>Payment</h1>
        

        <div id="showcards">
        	<?php include("includes/show_cards.php"); ?>
        </div>
        
        
        <div id="addcardbtn-wrap">
        	<button class="button" type="button" id="addcardbtn">Add New Card</button>
        </div>
        
        <div class="checkout-libox-form left co-del" id="addcard" style="display:none;">
        
        	<ul>
            	<li>
                    <input type="text" class="checkout-tb" id="cd_type" placeholder="Card Type">
                </li>
                <li>
                    <input type="text" class="checkout-tb" id="cd_number" placeholder="Card Number" maxlength="16">
                </li>
                <li>
                    <input type="text" class="checkout-tb" id="cd_name" placeholder="Card Name">
                </li>
                <li>
                    <input type="text" class="checkout-tb" id="expire" placeholder="Expires">
                </li>
                <li>
                    <input type="text" class="checkout-tb" id="sec_code" placeholder="Security Code">
                </li>
                <li>
                	<input type="hidden" id="user_id" value="<?php echo $user->user_id(); ?>">
                    <button class="button" type="button" id="addnewbtn">Add Card</button>
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