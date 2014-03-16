<?php

include("includes/admin-global.php");

include("../includes/connect.php");


$result = $db->query("SELECT * FROM product WHERE stock < 30 " );

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PetsUK Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <?php include("includes/top.php"); ?>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
      
        <div class="span3">
          <?php include("includes/sidenav.php"); ?>
        </div>
        
        <div class="span9">
		  	
		  	<div class="page-header">
  				<h1>Low Stock <small>Stock to be re-ordered</small></h1>
			</div>
		  	
		  	<?php
		  	
		        echo '<table class="table table-striped">';
					echo '<thead>';
			        	echo "<tr> <th>SKU Code</th> <th>Product Name</th> <th>Price</th> <th>Stock</th></tr>";
					echo '</thead>';
					echo '<tbody>';
			
				        while($row = $result->fetch_assoc()) {
				                
				                // echo out the contents of each row into a table
				                echo "<tr>";
				                echo '<td>' . $row['product_id'] . '</td>';
				                echo '<td>' . $row['product_title'] . '</td>';
				                echo '<td>' . $row['price'] . '</td>';
								echo '<td>' . $row['stock'] . '</td>';
				              
				                echo "</tr>"; 
				        } 
						
					echo '</tbody>';
		        echo "</table>";
			
			?>
			
			
			
			
	
			

		</div>
		</div>
		
		<hr />

      <footer>
      	<?php include("includes/footer.php"); ?>
      </footer>

    </div><!--/.fluid-container-->

  </body>
</html>