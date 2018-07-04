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
</style>
<div class="row" style="    margin-right: 0px;
    margin-left: 0px;">
 <div class=" intro duGray ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <img src="<?php echo base_url() ?>asset/imgs/job-logo.svg" class="img-fluid" style="    max-width: 13rem;
    margin-top: 4.5rem;
    margin-left: 2rem;">
                </div>
              
            </div>
        </div>
    </div>
    </div>


<section id="main" class="clearfix ad-details-page" style="    margin-bottom: 15px;">
    <div class="container">


        <div class="adpost-details">
            <div class="row">
                <div class="col-md-8">
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>add_job">
                        <fieldset>
                        	<div class="header">
            <p>
                </p><h2> <strong>Add    <?php echo trans('jobs') ?></strong>  </h2>
                              Add information about your job below. Your job page will not appear in
                search results until this information has been verified and approved by our
                moderators. Once it is approved, you will receive an email with instructions on how to
                claim your business page.
                            <p></p>
        </div>
                            <div class="">
                              
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title">
                                        <a href="">
										<span class="select">
											<img src='<?php echo base_url(); ?>ass/images/icon/1.png' alt='Images' class='img-responsive'>
										</span>
                                        </a>
                                    </label>
                                    <div class="col-sm-7" style="margin-bottom: 30px">
                                        <label class=""><h6><?php echo translate('subcategories') ?><span class="required">*</h6></span></label>
                                        <select  class="form-control select2" name="sub_id" id="" placeholder="">
                                            <option></option>
                                            <?php foreach ($sub as $row) { ?>
                                                <option value='<?php echo $row->category_id; ?>'><?php echo $row->english_name;?></option>
                                            <?php    }?>
                                        </select>
                                    </div>
                                    <span style="color: red"><?php echo form_error('sub_id') ? form_error('sub_id') : '' ?></span>
                                </div>
                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title"><h6><?php echo translate('title') ?><span class="required">*</span></h6></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px">
                                        <input type="text" id="text"  name="title" class="form-control login-form-input login-form-input-email"
                                               style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               placeholder="Ex. Graphic Designer">
                                    </div>
                                    <span style="color: red"><?php echo form_error('title') ? form_error('title') : '' ?></span>
                                </div>
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title"><h6><?php echo trans('job_type') ?><span class="required">*</span></h6></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px;">
										 <div class="col-sm-9"style="margin-bottom: 30px">
                                        <?php foreach ($job_type as $type): ?>
                                         <div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" name="job_type" onclick="javascript:yesnoCheck();" value="<?php echo $type->type_id ?>" id="<?php echo $type->type_name ?>" class="custom-control-input">
									  <label class="custom-control-label" for="<?php echo $type->type_name ?>"><?php echo lang()=='en' ?  $type->type_name : $type->type_name_ar ?></label>
									</div>   
                                       
                                            
                                        <?php endforeach ?>
                                    </div>
                                        <span style="color: red"><?php echo form_error('job_type') ? form_error('job_type') : '' ?></span>
                                    </div>
                                </div>
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title"><h6><?php echo trans('description') ?><span class="required">*</span></h6></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px;">
                                        <!--<textarea name="description" class="form-control" rows="6" style=""></textarea>-->
                                       <textarea id="text" name="description" class="form-control no-border mar-top"></textarea>
                                        <span style="color: red"><?php echo form_error('description') ? form_error('description') : '' ?></span>
                                    </div>
                                </div>
                					 <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title"><h6><?php echo translate('employer') ?><span class="required">*</span></h6></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px">
                                        <input class="form-control login-form-input login-form-input-email" name="employer"
                                                 style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               id="textarea"  placeholder="Ex. Your company name" ></input>
                                        <span style="color: red"><?php echo form_error('employer') ? form_error('employer') : '' ?></span>
                                	  <span style="color: #fffff;float: right"><a target="_blank" href="<?php echo base_url() ?>business-create">Add bussniss</a></span>
                                  
                                    </div>
                                </div>
                                <div class="row form-group add-image"style="margin-bottom: 30px">
                                    <label class="col-sm-3 label-title"><h6><?php echo translate('logo') ?></h6></label>
                                    <div class="col-sm-3" style="margin-bottom: 50px" >
                                    	<div class="user-images" id='profile-upload' style="border-radius: 5px;height: 120px;width: 120px;margin-top: 11px;
                                    	background-image: url('<?php echo base_url().'ass/images/image_profile.jpg' ?>')">
						<div class="hvr-profile-img"><input   type="file" name="fs_image1" id='getval'   class="upload w180" title="Dimensions 180 X 180" id="imag"></div>
  						<i class="fa fa-camera"></i>
 						 </div>
                                    	
                                    	
                                       
                                    </div>
                                   
                                    <span style="color: red"><?php echo form_error('logo') ? form_error('logo') : '' ?></span>
                                </div>
                            </div>
                            <div class="section seller-info" >
  							<h4><?php echo trans('Job_Preferences') ?><span style="font-size: 12px;color: red;"> <br/><?php echo trans('Only') ?></span></h4>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title"><h6><?php echo trans('Who_can') ?><span class="required">*</span></h6></label>
                                    <div class="col-sm-9"style="margin-bottom: 30px; margin-top: 12px;">
                                    	
                                    	 <div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" name="gender"  value="3" id="any" checked="checked" class="custom-control-input">
									  <label class="custom-control-label" for="any"><?php echo trans('any') ?></label>
									</div>
                                    		 <div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" name="gender"  value="1" id="male" class="custom-control-input">
									  <label class="custom-control-label" for="male"><?php echo trans('male') ?></label>
									</div> 
									<div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" name="gender"  value="2" id="female" class="custom-control-input">
									  <label class="custom-control-label" for="female"><?php echo trans('female') ?></label>
									</div>
									
                                       
                                    </div>
                                </div>
                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title"><h6><?php echo trans('re_requirement') ?><span class="required">*</span></h6></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px">
                                        <div class="select2-wrapper">
                                            <select class="form-control select2" id="skills" placeholder="Pick your Skills"  multiple="multiple" name="skills[]">
                                                <option></option>
                                                <?php foreach ($skills->result() as $skill) {?>
                                                    <option value="<?php echo $skill->	skill_id ?>" ><?php echo $skill->skill_name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <span style="color: red"><?php echo form_error('skills[]') ? form_error('skills[]') : '' ?></span>
                                    </div>
                                </div>
							 <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title"><h6><?php echo trans('country') ?><span class="required">*</span></h6></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px;">

                                        <div class="select2-wrapper">
                                            <select name="country" onchange="citys(this.value)" class="form-control select2" placeholder="First pick your country">
                                                <option></option>
                                                <?php foreach ($countrys->result() as $country) {?>
                                                    <option value="<?php echo $country->country_id ?>" ><?php echo $country->country_english_name ?></option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                        <span style="color: red"><?php echo form_error('country') ? form_error('country') : '' ?></span>
                                    </div>
                                </div>
                                <div class="row form-group item-br">
                                    <label class="col-sm-3 label-title"><h6><?php echo trans('city') ?><span class="required">*</span></h6></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px;">

                                        <div class="select2-wrapper">
                                            <select name="city" id="select2_3" class="form-control select2" style="" placeholder="pick you city">
                                                <option></option>
                                            </select>
                                        </div>
                                        <span style="color: red"><?php echo form_error('city') ? form_error('city') : '' ?></span>
                                    </div>
                                </div>
                                <div class="row form-group item-description">

                                    <label class="col-sm-3 label-title"><h6><?php echo trans('address') ?><span class="required">*</span></h6></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px">
                                        <input class="form-control login-form-input login-form-input-email" name="address"
                                                 style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               id="textarea" placeholder="Write The Address" ></input>
                                        <span style="color: red"><?php echo form_error('address') ? form_error('address') : '' ?></span>
                                    </div>
                                </div>
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title"><h6><?php echo trans('expiration') ?><span class="required">*</span></h6></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px;">

                                        <div class="select2-wrapper">
                                            <select name="expiration"  class="form-control select2" placeholder="Expiration">
                                                <option></option>

                                                <option value="1" >One week</option>
                                                <option value="2" >Two weeks</option>
                                                <option value="3" >Three weeks</option>
                                                <option value="4" >One Month</option>
                                                <option value="8" >Two Months</option>

                                            </select>
                                        </div>
                                        <span style="color: red"><?php echo form_error('expiration') ? form_error('expiration') : '' ?></span>
                                         <span style="color: grey;font-size: 12px;"><?php echo trans('job_span') ?></span>
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="section seller-info">
                                <h5><?php echo trans('how') ?></h5>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title"><h6><?php echo trans('choose') ?><span class="required">*</span></h6></label>
                                    <div class="col-sm-9">
                                    <div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" name="how" onclick="javascript:yesnoCheck();" value="1" id="phone" class="custom-control-input">
									  <label class="custom-control-label" for="phone"><?php echo trans('mobile') ?></label>
									</div>
									 <div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" name="how" onclick="javascript:yesnoCheck();" value="2" id="email" class="custom-control-input">
									  <label class="custom-control-label" for="email"><?php echo trans('email') ?></label>
									</div>
									 <div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" name="how" onclick="javascript:yesnoCheck();" value="3" id="both" class="custom-control-input">
									  <label class="custom-control-label" for="both"><?php echo trans('both') ?></label>
									</div>
									 <div class="custom-control custom-radio custom-control-inline">
									  <input type="radio" name="how" onclick="javascript:yesnoCheck();" value="4" id="link" class="custom-control-input">
									  <label class="custom-control-label" for="link"><?php echo LANG() == 'en' ? "My own link" : "الرابط الخاص بي" ?></label>
									</div>
									
									
                                    </div>
                                </div>
                                <div id="phoneyes" style="display:none">
                                    <div class="row form-group item-description">

                                        <label class="col-sm-3 label-title"><?php echo trans('mobile') ?><span class="required">*</span></label>
                                        <div class="col-sm-7" style="margin-bottom: 30px">
                                            <input class="form-control login-form-input login-form-input-email" name="phone"
                                                    style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                                   id="textarea" placeholder="Write The Phone" ></input>
                                            <span style="color: red"><?php echo form_error('mobile') ? form_error('mobile') : '' ?></span>
                                             <span style="color: grey;font-size: 12px;"><?php echo trans('phone_span') ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div id="emailyes" style="display:none">
                                    <div class="row form-group item-description">

                                        <label class="col-sm-3 label-title"><?php echo trans('email') ?><span class="required">*</span></label>
                                        <div class="col-sm-7" style="margin-bottom: 30px">
                                            <input class="form-control login-form-input login-form-input-email" name="email"
                                                     style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                                   id="textarea" placeholder="Write The Email" ></input>
                                            <span style="color: red"><?php echo form_error('email') ? form_error('email') : '' ?></span>
 											<span style="color: grey;font-size: 12px;"><?php echo trans('email_span') ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div id="linkyes" style="display:none">
                                    <div class="row form-group item-description">

                                        <label class="col-sm-3 label-title"><?php echo LANG() == 'en' ? "Link" : "الرابط" ?><span class="required">*</span></label>
                                        <div class="col-sm-7" style="margin-bottom: 30px">
                                            <input class="form-control login-form-input login-form-input-link" name="link"
                                                     style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                                   id="textarea" placeholder="Write your link" ></input>
                                            <span style="color: red"><?php echo form_error('link') ? form_error('link') : '' ?></span>
 											<span style="color: grey;font-size: 12px;"><?php echo trans('link_span') ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- section -->

                            <div class="checkbox section agreement">
                            	
                            	<div class="custom-control custom-checkbox">
										  <input type="checkbox" name="send" id="send" onchange="javascript:dis()" class="custom-control-input">
										  <label class="custom-control-label"  for="send">
										  	
										  	 By clicking “Post” you agree to Dubarah 
	                                	<a href="#" data-toggle="modal" data-target="#myModal">
	                                		Privacy Policy</a>  and  <a href="#" data-toggle="modal" data-target="#myModal1">Terms of Use</a>
	                                	 and that you have read our Data Use Policy,
	                                	  including our Cookie Use, and also agree to receive news, tips, and notification via email.
                                   
										  	
										  </label>
										</div>
                          		
                                <button type="submit" id="submit" class="btn btn-secondary" style="    margin-left: 19px;
   										 margin-top: 10px;" disabled="true">Post Your Dubarah</button>
                            
                            </div>



                        </fieldset>
                    </form><!-- form -->
                </div>
                <div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->

                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><?php echo trans('termsofuse') ?></h4>
                            </div>
                            <div class="modal-body">
                                <p><?php echo trans('terms') ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"><?php echo trans('privacy_policy') ?></h4>
                            </div>
                            <div class="modal-body">
                                <p><?php echo trans('privacy') ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div><!-- user-login -->


                <!-- quick-rules -->
             <!-- 
                <div class=" col-md-4">
                    <div class="header ">
                        <h4>Quick rules</h4>



                        <p class="lead">  Posting an ad on <a href="#">Dubarah.com</a> is free! However, all posts must follow our rules:</p>

                        <ul>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same Dubarah more than once.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not put your email or phone numbers in the title or description.</li>
                            <li>You are responsible about the content of the post, and any abuse report will hold you responsible.</li>

                        </ul>
                    </div> -->
                </div><!-- quick-rules -->
            </div><!-- photos-ad -->
        </div>
    </div><!-- container -->
</section><!-- main -->
<?php $this->load->view('jobs/common/footer'); ?>

<script type="text/javascript">

function function_name (data) {
  $("#skills").select2("val", $("#skills").select2("val").concat(data));
}




var arabicPattern = /[\u0600-\u06FF]/;

$('#text').bind('input propertychange', function(ev) {

    var text = ev.target.value;

    if (arabicPattern.test(text)) {
        // arabic;
        $('#text').css('direction', 'rtl')

    }


});
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
		
		
    	function dis() {
		  
		 if (document.getElementById('send').checked) {
    		 //var val = document.getElementById('submit');
				document.getElementById('submit').disabled = false;			
			}
		 else  {    
			
			   document.getElementById('submit').disabled = true; 
			   
			   }}
							
						
    $( ".select2" ).select2( {  maximumSelectionSize: 6 } );
    window.onload = function() {
        document.getElementById('phoneyes').style.display = 'none';
        document.getElementById('emailyes').style.display = 'none';
        //document.getElementById('img').style.display = 'none';
    }


    function yesnoCheck() {
        if (document.getElementById('phone').checked) {
            document.getElementById('phoneyes').style.display = 'block';
            document.getElementById('emailyes').style.display = 'none';
			document.getElementById('linkyes').style.display = 'none';
        }
        else if(document.getElementById('email').checked) {
            document.getElementById('emailyes').style.display = 'block';
            document.getElementById('phoneyes').style.display = 'none';
			document.getElementById('linkyes').style.display = 'none';
        } else if(document.getElementById('both').checked) {
            document.getElementById('emailyes').style.display = 'block';
            document.getElementById('phoneyes').style.display = 'block';
            document.getElementById('linkyes').style.display = 'none';

        } else if(document.getElementById('link').checked) {
            document.getElementById('linkyes').style.display = 'block';
            document.getElementById('phoneyes').style.display = 'none';
			document.getElementById('emailyes').style.display = 'none';
        }

    }
    // function show() {
// 
// 
        // document.getElementById('img').style.display = 'block';
// 
    // }
    function HandleBrowseClick(input_image)
    {
        var fileinput = document.getElementById(input_image);
        fileinput.click();
    }


    // $(".form_datetime").datetimepicker({
        // format: "dd mm yyyy"
    // });
    function sub(id) {
        $.ajax({
            url: '<?php echo base_url(); ?>sub/' + id,
            success: function(data) {
                if (data) {
                    $("#select2_2").html(data);
                };
            }
        });
    }
    function img(id) {
        $.ajax({
            url: '<?php echo base_url(); ?>newrole/' + id,
            success: function(data) {
                if (data) {
                    //alert(data);
                    $("#img").html(data);
                };
            }
        });

    }
    function citys(id) {
        $.ajax({
            url: '<?php echo base_url(); ?>get_city/' + id,
            success: function(data) {
                if (data) {
                    $("#select2_3").html(data);
                };
            }
        });
    }
 
 
    

</script>








</body>
</html>

