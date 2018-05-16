<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- FontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    <!-- Additional CSS -->
    <!-- Flag Icon CSS -->
    <link href="css/flag-css.min.css" rel="stylesheet">
    <!-- Bootstrap Social BUTTON CSS -->
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <!-- Google WEBONT openSans Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Additional CSS For Design-->
    <link rel="stylesheet" href="css/additional.css">
</head>
<body class="grey-lighten-3">
    <!-- Add Dubarah MODAL Structure -->
    <div class="modal fade" id="addDubarah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">>
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
                        <a href="#" class="list-group-item list-group-item-action no-border">
                            <div class="media">
                                <img class="d-flex mr-3 add-dubarah-img" src="imgs/add-job.png">
                                <div class="media-body">
                                    <h5 class="mt-0 font-weight-bold">Post a Job</h5>
                                    <p class="text-muted">
                                        Offer a job for all Syrians worldwideFull-Time, Part-Time, internship or volunteering
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action no-border">
                            <div class="media">
                                <img class="d-flex mr-3 add-dubarah-img" src="imgs/add-hero.png">
                                <div class="media-body">
                                    <h5 class="mt-0 font-weight-bold">List Achievement</h5>
                                    <p class="text-muted">
                                        it’s your chance now to show the world what you didfor the comninity you are based on.
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action no-border">
                            <div class="media">
                                <img class="d-flex mr-3 add-dubarah-img" src="imgs/add-buisness.png">
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
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark grey-darken-4">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="imgs/dubarah_logo.png" width="200" height="50" alt="">
            </a>
            <!-- Icon For Mobiles -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hero Citizen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <button type="button" class="btn btn-outline mar-right red text-white btn-block-sm add-dubarah-btn" data-toggle="modal" data-target="#addDubarah"> <i class="fa fa-plus-square" aria-hidden="true"></i> Add Dubarah</button>
                <button type="button" class="btn btn-outline-secondary text-white btn-block-sm mar-right" data-toggle="modal" data-target="#logIn">Login</button>
                <div class="dropdown">
                    <button class="btn btn-icon dropdown-toggle hide-after-icon" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-language" aria-hidden="true"></i>
                    </button>
                    <div class="dropdown-menu col">
                        <h6 class="dropdown-header col">Languages</h6>
                        <a class="dropdown-item" href="#"><span class="flag flag-syr flag-1x mar-right"></span> Arabic</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><span class="flag flag-gbr flag-1x mar-right"></span> English</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Nav After Signin [user navbar] -->
    <nav class="navbar navbar-expand-lg navbar-dark grey-darken-4">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="imgs/dubarah_logo.png" width="200" height="50" alt="">
            </a>
            <!-- Icon For Mobiles -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hero Citizen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Business</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <!-- Messages Drop -->
                <div class="dropdown mar-right">
                    <button class="btn btn-icon dropdown-toggle hide-after-icon no-border" type="button" id="Messages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i><span class="badge badge-pill badge-danger">3</span></button>
                    <div class="dropdown-menu larg-drop" aria-labelledby="Messages">
                        <h6 class="dropdown-header">Messages</h6>

                        <div class="divider"></div>

                        <div class="media">
                            <img class="d-flex mr-3 mar-left" src="imgs/dubarah-footer-img.jpg" width="50" height="50" style="border-radius: 50%; ">
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
                            <img class="d-flex mr-3 mar-left" src="imgs/leadership/majd.png" width="50" height="50" style="border-radius: 50% ; ">
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
                    <button class="btn btn-icon dropdown-toggle hide-after-icon no-border" type="button" id="Notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell fa-lg" aria-hidden="true"></i><span class="badge badge-pill badge-danger">12</span></button>
                    <div class="dropdown-menu larg-drop" aria-labelledby="Messages">
                        <h6 class="dropdown-header">Messages</h6>

                        <div class="divider"></div>

                        <div class="media">
                            <img class="d-flex mr-3 mar-left" src="imgs/dubarah-footer-img.jpg" width="50" height="50" style="border-radius: 50%; ">
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
                            <img class="d-flex mr-3 mar-left" src="imgs/leadership/majd.png" width="50" height="50" style="border-radius: 50% ; ">
                            <div class="media-body">
                                <h5 class="mt-0">Majd </h5>
                                <p> Hi Ahmad How Are You ? </p>
                                <p class="text-muted small">2 Hour Ago</p>
                            </div>
                        </div>

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
                    <button class="btn btn-icon dropdown-toggle hide-after-icon no-border" type="button" id="User" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle fa-lg" aria-hidden="true"></i></button>
                    <div class="dropdown-menu" aria-labelledby="User">
                        <a class="dropdown-item" href="#">Hi iam Adnan </a>
                    </div>
                </div>

                <button type="button" class="btn btn-outline mar-right red text-white btn-block-sm add-dubarah-btn" data-toggle="modal" data-target="#addDubarah"> <i class="fa fa-plus-square" aria-hidden="true"></i> Add Dubarah</button>
                <!-- Language Drop CANCELLED ==>> in Setting-->
            </div>
        </div>
    </nav>

    <img src="imgs/ach-intro.png" class="img-fluid intro-img">



    <footer class="page-footer grey-darken-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="media">
                        <img class="d-flex mr-3" src="imgs/dubarah-footer-img.jpg" width="75" height="75" style="border-radius: 5px ; ">
                        <div class="media-body">
                            <p>
                                Dubarah is a global network that bridges Syrian refugees’ problems with soluions, operates in 15 countries with over than 180K volunteers working to support refugees at any necessity and level.Dubarah™is Non-Profit Corporaion, incorporated under the"Canada NFP Corporaion Act. CN# 6-972045
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h3 class="white-text">Quick Links</h3>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><a class="grey-text text-lighten-3" href="#!">Terms Of Use</a></li>
                                <li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li>
                                <li><a class="grey-text text-lighten-3" href="#!">Media Kit</a></li>
                                <li><a class="grey-text text-lighten-3" href="#!">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h3 class="white-text">Social Media</h3>

                    <a class="btn btn-social-icon btn-facebook btn-socialMedia">
                        <span class="fa fa-facebook"></span>
                    </a>

                    <a class="btn btn-social-icon btn-twitter btn-socialMedia">
                        <span class="fa fa-twitter"></span>
                    </a>

                    <a class="btn btn-social-icon btn-linkedin btn-socialMedia">
                        <span class="fa fa-linkedin"></span>
                    </a>

                    <a class="btn btn-social-icon btn-google btn-socialMedia">
                        <span class="fa fa-google-plus"></span>
                    </a>

                </div>
            </div>
        </div>
        <div class="footer-copyright grey-darken-3">
            <div class="container">
                © All Rights Reserved | Dubarah™  <?php echo date('Y')?>
            </div>
        </div>
    </footer>

<!-- Optional JavaScript == jQuery first, then Popper.js, then Bootstrap JS == -->
<script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="js/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="js/additional.js"></script>

</body>
</html>