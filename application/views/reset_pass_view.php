<?php $this->load->view('common/header') ?>

<section id="main" class="clearfix user-page">


<div class="container">
        <div class="row text-center">
          <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="margin-top:30px;">
           <div class="user-account">
			<div class="dubarah-icon-head"><img src="<?php echo base_url()?>ass/images/dub-icon.png"></div>
             <h2 style="margin:0 auto;text-align:center;display:block;margin-top: 100px;font-size:25px;position: relative;left: 66px;">Reset Your Password </h2>
              <form id="login-form" action="<?php echo base_url()."reset_pass/$code" ?>" method="post" role="form">
			   <input type="hidden" name="_csrf-frontend" value="cWRKekxVclcpMBU5Ph4CYCgtcikBJl86RjwpM2EXGx4WDRkzExo1Mg==">
                <div class="form-group field-forgot-email required">
				 <label class="control-label" for="forgot-email"></label>
				  <input type="text" id="forgot-email" type="password" class="form-control login-form-input " name="password" autofocus="" placeholder="<?php echo trans('password') ?>" style="border-radius:0px;" aria-required="true">
				   <p class="help-block help-block-error"></p>
			       <label class="control-label" for="forgot-email"></label>
				   <input type="text" id="forgot-email" type="password" class="form-control login-form-input " name="password_con" autofocus="" placeholder="<?php echo trans('password_con') ?>" style="border-radius:0px;" aria-required="true">
				  </div>
             
                <div class="form-group">
              	<button type="submit" id="forgot-btn" class="btn" name="login-button" style="background-color:grey;">Reset Password</button>       
                </div>

           	 </form>
                <div class="sign-up-btn"><a href="<?php echo base_url().'login' ?>">Return to login</a></div>
                </div><!-- user-login -->
           	  </div><!-- row -->
       		 </div><!-- container -->
   		 </div>
    </section>
    <?php $this->load->view('common/footer') ?>