<?php 
// echo "<pre>";
// print_r($busin_imgs);
// exit;
$this->load->view('/business/common/header'); ?>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/gallery-grid.css">
       <style>
        body, html {
            height: 100%;
            margin: 0;
            background: #f7f7f7 !important;
        }

        .duOrange {  background-color : #e85100 !important ;  }
        .duOrangeText {  color : #e85100 !important ;  }
        .duGreen {  background-color: #45FF00 !important;  }
        .duGreenText {  color: #45FF00 !important;  }
        .duBlack {  background-color : #3e3e3e !important ; }
        .duBlackText {  color : #3e3e3e !important ; }

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

        .intro{
            min-width: 100%;
            height: auto ;
            padding: 25px 0 0 0;
        }


        /* Create a custom radio button Like DU Design */
        /* Customize the label (the container) */
        .checkmarkContainer {
            display: block;
            position: relative;
            padding-left: 25px;
            margin-bottom: 5px;
            cursor: pointer;
            font-size: 16px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default radio button */
        .checkmarkContainer input {
            position: absolute;
            opacity: 0;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 12px;
            width: 12px;
            /* background-color: #3e3e3e; */
            border-radius: 50%;
            margin: 6px;
            border: 2px solid #3e3e3e;

        }

        /* On mouse-over, add a grey background color
        .container:hover input ~ .checkmark {
            background-color: #ccc;
        }
        */

        /* When the radio button is checked, add a blue background */
        .container input:checked ~ .checkmark {
            background-color: #3e3e3e;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .container input:checked ~ .checkmark:after {
            display: block;
        }

        .filterList {
            list-style: none;
            padding: 0;
        }

        .filterList li {
            margin: 5px 0;
            font-size: 14px;
        }

        .filterList li a{
            color : #3e3e3e ;
            cursor: pointer;
            text-decoration: none;
        }

        .filterList li a:focus{
            font-weight: bold;

        }

        .dotBefore::before {
            content: "\A";
            display: inline-block;
            width: 4px;
            height: 4px;
            border-radius: 50px;
            background-color: #868A96;
            margin: 3px;
        }

        .bussinessUsOp > li {
            display: inline-block;
            margin: 5px 0 0 6px;
            cursor: pointer;
        }

        .bussinessUsOp > li::before {
            content: "\A";
            display: inline-block;
            width: 2px;
            height: 15px;
            background-color: #868A96;
            margin: 0 12px -2px 0px;
        }

        /* Hide before design from first element in ul */
        .bussinessUsOp > li:first-child:before {
            display: none;
        }

        /* social sharing */

        .businessSocialIcon {
            display: block;
            padding:0;
        }

        .businessSocialIcon > li {
            display: inline-block;
            margin: 5px 0;
            cursor: pointer;
            border-radius: 50%;
            border: 2px solid;
            width: 32px;
            height: 32px;
            padding: 2px;
            text-align: center;
            color: #616161;
        }

        /* social sharing */

        .businessPics {
            display: block;
            padding:0;
        }

        .businessPics > li {
            display: inline-block;
            max-width: 15%;
            margin: 10px 0.5%;
        }

        .realPrice {color : #45FF00 !important ;}

    </style>
<?php $this->load->view('/business/common/navbar'); ?>
    <div class="intro duOrange">
        <div style="text-align: center">
            <div style="margin: 2rem 0">
                <img src="<?php echo base_url() ?>asset/imgs/DubarahLogoWhite.svg" class="img-fluid" style="max-width: 12rem ; padding: 4px"><span class="text-white font-weight-bold" style="font-size: 2rem; vertical-align: bottom;"> Business </span>
            </div>
            <div class="card" style="display: inline-block" id="searchBar">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group row" style="margin-bottom: 0">
                                <label for="colFormLabel" class="col-sm-2 col-form-label font-weight-bold duBlackText">Find</label>
                                <div class="col-sm-10">
                                    <input class="form-control" placeholder="Graphic Designer , Web Designer , IT , Doctor" style="border: none">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5" style="border-left: 2px solid #3e3e3e;">
                            <div class="form-group row" style="margin-bottom: 0">
                                <label for="colFormLabel" class="col-sm-2 col-form-label font-weight-bold duBlackText">Near</label>
                                <div class="col-sm-10">
                                    <input class="form-control" placeholder="Toronto , Damascus , ON" style="border: none">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" class="btn btn-light duOrangeText bg-white font-weight-bold" style="border : 1px solid #e85100">Go and Find</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mar-top ">
                    <div class="col-lg-9">
                        <p class="text-left text-white">Browsing<span class="font-weight-bold"> Toronto, ON, Canada </span> Businesses</p>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-right text-white">Showing 1-10 of 11160</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid" style="padding: 2rem 0 4rem 0;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="font-weight-bold"> <?php echo $busin_data->name ?><span style="margin: 8px 10px;"> <i class="fa fa-check-circle red-text" aria-hidden="true"></i> </span> <span style="font-size: 16px; font-weight: normal !important;">verified</span></h3>
                    <div style="display: block ; margin: 20px 0;">
                        <i class="fa fa-star rated" aria-hidden="true"></i>
                        <i class="fa fa-star rated" aria-hidden="true"></i>
                        <i class="fa fa-star rated" aria-hidden="true"></i>
                        <i class="fa fa-star unrated" aria-hidden="true"></i>
                        <i class="fa fa-star unrated" aria-hidden="true"></i>
                        <span class="grey-text small">10 reviews</span>
                    </div>
                    <div style="display: block ;">
                    	<?php if ($busin_data->price == 1) {
							$price = '$';	
						} elseif($busin_data->price == 2) {
							$price = '$$';	
						}elseif($busin_data->price == 3) {
							$price = '$$$';	
						}elseif($busin_data->price == 4) {
							$price = '$$$$';	
						}elseif($busin_data->price == 5) {
							$price = '$$$$$';	
						}
						 ?>
                       <span><?php echo $price ?></span> <span class="dotBefore"><span>
                       	<?php  echo $busin_catgo;?>
                           
                    </span>  <!-- <a href="#" class="grey-text" style="text-decoration: underline">Edit category</a> -->
                    </div>

                </div>
                <div class="col">
                    <ul class="bussinessUsOp float-right">
                        <li>+Add Photo</li> <!-- links or what else :# -->
                        <li>Add Bookmark</li>
                        <li>Share</li>
                        <li>Report</li>
                    </ul>
                    <button type="button" class="btn btn-light duOrange text-white float-right no-border" data-toggle="modal" data-target="#reviewModal">Write Review</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="upBusinnessDetails" style="position: relative">
            <div class="row" style="max-height: 24rem !important; overflow: hidden; position: absolute ; top: -5rem;">
            <div class="col-lg-5">
                <div class="card" style="max-height: 24rem;">
                    <div class="card-body" style="padding: 1rem !important;">
                        <div class="media">
                            <img class="d-flex mr-3" src="<?php echo base_url().$busin_data->logo?>" width="100" height="100">
                            <div class="media-body">
                                <span class="flag flag-<?php echo strtolower($countries->country_arabic_name) ?> flag-1x mar-right"></span><span class="user-country"><?php echo $countries->country_english_name .','.$countries->city_english_name?></span>
                                <button type="button" class="btn btn-outline-light duGreen mar-top">Open Now</button>
                                <p class="small">Today 10:00 am - 6:00 pm</p>
                            </div>
                        </div>
                        <h5 class="font-weight-bold mar-top">705-890 Mt Pleasant Rd, Toronto,ON M4P 2L4</h5>
                        <h6><?php echo $busin_data->webaddress ?></h6>
                        <h6><?php echo $busin_data->work_email ?></h6>
                        <h6 style="margin-top: 20px">Cell. <?php echo $busin_data->mobile_phone ?>  </h6>
                        <h6>Work.  <?php echo $busin_data->work_phone ?> </h6>
                        <h6>Fax. <?php echo $busin_data->work_phone ?>  </h6>
                        <ul class="businessSocialIcon">
                            <li><a href="<?php echo $busin_data->facebook ?> "><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $busin_data->facebook ?> "><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $busin_data->facebook ?> "><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $busin_data->facebook ?> "><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $busin_data->facebook ?> "><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $busin_data->facebook ?> "><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
            	<?php $defult = '';
            	
            	
            	?>
            <div class="gallery-container">
              	 <div class="tz-gallery" style="padding: 0;">
              	 	    <div class="row">
                         <div class="col-lg-8">
                    	 <a class="lightbox" href="<?php echo isset($busin_imgs[0])? base_url().$busin_imgs[0]->img : 'http://localhost/achievement/uploads/achievements/pictures/4f57dd32f401a2f5186eb43f4da3761e.jpg' ?>">
                    <img style="margin-bottom: 0px;margin-top: 5px;"  class="achivment-imgs-userprofile" src="<?php echo isset($busin_imgs[0])? base_url().$busin_imgs[0]->img : 'http://localhost/achievement/uploads/achievements/pictures/4f57dd32f401a2f5186eb43f4da3761e.jpg' ?>">
                     </a>
                    </div>
                     <div class="col-lg-4">
                    <div class="row">
                     <div class="col-lg-12" style="padding-left: 0px;">
                     	
                    	 <a class="lightbox" href="<?php echo isset($busin_imgs[1])? base_url().$busin_imgs[1]->img : 'http://localhost/achievement/uploads/achievements/pictures/4f57dd32f401a2f5186eb43f4da3761e.jpg' ?>">
                    <img style="margin-bottom: 0px;margin-top: 5px;" class="achivment-imgs-userprofile" src="<?php echo isset($busin_imgs[1])? base_url().$busin_imgs[2]->img : 'http://localhost/achievement/uploads/achievements/pictures/4f57dd32f401a2f5186eb43f4da3761e.jpg' ?>">
                  </a>
                  </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12" style="padding-left: 0px;">
                    	 <a class="lightbox" href="<?php echo isset($busin_imgs[2])? base_url().$busin_imgs[2]->img : 'http://localhost/achievement/uploads/achievements/pictures/4f57dd32f401a2f5186eb43f4da3761e.jpg' ?>">
                    <img style="margin-bottom: 0px;"  class="achivment-imgs-userprofile" src="<?php echo isset($busin_imgs[2])? base_url().$busin_imgs[2]->img : 'http://localhost/achievement/uploads/achievements/pictures/4f57dd32f401a2f5186eb43f4da3761e.jpg' ?>">
                  </a>
                    </div>
                    
                    
                    </div>
                    </div>
                    </div>
                     <div class="row">
                              
                                    <div class="col-lg-4">
                    	 <a class="lightbox" href="<?php echo isset($busin_imgs[3])? base_url().$busin_imgs[3]->img : 'http://localhost/achievement/uploads/achievements/pictures/4f57dd32f401a2f5186eb43f4da3761e.jpg' ?>">
                    <img class="achivment-imgs-userprofile" src="<?php echo isset($busin_imgs[3])? base_url().$busin_imgs[3]->img : 'http://localhost/achievement/uploads/achievements/pictures/4f57dd32f401a2f5186eb43f4da3761e.jpg' ?>">
                  </a>
                    </div>
                                    <div class="col-lg-4">
                    	 <a class="lightbox" href="<?php echo isset($busin_imgs[4])? base_url().$busin_imgs[4]->img : 'http://localhost/achievement/uploads/achievements/pictures/4f57dd32f401a2f5186eb43f4da3761e.jpg' ?>">
                    <img class="achivment-imgs-userprofile" src="<?php echo isset($busin_imgs[4])? base_url().$busin_imgs[4]->img : 'http://localhost/achievement/uploads/achievements/pictures/4f57dd32f401a2f5186eb43f4da3761e.jpg' ?>">
                  </a>
                    </div>
                                    <div class="col-lg-4" style="padding-left: 0px;">
                    	 <a class="lightbox" href="<?php echo isset($busin_imgs[5])? base_url().$busin_imgs[5]->img : 'http://localhost/achievement/uploads/achievements/pictures/4f57dd32f401a2f5186eb43f4da3761e.jpg' ?>">
                    <img class="achivment-imgs-userprofile" src="<?php echo isset($busin_imgs[5])? base_url().$busin_imgs[5]->img : 'http://localhost/achievement/uploads/achievements/pictures/4f57dd32f401a2f5186eb43f4da3761e.jpg' ?>">
                  </a>
                    </div>
                  
                                
                                </div>
                
                <div class="divider"></div>
              </div>
            </div>
            </div>
            <!-- <div class="col-lg-7">
                <img class="img-fluid" src="http://via.placeholder.com/700x350">
                <ul class="businessPics">
                    <li><img class="img-fluid" src="http://via.placeholder.com/100x100"></li>
                    <li><img class="img-fluid" src="http://via.placeholder.com/100x100"></li>
                    <li><img class="img-fluid" src="http://via.placeholder.com/100x100"></li>
                    <li><img class="img-fluid" src="http://via.placeholder.com/100x100"></li>
                    <li><img class="img-fluid" src="http://via.placeholder.com/100x100"></li>
                    <li><img class="img-fluid" src="http://via.placeholder.com/100x100"></li>
                </ul>
            </div> -->
        </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin-top: 24rem">
            <div class="col-lg-8">
                <h3 class="font-weight-bold">About</h3>
                <p><?php echo $busin_data->about ?></p>
                <div class="card">
                    <div class="card-body grey-lighten-3">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4 class="duOrangeText" style="margin-top: 5px">Get a Quick Quote Now!</h4>
                            </div>
                            <div class="col-lg-3">
                                <button type="button" class="btn btn-light duOrange text-white no-border font-weight-bold">Get Quote</button>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="font-weight-bold" style="margin: 1.5rem 0">FAQ</h3>
                <div class="faq1">
                    <!-- Question Section -->
                    <div class="row">
                        <div class="col-lg-2">
                            <h6 class="font-weight-bold">Question :</h6>
                        </div>
                        <div class="col-lg-10">
                            <p>Ex. What the special about your business</p>
                        </div>
                    </div>
                    <!-- answer Section -->
                    <div class="row">
                        <div class="col-lg-2">
                            <h6 class="font-weight-bold duGreenText">Answer :</h6>
                        </div>
                        <div class="col-lg-10">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="divider" style="margin: 1.5rem 0;"></div>
                <h3 class="font-weight-bold" style="margin: 1.5rem 0">Reviews</h3>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="media">
                            <img class="d-flex mr-3" src="imgs/dubarah-footer-img.jpg" width="50" height="50">
                            <div class="media-body">
                                <h5 class="mt-0">Adnan Diab</h5>
                                <p class="text-muted small">Canada,Toronto</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div style="display: block">
                            <i class="fa fa-star rated" aria-hidden="true"></i>
                            <i class="fa fa-star rated" aria-hidden="true"></i>
                            <i class="fa fa-star rated" aria-hidden="true"></i>
                            <i class="fa fa-star unrated" aria-hidden="true"></i>
                            <i class="fa fa-star unrated" aria-hidden="true"></i>
                            <span class="grey-text small">9/14/2017</span>
                            <a href="#" class="grey-text" style="text-decoration: underline ; margin: 0 1rem">Report Review</a>
                            <p class="text-muted small" style="margin-top: 1rem">Went here a few nights ago with family and was treated to a truly delicious dinner. We started off with the Himalayan Momo - really tasty dumplings especially when dipped in the sauce along with Samosas and the Mismas Pakauda - a spinach dish with onion and spices. All served</p>
                        </div>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="media">
                            <img class="d-flex mr-3" src="imgs/dubarah-footer-img.jpg" width="50" height="50">
                            <div class="media-body">
                                <h5 class="mt-0">Adnan Diab</h5>
                                <p class="text-muted small">Canada,Toronto</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div style="display: block">
                            <i class="fa fa-star rated" aria-hidden="true"></i>
                            <i class="fa fa-star rated" aria-hidden="true"></i>
                            <i class="fa fa-star rated" aria-hidden="true"></i>
                            <i class="fa fa-star unrated" aria-hidden="true"></i>
                            <i class="fa fa-star unrated" aria-hidden="true"></i>
                            <span class="grey-text small">9/14/2017</span>
                            <a href="#" class="grey-text" style="text-decoration: underline ; margin: 0 1rem">Report Review</a>
                            <p class="text-muted small" style="margin-top: 1rem">Went here a few nights ago with family and was treated to a truly delicious dinner. We started off with the Himalayan Momo - really tasty dumplings especially when dipped in the sauce along with Samosas and the Mismas Pakauda - a spinach dish with onion and spices. All served</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h3 class="font-weight-bold">Hours</h3>
                <div class="card">
                    <div class="card-body grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">mon</span></p>
                                <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">tue</span></p>
                                <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">wed</span></p>
                                <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">thu</span></p>
                                <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">fri</span></p>
                                <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">sat</span></p>
                                <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">sun</span></p>
                            </div>
                            <div class="col-lg-8">
                                <p class="text-uppercase" style="margin: 0">closed</p>
                                <p class="text-uppercase" style="margin: 0">5:00 PM - 10:00 PM</p>
                                <p class="text-uppercase" style="margin: 0">5:00 PM - 10:00 PM</p>
                                <p class="text-uppercase" style="margin: 0">5:00 PM - 10:00 PM</p>
                                <p class="text-uppercase" style="margin: 0">5:00 PM - 10:00 PM</p>
                                <p class="text-uppercase" style="margin: 0">5:00 PM - 10:00 PM</p>
                                <p class="text-uppercase" style="margin: 0">5:00 PM - 10:00 PM <span class="red-text">CLOSED NOW</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="font-weight-bold" style="margin: 1.5rem 0">BUSINESS FEATURES</h3>
                <div class="card">
                    <div class="card-body grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <p class="font-weight-bold no-mar" style="display: inline-block ; margin-right: 1rem !important;">Price</p>
                        <i class="fa fa-usd realPrice" aria-hidden="true"></i>
                        <i class="fa fa-usd realPrice" aria-hidden="true"></i>
                        <i class="fa fa-usd grey-lighten-2-text" aria-hidden="true"></i>
                        <i class="fa fa-usd grey-lighten-2-text" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="card " style="margin-top: 5px;">
                    <div class="card-body grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <p class="font-weight-bold no-mar" style="display: inline-block ;">General Features</p>
                        <div class="row">
                            <div class="col">
                                <p class="no-mar small">Wheelchair Accessible</p>
                                <p class="no-mar small">Kids Friendly</p>
                            </div>
                            <div class="col">
                                <p class="no-mar small">Dogs Allowed</p>
                                <p class="no-mar small">Waiter Service</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card " style="margin-top: 5px;">
                    <div class="card-body grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <p class="font-weight-bold no-mar" style="display: inline-block ; margin-right: 1rem !important;">Parking</p>
                        <p class="no-mar" style="display: inline-block ;">Street</p>
                    </div>
                </div>

                <div class="card" style="margin-top: 5px;">
                    <div class="card-body grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <p class="font-weight-bold no-mar" style="display: inline-block ; margin-right: 1rem !important;">Smoking</p>
                        <p class="no-mar" style="display: inline-block ;">Outdoor Area / Patio Only</p>
                    </div>
                </div>

                <div class="card" style="margin-top: 5px;">
                    <div class="card-body grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <p class="font-weight-bold no-mar" style="display: inline-block ; margin-right: 1rem !important;">Alcohol</p>
                        <p class="no-mar" style="display: inline-block ;">Full Bar</p>
                    </div>
                </div>

                <div class="card " style="margin-top: 5px;">
                    <div class="card-body grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <p class="font-weight-bold no-mar" style="display: inline-block ; margin-right: 1rem !important;">Music</p>
                        <p class="no-mar" style="display: inline-block ;">Juke Box</p>
                    </div>
                </div>


                <div class="media" style="margin-top: 2rem">
                    <img class="mr-3" src="imgs/dubarjiicon.jpg" width="75">
                    <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Dubarah INC</h5>
                        <p class="small text-muted">Add discreption, cover photo, and gallery must always be perfect and up to date</p>
                        <p class="small no-mar d-inline-block">(415) 715-9767</p>
                        <button type="button" class="btn btn-outline-dark small d-inline-block">Get Quote</button>
                    </div>
                </div>

                <div class="media" style="margin-top: 2rem">
                    <img class="mr-3" src="imgs/dubarjiicon.jpg" width="75">
                    <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Dubarah INC</h5>
                        <p class="small text-muted">Add discreption, cover photo, and gallery must always be perfect and up to date</p>
                        <p class="small no-mar d-inline-block">(415) 715-9767</p>
                        <button type="button" class="btn btn-outline-dark small d-inline-block">Get Quote</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Structure HERE -->
    <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header grey-lighten-2" style="padding: 0 2rem 0.5rem 2rem;">
                    <div class="media" style="margin-top: 2rem">
                        <img class="mr-3" src="imgs/dubarah-footer-img.jpg" width="75">
                        <div class="media-body" style="padding: 1rem 0;">
                            <h5 class="mt-0 font-weight-bold">Dubarah INC.</h5>
                            <p class="small">705-890 Mt Pleasant Rd, Toronto,ON M4P 2L4</p>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 1.5rem 2rem 1.5rem 2rem;">
                    <p class="font-weight-bold">Leave a Review</p>
                    <div style="display: block">
                        <i class="fa fa-star rated" aria-hidden="true"></i>
                        <i class="fa fa-star rated" aria-hidden="true"></i>
                        <i class="fa fa-star rated" aria-hidden="true"></i>
                        <i class="fa fa-star unrated" aria-hidden="true"></i>
                        <i class="fa fa-star unrated" aria-hidden="true"></i>
                        <span class="grey-text small">Select your Rating</span>
                    </div>
                    <input class="form-control col-lg-9" type="text" placeholder="Title" style="margin: 1rem 0;">
                    <textarea class="form-control" id="" rows="6" placeholder="Start your review .."></textarea>
                    <i class="fa fa-plus-square fa-2x grey-text mar-top"  aria-hidden="true"></i>
                    <span class="grey-text mar-left">Upload images (Show others what you got)</span>
                </div>
                <div class="modal-footer" style="padding: 1rem 2rem;">
                    <button type="button" class="btn btn-primary duGreen no-border">Submit</button>
                </div>
            </div>
        </div>
    </div>
  <?php $this->load->view('business/common/navfooter'); ?>
<?php $this->load->view('business/common/footer'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script type="text/javascript">
	
	baguetteBox.run('.tz-gallery');
</script>