<?php //$this->load->view('business/common/header'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/bootstrap.min.css"  >
    <!-- FontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  >    <!-- Additional CSS -->
    <!-- Flag Icon CSS -->
    <link href="<?php echo base_url()?>asset/css/flag-css.min.css" rel="stylesheet">
    <!-- Bootstrap Social BUTTON CSS -->
    <link href="<?php echo base_url()?>asset/css/bootstrap-social.css" rel="stylesheet">
    <!-- Google WEBONT openSans Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Additional CSS For Design-->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/additional.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/sweetalert.css">
    <style type="text/css">
        .fa-thumbs-o-up:hover, .fa-thumbs-o-down:hover {
            color: red;
        }
        .fa-thumbs-up:hover, .fa-thumbs-down:hover {
            color: red;
        }
        /*upload user photo css EDITED */
        .user-images {
            width:20%;
            width:100%;
        }
        #profile-upload{
            background-image:url('');
            background-size:cover;
            background-position: center;
            height: 200px; max-width: 200px;
            border: 5px solid #fff;
            position:relative;
            border-radius:5px;
            overflow:hidden;
        }
        #profile-upload:hover input.upload{
          display:block;
        }
        #profile-upload:hover .hvr-profile-img{
          display:inline-block;
         }
        #profile-upload .fa{   margin: auto;
            position: absolute;
            bottom: -4px;
            left: 0;
            text-align: center;
            right: 0;
            padding: 6px;
           opacity:1;
          transition:opacity 1s linear;
           -webkit-transform: scale(.75); 
         
         
        }
        #profile-upload:hover .fa{
           opacity:1;
           -webkit-transform: scale(1); 
        }
        #profile-upload input.upload {
            z-index:1;
            left: 0;
            margin: 0;
            bottom: 0;
            top: 0;
            padding: 0;
            opacity: 0;
            outline: none;
            cursor: pointer;
            position: absolute;
            background:#ccc;
            width:100%;
            display:none;
        }

        #profile-upload .hvr-profile-img {
          width:100%;
          height:100%;
          display: none;
          position:absolute;
          vertical-align: middle;
          position: relative;
          background: transparent;
         }
        #profile-upload .fa:after {
            content: "";
            position:absolute;
            bottom:0; left:0;
            width:100%; height:0px;
            background:rgba(0,0,0,0.3);
            z-index:-1;
            transition: height 0.3s;
            }

        #profile-upload:hover .fa:after { height:100%; }
    </style>
</head>
<body>
    <!-- Header Nav After Signin [user navbar] -->
    <?php $this->load->view('dubarah4/header'); ?>
    <!-- Cover Photo -->
    <img src="http://via.placeholder.com/1200x250" class="du-cover-image">
    <div class="container user-info">
        <div class="media du-profile">
            <?php if($profile){ ?>
                <form method="post" id="photo_up" enctype="multipart/form-data" action="">
                        <div class="user-images" id='profile-upload' style="
                        width: 200px;
                        background-image: url('<?php echo $user->photo ? base_url().'uploads/users/'.$user->photo : base_url().'ass/images/image_profile.jpg' ?>')">
                        <div class="hvr-profile-img"><input   type="file" name="fs_image1" id='getval' onchange="photo_up()"  class="upload w180" title="Dimensions 180 X 180" id="imag"></div>
                        <i class="fa fa-camera"></i>
                         </div>
                </form>
            <?php }else{ ?>
                <img class="mr-3 du-profile-image" src="<?php echo $user->photo ? base_url().'uploads/users/'.$user->photo : base_url().'ass/images/image_profile.jpg' ?>" alt="Generic placeholder image" width="200">
            <?php } ?>
            <div class="media-body du-profile-info">
                <?php if(!empty($hero)){ ?>
                <h3 class="mt-0"><?php echo $user->username ." ".$user->lastname." "; echo $hero->verified ? '<i class="fa fa-check-circle red-text" aria-hidden="true"></i>' : '' ;?> [hero] <span class="text-muted">Since Sep 2017</span></h3>
                <div class="row mar-top ">
                    <div class="col-lg-10">
                        <h5><?php echo $user->job?></h5>
                    </div>
                <?php }else{ ?>
                <h3 class="mt-0"><?php echo $user->username ." ".$user->lastname." ";?> [hero] <span class="text-muted">Since Sep 2017</span></h3>
                <div class="row mar-top ">
                    <div class="col-lg-10">
                        <h5></h5>
                    </div>
                <?php } ?>
                    <div class="col-lg-2">
                        <?php echo $profile ? '<h4><a class="float-right" style="text-decoration: none;color:black;" href="'.base_url().'my_profile"><i class="fa fa-cog" aria-hidden="true"></i> Edit</a></h4>' : ''?>
                    </div>
                </div>
                <div class="row mar-top ">
                    <div class="col-lg-2">
                        <h4 class="text-muted t_likes"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i> <?php echo $t_likes ? $t_likes : '0' ?> </h4>
                    </div>
                    <div class="col-lg-2">
                        <h4 class="text-muted t_dislikes"><i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i> <?php echo $t_dislikes ? $t_dislikes : '0' ?> </h4>
                    </div>
                    <div class="col-lg-8">
                        <?php if($this->session->userdata('user_id') && !empty($hero)){
                            $button = $follow[$hero->hero_id] ? '<button type="button" class="btn btn-dark float-right unfollow" recom="0" heroId="'.$hero->hero_id.'">Unfollow</button>' : '<button type="button" class="btn btn-dark float-right follow" heroId="'.$hero->hero_id.'">Follow</button></h5>';
                            echo '<h5><span class="text-muted followers" recom="0" heroId="'.$hero->hero_id.'" followers="'.$followers[$hero->hero_id].'">'.$followers[$hero->hero_id].' followers </span>'.$button ;
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <h2 class="user-name-about"><i class="fa fa-user-o" aria-hidden="true"></i> About <?php echo $user->username?> <span class="flag flag-can flag-1x mar-right"></span>
                    <span class="user-country"><?php echo (isset($place->city) ? $place->city .', ' : '') . (isset($place->country) ? $place->country : '' );?></span></h2>
                <p><?php echo $user->about?></p>
                <div class="divider"></div>
                <h2 class="user-name-about mar-top"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Achievments</h2>
            <?php if(!empty($achs)){ ?>
            <?php foreach ($achs as $ach):?>
                <div class="jumbotron mar-top">
                    <!-- Edit Dropdown -->
                    <?php if($profile): ?>
                        <div class="dropdown">
                            <button type="button" class="close mar-left dropdown-toggle hide-after-icon" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                <a class="dropdown-item" href="<?php echo base_url().'edit_hero/'.$ach->hero_id.'/'.$ach->ach_id ?>">Edit this entry</a>
                                <div class="dropdown-divider"></div>
                                <?php echo !$ach->active ? 
                                '<a class="dropdown-item primary" ach="'.$ach->ach_id.'" >Make it Primary achievment</a>
                                <div class="dropdown-divider"></div>' : '<a class="dropdown-item primary" ach="'.$ach->ach_id.'" hidden="hidden" >Make it Primary achievment</a>
                                <div class="dropdown-divider" hidden="hidden" ></div>' ?>
                                <a class="dropdown-item" href="#">Boost and get more followers</a>
                            </div>
                        </div>
                        <button type="button" class="close mar-right"><i class="fa fa-window-minimize fa-lg" aria-hidden="true"></i></button>
                    <?php endif?>
                    <div class="media">
                        <img class="align-self-center mr-3 user-main-achivmnet-logo" src="<?php echo $ach->ach_logo ? base_url().'uploads/achievements/logos/'.$ach->ach_logo : base_url().'ass/images/image_profile.jpg' ?>" alt="Generic placeholder image">
                        <div class="media-body">
                            <h4 class="mt-0"><b><?php echo $ach->ach_title?></b></h4>
                            <?php echo Date('M j, Y',$ach->ach_date) ?>
                        </div>
                    </div>
                    <h4 class="mar-top"><b>Achievement Type :</b>  <?php echo $ach->achType?> </h4>
                    <h4 class="mar-top"><span class="flag flag-can flag-2x mar-right"></span><span><?php echo $ach->city.', '.$ach->country?></span></h4>
                    <p><?php echo $ach->ach_exp?></p>

                    <div class="row">
                    <?php foreach ($ach_data[$ach->ach_id]['imgs'] as $img):?>
                        <div class="col-lg-3">
                            <img class="achivment-imgs-userprofile" src="<?php echo base_url().'uploads/achievements/pictures/'.$img->img?>">
                        </div>
                    <?php endforeach?>
                       
                    </div>
                <?php if(!empty($ach->website)):?>
                    <h4 class="mar-top"><b>Website : </b> <?php echo $ach->website?> </h4>
                <?php endif?>
                <?php if(!empty($ach->facebook)):?>
                    <h4 class="mar-top"><b>Facebook : </b><?php echo $ach->facebook?> </h4>
                <?php endif?>
                <?php if(!empty($ach->twitter)):?>
                    <h4 class="mar-top"><b>Twitter : </b> <?php echo $ach->twitter?> </h4>
                <?php endif?>
                </div>
                <?php if($this->session->userdata('user_id')):?>
                <div class="jumbotron" style="padding: 1rem 2rem 2rem 2rem;">
                    <div class="row mar-top" style="margin-top: 40px">
                        <div class="col-lg-8">
                            <h4>
                                <b class="mar-right">Do you like this?</b>&nbsp;
                                <span class="text-muted <?php echo $ach_data[$ach->ach_id]['ck_like'] ? 'liked' : 'like'?>" achId="<?php echo $ach->ach_id ?>" likes="<?php echo $ach_data[$ach->ach_id]['likes']?>"><i class="fa fa-thumbs-o-up fa-lg" aria-hidden="true"></i> <?php echo $ach_data[$ach->ach_id]['likes']?> </span>&nbsp;&nbsp;
                                <span class="text-muted <?php echo $ach_data[$ach->ach_id]['ck_dislike'] ? 'disliked' : 'dislike'?>" achId="<?php echo $ach->ach_id ?>" dislikes="<?php echo $ach_data[$ach->ach_id]['dislikes']?>"><i class="fa fa-thumbs-o-down fa-lg" aria-hidden="true"></i> <?php echo $ach_data[$ach->ach_id]['dislikes']?> </span>
                            </h4>

                        </div>
                        <!-- <div class="col-lg-4 row text-right">
                            <div class="col-lg-6">
                                <button type="button" class="btn btn-dark btn-block">Close</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="button" class="btn btn-light btn-block">Follow</button>
                            </div>
                        </div> -->
                    </div>
                </div>
                <?php endif?>
            <?php endforeach?>
                

                <!-- Other Achivment -->

                <!-- <div class="jumbotron mar-top"> -->
                    <!-- Edit Dropdown -->
                    <!-- <div class="dropdown">
                        <button type="button" class="close mar-left dropdown-toggle hide-after-icon" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Edit this entry</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Make it Primery achievment</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Boost and get more followers</a>
                        </div>
                    </div>
                    <div class="media">
                        <img class="align-self-center mr-3 user-main-achivmnet-logo" src="<?php echo base_url()?>asset/imgs/dubarjiicon.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h4 class="mt-0"><b>Nocker</b></h4>
                            Feb 11, 2013
                        </div>
                    </div>
                    <h4 class="mar-top"><b>Achievement Type :</b>  Launching a Business </h4>
                    <h4 class="mar-top"><span class="flag flag-can flag-2x mar-right"></span><span>Toronto, Canada</span></h4>
                    <div class="text-right">
                        <button type="button" class="btn btn-light">More</button>
                    </div> 
                </div>-->
            <?php }else{ 
                echo $profile ? '<a href="'.base_url().'add_hero">add achievement!</a>' : '';
            } ?>
            </div>
            <!-- Right Side -->
            <div class="col-lg-4">
                <!-- business section  -->
                <!-- <h4><b>My Business</b></h4>
                <div class="media mar-top">
                    <img class="align-self-center mr-3 user-side-achivmnet-logo" src="<?php echo base_url()?>asset/imgs/dubarjiicon.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h4 class="mt-0"><b>Dubarah</b></h4>
                        Feb 11, 2013
                    </div>
                </div>
                <div class="media mar-top">
                    <img class="align-self-center mr-3 user-side-achivmnet-logo" src="<?php echo base_url()?>asset/imgs/dubarjiicon.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h4 class="mt-0"><b>Nocker</b></h4>
                        Feb 11, 2013
                    </div>
                </div>
                <div class="divider"></div> -->

                    <h4 class="mar-top"><b>Profile View</b></h4>
                    <p class="mar-left">78 Per day</p>
                    <p class="mar-left">10,240 total profile views</p>
                <div class="divider"></div>
                    <h4 class="mar-top"><b>Skills (<?php echo count($skills)?>)</b></h4>
                <?php foreach ($skills as $skill):?>
                    <div class="user-skill"><?php echo $skill->skill_name?></div>
                <?php endforeach?>
                <?php if(isset($re_achs)&&!empty($re_achs)&&$this->session->userdata('user_id')):?>
                <div class="divider"></div>
                    <h4 class="mar-top"><b>Recomanded for you</b></h4>
                    <div class="row">
                        <?php foreach($re_achs as $ach):?>
                        <div class="col-sm-12 col-lg-6">
                            <div class="card">
                                <a href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                                <img class="card-img-top" src="<?php echo $ach->photo ? base_url().'uploads/users/'.$ach->photo : base_url().'asset/imgs/demo-img-user.png' ?>" alt="Card image cap"" alt="Card image cap"></a>
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
                                            <p class="text-muted followers" heroId="<?php echo $ach->hero_id?>" followers="<?php echo $re_achs_d['followers'][$ach->hero_id]?>"><?php echo $re_achs_d['followers'][$ach->hero_id]?> followers</p>
                                        </div>
                                        <?php if($this->session->userdata('user_id')){
                                          if($re_achs_d['follow'][$ach->hero_id]){
                                            echo "<div class='col text-right following'>
                                              <a href='JavaScript:void(0);' class='btn btn-sm btn-outline-danger unfollow' recom='1' heroId='".$ach->hero_id."'>Unfollow</a>
                                            </div>";
                                          }else{
                                            echo "<div class='col text-right following'>
                                              <a href='JavaScript:void(0);' class='btn btn-sm btn-outline-success follow' recom='1' heroId='".$ach->hero_id."'>Follow</a>
                                            </div>";
                                          } 
                                        }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                    </div>
                <?php endif?>
            </div>
        </div>

    </div>
    <!-- footer #PE$$ -->
    <?php $this->load->view('dubarah4/footer'); ?>
 
    <script src="<?php echo base_url()?>asset/js/popper.min.js"  ></script>
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"  ></script>
    <script src="<?php echo base_url()?>asset/js/additional.js"></script>
    <script src="<?php echo base_url() ?>ass/js/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            <?php if ($this->session->userdata('suc_message') || $this->session->userdata('err_message')) { ?>

                <?php if ($this->session->userdata('err_message')) { ?>
                    title = '<?php echo trans('fail'); ?>';
                    text  = '<?php echo $this->session->userdata('err_message'); $this->session->unset_userdata('err_message'); ?>';
                    type  = 'error';
                <?php } ?>
                <?php if ($this->session->userdata('suc_message')) { ?>
                    title = '<?php echo trans('success'); ?>';
                    text  = '<?php echo $this->session->userdata('suc_message'); $this->session->unset_userdata('suc_message'); ?>';
                    type  = 'success';
                <?php } ?>
                    
                
                swal({
                    title: title,
                    text: text,
                    type: type,
                    timer: 6000,
                    html: true,
                    showConfirmButton:true
                });

            <?php } ?>
            $('.primary').click(function(){
                var element = $(this);
                var ach_id = $(this).attr('ach');
                var hero_id = <?php echo $hero->hero_id?>;
                $.ajax({
                    url: "<?php echo base_url()?>primary/"+ach_id+"/"+hero_id,
                    success: function(data){
                        if(data){
                            $('[hidden="hidden"]').removeAttr('hidden');
                            element.next().attr('hidden', 'hidden');
                            element.attr('hidden', 'hidden');
                            title  = '<?php echo trans('success'); ?>';
                            text   = '<?php echo trans('suc_primary')?>';
                            type   = 'success';
                            swal({
                                title: title,
                                text: text,
                                type: type,
                                timer: 6000,
                                html: true,
                                showConfirmButton:true
                            });
                        }else{
                            console.log('error');
                        }
                    }
                });
            });
            //unfollow #PE$$
            $(document.body).on('click','.unfollow', function(){
                var heroId = $(this).attr('heroid');
                var recom = $(this).attr('recom');
                var link = "<?php echo base_url()?>unfollow/" + heroId;
                $.ajax({url: link,
                    success: function(data){
                      if(data){
                        $('.unfollow[heroid="'+heroId+'"]').html('Follow');
                        if(recom == '1'){
                            $('.unfollow[heroid="'+heroId+'"]').removeClass('btn-outline-danger unfollow').addClass('btn-outline-success follow');
                        }else{
                            $('.unfollow[heroid="'+heroId+'"]').removeClass('unfollow').addClass('follow');
                        }
                        var followers = $('.followers[heroid ="'+heroId+'"]').attr('followers');
                        $('.followers[heroid ="'+heroId+'"]').html(parseInt(followers) -1 +' followers').attr('followers',parseInt(followers)-1);
                      }
                    }
                });
            });
            //follow #PE$$
            $(document.body).on('click','.follow', function(){
                var heroId = $(this).attr('heroid');
                var recom = $(this).attr('recom');
                var link = "<?php echo base_url()?>follow/" + heroId;
                $.ajax({url: link,
                    success: function(data){
                      if(data){
                        $('.follow[heroid="'+heroId+'"]').html('Unfollow');
                        if(recom == '1'){
                            $('.follow[heroid="'+heroId+'"]').removeClass('btn-outline-success follow').addClass('btn-outline-danger unfollow');
                        }else{
                            $('.follow[heroid="'+heroId+'"]').removeClass('follow').addClass('unfollow');
                        }
                        var followers = $('.followers[heroid ="'+heroId+'"]').attr('followers');
                        $('.followers[heroid ="'+heroId+'"]').html(parseInt(followers) +1 +' followers').attr('followers',parseInt(followers)+1);
                      }
                    }
                });
            });

            //check if Liked or Disliked #PE$$
            $('.liked i').replaceWith('<i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i>');
            $('.disliked i').replaceWith('<i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i>');

            //like #PE$$
            $(".jumbotron").on('click','.like', function(){
                var achId = $(this).attr('achid');
                var link = "<?php echo base_url()?>like/" + achId;
                $.ajax({url: link,
                    success: function(data){
                      if(data){
                        var likes = $('.like[achid ="'+achId+'"]').attr('likes');
                        //alert(likes);
                        likes = parseInt(likes) +1;
                        $('.like[achid="'+achId+'"]').html('<i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i> '+ likes + ' ' ).attr('likes',likes);
                        $('.like[achid="'+achId+'"]').removeClass('like').addClass('liked');
                        // $('.t_likes').html('<i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i> '+ likes + ' ' );
                      }
                    }
                });
            });

            //cancel like #PE$$
            $(".jumbotron").on('click','.liked', function(){
                var achId = $(this).attr('achid');
                var link = "<?php echo base_url()?>c_like/" + achId;
                $.ajax({url: link,
                    success: function(data){
                      if(data){
                        var likes = $('.liked[achid ="'+achId+'"]').attr('likes');
                        //alert(likes);
                        likes = parseInt(likes) -1;
                        $('.liked[achid="'+achId+'"]').html('<i class="fa fa-thumbs-o-up fa-lg" aria-hidden="true"></i> '+ likes + ' ' ).attr('likes',likes);
                        $('.liked[achid="'+achId+'"]').removeClass('liked').addClass('like');
                        // $('.t_likes').html('<i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i> '+ likes + ' ' );
                      }
                    }
                });
            });

            //dislike #PE$$
            $(".jumbotron").on('click','.dislike', function(){
                var achId = $(this).attr('achid');
                var link = "<?php echo base_url()?>dislike/" + achId;
                $.ajax({url: link,
                    success: function(data){
                      if(data){
                        var dislikes = $('.dislike[achid ="'+achId+'"]').attr('dislikes');
                        //alert(likes);
                        dislikes = parseInt(dislikes) +1;
                        $('.dislike[achid="'+achId+'"]').html('<i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i> '+ dislikes + ' ' ).attr('dislikes',dislikes);
                        $('.dislike[achid="'+achId+'"]').removeClass('dislike').addClass('disliked');
                        // $('.t_dislikes').html('<i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i> '+ dislikes + ' ' );
                      }
                    }
                });
            });

            //cancel dislike #PE$$
            $(".jumbotron").on('click','.disliked', function(){
                var achId = $(this).attr('achid');
                var link = "<?php echo base_url()?>c_dislike/" + achId;
                $.ajax({url: link,
                    success: function(data){
                      if(data){
                        var dislikes = $('.disliked[achid ="'+achId+'"]').attr('dislikes');
                        //alert(likes);
                        dislikes = parseInt(dislikes) -1;
                        $('.disliked[achid="'+achId+'"]').html('<i class="fa fa-thumbs-o-down fa-lg" aria-hidden="true"></i> '+ dislikes + ' ' ).attr('dislikes',dislikes);
                        $('.disliked[achid="'+achId+'"]').removeClass('disliked').addClass('dislike');
                        // $('.t_dislikes').html('<i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i> '+ dislikes + ' ' );
                      }
                    }
                });
            });

        });
        
        //update photo dynamicly 
            document.getElementById('getval').addEventListener('change', readURL, true);
            function readURL(){
                var file = document.getElementById("getval").files[0];
                var reader = new FileReader();
                reader.onloadend = function(){
                    document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";        
                }
                if(file){
                    reader.readAsDataURL(file);
                }else{
                }
            }
            function photo_up()  {
                if (typeof FormData !== 'undefined') {

                // send the formData
                var formData = new FormData( $("#photo_up")[0] );

                    $.ajax({
                        url : '<?php echo base_url() ?>up_img',  // Controller URL
                        type : 'POST',
                        data : formData,
                        async : false,
                        cache : false,
                        contentType : false,
                        processData : false,
                        success : function(data) {
                            res = JSON.parse(data);
                           
                            
                            if (res[0]) {
                                swal({
                            title: '<?php echo trans('success'); ?>',
                            text: '<?php echo trans('img_up'); ?>' ,
                            type: 'success',
                            html:true,
                            
                            showConfirmButton:true
                        });
                                
                            } else if (res[1]){
                                swal({
                            title: '<?php echo trans('fail'); ?>',
                            text: res[1] ,
                            type: 'error',
                             html:true,
                            
                            showConfirmButton:true
                        });
                            } else {
                  swal({
                            title: '<?php echo trans('fail'); ?>',
                            text: '<?php echo trans('try_agin'); ?>' ,
                            type: 'error',
                            
                            showConfirmButton:true
                        });
                            };
                        }
                    });
            
                } else {
                   message("Your Browser Don't support FormData API! Use IE 10 or Above!");
                }   
            };

    </script>
</body>
</html>



<?php //$this->load->view('business/common/footer'); ?>

