

<?php

$host="localhost"; // Host name 
$username="petsuk"; // Mysql username 
$password="petsuk1*"; // Mysql password 
$db_name="petsuk_main"; // Database name 
$tbl_name="user"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");



// Delete data in mysql from row that has this id 
$sql="DELETE FROM $tbl_name";
$result=mysql_query($sql);

// if successfully deleted
if($result){
echo "Deleted Successfully";
echo "<BR>";
echo "<a href='delete.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php
// close connection 
mysql_close();
?>