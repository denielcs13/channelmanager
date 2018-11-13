<?php  session_start();include_once '../connection/request-db.php';include_once 'upload-image.php';
if(isset($_POST["action"]) && base64_decode($_POST["action"])=='complete_details' && is_numeric(base64_decode($_POST['hotel_id']))){
	$hotel_id=		base64_decode($_POST['hotel_id']);
	$currency=		$_POST['currency'];
	$tax_type=		$_POST['tax_type'];
	$chhose_rating=$_POST['choose_rating'];
	$child_age=		$_POST["choose_child_age"];
	$lattitude=		$_POST['lattitude'];
	$longitude=		$_POST['longitude'];
	$address=		filter_var($db_request->real_escape_string($_POST['address']),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH );
	$land_mark=		filter_var($db_request->real_escape_string($_POST['land_mark']),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH );
	$zipcode=		$_POST['zipcode'];
	$about_hotel=	filter_var($db_request->real_escape_string($_POST['about_hotel']),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH );
	$landline=		$_POST['landline'];
	$image='';
	if(!empty($_FILES["hotel_image"]["name"])){
	$up_hotel				=$_FILES["hotel_image"]["name"];
	$up_hotel_temp			=$_FILES["hotel_image"]["tmp_name"];
	$img_new_name			="hotel_".$hotel_id.date('ynjhis').round(microtime(true));
	$uploads_dir			= '../../../images/hotel/';
	$hotel_image=upload_image($up_hotel,$up_hotel_temp,$img_new_name,$uploads_dir);
	$image.=(!empty($hotel_image))?",hotel_image='".$hotel_image."'":'';
	}
	if(!empty($_FILES["hotel_logo"]["name"])){
	$up_hotel				=$_FILES["hotel_logo"]["name"];
	$up_hotel_temp			=$_FILES["hotel_logo"]["tmp_name"];
	$img_new_name			="logo_".$hotel_id.date('ynjhis').round(microtime(true));
	$uploads_dir			= '../../../images/logo/';
	$hotel_logo=upload_image($up_hotel,$up_hotel_temp,$img_new_name,$uploads_dir);
	$image.=(!empty($hotel_logo))?",hotel_logo='".$hotel_logo."'":'';
	}
	$create_rate=$db_request->query("create table if not exists cm_rateplan_".$hotel_id." (rate_id int unsigned not null auto_increment,room_id varchar(10),hotel_id varchar(10),rate_year varchar(10),rate_month varchar(10),rate_occupancy varchar(10),rateplan varchar(10),d1 varchar(10),d2 varchar(10),d3 varchar(10),d4 varchar(10),d5 varchar(10),d6 varchar(10),d7 varchar(10),d8 varchar(10),d9 varchar(10),d10 varchar(10),d11 varchar(10),d12 varchar(10),d13 varchar(10),d14 varchar(10),d15 varchar(10),d16 varchar(10),d17 varchar(10),d18 varchar(10),d19 varchar(10),d20 varchar(10),d21 varchar(10),d22 varchar(10),d23 varchar(10),d24 varchar(10),d25 varchar(10),d26 varchar(10),d27 varchar(10),d28 varchar(10),d29 varchar(10),d30 varchar(10),d31 varchar(10),primary key(rate_id))");
	$create_inventory=$db_request->query("create table if not exists cm_inventory_".$hotel_id." (inv_id int unsigned not null auto_increment,room_id varchar(10),hotel_id varchar(10),inv_year varchar(10),inv_month varchar(10),d1 varchar(10),d2 varchar(10),d3 varchar(10),d4 varchar(10),d5 varchar(10),d6 varchar(10),d7 varchar(10),d8 varchar(10),d9 varchar(10),d10 varchar(10),d11 varchar(10),d12 varchar(10),d13 varchar(10),d14 varchar(10),d15 varchar(10),d16 varchar(10),d17 varchar(10),d18 varchar(10),d19 varchar(10),d20 varchar(10),d21 varchar(10),d22 varchar(10),d23 varchar(10),d24 varchar(10),d25 varchar(10),d26 varchar(10),d27 varchar(10),d28 varchar(10),d29 varchar(10),d30 varchar(10),d31 varchar(10),primary key(inv_id))");
	$create_discount=$db_request->query("create table if not exists cm_discount_".$hotel_id." (dis_id int unsigned not null auto_increment,room_id varchar(10),rateplan varchar(10),hotel_id varchar(10),start_date date,end_date date,start_time time,end_time time,discount_type varchar(100),discount_name varchar(100),discount_number varchar(15),coupon_code varchar(100),discount_status varchar(10),applied_only varchar(10),discount_created_date date,primary key(dis_id))");
	$update=$db_request->query("update ch_cm set currency='$currency',tax_type='$tax_type',star_category='$chhose_rating',child_consider='$child_age',lattitude='$lattitude',longitude='$longitude',address='$address',landmark='$land_mark',zipcode='$zipcode',hotel_desc='$about_hotel'".$image." where id='".$hotel_id."'");
	if($update){
	$_SESSION["cm_login_admin"]=$_SESSION["cm_login_admin"];		
	$_SESSION["cm_login_aby"]=$_SESSION["cm_login_aby"];	
	$_SESSION["cm_login_execute"]='supplier';	
	echo 1;
	}else{
		echo '<div class="alert label-danger alert-dismissible">  <strong><i class="fa fa-frown-o"></i> <i class="fa fa-frown-o"></i> ! </strong> Process is not Completed.</div>';
	} 
}
?>