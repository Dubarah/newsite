<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>دوبارة - تسجيل الدخول</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Dubarah" />
        <meta name="keywords" content="Dubarah App" />
        <meta name="author" content="Ali Alhajjow" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
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
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row" dir="rtl">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="#" class="logo-name text-lg text-center">دوبارة</a>
                                <?php 
								if (isset($message) && $message) {
									echo '<p class="text-center m-t-md" style="color: red">'.$message.'</p>';
									//exit;
								}
								//else echo '<p class="text-center m-t-md">يرجى ملئ كافة البيانات<p class="text-center m-t-md">';
								if (isset($no_email) && $no_email) {
									echo '<p class="text-center m-t-md">الإيميل المدخل خاطئ</p>';
								} elseif ($this->session->userdata('sent_code')) {
									echo '<p class="text-center m-t-md">تم ارسال الكود إلى إيميلك</p>';
									$this->session->unset_userdata('sent_code');
								} 
								?>
                                <p class="text-center m-t-md"></p>
                                <form class="m-t-md" method="post" action="<?php echo base_url().'login' ?>">
                                    <div class="form-group" style="width: 100%">
                                        <input type="text" class="form-control" name="username" placeholder="اسم المستخدم" required>
                                    </div>
                                    <div class="form-group" style="width: 100%">
                                        <input type="password" class="form-control" name="password" placeholder="كلمة السر" required>
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-block">تسجيل الدخول</button>
                                    <a href="forgot.html" class="display-block text-center m-t-md text-sm">هل نسيت كلمة السر؟</a>
                                    <?php /*<p class="text-center m-t-xs text-sm">Do not have an account?</p>
                                    <a href="register.html" class="btn btn-default btn-block m-t-md">Create an account</a>
                                    */?>
                                </form>
                                <p class="text-center m-t-xs text-sm"><?php echo date('Y'); ?> &copy; دوبارة.</p>
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