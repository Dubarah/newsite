<?php $this->load->view('common/header'); ?>
<link href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url() ?>assets/css/summernote/summernote.css" rel="stylesheet">
<div class="row">
	<div class="col-md-8">
		<form method="post" enctype="multipart/form-data" action="
			<?php echo base_url()."edit_dubarah/$ad_id" ?>">
				<div class="section seller-info">
					<h4>
						Edit job
					</h4>
					<div class="row form-group item-description">
						<label class="col-sm-3 label-title">
							<a href="">
								<span class="select">
									<img src='<?php echo website() ?>ass/images/icon/1.png' alt='Images' class='img-responsive'>
								</span>
							</a>
						</label>
						<div class="col-sm-7" style="margin-bottom: 30px">
							<label class="">
								Category
								<span class="required">*</span>
							</label>
							<select  class="form-control select2" name="sub_id" id="" placeholder="">
								<option></option>
								<?php foreach ($sub as $row) { ?>
								<option value='
									<?php echo $row->category_id; ?>' 
									<?php echo $row->category_id == $ad->category_id ? 'selected' : '' ?>>
									<?php echo $row->english_name;?>
								</option>
								<?php    }?>
							</select>
						</div>
						<span style="color: red">
							<?php echo form_error('sub_id') ? form_error('sub_id') : '' ?>
						</span>
					</div>
					<div class="row form-group brand-name">
						<label class="col-sm-3 label-title">
							Title
							<span class="required">*</span>
						</label>
						<div class="col-sm-7"style="margin-bottom: 30px">
							<input type="text"  name="title" class="form-control login-form-input login-form-input-email" value="<?php echo set_value('title') ? set_value('title') : $ad->title ?>" style="background-image:url('<?php echo base_url()?>ass/iob.png');" placeholder="Ex. Graphic Designer">
						</div>
						<span>
							<?php echo form_error('title') ? form_error('title') : '' ?>
						</span>
					</div>
					<div class="row form-group item-description">
						<label class="col-sm-3 label-title">
							Job type
							<span class="required">*</span>
						</label>
						<div class="col-sm-7"style="margin-bottom: 30px;">
							<div class="col-sm-9"style="margin-bottom: 30px">
								<?php foreach ($job_type as $type): ?>
								<input type="radio" name="job_type"  value="<?php echo $type->type_id ?>" id="<?php echo $type->type_name ?>" <?php echo $ad->job_type == $type->type_id ? "checked" : ''; ?>>
								<label for="<?php echo $type->type_name ?>">
									<?php echo $type->type_name ?>
								</label>
								<?php endforeach ?>
							</div>
							<span>
								<?php echo form_error('job_type') ? form_error('job_type') : '' ?>
							</span>
						</div>
					</div>
					<div class="row form-group item-description">
						<label class="col-sm-3 label-title">
							Description
							<span class="required">*</span>
						</label>
						<div class="col-sm-7"style="margin-bottom: 30px;">
							<div id="summernote"></div>
							<div name="description" class="form-control" style="">
								<?php echo set_value('description') ? set_value('description') : $ad->description ?>
							</div>
							<span>
								<?php echo form_error('description') ? form_error('description') : '' ?>
							</span>
						</div>
					</div>
					<div class="row form-group item-description">
						<label class="col-sm-3 label-title">
							Employer
							<span class="required">*</span>
						</label>
						<div class="col-sm-7" style="margin-bottom: 30px">
							<input class="form-control login-form-input login-form-input-email" name="employer"
                            		 value="
								<?php echo set_value('employer') ? set_value('employer') : $ad->employer ?>"
                                     style="background-image:url('
								<?php echo base_url()?>ass/iob.png');"
                                   id="textarea"  placeholder="Ex. Your company name" >
							</input>
							<span>
								<?php echo form_error('employer') ? form_error('employer') : '' ?>
							</span>
						</div>
					</div>
					<div class="row form-group add-image"style="margin-bottom: 30px">
						<label class="col-sm-3 label-title">
							Logo
						</label>
						<div class="col-sm-3" style="margin-bottom: 50px" >
							<div class="upload-section" >
								<label class="fa fa-upload" for="input-image-hidden" style="margin-left: 11px;">
									<input type="file"  id="input-image-hidden" onchange="document.getElementById('image-preview').src = window.URL.createObjectURL(this.files[0]),show()"   id="up" name="fs_image1" style="display:none"/>
								</label>
							</div>
						</div>
						<label class="col-sm-3 upload-image" for="upload-image-one" id="img" style="margin-bottom: 28px;">
							<img  src='' alt='Images' class='img-responsive'  id="image-preview" width="150" height="150" />
						</label>
						<span>
							<?php echo form_error('logo') ? form_error('logo') : '' ?>
						</span>
					</div>
				</div>
				<div class="section seller-info">
					<h4>
						Job Preferences
						<span style="font-size: 12px;color: red;">
							<br/>
							Only
						</span>
					</h4>
					<div class="row form-group">
						<label class="col-sm-3 label-title">
							Who can apply
							<span class="required">*</span>
						</label>
						<div class="col-sm-9"style="margin-bottom: 30px; margin-top: 12px;">
							<input type="radio" name="gender"  value="3" id="any" 
							<?php echo $ad->gender == 3 ? 'checked' : '' ?>>
							<label for="any">
								Any
							</label>
							<input type="radio" name="gender"  value="1" id="male" 
								<?php echo $ad->gender == 1 ? 'checked' : '' ?>>
								<label for="male">
									Male
								</label>
								<input type="radio" name="gender"  value="2" id="female" <?php echo $ad->gender == 2 ? 'checked' : '' ?>>
								<label for="female">
									Female
								</label>
							</div>
						</div>
						<div class="row form-group brand-name">
							<label class="col-sm-3 label-title">
								Skills
								<span class="required">*</span>
							</label>
							<div class="col-sm-7" style="margin-bottom: 30px">
								<div class="select2-wrapper">
									<select class="form-control select2" placeholder="Pick your Skills"  multiple="multiple" name="skills[]">
										<option></option>
										<?php foreach ($skills->result() as $skill) {?>
										<option value="
											<?php echo $skill->	skill_id ?>" 
											<?php echo in_array($skill->skill_id, $ad_skills) ? 'selected' : '' ?>>
											<?php echo $skill->skill_name ?>
										</option>
										<?php } ?>
									</select>
								</div>
								<span>
									<?php echo form_error('skills') ? form_error('skills') : '' ?>
								</span>
							</div>
						</div>
						<div class="row form-group item-description">
							<label class="col-sm-3 label-title">
								Country
								<span class="required">*</span>
							</label>
							<div class="col-sm-7" style="margin-bottom: 30px;">
								<div class="select2-wrapper">
									<select name="country" onchange="citys(this.value)" class="form-control select2" placeholder="First pick your country">
										<option></option>
										<?php foreach ($countrys->result() as $country) {?>
										<option value="
											<?php echo $country->country_id ?>" 
											<?php echo $country->country_id == $ad->country ? 'selected' : '' ?>>
											<?php echo $country->country_english_name ?>
										</option>
										<?php } ?>
									</select>
								</div>
								<span>
									<?php echo form_error('country') ? form_error('country') : '' ?>
								</span>
							</div>
						</div>
						<div class="row form-group item-br">
							<label class="col-sm-3 label-title">
								City
								<span class="required">*</span>
							</label>
							<div class="col-sm-7" style="margin-bottom: 30px;">
								<div class="select2-wrapper">
									<select name="city" id="select2_3" class="form-control select2" style="" placeholder="pick you city">
										<option></option>
										<?php foreach ($cities as $city): ?>
										<option value="
											<?php echo $city->city_id ?>" 
											<?php echo $city->city_id == $ad->city ? 'selected' : '' ?>>
											<?php echo $city->city_english_name ?>
										</option>
										<?php endforeach ?>
									</select>
								</div>
								<span>
									<?php echo form_error('city') ? form_error('city') : '' ?>
								</span>
							</div>
						</div>
						<div class="row form-group item-description">
							<label class="col-sm-3 label-title">
								Address
								<span class="required">*</span>
							</label>
							<div class="col-sm-7" style="margin-bottom: 30px">
								<input class="form-control login-form-input login-form-input-email" name="address"
                    		value="
									<?php echo set_value('address') ? set_value('address') : $ad->address ?>"
                             style="background-image:url('
									<?php echo base_url()?>ass/iob.png');"
                           id="textarea" placeholder="Write The Address" >
								</input>
								<span>
									<?php echo form_error('address') ? form_error('address') : '' ?>
								</span>
							</div>
						</div>
						<div class="row form-group item-description">
							<label class="col-sm-3 label-title">
								Expiration
								<span class="required">*</span>
							</label>
							<div class="col-sm-7" style="margin-bottom: 30px;">
								<div class="select2-wrapper">
									<select name="expiration"  class="form-control select2" placeholder="Expiration">
										<option></option>
										<option value="1" 
											<?php echo $ad->expiration == 1 ? 'selected' : '' ?>>One week
										</option>
										<option value="2" 
											<?php echo $ad->expiration == 2 ? 'selected' : '' ?>>Two weeks
										</option>
										<option value="3" 
											<?php echo $ad->expiration == 3 ? 'selected' : '' ?>>Three weeks
										</option>
										<option value="4" 
											<?php echo $ad->expiration == 4 ? 'selected' : '' ?>>One Month
										</option>
										<option value="8" 
											<?php echo $ad->expiration == 8 ? 'selected' : '' ?>>Two Months
										</option>
									</select>
								</div>
								<span>
									<?php echo form_error('expiration') ? form_error('expiration') : '' ?>
								</span>
								<span style="color: grey;font-size: 12px;">
									<?php echo trans('job_span') ?>
								</span>
							</div>
						</div>
					</div>
					<div class="section seller-info">
						<h4>
							How to apply
						</h4>
						<div class="row form-group">
							<label class="col-sm-3 label-title">
								<?php echo trans('choose') ?>
								<span class="required">*</span>
							</label>
							<div class="col-sm-9">
								<input type="radio" name="how" onclick="javascript:yesnoCheck();" value="1" id="phone">
								<label for="phone">
									Mobile
								</label>
								<input type="radio" name="how" onclick="javascript:yesnoCheck();" value="2" id="email">
								<label for="email">
									Email
								</label>
								<input type="radio" name="how" onclick="javascript:yesnoCheck();" value="3" id="both">
								<label for="both">
									Both
								</label>
							</div>
						</div>
						<div id="phoneyes" style="">
							<div class="row form-group item-description">
								<label class="col-sm-3 label-title">
									Mobile
									<span class="required">*</span>
								</label>
								<div class="col-sm-7" style="margin-bottom: 30px">
									<input class="form-control login-form-input login-form-input-email" name="phone" value="<?php echo set_value('phone') ? set_value('phone') : $ad->phone ?>" style="background-image:url('<?php echo base_url()?>ass/iob.png');" id="textarea" placeholder="Write The Phone" >
									</input>
									<span>
										<?php echo form_error('mobile') ? form_error('mobile') : '' ?>
									</span>
									<span style="color: grey;font-size: 12px;">
										
									</span>
								</div>
							</div>
						</div>
						<div id="emailyes" style="">
							<div class="row form-group item-description">
								<label class="col-sm-3 label-title">
									Email
									<span class="required">*</span>
								</label>
								<div class="col-sm-7" style="margin-bottom: 30px">
									<input class="form-control login-form-input login-form-input-email" name="email" value="<?php echo set_value('email') ? set_value('email') : $ad->email ?>" style="background-image:url('<?php echo base_url()?>ass/iob.png');" id="textarea" placeholder="Write The Email" >
									<span>
										<?php echo form_error('email') ? form_error('email') : '' ?>
									</span>
									<span style="color: grey;font-size: 12px;">
										<?php echo trans('email_span') ?>
									</span>
								</div>
							</div>
						</div>
					</div>
													<!-- section -->
					<div class="checkbox section agreement">
						<button type="submit" id="submit" class="btn btn-primary">Edit</button>
						<a class="btn btn-danger" href="<?php echo base_url() ?>advertisments">Cancel</a>
						<a class="btn btn-danger" href="<?php echo base_url()."delete_ad/$ad->advertisement_id/1" ?>">Unpublish</a>
					</div>
				</form>
				<!-- form -->
			</div>
			
			
		</div>
										<!-- photos-ad -->


<?php $this->load->view('common/footer'); ?>
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/form-select2.js"></script>

	<script src="<?php echo base_url() ?>assets/css/summernote/summernote.js"></script>
<script type="text/javascript">
	 $(function () {
    $('#summernote').summernote({
      tabsize: 2,
      height: 100
    });
  });
$( document ).ready(function() {
    $(".note-codable").attr("name", "description");
    $(".note-codable").attr("hidden", "hidden");
    $(".note-editable").html('<?php /*echo $ad->description*/ ?>');
    
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