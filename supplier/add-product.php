<?php include 'includefiles/top-header.php';
?>

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

                                            <li class="nav-item tab-all"><a class="nav-link active show" href="#tab1" data-toggle="tab">Add Product</a></li>

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

                                            <div id="biography">
                                                <form method="post" action="" id="form_add_product">
                                                <div class="row">
                                                    <div class="col-md-12"><div id="error-add_product"></div></div>
                                                    
                                                    <div class="col-md-4 col-6"> <strong>Product Name</strong>

                                                        <br>
                                                        <input type="hidden" id="add_product_hotel_id" name="add_product_hotel_id" value="1">
                                                        <input type="text" class="form-control text-muted" id="product_name" name="product_name" placeholder="Product Name">

                                                    </div>

                                                    <div class="col-md-4 col-6"> <strong>Quantity</strong>

                                                        <br>			
                                                        <input type="text" class="form-control text-muted" id="pord_quantity" name="pord_quantity" placeholder="Quantity">

                                                    </div>
                                                  <div class="col-md-4 col-6"> <strong>Price</strong>

                                                        <br>			
                                                        <input type="text" class="form-control text-muted" id="pord_price" name="pord_price" placeholder="Price">

                                                    </div>

                                                    <div class="col-md-9 col-6"> 

                                                    </div>
                                                    <div class="col-md-3 col-6">
                                                        <!--<input type="submit" name="submit" class="btn btn-circle btn-edit" value="Create Discount">-->
                                                        <!--<button type="submit" class="btn btn-primary">Submit</button>-->
                                                        <a onclick="do_addProduct()"><button class='btn btn-circle btn-edit btn_signup' type='submit' id="btn_signup" value=""><i class="fa fa-plus" ></i> Add Product</button></a>
                                                    </div>
                                                
                                                </div>
                                                </form>

                                                <hr>
                            <script type="text/javascript">                                            
                                            function do_addProduct()
                                              {                                                
                                                var prod_n = $("#product_name").val();
                                                var prod_q = $("#pord_quantity").val();
                                                var prod_p = $("#pord_price").val();
                                                var hotel_id=$("#add_product_hotel_id").val();
                                                var error_add_prod=$("#error-add_product");


                                       var dataString='prod_n1='+prod_n+'&prod_q1='+prod_q+'&prod_p1='+prod_p+'&hotel_id1='+hotel_id;
                                       //alert(dataString);

                                            if($.trim(prod_n).length == 0)
                                            {
                                             error_add_prod.html('<div class="alert label-danger alert-dismissible">Please enter product name</div>').show().delay(5000).fadeOut("slow");	
				                        return false;   
                                            }
                                            if($.trim(prod_q).length == 0)
                                            {
                                             error_add_prod.html('<div class="alert label-danger alert-dismissible">Please enter product quantity</div>').show().delay(5000).fadeOut("slow");	
				                        return false;   
                                            }
                                            if($.trim(prod_p).length == 0)
                                            {
                                             error_add_prod.html('<div class="alert label-danger alert-dismissible">Please enter product price</div>').show().delay(5000).fadeOut("slow");	
				                        return false;   
                                            }
                                            
                                            else{

                                                  $.ajax({
                                                        type: "POST",
                                                        //url: "sign-up.php",
                                                        url: "ajaxfile/add_product.php",            
                                                        dataType: "html",
                                                        data: dataString,//"html",
                                                        //console.log(data);
                                                        beforeSend: function(){$('#btn_signup').val('Connecting..');},
                                                        cache: false,
                                                        success:function(msg){
                                                          if(parseInt(msg)!=0)
                                                          {
                                                              error_add_prod.html('<div class="alert label-success alert-dismissible"> Tax Created Successfully .</div>').delay(5000).show().fadeOut("slow");
                                                              //alert(msg)
                                                            //$("body").load("home.php").hide().fadeIn(1500).delay(6000);
                                                          //window.location.href="index.php";
                                                          }
                                                          else
                                                          { 
                                                            alert(msg); 
//                                                            $('#btn_signup').val('Signup');            
//                                                            $('#frgt_pwd').css('display','block');  
                                                          }
                                                        },
                                                        error:function(){
//                                                          $('#btn_login').val('Signup');
                                                          alert('Sorry Try Again!');
                                                      }
                                                });//end of the ajax function
                                                }//end of the trim if
                                                
                                       //alert('working');
                                              
                                            }
                                            
                                            </script>
                                            

<!--                                                <br>-->
                                                <div class="card-body ">
                                                    <div class="table-scrollable">
                                                        <table class="table table-hover table-checkable order-column full-width" id="example4">
                                                            <thead>
                                                                <tr>
                                                                    <th class="center">Product Name</th>
                                                                    <th class="center">Product Quantity</th>
                                                                    <th class="center">Product Price</th>                                                     
                                                                    <th class="center">Status </th>	                                                
                                                                    <th class="center">Action </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="rf_div">
                                                                <?php 
                              
                                        $sql = "SELECT * FROM `ch_cm_product`";
                                        $result = $db_con->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                $p_id=$row['prod_id'];
                                                $p_name=$row['prod_name'];
                                                $p_type=$row['prod_type'];
                                                $p_price=$row['prod_price'];
                                                $p_status=$row['prod_status'];
                                                
                                        
                                        ?>
                                                                <tr class="odd gradeX">
<!--													<td class="user-circle-img sorting_1">
                                                                                <img src="assets/img/user/user1.jpg" alt="">
                                                                        </td>-->
                                                                    <td class="center"><?php echo $p_name; ?></td>
                                                                    <td class="center"><?php echo $p_type; ?></td>
                                                                    <td class="center"><?php echo $p_price; ?></td>
                                                                    <td class="center">
                                                                        <?php if($p_status==0) {
							echo '<a id="'.$p_id.'" class="btn btn-tbl-edit btn-xs btn-danger status_class" title="Inactive">
                                                                            <i class="fa fa-toggle-on"></i>
                                                                        </a>';
							}
							else {
							?>
                                                                        <a id="<?php echo $p_id;?>" class="btn btn-tbl-edit btn-xs btn-success status_inactive_class" title="Active">
                                                                            <i class="fa fa-toggle-on"></i>
                                                                        </a>
                                                        
                                                        <?php } ?>
                                                                    </td>
                                                                    <td class="center">
                                                                        <a href="edit-product.php?id=<?php echo $p_id;?>" class="btn btn-tbl-edit btn-xs" title="Edit">
                                                                            <i class="fa fa-edit"></i>
                                                                        </a>
                                                                        <a id="<?php echo $p_id;?>" class="btn btn-tbl-delete btn-xs delete_class" title="Delete">
                                                                            <i class="fa fa-trash-o "></i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                                
                                                                    }
                                                                }
                                                                ?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <script>    
                                                $('a.delete_class').click(function(){
                                                    var tr = $(this).parent().parent(),
                                                        del_id = $(this).attr('id');

                                                    $.ajax({
                                                        url: "ajaxfile/add_product.php?delete_id="+ del_id,
                                                        cache: false,
                                                        success:function(result){
//                                                            tr.fadeOut(1000, function(){
//                                                                $(this).remove();
//                                                            });
                                                      $("#rf_div").load(location.href+" #rf_div>*","");
                                                        }
                                                    });
                                                });
                                        </script>
                                        <script>    
                                                $('a.status_class').click(function(){
                                                    var tr = $(this).parent(),
                                                        status_id = $(this).attr('id');

                                                    $.ajax({
                                                        url: "ajaxfile/add_product.php?stat_id="+ status_id,
                                                        cache: false,
                                                        success:function(result){
//                                                            tr.fadeOut(1000, function(){
//                                                                $(this).remove();
//                                                            });
                                                     $("#rf_div").load(location.href+" #rf_div>*","");
                                                        }
                                                    });
                                                });
                                                
                                                $('a.status_inactive_class').click(function(){
                                                    var tr = $(this).parent(),
                                                        p_id = $(this).attr('id');

                                                    $.ajax({
                                                        url: "ajaxfile/add_product.php?sts_inactive="+ p_id,
                                                        cache: false,
                                                        success:function(result){
//                                                            tr.fadeOut(1000, function(){
//                                                                $(this).remove();
//                                                            });
                                                           $("#rf_div").load(location.href+" #rf_div>*","");
                                                        }
                                                    });
                                                });
                                        </script>

                                            </div>

                                        </div>

<!--                                        <div class="tab-pane" id="tab2">

                                            <div class="container-fluid">

                                                <div class="row">

                                                    <div class="col-md-12">

                                                        <div id="owl-demo2" class="owl-carousel owl-theme" style="opacity: 1; display: block;">

                                                            <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 4304px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 269px;"><div class="item"><img src="assets/img/slider/owl1.jpg" alt="">

                                                                        </div></div><div class="owl-item" style="width: 269px;"><div class="item"><img src="assets/img/slider/owl2.jpg" alt="">

                                                                        </div></div><div class="owl-item" style="width: 269px;"><div class="item"><img src="assets/img/slider/owl3.jpg" alt="">

                                                                        </div></div><div class="owl-item" style="width: 269px;"><div class="item"><img src="assets/img/slider/owl4.jpg" alt="">

                                                                        </div></div><div class="owl-item" style="width: 269px;"><div class="item"><img src="assets/img/slider/owl5.jpg" alt="">

                                                                        </div></div><div class="owl-item" style="width: 269px;"><div class="item"><img src="assets/img/slider/owl6.jpg" alt="">

                                                                        </div></div><div class="owl-item" style="width: 269px;"><div class="item"><img src="assets/img/slider/owl7.jpg" alt="">

                                                                        </div></div><div class="owl-item" style="width: 269px;"><div class="item"><img src="assets/img/slider/owl8.jpg" alt="">

                                                                        </div></div></div></div>















                                                            <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>

                                                    </div>

                                                </div></div>

                                        </div>-->

<!--                                        <div class="tab-pane" id="tab3">

                                            <div class="row">

                                                <div class="col-md-12 col-sm-12">

                                                    <div class="card-head">

                                                        <header>Password Change</header>

                                                        <button id="panel-button2" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">

                                                            <i class="material-icons">more_vert</i>

                                                        </button>

                                                        <div class="mdl-menu__container is-upgraded"><div class="mdl-menu__outline mdl-menu--bottom-right"></div><ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect mdl-js-ripple-effect--ignore-events" data-mdl-for="panel-button2" data-upgraded=",MaterialMenu,MaterialRipple">

                                                                <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">assistant_photo</i>Action<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>

                                                                <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">print</i>Another action<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>

                                                                <li class="mdl-menu__item mdl-js-ripple-effect" tabindex="-1" data-upgraded=",MaterialRipple"><i class="material-icons">favorite</i>Something else here<span class="mdl-menu__item-ripple-container"><span class="mdl-ripple"></span></span></li>

                                                            </ul></div>

                                                    </div>

                                                    <div class="card-body " id="bar-parent1">

                                                        <form>

                                                            <div class="form-group">

                                                                <label for="simpleFormEmail">User Name</label>

                                                                <input type="email" class="form-control" id="simpleFormEmail" placeholder="Enter user name">

                                                            </div>

                                                            <div class="form-group">

                                                                <label for="simpleFormPassword">Current Password</label>

                                                                <input type="password" class="form-control" id="simpleFormPassword" placeholder="Current Password">

                                                            </div>

                                                            <div class="form-group">

                                                                <label for="simpleFormPassword">New Password</label>

                                                                <input type="password" class="form-control" id="newpassword" placeholder="New Password">

                                                            </div>

                                                            <button type="submit" class="btn btn-primary">Submit</button>

                                                        </form>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>-->

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

<? include '../execute/footer.php'; ?>