  $("body").on("change","#hotel_image",function() {
	var thisval=$(this);
	var val = thisval.val();
	var imgage_size =$(this)[0].files[0].size;
	var ok_image=$("#ok_image");
	var error_image=$("#error_image");
	var need_img_size=1048576;
	var msg_show='1 MB';
	check_image(thisval,imgage_size,need_img_size,msg_show,ok_image,error_image,val);	  
	});
	$("body").on("change","#hotel_logo",function() {
	var thisval=$(this);
	var val = thisval.val();
	var imgage_size =$(this)[0].files[0].size;
	var ok_image=$("#ok_logo");
	var error_image=$("#error_logo");
	var need_img_size=30712;
	var msg_show='30 KB';
	check_image(thisval,imgage_size,need_img_size,msg_show,ok_image,error_image,val);	  
	});
	$("body").on("click","#complete-details",function(){
	 var error_location=$("#error-detail");	
		if($("#hotel_image").val()==''){
			error_location.html('<div class="alert label-danger alert-dismissible">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong> Please Upload Hotel Main Image</div>').show().delay(5000).fadeOut("slow");	
			return false;
		}else if($("#hotel_logo").val()==''){
			error_location.html('<div class="alert label-danger alert-dismissible">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong> Please Upload Hotel Logo.</div>').show().delay(5000).fadeOut("slow");	
			return false;
		}else if($("#lattitude").val()==''){
			error_location.html('<div class="alert label-danger alert-dismissible">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong> Hotel Lattitude is Missing.</div>').show().delay(5000).fadeOut("slow");	
			return false;
		}else if($("#longitude").val()==''){
			error_location.html('<div class="alert label-danger alert-dismissible">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong> Hotel Longitude is Missing.</div>').show().delay(5000).fadeOut("slow");	
			return false;
		}else if($("#address").val()==''){
			error_location.html('<div class="alert label-danger alert-dismissible">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong> Address is Missing.</div>').show().delay(5000).fadeOut("slow");	
			return false;
		}else if(!check_special_character.test($("#address").val())){
			error_location.html('<div class="alert label-danger alert-dismissible">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong> Address getting special Character.</div>').show().delay(5000).fadeOut("slow");	
			return false;
		}else if($("#zipcode").val()==''){
			error_location.html('<div class="alert label-danger alert-dismissible">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong> Zip Code is Missing.</div>').show().delay(5000).fadeOut("slow");	
			return false;
		}else if($("#zipcode").val().length>8){
			error_location.html('<div class="alert label-danger alert-dismissible">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong> Zip Code not be greter than 6 digits.</div>').show().delay(5000).fadeOut("slow");	
			return false;
		}else if(!check_number.test($("#zipcode").val())){
			error_location.html('<div class="alert label-danger alert-dismissible">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong> ZIP CODE only number.</div>').show().delay(5000).fadeOut("slow");	
			return false;
		}else if($("#about_hotel").val()==''){
			error_location.html('<div class="alert label-danger alert-dismissible">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong> About Detail is Missing.</div>').show().delay(5000).fadeOut("slow");	
			return false;
		}else if(!check_special_character.test($("#about_hotel").val())){
			error_location.html('<div class="alert label-danger alert-dismissible">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong> About Content getting special Character.</div>').show().delay(5000).fadeOut("slow");	
			return false;
		}else {		
			hotel_complete(error_location);
			return false;		
		}	
 });
function hotel_complete(error_location){
	var requestdata=new FormData($("#form-complete")[0]);	
	$("#complete-details").hide();	
	$("#complete-details").after('<div id="loader"><img src="'+load_img+'" alt="loading subcategory" style="width:20%" /></div>');
	$.ajax({				
		type: "POST",
		url: "ajaxfile/hotelfiles/hotel-complete.php",
		data: requestdata,
		processData: false,
		contentType: false,
		success: function(response){
		if(response==1){
		window.location="../";	
		}else{
		error_location.html(response).show().delay(5000).fadeOut("slow");	
		} 
		},error: function (xhr,ajaxOptions,throwError){
			alert("We Have Receive Wrong Request");
			console.log(throwError);
		}, complete: function(jqXHR, textStatus) {
		$('#loader').slideUp(200, function() {$(this).remove(); });
	   $("#complete-details").show();	
		}
	});
}
function check_image(thisval,imgage_size,need_img_size,msg_show,ok_image,error_image,val){
	if(imgage_size>need_img_size){
		thisval.val('');
		ok_image.hide();
		error_image.show().css("color","red").html("Image Size less than "+msg_show);	
		}else{
		switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
			case 'gif': case 'jpg': case 'png': case 'jpeg':
			error_image.hide();	
			ok_image.show(); 
			break;
			default:
				thisval.val('');
				ok_image.hide();
				error_image.show().css("color","red").html("This is Not An Image Type");
				break;
		}
		} 
	   }