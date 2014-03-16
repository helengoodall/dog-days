<?php
	$connection = mysql_connect("localhost", "petsuk", "petsuk1*") or die(mysql_error());
	mysql_select_db("petsuk_main", $connection) or die(mysql_error());
?>

