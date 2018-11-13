<?php include_once '../config/config.php';$DB = new DBHandler();
if(isset($_POST["username"]) && strlen($_POST["username"])>0 && isset($_POST["pass"]) && strlen($_POST["pass"])>0){
	$username=$_POST["username"];
	$password=md5($_POST["pass"]);
	$rem=$_POST["remember-me"];
	$loginby=$_POST["loginby"];
	$query_hms=$DB->runQuery($conn,"select id,active,channel_manager,tripadvisor,admin_active,username,password from ch_cm where username='".$username."'");
	if(!empty($query_hms)){
		if($query_hms[0]['password'] !=$password ){
		echo '<div class="alert label-danger alert-dismissible">Password  is Wrong.</div>';
	} else if($query_hms[0]['active'] !=1 && $query_hms[0]['admin_active'] !=1 && $query_hms[0]['channel_manager'] !=1 && $query_hms[0]['tripadvisor'] !=1){
		echo '<div class="alert label-danger alert-dismissible">Your Account is De-Activated.</div>';
	} else{
		unset($_SESSION["cm_login_admin"]);
		unset($_SESSION["cm_login_atype"]);
		unset($_SESSION["cm_login_aby"]);
		$_SESSION["cm_login_admin"]=$query_hms[0]['id'];		
		$_SESSION["cm_login_aby"]=$loginby;	
		$_SESSION["cm_login_execute"]='supplier';
		echo 1;
		}
	}else{	
	$query=$DB->runQuery($conn,"select id,status,admin_status,username,password from ch_cm_user where username='$username'");
	if(empty($query)){
		echo '<div class="alert label-danger alert-dismissible">UserName not Found.</div>';
	}else if($query[0]['password'] !=$password ){
		echo '<div class="alert label-danger alert-dismissible"> Password  is Wrong.</div>';
	} else if($query[0]['status'] ==0 || $query[0]['admin_status'] !=1){
		echo '<div class="alert label-danger alert-dismissible"> Your Account is De-Activated.</div>';
	} else{
		unset($_SESSION["cm_login_admin"]);
		unset($_SESSION["cm_login_atype"]);
		unset($_SESSION["cm_login_aby"]);
		unset($_SESSION["cm_login_sadmin"]);
		unset($_SESSION["cm_login_sstatus"]);
		unset($_SESSION["cm_login_stype"]);
		unset($_SESSION["cm_login_sby"]);
		$_SESSION["cm_login_sadmin"]=$query[0]['id'];
		$_SESSION["cm_login_sstatus"]=$query[0]['status'];
		$_SESSION["cm_login_sby"]=$loginby;	
		$_SESSION["cm_login_execute"]='dazzle';
		echo 1;
	}
	}
}
?>