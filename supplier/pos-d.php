<?php include 'includefiles/top-header.php';
include_once 'connection/database.php';
?>

<div class="page-content-wrapper">

    <div class="page-content">

        <div class="page-bar">

            <div class="page-title-breadcrumb">

                <div class=" pull-left">

                    <div class="page-title">Hotel Padmini Palace Discount</div>

                </div>

                <ol class="breadcrumb page-breadcrumb pull-right">

                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="./">Home</a>&nbsp;<i class="fa fa-angle-right"></i>

                    </li>

                    <li class="active">Booking Engine POS</li>

                </ol>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="card card-box">

                    <div class="card-head">

                        <header>Hotel Booking Engine POS</header>

                    </div>

                    <div class="card-body no-padding height-9">

                        <div class="profile-content">

                            <div class="row">

                                <div class="profile-tab-box">

                                    <div class="p-l-20">

                                        <ul class="nav ">

                                            <li class="nav-item tab-all"><a class="nav-link active show" href="#tab1" data-toggle="tab">POS</a></li>

                                            

                                        </ul>

                                    </div>

                                </div>
                                <style>
                                    
                                     *{margin:0px}
                                    #searchbox
                                    {
                                    width:250px;
                                    border:solid 1px #000;
                                    padding:3px;
                                    }
                                    #display
                                    {
                                    width:250px;
                                    display:none;
                                    float:left; 
                                    margin-right:30px;
                                    border-left:solid 1px #dedede;
                                    border-right:solid 1px #dedede;
                                    border-bottom:solid 1px #dedede;
                                    overflow:hidden;
                                    }
                                    .display_box
                                    {
                                    padding:4px;
                                    border-top:solid 1px #dedede;
                                    font-size:12px;
                                    height:30px;
                                    }
                                    .display_box:hover
                                    {
                                    background:#3b5998;
                                    color:#FFFFFF;
                                    }

                                </style>

                                <div class="white-box">

                                    <!-- Tab panes -->

                                    <div class="tab-content">

                                        <div class="tab-pane active fontawesome-demo" id="tab1">

                                            <div id="biography">
                                             <form method="post" action="" id="form_tab1">
                                                <div class="row">
                    	<div class="col-sm-12">
                             <div class="card-box">
                                 <div class="card-head">
                                     <header>Hotel Padmini Palace POS</header>
                                 </div>
                                 <div class="card-body ">
                                 <div class="table-scrollable">
                                 	<table id="mainTable" rules="all" class="table">
			                            <thead>
			                                <tr>
			                                    <th>Room Name</th>
			                                    <th>Product Name</th>
			                                    <th>Product Price</th>
			                                    <th><span style="font:normal 12px agency, arial; color:blue; text-decoration:underline; cursor:pointer;" onclick="addMoreRows(this.form);">
                                                                Add More
                                                                </span></th>
			                                </tr>
			                            </thead>
			                            <tbody >
			                                <tr>
			                                    <td><input name="" type="text"  value="" size="17%"/></td>                                                            
			                                    <td>
                                                             <!--<input type="text" class="search autocomplete" id="autocomplete">-->
<!--                                                             <div id="display">-->
                                                               <input type='text' id='autocomplete' name='search' placeholder='Search product' class='search_lft' />
                                                             </div>
                                                            </td>
			                                    <td>
                                                            <input type="text"  class="search" id="searchbox">  
                                                            </td>			                                    
			                                
                                                       
                                                        
                                                        </tr> </tbody></table>
			                                
			                            <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
<script type="text/javascript">
var rowCount = 1;
function addMoreRows(frm) {
rowCount ++;
var recRow = '<tr id="rowCount'+rowCount+'"><td></td><td><input name="" type="text"  maxlength="120" style="margin: 4px 5px 0 5px;"/></td><td><input name="" type="text" maxlength="120" style="margin: 4px 10px 0 0px;"/></td><td> <a href="javascript:void(0);" class="btn btn-tbl-edit btn-xs" onclick="removeRow('+rowCount+');">Delete</a></td></tr>';
jQuery('#mainTable tr:last').after(recRow);
}

function removeRow(removeNum) {
jQuery('#rowCount'+removeNum).remove();
}
</script>

<script type="text/javascript">
$(document).ready(function()
{
$(".productName").change(function()
{
var id=$(this).val();
var dataString = 'id='+ id;
//alert(dataString);
$.ajax
({
type: "POST",
url: "ajaxfile/add_product.php",
data: dataString,
cache: false,
success: function(html)
{
$(".productPrice").html(html);
} 
});

});

});


//new search thing

$(document).ready(function(){
$(".search").keyup(function()
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;
if(searchbox=='')
{}
else
{
$.ajax({
type: "POST",
url: "ajaxfile/add_product.php",
data: dataString,
cache: false,
success: function(html)
{
$("#display").html(html).show();
}
});
}return false;
});
});
</script>
<!--<script>
//$(function() {
//    $("#searchbox").autocomplete({
//        source: "ajaxfile/add_product.php",
//    });
//});

$(function() {
    $("#searchbox").autocomplete({
        source: "ajaxfile/add_product.php",
        select: function( event, ui ) {
            event.preventDefault();
            $("#searchbox").val(ui.item.id);
        }
    });
});
</script>-->
<!--<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.10.2.min.js" type="text/javascript"></script>-->
<!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"/>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"> </script>-->
<script type="text/javascript">
   $(function () {
// Initialize 
       $("#autocomplete").autocomplete({
           source: function (request, response) {
// Fetch data
               $.ajax({
                   url: "ajaxfile/add_product.php",
                   type: 'post',
                   dataType: "json",
                   data: {
                       search: request.term
                   },
                   success: function (data) {
                   if(!data.length)
                   {
                   var result = [
		       {
		       label: 'No matches found', 
		       value: response.term
		       }
		     ];
		       response(result);
                   }
                   else{
                       console.log(data);
                       response(data);
                   }
                   }
               });
           },
           select: function (event, ui) {
               var ide=ui.item.id;
         //location.href="profile-page1.php?id="+ide;
           $('#autocomplete').val(ui.item.value); // display the selected text
            //$('#autocomplete').val(ui.item.label);
           $('#selectuser_id').val(ui.item.value.id); // save selected id to input
           return false;
           }
       });
   });
</script>
			                        <!--</table>-->
			                        </div>
                                 </div>
                             </div>
                         </div>
                    </div>
                                                </form>
                                     

                                                <hr>					                                   


                                                

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

<?php include '../execute/footer.php'; ?>