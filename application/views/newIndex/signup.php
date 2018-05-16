<!-- Header  -->
 <?php   //echo $this->session->userdata('err_message'); exit;
 $this->load->view('heroCitizen/common/header'); ?>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/normalize.css">
	
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style.css">

<div class="containers niceShadow" style="margin-bottom: 50px;margin-top: 50px">
			<img src="<?php echo base_url() ?>/ass/images/dub-icon.png" />
			 <h2><?php echo trans('join') ?></h2>
			<form autocomplete="off" method="post" action="<?php echo base_url().'signup' ?>">
					<input type="hidden" name="_csrf-frontend" value="<?php echo $resalt ?>">
				<input class="niceShadow" type="text" name="<?php echo trans('firstname') ?>" placeholder="First name" aria-required="true">
				 <p ><?php echo form_error('firstname') ? form_error('firstname') : '' ?></p>
				<input class="niceShadow" type="text" name="lastname" placeholder="<?php echo trans('last_name') ?>" aria-required="true">
				 <p ><?php echo form_error('lastname') ? form_error('lastname') : '' ?></p>

				<input class="niceShadow" type="email" name="email" placeholder="<?php echo trans('email') ?>" aria-required="true">
				<p ><?php echo form_error('email') ? form_error('email') : '' ?></p>
				<input class="niceShadow" type="password" name="password" placeholder="<?php echo trans('password') ?>" aria-required="true">
			    <p class="help-block help-block-error"><?php echo form_error('password') ? form_error('password') : '' ?></p>

				<div class="radio">
					<div><label>Gender</label></div>
					<div class="male">
						<input type="radio" name="gender" value="male">
						<label><?php echo trans('male') ?></label>
					</div>
					<div class="female">
						<input type="radio" name="gender" value="female">
						<label><?php echo trans('female') ?></label>
					</div>
				</div>
				  <p ><?php echo form_error('gender') ? form_error('gender') : '' ?></p>
				<div class="captcha"><div class="g-recaptcha" data-sitekey="<?php echo $site_key ?>"></div></div>
				<input class="niceShadow" type="submit" name="login-button" class="signUp" value="Sign up"></input>
				<div class="oFHidden"><p class="or"> OR </p></div>
				<div class="fb-login-button" data-width="300" data-max-rows="3" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>			<!-- <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"> </fb:login-button> -->

			</form>
			<p>
				By clicking “Sign Up” you agree to Dubarah 
			<a href="#" data-toggle="modal" data-target="#myModal">
                            		Privacy Policy</a>   and  <a href="#" data-toggle="modal" data-target="#myModal1">Terms of Use</a>
				and that you have read our Data Use Policy,
				including our Cookie Use, and also agree to receive news, tips, and notification via email.
			</p>
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
            

<?php $this->load->view('newindex/footer'); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>