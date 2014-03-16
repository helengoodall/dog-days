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
<?php include("includes/admin_bar.php"); ?>
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

</div>

	<?php include("includes/footer.php"); ?>
    
</div>
</body>
</html>