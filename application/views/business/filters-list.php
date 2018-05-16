<?php $this->load->view('/business/common/header'); ?>
 <style>
        body, html {
            height: 100%;
            margin: 0;
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
                <div id="city_res_all" class="col-md-4 text-left pull-right ">
                     <div class="list-group offset-md-0" id="city_res">
                    </div>
                </div>
            </div>
                </div>
            </div>
              <div style="text-align: center">
                
                	
                	<div class="container">
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
    </div>
    
        </div>
    </div>

<!-- 
<div class="col-md-12 dub_org center-block text-center"  >
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
          <!-- <div id="city_res"></div> 
          <div class=" btn btn-sm m-1 dub_org" id="go_find">
              Go and Find
          </div>
        </div>
        </div>
        
        </div>
    </div>

    <div class="clear"> </div>
    <div class="clear"> </div><br/> -->
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
  <?php $this->load->view('business/filters-controls'); ?>
</div>
<!--     </dir>
</div> -->
<div id="list" class="bg-white pad">
    <div class="container">
        <div id="title"> Browsing <strong> 
            <?php 
            if(isset($city_search) && count($city_search) > 0 )
            echo $city_search[0]->name ." ," .$city_search[0]->cntry ;
            else  echo "All"; ?></strong> Businesses </div>
        <div class="divider"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="col-lg-12 list-inline" >
                    <div class="row ">
                      <?php foreach ( $businesses as $business) { ?>
                      <?php // echo "<pre>" ;print_r($business) ;//exit; ?>
                      	
                      	
                      	   <div class="col-lg-4">
                            <div class="card">
                            	<a href="<?php echo base_url().'business-profile/'.$business['Busi']->id ?>">
                                <img class="card-img-top" src="<?php echo base_url().$business['Busi']->cover?>" alt="Card image cap">
                             	 </a>
                                <div class="card-body">
                                	<a href="<?php echo base_url().'business-profile/'.$business['Busi']->id ?>">
                                    <h6 class="card-title"><?php echo $business['Busi']->name ?></h6>
                                    </a>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/nostae.svg" /></i>
									
                                    <!-- <p class="text-muted"><?php $i = 0; foreach ($bus_cat[$business['Busi']->id] as $bus_cat0) { 
                                  if($i == 2){
                                      echo "..... ";
                                      break;
								  }
										echo $bus_cat0->name.',';
                                    	
                                    	 $i++;} ?>
                                    	
                    
                                    	
                                    </p> -->
                               
                                    <p><?php echo $business['Busi']->country_english_name ?></p>
                                </div>
                            </div>
                        </div>
                      	
                      	
                     
                      <?php  }  //exit; ?>
                    </div>
                </div>                 
            </div>
            <div class="col-md-4 row">
                <div id="ma3reft" class="panel" >
                    <div class="col-md-3">
                        <img  width="100" src="<?php echo base_url()?>ass/images/dub-icon.png"/>
                    </div>
                    <div class="col-md-10">
                        <div class="strong "> Dubarah inc.</div class="strong">
                        <div class="small">
                        Add discreption, cover photo, and
                        gallery must always be perfect and
                        up to date</div class="small">
                        <div class="small">(415) 715-9767 </div>  
                        <div class="btn  btn-sm btn-outline-secondary"> Get Quote</div>
                    </div>
                </div>
                <br/>
                <div id="ma3reft" class="panel"  >
                    <div class="col-md-3">
                        <img  width="100" src="<?php echo base_url()?>ass/images/dub-icon.png"/>
                    </div>
                    <div class="col-md-10">
                        <div class="strong "> Dubarah inc.</div class="strong">
                        <div class="small">
                        Add discreption, cover photo, and
                        gallery must always be perfect and
                        up to date</div class="small">
                        <div class="small">(415) 715-9767 </div>  
                        <div class="btn  btn-sm btn-outline-secondary"> Get Quote</div>
                    </div>
                </div>
                <br/>
                <div id="ma3reft"  >
                    <div class="col-md-3">
                        <img  width="100" src="<?php echo base_url()?>ass/images/dub-icon.png"/>
                    </div>
                    <div class="col-md-10">
                        <div class="strong "> Dubarah inc.</div class="strong">
                        <div class="small">
                        Add discreption, cover photo, and
                        gallery must always be perfect and
                        up to date</div class="small">
                        <div class="small">(415) 715-9767 </div>  
                        <div class="btn  btn-sm btn-outline-secondary"> Get Quote</div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="clear mar-top"> </div>
        <!-- Browsing <strong > Toronto, ON, Canada <strong > Offers -->
        <div class="divider"></div>
     <!--   <div class="row">
            <div class=" ">
                <div class="col-lg-12 list-inline" >
                    <div class="row ">
                        <div class="col-md-3 mar-top"> 
                            <div class="card">
                                <div class="bg-faded bg-light p-5">
                                </div>
                                <div class="card-body">
                                    <div class="row ">
                                        <div class="row col-md-12">
                                            <h4 class="card-title"><?php isset($userData)  
                                            ?  $userData['first'].' ' .$userData['last'].' '  
                                            :  "S"  
                                            ?>
                                            <h6 class="card-subtitle mb-2 text-muted ">
                                                <strong>
                                                    Up to 46% off Italian Cuisine
                                            </strong></h6>
                                        </div>
                                        <div class="row col-md-12 ">     
                                        <div class="small text-left">
                                                <p><span  > luci Restaurant</span></p>
                                                <p> <span class="flag flag-can flag-1x mar-right"></span>
                                                <span class="text-muted">Address • 0.0 km </span>
                                                </p>
                                        </div>
                                        </div>
                                        <div class="row col-md-12">
                                            <div class="text-left">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p id = 'city-country3' class="text-muted small">10 reviews</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right text-right  col-xs-offset-2">
                                              <del>C$60</del> <span class="text-success">C$30</span>
                                              </div>
                                        </div>
                                    </div>
                                </div></div>
                        </div> 
                        <div class="col-md-3 mar-top"> 
                            <div class="card">
                                <div class="bg-faded bg-light p-5">
                                </div>
                                <div class="card-body">
                                    <div class="row ">
                                        <div class="row col-md-12">
                                            <h4 class="card-title"><?php isset($userData)  
                                            ?  $userData['first'].' ' .$userData['last'].' '  
                                            :  "S"  
                                            ?>
                                            <h6 class="card-subtitle mb-2 text-muted ">
                                                <strong>
                                                    Up to 46% off Italian Cuisine
                                            </strong></h6>
                                        </div>
                                        <div class="row col-md-12 ">     
                                        <div class="small text-left">
                                                <p><span  > luci Restaurant</span></p>
                                                <p> <span class="flag flag-can flag-1x mar-right"></span>
                                                <span class="text-muted">Address • 0.0 km </span>
                                                </p>
                                        </div>
                                        </div>
                                        <div class="row col-md-12">
                                            <div class="text-left">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p id = 'city-country3' class="text-muted small">10 reviews</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right text-right  col-xs-offset-2">
                                              <del>C$60</del> <span class="text-success">C$30</span>
                                              </div>
                                        </div>
                                    </div>
                                </div></div>
                        </div> 
                        <div class="col-md-3 mar-top"> 
                            <div class="card">
                                <div class="bg-faded bg-light p-5">
                                </div>
                                <div class="card-body">
                                    <div class="row ">
                                        <div class="row col-md-12">
                                            <h4 class="card-title"><?php isset($userData)  
                                            ?  $userData['first'].' ' .$userData['last'].' '  
                                            :  "S"  
                                            ?>
                                            <h6 class="card-subtitle mb-2 text-muted ">
                                                <strong>
                                                    Up to 46% off Italian Cuisine
                                            </strong></h6>
                                        </div>
                                        <div class="row col-md-12 ">     
                                        <div class="small text-left">
                                                <p><span  > luci Restaurant</span></p>
                                                <p> <span class="flag flag-can flag-1x mar-right"></span>
                                                <span class="text-muted">Address • 0.0 km </span>
                                                </p>
                                        </div>
                                        </div>
                                        <div class="row col-md-12">
                                            <div class="text-left">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p id = 'city-country3' class="text-muted small">10 reviews</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right text-right  col-xs-offset-2">
                                              <del>C$60</del> <span class="text-success">C$30</span>
                                              </div>
                                        </div>
                                    </div>
                                </div></div>
                        </div> 
                    </div>
                </div>                 
            </div>
        </div> -->
    </div>
</div>
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
                            elms += '<a href="#" onclick="setParamURLFilter('+"'cty'"+','+arr[i].id +' )"  id="'+arr[i].id +'" class="list-group-item ctyfindId list-group-item-action"><strong><span> '+ arr[i].name + " ,"+ arr[i].cntry+'</span></strong></a>' ;
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
                            cats_elms += '<a href="#" onclick="setParamURLFilter('+"'findcat'"+',`'+ arr['cats'][i].name+'` )"  id="'+arr['cats'][i].id +'" class="list-group-item catfindId list-group-item-action"><strong><span> '+ arr['cats'][i].name + 
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
                            subCat_elms += '<a href="#" onclick="setParamURLFilter('+"'findcat'"+',`'+arr['subCat'][i].name +'` )"  id="'+arr['subCat'][i].id +'" class="list-group-item catfindId list-group-item-action"><strong><span> '+ arr['subCat'][i].name + 
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
 
 
$(document).ready(function()
{
	 $(".cat_name_cont").click(function (e) {
		val = $(e.target).html()
		$("#find_inp").val(val);
  	 	$("#find_res").css({'display':'none'});
  	 	setParamURLFilter('findcat',val +"" );
  	 	
	});
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
        //$("#find_res").css({'display':'none'});
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