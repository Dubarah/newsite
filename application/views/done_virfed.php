 
 <?php $this->load->view('common/header'); ?>
 
	<!-- nav-right -->

    <!-- signin-page -->
    <section id="main" class="clearfix user-page" style="margin-bottom: 140px;">
        <div class="container">
            <div class="row text-center">
                <!-- user-login -->
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="margin-top:30px;">
                    <div class="user-account">
			
                       
                        
            			<div class="col-md-12"style="margin-top: -41px;margin-left: -19px;">
            			<img style="margin-left: 21px;margin-top: 26px;height: 155px;" src="<?php echo base_url()?>ass/images/done_yes.png" />
            			</div>
            			<div class="col-md-12">
            				<h1 style="margin-top: -7px;color: black; ">DONE!</h1><br/>
            				<h3 style="margin-top: -15px;"> Welcome <?php echo $this->session->userdata('username') ?>.</h3>
            			</div>
						
						
				<form method="post" action="<?php echo base_url() ?>"> 
                 <div class="form-group"> 
                <button type="submit" id="login-btn" class="btn" name="login-button" style="background-color:grey;    width: 61%;"><img style="height:24px;width:24px;margin-right:10px;"src="<?php echo base_url().'ass/images/home.png'?>" /> Home Page</button></div>
				
               

            </form>
			<!--
		<div><a href='#' id='fb-login'><img src='../web/images/fb-login.png'></a></div>
		<div><a href='#' id='twitter-login'><img src='../web/images/twitter-login.png'></a></div>-->

             
            </div><!-- user-login -->
            </div><!-- row -->
        </div>
        </div><!-- container -->
    </section><!-- signin-page -->
    <?php $this->load->view('common/footer'); ?>
    