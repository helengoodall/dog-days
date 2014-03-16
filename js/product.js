$(document).ready(function() {
	
	$('#addtobasket').click(function(){
		
		$.ajax({ url: 'includes/basket_function.php',
         data: {product_id: $('#prodid').val(), user_id: $('#userid').val()},
         type: 'post',
         success: function(output) {
         		alert(output);
				$('#basket').load('includes/basket_display.php');;
            }
		});
		
		
	});
	
});