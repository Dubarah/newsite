<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/bootstrap.min.css" >
    <!-- FontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > 
       <!-- Additional CSS -->
    <!-- Flag Icon CSS -->
    <link href="<?php echo base_url()?>asset/css/flag-css.min.css" rel="stylesheet">
    <!-- Bootstrap Social BUTTON CSS -->
    <link href="<?php echo base_url()?>asset/css/bootstrap-social.css" rel="stylesheet">
    <!-- Google WEBONT openSans Font -->
    
    <!-- Additional CSS For Design-->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/additional.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/sweetalert.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/toastr.min.css">
</head>
<body>
<?php 
    if ($this->session->userdata('user_id')){
    $notif          = get_statics();
    $new_nots       = $notif['notifcs'];
    $old_nots       = $notif['oldnotif'];
    $num_row        = $notif['num_row'];
    $this->session->set_userdata('dub_num', $notif['my_dubarah_num']);
    }
    if (!$this->session->userdata('social')){
        social();
    } 
    
?>
<!-- Add Dubarah MODAL Structure -->
<div class="modal fade" id="addDubarah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content addDubarah-bigBorder">
            <div class="modal-header grey-darken-4 text-white addDubarah-bigBorder-top">
                <h5 class="modal-title display-4"><span class="red-text">Add </span> Dubarah</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="list-group ">
                    <a href="<?php echo base_url()?>add_dubarah" class="list-group-item list-group-item-action no-border">
                        <div class="media">
                            <img class="d-flex mr-3 add-dubarah-img" src="<?php echo base_url()?>asset/imgs/add-job.png">
                            <div class="media-body">
                                <h5 class="mt-0 font-weight-bold">Post a Job</h5>
                                <p class="text-muted">
                                    Offer a job for all Syrians worldwideFull-Time, Part-Time, internship or volunteering
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="<?php echo base_url()?>add_hero" class="list-group-item list-group-item-action no-border">
                        <div class="media">
                            <img class="d-flex mr-3 add-dubarah-img" src="<?php echo base_url()?>asset/imgs/add-hero.png">
                            <div class="media-body">
                                <h5 class="mt-0 font-weight-bold">List Achievement</h5>
                                <p class="text-muted">
                                    it’s your chance now to show the world what you didfor the community you are based on.
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action no-border">
                        <div class="media">
                            <img class="d-flex mr-3 add-dubarah-img" src="<?php echo base_url()?>asset/imgs/add-buisness.png">
                            <div class="media-body">
                                <h5 class="mt-0 font-weight-bold">List A Business</h5>
                                <p class="text-muted">
                                    We’re happy to let all Syrians arround youknow about you and services you have
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if(!$this->session->userdata('user_id')){ ?>
    <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark grey-darken-4">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url()?>home">
                <img src="<?php echo base_url()?>asset/imgs/logo.svg" width="200" height="35" alt="Dubarah">
            </a>
            <!-- Icon For Mobiles -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
           
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'about-dubarah' ?>"><?php echo translate('aboutus') ?></a>
                    </li>
                    
                      <li class="nav-item active" style="padding-top: 2px;">
                   
                  <div class="dropdown  active">
                  
                    <button class="btn btn-icon dropdown-toggle hide-after-icon no-border nav-link" type="button" id="services" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Services <i class="fa fa-angle-down"></i> </button>
                  	
                    <div class="dropdown-menu" aria-labelledby="services">
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>Jobs"><?php echo 'Dubarah™ Jobs'//trans('profile') ?></a> 
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>Business"><?php echo 'Dubarah™ Business'//trans('logout') ?></a>
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>Hero"><?php echo 'Hero Citizen™'//trans('logout') ?></a>
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>nocker™"><?php echo 'nocker™'//trans('logout') ?></a>
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>"><?php echo 'Syria Calender™'//trans('logout') ?></a>
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>"><?php echo 'Dubarji™ Game'//trans('logout') ?></a>
   						<a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>"><?php echo 'Dubarah™'//trans('logout') ?></a>
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>"><?php echo 'Blog'//trans('logout') ?></a>

                 
                 
                    </div>
                </div>
                </li>
                </ul>

                <button type="button" class="btn btn-outline mar-right red text-white btn-block-sm add-dubarah-btn" data-toggle="modal" data-target="#addDubarah"> <i class="fa fa-plus-square" aria-hidden="true"></i> <?php translate('add_dubarah') ?></button>
                <!-- login modal disabled by removing the data-target #PE$$ -->
                <button type="button" class="btn btn-outline-secondary text-white btn-block-sm mar-right" data-toggle="modal" data-target="" onclick="location.href ='<?php echo base_url()?>login';"><?php translate('signin') ?></button>
                <div class="dropdown">
                    <button class="btn btn-icon dropdown-toggle hide-after-icon" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-language" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu col">
                        <h6 class="dropdown-header col">Languages</h6>
                        <a class="dropdown-item" href="<?php echo base_url()?>switch_lang/ar"><span class="flag flag-syr flag-1x mar-right"></span> <?php echo LANG() == 'en' ? 'Arabic' : 'العربية' ?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url()?>switch_lang/en"><span class="flag flag-gbr flag-1x mar-right"></span> <?php echo LANG() == 'en' ? 'English' : 'الإنكليزية' ?></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
 
<?php }else{ ?>
    <!-- Nav After Signin [user navbar] -->
   <nav class="navbar navbar-expand-lg navbar-dark grey-darken-4">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url()?>home">
                             <img src="<?php echo base_url()?>asset/imgs/logo.svg" width="200" height="35" alt="Dubarah">

            </a>
            <!-- Icon For Mobiles -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'about-dubarah' ?>"><?php echo translate('aboutus') ?></a>
                    </li>
                   
                    <li class="nav-item active" style="padding-top: 2px;">
                   
                  <div class="dropdown  active">
                  
                    <button class="btn btn-icon dropdown-toggle hide-after-icon no-border nav-link" type="button" id="services" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Services <i class="fa fa-angle-down"></i> </button>
                  	
                    <div class="dropdown-menu" aria-labelledby="services">
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>jobs"><?php echo 'Dubarah™ Jobs'//trans('profile') ?></a> 
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>Business"><?php echo 'Dubarah™ Business'//trans('logout') ?></a>
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>Hero"><?php echo 'Hero Citizen™'//trans('logout') ?></a>
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>nocker™"><?php echo 'Nocker™'//trans('logout') ?></a>
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>"><?php echo 'Syria Calender™'//trans('logout') ?></a>
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>"><?php echo 'Dubarji™ Game'//trans('logout') ?></a>
   						<a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>"><?php echo 'Dubarah™'//trans('logout') ?></a>
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>"><?php echo 'Blog'//trans('logout') ?></a>

                 
                 
                    </div>
                </div>
                </li>
                  
                  
                </ul>
                <!-- Messages Drop -->
                <div class="dropdown mar-right">
                    <button class="btn btn-icon dropdown-toggle hide-after-icon no-border" type="button" id="Messages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    	
                    	<img src="<?php echo base_url() ?>asset/imgs/envelope.svg" />
                    	<span class="badge badge-pill badge-danger">3</span></button>
                    <div class="dropdown-menu larg-drop" aria-labelledby="Messages">
                        <h6 class="dropdown-header">Messages</h6>

                        <div class="divider"></div>

                        <div class="media">
                            <img class="d-flex mr-3 mar-left" src="<?php echo base_url()?>asset/imgs/dubarah-footer-img.jpg" width="50" height="50" style="border-radius: 50%; ">
                            <div class="media-body">
                                <h5 class="mt-0"> Dubarah™</h5>
                                <p> Hi , Welcome To Dubarah So... </p>
                                <p class="text-muted small">Just Now</p>
                            </div>
                            <a class="close mar-right" data-toggle="tooltip" data-placement="bottom" title="Mark as Read">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="divider"></div>
                        <div class="media">
                            <img class="d-flex mr-3 mar-left" src="<?php echo base_url()?>asset/imgs/leadership/majd.png" width="50" height="50" style="border-radius: 50% ; ">
                            <div class="media-body">
                                <h5 class="mt-0">Majd </h5>
                                <p> Hi Ahmad How Are You ? </p>
                                <p class="text-muted small">2 Hour Ago</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Notification Drop -->
                <div class="dropdown mar-right">
                    <button class="btn btn-icon dropdown-toggle hide-after-icon no-border" type="button" id="Notification" data-toggle="dropdown" onclick="read_nots()" aria-haspopup="true" aria-expanded="false">
                    	<img src="<?php echo base_url() ?>asset/imgs/bell.svg" /><span id="badge" class="badge badge-pill <?php echo count($new_nots) ? 'badge-danger' : 'badge-default' ?>"><?php echo  $num_row ?></span></button>
                    <div class="dropdown-menu larg-drop" aria-labelledby="Messages">
                        <h6 class="dropdown-header">Messages</h6>

                        <div class="divider" id="first_divider"></div>
                        <!-- notif editing still working on it.. #PE$$-->
                        <?php foreach ($new_nots as $row): ?>
                            <div class="media">
                                <img class="d-flex mr-3 mar-left" src="<?php echo base_url()?>asset/imgs/dubarah-footer-img.jpg" width="50" height="50" style="border-radius: 50%; " onclick="location.href='<?php echo base_url().$row->link?>';">
                                <div class="media-body" onclick="location.href='<?php echo base_url().$row->link?>';">
                                    <?php echo LANG() == 'en' ? '<h5 class="mt-0">'.$row->op_name_en.':</h5><p>'.$row->n_text_en.'</p>' : '<h5 class="mt-0" style="direction: rtl">'.$row->op_name.':</h5><p style="direction: rtl">'.$row->n_text.'</p>' ?>
                                    <p class="text-muted small">
                                    <?php 
                                    //$date = new DateTime();
                                    $now = time();
                                    $time_ago = (int)$now - (int)$row->date;
                                    switch (true) {
                                        case $time_ago<=60:
                                            echo 'Just Now';
                                            break;
                                        case (60<$time_ago&&$time_ago<300):
                                            echo '2 Minutes Ago';
                                            break;
                                        case (300<=$time_ago&&$time_ago<900):
                                            echo '5 Minutes Ago';
                                            break;
                                        case (900<=$time_ago&&$time_ago<1800):
                                            echo '15 Minutes Ago';
                                            break;
                                        case (1800<=$time_ago&&$time_ago<3600):
                                            echo '30 Minutes Ago';
                                            break;
                                        case (3600<=$time_ago&&$time_ago<7200):
                                            echo '1 Hour Ago';
                                            break;
                                        case (7200<=$time_ago&&$time_ago<14400):
                                            echo '2 Hours Ago';
                                            break;
                                        case (14400<=$time_ago&&$time_ago<21600):
                                            echo '4 Hours Ago';
                                            break;
                                        case (21600<=$time_ago&&$time_ago<28800):
                                            echo '6 Hours Ago';
                                            break;
                                        case (28800<=$time_ago&&$time_ago<86400):
                                            echo 'Several Hours Ago';
                                            break;
                                        case (86400<=$time_ago&&$time_ago<172800):
                                            echo '1 Day Ago';
                                            break;
                                        default:
                                            echo Date('M j, Y', $row->date);
                                            break;
                                    }?>   
                                    </p>
                                </div>
                                <a class="close mar-right" data-toggle="tooltip" data-placement="bottom" title="Mark as Read">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </a>
                            </div>
                        <div class="divider"></div>
                        <?php endforeach ?>
                        <!-- old notif -->
                        <?php foreach($old_nots as $row): ?>
                        <div class="media">
                            <img class="d-flex mr-3 mar-left" src="<?php echo base_url()?>asset/imgs/dubarah-footer-img.jpg" width="50" height="50" style="border-radius: 50%; " onclick="location.href='<?php echo base_url().$row->link?>';">
                            <div class="media-body" onclick="location.href='<?php echo base_url().$row->link?>';">
                                <?php echo LANG() == 'en' ? '<h5 class="mt-0">'.$row->op_name_en.':</h5><p>'.$row->n_text_en.'</p>' : '<h5 class="mt-0" style="direction: rtl">'.$row->op_name.':</h5><p style="direction: rtl">'.$row->n_text.'</p>' ?>
                                <p class="text-muted small"><?php 
                                    //$date = new DateTime();
                                    $now = time();
                                    $time_ago = (int)$now - (int)$row->date;
                                    switch (true) {
                                        case $time_ago<=60:
                                            echo 'Just Now';
                                            break;
                                        case (60<$time_ago&&$time_ago<300):
                                            echo '2 Minutes Ago';
                                            break;
                                        case (300<=$time_ago&&$time_ago<900):
                                            echo '5 Minutes Ago';
                                            break;
                                        case (900<=$time_ago&&$time_ago<1800):
                                            echo '15 Minutes Ago';
                                            break;
                                        case (1800<=$time_ago&&$time_ago<3600):
                                            echo '30 Minutes Ago';
                                            break;
                                        case (3600<=$time_ago&&$time_ago<7200):
                                            echo '1 Hour Ago';
                                            break;
                                        case (7200<=$time_ago&&$time_ago<14400):
                                            echo '2 Hours Ago';
                                            break;
                                        case (14400<=$time_ago&&$time_ago<21600):
                                            echo '4 Hours Ago';
                                            break;
                                        case (21600<=$time_ago&&$time_ago<28800):
                                            echo '6 Hours Ago';
                                            break;
                                        case (28800<=$time_ago&&$time_ago<86400):
                                            echo 'Several Hours Ago';
                                            break;
                                        case (86400<=$time_ago&&$time_ago<172800):
                                            echo '1 Day Ago';
                                            break;
                                        default:
                                            echo Date('M j, Y', $row->date);
                                            break;
                                    }?></p>
                            </div>
                            <a class="close mar-right" data-toggle="tooltip" data-placement="bottom" title="Mark as Read">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="divider"></div>
                        <?php endforeach;?>
                        <?php if (!count($old_nots) && !count($new_nots)): ?>
                            <b  style="margin-left: 27px;">
                                <?php echo trans('no_notificatios') ?>
                            </b>
                        <?php endif; ?>
                        <!-- <div class="media">
                            <img class="d-flex mr-3 mar-left" src="<?php echo base_url()?>asset/imgs/dubarah-footer-img.jpg" width="50" height="50" style="border-radius: 50%; ">
                            <div class="media-body">
                                <h5 class="mt-0"> Dubarah™</h5>
                                <p> Hi , Welcome To Dubarah So... </p>
                                <p class="text-muted small">Just Now</p>
                            </div>
                            <a class="close mar-right" data-toggle="tooltip" data-placement="bottom" title="Mark as Read">
                                <i class="fa fa-check" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="divider"></div>
                        <div class="media">
                            <img class="d-flex mr-3 mar-left" src="<?php echo base_url()?>asset/imgs/leadership/majd.png" width="50" height="50" style="border-radius: 50% ; ">
                            <div class="media-body">
                                <h5 class="mt-0">Majd </h5>
                                <p> Hi Ahmad How Are You ? </p>
                                <p class="text-muted small">2 Hour Ago</p>
                            </div> 
                        </div>-->

                    </div>
                </div>
                <!-- User Drop -->
                <!--<div class="dropdown mar-right">
                    <button class="btn btn-link dropdown-toggle text-white" type="button" id="Notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true" style="margin-right: 2px ;"></i> Ahmad </button>
                    <div class="dropdown-menu" aria-labelledby="Notification">
                        <a class="dropdown-item" href="#">Action</a>
                    </div>
                </div> -->
                <div class="dropdown mar-right">
                    <button class="btn btn-icon dropdown-toggle hide-after-icon no-border" type="button" id="User" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i> <?php echo $this->session->userdata('username');?></button>
                    <div class="dropdown-menu" aria-labelledby="User">
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>profile"><?php echo trans('profile') ?></a> 
                        <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>logout"><?php echo trans('logout') ?></a>
                    </div>
                </div>
                <button type="button" class="btn btn-outline mar-right red text-white btn-block-sm add-dubarah-btn" data-toggle="modal" data-target="#addDubarah"> <i class="fa fa-plus-square" aria-hidden="true"></i> <?php translate('add_dubarah') ?></button>
                <div class="dropdown">
                    <button class="btn btn-icon dropdown-toggle hide-after-icon" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-language" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu col">
                        <h6 class="dropdown-header col">Languages</h6>
                        <a class="dropdown-item" href="<?php echo base_url()?>switch_lang/ar"><span class="flag flag-syr flag-1x mar-right"></span> <?php echo LANG() == 'en' ? 'Arabic' : 'العربية' ?></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo base_url()?>switch_lang/en"><span class="flag flag-gbr flag-1x mar-right"></span> <?php echo LANG() == 'en' ? 'English' : 'الإنكليزية' ?></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
<?php } ?>


