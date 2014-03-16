<?php  
$host="localhost"; // Host name 
$username="petsuk"; // Mysql username 
$password="petsuk1*"; // Mysql password 
$db_name="petsuk_main"; // Database name 
$tbl_name="user"; // Table name 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// if id provided, then delete that record  
$user_id = $_GET['user_id'] ;  
// create query to delete record  
$query = "DELETE FROM user WHERE user_id = '$user_id' ";  
$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());  
  // see if any rows were affected 
if (mysql_affected_rows() > 0) {  
  //If so , return to calling page using header function and HTTP_REFERER 
    header("Location: {$_SERVER['HTTP_REFERER']}");     
  }  
  else {  
    // print error message  
    echo "Error in query: $query. ".mysql_error(); 
    exit; 
  } 
?> 