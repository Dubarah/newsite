<!-- Header  -->
 <?php   //echo $this->session->userdata('err_message'); exit;
 $this->load->view('heroCitizen/common/header'); ?>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/normalize.css">
	
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style.css">

<div class="containers niceShadow" style="margin-bottom: 50px;margin-top: 50px">
			<img src="<?php echo base_url() ?>ass/images/dub-icon.png" />
			<h2><?php echo trans('login_user') ?></h2>
			 <?php 
					if (isset($message) && $message) {
						echo '<p "style="color: red">'.$message.'</p>';
						//exit;
					}
					//else echo '<p class="text-center m-t-md">يرجى ملئ كافة البيانات<p class="text-center m-t-md">';
					if (isset($no_email) && $no_email) {
						echo '<p>الإيميل المدخل خاطئ</p>';
					} elseif ($this->session->userdata('sent_code')) {
						echo '<p>تم ارسال الكود إلى إيميلك</p>';
						$this->session->unset_userdata('sent_code');
					} 
					?>
			<form method="post" action="<?php echo base_url().'login' ?>" autocomplete="off">
				<input class="niceShadow" type="email" name="username" placeholder="Email" aria-required="true">
				<p><?php echo form_error('username') ? form_error('username') : '' ?></p>
				<input class="niceShadow" type="password" name="password" placeholder="Password" aria-required="true">
				<p><?php echo form_error('password') ? form_error('password') : '' ?></p>
				<a class="forgot" href="<?php echo base_url() ?>forgot_password"><?php echo trans('forgot_password') ?></a>
				<input class="niceShadow" type="submit" name="login-button" class="signUp" value="LOG IN"></input>
				<div class="oFHidden"><p class="or"> OR </p></div>
			</form>
			<!-- <button class="logIn niceShadow"> Log in with Facebook</button> -->
		<div class="fb-login-button" data-width="300" data-max-rows="3" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>			<!-- <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"> </fb:login-button> -->
			  <div id="status">
			</div>
			
			<div class="oFHidden"><p class="or"> OR </p></div>
			<button class="createNewAcount niceShadow" onclick="#"><a style="  text-decoration: none;color: #ecd9b4" href="<?php echo base_url() ?>signup">Create a New Account</a></button>
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