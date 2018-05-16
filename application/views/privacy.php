 <?php $this->load->view('common/header'); ?>

<!-- ad-profile-page -->
	<section id="main" class="clearfix  ad-profile-page">
		<div class="container">
		
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url()?>"><?php echo translate('home') ?></a></li>
					<li><?php echo trans('privacy_policy') ?></li>
				</ol><!-- breadcrumb -->						
				<h2 class="title"></h2>
			</div><!-- banner -->
		 <div class="adpost-details">
            <div class="row">
               
               		  <div class="col-md-12">
                    
                        <fieldset>
                            <div class="section seller-info">
                                <h4 <?php echo LANG() == 'ar' ? 'style="text-align: right"': '' ?>><?php echo trans('privacy_policy') ?></h4>  
                 				<?php echo trans('privacy') ?>
                            </div>
                            
                            
                        	</fieldset>
                    	</form><!-- form -->
               		 </div>
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