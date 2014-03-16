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


<link href="style/Mobmain.css" rel="stylesheet" type="text/css" />
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/product.js"></script>

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
    
    	<h2><?php echo $product->get_petname($prod_id); ?></h2>
		
	
    	<img src="images/<?php echo $product->get_petimage($prod_id); ?>" />

    	<br>
		<br>
    	<?php echo $product->get_petdescription($prod_id); ?>
    	<br>
		<br>
		
<a href="adoptform1.php?id=<?php echo $prod_id; ?>" class="button">Click here to enquire </a>

    
    </div>

</div>

<div>
	<?php include("includes/footer.php"); ?>
</div>
    
</div>
</body>
</html>