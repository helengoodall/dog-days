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
    
    	Here at PetsUK we understand that our customers are pet lovers, not just pet owners. They view their pets as members of the family and believe they deserve the same level of care and comfort.

We also realise that in today's world our customers' lives are filled with competing demands for their time. To help make caring for their pets a little easier, our store is designed to be quick and easy to use. We dispatch all goods the same day and we guarantee that each and every order will be packed with care. You can now have all of your favourite pet products available for sale online and conveniently delivered to your door.
    
    </div>

</div>

<div>
	<?php include("includes/footer.php"); ?>
</div>
    
</div>
</body>
</html>