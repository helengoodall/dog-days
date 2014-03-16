
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
        <title>PetsUK</title>
        <link href="style/style.css" rel="stylesheet" type="text/css" />
        <meta name="description" content="Online comprehensive pet store" />
        <link href="style/Mobmain.css" rel="stylesheet" type="text/css" />
    </head>
<body>
 	<header>
        <div class="logo">
            <a href="MobWebHome.php">
                <img src="style/images/logo.png" alt="PetsUK" />
          </a>
            <ul>
                <li class="bold">Welcome to PetsUK</li>
                <li>
                    <a href="register.php">Register</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
                <li>
                    <a href="checkout.php">Basket</a>
                </li>
            </ul>
            
        </header>
        
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
        <div>

        <?php include("includes/footer.php"); ?>
        </div>
        
</body>
</html>
