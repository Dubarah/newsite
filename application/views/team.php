 <?php $this->load->view('common/header'); ?>

<!-- ad-profile-page -->
	<section id="main" class="clearfix  ad-profile-page">
		<div class="container">
		
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url()?>"><?php echo translate('home') ?></a></li>
					<li><?php echo $title ?></li>
				</ol><!-- breadcrumb -->						
				<h2 class="title"></h2>
			</div><!-- banner -->
			
			<div class="new-profile section">	
				<div class="user-profile">
					<div class="user-images">
						<img src="<?php echo base_url()?>ass/images/dub-icon.png" alt="User Images"  class="img-responsive" style="width: 96px;margin-top: -15px;" >
					</div>
					<div class="user">
						<h2><a href="#"><?php echo translate('team') ?></a></h2>
						<h5>	</h5>
					</div>

					<div class="favorites-user">
						<div class="my-news">
							<a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo trans('total_dubarah')?>" ><?php echo number_format( $all+3000000) ;?><small><?php echo translate('all_dubarahs') ?></small></a>
						</div>
						<!--<div class="favorites">
							<a href="#">0<small>Favorites</small></a>
						</div>-->
					</div>								
				</div><!-- user-profile -->
						
				<ul class="user-menu">
					<li <?php echo $selected== 'aboutus' ?  'class="active"'  :  '';?>><a href="<?php echo base_url() ?>aboutus"><?php echo translate('aboutus') ?></a></li>
					
					<li <?php echo $selected== 'vision' ?  'class="active"'  :  '';?>><a href="<?php echo base_url() ?>vision"><?php echo translate('vision') ?></a></li>
					<li <?php echo $selected== 'team' ?  'class="active"'  :  '';?>><a href="<?php echo base_url() ?>team"><?php echo translate('team') ?></a></li>
				
					<!--<li><a href="archived-news.html">Archived news </a></li>
					<li><a href="pending-news.html">Pending approval</a></li>
					<li><a href="delete-account.html">Close account</a></li>-->
				</ul>
			</div><!-- new-profile -->	
		 <div class="adpost-details">
            <div class="row">
            	        	
             
                <div class="col-md-9" >
                    
                        <fieldset>
                            <div class="section seller-info">
                         
                                <h4 <?php echo LANG() == 'ar' ? 'style="text-align: right"': '' ?>><?php echo $title ?></h4>  
                                   	<div class="row" <?php echo LANG() == 'ar' ? 'style="text-align: right"': '' ?>>
                               	<div class="user-images" style="margin-left: 30px;<?php echo LANG()=='ar' ? ' float: right;margin-top: 38px;' : ''?>">
                               		
                               	<img src="<?php echo base_url()?>ass/images/team/Ahmad_edilbi.png" alt="User Images"  class="img-circle img-responsive"  style="width: 140px;margin-top: -15px;"  >
								</div>
   								
                                 <div class="description-info col-lg-9">
                              
                                    <p><span><?php echo trans('ahmad') ?> </span><br>
                                     <ul class="banner-socail">
                                         <li><a target="_blank" href="#"><img src="<?php echo base_url(); ?>ass/images/social/facebook.png" class="social-facebook"></a></li>
                                         <li><a target="_blank" href="#"><img src="<?php echo base_url(); ?>ass/images/social/twitter.png" class="social-twitter"></a></li>
                                         <li><a target="_blank" href="#"><img src="<?php echo base_url(); ?>ass/images/social/linkedin.png" class="social-linkedin"></a></li>
                                     </ul>
                                    </p>

                                </div>
                                </div>
                                <br />	
                                <div class="row" <?php echo LANG() == 'ar' ? 'style="text-align: right"': '' ?>>
                                <div class="user-images" style="margin-left: 30px;<?php echo LANG()=='ar' ? ' float: right;margin-top: 38px;' : ''?>">
                               	<img src="<?php echo base_url()?>ass/images/team/majd.png" alt="User Images"  class="img-circle img-responsive" style="width: 140px;margin-top: -15px;" >
								</div>
   								
                                 <div class="description-info col-lg-9">
                                 	
									
                                    <p><span><?php echo trans('majd') ?> </span>
                                        <br>
                                     <ul class="banner-socail">
                                         <li><a target="_blank" href="#"><img src="<?php echo base_url(); ?>ass/images/social/facebook.png" class="social-facebook"></a></li>
                                         <li><a target="_blank" href="#"><img src="<?php echo base_url(); ?>ass/images/social/twitter.png" class="social-twitter"></a></li>
                                         <li><a target="_blank" href="#"><img src="<?php echo base_url(); ?>ass/images/social/linkedin.png" class="social-linkedin"></a></li>
                                     </ul>
                                    </p>

                                </div>
                                </div>	
                                <br />
                                <div class="row" <?php echo LANG() == 'ar' ? 'style="text-align: right"': '' ?>>
                                 <div class="user-images" style="margin-left: 30px;<?php echo LANG()=='ar' ? ' float: right;    margin-top: 63px;' : ''?>">
                               	<img src="<?php echo base_url()?>ass/images/team/talin.jpg" alt="User Images"  class="img-circle img-responsive" style="width: 140px;margin-top: -15px; margin-bottom: 44px;" >
								</div>
   								
                                 <div class="description-info col-lg-9">
                                 	
									
                                    <p><span><?php echo trans('talin') ?> </span>
                                        <br>
                                     <ul class="banner-socail">
                                         <li><a target="_blank" href="#"><img src="<?php echo base_url(); ?>ass/images/social/facebook.png" class="social-facebook"></a></li>
                                         <li><a target="_blank" href="#"><img src="<?php echo base_url(); ?>ass/images/social/twitter.png" class="social-twitter"></a></li>
                                         <li><a target="_blank" href="#"><img src="<?php echo base_url(); ?>ass/images/social/linkedin.png" class="social-linkedin"></a></li>
                                     </ul>
                                    </p>

                                </div>		
                            </div>
                                <hr>
                                <div class="user" <?php echo LANG() == 'ar' ? 'style="text-align: right"': '' ?>>
                                    <h2><a href="#"><?php echo translate('developers') ?></a></h2>
                                    <h5>	</h5>
                                </div>
                                <div class="row" <?php echo LANG() == 'ar' ? 'style="text-align: right"': '' ?>>
                                    <div class="user-images" style="margin-left: 30px;<?php echo LANG()=='ar' ? ' float: right;    margin-top: 63px;' : ''?>">
                                        <a href="#">
                                            <img src="<?php echo base_url()?>ass/images/team/MaherKalash.png" alt="Maher Kalash"  class="img-circle img-responsive" style="width: 140px;margin-top: -29px;" >
                                        </a>
                                    </div>

                                    <div class="description-info col-lg-9">


                                        <p><span><?php echo trans('maherkalash') ?> </span><br>
                                        <ul class="banner-socail">
                                            <li><a target="_blank" href="https://www.facebook.com/maher.kalash1"><img src="<?php echo base_url(); ?>ass/images/social/facebook.png" class="social-facebook"></a></li>
                                            <li><a target="_blank" href="https://twitter.com/maherkalash1"><img src="<?php echo base_url(); ?>ass/images/social/twitter.png" class="social-twitter"></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/in/maher-kalash/"><img src="<?php echo base_url(); ?>ass/images/social/linkedin.png" class="social-linkedin"></a></li>
                                        </ul>
                                        </p>

                                    </div>
                                </div>
                                <br>

                                <div class="row" <?php echo LANG() == 'ar' ? 'style="text-align: right"': '' ?>>
                                    <div class="user-images" style="margin-left: 30px;<?php echo LANG()=='ar' ? ' float: right;    margin-top: 63px;' : ''?>">
                                        <a href="#">
                                        <img src="<?php echo base_url()?>ass/images/team/AliHajjow.jpg" alt="Ali Alhajjow"  class="img-circle img-responsive" style="width: 140px;margin-top: -29px;" >
                                        </a>
                                    </div>

                                    <div class="description-info col-lg-9">


                                        <p><span><?php echo trans('alihajjow') ?> </span><br>
                                        <ul class="banner-socail">
                                            <li><a target="_blank" href="https://www.facebook.com/AliHajjow"><img src="<?php echo base_url(); ?>ass/images/social/facebook.png" class="social-facebook"></a></li>
                                            <li><a target="_blank" href="https://twitter.com/AliHajjow"><img src="<?php echo base_url(); ?>ass/images/social/twitter.png" class="social-twitter"></a></li>
                                            <li><a target="_blank" href="https://www.linkedin.com/in/alihajjow/"><img src="<?php echo base_url(); ?>ass/images/social/linkedin.png" class="social-linkedin"></a></li>
                                        </ul>
                                        </p>

                                    </div>
                                </div>
                            
                        	</fieldset>
                    	
               		 </div>
                <div class="col-md-3">
                    <div class="section quick-rules">

                            <center><img src="<?php echo base_url() ?>ass/images/dub-gray.png" style="width: 100%"></center>

                            <p style="margin-top: 10px; color: #a6a8ab;font-weight: bolder;">Post a Job you have </p>
                            <a style="padding: 7px 8px 7px 8px;color: black;background-color: #808184; width: 100%; text-align: <?php echo LANG() == 'en' ? 'left' : 'right' ?>" id="btnn" href="#" onclick="add_dubarah()" class="btn"><img src="<?php echo base_url() ?>ass/images/plus-dub-gray.png" style="font-style:bold;height:24px;width:24px;margin-right:10px;"><strong>Add Dubarah</strong></a>

                            <p style="margin-top: 20px; color: #a6a8ab;font-weight: bolder;">Apply for jobs  already exist </p>
                            <a style="padding: 7px 8px 7px 8px;color: black;background-color: #808184; width: 100%; text-align: <?php echo LANG() == 'en' ? 'left' : 'right' ?>" id="btnn" href="<?php echo  base_url()?>jobs/2"  class="btn"><img src="<?php echo base_url() ?>ass/images/yes-dub.png" style="font-style:bold;height:24px;width:24px;margin-right:10px;">Apply for a <b>job</b></a>


                    </div>
                </div><!-- quick-rules -->

                	<!-- quick-rules -->
	                 
	                 
	                 
	                 
	                 
	                  </div><!-- photos-ad -->
	                </div>			
			     </div><!-- container -->
		       </section><!-- ad-profile-page -->	
		<?php $this->load->view('common/footer'); ?>
		
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>