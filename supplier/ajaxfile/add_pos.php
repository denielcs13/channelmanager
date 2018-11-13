<?php
//session_start();
//print_r($_SESSION);
//insert.php
$connect = mysqli_connect("localhost", "root", "", "CT_CManager");



if(isset($_POST["item_prod"]))
{
$ro = $_POST['room'];
$tot = $_POST['total'];
$item_pr = $_POST['item_prod'];
$item_prc = $_POST['item_price'];
$h_id=111;

$item_pr = implode(",",$item_pr);
$item_prc = implode(",",$item_prc);
//$insertquery = "INSERT INTO userinfo(name,email,lang) VALUES('".$name."','".$email."','".$lang."')";
$q='INSERT INTO `pos_order`(`hotel_id`, `room_no`, `prod_name`, `prod_price`, `total_amount`, `created_on`) VALUES("'.$h_id.'","'.$ro.'", "'.$item_pr.'", "'.$item_prc.'", "'.$tot.'",NOW())';    
if(mysqli_query($connect,$q)){
    echo 'data inserted';
}
 else {
    echo 'data not inserted';    
}
}

if(isset($_GET["id"]))
{
//UPDATE `pos_order` SET `room_no`=,`prod_name`=,`prod_price`=,`total_amount`=,`updated_on`= WHERE `id`
$q="DELETE FROM `pos_order` WHERE `pos_order`.`id` = '".$_GET["id"]."'";   
if(mysqli_query($connect,$q)){
    echo 'Deleted';
    //header('location:pos-n.php');
}
 else {
    echo 'data not deleted';    
}
}

if(isset($_GET["action"]))
{
$id= $_POST['editid'];  
$ro = $_POST['room'];
$tot = $_POST['total'];
$item_pr = $_POST['item_prod'];
$item_prc = $_POST['item_price'];

//$insertquery = "INSERT INTO userinfo(name,email,lang) VALUES('".$name."','".$email."','".$lang."')";
$q='UPDATE `pos_order` SET `room_no`="'.$ro.'",`prod_name`="'.$item_pr.'",`prod_price`="'.$item_prc.'",`total_amount`="'.$tot.'",`updated_on`=NOW() WHERE `id`="'.$id.'"';    
if(mysqli_query($connect,$q)){
    echo 'data updated';
}
 else {
    echo 'data not inserted';    
}
}
?>