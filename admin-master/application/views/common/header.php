<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Title -->
        <title><?php echo $this->lang->line('title'); ?></title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        
        <meta name="description" content="Dubarah Admin" />
        <meta name="keywords" content="admin" />
        <meta name="author" content="Ali Alhajjow" />
        <!--<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/favicon.png">
         Styles 
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>-->
        <link href="<?php echo base_url(); ?>assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url(); ?>assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url(); ?>assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url(); ?>assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>	
        	
        <!-- Theme Styles -->
        <link href="<?php echo base_url(); ?>assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo base_url(); ?>assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <style type="text/css">
        	.horizontal-bar .accordion-menu>li>ul{<?php echo $this->session->userdata('lang') == 'en' ? 'left' : 'right' ?>:0!important;top:75px;width:200px;position:absolute}
        	.compact-menu:not(.small-sidebar) .menu.accordion-menu li a{text-align:<?php echo $this->session->userdata('lang') == 'en' ? 'left' : 'right' ?>!important}
        	a:hover { 
			    color: red;
			}
        </style>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="page-header-fixed compact-menu page-horizontal-bar" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'dir="rtl"' ?>>
        <div class="overlay"></div>
        
        <form class="search-form" action="#" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
            </div><!-- Input Group -->
        </form><!-- Search Form -->
        <main class="page-content content-wrap">
            <div class="navbar" style="background-color: #cc0c2f">
                <div class="navbar-inner container">
                    <div class="sidebar-pusher" style="background-color: #cc0c2f">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars" style="color: white"></i>
                        </a>
                    </div>
                    <div class="logo-box" style="background-color: #cc0c2f; color: #ffffff; <?php echo $this->session->userdata('lang') == 'en' ? '' : 'float: right;' ?>">
                        <a href="<?php echo base_url() ?>" class="logo-text" style="color: white"><span style="color: white"><?php echo $this->lang->line('title'); ?></span></a>
                    </div><!-- Logo Box -->
                    
                    <div class="topmenu-outer" style="background-color: #cc0c2f">
                        <div class="top-menu" style="background-color: #cc0c2f">
                            <ul class="nav navbar-nav navbar-left" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right;"' ?>>
                                <li>		
                                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                            </ul>
                            
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <center>
            <div class="page-sidebar sidebar horizontal-bar" style="position: relative">
                <div class="page-sidebar-inner">
                    <ul class="menu accordion-menu" style="margin-right: 20%">
                        <li class="nav-heading"><span>Navigation</span></li>
                        <li <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right; margin-right: 30%"' ?> <?php echo $selected && $selected == "home" ? 'class="active"' : ''; ?>><a href="<?php echo base_url() ?>"><span class="menu-icon icon-user"></span><p><?php echo $this->lang->line('home') ?></p></a></li>
                        
                        <li <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?> class="droplink <?php echo $selected && ($selected == "social_media") ? 'active ' : '' ?>">
                        	<a href="#"><i class="menu-icon icon-briefcase" style="margin-left: 5px"></i>
                        	<p><?php echo $this->lang->line('content_manage'); ?></p><span class="arrow"></span>
                        	</a>
                            <ul class="sub-menu">
			                    <?php /* if (have_access(21, TRUE)) { ?>
			                    	<li class="droplink <?php echo $selected && $selected == "social_media" ? 'open' : ''; ?>" <?php echo $selected && $selected == "social_media" ? 'class="active"' : ''; ?>><a href="#"><span class="icon-social-facebook"></span> <p>CMS</p><span class="arrow"></span></a>
			                            <ul class="sub-menu">
			                            	
			                                <li <?php echo $selected && $selected == "social_media" ? 'class="active"' : ''; ?>>
			                                	<a href="<?php echo base_url(); ?>social_media"><?php echo trans('social_media') ?></a>
			                                </li>
			                                
			                            </ul>
			                        </li>
			                    <?php } */ ?>
					    		
			                    <?php /*if (have_access(22, TRUE)) { ?>
			                        <li <?php echo $selected && $selected == "categories" ? 'class="active"' : ''; ?>><a href="<?php echo base_url(); ?>categories"><i class="fa fa-list-ol"></i> </i> <?php echo $this->lang->line('categories'); ?></a></li>
			                    <?php } */?>
			                    <li <?php echo $selected && $selected == "advertisments" ? 'class="active"' : ''; ?>><a href="<?php echo base_url(); ?>advertisments"><i class="fa fa-list-ol"></i> </i> Jobs</a></li>
			                    <li <?php echo $selected && $selected == "business" ? 'class="active"' : ''; ?>><a href="<?php echo base_url(); ?>content_mng/business"><i class="fa fa-list-ol"></i> </i> Business</a></li>
                                <li <?php echo $selected && $selected == "achievements" ? 'class="active"' : ''; ?>><a href="<?php echo base_url(); ?>content_mng/achievements"><i class="fa fa-list-ol"></i> </i> Achievements</a></li>
			                    <li <?php echo $selected && $selected == "ads" ? 'class="active"' : ''; ?>><a href="<?php echo base_url(); ?>content_mng/add_ads"><i class="fa fa-list-ol"></i> </i> Add ads</a></li>
			                    <li <?php echo $selected && $selected == "ask" ? 'class="active"' : ''; ?>><a href="<?php echo base_url(); ?>content_mng/askus"><i class="fa fa-list-ol"></i> </i> ask</a></li>

                            </ul>
                        </li>
                        
                        <li <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?> class="droplink <?php echo $selected && ($selected == "sus_emps" || $selected == "regions" || $selected == "expenses" || $selected == "create_user" || $selected == "create_customer" || $selected == "employees" || $selected == "edit_comm" || $selected == "clients" || $selected == 'roles' || $selected == "payments") ? 'active ' : '' ?>">
                        	<a href="#"><i class="fa fa-cogs" style="margin-left: 5px"></i>
                        	<p><?php echo $this->lang->line('control_panel'); ?></p><span class="arrow"></span>
                        	</a>
                            <ul class="sub-menu">
			                    <?php if (have_access(7, TRUE)) { ?>
			                    	<li class="droplink <?php echo $selected && $selected == "employees" ? 'open' : ''; ?>" <?php echo $selected && $selected == "employees" ? 'class="active"' : ''; ?>><a href="#"><span class="menu-icon icon-user"></span><p><?php echo trans('employees'); ?></p><span class="arrow"></span></a>
			                            <ul class="sub-menu">
			                                <li <?php echo $selected && $selected == "employees" && !$this->input->get('staff') ? 'class="active"' : ''; ?>>
			                                	<a href="<?php echo base_url(); ?>users/1"><?php echo trans('employees') ?></a>
			                                </li>
			                                <li <?php echo $selected && $selected == "employees" && $this->input->get('staff') ? 'class="active"' : ''; ?>>
			                                	<a href="<?php echo base_url().'users/1?staff=1'; ?>"><?php echo trans('staff') ?></a>
			                                </li>
			                            </ul>
			                        </li>
			                    <?php } ?>
					    		
					    		<?php /*if (have_access(9, TRUE)) { ?>
			                        <li <?php echo $selected && $selected == "sus_emps" ? 'class="active"' : ''; ?> ><a href="<?php echo base_url(); ?>sus_emps"><i class="fa fa-user-times"></i> <?php echo $this->lang->line('sus_emps'); ?></a></li>
			                    <?php } ?>
			 		    		
			                   
			                    <?php if (have_access(12, TRUE)) { ?>
			                        <li <?php echo $selected && $selected == "regions" ? 'class="active"' : ''; ?>><a href="<?php echo base_url(); ?>countries"><i class="fa fa-globe"></i> </i> <?php echo $this->lang->line('countries_manage'); ?></a></li>
			                    <?php } ?>
			                    
			 		    		<?php if (have_access(64, TRUE)) { ?>
			                        <li <?php echo $selected && $selected == "expenses" ? 'class="active"' : ''; ?>><a href="<?php echo base_url(); ?>expenses"><i class="fa fa-money"></i> </i> <?php echo $this->lang->line('expenses_manage'); ?></a></li>
			                    <?php } */?>
			                    <?php if (have_access(1, TRUE)) { ?>
			                        <li <?php echo $selected && $selected == "roles" ? 'class="active"' : ''; ?>><a href="<?php echo base_url(); ?>roles"><i class="fa fa-list-ol"></i> </i> <?php echo $this->lang->line('roles'); ?></a></li>
			                    <?php } ?>
                            </ul>
                        </li>
                       
                        <li <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?> class="">
                        	<a href="<?php echo base_url().'screen_lock' ?>">
                        		<i class="fa fa-lock"></i>
                        		<p><?php echo $this->lang->line('lock_screen'); ?></p>
                        	</a>
                        </li>
                        <li <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?> class="">
                        	<a href="<?php echo base_url().'switch_lang' ?>">
                        		<i class="fa fa-language"></i>
                        		<p><?php echo $this->lang->line('site_lang'); ?></p>
                        	</a>
                        </li>
                        <li <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?> class=""><a href="<?php echo base_url().'logout' ?>"><span class="menu-icon icon-logout" style="margin-left: 5px"></span><p><?php echo $this->lang->line('sign_out'); ?></p><span class="arrow"></span></a>
                            
                        </li>
                        <li class="droplink"><a href="#"><i class="fa fa-co" style="margin-left: 5px; font-size: 1px">.</i><p style="font-size: 1px">.</p></a>
                            
                        </li>
                    </ul>
                    
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            </center>
            <div class="page-inner">
                
                <div class="page-title">
                    <div class="container">
                        <h3><?php echo $title ?></h3>
                    </div>
                </div>
                <div id="main-wrapper" class="container">
                	<?php if ($this->session->userdata('err_message')) { ?>
		              <div class="alert alert-danger alert-dismissable">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                <h4><i class="icon fa fa-ban"></i> <?php echo $this->session->userdata('err_message'); $this->session->unset_userdata('err_message'); ?></h4>
		                
		              </div>
		            <?php } elseif ($this->session->userdata('suc_message')) { ?>
		                <div class="alert alert-success alert-dismissable">
		                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		                    <h4>    <i class="icon fa fa-check"></i> <?php echo $this->session->userdata('suc_message'); $this->session->unset_userdata('suc_message'); ?></h4>
		                  </div>
		            <?php } ?>
                	