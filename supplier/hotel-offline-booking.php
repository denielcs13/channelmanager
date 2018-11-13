<?php include 'includefiles/top-header.php'; ?> 
        
		<div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Hotel Padmini Palace Hotel Offline Booking</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="./">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Hotel Offline Booking</li>
                            </ol>
                        </div>
                    </div>
					
	<div class="row">
		<div class="col-md-12">
			<div class="card card-box">
				<div class="card-head">
					<header>Hotel Offline Booking</header>                                       
				</div>
				<div class="card-body">
				<form method="post" id="form_search_booking">
			<input type="hidden" value="booking" name="request_type">
				<div class="form-group"> 
				<div id="error-bookings"></div>
				<div class="col-md-8 col-sm-6">
			<label class="control-label"> Guest Name</label><br/>
					<input class="form-control" type="text" name="guest_name" placeholder="Guest Name" id="guest_name" >
				</div>
				<div class="col-md-8 col-sm-6"> 
			<label class="control-label">Guest Email ID</label><br/>
					<input class="form-control" type="text" name="guest_email_id" placeholder="Guest Email ID" id="guest_email_id" >
				</div>
				<div class="col-md-8 col-sm-6">
			<label class="control-label">Guest Mobile Number</label><br/>
					<input class="form-control" type="number" name="guest_mobile" placeholder="Guest Mobile Number" id="guest_mobile" >
				</div>
				<div class="col-md-8 col-sm-6">
			<label class="control-label">Booking ID</label><br/>
					<input class="form-control" type="text" name="booking_id" placeholder="Booking ID" id="booking_id" >
				</div>
				<div class="col-md-8 col-sm-6">
			<label class="control-label">Booking Status</label><br/>
					<select class="form-control" name="booking_status" id="booking_status" >
					<option value="" >All</option>
					<option value="1" >Hold Booking</option>
					<option value="2" >Confirm Booking</option>
					<option value="3" >modify Booking</option>
					<option value="4" >Cancelled Booking</option>
					<option value="5" >Guest Check In</option>
					<option value="6" >Guest Check Out</option>
					</select>
				</div>
				<div class="col-md-8 col-sm-6">
			<label class="control-label">No. Rooms</label><br/>
					<select class="form-control" name="booking_rooms" id="booking_rooms" >
					<option value="">All</option>
					<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>					</select>
				</div>
			    <div class="col-md-8 col-sm-6">
			<label class="control-label">View Booking</label><br/>
					<select class="form-control" name="view_booking" id="view_booking" >
					<option value="">All</option>
					<option value="bd">Booking Date</option>
					<option value="sd">Stay Date</option>
					<option value="cd">Check In Date</option>
					</select>
				</div>
				<div class="col-md-8 col-sm-6">
			<label class="control-label"> Start Date</label><br/>
					<input class="form-control" type="date" name="start_date" placeholder="Booking Start Date" id="start_date" >
				</div>
				<div class="col-md-8 col-sm-6">
				<label class="control-label">End Date</label><br/> 
					<input class="form-control" type="date" name="end_date" placeholder="Booking End Date" id="end_date" >
				</div>
			<div class="col-md-8 form-group">
			<label class="control-label">Hotel Type</label><br/>
					<select class="form-control" name="room_type" id="room_type" >
					<option value="">All</option>
					<option value="88">Hotel J K Inn</option><option value="89">Maa Ugratara Lodge</option><option value="90">Orchid Beach Inn Puri</option><option value="91">Raghunath Ashram </option><option value="92"> Rupa Guest House</option><option value="96">Sibani Beach Inn </option><option value="97">Shayon Residency </option><option value="98">Pangot Inn </option>					</select>
				</div>
				<div class="col-md-4 form-group">
				<br/>
					<button type="button" id="search_booking" class="btn btn-info">Book</button>
				</div>
				</div>
						</form>		
								
			   </div>
			   </div>
			   </div>
			  </div>
			</div>
		</div>
    
	
</div> 
<?

?>
  <? include '../execute/footer.php'; ?>