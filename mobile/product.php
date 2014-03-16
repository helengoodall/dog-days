<?php

require_once("includes/global.php");

$prod_id = $_GET["id"];

require_once("includes/product.php");
$product = new product;

if (isset($_SESSION["user_id"])){
	$userid = $_SESSION['user_id'];
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PetsUK</title>


<link href="style/main.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/product.js"></script>

</head>

<body>
<?php include("includes/admin_bar.php"); ?>
<div id="wrap">

<div id="header-wrap">
	<?php include("includes/header.php"); ?>
</div>
<div id="nav-wrap">
	<?php include("includes/nav.php"); ?>
</div>

<div id="container">

    <div class="content">
    
    	<h2><?php echo $product->get_name($prod_id); ?></h2>
    	
    	<div class="product-info">
    		<div class="product-price"><?php echo $product->get_price($prod_id); ?></div>

    		<div class="product-stock"><?php echo $product->stock_info($prod_id); ?></div>

			<input type="hidden" value="<?php echo $prod_id; ?>" id="prodid" />
			<input type="hidden" value="<?php echo $user->user_id(); ?>" id="userid" />
			
    		<input type="button" value="Add to Basket" class="button" id="addtobasket" />
    		
    	</div>
    	
    	<img src="images/<?php echo $product->get_image($prod_id); ?>" />
    	
    	<?php echo $product->get_description($prod_id); ?>
    	
    
    </div>

</div>

<div id="footer-wrap">
	<?php include("includes/footer.php"); ?>
</div>
    
</div>
</body>
</html>