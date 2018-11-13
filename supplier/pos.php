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
                                                        <select name="productName" class="form-control productName">
                                                        <option selected="selected">--Select Product--</option>
                                                        <?php 
                              
                                        $sql = "SELECT * FROM `ch_cm_product`";
                                        $result = $db_con->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                $p_id=$row['prod_id'];
                                                $p_name=$row['prod_name'];                                                                                              
                                        
                                                   ?>
	                                                <option value='<?php echo $p_id;?>'><?php echo $p_name; ?></option>
	                                                <?php
                                                                
                                                                   }
                                                      }
                                                        ?>
	                                            </select>
                                                            </td>
			                                    <td>
                                                                <select name="productPrice" class="form-control productPrice">
                                                                <option selected="selected">--price--</option>
                                                                </select>
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
url: "search.php",
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