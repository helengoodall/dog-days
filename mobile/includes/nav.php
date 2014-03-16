
	<div id="nav">
        <nav class="vertical menu">
        <ul>
		<li>
        	<?php
        	
        		include("includes/connect.php");
				
				$get_cat = $db->query("SELECT * FROM category");
				
				
				while($cat = $get_cat->fetch_assoc()){
					echo '<li><a href="category.php?id='.$cat["category_id"].'">'.$cat["cat_name"].'</a></li>';
				}
        	
        	?>
		</li>
	  </ul>
	</nav>
    </div>