var load_img;
if(load_img ==''){
	load_img='assets/img/loader-1.gif';
}
$(window).load(function() {
		$("#country").after('<div id="loader"><img src="'+load_img+'" alt="loading subcategory" style="width:20%" /></div>');
		$.get('ajaxcall/loadlocation.php?country=country' , function(data) {
		$("#country").html(data); 
		$('#loader').slideUp(200, function() {
		$(this).remove(); 
		});
		$("#country").change();
		});
	
	});
	$("#country").change(function() {
		$(this).after('<div id="loader"><img src="'+load_img+'" alt="loading subcategory" style="width:20%" /></div>');
		$.get('ajaxcall/loadlocation.php?state=' + $(this).val(), function(data) {
		var option='<option>Select State</option>';
		var data1=data;
		var result=option+data;
		$("#state").html(result); 
		$('#loader').slideUp(200, function() {
		$(this).remove(); 
		});
		});
	});
	$("#state").change(function() {
			$(this).after('<div id="loader"><img src="'+load_img+'" alt="loading subcategory" style="width:20%" /></div>');
			$.get('ajaxcall/loadlocation.php?city=' + $(this).val(), function(data) {
			var option='<option>Select City</option>';
			var data1=data;
			var result=option+data;
			$("#city").html(result);
			$('#loader').slideUp(200, function() {
			$(this).remove();
			});
			});
	});