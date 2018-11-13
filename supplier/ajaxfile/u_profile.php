<?php  include_once 'connection/request-db.php';
include_once 'connection/request-required.php';
$auth='Basic '.base64_encode(base64_encode(md5(constant("USERNAME"))).':'.base64_encode(md5(constant("PASSWORD"))));
if($_SERVER ["HTTP_AUTHORIZATION"] ==$auth && $_SERVER ["REQUEST_METHOD"] =="POST" && $_SERVER ["REQUEST_METHOD"] =="POST"){
if(isset($_POST["action"]) && $_POST["action"]=='change_password' && (is_numeric(base64_decode($_POST["change_password"])))){
	$user_id	=base64_decode($_POST["change_password"]);
	$password1	=$_POST["password1"];
	$password2	=$_POST["password2"];
	$username		=$_POST["username"];
	$type				=$_POST["type"];
	$select=$db_request->query("select id from  ch_cm  where id='".$user_id."' && (username='".$username."' || password='".md5($username)."')")->fetch_assoc();
if(!empty($select)){
 $update=$db_request->query("update ch_cm set  password='".md5($password2)."' where id='".$user_id."'");
		if($update){
			echo '<div class="alert label-success alert-dismissible" role="alert"> <strong><i class="fa fa-smile-o"></i> <i class="fa fa-smile-o"></i> ! </strong> Password Changed Successfully.</div>';
		}else{
			echo '<div class="alert label-danger alert-dismissible" role="alert">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong>  Password  is not Changed Successfully.</div>';
		} 
}else{
echo '<div class="alert label-danger alert-dismissible" role="alert">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong>  Wrong Username/ Password.</div>';
}
}
}
?>