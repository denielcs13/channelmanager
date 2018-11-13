<div class="page-container">
<div class="sidebar-container">
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	                <div id="remove-scroll">						
<ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="row">
                                            <div class="sidebar-userpic">
                                                <img src="<?= $logoh; ?>" class="img-responsive" alt="<?= $hotel_name; ?>"> </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="sidebar-userpic-name"> <?= $hotel_name; ?> </div>
                                            <div class="profile-usertitle-job"> Service User </div>
                                        </div>
                                        
	                            </div>
	                        </li>
	                       	<li class="nav-item">
	                            <a href="./" class="nav-link nav-toggle"> <i class="fa fa-home"></i>
	                                <span class="title">Dashboard</span> 
	                            </a>
	                        </li>
							<li class="nav-item ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-list"></i>
	                                <span class="title">Booking Management</span> <span class="selected"></span>
                                	<span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
									<li class="nav-item ">
	                                    <a href="hotel-offline-booking" class="nav-link "> <span class="title">Create Booking </span>
	                                    </a>
	                                </li>								
									<li class="nav-item ">
	                                    <a href="hotel-booking-list" class="nav-link "> <span class="title">Booking List </span>
	                                    </a>
	                                </li>
									<li class="nav-item ">
	                                    <a href="hotel-booking-present-day-checkin" class="nav-link "> <span class="title">Current Check In </span>
	                                    </a>
	                                </li>
									 <li class="nav-item ">
	                                    <a href="hotel-booking-present-day-checkout" class="nav-link "> <span class="title">Current Check Out  </span>
	                                    </a>
	                                </li>
									 <li class="nav-item ">
	                                    <a href="hotel-booking-history" class="nav-link "> <span class="title">Booking History </span>
	                                    </a>
	                                </li>
									
									</ul>
									</li>
								<li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-hotel"></i>
	                                <span class="title">Hotel Management</span> <span class="selected"></span>
                                	<span class="arrow open"></span>
	                            </a>
	                            <ul class="sub-menu">	                                
	                                <li class="nav-item active">
	                                    <a href="hotel-details" class="nav-link "> <span class="title">Hotel Details </span>
	                                    </a>
	                                </li>
									<li class="nav-item ">
	                                    <a href="hotel-room" class="nav-link "> <span class="title">Room Details </span>
	                                    </a>
	                                </li>		
	                            </ul>
	                        </li>
							 <li class="nav-item ">
	                            <a href="#" class="nav-link nav-toggle"> <i class="fa fa-list"></i>
	                                <span class="title">Room Management</span> <span class="selected"></span>
                                	<span class="arrow open"></span>
	                            </a>
	                            <ul class="sub-menu">	                                
									
									 <li class="nav-item ">
	                                    <a href="hotel-room-inventory-calendar" class="nav-link "> <span class="title">Room Management </span>
	                                    </a>
	                                </li>
									 <li class="nav-item ">
	                                    <a href="hotel-room-rate-calendar" class="nav-link "> <span class="title">Rate Management </span>
	                                    </a>
	                                </li>
									
									
	                              </ul>
								  </li>
								
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="fa fa-hotel"></i>
									<span class="title">Booking Engine</span> <span class="selected"></span>
									<span class="arrow open"></span>
								</a>
								<ul class="sub-menu">	                                
									<li class="nav-item active">
										<a href="hotel-website" class="nav-link "> <span class="title"> Website Content</span>
										</a>
									</li> 
									<li class="nav-item active">
										<a href="hotel-discount" class="nav-link "> <span class="title">Website Discount </span>
										</a>
									</li> 
									<li class="nav-item active">
										<a href="hotel-more" class="nav-link "> <span class="title">Website More </span>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="fa fa-hotel"></i>
									<span class="title">Point of Sale</span> <span class="selected"></span>
									<span class="arrow open"></span>
								</a>
								<ul class="sub-menu">	                                
									<li class="nav-item ">
										<a href="hotel-website" class="nav-link "> <span class="title">Point of Sale</span>
										</a>
									</li> 
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="fa fa-hotel"></i>
									<span class="title">Employee</span> <span class="selected"></span>
									<span class="arrow open"></span>
								</a>
								<ul class="sub-menu">	                                
									
									<li class="nav-item active">
										<a href="hotel-discount" class="nav-link "> <span class="title">Employee </span>
										</a>
									</li> 	
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="fa fa-hotel"></i>
									<span class="title">User Management</span> <span class="selected"></span>
									<span class="arrow open"></span>
								</a>
								<ul class="sub-menu">	                                
									
									<li class="nav-item active">
										<a href="hotel-discount" class="nav-link "> <span class="title">User </span>
										</a>
									</li> 	
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="fa fa-hotel"></i>
									<span class="title">Log Report</span> <span class="selected"></span>
									<span class="arrow open"></span>
								</a>
								<ul class="sub-menu">	                                
									<li class="nav-item ">
										<a href="hotel-log-inventory" class="nav-link "> <span class="title">Inventory </span>
										</a>
									</li> 
									<li class="nav-item ">
										<a href="hotel-log-rate" class="nav-link "> <span class="title">Rate </span>
										</a>
									</li> 
									<li class="nav-item ">
										<a href="hotel-log-pos" class="nav-link "> <span class="title">POS </span>
										</a>
									</li> 	
									<li class="nav-item ">
										<a href="hotel-log-employee" class="nav-link "> <span class="title">Employee </span>
										</a>
									</li> 
									<li class="nav-item ">
										<a href="hotel-log" class="nav-link "> <span class="title">Hotel  </span>
										</a>
									</li> 
									<li class="nav-item ">
										<a href="hotel-log-room" class="nav-link "> <span class="title">Room </span>
										</a>
									</li> 
								</ul>
							</li>

							</ul>
</div>
                </div>
            </div>