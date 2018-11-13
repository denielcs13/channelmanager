<?php
            include_once '../connection/database.php';
            
            //$q2="SELECT id FROM `ch_cm` WHERE `email`='reservations@orienttaj.com'"; 
            
            $disc_a=$_POST['discount_amount1'];
            $disc_n=$_POST['discount_name1'];
            $end_d=$_POST['end_date1'];
            $end_t=$_POST['end_time1'];
            $hotel_i=$_POST['hotel_id1'];
            $plan_i=$_POST['plan_id1'];
            $prop_i=$_POST['prop_id1'];	
            $start_d=$_POST['start_date1'];	
            $start_t=$_POST['start_time1'];
            $date_s = date('Y-m-d', strtotime($start_d));
            $date_e = date('Y-m-d', strtotime($end_d));
            $stat=0;
            
            //print_r($_POST);

//INSERT INTO `cm_discount_3`(`room_id`, `rateplan`, `hotel_id`, `start_date`, `end_date`, `start_time`, `end_time`, `discount_type`, `discount_name`, `discount_status`,`discount_created_date`) VALUES
$q1="INSERT INTO `cm_discount_3`(`room_id`, `rateplan`, `hotel_id`, `start_date`, `end_date`, `start_time`, `end_time`,`discount_name`,`discount_number`,`discount_status`,`discount_created_date`) VALUES('".$prop_i."', '".$plan_i."', '".$hotel_i."', '".$date_s."', '".$date_e."', '".$start_t."', '".$end_t."','".$disc_n."','".$disc_a."','".$stat."',NOW())";
///echo $q1;
if ($db_con->query($q1) === TRUE) {
    $msg="Record inserted";
    echo $msg;
} else {
    echo "Error: " . $q1 . "<br>" . $conn->error;
}

$db_con->close();
?>