  <?php $this->load->view('main/header')?>
	
	
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



    <div class="container" style="    text-align: center;">
        <div style="position: absolute; top: 40%; left: 0; right: 0;">
            <img src="<?php echo base_url()?>asset/imgs/DubarahLogoWhite.svg" class="img-fluid" style="max-width: 18rem ; padding: 4px"><span class="text-white font-weight-bold" style="font-size: 2.0rem; vertical-align: bottom;"> Business </span>
            <p class="text-white">
            	<span class="font-weight-bold"> 13,245 </span>BUSINESS<span class="font-weight-bold"> 1200 </span>OFFERS<span class="font-weight-bold"> 9 </span>COUNTRIES</p>
          
              <!-- <div class="row justify-content-center">
        
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
          <!-- <div class=" btn btn-sm m-1 dub_org" id="go_find">
              Go and Find
          </div>
        </div>
        </div> -->
         <?php //echo "<pre> ---" . count($mainCats['MainCat']) ;//print_r($mainCats['MainCat'] ) ; 
        //exit;?>
     
        <!-- </div>
    </div> --> 

          
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