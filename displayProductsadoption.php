<?php

// Run the query on the symbols table through the connection
$query = "SELECT * FROM adoption"; 
$result = mysql_query ($query, $connection);

//Fetch each of the query rows in $result array 
while ($row = @ mysql_fetch_array($result)) 
{ 
// Print one row of results 
print 

"<div class='item'>" .
"<h3>".$row["Petname"]."</h3>".
"<img class='productimg' src=". $row["Image"]." alt='Product' width='275' height='200' />" .




"</div>";
} 
?>
