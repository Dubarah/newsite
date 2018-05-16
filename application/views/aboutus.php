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
						<h2><a href="#"><?php echo translate('aboutus') ?></a></h2>
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
		 	  <div class="col-md-9">
                  
                        <fieldset>
                               <div class="section seller-info">
                                <h4 <?php echo LANG() == 'ar' ? 'style="text-align: right"': '' ?>><?php echo trans('aboutus') ?></h4>     
                               <div class="description-info">
									<p  <?php echo LANG() == 'ar' ? 'style="text-align: right"': '' ?>><span><?php echo trans('about_dubarah') ?> </span></p>
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
                            
                            
                        	
                    	
               		
		 	
		 
	                <?php /*
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

	                </div> */ ?>
	               
	                <!-- photos-ad -->
	                
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
