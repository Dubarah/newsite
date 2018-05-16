<?php $this->load->view('common/header') ?>

<section id="main" class="clearfix user-page">


<div class="container">
            <div class="row text-center">
                <!-- user-login -->
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="margin-top:30px;">
                    <div class="user-account">
			<div class="dubarah-icon-head"><img src="<?php echo base_url()?>ass/images/dub-icon.png"></div>
                        <h2 style="margin:0 auto;text-align:center;display:block;margin-top: 100px;font-size:25px;position: relative;left: 66px;"><bold><?php echo trans('forgetten') ?></bold> <?php echo trans('ur_pass') ?></h2>
			<h3 style="margin-bottom:36px;"><?php echo trans('enter_reset_email') ?></h3>
            <form id="login-form" action="<?php echo base_url() ?>forgot_password" method="post" role="form">
				<input type="hidden" name="_csrf-frontend" value="<?php echo $resalt ?>">
				                <div class="form-group field-forgot-email required">
				<label class="control-label" for="forgot-email"></label>
				<input type="text" id="forgot-email" class="form-control login-form-input " name="email" autofocus="" placeholder="<?php echo trans('email') ?>" style="border-radius:0px;" aria-required="true">
				
				<p class="help-block help-block-error"><?php echo form_error('email') ?></p>
				</div>
                 <div class="form-group">
              <button type="submit" id="forgot-btn" class="btn" name="login-button" style="background-color:grey;"><?php echo trans('send_code') ?></button>                </div>

            </form>
             <div class="sign-up-btn"><a href="<?php echo base_url() ?>resend_code/resend_code"><?php echo trans('resend_code') ?></a></div>
            </div><!-- user-login -->
            </div><!-- row -->
        </div><!-- container -->
    </div>
    </section>
    <?php $this->load->view('common/footer') ?>