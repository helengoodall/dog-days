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
    
    	<div class="checkout-libox right">
        	<div class="checkout-libox-head">
            	Existing Customer
            </div>
            <div class="checkout-libox-body">
            	<form action="checkout.php" method="post">
                    <div class="checkout-libox-form">
                        <ul>
                            <li>
                                <label for="email" class="checkout-label">Email Address</label>
                                <input type="text" id="email" class="checkout-tb">
                            </li>
                            <li>
                                <label for="pass" class="checkout-label">Password</label>
                                <input type="password" id="pass" class="checkout-tb">
                            </li>
                            <li>
                                <input type="submit" class="button" value="Log In" />
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="checkout-libox">
        	<div class="checkout-libox-head">
            	New Customer
            </div>
            <div class="checkout-libox-body">
            	
                <form action="checkout.php" method="post">
                    <div class="checkout-libox-form">
                        <ul>
                            <li>
                                <label for="email" class="checkout-label">Email Address</label>
                                <input type="text" id="email" class="checkout-tb">
                            </li>
                            <li>
                                <button type="button" class="button">Continue</button>
                            </li>
                        </ul>
                    </div>
                </form>
                
            </div>
        </div>
    
    </div>

</div>

<div id="footer-wrap">
	<?php include("includes/footer.php"); ?>
</div>
    
</div>
</body>
</html>