<?php
require_once("user.php");
$user = new user;
?>

<a href="basket.php">Bag: £<?php echo $user->get_basket_amount(); ?> (<?php echo $user->get_basket_number(); ?>)</a>