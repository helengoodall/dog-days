<?php
if($user->is_admin()){
?>

	<div id="admin">
		
		<div class="brand">
			<a href="admin">Admin Panel</a>
		</div>
		
		<span class="right">
			Logged in as <?php echo $user->get_user_name(); ?>
		</span>
		
	</div>
	
	<div id="admin-space">
		
	</div>
	
<?php
}
?>