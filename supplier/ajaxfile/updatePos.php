<?php
//session_start();
//print_r($_SESSION);
//insert.php
$connect = mysqli_connect("localhost", "root", "", "CT_CManager");

if(isset($_POST["editid"]))
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