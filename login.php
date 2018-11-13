<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>C2S HUB Channel Manager</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/pages/extra_pages.css">
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" /> 
</head>
<body>
    <div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100" >
				<form class="login100-form validate-form" method="post" >
					<span class="login100-form-logo">
						<img src="http://demo.c2shub.com/channelmanager/assets/img/logo.png" />
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div id="error-login"></div>
					<input type="hidden" name="loginby" value='self'>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password"  onkeypress="javascript:enter_onkeypress(event);">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button type="button" class="login100-form-btn" id="get_login" >
							Login
						</button>
					</div>
					<div class="text-center p-t-90">
					<a class="txt1" href="register">
							New Property?
						</a> / 
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
	<script src="assets/js/pages/extra_pages/login.js" ></script>
</body>
</html>