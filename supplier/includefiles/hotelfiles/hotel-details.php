<?php
$hotelcounrty=$db_con->query("select country_name from country where id='".$hotel_details["country"]."'")->fetch_assoc();
$hotelstate=$db_con->query("select state_name from state where id='".$hotel_details["state"]."'")->fetch_assoc();
$hotelcity=$db_con->query("select city_name from city where id='".$hotel_details["city"]."'")->fetch_assoc();
	echo '<div class="tab-pane active fontawesome-demo" id="tab1">
<div class="profile-desc">'.$hotel_details["hotel_desc"].'</div>
<div class="row list-separated">
<div class="col-md-6 col-sm-6 col-6"><img src="'.$imageh.'" style="width: 100%;height: 100px;"></div><div class="col-md-6 col-sm-6 col-6"><img src="'.$logoh.'" style="width: 100%;height: 100px;"></div>
</div>
<div class="row list-separated">
<div class="col-md-6 col-sm-6 col-6">	
<ul class="list-group list-group-unbordered">
<li class="list-group-item">
<b>Name / Username</b> <a class="pull-right">'.$hotel_details["name"].' /	'.$hotel_details["username"].'</a>
</li>
<li class="list-group-item">
<b>Register Date</b> <a class="pull-right">'.date("d,F Y",strtotime($hotel_details["reg_date"])).'</a>
</li>
<li class="list-group-item">
<b>Website</b> <a class="pull-right">'.$hotel_details["website"].'</a>
</li>
<li class="list-group-item">
<b>Register Email Id</b> <a class="pull-right">	'.$hotel_details["email"].'</a>
</li>
<li class="list-group-item">
<b>Register Mobile</b> <a class="pull-right">'.$hotel_details["mobile"].'</a>
</li>
<li class="list-group-item">
<b>Land Line Number</b> <a class="pull-right">'.$hotel_details["landline"].'</a>
</li>
<li class="list-group-item">
<b>Alternate EmailID</b> <a class="pull-right">'.$hotel_details["altemailid"].'</a>
</li>

<li class="list-group-item">
<b>Alternate Mobile</b> <a class="pull-right">'.$hotel_details["alt_mobile"].'</a>
</li>
<li class="list-group-item">
<b>Alternate Land Line Number</b> <a class="pull-right">'.$hotel_details["altlandline"].'</a>
</li>
	

<li class="list-group-item">
<b> Consider/Above Child Age </b> <a class="pull-right">'.$hotel_details["child_consider"].' Year</a>
</li>
								
</ul>
</div>
<div class="col-md-6 col-sm-6 col-6">
<ul class="list-group list-group-unbordered">
<li class="list-group-item"> <b>Hotel Rating</b> <a class="pull-right">';
echo ($hotel_details["star_category"]==0 || empty($hotel_details["star_category"]))?'No ':$hotel_details["star_category"];
echo ' <i class="fa fa-star"></i></a></li>	
<li class="list-group-item">
<b>Tax Type</b> <a class="pull-right">';
echo ($hotel_details["tax_type"]==1)?'On Amount':($hotel_details["tax_type"]==2)?'Fixed':'Not Set';
echo '</a>
</li>			
<li class="list-group-item">
<b>Currency</b> <a class="pull-right">'.$hotel_details["currency"].'</a>
</li>
<li class="list-group-item">
<b>Nationality</b> <a class="pull-right">'.$hotel_details["nationality"].'</a>
</li>
<li class="list-group-item">
<b>Lattitude</b> <a class="pull-right">'.$hotel_details["lattitude"].'</a>
</li>
<li class="list-group-item">
<b>Longitude</b> <a class="pull-right">'.$hotel_details["longitude"].'</a>
</li>
<li class="list-group-item">
<b>Hotel Location</b> <a class="pull-right">'.$hotelcity["city_name"].','.$hotelstate["state_name"].','.$hotelcounrty["country_name"].'</a>
</li>
<li class="list-group-item">
<b>Hotel Address</b> <a class="pull-right">'.$hotel_details["address"].'</a>
</li>
<li class="list-group-item">
<b>Land Mark</b> <a class="pull-right">'.$hotel_details["landmark"].'</a>
</li>
<li class="list-group-item">
<b>Zip Code</b> <a class="pull-right">'.$hotel_details["zipcode"].'</a>
</li>
</ul>		
</div>

</div>
<div class="row list-separated">
<div class="col-md-9 col-sm-6 col-6"></div><div class="col-md-3 col-sm-6 col-6">
<a class="btn btn-circle btn-edit"><i class="fa fa-pencil-square-o"></i> Edit Details</a></div>
</div>

</div>
';
	
	?>
											