<?php include 'includefiles/top-header.php';

?> 
        <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Hotel Padmini Palace Room Details</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="./">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Room Details</li>
                            </ol>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Delux Room Details</header>
									<div class="btn-group pull-right">
                                             <div class="btn-group">
                                                <a href="hotel-room" class="btn btn-circle btn-edit">
                                                   <i class="fa fa-arrow-left"></i> Back </a>
                                            </div>
										</div>
                                       
                                </div>
								<div class="card-body no-padding height-9">
								<div class="profile-content">
                                <div class="row">
									
									<div class="white-box">
					                            <!-- Tab panes -->
				                            <div class="tab-content">
											<?php include 'includefiles/roomfiles/room-details.php'; ?>
											<?php include 'includefiles/roomfiles/room-gallery.php'; ?>
											<?php include 'includefiles/roomfiles/room-fna.php'; ?>		</div>
					                        </div>
											<div class="profile-tab-box">
										<div class="p-l-20"><center>
											<ul class="nav ">												
												<li class="nav-item tab-all"><a class="nav-link btn btn-circle purple active show" href="#tab1" data-toggle="tab">View Details</a></li>
												<li class="nav-item tab-all p-l-20"><a class="nav-link btn btn-circle btn-primary" href="#tab2" data-toggle="tab"> Gallery</a></li>
												<li class="nav-item tab-all p-l-20"><a class="nav-link btn btn-circle yellow" href="#tab3" data-toggle="tab">Facilities & Amenities</a></li>
												
												
											</ul>
											</center>
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
  <? include '../execute/footer.php'; ?>