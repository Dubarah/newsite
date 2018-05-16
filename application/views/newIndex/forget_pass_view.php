 <?php   //echo $this->session->userdata('err_message'); exit;
 $this->load->view('heroCitizen/common/header'); ?>

		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/normalize.css">
	
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style.css">

<div class="containers niceShadow" style="margin-bottom: 50px;margin-top: 50px">


			<img src="<?php echo base_url() ?>ass/images/dub-icon.png" />
			<h2><?php echo trans('forgetten') ?><br/><?php echo trans('ur_pass') ?></h2>
			<h3><?php echo trans('enter_reset_email') ?></h3>
			<form action="<?php echo base_url() ?>forgot_password" method="post"  autocomplete="off">
				
					<input type="hidden" name="_csrf-frontend" value="<?php echo $resalt ?>">
				
				
				<input class="niceShadow" type="email" name="email" placeholder="<?php echo trans('email') ?>" aria-required="true">
				<p style="text-align: center;color: red;"><?php echo form_error('email')? form_error('email') : ''  ?></p>
				<div>
					<input class="niceShadow" type="submit" name="login-button" class="signUp" value="<?php echo trans('send_code') ?>"></input></div>
			</form>
			<a class="resendCode" href="<?php echo base_url() ?>resend_code/resend_code"><?php echo trans('resend_code') ?></a>
		</div>



<?php $this->load->view('newindex/footer'); ?>










