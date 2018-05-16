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

    <!-- Additional CSS For Design-->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/additional.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/toastr.min.css">
       <link rel="stylesheet" href="http://localhost/achievement/ass/css/sweetalert.css">
   

    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        
          .duOrange {  background-color : #f4511e !important ;  }
        .duOrangeText {  color : #f4511e !important ;  }
        .duGreen {  background-color: #45FF00 !important;  }
        .duGreenText {  color: #45FF00 !important;  }


        @media (min-width: 576px) {
            #searchBar {
                min-width: 90%;
            }
        }

        @media (min-width: 768px) {
            #searchBar {
                min-width: 85%;
            }
        }

        @media (min-width: 992px) {
            #searchBar {
                min-width: 80%;
            }
        }

        @media (min-width: 1200px) {
            #searchBar {
                min-width: 75% ;
            }
        }

        .oldPrice {
            text-decoration: line-through;
        }

        .offerDistance::before {
            content: "\A";
            display: inline-block;
            width: 4px;
            height: 4px;
            border-radius: 50px;
            background-color: #868A96;
            margin: 3px;
        }

        .img-business {
            min-width: 100%;
            margin: 4px;
            border-radius: 4px;
        }

        .businessesCategoryImage{
            margin:15px 0;
            cursor: pointer;
        }
    </style>
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


<div class="bgimg-1">
<?php if(!$this->session->userdata('user_id')){ ?>
    <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark">
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
                <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>achievements"><?php echo 'Hero Citizen™'//trans('logout') ?></a>
                <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>nocker"><?php echo 'nocker™'//trans('logout') ?></a>
                <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>"><?php echo 'Syria Calender™'//trans('logout') ?></a>
                <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>DubarjiGame"><?php echo 'Dubarji™ Game'//trans('logout') ?></a>
                <a class="dropdown-item" style="color:#777" href="http://Blog.dubarah.com"><?php echo 'Blog'//trans('logout') ?></a>
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
   <nav class="navbar navbar-expand-lg navbar-dark">
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
                <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>achievements"><?php echo 'Hero Citizen™'//trans('logout') ?></a>
                <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>nocker"><?php echo 'nocker™'//trans('logout') ?></a>
                <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>"><?php echo 'Syria Calender™'//trans('logout') ?></a>
                <a class="dropdown-item" style="color:#777" href="<?php echo base_url() ?>DubarjiGame"><?php echo 'Dubarji™ Game'//trans('logout') ?></a>
                <a class="dropdown-item" style="color:#777" href="http://Blog.dubarah.com"><?php echo 'Blog'//trans('logout') ?></a>
              </div>
          </div>
        </li>
      </ul>
      <!-- Messages Drop -->
      <!-- <div class="dropdown mar-right">
        <button class="btn btn-icon dropdown-toggle hide-after-icon no-border" type="button" id="Messages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="<?php echo base_url() ?>asset/imgs/envelope.svg" />
          <span class="badge badge-pill badge-danger">3</span>
        </button>
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
      </div> -->
      <!-- Notification Drop -->
      <div class="dropdown mar-right">
        <button class="btn btn-icon dropdown-toggle hide-after-icon no-border" type="button" id="Notification" data-toggle="dropdown" onclick="read_nots()" aria-haspopup="true" aria-expanded="false">
          <img src="<?php echo base_url() ?>asset/imgs/bell.svg" /><span id="badge" class="badge badge-pill <?php echo count($new_nots) ? 'badge-danger' : 'badge-default' ?>"><?php echo  $num_row ?></span>
        </button>
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
            <div class="media-body" onclick="location.href='<?php echo base_url().$row->link?>';"><?php echo LANG() == 'en' ? '<h5 class="mt-0">'.$row->op_name_en.':</h5><p>'.$row->n_text_en.'</p>' : '<h5 class="mt-0" style="direction: rtl">'.$row->op_name.':</h5><p style="direction: rtl">'.$row->n_text.'</p>' ?>
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
                }?>
              </p>
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
 
 

    <div class="container" style="    text-align: center;">
        <div style="position: absolute; top: 40%; left: 0; right: 0;">
            <img src="<?php echo base_url()?>asset/imgs/DubarahLogoWhite.svg" class="img-fluid" style="max-width: 18rem ; padding: 4px"><span class="text-white font-weight-bold" style="font-size: 2.0rem; vertical-align: bottom;"> Business </span>
            <p class="text-white"><span class="font-weight-bold"> 13,245 </span>BUSINESS<span class="font-weight-bold"> 1200 </span>OFFERS<span class="font-weight-bold"> 9 </span>COUNTRIES</p>
          
              <div class="row ">
        
        <div class="col-lg-10 ">
        <div class=" card center-block  ">
          <div class="input-group">
            <span class="input-group-addon inpt_lbl_wit" id="basic-addon2">
                <strong>Find </strong>
            </span>
          <input type="text" id="find_inp" class="form-control inpt_innr_wit catfltrs" 
          value="<?php if( isset ($catg_search )  ) echo $catg_search ;?>"
          placeholder="Graphic designer, Doctor, printer" aria-describedby="basic-addon2">
          <span class="input-group-addon inpt_lbl_wit" id="basic-addon2">
                <strong>Near</strong>
            </span>
          <input type="text"  id="city_inp" class="form-control inpt_innr_wit ctyfltrs" 
          value="<?php if( isset ( $city_search[0]->name )  ) echo  $city_search[0]->name ;?>" 
          placeholder="Toronto, ON" aria-describedby="basic-addon2">
          <!-- <div id="city_res"></div> -->
          <div class=" btn btn-sm m-1 dub_org" id="go_find">
              Go and Find
          </div>
        </div>
        </div>
         <?php //echo "<pre> ---" . count($mainCats['MainCat']) ;//print_r($mainCats['MainCat'] ) ; 
        //exit;?>
        <div id="results">
               <div id="find_res" class="col-md-5 text-left  ">
                     <div class="list-group offset-md-1">
                        <?php //for ($i=0; $i < count($mainCats['MainCat']); $i++) {  $cat= $mainCats[$i] ;?>
                        <?php if(isset($mainCats)) {foreach ( $mainCats  as $cat) { ?>
                             <a href="#" class="list-group-item list-group-item-action">
                                <strong> <i class="fa <?php echo $cat->icon ; ?>" aria-hidden="true"></i>
                                  <span><?php echo $cat->name ; ?></span></strong>
                            </a>
                        <?php }} ?>
                    </div>
                </div>
                <div id="find_get_res" class="col-md-5 text-left  ">
                    <div class="list-group offset-md-1">
                        <div class="lbl list-group-item  text-dark font-weight-bold"> 
                        <i class="fa fa-diamond"></i>
                        Business </div>
                        <div id="find_res_b">
                             <a href="#" class="list-group-item list-group-item-action">
                        No Business Founded. </a></div>
                        <div class="lbl list-group-item text-dark font-weight-bold">
                        <i class="fa fa-cube"></i>
                        Main Category</div>
                        <div id="find_res_c">
                        <a href="#" class="list-group-item list-group-item-action">
                        No Main Category Founded.</a></div>
                        <div class="lbl list-group-item text-dark font-weight-bold">
                        <i class="fa fa-cubes"></i>
                        Category</div>
                        <div id="find_res_sc">
                        <a href="#" class="list-group-item list-group-item-action">
                        No Category Founded. </a>
                        </div>
                    </div>
                </div>
                <div id="city_res_all" class="col-md-4 text-left pull-right ">
                     <div class="list-group offset-md-0" id="city_res">
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="row">
        <div class="col-lg-10 ">
            <div class="pull-left " > Browsing <strong> 
                <?php   if (isset($city_search) && count($city_search) > 0 ) 
                         echo $city_search[0]->name ." ," .$city_search[0]->cntry ; 
                        else  echo "All"; ?>
              </strong> Businesses  </div>
            <div class="pull-right " > 
                Showing <?php 
                if(count($businesses) > 10 ) 
                    echo " 1-10 of ".count($businesses); 
                elseif (count($businesses) < 10 && count($businesses) > 1 ) {
                    echo " 1 - ".count($businesses); 
                }else{
                     echo "0";
                }
                ?>
                  </div>
        </div>
    </div>
          
            <div class="card" style="display: inline-block" id="searchBar">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group row" style="margin-bottom: 0">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Find</label>
                                <div class="col-sm-10">
                                    <input class="form-control" placeholder="Graphic Designer , Web Designer , IT , Doctor" style="border: none">
                                </div>
                            </div>
                        </div>
                        <div class="col" style="border-left: 2px solid #3e3e3e;">
                            <div class="form-group row" style="margin-bottom: 0">
                                <label for="colFormLabel" class="col-sm-2 col-form-label">Near</label>
                                <div class="col-sm-10">
                                    <input class="form-control" placeholder="Toronto , Damascus , ON" style="border: none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-white" style="position: absolute; top: 85%; left: 0; right: 0;"> Photo By : <span class="font-weight-bold">Dubarah Inc</span> </p>
    </div>

 
</div>
<style type="text/css">
.dub_org{
     background-color: #e85100;
     color: #FFF;
}
.innr_btn{
   
}
.inpt_lbl_wit , .inpt_innr_wit{
    border: 0px;
    background-color: #FFF;
}
 .row.vdivide [class*='col-']:not(:last-child):after {
  background: #e0e0e0;
  width: 1px;
  content: "";
  display:block;
  position: absolute;
  top:0;
  bottom: 0;
  right: 0;
  min-height: 70px;
}
.text-nowrap {
    white-space: nowrap;
    margin: 3px;
}
</style>
<div>
  <?php //$this->load->view('business/filters-controls'); ?>
</div>


<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="<?php echo base_url()?>asset/imgs/businessImage.svg" class="img-fluid">
            </div>
            <div class="col-lg-8">
                <h2>Add your business to Dubarah</h2>
                <p>
                    With its sophisticated search technology, Dubarah can help you reach consumers at the very moment they are researching your location. Let others access your information, includ-ing a description of your business, photos, contact and adress
                </p>

              	<div class="row">
    <div class="col-lg-8"> 
               <input type="text" id="search_busi_name" placeholder="Your business name"  
                class="form-control " value="" />
            </div> 
              <div class="col-lg-4">
              	  
                            <div name="search_busi_name_btn" id="search_busi_name_btn"  class="btn btn-light btn-block duOrange text-white">Add My Business</div>
                       
              	 
               
            </div>
            </div>
            <div id="search_busi_res"></div>

            </div>
        </div>
    </div>
</div>




<div class="container"  style="max-width: 950px;">
            <div class="row mar-top ">
            <div class="col-lg-9">
                <img style="width: 20%;" src="<?php echo base_url() ?>asset/imgs/dublack.svg"> <span class="red-text" style="font-size: 25px;padding-left: 10px;position:relative;top: 7px;"><strong>Business</strong></span></h4>
            </div>
            <div class="col-lg-3">
                <a class="red-text float-right"><strong>+ List your Business</strong></a>
            </div>
        </div>
      <div class="divider"></div>
      <div class="row">
        <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
        	 <?php if(isset($country)):?>
                <li class="nav-item">
                    <a class="nav-link active home-nave-links" data-toggle="pill" href="#<?php echo str_replace(' ', '', $country);?>" role="tab" aria-controls="<?php echo $country;?>" aria-selected="true">
                      <?php echo $country;?></a>
                </li>
              <?php endif;?>
              <?php if(isset($countryb1)):?>
                <li class="nav-item">
                    <a class="nav-link <?php echo (!isset($country)) ? 'active': '';?> home-nave-links " data-toggle="pill" href="#<?php echo str_replace(' ', '', $countryb1);?>" role="tab" aria-controls="<?php echo $countryb1;?>" aria-selected="false"><?php echo $countryb1;?></a>
                </li>
              <?php endif;?>
              <?php if(isset($countryb2)):?>
                <li class="nav-item">
                    <a class="nav-link home-nave-links " data-toggle="pill" href="#<?php echo str_replace(' ', '', $countryb2);?>" role="tab" aria-controls="<?php echo $countryb2;?>" aria-selected="false"><?php echo $countryb2;?></a>
                </li>
              <?php endif;?>
              <?php if(isset($countryb3)):?>
                <li class="nav-item">
                    <a class="nav-link home-nave-links " data-toggle="pill" href="#<?php echo str_replace(' ', '', $countryb3);?>" role="tab" aria-controls="<?php echo $countryb3;?>" aria-selected="false"><?php echo $countryb3;?></a>
                </li>
              <?php endif;?>
           
            <li class="nav-item"><a class="nav-link font-weight-bold" href="#damascus" style="color: #000;">+ More Cities</a></li>
        </ul>
        <div class="col-lg-12">
            <div class="tab-content" id="pills-tabContent">
              
              
              
              
            <?php if(isset($country)):?>
                    <div class="tab-pane fade show active" id="<?php echo str_replace(' ', '', $country);?>" role="tabpanel">
              
              
                    <div class="row">
                    	
               <?php foreach ($bus as $value): ?>
                   
          	
                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url().$value->cover?>" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $value->name ?></h4>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/nostae.svg" /></i>
									
                                    <p class="text-muted"><?php $i = 0; foreach ($bus_cat[$value->id] as $bus_cat0) { 
                                  if($i == 2){
                                      echo "..... ";
                                      break;
								  }
										echo $bus_cat0->name.',';
                                    	
                                    	 $i++;} ?>
                                    	
                    
                                    	
                                    </p>
                               
                                    <p><?php echo $value->country_english_name ?></p>
                                </div>
                            </div>
                        </div>

                     <?php endforeach ?>  
                     
                     </div>  
                     </div>
   						 <?php  endif?>
						
						  <?php if(isset($countryb1)):?>
                  			  <div class="tab-pane fade <?php echo (!isset($country)) ? 'show active': '';?>" id="<?php echo str_replace(' ', '', $countryb1);?>" role="tabpanel">
              
              
                    <div class="row">
                    	
               <?php foreach ($bus1 as $value): ?>
                   
          	
                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url().$value->cover?>" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $value->name ?></h4>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/nostae.svg" /></i>
								
                                    <p class="text-muted">
                                    	<?php $i = 0; foreach ($bus_cat[$value->id] as $buscat1) { 
                                  if($i == 2){
                                      echo "..... ";
                                      break;
								  }
										echo $buscat1->name.',';
                                    	
                                    	 $i++;} ?>
                                    	
                    
                                    	
                                    </p>
                                   
                                       <p><?php echo $value->country_english_name ?></p>
                                </div>
                            </div>
                        </div>

                             <?php endforeach ?>  
                              </div>  
                     </div>  
						    <?php  endif?>
						  <?php if(isset($countryb2)):?>
                    <div class="tab-pane fade " id="<?php echo str_replace(' ', '', $countryb2);?>" role="tabpanel">
              
              
                    <div class="row">
                    	
               <?php foreach ($bus2 as $value): ?>
                   
          	
                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url().$value->cover?>" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $value->name ?></h4>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/nostae.svg" /></i>
									
                                     <p class="text-muted"><?php $i = 0; foreach ($bus_cat[$value->id] as $bus_cat) { 
                                  if($i == 2){
                                      echo "..... ";
                                      break;
								  }
										echo $bus_cat->name.',';
                                    	
                                    	 $i++;} ?>
                                    	
                    
                                    	
                                    </p>
                                
                                       <p><?php echo $value->country_english_name ?></p>
                                </div>
                            </div>
                        </div>

                             <?php endforeach ?>  
                              </div>  
                     </div>  
    <?php  endif?>

  <?php if(isset($countryb3)):?>
                    <div class="tab-pane fade " id="<?php echo str_replace(' ', '', $countryb3);?>" role="tabpanel">
              
              
                    <div class="row">
                    	
               <?php foreach ($bus3 as $value): ?>
                   
          	
                        <div class="col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="<?php echo base_url().$value->cover?>" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $value->name ?></h4>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/nostae.svg" /></i>
								
                                     <p class="text-muted"><?php $i = 0; foreach ($bus_cat[$value->id] as $bus_cat) { 
                                  if($i == 2){
                                      echo "..... ";
                                      break;
								  }
										echo $bus_cat->name.',';
                                    	
                                    	 $i++;} ?>
                                    	
                    
                                    	
                                    </p>
                               
                                     <p><?php echo $value->country_english_name ?></p>
                                </div>
                            </div>
                        </div>

                             <?php endforeach ?>    

                    </div>
                </div>
                <?php  endif?>
                
                
                

            </div>
        </div>
      </div>
      
 <div class="text-center mar-top" style="margin: 50px 0;">
        <h6><a><u>See More business</u></a></h6>
    </div>
</div>






<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <img src="<?php echo base_url()?>asset/imgs/ResturantCategoryBusiness.PNG" class="img-fluid businessesCategoryImage">
                <img src="<?php echo base_url()?>asset/imgs/beautyCategoryBusiness.PNG" class="img-fluid businessesCategoryImage">
            </div>
            <div class="col-lg-3">
                <img src="<?php echo base_url()?>asset/imgs/shoopingCategoryBusiness.PNG" class="img-fluid businessesCategoryImage">
                <img src="<?php echo base_url()?>asset/imgs/automativeCategoryBusiness.PNG" class="img-fluid businessesCategoryImage">
            </div>
            <div class="col-lg-3">
                <img src="<?php echo base_url()?>asset/imgs/nightlifeCategoryBusiness.PNG" class="img-fluid businessesCategoryImage">
                <img src="<?php echo base_url()?>asset/imgs/servicesCategoryBusiness.PNG" class="img-fluid businessesCategoryImage">
            </div>
            <div class="col-lg-3">
                <img src="<?php echo base_url()?>asset/imgs/activelifeCategoryBusiness.PNG" class="img-fluid businessesCategoryImage">
                <img src="<?php echo base_url()?>asset/imgs/otherCategoryBusiness.PNG" class="img-fluid businessesCategoryImage">
            </div>
        </div>
    </div>
</div>


<!-- footer -->
<?php $this->load->view('business/common/navfooter'); ?>
<?php $this->load->view('business/common/footer'); ?>
<script type="text/javascript">
    $(document).ready(function () { init_load(); //('','');
      /// -------- Filters --------------
      $('.featfltrs').on('click',function (e) {
            val = $(e.target).attr('id') ;
            setParamURLFilter('feat',val );
      });
      $('.pricfltr').on('click',function (e) {
            val = $(e.target).attr('id') ;
            setParamURLFilter('prc',val );
      });
      $('.ctyNearfltr').on('click',function (e) {
            val = $(e.target).attr('id') ;
            setParamURLFilter('cty',val );
      });
      $('.srtBy').on('click',function (e) {
            val = $(e.target).attr('id') ;
            setParamURLFilter('srt',val );
      });
      $('#opendBusinessBtn').on('click',function(){
          if( ! $("#opendBusinessBtn").hasClass('btn-success') )
            {
              $("#opendBusinessBtn").removeClass('btn-outline-secondary');
              $("#opendBusinessBtn").addClass('btn-success');
              setParamURLFilter('opn','1');
            }
          else
            {
              $("#opendBusinessBtn").removeClass('btn-success');
              $("#opendBusinessBtn").addClass('btn-outline-secondary');
              removeParamURLFilter('opn');
            }
      });
      // ----- Styling ----------
      $('#allfilterBtn').on('click',function(){
            c= $("#filtersCard").css('display');
            if( c == "none" )
              {$("#allfilterBtn").addClass('btn-success');}
              else
              {$("#allfilterBtn").removeClass('btn-success');}
            $("#filtersCard").toggle('slow');
      });
  });

</script>
<script type="text/javascript">
function city_input_change(val) {
    if(val != '')
    {
        console.log(val);
            $.ajax({
                  url: '<?php echo base_url()?>get_busin_cities/' +  val,
                  success: function(data) {
                     arr = JSON.parse(data);
                      if (arr) {
                          elms = "";
                          for (var i = 0; i < arr.length; i++) {
                            elms += '<a href="#" onclick="setParamURLFilter('+"'cty'"+','+arr[i].id +' )"  id="'+arr[i].id +'" class="list-group-item ctyfindId list-group-item-action"><strong><span> '+ arr[i].name + " ,"+ arr[i].cntry+'</span></strong></a>' ;
                          }
                          $("#city_res").html(elms);
                      };
                  }
              });
    }
     $("#city_res").css({'display':'block'});
}
function find_input_change(val) {
    $("#find_res").css({'display' : 'none'});
    $("#find_get_res").css({'display' : 'block'});
    if(val != '')
    {
         $.ajax({
                  url: '<?php echo base_url()?>get_busin_findedcategory/' +  val,
                  success: function(data) {
                    arr = JSON.parse(data);
                    // console.log(arr['business']);
                      if (arr['business'] && arr['business'].length > 0) {
                          business_elms = "";
                          for (var i = 0; i < arr['business'].length; i++) {
                            business_elms += '<a href="#"   id="'+arr['business'][i].id +'" class="list-group-item busfindId list-group-item-action"> '+
                                '<span class="col-md-3"><img width="50" src="'+arr['business'][i].logo+'"></span>'
                            +'<span> '+ arr['business'][i].name + '</span></a>' ;
                          }
                          $("#find_res_b").html(business_elms);
                      }
                      if (arr['cats'] &&  arr['cats'].length > 0 ) {
                          cats_elms = "";
                          for (var i = 0; i < arr['cats'].length; i++) {
                            cats_elms += '<a href="#" onclick="setParamURLFilter('+"'findcat'"+',`'+ arr['cats'][i].name+'` )"  id="'+arr['cats'][i].id +'" class="list-group-item catfindId list-group-item-action"><strong><span> '+ arr['cats'][i].name + 
                            '</span></strong></a>' ;
                          }
                          $("#find_res_c").html(cats_elms);
                      }
                      if (arr['subCat'] && arr['subCat'].length > 0) {
                          subCat_elms = "";
                          for (var i = 0; i < arr['subCat'].length; i++) {
                            subCat_elms += '<a href="#" onclick="setParamURLFilter('+"'findcat'"+',`'+arr['subCat'][i].name +'` )"  id="'+arr['subCat'][i].id +'" class="list-group-item catfindId list-group-item-action"><strong><span> '+ arr['subCat'][i].name + 
                            '</span></strong></a>' ;
                          }
                          $("#find_res_sc").html(subCat_elms);
                      }
                    }
              });
    }else{
        $("#find_get_res").css({'display' : 'none'});
    }
}
$(document).ready(function(){
    $("#find_res , #find_get_res").css({'display':'none'});
    $("#find_res , #find_get_res , #city_res").css({  'position':'absolute' , 'z-index':'15'});
    $("#city_res").focusout( function(){
        $("#city_res").css({'display':'none'});
    });
    $("#find_inp").focus(function(){ //
        c= $("#find_inp").val();
        if(c == "")
            $("#find_res").toggle();
    }).focusout( function(){
        $("#find_res").css({'display':'none'});
    } );
    $("#find_get_res").focusout( function(){
        $("#find_get_res").css({'display':'none'});
    } );
    $("#city_inp").keyup(function(e){
        city_input_change($("#city_inp").val());

    })
    $("#find_inp").keyup(function(e){
        find_input_change($("#find_inp").val());
    })
    //alert('22');
    //========= Search =============
    $("#go_find").click(function(){
        cty = $("#city_inp").val().replace(/\s/g, '') ;
        cat = $("#find_inp").val() ;
        if( cty == "" && checkParamURLFilter('cty') ){
            //console.log("CCC " + cty);
            removeParamURLFilter('cty');
        }else{
            //city_input_change(cty)
        }
        if( cat == "" && checkParamURLFilter('cat') ){
            removeParamURLFilter('findcat');
        }else{
            //find_input_change(cat)
        }
    });
})
</script>
<script src="<?php echo base_url() . 'asset/js/find_fliter.js' ;?>"></script>
 
<script type="text/javascript">
function city_input_change(val) {
	 $("#find_res").css({'display' : 'none'});
    $("#find_get_res").css({'display' : 'none'});
    if(val != '')
    {
        console.log(val);
            $.ajax({
                  url: '<?php echo base_url()?>get_busin_cities',
                  method:"post",
                  data:{val:val},
                  
                  
                  success: function(data) {
                     arr = JSON.parse(data);
                      if (arr) {
                          elms = "";
                          for (var i = 0; i < arr.length; i++) {
                            elms += '<a href="<?php echo base_url().'business-filter?srt=mv&findcat=' ; ?>'   +arr[i].id +'"  class="list-group-item ctyfindId list-group-item-action"><strong><span> '+ arr[i].name + " ,"+ arr[i].cntry+'</span></strong></a>' ;
                          }
                          $("#city_res").html(elms);
                      }
                  }
              });
   	 $("#city_res").css({'display':'block'});
    }else{
    	
    	 $("#city_res").css({'display':'none'});
    }
    
    
}
function find_input_change(val) {
	$("#city_res").css({'display' : 'none'});
    $("#find_res").css({'display' : 'none'});
    $("#find_get_res").css({'display' : 'block'});
    if(val != '')
    {
         $.ajax({
                  url: '<?php echo base_url()?>get_busin_findedcategory',
                      method:"post",
                  	 data:{val:val},
                  
                  
                  success: function(data) {
                  //	alert(data);
                    arr = JSON.parse(data);
                    //console.log(arr['business']);
                      if (arr['business'] && arr['business'].length > 0) {
                          business_elms = "";
                          for (var i = 0; i < arr['business'].length; i++) {
                            business_elms += '<a href="<?php echo base_url().'business-profile/' ?>'+arr['business'][i].id +'"   id="'+arr['business'][i].id +'" class="list-group-item busfindId list-group-item-action"> '+
                                '<span class="col-md-3"><img width="50" src="'+arr['business'][i].logo+'"></span>'
                            +'<span> '+ arr['business'][i].name + '</span></a>' ;
                          } 
                          alert(business_elms);
                          $("#find_res_b").html(business_elms);
                      }else{
                      	
                      	
                      	 bemet = '<a href="" class="list-group-item list-group-item-action">No Business Founded. </a>';
                      	 $("#find_res_b").html(bemet);
                      	
                      }
                      if (arr['cats'] &&  arr['cats'].length > 0 ) {
                          cats_elms = "";
                          for (var i = 0; i < arr['cats'].length; i++) {
                            cats_elms += '<a href="<?php echo base_url().'business-filter?srt=mv&findcat=' ; ?>'   + arr['cats'][i].name+'"   id="'+arr['cats'][i].id +'" class="list-group-item catfindId list-group-item-action"><strong><span> '+ arr['cats'][i].name + 
                            '</span></strong></a>' ;
                          }
                          $("#find_res_c").html(cats_elms);
                      }else{
                      	
                      	 catempty = '<a href="#" class="list-group-item list-group-item-action"> No Main Category Founded. </a>';
                      	 $("#find_res_c").html(catempty);
                      	
                      }
                      if (arr['subCat'] && arr['subCat'].length > 0) {
                          subCat_elms = "";
                          for (var i = 0; i < arr['subCat'].length; i++) {
                            subCat_elms += '<a href="<?php echo base_url().'business-filter?srt=mv&findcat=' ; ?>'   + arr['cats'][i].name+'"   id="'+arr['subCat'][i].id +'" class="list-group-item catfindId list-group-item-action"><strong><span> '+ arr['subCat'][i].name + 
                            '</span></strong></a>' ;
                          }
                          $("#find_res_sc").html(subCat_elms);
                      }else{
                      	 subempty = '<a href="#" class="list-group-item list-group-item-action">No Category Founded. </a>';
                      	 $("#find_res_sc").html(subempty);
                      	
                      }
                    }
              });
    }else{
        $("#find_get_res").css({'display' : 'none'});
    }
}
  </script> 