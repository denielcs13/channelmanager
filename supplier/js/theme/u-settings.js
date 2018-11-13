$(".theme-button").click(function(){	
	if($(this).data('theme')=='white'){
		$("#sidbar_theme").val('1');
	}
	if($(this).data('theme')=='dark'){
	$("#sidbar_theme").val('2');	
	}
	});
	$(".sidebar-theme a").click(function(){	
	$("#sidebar_color").val($(this).data('theme'));
	$("#sidbar_theme").val('');	
	});
	$(".logo-theme a").click(function(){	
	$("#h_brand").val($(this).data('theme'));
	$("#sidbar_theme").val('');	
	});
	$(".header-theme a").click(function(){	
	$("#h_color").val($(this).data('theme'));
	});
	$(".sidebar-theme-layout a").click(function(){	
	$("#theme_layout").val($(this).data('type'));
	});
	$("#save_change").click(function(){	
		$("#save_change").hide();
		$(this).after('<div id="loader"><img src="'+load_img+'" alt="loading" style="width:20%" /></div>');
		var datarequest= "action=change_settings&change_settings="+$("#h_admin").val()+"&h_brand="+$("#h_brand").val()+"&h_color="+$("#h_color").val()+"&theme_layout="+$("#theme_layout").val()+"&sidebar_color="+$("#sidebar_color").val()+"&sidbar_theme="+$("#sidbar_theme").val();
		var show_btn=$("#save_change");		
		call_settings(show_btn,datarequest);
	});
	$("#default").click(function(){	
		$("#default").hide();
		$(this).after('<div id="loader"><img src="'+load_img+'" alt="loading" style="width:20%" /></div>');
		var datarequest= "action=default_settings&default_settings="+$("#h_admin").val();
		var show_btn=$("#default");
		call_settings(show_btn,datarequest);
	});
	function call_settings(show_btn,datarequest){
		$.ajax({
		url: "ajaxfile/u_settings.php",
		type: "POST",
		data:datarequest,
		dataType:'html',
		beforeSend: function (xhr){ 
        xhr.setRequestHeader('Authorization', ajaxauthentication()); 
		},	success: function(response){
		if(response !==''){
		$("#response").css("display","block").html(response).show().delay(10000).fadeOut("slow");
		setInterval(function() {
			window.location="settings";
		}, 3000);
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