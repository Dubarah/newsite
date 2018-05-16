 
 <?php $this->load->view('common/header'); ?>
 
	<!-- nav-right -->

    <!-- signin-page -->
    <section id="main" class="clearfix user-page" style="margin-bottom: 140px;">
        <div class="container">
            <div class="row text-center">
                <!-- user-login -->
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="margin-top:30px;">
                    <div class="user-account">
			
                       
                        
            			<div class="col-md-12"style="margin-top: -55px; margin-left: -43px;">
            			<img style="    margin-left: 73px;margin-top: 46px;height: 155px;" src="<?php echo base_url()?>ass/images/done.png" />
            			</div>
            			<div class="col-md-12">
            				<h1 style="margin-top: -9px;color: black; "><?php echo trans('done_reg') ?><br/>
            				
            			</div>
						
						
				<form method="post" action="<?php echo base_url() ?>"> 
                     <div class="form-group">
                    <button type="submit" id="login-btn" class="btn" name="login-button" style="background-color:grey;"><img style="height:24px;width:24px;margin-right:10px;"src="<?php echo base_url().'ass/images/home.png'?>" /> Home Page</button>
                </form>

                        <div class="sign-up-btn"><a href="<?php echo base_url() ?>send_activation"><?php echo trans('resend_code') ?></a></div>
            </div><!-- user-login -->
            </div><!-- row -->
        </div>
        </div><!-- container -->
    </section><!-- signin-page -->
    <?php $this->load->view('common/footer'); ?>
    