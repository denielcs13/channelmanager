<?php include 'includefiles/top-header.php';
include_once '../supplier/connection/database.php';
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

                                            <li class="nav-item tab-all"><a class="nav-link active show" href="#tab1" data-toggle="tab">Edit Product</a></li>

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
                                          <?php
                                               $myQuery = "SELECT * FROM `ch_cm_product` WHERE `prod_id`='".$_GET['id']."'";
                                               $results = mysqli_query($db_con, $myQuery);                                                
                                               $prod=mysqli_fetch_assoc($results);
                                                ?>
                                            <div id="biography">
                                                <div class="col-md-12"><div id="error-update_product"></div>
                                                    <div class="alert label-success alert-dismissible success" style="display:none">Product updated successfully</div>
                                                </div>
                                                 <div class="card-body">
                                                     <form method="post" name="form">                           

								                                        <div class="form-group">

								                                            <label for="simpleFormName">Product Name</label>
                                                                                                            <input type="hidden" id="productId" value="<?= $prod['prod_id']; ?>">

                                                                                                            <input type="email" class="form-control" id="productName" value="<?= $prod['prod_name']; ?>" placeholder="Product Name">

								                                        </div>

								                                        <div class="form-group">

								                                            <label for="simpleFormName">Quantity</label>

                                                                                                            <input type="text" class="form-control" id="productQuantity" value="<?= $prod['prod_type']; ?>" placeholder="Quantity">

								                                        </div>

								                                        <div class="form-group">

								                                            <label for="simpleFormName">Price</label>

                                                                                                            <input type="text" class="form-control" id="productPrice" value="<?= $prod['prod_price']; ?>" placeholder="Price">

								                                        </div>
                                                                                                       <div class="form-group">

								                                            <label for="simpleFormName">Status</label>

                                                                                                            <input type="text" class="form-control" id="productStatus" value="<?= $prod['prod_status']; ?>" placeholder="Status">

								                                        </div>
                                                                                                        

                                                                                               <button type="submit" class="btn btn-primary submit" id="submit">Submit</button>

								                            </form>
                                            </div>

                                                <hr>
                                        
                                            

<!--                                                <br>-->
                                                
                                       <script type="text/javascript" >
                                                $(function() {
                                                $(".submit").click(function() {
                                                var prod_n = $("#productName").val();
                                                var prod_q = $("#productQuantity").val();
                                                var prod_p = $("#productPrice").val();
                                                var prod_s = $("#productStatus").val();
                                                var prod_i = $("#productId").val();
                                                var error_update = $("#error-update_product").val();
                                                var dataString = 'prod_n='+ prod_n + '&prod_q=' + prod_q + '&prod_p=' + prod_p + '&prod_s=' + prod_s + '&prod_i=' + prod_i;
                                                  //alert(dataString);
                                                if(prod_n=='')
                                                {
                                                 error_update.html('<div class="alert label-danger alert-dismissible">Please enter product name</div>').show().delay(5000).fadeOut("slow");	
				                        return false; 
                                                }
                                                if(prod_q=='')
                                                {
                                                error_update.html('<div class="alert label-danger alert-dismissible">Please enter product quantity</div>').show().delay(5000).fadeOut("slow");	
				                        return false; 
                                                }
                                                if(prod_p=='')
                                                {
                                               error_update.html('<div class="alert label-danger alert-dismissible">Please enter product price</div>').show().delay(5000).fadeOut("slow");	
				                        return false; 
                                                }
                                                if(prod_s=='')
                                                {
                                                error_update.html('<div class="alert label-danger alert-dismissible">Please enter product status</div>').show().delay(5000).fadeOut("slow");	
				                        return false; 
                                                }
                                                else
                                                {
                                                $.ajax({
                                                type: "POST",
                                                url: "ajaxfile/add_product.php",
                                                data: dataString,
                                                success: function(){
                                                $('.success').show().delay(2000).fadeOut("slow");
                                                $('.error').fadeOut(200).hide();
                                                }
                                                });
                                                }
                                                return false;
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