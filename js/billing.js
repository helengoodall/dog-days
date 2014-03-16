$(document).ready(function() {
	
	$('#addcardbtn').click(function(){
		
		
		$('#addcardbtn-wrap').fadeOut('fast');
		$('#addcard').fadeIn('fast');
		
	});
	$('#addnewbtn').click(function(){
		
		$.ajax({ url: 'includes/add_card.php',
         data: {cd_name: $('#cd_name').val(), cd_type: $('#cd_type').val(), cd_number: $('#cd_number').val(), sec_code: $('#sec_code').val(),
          expire: $('#expire').val(), user_id: $('#user_id').val()},
         type: 'post',
         success: function(output) {
         		alert(output);
         		$('#showcards').load('includes/show_cards.php');
         		$('#addcard').slideUp('fast');
            }
		});
		
	});
	
});