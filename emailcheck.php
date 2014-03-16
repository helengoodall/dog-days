<?php

$email = $_POST['email'];

include("includes/connect.php");
$check = $db->query("SELECT email FROM USER WHERE email='$email'");

if ($email == ''){
    echo "blank";
}
elseif ($email == 'Username'){
        
	echo "blank";
}
elseif ($check->num_rows > 0)
{
	echo "no";
}
else
{
	echo "yes";
}

?>