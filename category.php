<?php

require_once("includes/global.php");

$category = $_GET["id"];

require_once("includes/product.php");
$product = new product;

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Dog Days</title>


<link href="style/main.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
	setTimeout(function(){
    	$("#overlay").fadeOut(300);
	}, 1400);
</script>
</head>

<body>
<?php include("includes/admin_bar.php"); ?>
<div id="wrap">

<div id="header-wrap">
	<?php include("includes/header.php"); ?>
</div>

<div id="container">
	
	
    <div class="content">
    
    	<?php
    	
    		$product->get_products($category);
    	
    	?>
    
    </div>

</div>

<div id="footer-wrap">
	<?php include("includes/footer.php"); ?>
</div>
    
</div>
</body>
</html>