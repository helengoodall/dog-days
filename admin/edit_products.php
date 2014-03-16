<?php

include("includes/admin-global.php");

$product_id = $_GET["id"];

require_once("../includes/product.php");
$product = new product;

include("includes/products_process.php");
$product_data = $product->get_details($product_id);

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
          
			
			<form class="form-horizontal" action="edit_products.php?id=<?php echo $product_id; ?>" method="post">
				<div class="control-group">
					<label class="control-label" for="inputProduct">Product Title</label>
    				<div class="controls">
      					<input type="text" id="inputProduct" name="inputProduct" placeholder="Product Name" value="<?php echo $product_data ["product_title"];?>">
    				</div>
    			</div>
    			
    			<div class="control-group">
					<label class="control-label" for="inputDescription">product description</label>
    				<div class="controls">
      					<input type="text" id="inputDescription" name="inputDescription" placeholder="Description" value="<?php echo $product_data["product_description"];?>">
    				</div>
    			</div>
    			
    			<div class="control-group">
					<label class="control-label" for="inputPrice">price</label>
    				<div class="controls">
      					<input type="text" id="inputPrice" name="inputPrice" placeholder="Price" value="<?php echo $product_data["price"];?>">
    				</div>
    			</div>
    			
    			<div class="control-group">
					<label class="control-label" for="inputStock">stock</label>
    				<div class="controls">
      					<input type="text" id="inputStock" name="inputStock" placeholder="Stock" value="<?php echo $product_data["stock"];?>">
    				</div>
    			</div>
    			
    			
    			
    			<div class="form-actions">
    				<input type="hidden" name="inputProductID" value="<?php echo $product_id; ?>">
  					<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
  					<button type="button" class="btn btn-danger">Delete</button>
				</div>
    		</form>
          
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
      	<?php include("includes/footer.php"); ?>
      </footer>

    </div><!--/.fluid-container-->

  </body>
</html>
