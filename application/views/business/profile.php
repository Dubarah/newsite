<?php $this->load->view('main/second/header'); ?>




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
        
       /* Rate*/
      
.rating {
  background: #fff;
}

input[type="radio"] {
  position: fixed;
  top: 0;
  right: 100%;
}

label {
     font-size: 1.1em;
  padding: 0.2em;
  
      padding-bottom: 0.1em;
    padding-top: 0.1em;
  margin: 0;
  float: left;
  cursor: pointer;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  -webkit-transition: 0.2s;
  transition: 0.2s;
      border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
}

input[type="radio"]:checked ~ input + label {
  background: none;
  color: #aaa;
}

input + label {
  background: #E85100;
  color: #ffffff;
  margin: 0 0 1em 0;
  margin-right: 2px;
}

input + label:first-of-type {
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
}

input:checked + label {
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
}

hr {
  clear: both;
  border: 0;
  border-top: 2px solid #999;
  margin: 2em 0;
}
/*upload */


.upload-button-wrapper{
  position:relative;
  overflow:hidden;
	vertical-align:middle;
  .upload-button{
    position:absolute;
    overflow:hidden;
    width:25px;
    outline:none;
  }
  .upload-label{
    position:relative;
    padding:10px;
    background-color:olive;
    color:#ffffff;
    border:2px solid darken(olive,4);
    border-radius:5px;
    cursor:pointer;
  }
  // focus/hover
  .upload-label:hover,
  .upload-button:focus + .upload-label{
    background-color: darken(olive,4);
    border-color: darken(olive,8);
  }
  .upload-label:active,
  .upload-button:active + .upload-label{
    background-color: darken(olive,8);
  }
  
}

input[type=file] { display:none }
input[type=radio] { display:none }

.upload-filename{
  color:darken(olive,8);
  vertical-align:middle;
}

    </style>
    
<?php //$this->load->view('/business/common/navbar'); ?>
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
                                    <input id="find_inp" value="<?php if( isset ($catg_search )  ) echo $catg_search ;?>" class="form-control" placeholder="Graphic Designer , Web Designer , IT , Doctor" style="border: none">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5" style="border-left: 2px solid #3e3e3e;">
                            <div class="form-group row" style="margin-bottom: 0">
                                <label for="colFormLabel" class="col-sm-2 col-form-label font-weight-bold duBlackText">Near</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="city_inp"  value="<?php if( isset ( $city_search[0]->name )  ) echo  $city_search[0]->name ;?>"
                                     placeholder="Toronto , Damascus , ON" style="border: none">
                                </div>
                            </div>
                       
                        <div id="city_res_all" class="col-md-12 text-left " style="    margin-left: 51px;">
                     <div class="list-group offset-md-0" id="city_res">
                    </div>
                </div>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" id="go_find" class="btn btn-light duOrangeText bg-white font-weight-bold" style="border : 1px solid #e85100">Go and Find</button>
                        </div>
                    </div>
                     <div id="results" >
               <div id="find_res" class="col-md-5 text-left   " >
                     <div class="list-group offset-md-1">
                        <?php //for ($i=0; $i < count($mainCats['MainCat']); $i++) {  $cat= $mainCats[$i] ;?>
                        <?php if(isset($mainCats)) {foreach ( $mainCats  as $cat) { ?>
                            <div  
                             	class="list-group-item list-group-item-action">
                                <strong> <i class="fa <?php echo $cat->icon ; ?>" aria-hidden="true"></i>
                                  <span class="cat_name_cont"  ><?php echo $cat->name ; ?></span></strong>
                            </div>
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
               
            </div>
                </div>
            </div>
            <div class="container">
                <div class="row mar-top ">
                   
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
                       <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?><?php echo $busin_rate >=2? 'asset/imgs/star.svg' : 'asset/imgs/nostae.svg' ?>" /></i>
                                      <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?><?php echo $busin_rate >=3? 'asset/imgs/star.svg' : 'asset/imgs/nostae.svg' ?>" /></i>
                                      <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?><?php echo $busin_rate >= 4? 'asset/imgs/star.svg' : 'asset/imgs/nostae.svg' ?>" /></i>
                                     <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?><?php echo $busin_rate == 5? 'asset/imgs/star.svg' : 'asset/imgs/nostae.svg' ?>" /></i>
                        <span class="grey-text small"><?php echo $rate_count ?> reviews</span>
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
                        <!-- <li>+Add Photo</li> --> <!-- links or what else :# -->
                        <!-- <li>Add Bookmark</li>
                        <li>Share</li> -->
                        <?php
                        	
                         if ($now_user_id == $busin_data->user_id): ?>
                             <li><a href="<?php echo base_url().'business-edit/'.$busi_id?>">Edit</a></li>
                        <?php endif ?>
                       
                    </ul> 
                    <button type="button" class="btn btn-light duOrange text-white float-right no-border" data-toggle="modal" data-target="#reviewModal">Write Review</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="upBusinnessDetails" style="position: relative">
            <div class="row" style="max-height: 26rem !important; overflow: hidden; position: absolute ; top: -5rem;">
            <div class="col-lg-5">
                <div class="card" >
                    <div class="card-body" style="padding: 1rem !important;">
                        <div class="media">
                            <img class="d-flex mr-3" src="<?php echo base_url().$busin_data->logo?>" width="100" height="100">
                            <div class="media-body">
                                <span class="flag flag-<?php echo strtolower($countries->country_arabic_name) ?> flag-1x mar-right"></span><span class="user-country">
                                	<?php echo $countries->country_english_name .','.$countries->city_english_name?></span>
                               
                                <button type="button" class="btn btn-outline-light <?php $date = date('D'); echo isset($busin_datetimes["$date"])? 'duGreen'  : 'duOrange' ;    ?> mar-top">
                                	<?php $date = date('D'); echo isset($busin_datetimes["$date"])? 'Open Now'  : 'Closed' ;    ?></button>
                             	
                             	
                                <p class="small"><?php $date = date('D'); echo isset($busin_datetimes["$date"])? $busin_datetimes["$date"]->timefrom.'-'.$busin_datetimes["$date"]->timeto  : 'Closed Now' ;    ?></p>
                         
                         
                           </div>
                        </div>
                        <h5 class="font-weight-bold mar-top"><?php echo $busin_data->address.' , '.$busin_data->province.' , '.$busin_data->address_office ?></h5>
                        <h6><?php echo $busin_data->webaddress ?></h6>
                        <h6><?php echo $busin_data->work_email ?></h6>
                        <h6 style="margin-top: 20px">Cell. <?php echo $busin_data->mobile_phone ?>  </h6>
                        <h6>Work.  <?php echo $busin_data->work_phone ?> </h6>
                        <h6>Fax. <?php echo $busin_data->work_phone ?>  </h6>
                        <ul class="businessSocialIcon">
                            <li><a href="<?php echo $busin_data->facebook ?> "><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $busin_data->twitter ?> "><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $busin_data->linkedin ?> "><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo $busin_data->pinterest ?> "><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                         

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
                          <?php 
                          
                          if($busin_data->call_action_btn == 1):
							  
							  $text = ' Make your reservation today!';
							  $butn = ' Contact us ';
							  
						  
						  elseif($busin_data->call_action_btn == 2):
							    $text = 'Book an Appointment today!';
							  $butn = 'Book Now  ';
							  
						    elseif($busin_data->call_action_btn == 3):
								
								    $text = 'Get a Quick Quote Now!';
							  $butn = 'Get Quote';
								
								  elseif($busin_data->call_action_btn == 4):
									  
								    $text = 'Sign up today! ';
							  $butn = 'Sign Up';
									    elseif($busin_data->call_action_btn == 5):
											  $text = ' Get to know more about us today! ';
							  $butn = 'View Website ';
											
											endif;
						  
						   ?>  	
                                <h4 class="duOrangeText" style="margin-top: 5px"><?php echo $text ?></h4>
                            </div>
                            <div class="col-lg-3">
                                <a target="_blank"   href="<?php echo $busin_data->call_action_weblink ?>" class="btn btn-light duOrange text-white no-border font-weight-bold"><?php echo $butn ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="font-weight-bold" style="margin: 1.5rem 0">FAQ</h3>
            
                <div class="faq1">
            
             	<?php foreach ($busin_faq as  $value): ?>
					 
				
                    <!-- Question Section -->
                    <div class="row">
                        <div class="col-lg-2">
                            <h6 class="font-weight-bold">Question :</h6>
                        </div>
                        <div class="col-lg-10">
                            <p><?php echo $value->ask ?></p>
                        </div>
                    </div>
                    <!-- answer Section -->
                    <div class="row">
                        <div class="col-lg-2">
                            <h6 class="font-weight-bold duGreenText">Answer :</h6>
                        </div>
                        <div class="col-lg-10">
                            <p><?php echo $value->answer ?></p>
                        </div>
                    </div>
               
                 <?php endforeach ?>
                 </div>
                <div class="divider" style="margin: 1.5rem 0;"></div>
                <h3 class="font-weight-bold" style="margin: 1.5rem 0">Reviews</h3>
               
               <?php foreach ($busin_reviews as  $value): ?>
                   <div class="row">
                    <div class="col-lg-4">
                        <div class="media">
                            <img class="d-flex mr-3" src="<?php echo base_url().'uploads/users/'.$value->photo ?>" width="50" height="50">
                            <div class="media-body">
                                <h5 class="mt-0"><?php echo $value->username .' '.$value->lastname ?></h5>
                                <!-- <p class="text-muted small">Canada,Toronto</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div style="display: block">
                        	
                        		
                        	
                          			<i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?><?php echo $value->rate >=2? 'asset/imgs/star.svg' : 'asset/imgs/nostae.svg' ?>" /></i>
                                      <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?><?php echo $value->rate >=3? 'asset/imgs/star.svg' : 'asset/imgs/nostae.svg' ?>" /></i>
                                      <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?><?php echo $value->rate >= 4? 'asset/imgs/star.svg' : 'asset/imgs/nostae.svg' ?>" /></i>
                                     <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?><?php echo $value->rate == 5? 'asset/imgs/star.svg' : 'asset/imgs/nostae.svg' ?>" /></i>
                                    
                                    
                                    
                                    
                            <span class="grey-text small"><?php echo date('Y-m-d h:i a' , strtotime($value->created_date))?></span>
                            <!-- <a href="#" class="grey-text" style="text-decoration: underline ; margin: 0 1rem">Report Review</a> -->
                            <p class="text-muted small" style="margin-top: 1rem"><?php echo $value->review?></p>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="divider"></div>
               <?php endforeach ?>
                
    
            </div>
            <div class="col-lg-4">
                <h3 class="font-weight-bold">Hours</h3>
                <div class="card">
                    <div class="card-body grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <div class="row">
                            <div class="col-lg-4">
                            	
                            	  <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">sun</span></p>
									
                                <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">mon</span></p>
                                <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">tue</span></p>
                                <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">wed</span></p>
                                <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">thu</span></p>
                                <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">fri</span></p>
                                <p class="text-uppercase" style="margin: 0"><span class="font-weight-bold" style="margin-right: 1rem">sat</span></p>
                              
								
                                
                            </div>
                            <div class="col-lg-8">
                            	
                                <p class="text-uppercase" style="margin: 0">	<?php echo isset($busin_datetimes['Sun'])? $busin_datetimes['Sun']->timefrom.'-'.$busin_datetimes['Sun']->timeto  : 'Closed' ;    ?></p>
                                <p class="text-uppercase" style="margin: 0">	<?php echo isset($busin_datetimes['Mon'])? $busin_datetimes['Mon']->timefrom.'-'.$busin_datetimes['Mon']->timeto  : 'Closed' ;    ?></p>
                                <p class="text-uppercase" style="margin: 0">	<?php echo isset($busin_datetimes['Tue'])? $busin_datetimes['Tue']->timefrom.'-'.$busin_datetimes['Tue']->timeto  : 'Closed' ;    ?></p>
                                <p class="text-uppercase" style="margin: 0">	<?php echo isset($busin_datetimes['Wed'])? $busin_datetimes['Wed']->timefrom.'-'.$busin_datetimes['Wed']->timeto  : 'Closed' ;    ?></p>
                                <p class="text-uppercase" style="margin: 0">	<?php echo isset($busin_datetimes['Thu'])? $busin_datetimes['Thu']->timefrom.'-'.$busin_datetimes['Thu']->timeto  : 'Closed' ;    ?></p>
                                <p class="text-uppercase" style="margin: 0">	<?php echo isset($busin_datetimes['Fri'])? $busin_datetimes['Fri']->timefrom.'-'.$busin_datetimes['Fri']->timeto  : 'Closed' ;    ?></p>
                                <p class="text-uppercase" style="margin: 0">	<?php echo isset($busin_datetimes['Sat'])? $busin_datetimes['Sat']->timefrom.'-'.$busin_datetimes['Sat']->timeto  : 'Closed' ;    ?></p>
                                <!-- <p class="text-uppercase" style="margin: 0">5:00 PM - 10:00 PM <span class="red-text">CLOSED NOW</span></p> -->
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="font-weight-bold" style="margin: 1.5rem 0">BUSINESS FEATURES</h3>
                <div class="card">
                	
                	<?php if ($busin_data->price == 2 || $busin_data->price == 3 || $busin_data->price ==  4 || $busin_data->price == 5) 
                		{
                		$se =  'realPrice'; }
                	else{
                		$se =  'grey-lighten-2-text';} ?> 
                		
                		<?php if ($busin_data->price == 3 || $busin_data->price ==  4 || $busin_data->price == 5) 
                		{
                		$se3 =  'realPrice'; }
                	else{
                		$se3 =  'grey-lighten-2-text';} ?> 
                			<?php if ( $busin_data->price ==  4 || $busin_data->price == 5) 
                		{
                		$se4 =  'realPrice'; }
                	else{
                		$se4 =  'grey-lighten-2-text';
					} ?> 
					
						<?php if ($busin_data->price == 5) 
                		{
                		$se5 =  'realPrice'; }
                	else{
                		$se5 =  'grey-lighten-2-text';} ?> 
                		
                	
                    <div class="card-body grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <p class="font-weight-bold no-mar" style="display: inline-block ; margin-right: 1rem !important;">Price</p>
                        <i class="fa fa-usd realPrice" aria-hidden="true"></i>
                        <i class="fa fa-usd <?php echo $se; ?> " aria-hidden="true"></i>
                        <i class="fa fa-usd <?php echo $se3; ?>" aria-hidden="true"></i>
                        <i class="fa fa-usd <?php echo $se4; ?>" aria-hidden="true"></i>
                         <i class="fa fa-usd <?php echo $se5; ?>" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="card " style="margin-top: 5px;">
                    <div class="card-body  grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <p class="font-weight-bold no-mar" style="display: inline-block ;">General Features</p>
                        <div class="row">
                        	
                        	 <div class="col">
                        	<?php foreach ($busin_genfeat as $value): ?>
								
						<p class="no-mar small"><?php echo $value->name ?></p>
						
						
							<?php endforeach ?>
                           
                      
                            </div>
                        </div>
                    </div>
                </div>
				
                <div class="card " style="margin-top: 5px;">
                    <div class="card-body grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <p class="font-weight-bold no-mar" style="display: inline-block ; margin-right: 1rem !important;">Parking</p>
                        <p class="no-mar" style="display: inline-block ;"><?php echo  $busin_data->parking == 0? 'No' : $busin_data->parking ?></p>
                    </div>
                </div>

                <div class="card" style="margin-top: 5px;">
                    <div class="card-body grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <p class="font-weight-bold no-mar" style="display: inline-block ; margin-right: 1rem !important;">Smoking</p>
                        <p class="no-mar" style="display: inline-block ;"><?php echo  $busin_data->smoking == 0? 'No' : $busin_data->smoking ?></p>
                    </div>
                </div>

                <div class="card" style="margin-top: 5px;">
                    <div class="card-body grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <p class="font-weight-bold no-mar" style="display: inline-block ; margin-right: 1rem !important;">Alcohol</p>
                        <p class="no-mar" style="display: inline-block ;"><?php echo  $busin_data->alcohol == 0? 'No' : $busin_data->alcohol ?></p>
                    </div>
                </div>

                <div class="card " style="margin-top: 5px;">
                    <div class="card-body grey-lighten-3" style="padding: 1rem 2rem !important;">
                        <p class="font-weight-bold no-mar" style="display: inline-block ; margin-right: 1rem !important;">Music</p>
                        <p class="no-mar" style="display: inline-block ;"><?php echo  $busin_data->music == 0? 'No' : $busin_data->music ?></p>
                    </div>
                </div>


                <!-- <div class="media" style="margin-top: 2rem">
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
                </div> -->
            </div>
        </div>
    </div>

    <!-- Modal Structure HERE -->
    <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header grey-lighten-2" style="padding: 0 2rem 0.5rem 2rem;">
                    <div class="media" style="margin-top: 2rem">
                        <img class="mr-3" src="<?php echo base_url() ?>asset/imgs/dubarji.svg" width="75">
                        <div class="media-body" style="padding: 1rem 0;">
                            <h5 class="mt-0 font-weight-bold"><?php echo $busin_data->name ?>.</h5>
                            <p class="small"><?php echo $busin_data->address.' , '.$busin_data->province.' , '.$busin_data->address_office ?></p>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding: 1.5rem 2rem 1.5rem 2rem;">
                	<form method="post" id="new_review"  enctype="multipart/form-data"  >
                    <p class="font-weight-bold">Leave a Review</p>
                    <!-- <div style="display: block">
                        <i class="fa fa-star rated" aria-hidden="true"></i>
                        <i class="fa fa-star rated" aria-hidden="true"></i>
                        <i class="fa fa-star rated" aria-hidden="true"></i>
                        <i class="fa fa-star unrated" aria-hidden="true"></i>
                        <i class="fa fa-star unrated" aria-hidden="true"></i>
                        <span class="grey-text small">Select your Rating</span>
                    </div> -->
					<div class="rating" style="display: block">
					<input type="radio" name="rate" id="one" value="1" checked />
					<label for="one"><i class="fa fa-star"></i></label>
					<input type="radio" name="rate" id="two" value="2" />
					<label for="two"><i class="fa fa-star"></i></label>
					<input type="radio" name="rate" id="three" value="3" />
					<label for="three"><i class="fa fa-star"></i></label>
					<input type="radio" name="rate" id="four" value="4" />
					<label for="four"><i class="fa fa-star"></i></label>
					<input type="radio" name="rate" id="five" value="5" />
					<label for="five"><i class="fa fa-star"></i></label>
					<span class="grey-text small">Select your Rating</span>
					</div>
					<input type="hidden" name="bus_id"  value="<?php echo $busi_id ?>" />
                    <!-- <input class="form-control col-lg-9" type="text" placeholder="Title" style="margin: 1rem 0;"> -->
                    <textarea class="form-control" id="" name="review" rows="6" placeholder="Start your review .."></textarea>
                   
                    <span class="upload-button-wrapper">
						<input class="upload-button" id="upload" name="file" type="file"/>
					  <label style="background-color: #fff" class="upload-label" for="upload"> <i class="fa fa-plus-square fa-2x grey-text mar-top"  aria-hidden="true"></i>  <span class="grey-text mar-left">Upload images (Show others what you got)</span></label>
					</span>
					<span class="upload-filename" id="upload-filename"></span>
                   
                </div>
                <div class="modal-footer" style="padding: 1rem 2rem;">
                    <button onclick="add_review()" type="button" class="btn btn-primary duGreen no-border">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
  <?php $this->load->view('business/common/navfooter'); ?>
<?php $this->load->view('business/common/footer'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script type="text/javascript">
	document.getElementById("upload").onchange = function () {
 document.getElementById("upload-filename").innerHTML = this.value;
};
	baguetteBox.run('.tz-gallery');

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
	function add_review()  {
		if (typeof FormData !== 'undefined') {

        // send the formData
        var formData = new FormData( $("#new_review")[0] );

	        $.ajax({
	            url : '<?php echo base_url() ?>add-review',  // Controller URL
	            type : 'POST',
	            data : formData,
	            async : false,
	            cache : false,
	            contentType : false,
	            processData : false,
	            success : function(data) {
	            	console.log(data);
	                res = JSON.parse(data);
	               
	                
	                if (res[0]) {
	                	swal({
		            title: '<?php echo trans('success'); ?>',
		            text: '<?php echo 'Done' ?>' ,
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
		            title: 'error',
		            text: 'error' ,
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
                                '<span class="col-md-3"><img width="50" src="<?php echo base_url()?>'+arr['business'][i].logo+'"></span>'
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