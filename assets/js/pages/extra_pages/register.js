		$('#mobile').change(function() { 				
				var thischeck=$(this);
				thischeck.css('border-bottom',' ');
				var notNumber=new RegExp("[^0-9]","g");
				var val=thischeck.val();
				if(val.match(notNumber))
				{ thischeck.val(val.replace(notNumber,"")); }
				else{
				var MobileLength = $(this).val().length; 
				var MobileStrength = $('#error-signup'); 
				if( MobileLength <= 9) {
				$(window).scrollTop($('.sign-in-form').offset().top);	
					thischeck.css('border-bottom','2px solid red');
					MobileStrength.html('<div class="alert label-danger alert-dismissible">Please Enter Min10 Digit <strong> mobile number</strong></div>').delay(5000).show().fadeOut("slow");
					return false;
				} 
				if( MobileLength >= 16) { 
				$(window).scrollTop($('.sign-in-form').offset().top);
				thischeck.css('border-bottom','2px solid red');
					MobileStrength.html('<div class="alert label-danger alert-dismissible">Please Enter  Max 12 Digit <strong>mobile number</strong></div>').delay(5000).show().fadeOut("slow");					
					return false;
				} 
				}
			}); 
			 $('#email').change(function(){ 
				var email = $(this).val(); 
				if(!check_email.test(email)){
					$(window).scrollTop($('.sign-in-form').offset().top);
					$("#email").css('border-bottom','2px solid red');
					$('#error-signup').html('<div class="alert label-danger alert-dismissible">Please Enter <strong>Valid EmailId</strong></div>').delay(5000).show().fadeOut("slow");
					$('#email').val('');
					return false;
				} 
			});
			 $('#website').change(function(){ 
				var website = $(this).val(); 
				if(!check_website.test(website)){
					$(window).scrollTop($('.sign-in-form').offset().top);
					$("#website").css('border-bottom','2px solid red');
					$('#error-signup').html('<div class="alert label-danger alert-dismissible">Please Enter <strong>Valid Website</strong></div>').delay(5000).show().fadeOut("slow");					
					$('#website').val('');
					return false;
				} 
			});
$("#hotel-registration").click(function(){
	if($("#name").val()==''){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> Please Enter <strong>Your Name.</strong></div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#hotelname").val()==''){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> Please Enter <strong>Your Hotel Name.</strong></div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#username").val()==''){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> Please Enter <strong>Your UserName.</strong></div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#username").val().length<8){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> <strong>UserName</strong> Length Should Be Greater than or eaual to 8.</div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#username").val().length>16){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissibler"><strong> UserName </strong>Length Should Be Less than or eaual to 16.</div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#email").val()==''){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> Please Enter <strong>Your EmailID.</strong></div>').show().delay(5000).fadeOut("slow");
	return false;
}else if(!check_email.test($("#email").val())){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> Please Enter <strong>Valid EmailID.</strong></div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#mobile").val()==''){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> Please Enter Your <strong>Mobile Number.</strong></div>').show().delay(5000).fadeOut("slow");
	return false;
}else if(!check_mobile.test($("#mobile").val())){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> Please Enter <strong> Valid Mobile Number.</strong></div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#website").val() == ''){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> Please Enter <strong>Your Website.</strong></div>').show().delay(5000).fadeOut("slow");
	return false;
}else if(!check_website.test($("#website").val())){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> Please Enter <strong> Valid Website Domain.</strong></div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#password").val() == ''){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> Please Enter <strong>Password</strong></div>').show().delay(5000).fadeOut("slow");
	return false;
} else if($("#password").val().search(/[!\@\#\$\%\^\&\*\(\)\_\+\.\,\;\:\=\<\>\?\/\-\`]/) == -1){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"><strong>Password combination </strong>of(special character, numeric , uppercase and lowercase of alphabets)</div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#password").val().length<8){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"><strong> Password </strong>Length Should Be Greater than or eaual to 8.</div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#password").val().length>16){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> <strong>Password</strong> Length Should Be Less than 16.</div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#con-password").val() == ''){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> Please Enter <strong>Confirm Password.</strong></div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#password").val() != $("#con-password").val()){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> <strong>Password and Confirm Password </strong>Does not Match</div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#country").val() == ''){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> Please Choose<strong> Country</strong></div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#state").val() == ''){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").html('<div class="alert label-danger alert-dismissible"> Please Choose<strong> State</strong></div>').show().delay(5000).fadeOut("slow");
	return false;
}else if($("#city").val() == ''){
	$(window).scrollTop($('.sign-in-form').offset().top);
	$("#error-signup").css("display","block").html('<div class="alert label-danger alert-dismissible"> Please Choose <strong>City</strong></div>').show().delay(5000).fadeOut("slow");
	return false; 
}else{
	var ajaxdata="add_hoteliername="+$("#name").val()+"&hotel_name="+$("#hotelname").val()+"&hotel_username="+$("#username").val()+"&hotel_email="+$("#email").val()+"&hotel_mobile="+$("#mobile").val()+"&hotel_website="+$("#website").val()+"&hotel_password="+$("#con-password").val()+"&hotel_country="+$("#country").val()+"&hotel_state="+$("#state").val()+"&hotel_city="+$("#city").val();
	$(this).after('<div id="loader"><img src="'+load_img+'" alt="loading subcategory" style="width:20%" /></div>');
	$.ajax({
		type: "POST",
		url: "ajaxcall/register.php",
		data: ajaxdata,
		dataType:'html', 
		success: function(response){
		$(window).scrollTop($('.sign-in-form').offset().top);
		if(response==1){		
		$("#error-signup").css("display","block").html('<div class="alert label-danger alert-dismissible"> <strong>Thank You ! </strong>You Have Register Hotel Successfully. Please wait for Admin Approval.</div>');		
		setInterval(function() {window.location="login";}, 3000);
		}else{
		$("#error-signup").css("display","block").html(response);			
		}
		},error: function (xhr,ajaxOptions,throwError){
		alert("We Have Receive Wrong Request");
		console.log(throwError);
		}, complete: function(jqXHR, textStatus) {
        $('#loader').slideUp(200, function() {$(this).remove(); });
           $("#hotel-registration").show();	
		}
	});  
	return false;
}
});