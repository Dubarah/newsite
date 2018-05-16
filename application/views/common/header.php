	
	<?php 
	if ($this->session->userdata('user_id')){
	$notif 			= get_statics();
	$new_nots 		= $notif['notifcs'];
	$old_nots 		= $notif['oldnotif'];
	$num_row 		= $notif['num_row'];
	$this->session->set_userdata('dub_num', $notif['my_dubarah_num']);
	}
	if (!$this->session->userdata('social')){
		social();
	} 
	
	?>
	<!DOCTYPE html>
	<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   
    <?php if (isset($job_id)){ ?>
        <meta property="og:url"         content="<?php echo base_url().'job/'. $job_id; ?>" />
		<meta property="og:type"        content="website" />
		<meta property="og:title"       content="Dubarah -<?php echo $dubarah->row()->title; ?>" />
		<meta property="og:description" content='<?php /*echo $dubarah->row()->description;*/ ?>' />
		<meta property="og:image"       content="<?php echo $dubarah->row()->img ? base_url()."uploads/jobslogo/".$dubarah->row()->img : base_url().'ass/images/defult.png' ?>" />
    <?php } else {?>
    	<meta property="og:url"         content="<?php echo base_url()?>" />
		<meta property="og:type"        content="website" />
		<meta property="og:title"       content="Dubarah" />
		<meta property="og:description" content="<?php echo trans('about_dubarah')?>" />
		<meta property="og:image"       content="<?php echo base_url().'ass/images/share.png'?>" />
		
		<?php } ?>

    <title>Dubarah</title>

   <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/bootstrap.min.css" >
    	
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>ass/css/icofont.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/owl.carousel.css">  
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/slidr.css">     
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/main1.css">  
	<link id="preset" rel="stylesheet" href="<?php echo base_url() ?>ass/css/presets/preset1.css">	
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/select2.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>ass/css/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>ass/css/gh-pages.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>ass/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>ass/css/toastr.min.css">
  <!---->
   
	
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="<?php echo base_url() ?>ass/images/5.png">	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>ass/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>ass/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>ass/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url() ?>ass/images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->
	<link rel="stylesheet" href="<?php echo base_url() ?>ass/css/sweetalert.css">
	<style>
	.modal-dialog{
   		 overflow-y: initial !important
		}
		.modal-body{
   		 height: 250px;
    		overflow-y: auto;
		}
	</style>
	<link rel="stylesheet" href="<?php echo base_url() ?>ass/css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->   
    
  </head>
  <body style="background-color:#f2f2f2;">
   
	<!-- header -->
	<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url() ?>"><img style="height: 50px" class="img-responsive" src="<?php echo base_url()?>ass/images/dubarah_logo.png" alt="Logo" ></a>
				</div>
				<!-- /navbar-header -->

				<div class="navbar-left" style="margin-top: 5px;">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo base_url()?>"  style="color: #fff"><?php echo translate('home') ?></a></li>
							<li><a href="<?php echo base_url().'jobs' ?>" style="color: #fff"><?php echo translate('jobs') ?></a></li>
							<li><a href="<?php echo base_url().'aboutus' ?>" style="color: #fff"><?php echo translate('aboutus') ?></a></li>
                          	<li><a href="http://blog.dubarah.com" style="color: #fff"><?php echo translate('blog') ?></a></li>

                            <li>  <a href="<?php echo base_url()?>switch_lang" style="padding-left:20px;color:#fff;"><?php echo LANG() == 'en' ? 'العربية' : 'ENG' ?></a></li>


                            <?php /*
					<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><?php translate('categories') ?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						 <?php foreach ($cats->result() as $cat) {?>
                		  <li><a style="color: #222" href="<?php echo base_url().'categories_main/'. $cat->category_id ?>" ><?php echo $cat->english_name ?></a></li>
            		    <?php } ?>
					</ul>
				    </li>*/?>
							
						</ul>
					</div>
				</div>
				<!-- nav-right -->
				<div class="nav-right"   style="margin-top: 8px;" >
				<?php if (!$this->session->userdata('user_id')){?>
					<!-- sign-in -->
					<ul class="sign-in">						
						<li><i class="fa fa-user" style="color:#fff;"></i></li>
						 <li><a href="<?php echo base_url()?>login"><?php translate('signin') ?></a></li>
							<li><a href="<?php echo base_url()?>signup"><?php translate('register') ?></a></li>
							</ul>
							<?php } else{?>
								
								
										
							<ul class="sign-in" style="margin-right: 20px">
							<li><i class="fa fa-user" style="color:#fff;margin-right: -4px;"></i></li>
							<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $this->session->userdata('username') ?><span class="caret"></span></a>
							<ul class="dropdown-menu">
							 <li><a style="color:#777" href="<?php echo base_url() ?>my_profile"><?php echo trans('profile') ?></a></li> 
							 <li><a style="color:#777" onclick="face_logout()" href="#"><?php echo trans('logout') ?></a></li>
							 <li></li>
							</ul>
							</li>		
							</ul>	
							<ul class="sign-in"style="margin-right: 16px;">
									
									<li class="fa fa-bell">
										<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<i class="fa fa-bell" onclick="read_nots()" id="notbill" style="color:<?php echo count($new_nots) ? '#e7412c' : '#fff' ?>;margin-right: -12px;"><span class='badge' id="not_num"><?php echo  $num_row ?></span>  </i>
										</a>
										<ul class="dropdown-menu" id='first_not' style="width: 246px;height: 91px; margin-left: -76px;border-radius: 8px;">
											<?php foreach ($new_nots as $row): ?>
												<li>
													<a style="color:#e7412c" href="<?php echo $row->link ?>">
														<b><?php echo LANG() == 'en' ? $row->op_name_en : $row->op_name_en ?>: </b>
														<?php echo LANG() == 'en' ? $row->n_text_en : $row->n_text ?>
													</a>
												</li> 
											<?php endforeach ?>
										 	<?php foreach ($old_nots as $row): ?>
												<li>
													<a style="color:#777" href="<?php echo $row->link ?>">
														<b><?php echo LANG() == 'en' ? $row->op_name_en : $row->op_name_en ?>: </b>
														<?php echo LANG() == 'en' ? $row->n_text_en : $row->n_text ?>
													</a>
												</li> 
											<?php endforeach ?>
											<?php if (!count($old_nots) && !count($new_nots)): ?>
												<b  style="margin-left: 27px;"   ><?php echo trans('no_notificatios') ?></b>
											<?php endif ?>
											<li></li>
										</ul>
									</li>		
								</ul>			
					<?php } ?>
			

					<!--<a href="<?php echo base_url() ?>add_dubarah" class="btn" style="font-weight:bold;background-color:#222222;border-color:#e7412c"><img src="<?php echo base_url() ?>ass/images/plus.png" style="height:24px;width:24px;margin-right:10px;"><?php translate('add_dubarah') ?></a>-->
				
				<a style="padding: 7px 8px 7px 8px;" id="btnn1" href="#" onclick="add_dubarah()" class="btn"><img src="<?php echo base_url() ?>ass/images/add.png" style="font-style:bold;height:24px;width:24px;margin-right:10px;"><strong><?php translate('add_dubarah') ?></strong></a>


				
				</div>
				<!-- nav-right -->

			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	