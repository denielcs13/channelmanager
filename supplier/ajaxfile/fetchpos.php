<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "CT_CManager");
$output = '';
$query = "SELECT * FROM pos_order ORDER BY id DESC";
$result = mysqli_query($connect, $query);
$output = '
<br />
<h3 align="center">Pos Data</h3>
<table class="table table-bordered table-striped">
 <tr>
  <th>Room No.</th>
  <th>Product Name</th>
  <th>Price</th>
  <th>Total</th>
  <th>Action</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td>'.$row["room_no"].'</td>
  <td>'.$row["prod_name"].'</td>
  <td>'.$row["prod_price"].'</td>
  <td>'.$row["total_amount"].'</td>
  <td><a href="edit-pos.php?id='.$row["id"].'">Edit</a></td>
  <td><a href="ajaxfile/add_pos.php?id='.$row["id"].'">Delete</a></td>
   
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>