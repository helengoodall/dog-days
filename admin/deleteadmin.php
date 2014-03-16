<?php

include("includes/admin-global.php");


include("includes/products_process.php");


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
        


<h2>Delete Row</h2> 

  <?php  

$host="localhost"; // Host name 
$username="petsuk"; // Mysql username 
$password="petsuk1*"; // Mysql password 
$db_name="petsuk_main"; // Database name 
$tbl_name="user"; // Table name 


mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$query = "SELECT * FROM user WHERE user_group > 2";  

$result = mysql_query($query);  
// see if any rows were returned  
if (mysql_num_rows($result) > 0) {  
 // yes so print them one after another  
  echo "<table cellpadding=10 border=1>";  
  while($row = mysql_fetch_array($result))  {  
     echo "<tr>";  
     echo "<td>".$row["user_id"]."</td>";  
	 echo "<td>".$row["email"]."</td>"; 
     echo "<td>".$row["first_name"]."</td>";  
     echo "<td>".$row["last_name"]."</td>";
	 echo "<td>".$row["password"]."</td>"; 
	 echo "<td>".$row["user_group"]."</td>"; 
	   
     echo "<td><a href=DeleteUserAction.php?user_id=".$row["user_id"].">Delete</a></td>";  
     echo "</tr>";  
   } //End While 
   echo "</table>";  
} //End if rows  

?>  
</p> 
<p><a href="view_admin.php">View admin Table</a></p> 


     <footer>
      	<?php include("includes/footer.php"); ?>
      </footer>

    </div><!--/.fluid-container-->

  </body>
</html>
