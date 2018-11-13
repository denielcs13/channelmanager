<?php include_once '../config/config.php';
$DB = new DBHandler();
if(isset($_GET["country"]) && $_GET["country"]=='country'){
	$country=$DB->runQuery($conn,"select * from country order by country_name asc");
	foreach($country as $val){
		$country_name=(strtolower($val["country_name"])=='india')?'selected="selected"':'';
	echo '<option value="'.$val["id"].'" '.$country_name.'>'.strtoupper($val["country_name"]).'</option>';	
	}
	
}
if(isset($_GET["state"])){
	$state=$DB->runQuery($conn,"select * from state where country_id='".$_GET["state"]."' order by state_name asc");
	foreach($state as $val){
	echo '<option value="'.$val["id"].'">'.strtoupper($val["state_name"]).'</option>';	
	}
	
}
if(isset($_GET["city"])){
	$city=$DB->runQuery($conn,"select * from city where state_id='".$_GET["city"]."' order by city_name asc");
	foreach($city as $val){
	echo '<option value="'.$val["id"].'">'.strtoupper($val["city_name"]).'</option>';	
	}
	
}
?>