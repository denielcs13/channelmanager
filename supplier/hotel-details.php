<?php include 'includefiles/top-header.php'; ?> 
        <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title"><?= $hotel_name; ?></div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="./">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Hotel Details</li>
                            </ol>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Hotel Details</header>

                                       
                                </div>
								<div class="card-body no-padding height-9">
								<div class="profile-content">
                                <div class="row">
									
									<div class="white-box">
					                            <!-- Tab panes -->
				                            <div class="tab-content">
											<?php include 'includefiles/hotelfiles/hotel-details.php'; ?>	
				                            <?php include 'includefiles/hotelfiles/hotel-tax.php'; ?>	
											<?php include 'includefiles/hotelfiles/hotel-cancellation.php'; ?>
											<?php include 'includefiles/hotelfiles/hotel-facility.php'; ?>
											<?php include 'includefiles/hotelfiles/hotel-documents.php'; ?>	
											<?php include 'includefiles/hotelfiles/hotel-connected-ota.php'; ?>
											   </div>
					                        </div>
											<div class="profile-tab-box">
										<div class="p-l-20">
											<ul class="nav ">												
												<li class="nav-item tab-all"><a class="nav-link btn btn-circle purple active show" href="#tab1" data-toggle="tab">View Details</a></li>
												<li class="nav-item tab-all p-l-20"><a class="nav-link btn btn-circle btn-primary" href="#tab2" data-toggle="tab"> Tax</a></li>
												<li class="nav-item tab-all p-l-20"><a class="nav-link btn btn-circle btn-warning" href="#tab3" data-toggle="tab">Cancellation Policy</a></li>
												<li class="nav-item tab-all p-l-20"><a class="nav-link btn btn-circle btn-default" href="#tab4" data-toggle="tab"> Facility</a></li>
												<li class="nav-item tab-all p-l-20"><a class="nav-link btn btn-circle yellow" href="#tab5" data-toggle="tab">Documents</a></li>
												<li class="nav-item tab-all p-l-20"><a class="nav-link btn btn-circle btn-info" href="#tab6" data-toggle="tab">Connected OTA</a></li>
												
											</ul>
										</div>
									</div>
                                     </div>
                                </div>
								<style>.tab-all a.active{border-color: #e91e63 !important;border: 1px solid #e91e63 !important;}</style>
									</div>
								   </div>
                                   </div>  
									</div>
                                </div>
                            </div>
    
	
</div> 
  <?php include '../execute/footer.php'; ?>