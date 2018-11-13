<?php include_once '../config/config.php';
$DB = new DBHandler();
if(isset($_POST["add_hoteliername"]) && strlen($_POST["add_hoteliername"])>0){
	$user_id	=$_POST["hotel_add_userid"];
	$name		=$_POST["add_hoteliername"];
	$hotel_name	=$_POST["hotel_name"];
	$username	=$_POST["hotel_username"];
	$email		=$_POST["hotel_email"];
	$mobile		=$_POST["hotel_mobile"];
	$website	=$_POST["hotel_website"];
	$password	=$_POST["hotel_password"];
	$country	=$_POST["hotel_country"];
	$state		=$_POST["hotel_state"];
	$city		=$_POST["hotel_city"];
	$date		=date("Y-m-d");
	$count_s=$DB->numRows($conn,"select username from ch_cm_user where username='".$username."'");	
	$count=$DB->numRows($conn,"select username from ch_cm where username='".$username."'");
	if($count_s>0){
		echo '<div class="alert label-danger alert-dismissible"> UserName already Taken</div>'; 
	}else if($count>0){
		echo '<div class="alert label-danger alert-dismissible"> UserName already Taken</div>'; 
	}else {
		$nationality=($country=='1')?'National':'International';
		$insert=$DB->insertQuery($conn,"insert into ch_cm(`name`,`hotel_name`,`username`,`email`,`mobile`,`website`,`password`,`country`,`state`,`city`,`user_id`,reg_date,nationality)values('".$conn->real_escape_string($name)."','".$conn->real_escape_string($hotel_name)."','".$conn->real_escape_string($username)."','".$email."','".$mobile."','".$website."','".md5($password)."','".$country."','".$state."','".$city."','1','".$date."','".$nationality."')");
		if($insert){
			echo 1;
		}else{
			echo '<div class="alert label-danger alert-dismissible"> Hotel is not Register</div>';
		}
	}
}
?>