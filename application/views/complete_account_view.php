

<?php $this->load->view('common/header'); ?>
			  <?php if ($this->session->userdata('suc_message')) { ?>
		<div class="alert alert-success alert-dismissible" <?php echo LANG() == 'en' ? "" : 'style="text-align: right"' ?>>
                  <button class="close" <?php echo LANG() == 'en' ? "" : 'style="float: left"' ?> data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <?php echo $this->session->userdata('suc_message'); $this->session->unset_userdata('suc_message') ?>
                  </div>
	
	<?php } elseif ($this->session->userdata('err_message')) { ?>
	<div class="alert alert-danger" <?php echo LANG() == 'en' ? "" : 'style="text-align: right"' ?>>
		<button type="button" class="close" <?php echo LANG() == 'en' ? "" : 'style="float: left"' ?> data-dismiss="alert">×</button>
		<?php echo $this->session->userdata('err_message'); $this->session->unset_userdata('err_message') ?>
	</div>
	<?php } ?>
<?php /*?>

<section id="main" class="clearfix user-page">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-7 col-sm-offset-2">

                <!--      Wizard container        -->
                 <div class="user-account">
                <div class="wizard-container">
            	
                    <div class="card wizard-card ct-wizard-orange" id="wizardProfile">
                    
                        <form method="post" action="<?php echo base_url().'complete_account' ?>">
                            <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->
								
                                            
                             <div class="col-md-12">
                             <div class="row">
                            <div class="wizard-header col-md-8">
                                <h3>
                                    <b><?php echo trans('complete') ?></b> <?php echo trans('ur_profile') ?> <br>
                                    <small><?php echo trans('fill_ur_data') ?></small>
                                </h3>
                            </div>
                            
                              <div class="dubarah-icon-head col-md-4">
                                            <div class="picture-container">
                                                <div class="picture">
                                                    <img src="<?php echo base_url()?>ass/images/dub-icon.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                    <input type="file" id="wizard-picture">
                                                </div>
                                                <h6><?php echo trans('choose_photo') ?></h6>
                                            </div>
                                        </div>
							</div>
							</div> 
							<div class="col-md-12">
							<div class="row"> 
                            <ul>
                                <li><a href="#about" data-toggle="tab"><?php echo trans('basic_info') ?></a></li>
                                <li><a href="#account" data-toggle="tab"><?php echo trans('account') ?></a></li>
                            </ul>
                            </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane" id="about">
                                    <div class="row">
                                        <h4 class="info-text"> <?php echo trans('fill_ur_basic_info') ?></h4>
                                      
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style="float: <?php echo LANG() == 'en' ? 'left' : 'right'; ?>"><?php echo trans('firstname') ?></label>
                                                <input name="firstname" value="<?php echo set_value('firstname') ? set_value('firstname') : $user->username ?>" type="text" class="form-control" placeholder="<?php echo trans('firstname') ?>">
                                            </div>
                                            <div class="form-group">
                                                <label style="float: <?php echo LANG() == 'en' ? 'left' : 'right'; ?>"><?php echo trans('last_name') ?></small></label>
                                                <input name="lastname" value="<?php echo set_value('lastname') ? set_value('lastname') : $user->lastname ?>" type="text" class="form-control" placeholder="<?php echo trans('last_name') ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <label style="float: <?php echo LANG() == 'en' ? 'left' : 'right'; ?>"><?php echo trans('email') ?></label>
                                                <input name="email" value="<?php echo set_value('email') ? set_value('email') : $user->email ?>" type="email" class="form-control" placeholder="exam@etc.com">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label style="float: <?php echo LANG() == 'en' ? 'left' : 'right'; ?>"><?php echo trans('password') ?></small></label>
                                                <input name="password" type="password" class="form-control" placeholder="<?php echo trans('password') ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-pane" id="account">
                                    <div class="form-group field-first_name required col-md-12">
                            <label class="control-label" for="first_name"></label>
                           <div class="form-group">
                                                <label class="control-label" for="" style="color:grey;"><?php echo trans('country') ?> <small></small></label>
                                                <div class="select2-wrapper">
                                                    <select name="country" onchange="citys(this.value)" class="form-control select2" placeholder="">
                                                        <option></option>
                                                        <?php foreach ($countrys->result() as $country) {?>
                                                            <option value="<?php echo $country->country_id ?>">
                                                            	<?php echo $country->country_english_name ?>
                                                            </option>
                                                        <?php } ?>

                                                    </select>
                                                </div>
                                            </div>
                          
                          
                            <p class="help-block help-block-error"></p>
                        </div>
                        <div class="form-group field-last_name required col-md-12">
                            <label class="control-label" for="last_name" style="color:grey;"><?php echo trans('city') ?></label>
                        
                                               
                                                <div class="select2-wrapper">
                                                    <select name="city" id="select2_2" class="form-control select2" placeholder="">
                                                        <option></option>
                                                    </select>
                                                </div>

                            <p class="help-block help-block-error"></p>
                                            </div>

                    
                        <div class="form-group field-last_name required col-md-12">
                             <label  class="control-label" for="" style="color:grey;"><?php echo trans('languages') ?></label>
                                                <div class="select2-wrapper">
                                                    <select name="langs[]" class="form-control select2" placeholder=""  multiple="multiple">
                                                        <option></option>
                                                        <?php foreach ($langs->result() as $lang) {?>
                                                            <option value="<?php echo $lang->id ?>" ><?php echo $lang->lang_name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>

                            <p class="help-block help-block-error"></p>
                        </div>

                        <div class="form-group field-last_name required col-md-12">
                            <label class="control-label" for="" style="color:grey;"><?php echo trans('skills') ?> <small></small></label>
                            <div class="select2-wrapper">
                                <select class="form-control select2" placeholder="Pick your Skills"  multiple="multiple" name="skills[]">
                                    <option></option>
                                    <?php foreach ($skills->result() as $skill) {?>
                                        <option value="<?php echo $skill->skill_id ?>" ><?php echo $skill->skill_name ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <p class="help-block help-block-error"></p>
                        </div>
                     <div class="form-group field-last_name required col-md-12">
                            <label class="control-label" for="" style="color:grey;"><small><?php echo trans('gender') ?></small></label>
                             
                            <div class="select2-wrapper">
                                <select class="form-control select2"  name="gender">
                                    <option></option>
                                    <option value="f" ><?php echo trans('male') ?></option>
                                    <option value="m" ><?php echo trans('female') ?></option>
                                </select>
                            </div>

                            <p class="help-block help-block-error"></p>
                        </div>
                          <div class="form-group field-last_name required col-md-12">
                            <label class="control-label" for="" style="color:grey;"><small><?php echo trans('mobile') ?></small></label>
                             
                           
                          <input name="mobile" type="text" class="form-control" placeholder="+155975...">

                            <p class="help-block help-block-error"></p>
                        </div>
                                       
                         <div class="form-group field-last_name required col-md-12">
                         <div class="col-md-6" style="margin-bottom: 35px;">
                         	
                                        <div class="g-recaptcha" data-sitekey="6Lf_dBIUAAAAAMOTLdexBGWwfD97vbgubp4xbI2b"></div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                           


                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                    <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

                                </div>

                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    
</section>
<?php */?>

<!-- signin-page -->
<section id="main" class="clearfix user-page">
    <div class="container">
        <div class="row text-center">
            <!-- user-login -->
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="margin-top:30px;">
                <div class="user-account">

                    <div class="dubarah-icon-head"><img src="<?php echo base_url()?>ass/images/dub-icon.png"></div>
              <h3><b><?php echo trans('complete') ?></b> <?php echo trans('ur_profile') ?></h3>
               <br>
               
                      <?php
                if (isset($message) && $message) {
                    echo '<p class="text-center m-t-md" style="color: red">'.$message.'</p>';
                    //exit;
                }
                //else echo '<p class="text-center m-t-md">يرجى ملئ كافة البيانات<p class="text-center m-t-md">';
                if (isset($no_email) && $no_email) {
                    echo '<p class="text-center m-t-md">الإيميل المدخل خاطئ</p>';
                } elseif ($this->session->userdata('sent_code')) {
                    echo '<p class="text-center m-t-md">تم ارسال الكود إلى إيميلك</p>';
                    $this->session->unset_userdata('sent_code');
                }
                ?>

                    <form method="post" action="<?php echo base_url().'complete_account' ?>">

                        <div class="form-group field-first_name required col-md-12" style="    margin-top: 9px;">
                            <label class="control-label  col-md-4" for="first_name" style="color:grey;float: left;"><?php echo trans('country') ?></label>
                            
                           <div class="form-group row col-md-12">
                                                
                                                <div class="select2-wrapper">
                                                    <select name="country" onchange="citys(this.value)" class="form-control select2" placeholder="">
                                                        <option></option>
                                                        <?php foreach ($countrys->result() as $country) {?>
                                                            <option value="<?php echo $country->country_id ?>">
                                                            	<?php echo $country->country_english_name ?>
                                                            </option>
                                                        <?php } ?>

                                                    </select>
                                                </div>
                                            </div>
                          
                          
                            <p class="help-block help-block-error"></p>
                        </div>
                        <div class="form-group field-last_name required col-md-12" style="    margin-top: 9px;">
                            <label class="control-label col-md-4" for="last_name" style="color:grey;float: left;"><?php echo trans('city') ?></label>
                            
                        <div class="form-group row col-md-12">
                                               
                                                <div class="select2-wrapper">
                                                    <select name="city" id="select2_2" class="form-control select2" placeholder="">
                                                        <option></option>
                                                    </select>
                                                </div>

                            <p class="help-block help-block-error"></p>
                                            </div>
									</div>
                    
                        <div class="form-group field-last_name required col-md-12" style="    margin-top: 9px;">
                        	
                             <label  class="control-label col-md-4" for="" style="color:grey;float: left;"><?php echo trans('languages') ?></label>
                              <div class="form-group row col-md-12">
                                                <div class="select2-wrapper">
                                                    <select name="langs[]" class="form-control select2" placeholder=""  multiple="multiple">
                                                        <option></option>
                                                        <?php foreach ($langs->result() as $lang) {?>
                                                            <option value="<?php echo $lang->id ?>" ><?php echo $lang->lang_name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>	
                                                </div>

                            <p class="help-block help-block-error"></p>
                        </div>

                        <div class="form-group field-last_name required col-md-12" style=" margin-top: 9px;">
                            <label class="control-label col-md-4" for="" style="color:grey;float: left;"><?php echo trans('skills') ?> <small></small></label>
                             <div class="form-group row col-md-12">
                            <div class="select2-wrapper">
                                <select class="form-control select2" placeholder="Pick your Skills"  multiple="multiple" name="skills[]">
                                    <option></option>
                                    <?php foreach ($skills->result() as $skill) {?>
                                        <option value="<?php echo $skill->skill_id ?>" ><?php echo $skill->skill_name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            

                            <p class="help-block help-block-error"></p>
                            </div>
                        </div>
                  <!--   <div class="form-group field-last_name required col-md-12">
                            <label class="control-label" for="" style="color:grey;"><small><?php echo trans('gender') ?></small></label>
                             
                            <div class="select2-wrapper">
                                <select class="form-control select2"  name="gender">
                                    <option></option>
                                    <option value="f" ><?php echo trans('male') ?></option>
                                    <option value="m" ><?php echo trans('female') ?></option>
                                </select>
                            </div>

                            <p class="help-block help-block-error"></p>
                     </div>-->
                     
                          <div class="form-group field-last_name required col-md-12" style=" margin-top: 9px;">
                            <label class="control-label col-md-4" for="" style="color:grey;float: left;"><?php echo trans('mobile') ?><small></small></label>
                             
                            <div class="form-group row col-md-12">
                          <input name="mobile" type="text" class="form-control" style="border: none;border-bottom: 1px #6E6E6D solid; color: #333 !important; border-radius: 0px !important;" placeholder="+155975...">

                            <p class="help-block help-block-error"></p>
                        </div>
                        </div>
                        <div class="row form-group">
                                    <label class="control-label col-md-4"><?php echo trans('gender') ?><span class="required">*</span></label>
                                   
                                    <div class="col-sm-9"style="margin-bottom: 30px">
                                        <input type="radio" name="gender"  value="1" id="mail">
                                        <label for="mail"><?php echo trans('mail') ?></label>
                                        <input type="radio" name="gender"  value="2" id="female">
                                        <label for="female"><?php echo trans('female') ?></label>

                                    </div>
                                    
                        
                         <div class="form-group field-last_name required col-md-10">
                         <div class="col-md-6" style="margin-bottom: 35px;">
                         	
                                        <div class="g-recaptcha" data-sitekey="6Lf_dBIUAAAAAMOTLdexBGWwfD97vbgubp4xbI2b"></div>
                                    </div>
                                    </div>
                        
                        <div class="form-group">
                            <button type="submit" id="login-btn" class="btn" name="login-button" style="background-color:grey;">Finsh</button>
                        </div>

                        <div class="user-option">
                            <div class="checkbox pull-left">
                                <div class="form-group field-loginform-rememberme">

                                </div>
                            </div>

                        </div>

                    </form>
                    <!--
                <div><a href='#' id='fb-login'><img src='../web/images/fb-login.png'></a></div>
                <div><a href='#' id='twitter-login'><img src='../web/images/twitter-login.png'></a></div>-->

                </div><!-- user-login -->
            </div><!-- row -->
        </div><!-- container -->
</section><!-- signin-page -->




<?php $this->load->view('common/footer'); ?><!-- wizard container --><!--  big container -->
<script>
$( ".select2" ).select2( {  maximumSelectionSize: 6 } );

    $( ":checkbox" ).on( "click", function() {
        $( this ).parent().nextAll( "select" ).select2( "enable", this.checked );
    });

    $( "#demonstrations" ).select2( { placeholder: "Select2 version", minimumResultsForSearch: -1 } ).on( "change", function() {
        document.location = $( this ).find( ":selected" ).val();
    } );

    $( "button[data-select2-open]" ).click( function() {
        $( "#" + $( this ).data( "select2-open" ) ).select2( "open" );
    });
    $(".form_datetime").datetimepicker({
        format: "dd mm yyyy"
    });

    function citys(id) {
        $.ajax({
            url: '<?php echo base_url(); ?>get_city/' + id,
            success: function(data) {
                if (data) {
                    $("#select2_2").html(data);
                };
            }
        });
    }
 
    
    function citys(id) {
        $.ajax({
            url: '<?php echo base_url(); ?>get_city/' + id,
            success: function(data) {
                if (data) {
                    $("#select2_2").html(data);
                };
            }
        });
    }
     <?php if ($this->session->userdata('suc_message')) { ?>
     setTimeout(function(){
    	
    	window.location.href='<?php echo  base_url()?>'},5000);
    
    <?php } ?>
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php /*
<script src="<?php echo base_url() ?>ass/js/jquery-1.10.2.js" type="text/javascript"></script>

<script src="<?php echo base_url() ?>ass/js/bootstrap.min.js" type="text/javascript"></script>
	
<!--   plugins 	 -->
<script src="<?php echo base_url() ?>ass/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="<?php echo base_url() ?>ass/js/jquery.validate.min.js"></script>

<!--  methods for manipulating the wizard and the validation -->
<script src="<?php echo base_url() ?>ass/js/wizard.js"></script>*/?>

<?php exit; ?>






