<?php include 'includefiles/top-header.php'; 
if(!empty($hotel_details)){
?> 
        <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Settings</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="./">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Settings</li>
                            </ol>
                        </div>
                    </div>
					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>Theme Settings</header>
                                </div>
                                <div class="card-body " id="bar-parent2">
                                	<div class="row">
	                               <div class="col-md-12">
								  
								<div class="theme-light-dark">
									<h6>Sidebar Theme</h6>
									<div class="col-md-6" style="float: left;">
									<button type="button" data-theme="white" class="btn lightColor btn-outline btn-circle m-b-10 theme-button">Light Sidebar</button>
									</div><div class="col-md-6"  style="float: left;">
									<button type="button" data-theme="dark" class="btn dark btn-outline btn-circle m-b-10 theme-button">Dark Sidebar</button>
									</div>
								</div>
								<div class="theme-light-dark">
									<h6>Sidebar Color</h6>
									<ul class="list-unstyled">
										<li class="complete">
											<div class="theme-color sidebar-theme">
												<a href="#" data-theme="white"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="dark"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="blue"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="indigo"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="cyan"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="green"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="red"><span class="head"></span><span class="cont"></span></a>
											</div>
										</li>
									</ul>
									<h6>Header Brand color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color logo-theme">
								             	<a href="#" data-theme="logo-white"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-dark"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-blue"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-indigo"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-cyan"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-green"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="logo-red"><span class="head"></span><span class="cont"></span></a>
								           	</div>
								        </li>
									</ul>
									<h6>Header color</h6>
									<ul class="list-unstyled">
										<li class="theme-option">
											<div class="theme-color header-theme">
								             	<a href="#" data-theme="header-white"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-dark"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-blue"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-indigo"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-cyan"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-green"><span class="head"></span><span class="cont"></span></a>
								             	<a href="#" data-theme="header-red"><span class="head"></span><span class="cont"></span></a>
								          	</div>
								        </li>
									</ul>
								
									<h6>Theme Layout</h6>
									<ul class="list-unstyled">
										<li class="complete" data-type="layout">
											<div class="theme-color sidebar-theme-layout">
												<a href="#" data-theme="dark" data-type="left"><span class="head"></span><span class="cont"></span></a>												
								             	<a href="#" data-theme="header-dark" data-type="top"><span class="head"></span><span class="cont"></span></a>
												<a href="#" data-theme="dark" data-type="right"><span class="head"  style="right: -30px;"></span><span class="cont" style="right: -30px;"></span></a>
												<a href="#" data-theme="dark" data-type="box"><span class="head"  style="right: -15px;"></span><span class="cont"  style="right: -15px;"></span></a>
											</div>
										</li>
									</ul>
								</div>
							</div> 
						<?
						
						echo '<div class="col-md-12" id="response"></div><div class="col-md-3"><a class="btn blue btn-outline btn-circle m-b-10" id="save_change">Save Change</a></div>';
						if(!empty($hotel_details["theme_layout"]) || !empty($hotel_details["sidbar_theme"]) || !empty($hotel_details["sidebar_color"]) || !empty($hotel_details["h_brand"]) || !empty($hotel_details["h_color"])){echo '<div class="col-md-3"><a class="btn deepPink btn-outline btn-circle m-b-10" id="default">Default Change</a></div>';
						}
							
							echo '<input type="hidden" value="'.$hotel_details["theme_layout"].'" id="theme_layout" /><input type="hidden" value="'.$hotel_details["sidbar_theme"].'" id="sidbar_theme" /><input type="hidden" value="'.$hotel_details["sidebar_color"].'" id="sidebar_color" /><input type="hidden" value="'.$hotel_details["h_brand"].'" id="h_brand" /><input type="hidden" value="'.$hotel_details["h_color"].'" id="h_color" />';
							
						?></div>
						
								   </div>
								   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

	<script src="../assets/js/js/jquery.min.js" ></script>
	<script>var load_img='<?= $loader1; ?>';</script>
	<script src="js/theme/u-settings.js"></script>
	<?
}
?>
    <script src="../assets/js/theme-color.js" ></script>
	<? include '../execute/footer.php'; ?>