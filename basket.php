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
<script src="js/basket.js"></script>
</head>
<?php flush(); ?>
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
        
        <?php echo $user->display_basket(); ?>
        
        <div class="basket-tot">
        	<span class="subtot">Subtotal</span> £<?php echo $user->get_basket_amount(); ?>
        </div>
        <div class="basket-btn">
        	<a href="checkout-login.php" class="button">Checkout</a>
        </div>
    
    </div>

</div>

<div id="footer-wrap">
	<?php include("includes/footer.php"); ?>
</div>
    
</div>
</body>
</html>