

<?php $this->load->view('common/header'); ?>


<!-- signin-page -->
<section id="main" class="clearfix user-page ">
    <div class="container">
        <div class="row text-center">
        	<!-- banner -->
            <!-- user-login -->
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" style="margin-top:30px;">
                <div class="user-account">
					
                    <div class="dubarah-icon-head" style=" top: 0px; margin-top: -57px;"><img src="<?php echo base_url()?>ass/images/dub-icon.png"></div>
                    <h2><?php echo trans('join') ?></h2>
                      

                    <form method="post" action="<?php echo base_url().'signup' ?>">
						<input type="hidden" name="_csrf-frontend" value="<?php echo $resalt ?>">
                        <div class="form-group field-first_name required">
                            <input type="text" id="first_name" class="form-control login-form-input login-form-input-email" name="firstname"
                                   style="<?php echo LANG()=='ar'? 'direction: rtl;': '' ?>    background-image:url('<?php echo base_url()?>ass/ies/login-person-icon.png');"
                                   autofocus placeholder="<?php echo trans('firstname') ?>" style="border-radius:0px;" aria-required="true">
							
                            <p class="help-block help-block-error"><?php echo form_error('firstname') ? form_error('firstname') : '' ?></p>
                           
                                                                
	
                        </div>
                        <div class="form-group field-last_name required">
                            <input type="text" id="last_name" class="form-control login-form-input login-form-input-email" name="lastname"
                                   style="<?php echo LANG()=='ar'? 'direction: rtl;': '' ?>background-image:url('<?php echo base_url()?>ass/ims/login-person-icon.png');"
                                   autofocus placeholder="<?php echo trans('last_name') ?>" style="border-radius:0px;" aria-required="true">

                            <p class="help-block help-block-error"><?php echo form_error('lastname') ? form_error('lastname') : '' ?></p>
                        </div>
                        <div class="form-group field-email required">
                            <input type="text" id="email" class="form-control login-form-input login-form-input-email" name="email"
                                   style="<?php echo LANG()=='ar'? 'direction: rtl;': '' ?>background-image:url('<?php echo base_url()?>ass/ges/icon/email.png');"
                                   autofocus placeholder="<?php echo trans('email') ?>" style="border-radius:0px;" aria-required="true">

                            <p class="help-block help-block-error"><?php echo form_error('email') ? form_error('email') : '' ?></p>
                        </div>

                        <div class="form-group field-password required">
                            <input type="password" id="password" class="form-control login-form-input login-form-input-password" name="password" 
                            style="<?php echo LANG()=='ar'? 'direction: rtl;': '' ?>background-image:url('<?php echo base_url()?>ass/imag/haa.png');" 
                            placeholder="<?php echo trans('password') ?>" style="border-radius:0px;" aria-required="true">

                            <p class="help-block help-block-error"><?php echo form_error('password') ? form_error('password') : '' ?></p>
                        </div>
                         <div class="form-group adpost-details" style="border-bottom:  : 1px solid gray">
                                    <label class="col-sm-3 label-title" style="<?php echo LANG()=='ar'? 'float: right;     margin-right: -21px;' : 'float: left; margin-left: -16px;' ?>color: #bfc5c9;margin-top: 2px;"><?php echo trans('gender') ?><span class="required"></span></label>
                                    <div class="col-sm-9"style="margin-bottom: 30px; margin-top: 12px;">                                   
                                      <input type="radio" name="gender"  value="1" id="male" >
                                   	  <label for="male"><?php echo trans('male') ?></label>
                                   	  <input type="radio" name="gender"  value="2" id="female" >
                                      <label for="female"><?php echo trans('female') ?></label>
                                    </div> <p class="help-block help-block-error"><?php echo form_error('gender') ? form_error('gender') : '' ?></p>
                                </div>
             
                        
                                 <div class="form-group col-md-12"style="margin-left: -58px;">
                         	<div class="col-md-1"></div>
                        		 <div class="col-md-6" style="margin-bottom: 20px;">
                         	
                                        <div class="g-recaptcha" data-sitekey="<?php echo $site_key ?>"></div>
                                    </div>

                                    </div>
                             
                        <div class="form-group">
                            <button type="submit" id="" class="btn" name="login-button" style="background-color:grey;margin-bottom: 6px"><?php echo trans('sign_up') ?></button>
                            <p style="font-size: 11px;">
	                                	By clicking “Sign Up” you agree to Dubarah 
	                                	<a href="#" data-toggle="modal" data-target="#myModal">
	                                		Privacy Policy</a>  and  <a href="#" data-toggle="modal" data-target="#myModal1">Terms of Use</a>
	                                	 and that you have read our Data Use Policy,
	                                	  including our Cookie Use, and also agree to receive news, tips, and notification via email. </p>
	                                	  <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"> </fb:login-button>
                        </div>

                       
                    </form>
                    
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
            </div>
                    
                    
                    
                    
                    <!--
                <div><a href='#' id='fb-login'><img src='../web/images/fb-login.png'></a></div>
                <div><a href='#' id='twitter-login'><img src='../web/images/twitter-login.png'></a></div>-->
				  </div>
                </div><!-- user-login -->
            </div><!-- row -->
        </div><!-- container -->
</section><!-- signin-page -->


<?php $this->load->view('common/footer'); ?><!-- wizard container --><!--  big container -->
<script>
   function dis() {
	  
	 if (document.getElementById('send').checked) {
		 //var val = document.getElementById('submit');
			document.getElementById('signup').disabled = false;			
	}else{  
		    document.getElementById('signup').disabled = true;  
		       }};
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






