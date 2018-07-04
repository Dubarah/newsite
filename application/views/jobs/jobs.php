<?php $this->load->view('main/second/header'); ?>
 <style>
        body, html {
            height: 100%;
            margin: 0;
            background-color : #f2f2f2;
        }
 		.duGray {  background-color : #4e4e4e  !important ;  }
        .duOrange {  background-color : #4e4e4e !important ;  }
        .duOrangeText {  color : #4e4e4e !important ;  }
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
<?php //$this->load->view('/business/common/navbar'); ?>
	
    <div class="intro duGray">
        <div style="text-align: center">
            <div style="margin: 2rem 0">
                <img src="<?php echo base_url() ?>asset/imgs/job-logo.svg" class="img-fluid" style="max-width: 12rem ; padding: 4px">
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
                        Jobs </div>
                        <div id="find_res_b">
                             <a href="#" class="list-group-item list-group-item-action">
                        No Jobs Founded. </a></div>
                        <div class="lbl list-group-item text-dark font-weight-bold">
                        <i class="fa fa-cube"></i>
                        Main Category</div>
                        <div id="find_res_c">
                        <a href="#" class="list-group-item list-group-item-action">
                        No Main Category Founded.</a></div>
                    
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
         <?php    /*<div class="col-lg-10 ">
            <div class="pull-left " > Browsing <strong> 
            <!-- <?php   if (isset($city_search) && count($city_search) > 0 ) 
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
                ?> --> 
                  </div>
                  
        </div> */?>
        </div>
    </div>
    
        </div>
    </div>

<?php /*
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
    <div class="clear"> </div><br/> <?php */?>
</div>

    
    <div class="jumbotron jumbotron-fluid bg-white pad" style="display: none"> 
        <div class="container">
            		<form method="get" action="<?php echo base_url()."jobs/1$url_ext" ?>">
            <div class="row">
                <div class="col-md-2">
                   <h6 class="mar-top">SEARCH BY :</h6>
                </div>
                <div class="col-md-3">
                    <!-- <input type="text" class="form-control form-control-lg" placeholder="Achievement Type"> -->
             	<select  class="form-control select2" id='cat_id' placeholder="Pick your job category" name="cat_id">
										<option></option>
											<?php foreach ($sub->result() as $cat) {?>
		
		        						 <option value="<?php echo $cat->category_id ?>" ><?php echo $cat->english_name ?></option>
		    						     <?php } ?>
									</select>
                </div>
                <div class="col-md-3">
                    <!-- <input type="text" class="form-control form-control-lg" placeholder="Country"> -->
                  <select  class="form-control select2" id="country" placeholder="Pick your country" name="country_id">
										<option></option>
											<?php foreach ($countrys->result() as $country) {?>
	
	            						 <option style="text-align: center;" value="<?php echo $country->country_id ?>" ><?php echo $country->country_english_name ?></option>
	        						     <?php } ?>
									</select>
                </div>
                <div class="col-md-3">
                    <input type="text" name="search" class="form-control" placeholder="Search any word">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-secondary">Find</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    

    <div class="container " style="max-width: 950px;">
    	 <div class="row col">
            <p>SORT BY :  
             
								<a  class="btn btn-link" href="<?php echo base_url()."jobs/1".($url_ext ? "$url_ext&filter=all" : "?filter=all") ?>"><?php echo LANG() == 'en' ? 'All' : 'الكل' ?></a>
							
							<?php foreach ($job_types as $value): ?>
								
									<a  class="btn btn-link" href="<?php echo base_url()."jobs/1".($url_ext ? "$url_ext&filter=$value->type_id" : "?filter=$value->type_id") ?>"><?php echo LANG() == 'en' ? $value->type_name : $value->type_name_ar ?></a>
						
							<?php endforeach ?>
        </div>
    	
          <div class="row mar-top ">
            <div class="col-lg-10">
                <img style="width: 20%;" src="<?php echo base_url() ?>asset/imgs/dublack.svg"> <span class="red-text" style="font-size: 25px;padding-left: 10px;position:relative;top: 7px;"><strong>Jobs</strong></span></h4>
            </div>
            <div class="col-lg-2">
                <a class="red-text float-right"><strong>+ Add Job</strong></a>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
           
            <div class="col-lg-12">
            

                        <div class="row">
                        	    <?php 
					    
				    	$pages = $num_rows % 12 === 0 ? $num_rows / 12 : ((int) $num_rows / 12) + 1;
						$pages = (int) $pages;
				    	if ($results) { ?>
				    		
							<?php $i = (($page - 1) * 12) + 1; $comm = 0; $total_price = 0; foreach ($results as $job) { ?>
                            <div class="col-lg-4">
                                <div class="card du-job-homecard">
                                    <div class="card-body du-job-homecard">
                                        <h4 class="card-title "><strong><u><a href="<?php echo base_url().'job/'.$job->advertisement_id ?>"><?php echo $job->title ?></a></u></strong></h4>
                                        <p class="card-title"><?php echo $job->address ?></p>
                                        <p class="card-text text-muted"><?php
                                        
                                        /* $i = 0; foreach ($jobSkills[$job->advertisement_id] as $skill) {
                                            	if($i == 2){
                                            		echo "..... ";
													break;
                                            	}
                                            echo $skill->skill_name.', ';
                                       $i++; }
										echo "<br />";*/
                                        echo lang()=='en' ? $job->type_name.', '.$job->employer : $job->type_name_ar.', '.$job->employer ?> </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                      
                 

                </div>
            </div>
           		<?php if ($num_rows > 12): ?>
					<div class="text-center">
						<ul class="pagination ">
							<li><a href="<?php echo base_url()."jobs/1"?>" ><</a></li>
							<?php if ($page - 4 >= 1): ?>
								<li><a href="<?php echo base_url()."jobs/".($page - 4).$url_ext ?>"><?php echo $page - 4 ?></a></li>
							<?php endif ?>
							<?php if ($page - 3 >= 1): ?>
								<li><a href="<?php echo base_url()."jobs/".($page - 3).$url_ext ?>"><?php echo $page - 3 ?></a></li>
							<?php endif ?>
							<?php if ($page - 2 >= 1): ?>
								<li><a href="<?php echo base_url()."jobs/".($page - 2).$url_ext ?>"><?php echo $page - 2 ?></a></li>
							<?php endif ?>
							<?php if ($page - 1 >= 1): ?>
								<li><a href="<?php echo base_url()."jobs/".($page - 1).$url_ext ?>"><?php echo $page - 1 ?></a></li>
							<?php endif ?>
							<li class="active"><a href="#"><?php echo $page ?></a></li>
							<?php if ($page + 1 <= $pages): ?>
								<li><a href="<?php echo base_url()."jobs/".($page + 1).$url_ext ?>"><?php echo $page + 1 ?></a></li>
							<?php endif ?>
							<?php if ($page + 2 <= $pages): ?>
								<li><a href="<?php echo base_url()."jobs/".($page + 2).$url_ext ?>"><?php echo $page + 2 ?></a></li>
							<?php endif ?>
							<?php if ($page + 3 <= $pages): ?>
								<li><a href="<?php echo base_url()."jobs/".($page + 3).$url_ext ?>"><?php echo $page + 3 ?></a></li>
							<?php endif ?>
							<?php if ($page + 4 <= $pages): ?>
								<li><a href="<?php echo base_url()."jobs/".($page + 4).$url_ext ?>"><?php echo $page + 4 ?></a></li>
							<?php endif ?>
							<li><a href="<?php echo base_url()."jobs/".($pages).$url_ext ?>">></a></li>
							
						</ul>
					</div>
				<?php endif ?>
				
			<?php } else { ?>
				<b><center><?php echo $this->lang->line('no_emps'); ?></center></b>
			<?php } ?>    

        </div>

        
    </div> </div> </div>



    <!-- footer -->
    <?php $this->load->view('newindex/footer'); ?>

    <!-- Optional JavaScript == jQuery first, then Popper.js, then Bootstrap JS == -->
    <!-- <script src="<?php echo base_url()?>asset/js/jquery-3.2.1.slim.min.js" ></script> -->
    <!-- the following jquery is instade of the slim one above to support ajax #PE$$ -->
    <!-- <script src="<?php echo base_url()?>asset/js/jquery-3.2.1.js"></script>
    <script src="<?php echo base_url()?>asset/js/popper.min.js" i></script>
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url()?>asset/js/additional.js"></script>  -->      
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
        
        // $(document).ready(function () { init_load(); //('','');
      // /// -------- Filters --------------
      // $('.featfltrs').on('click',function (e) {
            // val = $(e.target).attr('id') ;
            // setParamURLFilter('feat',val );
      // });
      // $('.pricfltr').on('click',function (e) {
            // val = $(e.target).attr('id') ;
            // setParamURLFilter('prc',val );
      // });
      // $('.ctyNearfltr').on('click',function (e) {
            // val = $(e.target).attr('id') ;
            // setParamURLFilter('cty',val );
      // });
      // $('.srtBy').on('click',function (e) {
            // val = $(e.target).attr('id') ;
            // setParamURLFilter('srt',val );
      // });
      // $('#opendBusinessBtn').on('click',function(){
          // if( ! $("#opendBusinessBtn").hasClass('btn-success') )
            // {
              // $("#opendBusinessBtn").removeClass('btn-outline-secondary');
              // $("#opendBusinessBtn").addClass('btn-success');
              // setParamURLFilter('opn','1');
            // }
          // else
            // {
              // $("#opendBusinessBtn").removeClass('btn-success');
              // $("#opendBusinessBtn").addClass('btn-outline-secondary');
              // removeParamURLFilter('opn');
            // }
      // });
      // // ----- Styling ----------
      // $('#allfilterBtn').on('click',function(){
            // c= $("#filtersCard").css('display');
            // if( c == "none" )
              // {$("#allfilterBtn").addClass('btn-success');}
              // else
              // {$("#allfilterBtn").removeClass('btn-success');}
            // $("#filtersCard").toggle('slow');
      // });
  // });

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

 function removeParamURLFilter(flt) {
       window.location.href = removeParam(flt ,  window.location.href);
    }
     function removeParam(key, sourceURL) {
      var rtn = sourceURL.split("?")[0],
          param,
          params_arr = [],
          queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
      if (queryString !== "") {
          params_arr = queryString.split("&");
          for (var i = params_arr.length - 1; i >= 0; i -= 1) {
              param = params_arr[i].split("=")[0];
              if (param === key) {
                  params_arr.splice(i, 1);
              }
          }
          rtn = rtn + "?" + params_arr.join("&");
            }
            return rtn;
      }
    
 function setParamURLFilter(flt, val){ 
          url  = window.location.href;
          url  = url.replace("#", "");
        if (url.match(/\?./)) { //.contains('?')) {
          params = url.split('?')[1];
          my_val = "&"+flt+"="+val;
          if(params.match(flt) &&  params.match(val))
          { // contain
            removeParamURLFilter(flt , url);
          }else if(params.match(flt) && ! params.match(my_val) ){
            new_url = removeParam(flt , url);
            window.location.href = new_url + my_val;
          }
          else{ // should add
          	url = window.location.href;
          	url  = url.replace("#", "");
            window.location.href = url + my_val;
          }
        }else{
        	url  = window.location.href;
          	url  = url.replace("#", "");
          window.location.href = url + "?"+flt+"="+val;
        } 
      }



function find_input_change(val) {
	$("#city_res").css({'display' : 'none'});
    $("#find_res").css({'display' : 'none'});
    $("#find_get_res").css({'display' : 'block'});
    if(val != '')
    {
         $.ajax({
                  url: '<?php echo base_url()?>get_jobs_findedcategory',
                      method:"post",
                  	 data:{val:val},
                  
                  
                  success: function(data) {
                  //	alert(data);
                    arr = JSON.parse(data);
                    
              
                    console.log(arr['jobs']);
                        console.log(arr['cats']);
                      if (arr['jobs'] && arr['jobs'].length > 0) {
                          jobs_elms = "";
                          for (var i = 0; i < arr['jobs'].length; i++) {
                            jobs_elms += '<a href="<?php echo base_url().'job/' ?>'+arr['jobs'][i].advertisement_id +'"   id="'+arr['jobs'][i].advertisement_id +'" class="list-group-item busfindId list-group-item-action"> '+
                                '<span class="col-md-3"><img width="50" src="<?php echo base_url().'uploads/jobslogo/' ?>'+arr['jobs'][i].img+'"></span>'
                            +'<span> '+ arr['jobs'][i].title + '</span></a>' ;
                          } 
                        
                          $("#find_res_b").html(jobs_elms);
                      }else{
                      	
                      	
                      	 bemet = '<a href="" class="list-group-item list-group-item-action">No Business Founded. </a>';
                      	 $("#find_res_b").html(bemet);
                      	
                      }
                      
                     
                      if (arr['cats'] &&  arr['cats'].length > 0 ) {
                          cats_elms = "";
                          for (var i = 0; i < arr['cats'].length; i++) {
                            cats_elms += '<a href="#" onclick="setParamURLFilter('+"'cat_id'"+',`'+ arr['cats'][i].category_id+'` )"  id="'+arr['cats'][i].category_id +'" class="list-group-item catfindId list-group-item-action"><strong><span> '+ arr['cats'][i].english_name + 
                            '</span></strong></a>' ;
                          }
                          $("#find_res_c").html(cats_elms);
                      }else{
                      	
                      	 catempty = '<a href="#" class="list-group-item list-group-item-action"> No Main Category Founded. </a>';
                      	 $("#find_res_c").html(catempty);
                      	
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
</body>
</html>