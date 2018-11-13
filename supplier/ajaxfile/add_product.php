<?php

include_once '../connection/database.php';

if (isset($_POST["prod_n1"]) && ($_POST["prod_q1"]) && ($_POST['prod_p1'])) {

    $p_name =
            $_POST['prod_n1'];
    $p_quantity =
            $_POST['prod_q1'];
    $p_price =
            $_POST['prod_p1'];
    $stat =
            0;

    $q1 =
            "INSERT INTO `ch_cm_product`(`prod_name`, `prod_type`, `prod_price`, `prod_status`, `prod_created_date`) VALUES ('" . $p_name . "','" . $p_quantity . "','" . $p_price . "','" . $stat . "',NOW())";

    if ($db_con->query($q1) === TRUE) {
        $msg =
                "Record inserted";

        echo $msg;
    } else {
        echo "Error: " . $q1 . "<br>" . $conn->error;
    }

    $db_con->close();
}

if (isset($_GET["delete_id"])) {

    $del_id =
            $_GET['delete_id'];

    $q2 =
            "DELETE FROM `ch_cm_product` WHERE `ch_cm_product`.`prod_id` = '" . $del_id . "'";
    if ($db_con->query($q2) === TRUE) {
        $msg =
                "Deleted successfully";
        echo $msg;
    } else {
        echo "Error: " . $q2 . "<br>" . $conn->error;
    }

    $db_con->close();
}


if (isset($_POST['prod_n']) && ($_POST['prod_q']) && ($_POST['prod_p']) && ($_POST['prod_s']) && ($_POST['prod_i'])) {

    $q5 =
            "UPDATE `ch_cm_product` SET `prod_name`='" . $_POST['prod_n'] . "',`prod_type`='" . $_POST['prod_q'] . "',`prod_price`='" . $_POST['prod_p'] . "',`prod_status`='" . $_POST['prod_s'] . "',`prod_created_date`=NOW() WHERE `prod_id`='" . $_POST['prod_i'] . "'";
    echo $q5;
    if ($db_con->query($q5) === TRUE) {
        $msg =
                "Updated successfully";
        echo $msg;
    } else {
        echo "Error: " . $q5 . "<br>" . $conn->error;
    }

    $db_con->close();
}


if (isset($_GET["stat_id"])) {

    $sts_id =
            $_GET['stat_id'];

    $q3 =
            "UPDATE `ch_cm_product` SET `prod_status` = '1' WHERE `ch_cm_product`.`prod_id`= '" . $sts_id . "'";
    echo $q3;
    if ($db_con->query($q3) === TRUE) {
        $msg =
                "Status Updated successfully";
        echo $msg;
    } else {
        echo "Error: " . $q3 . "<br>" . $conn->error;
    }

    $db_con->close();
}

if (isset($_GET["sts_inactive"])) {

    $sts_id =
            $_GET['sts_inactive'];

    $q4 =
            "UPDATE `ch_cm_product` SET `prod_status` = '0' WHERE `ch_cm_product`.`prod_id`= '" . $sts_id . "'";
    echo $q4;
    if ($db_con->query($q4) === TRUE) {
        $msg =
                "Status Inactived";
        echo $msg;
    } else {
        echo "Error: " . $q4 . "<br>" . $conn->error;
    }

    $db_con->close();
}



if (isset($_POST["id"])) {
  $id=$_POST['id'];
  $sql ="SELECT * FROM `ch_cm_product` WHERE `prod_id`='".$id."'"; 
echo $sql;
   $result = $db_con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $p_id =$row['prod_id'];
        $p_price = $row['prod_price'];            
       echo '<option value="' . $p_id . '">' . $p_price . '</option>';
            //echo '<input class="form-control productPrice" name="productPrice" type="text"  value="' . $p_price . '" />';
    }
} else {
    echo "0 results";
}
$db_con->close();
}

//search

if($_POST) {
  $prodData = array();
  $t=mysqli_real_escape_string($db_con,($_POST['search']));
  
  $sql ="SELECT * FROM `ch_cm_product` WHERE `prod_name` LIKE '%$t%' order by prod_id LIMIT 5"; 
//echo $sql;
   $result = $db_con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $prodData[] = array("value"=>$row['prod_name'],"id"=>$row["prod_id"]);
       
       
}
$db_con->close();
}
echo json_encode($prodData);
}
?>
  
