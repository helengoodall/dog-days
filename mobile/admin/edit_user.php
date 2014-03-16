<?php

include("includes/admin-global.php");

$user_id = $_GET["id"];

include("includes/user_process.php");

$user_data = $user->get_details($user_id);

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
  				<h1>Edit <?php echo $user->user_level_name($user_data["user_group"]); ?><small> 
  					<?php echo $user_data["first_name"]." ".$user_data["last_name"]; ?></small></h1>
			</div>
			
			<form class="form-horizontal" action="edit_user.php?id=<?php echo $user_id; ?>" method="post">
				<div class="control-group">
					<label class="control-label" for="inputEmail">Email</label>
    				<div class="controls">
      					<input type="text" id="inputEmail" name="inputEmail" placeholder="Email" value="<?php echo $user_data["email"];?>">
    				</div>
    			</div>
    			
    			<div class="control-group">
					<label class="control-label" for="inputFname">First Name</label>
    				<div class="controls">
      					<input type="text" id="inputFname" name="inputFname" placeholder="First Name" value="<?php echo $user_data["first_name"];?>">
    				</div>
    			</div>
    			
    			<div class="control-group">
					<label class="control-label" for="inputLname">Last Name</label>
    				<div class="controls">
      					<input type="text" id="inputLname" name="inputLname" placeholder="Last Name" value="<?php echo $user_data["last_name"];?>">
    				</div>
    			</div>
    			
    			<div class="control-group">
					<label class="control-label" for="inputAddr1">Address 1</label>
    				<div class="controls">
      					<input type="text" id="inputAddr1" name="inputAddr1" placeholder="Address 1" value="<?php echo $user_data["address1"];?>">
    				</div>
    			</div>
    			
    			<div class="control-group">
					<label class="control-label" for="inputAddr2">Address 2</label>
    				<div class="controls">
      					<input type="text" id="inputAddr2" id="inputAddr2" placeholder="Address 2" value="<?php echo $user_data["address2"];?>">
    				</div>
    			</div>
    			
    			<div class="control-group">
					<label class="control-label" for="inputCity">City</label>
    				<div class="controls">
      					<input type="text" id="inputCity" name="inputCity" placeholder="City" value="<?php echo $user_data["city"];?>">
    				</div>
    			</div>
    			
    			<div class="control-group">
					<label class="control-label" for="inputPostcode">Postal code</label>
    				<div class="controls">
      					<input type="text" id="inputPostcode" name="inputPostcode"  placeholder="Postcode" value="<?php echo $user_data["postcode"];?>">
    				</div>
    			</div>
    			
    			<div class="control-group">
					<label class="control-label" for="inputCountry">Country</label>
    				<div class="controls">
      					<input type="text" id="inputCountry" name="inputCountry" placeholder="Country" value="<?php echo $user_data["country"];?>">
    				</div>
    			</div>
    			
    			<div class="form-actions">
    				<input type="hidden" name="inputUserID" value="<?php echo $user_id; ?>">
  					<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
  					<button type="button" class="btn btn-danger">Delete Account</button>
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
