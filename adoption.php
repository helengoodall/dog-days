<?php

require_once("includes/global.php");

require_once("includes/product.php");
$product = new product;
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
    
    	<h1>Adopt a pet</h1>
    
    	<?php
    	
    		$product->get_adoption();
    	
    	?>
	</div>

    
    </div>



<div id="footer-wrap">
	<?php include("includes/footer.php"); ?>
</div>
    
</div>
</body>
</html>