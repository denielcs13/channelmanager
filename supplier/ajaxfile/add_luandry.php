<?php 

$connect = mysqli_connect("localhost", "root", "", "CT_CManager");

if(isset($_POST["item_prod"]))
{
$h_id = $_POST['hotel_id'];
$item_pr = $_POST['item_prod'];
$item_qty = $_POST['item_qty'];
$status=1;
$action='Clean';
$cnt=count($item_pr);
//echo $cnt;die;

 $query = '';
 for($count = 0; $count<count($item_pr); $count++)
 {
  $item_name_clean = mysqli_real_escape_string($connect, $item_pr[$count]);
  $item_qty_clean = mysqli_real_escape_string($connect, $item_qty[$count]);
echo $item_name_clean.''.$item_qty_clean;
  
  if($item_name_clean != '' && $item_qty_clean != '' )
  {
//$query='INSERT INTO `ch_cm_laundry`(`h_id`, `l_prod`, `l_qty`, `l_stock`, `l_action`, `l_status`, `l_createdOn`) VALUES 
//("'.$h_id.'", "'.$item_name_clean.'", "'.$item_qty_clean.'", "'.$item_qty_clean.'", "'.$action.'", "'.$status.'",NOW())';
//  
$query .= '
   INSERT INTO `ch_cm_laundry`(`h_id`, `l_prod`, `l_qty`, `l_stock`, `l_action`, `l_status`, `l_createdOn`) VALUES 
("'.$h_id.'", "'.$item_name_clean.'", "'.$item_qty_clean.'", "'.$item_qty_clean.'", "'.$action.'", "'.$status.'",NOW()); 
   ';
//echo $query;
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connect, $query))
  {
   echo 'Item Data Inserted';
  }
  else
  {
   echo 'Error';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>