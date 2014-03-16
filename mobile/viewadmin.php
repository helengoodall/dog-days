<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
      <meta charset="utf-8">
    <title>PetsUK Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/admin.css" rel="stylesheet">
    <link href="admin/css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
 <div class="span9">
          <div class="hero-unit">
            <h1>Admin Panel</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
          </div>
		  
		  <div class "span">
<?php
/* 
        VIEW.PHP
        Displays all data from 'players' table
*/

        // connect to the database
        include('connect-db.php');

        // get results from database
        $result = mysql_query("SELECT * FROM user where user_group > 6") 
                or die(mysql_error());  
                
        // display data in table
        
        
        echo "<table border='1' cellpadding='20'>";
       echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>user level</th> <th>Edit</th><th>Delete</th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['user_id'] . '</td>';
                echo '<td>' . $row['first_name'] . '</td>';
                echo '<td>' . $row['last_name'] . '</td>';
				echo '<td>' . $row['user_group'] . '</td>';
                echo '<td><a href="editadmin.php?id=' . $row['user_id'] . '">Edit</a></td>';
				echo '<td><a href="deleteadmin.php?id=' . $row['user_id'] . '">Delete</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>

            
           

      
</div>

      <footer>
      	<?php include("includes/footer.php"); ?>
      </footer>

    </div><!--/.fluid-container-->

  </body>
</html>