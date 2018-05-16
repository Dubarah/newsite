<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title><?php echo $this->lang->line('title'); ?></title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Dalilacom" />
        <meta name="keywords" content="dalilacom dashbord" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href="<?php echo base_url() ?>assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url() ?>assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url() ?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="<?php echo base_url() ?>assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo base_url() ?>assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body class="page-lock-screen" style="direction: <?php $this->session->userdata('lang') == 'en' ? 'ltr' : 'rtl' ?>">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <div class="user-box m-t-lg row">
                                    
                                    <div class="col-md-12">
                                        <p class="lead no-m text-center"><?php echo $this->lang->line('welcome').' '.$this->session->userdata('user_fullname') ?>!</p>
                                        <p class="text-sm text-center"><?php echo form_error('password') ? form_error('password') : $this->lang->line('screen_locked_enter_password') ?></p>
                                        <form class="form-inline text-center" method="post" action="<?php echo base_url() ?>lock_screen">
                                            <div class="input-group <?php echo form_error('password') ? 'has-error' : '' ?>">
                                                <input type="password" name="password" id="password" class="form-control" placeholder="<?php echo $this->lang->line('password') ?>" required>
                                                <div class="input-group-btn">
                                                    <button type="submit" class="btn btn-danger"><?php echo $this->lang->line('login') ?></button>
                                                </div><!-- /btn-group -->
                                            </div><!-- /input-group -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

        <!-- Javascripts -->
        <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/classie/classie.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/modern.min.js"></script>
        
    </body>
</html>