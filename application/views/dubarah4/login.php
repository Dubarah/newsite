 
 <?php $this->load->view('common/header'); ?>
 
	<!-- nav-right -->

    <!-- signin-page -->
    <section id="main" class="clearfix user-page">
        <div class="container">
            <div class="row text-center">
                <!-- user-login -->
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="margin-top:30px;">
                    <div class="user-account">
			<div class="dubarah-icon-head" style="top: 0px;margin-top: -57px;"><img src="<?php echo base_url()?>ass/images/dub-icon.png"></div>
                        <h2><?php echo trans('login_user') ?></h2>
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
         	  <form class="m-t-md" method="post" action="<?php echo base_url().'login' ?>">
                <div class="form-group field-email required">
				<input type="text" id="email" class="form-control login-form-input login-form-input-email" name="username" style="<?php echo LANG()=='ar'? 'direction: rtl;': '' ?>background-image:url('<?php echo base_url()?>assages/icon/email.png');" placeholder="<?php echo trans('email') ?>" style="border-radius:0px;" aria-required="true">
				<p class="help-block help-block-error"><?php echo form_error('username') ? form_error('username') : '' ?></p>
						</div>
				    <div class="form-group field-password required">
						<input type="password" id="password" class="form-control login-form-input login-form-input-password" name="password" style="<?php echo LANG()=='ar'? 'direction: rtl;': '' ?>background-image:url('<?php echo base_url()?>aimages/haa.png');" placeholder="<?php echo trans('password') ?>" style="border-radius:0px;" aria-required="true">
						<p class="help-block help-block-error"><?php echo form_error('password') ? form_error('password') : '' ?></p>
						<div class="pull-<?php echo LANG()=='ar'? 'left': 'right' ?> forgot-password" style="padding-right: 30px;">
                  <a style="font-size: 12px" href="<?php echo base_url() ?>forgot_password" ><?php echo trans('forgot_password') ?></a>.
                </div>
						</div>
				
                 <div class="form-group">
		            <button type="submit" id="login-btn" class="btn" name="login-button" style="background-color:grey;margin-bottom: 6px"><?php echo trans('login') ?></button>       
                    <p style="font-size: 11px;">
                            	By clicking “Sign In” you agree to Dubarah 
                            	<a href="#" data-toggle="modal" data-target="#myModal">
                            		Privacy Policy</a>  and  <a href="#" data-toggle="modal" data-target="#myModal1">Terms of Use</a>
                            	 and that you have read our Data Use Policy,
                            	  including our Cookie Use, and also agree to receive news, tips, and notification via email. </p>
                    
						<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"> </fb:login-button>
                 </div>
               <div id="status">
			</div>
            </form>
            
			<!--
		<div><a href='#' id='fb-login'><img src='../web/images/fb-login.png'></a></div>
		<div><a href='#' id='twitter-login'><img src='../web/images/twitter-login.png'></a></div>-->
             <div class="sign-up-btn"><a href="<?php echo base_url()?>signup" style="font-weight:bold" ><?php echo trans('create_new') ?></a></div>
             
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
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- signin-page -->
    
    
    <?php $this->load->view('common/footer'); ?>
    