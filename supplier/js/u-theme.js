function ajaxauthentication(){
		var username=$("#u").val();
		var password=$("#p").val();
		var tok = username + ':' + password;
		var hash = btoa(tok);
		return "Basic "+hash;
}