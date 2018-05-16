 <?php $this->load->view('common/header'); ?>

<!-- ad-profile-page -->
	<section id="main" class="clearfix  new-profile-page">
		<div class="container">
		
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url()?>"><?php echo trans('home') ?></a></li>
					<li><?php echo trans('my_applicants') ?></li>
				</ol><!-- breadcrumb -->						
				<h2 class="title"><?php echo trans('how_apply') ?></h2>
			</div><!-- banner -->
			
			<div class="new-profile section">	
				<div class="user-profile">
					<div class="user-images">
						<img src="<?php echo base_url()?>ass/images/dub-icon.png" alt="User Images"  class="img-responsive" style="width: 96px;margin-top: -15px;" >
					</div>
					<div class="user">
						<h2>Hello, <a href="#"><?php echo $this->session->userdata('username') ?></a></h2>
						<h5></h5>
					</div>

					<div class="favorites-user">
						<div class="my-news">
							<a href="#"><?php echo $this->session->userdata('dub_num'); ?><small><?php echo trans('my_dubarahs') ?></small></a>
						</div>
						<!--<div class="favorites">
							<a href="#">0<small>Favorites</small></a>
						</div>-->
					</div>								
				</div><!-- user-profile -->
						
				<ul class="user-menu">
					<li <?php echo $selected== 'my_profile' ?  'class="active"'  :  '';?> ><a href="<?php echo base_url()?>my_profile"><?php echo trans('my_profile') ?></a></li>
					
					<li <?php echo $selected== 'my_dubarah' ?  'class="active"'  :  '';?>><a href="<?php echo base_url()?>my_dubarah"><?php echo trans('my_dubarahs') ?></a></li>
					

					<!--<li><a href="favourite-news.html">Favourite news</a></li>
					<li><a href="archived-news.html">Archived news </a></li>
					<li><a href="pending-news.html">Pending approval</a></li>
					<li><a href="delete-account.html">Close account</a></li>-->
				</ul>
			</div><!-- new-profile -->	
		<div class="row">
                <div class="col-md-8">
                    
                        <fieldset>
                            <div class="section seller-info">
                            	

							<!-- ad-item -->
				<?php 
				    	$pages = $num_rows % 8 === 0 ? $num_rows / 8 : ((int) $num_rows / 8) + 1;
						$pages = (int) $pages;
				    	if ($results) { ?>
				    		
							<?php $i = (($page - 1) * 8) + 1; $comm = 0; $total_price = 0; foreach ($results as $result) { ?>

                			
            						  
							<div class="new-item job-new-item" style="background-color: #fafafa;border: 1px solid #dfdfdf;">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="<?php echo base_url().'/'  ?>"><img src="<?php echo base_url()?>ass/images/dub-icon.png" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="new-info">
									<span><a href="<?php echo base_url().'my_applicants/'?>" class="title"><?php echo $result['username'] ?></a> <a href="">
										<?php echo $result['lastname'] ?></a></span>
										<span><a href="<?php echo base_url().'my_applicants/'?>" class="title"><?php echo $result['email'] ?></a> </span>
									<div class="new-meta">
										<ul>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $result['gender']==1 ?   translate('male') : translate('female') ?></a></li>
											
										</ul>
									</div><!-- new-meta -->									
								</div><!-- new-info -->
								<div class="button">
									<a href="<?php echo base_url().'resume/'.$result['hash_id'] ?>" class="btn btn-primary"><?php translate('how_apply') ?></a>
								</div>
							</div><!-- item-info -->
						</div><!-- new-item -->		 
  						 <?php } ?>
							<!-- new-item -->
							

							<!-- new-section -->						
							<div class="new-section text-center">
								<a href="#"><img src="<?php echo base_url()?>ass/images/ads/3.jpg" alt="Image" class="img-responsive"></a>
							</div><!-- new-section -->
							
							<!-- new-item -->
	
							<?php if ($num_rows > 8): ?>
					<div class="text-center">
						<ul class="pagination ">
							<li><a href="<?php echo base_url()."my_applicants/$ad_id/1"?>" ><</a></li>
							<?php if ($page - 4 >= 1): ?>
								<li><a href="<?php echo base_url()."my_applicants/$ad_id/".($page - 4) ?>"><?php echo $page - 4 ?></a></li>
							<?php endif ?>
							<?php if ($page - 3 >= 1): ?>
								<li><a href="<?php echo base_url()."my_applicants/$ad_id/".($page - 3) ?>"><?php echo $page - 3 ?></a></li>
							<?php endif ?>
							<?php if ($page - 2 >= 1): ?>
								<li><a href="<?php echo base_url()."my_applicants/$ad_id/".($page - 2) ?>"><?php echo $page - 2 ?></a></li>
							<?php endif ?>
							<?php if ($page - 1 >= 1): ?>
								<li><a href="<?php echo base_url()."my_applicants/$ad_id/".($page - 1) ?>"><?php echo $page - 1 ?></a></li>
							<?php endif ?>
							<li class="active"><a href="#"><?php echo $page ?></a></li>
							<?php if ($page + 1 <= $pages): ?>
								<li><a href="<?php echo base_url()."my_applicants/$ad_id/".($page + 1) ?>"><?php echo $page + 1 ?></a></li>
							<?php endif ?>
							<?php if ($page + 2 <= $pages): ?>
								<li><a href="<?php echo base_url()."my_applicants/$ad_id/".($page + 2) ?>"><?php echo $page + 2 ?></a></li>
							<?php endif ?>
							<?php if ($page + 3 <= $pages): ?>
								<li><a href="<?php echo base_url()."my_applicants/$ad_id/".($page + 3) ?>"><?php echo $page + 3 ?></a></li>
							<?php endif ?>
							<?php if ($page + 4 <= $pages): ?>
								<li><a href="<?php echo base_url()."my_applicants/$ad_id/".($page + 4) ?>"><?php echo $page + 4 ?></a></li>
							<?php endif ?>
							<li><a href="<?php echo base_url()."my_applicants/$ad_id/".($pages) ?>">></a></li>
						</ul>
					</div>
				<?php endif ?>
				
			<?php } else { ?>
				<b><center><?php echo $this->lang->line('no_emps'); ?></center></b>
			<?php } ?>    
							<!-- pagination  
							<div class="text-center">
								<ul class="pagination ">
									<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
									<li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">...</a></li>
									<li><a href="#">10</a></li>
									<li><a href="#">20</a></li>
									<li><a href="#">30</a></li>
									<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>			
								</ul>
							</div><!-- pagination  -->					
						</div>
				
                           
	                           
                        	</fieldset>
                    	</form><!-- form -->
               		 </div>
                	<!-- quick-rules -->
	                  <div class="col-md-4">
	                    <div class="section quick-rules">
	                        <h4>Quick rules</h4>
	                     	 <p class="lead">  Posting an ad on <a href="<?php echo base_url()?>">Dubarah.com</a> is free! However, all posts must follow our rules:</p>
	                          <ul>
	                            <li>Make sure you post in the correct category.</li>
	                            <li>Do not post the same Dubarah more than once.</li>
	                            <li>Do not upload pictures with watermarks.</li>
	                            <li>Do not put your email or phone numbers in the title or description.</li>
	                            <li>You are responsible about the content of the post, and any abuse report will hold you responsible.</li>
	                         </ul>
	                       </div>
	                    </div><!-- quick-rules -->
	                  </div><!-- photos-ad -->
	                </div>			
			     </div><!-- container -->
		       </section><!-- ad-profile-page -->	
		<?php $this->load->view('common/footer'); ?>
		<script>
		function dis() {
	  
	 if (document.getElementById('send').checked) {
		 //var val = document.getElementById('submit');
			document.getElementById('submit').disabled = false;			
	}else{  
		    document.getElementById('submit').disabled = true;  
		       }};
		   
	$( ".select2" ).select2( {  maximumSelectionSize: 15 } );

    $( ":checkbox" ).on( "click", function() {
        $( this ).parent().nextAll( "select" ).select2( "enable", this.checked );
    });

    $( "#demonstrations" ).select2( { placeholder: "Select2 version", minimumResultsForSearch: -1 } ).on( "change", function() {
        document.location = $( this ).find( ":selected" ).val();
    } );

    $( "button[data-select2-open]" ).click( function() {
        $( "#" + $( this ).data( "select2-open" ) ).select2( "open" );
    });
    $(".form_datetime").datetimepicker({
        format: "dd mm yyyy"
    }); 
    function citys(id) {
        $.ajax({
            url: '<?php echo base_url(); ?>get_city/' + id,
            success: function(data) {
                if (data) {
                    $("#select2_3").html(data);
                };
            }
        });
    }
     <?php if ($this->session->userdata('suc_message')) { ?>
     setTimeout(function(){
    	
    	window.location.href='<?php echo  base_url()?>'},5000);
    
    <?php } ?>
</script>
