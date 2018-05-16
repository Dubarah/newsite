

<?php $this->load->view('common/header'); ?>

<!-- signin-page -->
<section id="main" class="clearfix user-page">
    <div class="container">
        <div class="row text-center">
            <!-- user-login -->
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="margin-top:30px;">
                <div class="user-account">

                    <div class="dubarah-icon-head"><img src="<?php echo base_url()?>ass/images/dub-icon.png"></div>
                    <h2><?php echo trans('reregister') ?><span style="color:red;"><?php echo set_value('firstname') ? set_value('firstname') : $user->username ?>!</span></b><br/> <span style="    font-size: 19px;font-style: bold;"><?php echo trans('ur_profile') ?></span></h2>
                      

                    <form method="post" action="<?php echo base_url().'reregister' ?>">

                        <div class="form-group field-first_name required">
                            <label class="control-label" for="first_name"></label>
                            <input type="text" id="first_name" value="<?php echo set_value('firstname') ? set_value('firstname') : $user->username ?>"
                            class="form-control login-form-input login-form-input-email" name="firstname"
                                   style="background-image:url('/images/haa.png');"
                                   autofocus placeholder="First Name" style="border-radius:0px;" aria-required="true">

                            <p class="help-block help-block-error"> <?php echo form_error('firstname') ? form_error('firstname') : '' ?></p>
                        </div>
                        <div class="form-group field-last_name required">
                            <label class="control-label" for="last_name"></label>
                            <input type="text" id="last_name" value="<?php echo set_value('lastname') ? set_value('lastname') : $user->lastname ?>"
                             class="form-control login-form-input login-form-input-email" name="lastname"
                                   style="background-image:url('/images/haa.png');"
                                   autofocus placeholder="Last Name" style="border-radius:0px;" aria-required="true">

                            <p class="help-block help-block-error"><?php echo form_error('lastname') ? form_error('lastname') : '' ?></p>
                        </div>
                        <div class="form-group field-email required">
                            <label class="control-label" for="email"></label>
                            <input type="text" id="email"  value="<?php echo set_value('email') ? set_value('email') : $user->email ?>" type="email"
                            class="form-control login-form-input login-form-input-email" name="email"
                                   style="background-image:url('/images/haa.png');"
                                   autofocus placeholder="Email" style="border-radius:0px;" aria-required="true">

                            <p class="help-block help-block-error"><?php echo form_error('email') ? form_error('email') : '' ?></p>
                        </div>

                        <div class="form-group field-password required">
                            <label class="control-label" for="password"></label>
                            <input type="password" id="password"  
                            class="form-control login-form-input login-form-input-password" name="password" 
                            style="background-image:url('/images/haa.png');" 
                            placeholder="Password" style="border-radius:0px;" aria-required="true">

                            <p class="help-block help-block-error"><?php echo form_error('password') ? form_error('password') : '' ?></p>
                        </div>
                         <div class="form-group adpost-details" style="border-bottom:  : 1px solid gray">
                                    <label class="col-sm-3 label-title" style="<?php echo LANG()=='ar'? 'float: right;     margin-right: -21px;' : 'float: left; margin-left: -16px;' ?>color: #bfc5c9;margin-top: 2px;"><?php echo trans('gender') ?><span class="required"></span></label>
                                    <div class="col-sm-9"style="margin-bottom: 30px; margin-top: 12px;">                                   
                                      <input type="radio" name="gender"  value="1" id="male" >
                                   	  <label for="male"><?php echo trans('male') ?></label>
                                   	  <input type="radio" name="gender"  value="2" id="female" >
                                      <label for="female"><?php echo trans('female') ?></label>
                                    </div> <span ><?php echo form_error('gender') ? form_error('gender') : '' ?></span>
                                </div>
                    
                         <div class="form-group">
                         <div class="col-md-4" style="margin-bottom: 35px;">
                         	
                                        <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
                                    </div>
                                    </div>
                        
                        <div class="form-group">
                            <button type="submit" id="login-btn" class="btn" name="login-button" style="background-color:grey;"><?php echo trans('update_user') ?></button>
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
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>


<?php exit; ?>






