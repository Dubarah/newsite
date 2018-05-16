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
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/bootstrap.min.css" >
    <!-- FontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >    <!-- Additional CSS -->
    <!-- Flag Icon CSS -->
    <link href="<?php echo base_url()?>asset/css/flag-css.min.css" rel="stylesheet">
    <!-- Bootstrap Social BUTTON CSS -->
    <link href="<?php echo base_url()?>asset/css/bootstrap-social.css" rel="stylesheet">
    <!-- Google WEBONT openSans Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Additional CSS For Design-->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/additional.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/toastr.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
    </style>

</head>
<body>
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
<!-- Login Modal Structer -->
<div class="modal fade" id="logIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <ul class="nav nav-pills mb-3 nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <button class="btn btn-login-register btn-link" data-toggle="pill" href="#Login" role="tab" aria-controls="Login" aria-expanded="true">Login</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-login-register btn-link" data-toggle="pill" href="#Register" role="tab" aria-controls="Register" aria-expanded="true">Register</button>
                    </li>
                </ul>
                <div class="tab-content container" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="Login" role="tabpanel">
                        <form>
                            <div class="form-group container">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <div class="input-group-addon grey-darken-4 text-white">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Username">
                                </div>
                            </div>

                            <div class="form-group container">
                                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                    <div class="input-group-addon grey-darken-4 text-white">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-check container">
                                <label class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description">Remember Me ?</span>
                                </label>
                            </div>
                            <div class="row container">
                                <div class="col">
                                    <button type="submit" class="btn btn-info btn-block">Login</button>
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-link btn-block grey-text">Forgot Your Password ?</button>
                                </div>
                            </div>
                            <div class="col container mar-top">
                                <button type="submit" class="btn btn-block facebook-color text-white">Login With Facebook</button>
                            </div>

                        </form>
                    </div>
                    <div class="tab-pane fade" id="Register" role="tabpanel">
                        <form>
                            <div class="row mar-bot">
                                <div class="col">
                                    <div class="form-group container">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon grey-darken-4 text-white">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" class="form-control form-control-lg" placeholder="First name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control form-control-lg" placeholder="Last name">
                                </div>
                            </div>

                            <div class="row mar-bot">
                                <div class="col">
                                    <div class="form-group container">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon grey-darken-4 text-white">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" class="form-control form-control-lg" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mar-bot">
                                <div class="col">
                                    <div class="form-group container">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon grey-darken-4 text-white">
                                                <i class="fa fa-at" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" class="form-control form-control-lg" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group container">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon grey-darken-4 text-white">
                                                <i class="fa fa-lock" aria-hidden="true"></i>
                                            </div>
                                            <input type="text" class="form-control form-control-lg" placeholder="Password">
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <input type="text" class="form-control form-control-lg" placeholder="Retype Password ">
                                </div>
                            </div>
                            <div class="row container">
                                <div class="form-check container">
                                    <label class="custom-control custom-checkbox ">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">I Have Read And Agree To All <button type="button" class="btn-link">Terms</button></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-block btn-success text-white">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<div class="bgimg-1">
<?php if(!$this->session->userdata('user_id')){ ?>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url()?>home">
                <img src="<?php echo base_url()?>asset/imgs/dubarah_logo.png" width="200" height="50" alt="Dubarah">
            </a>
            <!-- Icon For Mobiles -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url()?>home"><?php echo translate('home') ?> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()?>jobs"><?php echo translate('jobs') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()?>achievements"><?php echo translate('hero') ?></a>
                    </li>
                    <!-- business item #PE$$ -->
                   <!--  <li class="nav-item">
                        <a class="nav-link" href="#">Business</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://blog.dubarah.com"><?php echo translate('blog') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'aboutus' ?>"><?php echo translate('aboutus') ?></a>
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
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url()?>home">
                <img src="<?php echo base_url()?>asset/imgs/dubarah_logo.png" width="200" height="50" alt="Dubarah">
            </a>
            <!-- Icon For Mobiles -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url().'home' ?>"><?php echo translate('home') ?> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'jobs' ?>"><?php echo translate('jobs') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'achievements' ?>"><?php echo translate('hero') ?></a>
                    </li>
                    <!-- business item #PE$$ -->
                   <!--  <li class="nav-item">
                        <a class="nav-link" href="#">Business</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://blog.dubarah.com"><?php echo translate('blog') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'aboutus' ?>"><?php echo translate('aboutus') ?></a>
                    </li>
                </ul>
                <!-- Messages Drop -->
                <div class="dropdown mar-right">
                    <button class="btn btn-icon dropdown-toggle hide-after-icon no-border" type="button" id="Messages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i><span class="badge badge-pill badge-danger">3</span></button>
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
                    <button class="btn btn-icon dropdown-toggle hide-after-icon no-border" type="button" id="Notification" data-toggle="dropdown" onclick="read_nots()" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell fa-lg" aria-hidden="true"></i><span id="badge" class="badge badge-pill <?php echo count($new_nots) ? 'badge-danger' : 'badge-default' ?>"><?php echo  $num_row ?></span></button>
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
    <div class="container" >
        <div style="margin-top: 25%">
            <h2 class="text-white">We never stop looking for ways to makepeople's lives better.</h2>
            <h4 class="text-white">Not because we have to, but because it's a commitment.</h4>
            <button type="button" class="btn btn-outline mar-right red text-white btn-block-sm add-dubarah-btn" data-toggle="modal" data-target="#addDubarah">JOIN US</button>
            <button type="button" class="btn btn-outline-secondary text-white btn-block-sm mar-right" data-toggle="modal" data-target="#logIn">DONATE NOW</button>
        </div>
    </div>
</div>

<div class="container"  style="max-width: 950px;">
    <div class="row" style="margin-top: 50px ;">
        <div class="col-lg-6">
            <div class="media">
                <img class="mr-3 rounded-circle" width="100" src="<?php echo base_url()?>asset/imgs/dubarjiicon.jpg">
                <div class="media-body mar-top">
                    Syrians worldwide, through practical and creative solutions to make their lives better. <a>More</a>                   </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="media">
                <img class="mr-3" width="100" src="<?php echo base_url()?>asset/imgs/Earth.png" alt="Generic placeholder image">
                <div class="media-body">
                    <h3 class="mt-0">3,200,650</h3>
                    <h5 class="mt-0 font-weight-bold">BENEFICIARIES</h5>
                    Since Feb 11th, 2013 - Realtime update
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card text-center" style="background-color: #eee;">
                <img class="card-img-top" src="<?php echo base_url().'asset/imgs/add-buisness.png' ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-light">More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card text-center" style="background-color: #eee;">
                <img class="card-img-top" src="<?php echo base_url().'asset/imgs/add-buisness.png' ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-light">More</a>
                </div>
            </div>
        </div>
       
        <div class="col-lg-3">
            <div class="card text-center" style="background-color: #eee;">
                <a href="<?php echo base_url()?>jobs">
                <img class="card-img-top" src="<?php echo base_url().'asset/imgs/add-job.png' ?>" alt="Card image cap"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?php echo base_url()?>jobs" class="btn btn-light">More</a>
                </div>
            </div>
        </div>
       
        <div class="col-lg-3">
            <div class="card text-center" style="background-color: #eee;">
                <a href="<?php echo base_url()?>achievements">
                <img class="card-img-top" src="<?php echo base_url().'asset/imgs/add-hero.png' ?>" alt="Card image cap"></a>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?php echo base_url()?>achievements" class="btn btn-light">More</a>
                </div>
            </div>
        </div>


        <!-- LOOP For More Cards  -->
    </div>

    <!-- Image here -->

    <div class="row mar-top ">
        <div class="col-lg-10">
            <h4>Dubarah <span class="red-text">Info Blog</span></h4>
        </div>
        <div class="col-lg-2">
            <h4><a class="red-text float-right">+ Add Job</a></h4>
        </div>
    </div>

    <div class="divider"></div>

    <div class="row">
        <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
            <li class="nav-item"><a class="nav-link active home-nave-links" data-toggle="pill" href="#san_francisco" role="tab" aria-controls="san_francisco" aria-selected="true">San Francisco</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#damascus" role="tab" aria-controls="damascus" aria-selected="false">Damascus</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#san_jose" role="tab" aria-controls="san_jose" aria-selected="false">San Jose</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#san_francisco" role="tab" aria-controls="san_francisco" aria-selected="true">San Francisco</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#damascus" role="tab" aria-controls="damascus" aria-selected="false">Damascus</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#san_jose" role="tab" aria-controls="san_jose" aria-selected="false">San Jose</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#san_francisco" role="tab" aria-controls="san_francisco" aria-selected="true">San Francisco</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#damascus" role="tab" aria-controls="damascus" aria-selected="false">Damascus</a></li>
            <li class="nav-item"><a class="nav-link font-weight-bold" href="#damascus" style="color: #000;">+ More Cities</a></li>
        </ul>
        <div class="col-lg-12">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="san_francisco" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card du-blog-homecard">
                                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/du-news.jpg" alt="Card image cap">
                                <div class="card-body du-blog-homecard-body">
                                    <h4 class="card-title">Card title</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card du-blog-homecard">
                                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/du-news.jpg" alt="Card image cap">
                                <div class="card-body du-blog-homecard-body">
                                    <h4 class="card-title">Card title</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card du-blog-homecard">
                                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/du-news.jpg" alt="Card image cap">
                                <div class="card-body du-blog-homecard-body">
                                    <h4 class="card-title">Card title</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card du-blog-homecard">
                                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/du-news.jpg" alt="Card image cap">
                                <div class="card-body du-blog-homecard-body">
                                    <h4 class="card-title">Card title</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="damascus" role="tabpanel">

                </div>
                <div class="tab-pane fade" id="san_jose" role="tabpanel">

                </div>

            </div>
        </div>
    </div>

    <div class="text-center mar-top" style="margin: 50px 0;">
        <h4><a><u>See More Posts</u></a></h4>
    </div>

</div>

<div class="jumbotron jumbotron-fluid">
    <div class="container"  style="max-width: 950px;">
        <div class="row mar-top ">
            <div class="col-lg-10">
                <h4>Dubarah <span class="red-text">Jobs</span></h4>
            </div>
            <div class="col-lg-2">
                <h4><a class="red-text float-right" href="<?php echo base_url()?>add_dubarah">+ Add Job</a></h4>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
            <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active home-nave-links" data-toggle="pill" href="#san_francisco" role="tab" aria-controls="san_francisco" aria-selected="true">San Francisco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link home-nave-links " data-toggle="pill" href="#damascus" role="tab" aria-controls="damascus" aria-selected="false">Damascus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link home-nave-links " data-toggle="pill" href="#san_jose" role="tab" aria-controls="san_jose" aria-selected="false">San Jose</a>
                </li>
            </ul>
            <div class="col-lg-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="san_francisco" role="tabpanel">

                        <div class="row">
                            <?php foreach($jobs as $job): ?>
                            <div class="col-lg-4">
                                <div class="card du-job-homecard">
                                    <div class="card-body du-job-homecard">
                                        <h4 class="card-title "><strong><u><a href="<?php echo base_url().'job/'.$job->advertisement_id ?>"><?php echo $job->title ?></a></u></strong></h4>
                                        <p class="card-title"><?php echo $job->address ?></p>
                                        <p class="card-text text-muted"><?php foreach ($jobSkills[$job->advertisement_id] as $skill) {
                                            echo $skill->skill_name.', ';
                                        }
                                        echo lang()=='en' ? $job->type_name.', '.$job->employer : $job->type_name_ar.', '.$job->employer ?> </p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="damascus" role="tabpanel">

                    </div>
                    <div class="tab-pane fade" id="san_jose" role="tabpanel">

                    </div>

                </div>
            </div>

        </div>

        <div class="text-center mar-top" style="margin-top: 50px;">
            <h4><a href="<?php echo base_url()?>jobs"><u>See More Jobs</u></a></h4>
        </div>

    </div>
</div>

<div class="container"  style="max-width: 950px;">
    <div class="row mar-top ">
        <div class="col-lg-10">
            <h4>Dubarah <span class="red-text">Jobs</span></h4>
        </div>
        <div class="col-lg-2">
            <h4><a class="red-text float-right">+ Add Job</a></h4>
        </div>
    </div>
    <div class="divider"></div>
    <div class="row">
        <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
            <li class="nav-item"><a class="nav-link active home-nave-links" data-toggle="pill" href="#san_francisco" role="tab" aria-controls="san_francisco" aria-selected="true">San Francisco</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#damascus" role="tab" aria-controls="damascus" aria-selected="false">Damascus</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#san_jose" role="tab" aria-controls="san_jose" aria-selected="false">San Jose</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#san_francisco" role="tab" aria-controls="san_francisco" aria-selected="true">San Francisco</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#damascus" role="tab" aria-controls="damascus" aria-selected="false">Damascus</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#san_jose" role="tab" aria-controls="san_jose" aria-selected="false">San Jose</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#san_francisco" role="tab" aria-controls="san_francisco" aria-selected="true">San Francisco</a></li>
            <li class="nav-item"><a class="nav-link home-nave-links " data-toggle="pill" href="#damascus" role="tab" aria-controls="damascus" aria-selected="false">Damascus</a></li>
            <li class="nav-item"><a class="nav-link font-weight-bold" href="#damascus" style="color: #000;">+ More Cities</a></li>
        </ul>
        <div class="col-lg-12">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="san_francisco" role="tabpanel">
                    <div class="row">

                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/du-news.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Company name</h4>
                                    <i class="fa fa-star rated" aria-hidden="true"></i>
                                    <i class="fa fa-star rated" aria-hidden="true"></i>
                                    <i class="fa fa-star rated" aria-hidden="true"></i>
                                    <i class="fa fa-star unrated" aria-hidden="true"></i>
                                    <i class="fa fa-star unrated" aria-hidden="true"></i>
                                    <p class="text-muted">Categor1 , Category2 , Category3</p>
                                    <p>Address , 0.0 KM</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/du-news.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Company name</h4>
                                    <i class="fa fa-star rated" aria-hidden="true"></i>
                                    <i class="fa fa-star rated" aria-hidden="true"></i>
                                    <i class="fa fa-star rated" aria-hidden="true"></i>
                                    <i class="fa fa-star unrated" aria-hidden="true"></i>
                                    <i class="fa fa-star unrated" aria-hidden="true"></i>
                                    <p class="text-muted">Categor1 , Category2 , Category3</p>
                                    <p>Address , 0.0 KM</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/du-news.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Company name</h4>
                                    <i class="fa fa-star rated" aria-hidden="true"></i>
                                    <i class="fa fa-star rated" aria-hidden="true"></i>
                                    <i class="fa fa-star rated" aria-hidden="true"></i>
                                    <i class="fa fa-star unrated" aria-hidden="true"></i>
                                    <i class="fa fa-star unrated" aria-hidden="true"></i>
                                    <p class="text-muted">Categor1 , Category2 , Category3</p>
                                    <p>Address , 0.0 KM</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/du-news.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Company name</h4>
                                    <i class="fa fa-star rated" aria-hidden="true"></i>
                                    <i class="fa fa-star rated" aria-hidden="true"></i>
                                    <i class="fa fa-star rated" aria-hidden="true"></i>
                                    <i class="fa fa-star unrated" aria-hidden="true"></i>
                                    <i class="fa fa-star unrated" aria-hidden="true"></i>
                                    <p class="text-muted">Categor1 , Category2 , Category3</p>
                                    <p>Address , 0.0 KM</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="damascus" role="tabpanel">

                </div>
                <div class="tab-pane fade" id="san_jose" role="tabpanel">

                </div>

            </div>
        </div>
    </div>
    <div class="text-center mar-top" style="margin: 50px 0;">
        <h4><a><u>See More Business</u></a></h4>
    </div>
</div>

<div class="jumbotron jumbotron-fluid">
    <div class="container"  style="max-width: 950px;">
        <div class="row mar-top ">
            <div class="col-lg-10">
                <h4>Hero Citizen</h4>
            </div>
            <div class="col-lg-2">
                <h4><a class="red-text float-right" href="<?php echo base_url()?>add_hero">+ List Your Achievment</a></h4>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
            <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active home-nave-links" data-toggle="pill" href="#san_francisco" role="tab" aria-controls="san_francisco" aria-selected="true">San Francisco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link home-nave-links " data-toggle="pill" href="#damascus" role="tab" aria-controls="damascus" aria-selected="false">Damascus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link home-nave-links " data-toggle="pill" href="#san_jose" role="tab" aria-controls="san_jose" aria-selected="false">San Jose</a>
                </li>
            </ul>
            <div class="col-lg-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="san_francisco" role="tabpanel">

                        <div class="row">
                            <?php foreach ($achs as $ach):?>
                            <div class="col-lg-3">
                                <div class="card">
                                    <a href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                                    <img class="card-img-top" src="<?php echo $ach->photo ? base_url().'uploads/users/'.$ach->photo : 'asset/imgs/demo-img-user.png' ?>" alt="Card image cap"" alt="Card image cap"></a>
                                    <div class="card-body">
                                        <a style="color: black;" href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                                        <h4 class="card-title"><?php echo $ach->username ." ".$ach->lastname." ".($ach->verified ? '<i class="fa fa-check-circle red-text" aria-hidden="true"></i>' : ''); ?></h4></a>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $ach->job ?></h6>
                                        <?php
                                        $per = $ach->rate;
                                        switch (true) {
                                            case ($per<10):
                                                echo   '<i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (10<=$per&&$per<20):
                                                echo   '<i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (20<=$per&&$per<30):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (30<=$per&&$per<40):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (40<=$per&&$per<50):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (50<=$per&&$per<60):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (60<=$per&&$per<70):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (70<=$per&&$per<80):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (80<=$per&&$per<90):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (90<=$per&&$per<100):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>';
                                                break;
                                            case ($per=100):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>';
                                                break;
                                            default:
                                                echo   '<i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                        }
                                        ?>
                                        <div class="media">
                                            <span class="flag flag-can flag-1x mar-right"></span>
                                            <div class="media-body">
                                                <p class="text-muted small"><?php echo $ach->city_english_name.', '. $ach->country_english_name?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body grey-lighten-3">
                                        <div class="media">
                                            <img class="d-flex mr-3" src="<?php echo $ach->ach_logo ? base_url().'uploads/achievements/logos/'.$ach->ach_logo : 'http://via.placeholder.com/100x100' ?>" width="50" height="50">
                                            <div class="media-body">
                                                <h5 class="mt-0"><?php echo $ach->ach_title ?></h5>
                                                <p class="text-muted small"><?php echo Date('M j, Y',$ach->ach_date) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mar-top">
                                            <div class="col">
                                                <p class="text-muted followers" heroId="<?php echo $ach->hero_id?>" followers="<?php echo $followers[$ach->hero_id]?>"><?php echo $followers[$ach->hero_id]?> followers</p>
                                            </div>
                                            <?php if($this->session->userdata('user_id')){
                                              if($follow[$ach->hero_id]){
                                                echo "<div class='col text-right following'>
                                                  <a href='JavaScript:void(0);' class='btn btn-sm btn-outline-danger unfollow'  heroId='".$ach->hero_id."'>Unfollow</a>
                                                </div>";
                                              }else{
                                                echo "<div class='col text-right following'>
                                                  <a href='JavaScript:void(0);' class='btn btn-sm btn-outline-success follow' 
                                                  heroId='".$ach->hero_id."'>Follow</a>
                                                </div>";
                                              } 
                                            }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="damascus" role="tabpanel">

                    </div>
                    <div class="tab-pane fade" id="san_jose" role="tabpanel">

                    </div>

                </div>
            </div>

        </div>

        <div class="text-center mar-top" style="margin: 50px;">
            <h4><a href="<?php echo base_url()?>achievements"><u>See More Heros</u></a></h4>
        </div>

    </div>
</div>

<div class="text-center mar-top" style="margin: 50px;">
    <h1><a>Download Our Game</a></h1>
</div>

<!-- footer -->
<?php $this->load->view('dubarah4/footer'); ?>

<script src="<?php echo base_url()?>asset/js/popper.min.js"  ></script>
<script src="<?php echo base_url()?>asset/js/bootstrap.min.js"  ></script>
<script src="<?php echo base_url()?>asset/js/additional.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        //unfollow #PE$$
        $('.following').on('click','.unfollow', function(){
            var heroId = $(this).attr('heroid');
            var link = "<?php echo base_url()?>unfollow/" + heroId;
            $.ajax({url: link,
                success: function(data){
                  if(data){
                    $('.unfollow[heroid="'+heroId+'"]').html('Follow');
                    //selector.html('Follow');
                    $('.unfollow[heroid="'+heroId+'"]').removeClass('btn-outline-danger unfollow').addClass('btn-outline-success follow');
                    var followers = $('.followers[heroid ="'+heroId+'"]').attr('followers');
                    $('.followers[heroid ="'+heroId+'"]').html(parseInt(followers) -1 +' followers').attr('followers',parseInt(followers)-1);
                  }
                }
            });
        });
        //follow #PE$$
        $('.following').on('click','.follow', function(){
            var heroId = $(this).attr('heroid');
            var link = "<?php echo base_url()?>follow/" + heroId;
            $.ajax({url: link,
                success: function(data){
                  if(data){
                    $('.follow[heroid="'+heroId+'"]').html('Unfollow');
                    $('.follow[heroid="'+heroId+'"]').removeClass('btn-outline-success follow').addClass('btn-outline-danger unfollow');
                    var followers = $('.followers[heroid ="'+heroId+'"]').attr('followers');
                    $('.followers[heroid ="'+heroId+'"]').html(parseInt(followers) +1 +' followers').attr('followers',parseInt(followers)+1);
                  }
                }
            });
        });
    });
</script>
</body>
</html>