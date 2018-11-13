
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
 
 <table border='1' style='border-collapse: collapse;'>
  <thead>
   <tr>
    <th>Username</th>
    <th>Name</th>
    <th>Age</th>
    <th>Email</th>
    <th>Salary</th>
   </tr>
  </thead>
  <tbody>
   <tr class='tr_input'>
    <td><input type='text' class='username' id='username_1' placeholder='Enter username'></td>
    <td><input type='text' class='name' id='name_1' ></td>
    <td><input type='text' class='age' id='age_1' ></td>
    <td><input type='text' class='email' id='email_1' ></td>
    <td><input type='text' class='salary' id='salary_1' ></td>
   </tr>
  </tbody>
 </table>
 <br>
 <input type='button' value='Add more' id='addmore'>
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
     url: "ajaxfile/getDetails.php",
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
    var userid = ui.item.value; // selected value

    // AJAX
    $.ajax({
     url: 'ajaxfile/getDetails.php',
     type: 'post',
     data: {userid:userid,request:2},
     dataType: 'json',
     success:function(response){
 
      var len = response.length;

      if(len > 0){
       var id = response[0]['id'];
       var name = response[0]['name'];
       var email = response[0]['email'];
       var age = response[0]['age'];
       var salary = response[0]['salary'];

       // Set value to textboxes
       document.getElementById('name_'+index).value = name;
       document.getElementById('age_'+index).value = age;
       document.getElementById('email_'+index).value = email;
       document.getElementById('salary_'+index).value = salary;
 
      }
 
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
  var html = "<tr class='tr_input'><td><input type='text' class='username' id='username_"+index+"' placeholder='Enter username'></td><td><input type='text' class='name' id='name_"+index+"' ></td><td><input type='text' class='age' id='age_"+index+"' ></td><td><input type='text' class='email' id='email_"+index+"' ></td><td><input type='text' class='salary' id='salary_"+index+"' ></td></tr>";

  // Append data
  $('tbody').append(html);
 
 });
});
    </script>
</body>
</html>