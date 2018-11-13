<?php 
if(isset($_GET["id"]))
{
$con = mysqli_connect("localhost", "root", "", "CT_CManager");
$sql1=mysqli_query($con,"SELECT * FROM `pos_order` WHERE `id`='".$_GET['id']."'");
$row=mysqli_fetch_assoc($sql1);				 	
}
?>


<!DOCTYPE html>
<html>
<head>
<title></title>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!-- REMOVE THIS >> <script src="js/jquery.js" type="text/javascript"></script> -->
<!--<script src="js/jquery.datetimepicker.full.js"></script>-->
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
<div class="container">
 
    <table border='1' id="res" style='border-collapse: collapse;'>
  <thead>
   <tr>
    <th>Room Number</th>   
    <th>Product Name</th>
    <th>Product Price</th>    
   </tr>
  </thead>
  <tbody>
      
   <tr class='tr_input'>       
       <td><input type="hidden" id='editid' value="<?= $row['id'] ?>">
           <input type='text' class='room' value="<?= $row['room_no'] ?>" id='room_1' ></td>
    <td><input type='text' class='username' value="<?= $row["prod_name"] ?>"id='username_1' name='product[]' placeholder='Enter Product'></td>    
    <td><input type='text' class='salary' value="<?= $row["prod_price"] ?>" name='salary[]' id='salary_1' ></td>
   </tr>
  </tbody>
  <tfoot id="g_t">
			                                <tr>
			                                    <td><strong>TOTAL</strong></td>
			                                    <td></td>			                                    
                                                            <td><input type='text' value="<?= $row["total_amount"] ?>" class='total' id='total' ></td>
			                                </tr>
</tfoot>
 </table>
 <br>
      <button type="button" name="save" id="save" class="btn btn-info">Save</button>
    <br />
<div id="inserted_item_data"></div>
</div>
    <script type="text/javascript">
   
 $('#save').click(function(){ 
 
  var editid = $("#editid").val();
  var room = $("#room_1").val();
  var item_prod = $("#username_1").val();
  var item_price = $("#salary_1").val();
  var total = $("#total").val();
  $.ajax({
   url:"ajaxfile/updatePos.php",
   method:"POST",
   data:{room:room, editid:editid, total:total, item_prod:item_prod, item_price:item_price},
   success:function(data)
   {
    alert(data);
   }
  })
});



//insert data


</script>
    

</body>
</html>