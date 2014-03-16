<?php

include("includes/admin-global.php");

include("../includes/connect.php");

$result = $db->query("SELECT * FROM user where user_group > 2");

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
  				<h1>Staff Users <small>Control panel for staff user administration</small></h1>
			</div>
		  	
		  	<?php
		  	
		        echo '<table class="table table-striped">';
		        echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>User Level</th> <th>Edit</th><th>Delete</th></tr>";
		
		        while($row = $result->fetch_assoc()) {
		                
		                // echo out the contents of each row into a table
		                echo "<tr>";
		                echo '<td>' . $row['user_id'] . '</td>';
		                echo '<td>' . $row['first_name'] . '</td>';
		                echo '<td>' . $row['last_name'] . '</td>';
						echo '<td>' . $row['user_group'] . '</td>';
		                echo '<td><a href="edit_user.php?id=' . $row['user_id'] . '">Edit</a></td>';
						echo '<td><a href="deleteuser.php?id=' . $row['user_id'] . '">Delete</a></td>';
		                echo "</tr>"; 
		        } 
		
		        echo "</table>";
			
			?>
			<p><a href="new.php">Add a new record</a></p>

		</div>
		</div>
		
		<hr />

      <footer>
      	<?php include("includes/footer.php"); ?>
      </footer>

    </div><!--/.fluid-container-->

  </body>
</html>
