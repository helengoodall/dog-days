	<?php
        	
        		include("includes/connect.php");
				
			
        	
        	?>
	<div id="prettiness">
		<div id="top-links">
            <ul>
            	<?php
            	if ($user->is_loggedin()){
            	?>
            	<li><span class="bold">Welcome to Dog Days</span></li>
                <li><?php echo $user->get_user_name(); ?></li>
                <li><a href="logout.php">Logout</a></li>
            	<?php
				}else{
            	?>
            	<li class="bold">Welcome to Dog Days</li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
                <?php
				}
                ?>
            </ul>
            
        </div>
		<div id="cloudBig">
		</div> 
		<div id="cloudSmall">
		</div> 
		<div id="grass">
			<div><div><div><div><div><div><div><div></div></div></div></div></div></div></div></div>
		</div>
	</div> 
	<div id="header">
		<h1 id="logo">
			<a href="">Dog Days</a>
		</h1>
		<div id="tail">
		</div> 
				<div id="newsletter">
			<div id="newsletterInner">
			<a id="facebookLink" href="http://facebook.com/"></a> 
			<a id="twitterLink" href="http://twitter.com" target="_blank"></a> 
			<a id="pinterestLink" href="http://pinterest.com"></a>
			<a id="rssLink" href=""></a>
			</div>
			
		</div> 		<div id="menu">
			<ul>
				<li class="on">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
			<li><a href="category.php?id=1">Products</a></li>
        	
				<li>
					<a href="contactform.php">Contact Us</a>
				</li>
				
        	
			</ul>
		</div> 
		<div id="menuMask">
		</div>
	</div> 
	
