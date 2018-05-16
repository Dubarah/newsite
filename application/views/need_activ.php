
 <?php $this->load->view('common/header'); ?>
 
	<!-- nav-right -->

    <!-- signin-page -->
    <section id="main" class="clearfix user-page">
        <div class="container" style="margin-bottom: 191px">
            <div class="row text-center">
                <!-- user-login -->
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="margin-top:30px;">
                    <div class="user-account">
			<div class="col-md-4">
            			<img src="<?php echo base_url()?>ass/images/done.png" width="150" height="150" />
            			</div>
            			<div class="col-md-6">
            				<h2>DONE!</h2>
            			</div>
				
                 <div class="form-group">
                <button type="button" id="login-btn" class="btn" name="login-button" style="background-color:grey;">Home Page</button>       
                         </div>
                <div class="user-option">
                <div class="checkbox pull-left">
               		 <div class="form-group field-loginform-rememberme">

				</div>  
              </div>

                </div>

			<!--
		<div><a href='#' id='fb-login'><img src='../web/images/fb-login.png'></a></div>
		<div><a href='#' id='twitter-login'><img src='../web/images/twitter-login.png'></a></div>-->

             
            </div><!-- user-login -->
            </div><!-- row -->
        </div>
        </div>
        <!-- container -->
       </div>
    </section><!-- signin-page -->
    <?php $this->load->view('common/footer'); ?>
   
    