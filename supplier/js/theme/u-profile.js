$("#change_password").click(function(){	
		var simpleFormPassword= $("#simpleFormPassword").val();
		var newpassword= $("#newpassword").val();
		var simpleFormEmail= $("#simpleFormEmail").val();	
		if(simpleFormEmail==''){
			$("#error-password").html('<div class="alert label-danger alert-dismissible" role="alert">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong>  Please Enter Current Password / Username.</div>').show().delay(5000).fadeOut("slow");
			return false;
		}else if(newpassword==''){
			$("#error-password").html('<div class="alert label-danger alert-dismissible" role="alert">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong>  Please Enter Your New Password.</div>').show().delay(5000).fadeOut("slow");
			return false;
		}else if(simpleFormPassword==''){
			$("#error-password").html('<div class="alert label-danger alert-dismissible" role="alert">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong>  Please Enter Confirm  Password.</div>').show().delay(5000).fadeOut("slow");
			return false;
		}else if(newpassword !=simpleFormPassword){
			$("#error-password").html('<div class="alert label-danger alert-dismissible" role="alert">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong>  New Password and Current Password does not Match.</div>').show().delay(5000).fadeOut("slow");
			return false;
		}else{
		$("#change_password").hide();
		$(this).after('<div id="loader"><img src="'+load_img+'" alt="loading" style="width:20%" /></div>');
		var datarequest= "action=change_password&change_password="+$("#h_admin").val()+"&password1="+simpleFormPassword+"&password2="+newpassword+"&username="+simpleFormEmail+"&type=s_admin";
		var show_btn=$("#change_password"); 
		change_password(show_btn,datarequest);
		}
	});
	function change_password(show_btn,datarequest){
	$.ajax({
		url: "ajaxfile/u_profile.php",
		type: "POST",
		data:datarequest,
		dataType:'html',
		beforeSend: function (xhr){ 
        xhr.setRequestHeader('Authorization', ajaxauthentication()); 
		},	success: function(response){
		if(response !==''){
		$("#error-password").css("display","block").html(response).show().delay(10000).fadeOut("slow");
		}else{
		$("#error-password").css("display","block").html('<div class="alert label-danger alert-dismissible" role="alert">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong>  Wrong Request Found.</div>').show().delay(10000).fadeOut("slow");
		}
		},error: function (xhr,ajaxOptions,throwError){
		alert("We Have Receive Wrong Request");
		console.log(throwError);
		}, complete: function(jqXHR, textStatus) {
           	$('#loader').slideUp(200, function() {$(this).remove(); });
           show_btn.show();	
		}
		});	
	}