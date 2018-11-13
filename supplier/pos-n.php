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
    <td><input type='text' class='room' id='room_1' ></td>
    <td><input type='text' class='username' id='username_1' name='product[]' placeholder='Enter Product'></td>    
    <td><input type='text' class='salary' name='salary[]' id='salary_1' ></td>
   </tr>
  </tbody>
  <tfoot id="g_t">
			                                <tr>
			                                    <td><strong>TOTAL</strong></td>
			                                    <td></td>			                                    
                                                            <td><input type='text' class='total' id='total' disabled="" ></td>
			                                </tr>
</tfoot>
 </table>
 <br>
 <input type='button' value='Add more' id='addmore'><br/>

     <button type="button" name="save" id="save" class="btn btn-info">Save</button>
    <br />
<div id="inserted_item_data"></div>
</div>
    <script type="text/javascript">
    $(document).ready(function(){

 $(document).on('keydown', '.username', function() {
 
  var id = this.id;
  var splitid = id.split('_');
  var index = splitid[1];

  // Initialize jQuery UI autocomplete
  $( '#'+id ).autocomplete({
   source: function( request, response ) {
    $.ajax({
     url: "ajaxfile/getProduct.php",
     type: 'post',
     dataType: "json",
     data: {
      search: request.term,request:1
     },
     success: function( data ) {
      response( data );
     }
    });
   },
   select: function (event, ui) {
    $(this).val(ui.item.label); // display the selected text
    var prid = ui.item.value; // selected value

    // AJAX
    $.ajax({
     url: 'ajaxfile/getProduct.php',
     type: 'post',
     data: {proid:prid,request:2},
     dataType: 'json',
     success:function(response){
 
      var len = response.length;
      if(len > 0){
       var id = response[0]['id'];
       var name = response[0]['name'];       
       var prc1 = response[0]['prc'];
       
       document.getElementById('salary_'+index).value = prc1;
 
      }
             //alert($("[name='salary[]']").length)  ;
             var sum=0;
             $("[name='salary[]']").each(function(){
             sum +=parseInt($(this).val());
               console.log(sum);    
             })
             document.getElementById('total').value = sum;
//            for(var i=0;i<$("[name='salary[]']").length;i++){
//
//            	
//            }
 
     }
    });

    return false;
   }
  });
 });
 
 // Add more
 $('#addmore').click(function(){

  // Get last id 
  var lastname_id = $('.tr_input input[type=text]:nth-child(1)').last().attr('id');
  var split_id = lastname_id.split('_');

  // New index
  var index = Number(split_id[1]) + 1;

  // Create row with input elements
  var html = "<tr class='tr_input' id='row"+index+"'><td></td><td><input type='text' class='username' name='product[]' id='username_"+index+"' placeholder='Enter product'></td><td><input type='text' class='salary' name='salary[]' id='salary_"+index+"' ></td><td><button type='button' name='remove' data-row='row"+index+"' class='btn btn-danger btn-xs remove'>-</button></td></tr>";

  // Append data
  $('#res').append(html);
 
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
  $("#g_t").load(location.href + " #g_t>*", "");
 });
 
 $('#save').click(function(){
  var room = $("#room_1").val();
  var total = $("#total").val();
  var item_prod = [];
  var item_price = [];
  
  $("[name='salary[]']").each(function(){
            item_price.push(this.value);
        });
  $("[name='product[]']").each(function(){
            item_prod.push(this.value);
      });  
  
  $.ajax({
   url:"ajaxfile/add_pos.php",
   method:"POST",
   data:{room:room, total:total, item_prod:item_prod, item_price:item_price},
   //dataType: 'JSON',
   success:function(data){
    alert(data);
//    $("td[contentEditable='true']").text("");
//    for(var i=2; i<= count; i++)
//    {
//     $('tr#'+i+'').remove();
//    }
   fetch_item_data();
   }
  }); 
  });
  
 function fetch_item_data()
 {
  $.ajax({
   url:"ajaxfile/fetchpos.php",
   method:"POST",
   success:function(data)
   {
    $('#inserted_item_data').html(data);
   }
  })
 }
 fetch_item_data();

});




//insert data


</script>
    

</body>
</html>