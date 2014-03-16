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
          
			<div class="page-header">
  				<h1>Template Page <small>This is the template page</small></h1>
			</div>
          
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
      	<?php include("includes/footer.php"); ?>
      </footer>

    </div><!--/.fluid-container-->

  </body>
</html>
