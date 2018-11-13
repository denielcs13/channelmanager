<style>
.page-logo img{    width: 30%;}
@media (max-width:700px){
	.page-logo img{    width: 20%;}
	}
@media (min-width: 992px){
.sidemenu-closed.sidemenu-closed-hidelogo .page-header.navbar .page-logo img{width: 100%;}
}
</style>
<div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner  <?= $container_class; ?>">
                <div class="page-logo">
                     <a href="./"><img src="<?= $s_logo; ?>" /><span class="logo-default" ><?= $s_name; ?></span></a>
                </div>
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="<?= $logoh; ?>" />
                                <span class="username username-hide-on-mobile"> <?= strtoupper($name_1);  ?>  </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                             <li>
                                    <a href="profile">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
								<li>
                                    <a href="support">
                                        <i class="icon-phone"></i> Support </a>
                                </li>
                                <li>
                                    <a href="logout">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                             <a href="settings" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
	                           <i class="material-icons">settings</i>
	                        </a>
                        </li>
                    </ul>
                </div>
            </div>