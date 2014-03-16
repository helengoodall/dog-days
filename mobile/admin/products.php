<?php

include("includes/admin-global.php");

include("../includes/connect.php");

if (isset($_GET['page'])) {
   $pageno = $_GET['page'];
} else {
   $pageno = 1;
} // if

$result2 = $db->query("SELECT * FROM product");
$rows = $result2->num_rows;

$rows_per_page = 10;
$lastpage      = ceil($rows/$rows_per_page);

$pageno = (int)$pageno;
if ($pageno > $lastpage) {
   $pageno = $lastpage;
} // if
if ($pageno < 1) {
   $pageno = 1;
} // if

$limit = 'LIMIT ' .($pageno - 1) * $rows_per_page .',' .$rows_per_page;

$result = $db->query("SELECT * FROM product $limit");

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
  				<h1>Products <small>Product panel for all products</small></h1>
			</div>
		  	
		  	<?php
		  	
		        echo '<table class="table table-striped">';
					echo '<thead>';
			        	echo "<tr> <th>SKU Code</th> <th>Product Name</th> <th>Price</th> <th>Stock</th> <th>Edit</th><th>Delete</th></tr>";
					echo '</thead>';
					echo '<tbody>';
			
				        while($row = $result->fetch_assoc()) {
				                
				                // echo out the contents of each row into a table
				                echo "<tr>";
				                echo '<td>' . $row['product_id'] . '</td>';
				                echo '<td>' . $row['product_title'] . '</td>';
				                echo '<td>£' . $row['price'] . '</td>';
								echo '<td>' . $row['stock'] . '</td>';
				                echo '<td><a href="#">Edit</a></td>';
								echo '<td><a href="#">Delete</a></td>';
				                echo "</tr>"; 
				        } 
						
					echo '</tbody>';
		        echo "</table>";
			
			?>
			
			<div class="pagination pagination-right">
				<ul>
				  	<?php
					if ($pageno == 1) {
					   echo '<li class="disabled"><a href="#">Prev</a></li>';
					} else {
					   $prevpage = $pageno-1;
					   echo '<li><a href="products.php?page='.$prevpage.'">Prev</a></li>';
					} // if
					
					for($i = 1; $i <= $lastpage; $i++){
						
						if($pageno == $i){
							echo '<li class="disabled"><a href="products.php?page='.$i.'">'.$i.'</a></li>';
						}else{
							echo '<li><a href="products.php?page='.$i.'">'.$i.'</a></li>';
						}
						
					}
					
					if ($pageno == $lastpage) {
					   echo '<li class="disabled"><a href="#">Next</a></li>';
					} else {
					   $nextpage = $pageno+1;
					   echo '<li><a href="products.php?page='.$nextpage.'">Next</a></li>';
					} // if
					?>
					
				</ul>
			</div>
			
			<div class="form-actions">
  				<button type="button" class="btn btn-primary">Add Product</button>
			</div>
			

		</div>
		</div>
		
		<hr />

      <footer>
      	<?php include("includes/footer.php"); ?>
      </footer>

    </div><!--/.fluid-container-->

  </body>
</html>
