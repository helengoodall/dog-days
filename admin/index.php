<?php

include("includes/admin-global.php");

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
          <div class="hero-unit">
            <h1>Admin Panel</h1>
            <p>Welcome to the Pets Uk admin panel.</p>
            <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
          </div>
          <div class="row-fluid">
            <div class="span4">
              <h2>Add New user</h2>
              <p>Here you can add a new user</p>
              <p><a class="btn" href="../register.php">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Update or Delete User</h2>
              <p>Here you can update user detials</p>
              <p><a class="btn" href="view_user.php">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Update or Delete Admin</h2>
              <p>Here you can view admin detials and update their detials</p>
              <p><a class="btn" href="view_admin.php">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class="row-fluid">
            <div class="span4">
              <h2>Add New Product</h2>
              <p>Here you can add a new product</p>
              <p><a class="btn" href="addproduct.php">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Update Product</h2>
              <p>Here you can update a product </p>
              <p><a class="btn" href="products.php">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Delete product</h2>
              <p>Here you can delete a product </p>
              <p><a class="btn" href="products.php">View details &raquo;</a></p>
			  </div><!--/span-->
			  <h2>Check stock Levels</h2>
              <p>Here you can check stock levels to see which products need a new purchase order raising</p>
              <p><a class="btn" href="stocklevel.php">View &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
      	<?php include("includes/footer.php"); ?>
      </footer>

    </div><!--/.fluid-container-->

  </body>
</html>
