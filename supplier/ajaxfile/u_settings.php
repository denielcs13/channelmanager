<?php include_once 'connection/request-db.php';
include_once 'connection/request-required.php';
$auth='Basic '.base64_encode(base64_encode(md5(constant("USERNAME"))).':'.base64_encode(md5(constant("PASSWORD"))));
if($_SERVER ["HTTP_AUTHORIZATION"] ==$auth && $_SERVER ["REQUEST_METHOD"] =="POST" && $_SERVER ["REQUEST_METHOD"] =="POST"){
if(isset($_POST["action"]) && $_POST["action"]=='default_settings' && (is_numeric(base64_decode($_POST["default_settings"])))){
	$user_id	=base64_decode($_POST["default_settings"]);
	$update=$db_request->query("update ch_cm set  theme_layout='',h_brand='',h_color='',	sidebar_color='',sidbar_theme='' where id='".$user_id."'");
		if($update){
			echo '<div class="alert label-success alert-dismissible" role="alert"> <strong><i class="fa fa-smile-o"></i> <i class="fa fa-smile-o"></i> ! </strong> Default Setting is updated Successfully.</div>';
		}else{
			echo '<div class="alert label-danger alert-dismissible" role="alert">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong>  Default Setting is not updated Successfully.</div>';
		}
}
if(isset($_POST["action"]) && $_POST["action"]=='change_settings' && (is_numeric(base64_decode($_POST["change_settings"])))){
	$user_id	=base64_decode($_POST["change_settings"]);
	$h_brand	=$_POST["h_brand"];
	$h_color	=$_POST["h_color"];
	$theme_layout	=$_POST["theme_layout"];
	$sidebar_color	=$_POST["sidebar_color"];
	$sidbar_theme	=$_POST["sidbar_theme"];
	$update=$db_request->query("update ch_cm set  theme_layout='".$theme_layout."',h_brand='".$h_brand."',h_color='".$h_color."',	sidebar_color='".$sidebar_color."',sidbar_theme='".$sidbar_theme."' where id='".$user_id."'");
		if($update){
			echo '<div class="alert label-success alert-dismissible" role="alert"> <strong><i class="fa fa-smile-o"></i> <i class="fa fa-smile-o"></i> ! </strong>  Setting has been changed Successfully.</div>';
		}else{
			echo '<div class="alert label-danger alert-dismissible" role="alert">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong>  Setting is not chenged Successfully.</div>';
		}
}
}
?>

