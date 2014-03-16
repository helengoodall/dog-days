<?php

require_once("includes/admin.php");
$admin = new admin;

require_once("../includes/user.php");
$user = new user;

if(!$user->is_admin()){
	header("Location: ../login.php");
}

?>