<?php include 'includefiles/top-header.php'; 
if(!empty($hotel_details)){
?> 
<div class="page-content-wrapper">
                <div class="page-content" style="min-height:1999px">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Admin Profile</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                               <li class="active">Profile</li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-sidebar">
                                <div class="card card-topline-aqua">
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <div class="profile-userpic">
                                                <img src="<?= $imageh;?>" class="img-responsive" alt=""> </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name"> <?= $hotel_name;?></div>
                                            <div class="profile-usertitle-job"> Service User </div>
                                        </div>
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b>Since</b> <a class="pull-right"><?= date("F j,Y",strtotime($hotel_details["reg_date"]));?></a>
                                            </li>
											 <li class="list-group-item">
                                                <b>Owner </b>
                                                <div class="pull-right"><?= ucfirst($name);?></div>
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-head card-topline-aqua">
                                        <header>About Me</header>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="profile-desc">
                                           <?= $hotel_details["hotel_desc"];?>
                                        </div>
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b>Type </b>
                                                <div class="profile-desc-item pull-right">Organization</div>
                                            </li>
											  
                                        </ul>
                                       
                                    </div>
                                </div>
                               
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                
									<div class="card card-topline-aqua">
					                       <div class="row">
															<div class="col-md-12 col-sm-12">
								                                <div class="card-head">
								                                    <header>Password Change</header>
								                                    
								                                </div>
								                                <div class="card-body ">
																<div id="error-password"></div>
								                                    <form method="post">
								                                        <div class="form-group">
								                                            <label for="simpleFormEmail">Current Password or User Name</label>
								                                            <input type="text" class="form-control" id="simpleFormEmail" placeholder="Enter Current Password / user name">
								                                        </div>
																	<div class="form-group">
								                                            <label for="simpleFormPassword">New Password</label>
								                                            <input type="password" class="form-control" id="newpassword" placeholder="New Password">
								                                        </div>
								                                        <div class="form-group">
								                                            <label for="simpleFormPassword">Current Password</label>
								                                            <input type="password" class="form-control" id="simpleFormPassword" placeholder="Confirm Password">
								                                        </div>
								                                        
								                                        <button type="button" id="change_password" class="btn blue btn-outline btn-circle m-b-10">Submit</button>
								                                    </form>
								                                </div>
									                        </div>
															</div>
															</div>
											 <div class="card">
                                    <div class="card-head card-topline-aqua">
                                        <header>Address</header>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="row text-center m-t-10">
                                    <div class="col-md-12">
                                        <p> <?= $hotel_details["address"]; ?></p>
                                    </div>
                                </div>
                                    </div>
                                </div></div>
                                     </div>
                                </div>
                                <!-- END PROFILE CONTENT -->
                            </div>
                        </div>
                    </div>
                <!-- end page content -->
</div>
			</div>
			<script src="../assets/js/js/jquery.min.js" ></script>
			<script>var load_img='<?= $loader1; ?>';</script>
			<script src="js/theme/u-profile.js"> </script>
			<?
}
?>
<? include '../execute/footer.php'; ?>
