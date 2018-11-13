function enter_onkeypress(event){
		if (event.keyCode == 13 || event.which == 13){
			$("#get_login").click();
		}
	}
(function ($) {
"use strict";
/*==================================================================
[ Focus input ]*/
$('.input100').each(function(){
$(this).on('blur', function(){
	if($(this).val().trim() != "") {
		$(this).addClass('has-val');
	}
	else {
		$(this).removeClass('has-val');
	}
})    
});
/*==================================================================
[ Validate ]*/
var input = $('.validate-input .input100');
$('#get_login').on('click',function(){
$("#error-login").html('');
var check = true;
for(var i=0; i<input.length; i++) {
	if(validate(input[i]) == false){
		showValidate(input[i]);
		check=false;
	}
}
	if(check){
		$.ajax({
			type: "POST",
			url: "ajaxcall/login.php",
			data: $(".validate-form").serialize(),
			success: function(response){		
		if(response>=1){
			window.location='index';	
		}else{
			$("#error-login").html(response).show().delay(5000).fadeOut("slow");	
			}
		},error: function (xhr,ajaxOptions,throwError){
		alert("We Have Receive Wrong Request");
		console.log(throwError);
		}, complete: function(jqXHR, textStatus) {
        $('#loader').slideUp(200, function() {$(this).remove(); });
           $("#get_login").show();	
		}
	});
	return false;
		
	}else{
	$("#error-login").html('<div class="alert label-danger alert-dismissible"> Please Enter Username/ Password.</div>').show().delay(5000).fadeOut("slow");
	return false;
	}
// return check;
});


$('.validate-form .input100').each(function(){
$(this).focus(function(){
   hideValidate(this);
});
});

function validate (input) {
if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
	if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
		return false;
	}
}
else {
	if($(input).val().trim() == ''){
		return false;
	}
}
}

function showValidate(input) {
var thisAlert = $(input).parent();

$(thisAlert).addClass('alert-validate');
}

function hideValidate(input) {
var thisAlert = $(input).parent();

$(thisAlert).removeClass('alert-validate');
}

/*==================================================================
[ Show pass ]*/
var showPass = 0;
$('.btn-show-pass').on('click', function(){
if(showPass == 0) {
	$(this).next('input').attr('type','text');
	$(this).addClass('active');
	showPass = 1;
}
else {
	$(this).next('input').attr('type','password');
	$(this).removeClass('active');
	showPass = 0;
}

});


})(jQuery);