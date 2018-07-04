<?php 
                                    	
                                    	$value = 0;
                                    	 if(!empty($ad->link)):
										$value = 4;
										
										elseif(!empty($ad->phone) && empty($ad->email)):
											
											$value = 1;
										elseif(empty($ad->phone) && !empty($ad->email)):
											$value = 2;
										elseif(!empty($ad->phone) && !empty($ad->email)):		
											$value = 3;
										
										endif;
										echo $value;
										exit;
                   


$this->load->view('common/header'); ?>


<section id="main" class="clearfix ad-details-page">
    <div class="container">

        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url()?>"><?php echo trans('home') ?></a></li>
                <li>Edit Dubarah</li>
            </ol><!-- breadcrumb -->
            <h2 class="title">ADD Dubarah</h2>
        </div>


       

        <div class="adpost-details">
            <div class="row">
                <div class="col-md-8">
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()."edit_dubarah/$ad_id" ?>">
                        <fieldset>
                            <div class="section seller-info">
                                <h4><?php echo trans('jobs') ?></h4>

                                <div class="row form-group item-description">

                                    <label class="col-sm-3 label-title">
                                        <a href="">
										<span class="select">
											<img src='<?php echo base_url() ?>ass/images/icon/1.png' alt='Images' class='img-responsive'>
										</span>
                                        </a>

                                    </label>
                                    <div class="col-sm-7" style="margin-bottom: 30px">
                                        <label class=""><?php echo translate('subcategories') ?><span class="required">*</span></label>
                                        <select  class="form-control select2" name="sub_id" id="" placeholder="">
                                            <option></option>
                                            <?php foreach ($sub as $row) { ?>
                                                <option value='<?php echo $row->category_id; ?>' <?php echo $row->category_id == $ad->category_id ? 'selected' : '' ?>><?php echo $row->english_name;?></option>
                                            <?php    }?>


                                        </select>
                                      
                                    </div>
                                    <span style="color: red"><?php echo form_error('sub_id') ? form_error('sub_id') : '' ?></span>
                                </div>
                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title"><?php echo translate('title') ?><span class="required">*</span></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px">
                                        <input type="text"  name="title" class="form-control login-form-input login-form-input-email" value="<?php echo set_value('title') ? set_value('title') : $ad->title ?>"
                                               style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               placeholder="Ex. Graphic Designer">
                                    </div>
                                    <span><?php echo form_error('title') ? form_error('title') : '' ?></span>
                                </div>
                                <div class="row form-group item-description">

                                    <label class="col-sm-3 label-title"><?php echo trans('job_type') ?><span class="required">*</span></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px;">
										 <div class="col-sm-9"style="margin-bottom: 30px">
                                          <?php foreach ($job_type as $type): ?>
                                            
                                        <input type="radio" name="job_type"  value="<?php echo $type->type_id ?>" id="<?php echo $type->type_name ?>">
                                        <label for="<?php echo $type->type_name ?>"><?php echo lang()=='en' ?  $type->type_name : $type->type_name_ar ?></label>
                                            
                                        <?php endforeach ?>
                                    </div>
                                        <span><?php echo form_error('job_type') ? form_error('job_type') : '' ?></span>
                                    </div>
                                </div>
                               

                                <div class="row form-group item-description">

                                    <label class="col-sm-3 label-title"><?php echo trans('description') ?><span class="required">*</span></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px;">
                                        <textarea name="description" class="form-control" rows="6" style=""><?php echo set_value('description') ? set_value('description') : $ad->description ?></textarea>

                                        <span><?php echo form_error('description') ? form_error('description') : '' ?></span>
                                    </div>
                                </div>
                					 <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title"><?php echo translate('employer') ?><span class="required">*</span></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px">
                                        <input class="form-control login-form-input login-form-input-email" name="employer"
                                        		 value="<?php echo set_value('employer') ? set_value('employer') : $ad->employer ?>"
                                                 style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               id="textarea"  placeholder="Ex. Your company name" ></input>
                                        <span><?php echo form_error('employer') ? form_error('employer') : '' ?></span>
                                    </div>

                                </div>

                                <div class="row form-group add-image"style="margin-bottom: 30px">

                                    <label class="col-sm-3 label-title"><?php echo translate('logo') ?></label>



                                    <div class="col-sm-3" style="margin-bottom: 50px" >

                                        <div class="upload-section" >
                                            <label class="fa fa-upload" for="input-image-hidden" style="margin-left: 11px;">
                                                <input type="file"  id="input-image-hidden" 
                                                onchange="document.getElementById('image-preview').src = window.URL.createObjectURL(this.files[0]),show()"   id="up" name="fs_image1" style="display:none"/>
                                            </label>
                                        </div>
                                    </div>
                                    <label class="col-sm-3 upload-image" for="upload-image-one" id="img" style="margin-bottom: 28px;">
                                        <img  src='<?php echo base_url() ?>' alt='Images' class='img-responsive'  id="image-preview" width="150" height="150" />
                                    </label>
                                    <span><?php echo form_error('logo') ? form_error('logo') : '' ?></span>
                                </div>

                            </div>


                           

                            <div class="section seller-info">
                                

  							<h4><?php echo trans('Job_Preferences') ?><span style="font-size: 12px;color: red;"> <br/><?php echo trans('Only') ?></span></h4>

                                <div class="row form-group">
                                    <label class="col-sm-3 label-title"><?php echo trans('Who_can') ?><span class="required">*</span></label>
                                    <div class="col-sm-9"style="margin-bottom: 30px; margin-top: 12px;">
                                        <input type="radio" name="gender"  value="3" id="any" <?php echo $ad->gender == 3 ? 'checked' : '' ?>>
                                        <label for="any"><?php echo trans('any') ?></label>
                                        <input type="radio" name="gender"  value="1" id="male" <?php echo $ad->gender == 1 ? 'checked' : '' ?>>
                                        <label for="male"><?php echo trans('male') ?></label>
                                        <input type="radio" name="gender"  value="2" id="female" <?php echo $ad->gender == 2 ? 'checked' : '' ?>>
                                        <label for="female"><?php echo trans('female') ?></label>
  										
                                    </div>
                                </div>
                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title"><?php echo trans('re_requirement') ?><span class="required">*</span></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px">

                                        <div class="select2-wrapper">
                                            <select class="form-control select2" placeholder="Pick your Skills"  multiple="multiple" name="skills[]">
                                                <option></option>
                                                <?php foreach ($skills->result() as $skill) {?>
                                                    <option value="<?php echo $skill->	skill_id ?>" <?php echo in_array($skill->skill_id, $ad_skills) ? 'selected' : '' ?>><?php echo $skill->skill_name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <span><?php echo form_error('skills') ? form_error('skills') : '' ?></span>
                                    </div>
                                </div>

							                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title"><?php echo trans('country') ?><span class="required">*</span></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px;">

                                        <div class="select2-wrapper">
                                            <select name="country" onchange="citys(this.value)" class="form-control select2" placeholder="First pick your country">
                                                <option></option>
                                                <?php foreach ($countrys->result() as $country) {?>
                                                    <option value="<?php echo $country->country_id ?>" <?php echo $country->country_id == $ad->country ? 'selected' : '' ?>><?php echo $country->country_english_name ?></option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                        <span><?php echo form_error('country') ? form_error('country') : '' ?></span>
                                    </div>
                                </div>
                                <div class="row form-group item-br">
                                    <label class="col-sm-3 label-title"><?php echo trans('city') ?><span class="required">*</span></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px;">

                                        <div class="select2-wrapper">
                                            <select name="city" id="select2_3" class="form-control select2" style="" placeholder="pick you city">
                                                <option></option>
                                                <?php foreach ($cities as $city): ?>
                                                    <option value="<?php echo $city->city_id ?>" <?php echo $city->city_id == $ad->city ? 'selected' : '' ?>><?php echo $city->city_english_name ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                        <span><?php echo form_error('city') ? form_error('city') : '' ?></span>
                                    </div>
                                </div>
                                <div class="row form-group item-description">

                                    <label class="col-sm-3 label-title"><?php echo trans('address') ?><span class="required">*</span></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px">
                                        <input class="form-control login-form-input login-form-input-email" name="address"
                                        		value="<?php echo set_value('address') ? set_value('address') : $ad->address ?>"
                                                 style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               id="textarea" placeholder="Write The Address" ></input>
                                        <span><?php echo form_error('address') ? form_error('address') : '' ?></span>
                                    </div>
                                </div>
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title"><?php echo trans('expiration') ?><span class="required">*</span></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px;">

                                        <div class="select2-wrapper">
                                            <select name="expiration"  class="form-control select2" placeholder="Expiration">
                                                <option></option>

                                                <option value="1" <?php echo $ad->expiration == 1 ? 'selected' : '' ?>>One week</option>
                                                <option value="2" <?php echo $ad->expiration == 2 ? 'selected' : '' ?>>Two weeks</option>
                                                <option value="3" <?php echo $ad->expiration == 3 ? 'selected' : '' ?>>Three weeks</option>
                                                <option value="4" <?php echo $ad->expiration == 4 ? 'selected' : '' ?>>One Month</option>
                                                <option value="8" <?php echo $ad->expiration == 8 ? 'selected' : '' ?>>Two Months</option>

                                            </select>
                                        </div>
                                        <span><?php echo form_error('expiration') ? form_error('expiration') : '' ?></span>
                                         <span style="color: grey;font-size: 12px;"><?php echo trans('job_span') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="section seller-info">
                                <h4><?php echo trans('how') ?></h4>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title"><?php echo trans('choose') ?><span class="required">*</span></label>
                                    <div class="col-sm-9">
                                    	
                                    	<?php
                                    	
                                    	$value = 0;
                                    	 if(!empty($ad->link)):
										$value = 4;
										
										elseif(!empty($ad->phone) && empty($ad->email)):
											
											$value = 1;
										elseif(empty($ad->phone) && !empty($ad->email)):
											$value = 2;
										elseif(!empty($ad->phone) && !empty($ad->email)):		
											$value = 3;
										
										endif; ?>
                   
                                        <input type="radio" name="how" onclick="javascript:yesnoCheck();" <?php echo $ad->phone && !$ad->email ? 'checked' : '' ?> value="1" id="phone">
                                        <label for="phone"><?php echo trans('mobile') ?></label>
                                        <input type="radio" name="how" onclick="javascript:yesnoCheck();" <?php echo !$ad->phone && $ad->email ? 'checked' : '' ?> value="2" id="email">
                                        <label for="email"><?php echo trans('email') ?></label>
                                        <input type="radio" name="how"onclick="javascript:yesnoCheck();" <?php echo $ad->phone && $ad->email ? 'checked' : '' ?> value="3" id="both">
                                        <label for="both"><?php echo trans('both') ?></label>
                                        <input type="radio" name="how" onclick="javascript:yesnoCheck();"  value="4" id="link" <?php  if($ad->link): echo 'checked'; endif; ?>>
                                        <label for="link"><?php echo LANG() == 'en' ? "My own link" : "الرابط الخاص بي" ?></label>
                                    </div>
                                </div>
                                <div id="phoneyes" style="display:none">
                                    <div class="row form-group item-description">

                                        <label class="col-sm-3 label-title"><?php echo trans('mobile') ?><span class="required">*</span></label>
                                        <div class="col-sm-7" style="margin-bottom: 30px">
                                            <input class="form-control login-form-input login-form-input-email" name="phone"
                                            		value="<?php echo set_value('phone') ? set_value('phone') : $ad->phone ?>"
                                                    style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                                   id="textarea" placeholder="Write The Phone" ></input>
                                            <span><?php echo form_error('mobile') ? form_error('mobile') : '' ?></span>
                                             <span style="color: grey;font-size: 12px;"><?php echo trans('phone_span') ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div id="emailyes" style="display:none">
                                    <div class="row form-group item-description">

                                        <label class="col-sm-3 label-title"><?php echo trans('email') ?><span class="required">*</span></label>
                                        <div class="col-sm-7" style="margin-bottom: 30px">
                                            <input class="form-control login-form-input login-form-input-email" name="email"
                                            		value="<?php echo set_value('email') ? set_value('email') : $ad->email ?>"
                                                     style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                                   id="textarea" placeholder="Write The Email" ></input>
                                            <span><?php echo form_error('email') ? form_error('email') : '' ?></span>
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
                                <label for="send" class="">
                                    <input type="checkbox" name="send" id="send" onchange="javascript:dis()">
                                    By clicking “Post” you agree to Dubarah 
	                                	<a href="#" data-toggle="modal" data-target="#myModal">
	                                		Privacy Policy</a>  and  <a href="#" data-toggle="modal" data-target="#myModal">Terms of Use</a>
	                                	 and that you have read our Data Use Policy,
	                                	  including our Cookie Use, and also agree to receive news, tips, and notification via email.
                                   
                                    
                                </label>
                                <button type="submit" id="submit" class="btn btn-primary" disabled="true">Edit Your Job</button>
                            </div>



                        </fieldset>
                    </form><!-- form -->
                </div>
                                   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
            </div><!-- user-login -->


                <!-- quick-rules -->
                <div class="col-md-4">
                    <div class="section quick-rules">
                        <h4>Quick rules</h4>



                        <p class="lead">  Posting an ad on <a href="#">Dubarah.com</a> is free! However, all posts must follow our rules:</p>

                        <ul>
                            <li>Make sure you post in the correct category.</li>
                            <li>Do not post the same Dubarah more than once.</li>
                            <li>Do not upload pictures with watermarks.</li>
                            <li>Do not put your email or phone numbers in the title or description.</li>
                            <li>You are responsible about the content of the post, and any abuse report will hold you responsible.</li>

                        </ul>
                    </div>
                </div><!-- quick-rules -->
            </div><!-- photos-ad -->
        </div>
    </div><!-- container -->
</section><!-- main -->
<?php $this->load->view('common/footer'); ?>

<script>
  							
		
	
    	
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
        document.getElementById('img').style.display = 'none';
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
    function show() {


        document.getElementById('img').style.display = 'block';

    }
    function HandleBrowseClick(input_image)
    {
        var fileinput = document.getElementById(input_image);
        fileinput.click();
    }


    $(".form_datetime").datetimepicker({
        format: "dd mm yyyy"
    });
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
<script src="<?php echo base_url()?>ass/js/dropzone.min.js"></script>
	