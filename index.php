<?php session_start();
	if(isset($_SESSION["cm_login_sadmin"]) &&  ($_SESSION["cm_login_execute"]=='dazzle')){
		unset($_SESSION["cm_login_execute"]);
		header ('location:./dazzle/dashboard');
	}else if(isset($_SESSION["cm_login_admin"]) && ($_SESSION["cm_login_execute"]=='supplier')){
		unset($_SESSION["cm_login_execute"]);
		header ('location:./supplier/dashboard');
	}else{
		header ('location:./login');
	}
?>