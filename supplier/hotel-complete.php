<?php include 'includefiles/top-header-h-complete.php';if(!empty($hotel_details)){ ?> 
        <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title"><?= $hotel_name ?></div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="./">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Complete Hotel Details</li>
                            </ol>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Complete Hotel Details</header>
                                </div><div class="card-body">
								
								<form method="post" name="form-complete" id="form-complete" enctype="multipart/form-data"><div class="row"><div id="error-detail" class="col-md-12"></div><input type="hidden" name="action" value="<?php echo base64_encode('complete_details'); ?>" /><input type="hidden" name="hotel_id" value="<?php echo base64_encode($system_id); ?>" /><div class="col-md-3"><div class="form-group"> <label >Choose Currency * </label><select  class="form-control" name="currency" ><option value="inr">INR</option><option value="bgp">BGP</option></select></div>  </div><div class="col-md-3"><div class="form-group"> <label for="">Choose Tax Type *</label><select name="tax_type"  class="form-control"><option value="1">On Amount</option><option value="2">Fixed</option></select></div></div><div class="col-md-3"><div class="form-group"> <label for="">Choose Rating * </label><select name="choose_rating"  class="form-control"><option value="0">0 Star</option><option value="1">1 Star</option><option value="2">2 Star</option><option value="3">3 Star</option><option value="4">4 Star</option><option value="5">5 Star</option><option value="6">6 Star</option><option value="7">7 Star</option><option value="8">8 Star</option><option value="9">9 Star</option><option value="10">10 Star</option></select></div></div><div class="col-md-3"><div class="form-group"> <label for="">Choose Consider/Above Child Age *  </label><select name="choose_child_age"  class="form-control"><option value="1">1 Year</option><option value="2">2 Year</option><option value="3">3 Year</option><option value="4">4 Year</option><option value="5">5 Year</option><option value="6">6 Year</option><option value="7">7 Year</option><option value="8">8 Year</option><option value="9">9 Year</option><option value="10">10 Year</option><option value="11">11 Year</option><option value="12">12 Year</option></select></div></div>
								<div class="col-md-3"><div class="form-group"> <label for="">Hotel Main Image * </label><input type="file" class="form-control" name="hotel_image" id="hotel_image" value="" accept="image/*" /><i id="ok_image" style="display:none;" class="fa fa-check-circle-o"></i><span id="error_image"></span></div>
								</div><div class="col-md-3"><div class="form-group"> <label for="">Hotel Logo * </label><input type="file" class="form-control" name="hotel_logo" id="hotel_logo" value="" accept="image/*"/><i id="ok_logo" style="display:none;" class="fa fa-check-circle-o"></i><span id="error_logo"></span></div>
								</div>
								<div class="col-md-3"><div class="form-group"> <label for="">Lattitude * </label><input type="number" class="form-control" name="lattitude" id="lattitude" value="" placeholder="Lattitude"  /></div></div>
								<div class="col-md-3"><div class="form-group"> <label for=""> Longitude * </label><input type="number" class="form-control" name="longitude" id="longitude" value="" placeholder="Longitude" /></div></div><div class="col-md-3"><div class="form-group"> <label for="">Address * </label><input type="text" class="form-control" name="address" id='address' value=""/></div></div><div class="col-md-3"><div class="form-group"> <label for="">Zip Code * </label><input type="number" class="form-control" name="zipcode" id="zipcode" maxlength="8" value=""/></div></div><div class="col-md-3"><div class="form-group"> <label for="">Land Mark</label><input type="text" class="form-control" name="land_mark" value=""/></div></div><div class="col-md-3"><div class="form-group"> <label for="">Land Line Number</label><input type="number" class="form-control" name="landline" value=""/></div></div>
								<div class="col-md-9"><div class="form-group"> <label for="">About </label><textarea type="text" class="form-control" name="about_hotel" id="about_hotel"></textarea></div></div><div class="col-md-3"><div class="form-group"><br/> <a class="btn btn-circle btn-success" id='complete-details'><i class="fa fa-save"></i> Save Details</a></div>
								</div>
								</form>
                                   </div></div></div>
                                    </div>
                                </div>
                            </div>
    
	
</div> 
</div> 
<script>var load_img='../assets/img/loader-1.gif';</script>
<script src="../assets/js/js/jquery.min.js" ></script>
<script src="../assets/js/js/check.js" ></script>
<script src="js/hoteljs/hotel-complete.js" ></script>
<?php
} include '../execute/footer.php'; ?>
