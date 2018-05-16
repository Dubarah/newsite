  
  <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/bootstrap.min.css" >
    <!-- FontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">    <!-- Additional CSS -->
    <!-- Flag Icon CSS -->
    <link href="<?php echo base_url()?>asset/css/flag-css.min.css" rel="stylesheet">
    <!-- Bootstrap Social BUTTON CSS -->
    <link href="<?php echo base_url()?>asset/css/bootstrap-social.css" rel="stylesheet">
    <!-- Google WEBONT openSans Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Additional CSS For Design-->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/additional.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/sweetalert.css">
  <style>
        @media (min-width: 576px) {
            #DuUserProfilwInterface {
                min-width: 90%;
            }
        }

        @media (min-width: 768px) {
            #DuUserProfilwInterface {
                min-width: 85%;
            }
        }

        @media (min-width: 992px) {
            #DuUserProfilwInterface {
                min-width: 80%;
            }
        }

        @media (min-width: 1200px) {
            #DuUserProfilwInterface {
                min-width: 75% ;
            }
        }

        /*Profile image*/
        .du-profile{
            position: relative;
        }

        .du-profile-image{
            max-width: 200px;
            border: 5px solid #fff;
            border-radius: 5px;
        }

        .du-cover-image{
            width: 100% !important;
            height: 250px !important;
            border: 4px solid #fff;

        }

        .du-profile-info{
            width: 75%;
            position: absolute;
            top: 3rem;
            left: 14rem;
        }

        .user-profile-intro{
            position: relative;
        }
        .user-info{
            position: absolute;
            top: 160px;
            left: 8%;
        }

        #user-info{
            position: absolute;
        }
        .du-profile-userIfo {
            position: relative;
        }

        .heroCitizen {
            width: 75px;
            margin: 0 10px 5px 10px;
        }

        #DuUserProfilwInterface {
            top: 8rem;
            position: absolute;
        }

    </style>

</head>
<?php $this->load->view('dubarah4/header'); ?>
<body>
    <!-- profile -->
    <div class="du-profile-userIfo">
        <!-- Profile Cover  -->
         
    <!-- Cover Photo -->
    <img src="<?php echo base_url() ?>asset/imgs/cover.png" class="du-cover-image">
        
        <!-- user information and profile picture -->
        <div class="container">
            <div class="row" id="DuUserProfilwInterface">
                <div class="col-lg-3">
                    <img class="du-profile-image" src="<?php echo base_url() ?>asset/imgs/dubarjiicon.jpg" width="200">
                </div>
                <div class="col-lg-9" style=" top : 2rem">
                    <h3>Ahmad Edilbi <i class="fa fa-check-circle red-text" aria-hidden="true"></i><img class="heroCitizen" src="<?php echo base_url() ?>asset/imgs/flag_citizen.svg"><span class="text-muted">Since Sep 2017</span></h3>
                    <div class="row mar-top ">
                        <div class="col-lg-10">
                            <h5>Founder Of Dubarah</h5>
                        </div>
                        <div class="col-lg-2">
                            <h4><a class="float-right"><i class="fa fa-cog" aria-hidden="true"></i> Edit</a></h4>
                        </div>
                    </div>
                    <div class="row mar-top ">
                        <div class="col-lg-3">
                            <h4 class="text-muted"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i> 5,256,331 </h4>
                        </div>
                        <div class="col-lg-3">
                            <h4 class="text-muted"><i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i> 5,256,331 </h4>
                        </div>
                        <div class="col-lg-6">
                            <h5><a class="float-right">5,256,331 Followers <button type="button" class="btn btn-dark">Follow</button></a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container" style="margin-top: 8rem">

        <div class="row">
            <div class="col-lg-8">
                <h2 class="user-name-about"><i class="fa fa-user-o" aria-hidden="true"></i> About Ahmad <span class="flag flag-can flag-1x mar-right"></span><span class="user-country">Toronto, Canada</span></h2>
                <p>A social entrepreneur, Ashoka Fellow and the founder of Dubarah, a global network that bridges dddd refugees’ problems with solu-tions. In 2012, Edilbi created a new model of volunteering that en-courages refugees to help each other. In 3 years, this model helped more than.</p>
                <div class="divider"></div>
                <h2 class="user-name-about mar-top"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Achievments</h2>

                <div class="jumbotron mar-top">
                    <!-- Edit Dropdown -->
                    <div class="dropdown">
                        <button type="button" class="close mar-left dropdown-toggle hide-after-icon" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Edit this entry</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Make it Primery achievment</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Boost and get more followers</a>
                        </div>
                    </div>
                    <a type="button" class="close mar-right acc" data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" aria-expanded="false" aria-controls="exampleAccordion2"><i class="fa fa-window-minimize fa-lg" aria-hidden="true"></i></a>
                    <div class="media">
                        <img class="align-self-center mr-3 user-main-achivmnet-logo" src="imgs/dubarjiicon.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h4 class="mt-0"><b>Dubarah</b></h4>
                            Feb 11, 2013
                        </div>
                    </div>
                    <h4 class="mar-top"><b>Achievement Type :</b>  Launching a Business </h4>
                    <h4 class="mar-top"><span class="flag flag-can flag-2x mar-right"></span><span>Toronto, Canada</span></h4>
                    <div id="exampleAccordion2" class="collapse show" role="tabpanel">
                        <p>Dubarah is a global network that bridges Syrian refugees’ prob-lems with solutions, operates in 15 countries with over than 180K volunteers working to support refugees at any necessity and level. As many Syrians were forced to leave Syria and take decision of asylum and immigration in countries they have never visited, it was a must to have a network which addresses their needs and provide them with help & support in those countries</p>
                        <div class="row">
                            <div class="col-lg-3">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                            </div>
                            <div class="col-lg-3">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                            </div>
                            <div class="col-lg-3">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                            </div>
                            <div class="col-lg-3">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                            </div>
                        </div>

                        <h4 class="mar-top"><b>Website : </b> www.website.com </h4>
                        <h4 class="mar-top"><b>Facebook : </b>www.facebook.com/dubarah </h4>
                        <h4 class="mar-top"><b>Twitter : </b> @Twitter </h4>
                    </div>

                </div>

                <div class="jumbotron" style="padding: 1rem 2rem 2rem 2rem;">
                    <div class="row mar-top" style="margin-top: 40px">
                        <div class="col-lg-8">
                            <h4>
                                <b class="mar-right">Do you like this?</b>
                                <span class="text-muted"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i> 1,874 </span>
                                <span class="text-muted"><i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i> 1,874 </span>
                            </h4>

                        </div>
                        <div class="col-lg-4 row text-right">
                            <div class="col-lg-6">
                                <button type="button" class="btn btn-dark btn-block">Close</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="button" class="btn btn-light btn-block">Follow</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Other Achivment -->

                <div class="jumbotron mar-top">
                    <!-- Edit Dropdown -->
                    <div class="dropdown">
                        <button type="button" class="close mar-left dropdown-toggle hide-after-icon" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Edit this entry</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Make it Primery achievment</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Boost and get more followers</a>
                        </div>
                    </div>
                    <a type="button" class="close mar-right acc" data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion2" aria-expanded="false" aria-controls="exampleAccordion2"><i class="fa fa-window-minimize fa-lg" aria-hidden="true"></i></a>
                    <div class="media">
                        <img class="align-self-center mr-3 user-main-achivmnet-logo" src="imgs/dubarjiicon.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h4 class="mt-0"><b>Dubarah</b></h4>
                            Feb 11, 2013
                        </div>
                    </div>
                    <h4 class="mar-top"><b>Achievement Type :</b>  Launching a Business </h4>
                    <h4 class="mar-top"><span class="flag flag-can flag-2x mar-right"></span><span>Toronto, Canada</span></h4>
                    <div class="text-right">
                        <button type="button" class="btn btn-light">More</button>
                    </div>
                    <div id="exampleAccordion2" class="collapse" role="tabpanel">
                        <p>Dubarah is a global network that bridges Syrian refugees’ prob-lems with solutions, operates in 15 countries with over than 180K volunteers working to support refugees at any necessity and level. As many Syrians were forced to leave Syria and take decision of asylum and immigration in countries they have never visited, it was a must to have a network which addresses their needs and provide them with help & support in those countries</p>
                        <div class="row">
                            <div class="col-lg-3">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                            </div>
                            <div class="col-lg-3">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                            </div>
                            <div class="col-lg-3">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                            </div>
                            <div class="col-lg-3">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                                <img class="achivment-imgs-userprofile" src="imgs/demo-img.png">
                            </div>
                        </div>

                        <h4 class="mar-top"><b>Website : </b> www.website.com </h4>
                        <h4 class="mar-top"><b>Facebook : </b>www.facebook.com/dubarah </h4>
                        <h4 class="mar-top"><b>Twitter : </b> @Twitter </h4>
                    </div>

                </div>

            </div>
            <!-- Right Side -->
            <div class="col-lg-4">
                <h4><b>My Business</b></h4>
                <div class="media mar-top">
                    <img class="align-self-center mr-3 user-side-achivmnet-logo" src="imgs/dubarjiicon.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h4 class="mt-0"><b>Dubarah</b></h4>
                        Feb 11, 2013
                    </div>
                </div>
                <div class="media mar-top">
                    <img class="align-self-center mr-3 user-side-achivmnet-logo" src="imgs/dubarjiicon.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <h4 class="mt-0"><b>Nocker</b></h4>
                        Feb 11, 2013
                    </div>
                </div>
                <div class="divider"></div>
                <h4 class="mar-top"><b>Profile View</b></h4>
                <p class="mar-left">78 Per day</p>
                <p class="mar-left">10,240 total profile views</p>
                <div class="divider"></div>
                <h4 class="mar-top"><b>Skills (6)</b></h4>
                <div class="user-skill">Graphic Design</div>
                <div class="user-skill">IOS</div>
                <div class="user-skill">Android</div>
                <div class="user-skill">Web Developer</div>
                <div class="user-skill">UX</div>
                <div class="user-skill">Sysadmin Linux</div>
                <div class="divider"></div>
                <h4 class="mar-top"><b>Recomanded for you</b></h4>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <img class="card-img-top" src="imgs/leadership/majd.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Ahmad Edilbi <i class="fa fa-check-circle red-text" aria-hidden="true"></i></h4>
                                <h6 class="card-subtitle mb-2 text-muted">Dubarah Founder </h6>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <div class="media">
                                    <span class="flag flag-can flag-1x mar-right"></span>
                                    <div class="media-body">
                                        <p class="text-muted small">Toronto, Canada</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row mar-top">
                                    <div class="col">
                                        <p class="text-muted">5,256,331 followers</p>
                                    </div>
                                    <div class="col text-right">
                                        <a href="#" class="btn btn-sm btn-outline-danger">Unfollow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <img class="card-img-top" src="imgs/leadership/majd.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Ahmad Edilbi <i class="fa fa-check-circle red-text" aria-hidden="true"></i></h4>
                                <h6 class="card-subtitle mb-2 text-muted">Dubarah Founder </h6>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <div class="media">
                                    <span class="flag flag-can flag-1x mar-right"></span>
                                    <div class="media-body">
                                        <p class="text-muted small">Toronto, Canada</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row mar-top">
                                    <div class="col">
                                        <p class="text-muted">5,256,331 followers</p>
                                    </div>
                                    <div class="col text-right">
                                        <a href="#" class="btn btn-sm btn-outline-danger">Unfollow</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    
 <?php $this->load->view('dubarah4/footer'); ?>

		<!-- Optional JavaScript == jQuery first, then Popper.js, then Bootstrap JS == -->
    <!-- <script src="<?php echo base_url()?>asset/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="<?php echo base_url()?>asset/js/popper.min.js" ></script>
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url()?>asset/js/additional.js"></script>
    <script src="<?php echo base_url() ?>ass/js/sweetalert.min.js"></script>