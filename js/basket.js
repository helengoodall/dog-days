function remove(id){
	
	$.ajax({ url: 'includes/basket_remove.php',
         data: {product_id: id, user_id: $('#userid').val()},
         type: 'post',
         success: function(output) {
         	alert(output);
			location.reload();
         }
	});
	
}