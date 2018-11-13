<?php include 'connection/database.php';
$system_id=$_SESSION["cm_login_admin"]=isset($_SESSION["cm_login_admin"])?$_SESSION["cm_login_admin"]:'';
$hotel_details=$db_con->query("select * from ch_cm where id='$system_id' && admin_active='1' && (active='1' || channel_manager='1'  || tripadvisor='1')")->fetch_assoc();
if(empty($hotel_details)){
	header('Location:../login');
}
$hotel_name=ucwords(strtolower($hotel_details["hotel_name"])); 
$htl_image='../images/hotel/'.$hotel_details["hotel_image"];
$htl_logo='../images/logo/'.$hotel_details["hotel_logo"];
$hotel_no_image='../assets/img/no-image.png';
$imageh=(!empty($hotel_details["hotel_image"]) && ($hotel_details["hotel_image"] !='0') && file_exists($htl_image))?$htl_image:$hotel_no_image;
$logoh=(!empty($hotel_details["hotel_logo"]) && ($hotel_details["hotel_logo"] !='0') &&  file_exists($htl_logo))?$htl_logo:$hotel_no_image;
if(empty($hotel_details["currency"]) || empty($hotel_details["tax_type"]) || empty($hotel_details["lattitude"])  || empty($hotel_details["longitude"]) || empty($hotel_details["address"]) || empty($hotel_details["zipcode"])){
	header('Location:hotel-complete');	
	
}

$h_color= (!empty($hotel_details["h_color"]))?$hotel_details["h_color"]:'header-white';
$h_brand= (!empty($hotel_details["h_brand"]))?$hotel_details["h_brand"]:'logo-dark';
$sidebar_color= (!empty($hotel_details["sidebar_color"]))?$hotel_details["sidebar_color"].'-sidebar-color':'dark-sidebar-color';
if($hotel_details["sidbar_theme"]==1){
	$sidebar_color =' white-sidebar-color ';
	$h_brand = ' logo-white';
}else if($hotel_details["sidbar_theme"]==2){
	$sidebar_color =' dark-sidebar-color ';
	$h_brand = ' logo-dark ';
}
$container_class='';
if($hotel_details["theme_layout"]=='top'){
	$sidebar=$hotel_details["theme_layout"];
	$body_color='page-header-fixed sidemenu-closed-hidelogo page-content-white page-md page-full-width '.$h_color.' '.$sidebar_color.' '.$h_brand;
}else if($hotel_details["theme_layout"]=='right'){
	$sidebar=$hotel_details["theme_layout"];
	$body_color='page-header-fixed sidemenu-closed-hidelogo page-content-white page-md sidemenu-container-reversed '.$h_color.' '.$sidebar_color.'  '.$h_brand;
}else if($hotel_details["theme_layout"]=='left'){
	$sidebar=$hotel_details["theme_layout"];
	$body_color=' page-header-fixed sidemenu-closed-hidelogo page-content-white page-md '.$h_color.'  '.$sidebar_color.' '.$h_brand;	
}else if($hotel_details["theme_layout"]=='box'){
	$container_class='container';
	$sidebar=$hotel_details["theme_layout"];
	$body_color='page-header-fixed sidemenu-closed-hidelogo page-content-white page-boxed page-md '.$h_color.'  '.$sidebar_color.'  '.$h_brand;
}else{
	$sidebar='top';
	$body_color='page-header-fixed sidemenu-closed-hidelogo page-content-white page-md page-full-width '.$h_color.'   '.$sidebar_color.'  '.$h_brand;
}
$s_name='C2S HUB';
$s_logo='../assets/img/logo.png';//$hotel_details["logo"];
$name=$hotel_details["name"];
$new_name = explode(" ", $hotel_name);
$name_1 = "";
foreach ($new_name as $new_name_val) {
    $name_1 .= substr($new_name_val, 0, 1);
}

include '../execute/header.php';
if($h_color=='header-white'){
?>
<style>
.page-header.navbar .menu-toggler>span, .page-header.navbar .menu-toggler>span:after, .page-header.navbar .menu-toggler>span:before, .page-header.navbar .menu-toggler>span:hover, .page-header.navbar .menu-toggler>span:hover:after, .page-header.navbar .menu-toggler>span:hover:before{background: #000000;}
</style>
<?php

}
$loader1='../assets/img/loader-1.gif';
$loader2='../assets/img/loader-2.gif';
?>
<style> #response  .table td { cursor: default;}#response  .table  #status_loader{width:50%} .table th{border-top: none;}.table-responsive{margin-top: 20px;} .img-circle {height: 29px;width: 33px;}.sidebar-userpic img{height: 68px; width: 75px;}</style>
<?php if(!empty($hotel_details)){
	echo '<script src="js/theme.js"></script><input type="hidden" value="'.base64_encode('1').'" id="s_admin" /><input type="hidden" value="'.base64_encode($system_id).'" id="h_admin" /><input type="hidden" value="'.base64_encode(md5('xxxxT_xxxxu')).'" id="u" /><input type="hidden" value="'.base64_encode(md5('xxxxT_x0xxp')).'" id="p" />';
}
?>
    <div class="page-wrapper">
			<?php include 'includefiles/'.$sidebar.'.php'; ?>