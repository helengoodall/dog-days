$(document).ready(function() {

	$("#email").focus(function() {
  		$("#reg_emailtip").addClass("active");
	});
	$("#fname").focus(function() {
  		$("#reg_fnametip").addClass("active");
	});
	$("#lname").focus(function() {
  		$("#reg_lnametip").addClass("active");
	});
	$("#pass1").focus(function() {
  		$("#reg_pass1tip").addClass("active");
	});
	$("#pass2").focus(function() {
  		$("#reg_pass2tip").addClass("active");
	});
	$("#address1").focus(function() {
  		$("#reg_address1tip").addClass("active");
	});
	$("#city").focus(function() {
  		$("#reg_citytip").addClass("active");
	});
	$("#postcode").focus(function() {
  		$("#reg_postcodetip").addClass("active");
	});
	$("#country").focus(function() {
  		$("#reg_countrytip").addClass("active");
	});
	
	$("#email").blur(function() {
  		
		var addr = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var address = $("#email").val();
		
		if(address == 'Email Address'){
			$("#reg_emailtip").removeClass("ok");
			$("#reg_emailtip").html('Please enter an email address.').addClass("error");
			
		}else if(addr.test(address)== false){
			$("#reg_emailtip").removeClass("ok");
			$("#reg_emailtip").html('Email doesn\'t look valid.').addClass("error");
		}
		else{
		
			$("#reg_emailtip").html('Checking...').addClass("load");
			
			$.post("emailcheck.php",{ email:$(this).val() } ,function(data){
				
			  if(data=='no'){
				  
				  $("#reg_emailtip").removeClass("load");
				  $("#reg_emailtip").removeClass("ok");
				  $("#reg_emailtip").html('Email address is already registered.').addClass("error");
				
			  }
			  else if(data=='blank'){
				  
				  $("#reg_emailtip").removeClass("load");
				  $("#reg_emailtip").removeClass("ok");
				  $("#reg_emailtip").removeClass("error");
				  $("#reg_emailtip").html('Please enter an email address.');
				
			  }
			  else{
				  
				  $("#reg_emailtip").removeClass("load");
				  $("#reg_emailtip").removeClass("error");
				  $("#reg_emailtip").html('Great! We\'ll send a confirmation email.').addClass("ok");
				
			  }
			  
					
			});
			
		}
			
	});
	
	$("#fname").blur(function() {
		
		if($("#fname").val()==''){
			
			$("#reg_fnametip").removeClass("ok");
			$("#reg_fnametip").html('Please enter your first name').addClass("error");
				
		}else{
			
			if($("#fname").val().length > 1){
				
				$("#reg_fnametip").removeClass("error");
				$("#reg_fnametip").html('First Name looks good.').addClass("ok");
				
			}else{
				
				$("#reg_fnametip").removeClass("ok");
				$("#reg_fnametip").html('Who has a name that short?!').addClass("error");
				
			}
			
		}
			
	});
	
	$("#lname").blur(function() {
		
		if($("#lname").val()==''){
			
			$("#reg_lnametip").removeClass("ok");
			$("#reg_lnametip").html('Please enter your last name').addClass("error");
				
		}else{
			
			if($("#lname").val().length > 1){
				
				$("#reg_lnametip").removeClass("error");
				$("#reg_lnametip").html('Last Name looks good.').addClass("ok");
				
			}else{
				
				$("#reg_lnametip").removeClass("ok");
				$("#reg_lnametip").html('Who has a name that short?!').addClass("error");
				
			}
			
		}
			
	});
	
	$("#pass1").blur(function() {
		
		if ($("#pass1").val()==''){
			
			$("#reg_pass1tip").removeClass("ok");
			$("#reg_pass1tip").html('Please enter a password').addClass("error");
			
		}
		
		var pass = $("#pass1").val();
		if(pass.length < 6){
			
			$("#reg_pass1tip").removeClass("ok");
			$("#reg_pass1tip").html('Must be 6 or more characters long').addClass("error");
				
		}else{
			
			$("#reg_pass1tip").removeClass("error");
			$("#reg_pass1tip").html('Password OK.').addClass("ok");
			
		}
			
	});
	
	$("#pass2").blur(function() {
		
		if ($("#pass2").val()==''){
			
			$("#reg_pass2tip").removeClass("ok");
			$("#reg_pass2tip").html('Please confirm your password').addClass("error");
			
		}
		
		var pass = $("#pass2").val();
		if($("#pass1").val() != $("#pass2").val()){
			
			$("#reg_pass2tip").removeClass("ok");
			$("#reg_pass2tip").html('Passwords do not match.').addClass("error");
				
		}else{
			
			if ($("#pass2").val()==''){
			
				$("#reg_pass2tip").removeClass("ok");
				$("#reg_pass2tip").html('Please confirm your password').addClass("error");
			
			}else{
			
				$("#reg_pass2tip").removeClass("error");
				$("#reg_pass2tip").html('Passwords match.').addClass("ok");
			
			}
			
		}
			
	});
	
	$("#address1").blur(function() {
		
		if($("#address1").val()==''){
			
			$("#reg_address1tip").removeClass("ok");
			$("#reg_address1tip").html('Please enter an address').addClass("error");
				
		}else{
				
			$("#reg_address1tip").removeClass("error");
			$("#reg_address1tip").html('').addClass("ok");
			
		}
			
	});
	
	$("#city").blur(function() {
		
		if($("#city").val()==''){
			
			$("#reg_citytip").removeClass("ok");
			$("#reg_citytip").html('Please enter your city').addClass("error");
				
		}else{
				
			$("#reg_citytip").removeClass("error");
			$("#reg_citytip").html('').addClass("ok");
			
		}
			
	});
	$("#postcode").blur(function() {
		
		if($("#postcode").val()==''){
			
			$("#reg_postcodetip").removeClass("ok");
			$("#reg_postcodetip").html('Please enter your Postcode').addClass("error");
				
		}else{
				
			$("#reg_postcodetip").removeClass("error");
			$("#reg_postcodetip").html('').addClass("ok");
			
		}
			
	});
	
	$("#register").click(function() {
		
  		$("#reg_emailtip").addClass("active");
		$("#reg_fnametip").addClass("active");
		$("#reg_lnametip").addClass("active");
		$("#reg_pass1tip").addClass("active");
		$("#reg_pass2tip").addClass("active");
  		
		var addr = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var address = $("#email").val();
		
		if(address == 'Email Address'){
			$("#reg_emailtip").removeClass("ok");
			$("#reg_emailtip").html('Please enter an email address.').addClass("error");
			
		}else if(addr.test(address)== false){
			$("#reg_emailtip").removeClass("ok");
			$("#reg_emailtip").html('Email doesn\'t look valid.').addClass("error");
		}
		else{
		
			$("#reg_emailtip").html('Checking...').addClass("load");
			
			$.post("emailcheck.php",{ email:$(this).val() } ,function(data){
				
			  if(data=='no'){
				  
				  $("#reg_emailtip").removeClass("load");
				  $("#reg_emailtip").removeClass("ok");
				  $("#reg_emailtip").html('Email address is already registered.').addClass("error");
				
			  }
			  else if(data=='blank'){
				  
				  $("#reg_emailtip").removeClass("load");
				  $("#reg_emailtip").removeClass("ok");
				  $("#reg_emailtip").removeClass("error");
				  $("#reg_emailtip").html('Please enter an email address.');
				
			  }
			  else{
				  
				  $("#reg_emailtip").removeClass("load");
				  $("#reg_emailtip").removeClass("error");
				  $("#reg_emailtip").html('Great! We\'ll send a confirmation email.').addClass("ok");
				
			  }
			  
					
			});
			
		}
		
		if($("#fname").val()==''){
			
			$("#reg_fnametip").removeClass("ok");
			$("#reg_fnametip").html('Please enter your first name').addClass("error");
				
		}else{
			
			if($("#fname").val().length > 1){
				
				$("#reg_fnametip").removeClass("error");
				$("#reg_fnametip").html('First Name looks good.').addClass("ok");
				
			}else{
				
				$("#reg_fnametip").removeClass("ok");
				$("#reg_fnametip").html('Who has a name that short?!').addClass("error");
				
			}
			
		}
		
		if($("#lname").val()==''){
			
			$("#reg_lnametip").removeClass("ok");
			$("#reg_lnametip").html('Please enter your last name').addClass("error");
				
		}else{
			
			if($("#lname").val().length > 1){
				
				$("#reg_lnametip").removeClass("error");
				$("#reg_lnametip").html('Last Name looks good.').addClass("ok");
				
			}else{
				
				$("#reg_lnametip").removeClass("ok");
				$("#reg_lnametip").html('Who has a name that short?!').addClass("error");
				
			}
			
		}
		
		if ($("#pass1").val()==''){
			
			$("#reg_pass1tip").removeClass("ok");
			$("#reg_pass1tip").html('Please enter a password').addClass("error");
			
		}
		
		var pass = $("#pass1").val();
		if(pass.length < 6){
			
			$("#reg_pass1tip").removeClass("ok");
			$("#reg_pass1tip").html('Must be 6 or more characters long').addClass("error");
				
		}else{
			
			$("#reg_pass1tip").removeClass("error");
			$("#reg_pass1tip").html('Password OK.').addClass("ok");
			
		}
		
		if ($("#pass2").val()==''){
			
			$("#reg_pass2tip").removeClass("ok");
			$("#reg_pass2tip").html('Please confirm your password').addClass("error");
			
		}
		
		var pass = $("#pass2").val();
		if($("#pass1").val() != $("#pass2").val()){
			
			$("#reg_pass2tip").removeClass("ok");
			$("#reg_pass2tip").html('Passwords do not match.').addClass("error");
				
		}else{
			
			if ($("#pass2").val()==''){
			
				$("#reg_pass2tip").removeClass("ok");
				$("#reg_pass2tip").html('Please confirm your password').addClass("error");
			
			}else{
			
				$("#reg_pass2tip").removeClass("error");
				$("#reg_pass2tip").html('Passwords match.').addClass("ok");
			
			}
			
		}
		
		if ($("#email").val() != ''){
			if(address != ''){
				if(addr.test(address) == true){
					if($("#pass1").val() != ''){
						if($("#pass1").val().length >= 6){
							if($("#pass1").val() == $("#pass2").val()){
														
								$("#submit").click();
								
							}
						}
					}
				}
			}
		}
		
  		
	});
	
	
		
});