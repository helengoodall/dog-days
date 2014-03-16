
   	<div id="logo"><a href="MobWebHome.php"><img src="style/images/logo.png" alt="PetsUK logo" /></a></div>
	
	<div id="header">
    	
        <div id="top-links">
            <ul>
            	<?php
            	if ($user->is_loggedin()){
            	?>
            	<li><span class="bold">Welcome to PetsUK</span></li>
                <li><?php echo $user->get_user_name(); ?></li>
                <li><a href="logout.php">Logout</a></li>
            	<?php
				}else{
            	?>
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
                <?php
				}
                ?>
            </ul>
        </div>
    
        <div id="basket">
        	<!--<div class="basket_not">
            	2 Items
                <div class="basket_not_arrow"></div>
            </div>-->
            <a href="basket.php">Bag: £<?php echo $user->get_basket_amount(); ?> (<?php echo $user->get_basket_number(); ?>)</a>
        </div>
    
    </div>
