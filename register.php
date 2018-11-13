
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>C2S HUB CHANNEL MANAGER</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="assets/css/pages/extra_pages.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" /> 
</head>
<body>
    <div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-logo">
					<img src="http://demo.c2shub.com/channelmanager/assets/img/logo.png" />
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Registration
					</span>
					<style>
					.form-control{
					color: #fff;
					padding-left: 20px;
					background-color: #9749f5;
					}
					</style>
					<div class="row sign-in-form">
					<div class="col-lg-12 "><div id="error-signup"></div></div>
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text"  placeholder="Name" value="" id="name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate = "Enter Hotel  Name">
						<input class="input100" type="text" placeholder="Hotel Name" value="" id="hotelname">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate="Enter User Name">
						<input class="input100" type="text" placeholder="User Name" value="" id="username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate="Enter Email">
						<input class="input100" type="text" placeholder="Email ID" value="" id="email">
						<span class="focus-input100" data-placeholder="&#xf207"></span>
					</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate="Enter Mobile Number">
						<input class="input100" type="number" placeholder="Mobile" value="" id="mobile" >
						<span class="focus-input100" data-placeholder="&#xf600;"></span>
					</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate="Enter Website">
						<input class="input100" type="text" placeholder="Website" value="" id="website" >
						<span class="focus-input100" data-placeholder="&#xf031;"></span>
					</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate="Enter Password">
						<input class="input100" type="password" placeholder="********" value="" id="password" >
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate="Enter Confirm  Password">
						<input class="input100" type="password" placeholder="********" value="" id="con-password" >
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate="Select Country">
						<select name="county" class="form-control" id="country"></select>
					</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate="Select State">
					<select name="state" class=" form-control" id="state"></select>
					</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<div class="wrap-input100 validate-input" data-validate="Select City">
<select name="city" class=" form-control" id="city"></select>
					</div>
					</div>
					<div class="col-lg-6 p-t-20">
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="hotel-registration">
							Register
						</button>
					</div></div>
					<div class="col-lg-12 p-t-20">
					<center>
					<div class="text-center">
						<a class="txt1" href="login">
							You already have a membership?
						</a>
					</div>
					</center>
</div>
				</form>
				<input type="hidden" value="assets/img/loader-1.gif" id="img_path">
			</div>
		</div>
	</div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
	<script src="assets/js/js/jquery.min.js" ></script>
	<script>var load_img=$("#img_path").val();</script>
    <script src="assets/js/js/location-load.js" ></script>
	<script src="assets/js/js/check.js" ></script>
	<script src="assets/js/pages/extra_pages/register.js" ></script>
    <!-- end js include path -->
</body>
</html>