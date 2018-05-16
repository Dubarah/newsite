<?php $this->load->view('common/header'); ?>
<link href="<?php echo base_url() ?>ass/css/summernote/summernote.css" rel="stylesheet">


<section id="main" class="clearfix ad-details-page">
    <div class="container">

        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url()?>"><?php echo trans('home') ?></a></li>
                <li><?php echo trans('add_dubarah') ?></li>
            </ol><!-- breadcrumb -->
            <h2 class="title"></h2>
        </div>

        <div class="adpost-details">
            <div class="row">
                <div class="col-md-8">
                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>add_dubarah">
                        <fieldset>
                            <div class="section seller-info">
                                <h4><?php echo trans('jobs') ?></h4>
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title">
                                        <a href="">
										<span class="select">
											<img src='<?php echo base_url(); ?>ass/images/icon/1.png' alt='Images' class='img-responsive'>
										</span>
                                        </a>
                                    </label>
                                    <div class="col-sm-7" style="margin-bottom: 30px">
                                        <label class=""><?php echo translate('subcategories') ?><span class="required">*</span></label>
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
                                    <label class="col-sm-3 label-title"><?php echo translate('title') ?><span class="required">*</span></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px">
                                        <input type="text"  name="title" class="form-control login-form-input login-form-input-email"
                                               style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               placeholder="Ex. Graphic Designer">
                                    </div>
                                    <span style="color: red"><?php echo form_error('title') ? form_error('title') : '' ?></span>
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
                                        <span style="color: red"><?php echo form_error('job_type') ? form_error('job_type') : '' ?></span>
                                    </div>
                                </div>
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title"><?php echo trans('description') ?><span class="required">*</span></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px;">
                                        <!--<textarea name="description" class="form-control" rows="6" style=""></textarea>-->
                                        <div id="summernote"></div>
                                        <span style="color: red"><?php echo form_error('description') ? form_error('description') : '' ?></span>
                                    </div>
                                </div>
                					 <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title"><?php echo translate('employer') ?><span class="required">*</span></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px">
                                        <input class="form-control login-form-input login-form-input-email" name="employer"
                                                 style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               id="textarea"  placeholder="Ex. Your company name" ></input>
                                        <span style="color: red"><?php echo form_error('employer') ? form_error('employer') : '' ?></span>
                                    </div>
                                </div>
                                <div class="row form-group add-image"style="margin-bottom: 30px">
                                    <label class="col-sm-3 label-title"><?php echo translate('logo') ?></label>
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
                            <div class="section seller-info">
  							<h4><?php echo trans('Job_Preferences') ?><span style="font-size: 12px;color: red;"> <br/><?php echo trans('Only') ?></span></h4>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title"><?php echo trans('Who_can') ?><span class="required">*</span></label>
                                    <div class="col-sm-9"style="margin-bottom: 30px; margin-top: 12px;">
                                        <input type="radio" name="gender"  value="3" id="any" checked="checked">
                                        <label for="any"><?php echo trans('any') ?></label>
                                        <input type="radio" name="gender"  value="1" id="male">
                                        <label for="male"><?php echo trans('male') ?></label>
                                        <input type="radio" name="gender"  value="2" id="female">
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
                                                    <option value="<?php echo $skill->	skill_id ?>" ><?php echo $skill->skill_name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <span style="color: red"><?php echo form_error('skills[]') ? form_error('skills[]') : '' ?></span>
                                    </div>
                                </div>
							 <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title"><?php echo trans('country') ?><span class="required">*</span></label>
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
                                    <label class="col-sm-3 label-title"><?php echo trans('city') ?><span class="required">*</span></label>
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

                                    <label class="col-sm-3 label-title"><?php echo trans('address') ?><span class="required">*</span></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px">
                                        <input class="form-control login-form-input login-form-input-email" name="address"
                                                 style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               id="textarea" placeholder="Write The Address" ></input>
                                        <span style="color: red"><?php echo form_error('address') ? form_error('address') : '' ?></span>
                                    </div>
                                </div>
                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title"><?php echo trans('expiration') ?><span class="required">*</span></label>
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
                                <h4><?php echo trans('how') ?></h4>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title"><?php echo trans('choose') ?><span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="radio" name="how" onclick="javascript:yesnoCheck();" value="1" id="phone">
                                        <label for="phone"><?php echo trans('mobile') ?></label>
                                        <input type="radio" name="how" onclick="javascript:yesnoCheck();" value="2" id="email">
                                        <label for="email"><?php echo trans('email') ?></label>
                                        <input type="radio" name="how" onclick="javascript:yesnoCheck();" value="3" id="both">
                                        <label for="both"><?php echo trans('both') ?></label>
                                        <input type="radio" name="how" onclick="javascript:yesnoCheck();" value="4" id="link">
                                        <label for="link"><?php echo LANG() == 'en' ? "My own link" : "الرابط الخاص بي" ?></label>
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
                                <label for="send" class="">
                                    <input type="checkbox" name="send" id="send" onchange="javascript:dis()">
                                    By clicking “Post” you agree to Dubarah 
	                                	<a href="#" data-toggle="modal" data-target="#myModal">
	                                		Privacy Policy</a>  and  <a href="#" data-toggle="modal" data-target="#myModal1">Terms of Use</a>
	                                	 and that you have read our Data Use Policy,
	                                	  including our Cookie Use, and also agree to receive news, tips, and notification via email.
                                   
                                    
                                </label>
                                <button type="submit" id="submit" class="btn btn-primary" disabled="true">Post Your Dubarah</button>
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

	<script src="<?php echo base_url() ?>ass/css/summernote/summernote.js"></script>
<script src="<?php echo base_url() ?>ass/css/summernote/summernote-ko-KR.js"></script>
<script type="text/javascript">
	 $(function () {
    $('#summernote').summernote({
      tabsize: 2,
      height: 100
    });
  });
  $( document ).ready(function() {
    $(".note-codable").attr("name", "description");
    
$( ".panel-body" ).blur(function() {
    $(".note-codable").val($(".panel-body").html());
   // alert($(".panel-body").html());
  });
});


/*
$( ".note-editable" ).change(function() {
  alert($( ".note-editable" ).html());
});*/
  
</script>