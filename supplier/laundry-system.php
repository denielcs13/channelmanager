<?php include 'includefiles/top-header.php';
?>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!-- REMOVE THIS >> <script src="js/jquery.js" type="text/javascript"></script> -->
<!--<script src="js/jquery.datetimepicker.full.js"></script>-->
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<div class="page-content-wrapper">

    <div class="page-content">

        <div class="page-bar">

            <div class="page-title-breadcrumb">

                <div class=" pull-left">

                    <div class="page-title">Hotel Padmini Palace Website</div>

                </div>

                <ol class="breadcrumb page-breadcrumb pull-right">

                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="./">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

                    </li>

                    <li class="active">Booking Engine Website</li>

                </ol>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="card card-box">

                    <div class="card-head">

                        <header>Hotel Booking Engine</header>





                    </div>



                    <div class="card-body no-padding height-9">

                        <div class="profile-content">

                            <div class="row">

                                <div class="profile-tab-box">

                                    <div class="p-l-20">

                                        <ul class="nav ">

                                            <li class="nav-item tab-all"><a class="nav-link active show" href="#tab1" data-toggle="tab">Add Laundry</a></li>

                                            <!--                                            <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab2" data-toggle="tab">Social Links</a></li>
                                            
                                                                                        <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab3" data-toggle="tab">Booking Engine Links</a></li>
                                            
                                                                                        <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab5" data-toggle="tab">Testimonials</a></li>
                                            
                                                                                        <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab6" data-toggle="tab">Our Partner</a></li>
                                            
                                                                                        <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab7" data-toggle="tab">FAQ</a></li>
                                            
                                                                                        <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab8" data-toggle="tab">Privacy Policy</a></li>
                                            
                                                                                        <li class="nav-item tab-all p-l-20"><a class="nav-link" href="#tab9" data-toggle="tab">T & C</a></li>-->

                                        </ul>

                                    </div>

                                </div>

                                <div class="white-box">

                                    <!-- Tab panes -->

                                    <div class="tab-content">

                                        <div class="tab-pane active fontawesome-demo" id="tab1">
                                            <div class="row">

                                                <div class="col-md-12 col-sm-12">

                                                    <div class="card-head">
                                                        <header>Laundry System</header>                                                 
                                                    </div>

                                                    <div class="card-body " id="bar-parent1">

                                                        <div class="card-body ">
                                                            <div class="table-responsive">
                                                                <table id="res" class="table table-striped custom-table table-hover">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Laundry component name</th>
                                                                            <th>Quantity</th>                                                        
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr class='tr_input'>
                                                                            <td><input type="hidden" id="h_id" value="123">
                                                                                <input type='text' id='username_1' name='product[]' placeholder='Enter Luandry Name'></td>    
                                                                            <td><input type='text' name='quantity[]' id='quantity_1'  placeholder="Enter Quantity"></td>                                                       
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <br>
                                                                <input type='button' value='Add more' id='addmore' class="btn btn-info"> <button type="button" name="save" id="save" class="btn btn-info">Save</button>
                                                                <br/>
                                                                <div id="inserted_item_data"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>  

            </div>

        </div>

    </div>
    <script type="text/javascript">
    $(document).ready(function(){ 
 
 // Add more
 $('#addmore').click(function(){

  // Get last id 
  var lastname_id = $('.tr_input input[type=text]:nth-child(1)').last().attr('id');
  var split_id = lastname_id.split('_');

  // New index
  var index = Number(split_id[1]) + 1;

  // Create row with input elements
  var html = "<tr class='tr_input' id='row"+index+"'><td><input type='text' class='username' name='product[]' id='username_"+index+"' placeholder='Enter laundary name'></td><td><input type='text' class='quantity' name='quantity[]' placeholder='Quantity' id='quantity_"+index+"' ></td><td><button type='button' name='remove' data-row='row"+index+"' class='btn btn-danger btn-xs remove'>-</button></td></tr>";

  // Append data
  $('#res').append(html);
 
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 $("#g_t").load(location.href + " #g_t>*", "");
 });
 
 $('#save').click(function(){
  var hotel_id = $("#h_id").val();
  var item_prod = [];
  var item_qty = [];
  
  $("[name='quantity[]']").each(function(){
            item_qty.push(this.value);
        });
  $("[name='product[]']").each(function(){
            item_prod.push(this.value);
      });  
  
  $.ajax({
   url:"ajaxfile/add_luandry.php",
   method:"POST",
   data:{hotel_id:hotel_id, item_prod:item_prod, item_qty:item_qty},
   //dataType: 'JSON',
   success:function(data){
    alert(data);

   fetch_item_data();
   }
  }); 
  });
  
 function fetch_item_data()
 {
  $.ajax({
   url:"ajaxfile/fetchLaundry.php",
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





</div> 

<? include '../execute/footer.php'; ?>