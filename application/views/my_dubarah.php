 <?php $this->load->view('common/header'); ?>

<!-- ad-profile-page -->
	<section id="main" class="clearfix  new-profile-page">
		<div class="container">
		
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url()?>"><?php echo trans('home') ?></a></li>
					<li><?php echo trans('my_dubarahs') ?></li>
				</ol><!-- breadcrumb -->						
			<h3></h3>
			</div><!-- banner -->
			
			<?php $this->load->view('user_scction');?>	
		 <div class="row">
        
                <div class="col-md-8">
                  
                        <fieldset>  
                            <div class="section seller-info">
                            <h5><?php echo trans('my_dubarahs') ?></h5>	
									
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
										<a href="<?php echo base_url().'my_applicants/'.$result->advertisement_id  ?>"><img src="<?php echo $result->img ? base_url()."uploads/jobslogo/".$result->img : base_url()."ass/images/defult.png" ?>" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>
							<div class="new-info">
								<span><a href="<?php echo base_url().'my_applicants/'.$result->advertisement_id  ?>" class=title><?php echo $result->title ?></a> @ <a href="<?php echo base_url().'dubarah/'.$result->advertisement_id  ?>"><?php echo $result->employer ?></a></span>
								<div class="new-meta">
									<ul>
										<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $result->country_english_name .','. $result->address ?></a></li>
										<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $result->job_type==1 ?   translate('full_time') : translate('part_time') ?></a></li>
										
										<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i><?php echo $result->english_name?></a></li>
									</ul>
								</div><!-- new-meta -->									
							</div><!-- new-info -->
								<div class="button">
									<a href="<?php echo base_url().'dubarah/'.$result->advertisement_id  ?>" target="_blank" style="margin: 5px; padding: 5px" class="btn btn-primary"><?php translate('see_post') ?></a>
									<a href="<?php echo base_url().'my_applicants/'.$result->advertisement_id  ?>" style="margin: 5px; padding: 5px" class="btn btn-primary"><?php translate('who_applyed') ?></a>
									<a href="<?php echo base_url().'edit_dubarah/'.$result->advertisement_id  ?>" style="margin: 5px; padding: 5px" target="_blank" class="btn btn-primary"><?php translate('edit') ?></a>
									<a href="<?php echo base_url().'unpublish_dubarah/'.$result->advertisement_id  ?>" style="margin: 5px; padding: 5px" class="btn btn-primary"><?php translate('unpublish') ?></a>
									<a href="<?php echo base_url().'delete_dubarah/'.$result->advertisement_id  ?>" style="margin: 5px; padding: 5px" target="_blank" class="btn btn-primary"><?php translate('delete') ?></a>
								</div>
							</div>
							<!-- item-info -->
						</div>
						<!-- new-item -->		 
  						 <?php } ?>
							<!-- new-item -->
								<!-- new-section -->						
						
							<?php /*<div class="new-section text-center">
								<a href="#"><img src="<?php echo base_url()?>ass/images/ads/3.jpg" alt="Image" class="img-responsive"></a>
							</div><!-- new-section --> */?>
							
							<!-- new-item -->
	
							<?php if ($num_rows > 8): ?>
					<div class="text-center">
						<ul class="pagination ">
							<li><a href="<?php echo base_url()."my_dubarah//1"?>" ><</a></li>
							<?php if ($page - 4 >= 1): ?>
								<li><a href="<?php echo base_url()."my_dubarah/".($page - 4) ?>"><?php echo $page - 4 ?></a></li>
							<?php endif ?>
							<?php if ($page - 3 >= 1): ?>
								<li><a href="<?php echo base_url()."my_dubarah/".($page - 3) ?>"><?php echo $page - 3 ?></a></li>
							<?php endif ?>
							<?php if ($page - 2 >= 1): ?>
								<li><a href="<?php echo base_url()."my_dubarah/".($page - 2) ?>"><?php echo $page - 2 ?></a></li>
							<?php endif ?>
							<?php if ($page - 1 >= 1): ?>
								<li><a href="<?php echo base_url()."my_dubarah/".($page - 1) ?>"><?php echo $page - 1 ?></a></li>
							<?php endif ?>
							<li class="active"><a href="#"><?php echo $page ?></a></li>
							<?php if ($page + 1 <= $pages): ?>
								<li><a href="<?php echo base_url()."my_dubarah/".($page + 1) ?>"><?php echo $page + 1 ?></a></li>
							<?php endif ?>
							<?php if ($page + 2 <= $pages): ?>
								<li><a href="<?php echo base_url()."my_dubarah/".($page + 2) ?>"><?php echo $page + 2 ?></a></li>
							<?php endif ?>
							<?php if ($page + 3 <= $pages): ?>
								<li><a href="<?php echo base_url()."my_dubarah/".($page + 3) ?>"><?php echo $page + 3 ?></a></li>
							<?php endif ?>
							<?php if ($page + 4 <= $pages): ?>
								<li><a href="<?php echo base_url()."my_dubarah/".($page + 4) ?>"><?php echo $page + 4 ?></a></li>
							<?php endif ?>
							<li><a href="<?php echo base_url()."my_dubarah/".($pages) ?>">></a></li>
						</ul>
					</div>
				<?php endif ?>
				
			<?php } else { ?>
				<b><center><?php echo $this->lang->line('no_dubarah'); ?></center></b>
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
					</div><!-- recommended-ads -->

                                
                         
                           
	                           
                        	</fieldset>
                    	</form><!-- form -->
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
               		 </div>
                	<!-- quick-rules -->
	                  
	                  </div><!-- photos-ad -->
	                </div>			
			     </div><!-- container -->
		       </section><!-- ad-profile-page -->	
		<?php $this->load->view('common/footer'); ?>
		<script>
		
		
		
		
		document.getElementById('getval').addEventListener('change', readURL, true);
		function readURL(){
		    var file = document.getElementById("getval").files[0];
		    var reader = new FileReader();
		    reader.onloadend = function(){
		        document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";        
		    }
		    if(file){
		        reader.readAsDataURL(file);
		    }else{
		    }
		}
		
		
	
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
    
	function photo_up()  {
		if (typeof FormData !== 'undefined') {

        // send the formData
        var formData = new FormData( $("#photo_up")[0] );

	        $.ajax({
	            url : '<?php echo base_url() ?>up_img',  // Controller URL
	            type : 'POST',
	            data : formData,
	            async : false,
	            cache : false,
	            contentType : false,
	            processData : false,
	            success : function(data) {
	                res = JSON.parse(data);
	               
	                
	                if (res[0]) {
	                	swal({
		            title: '<?php echo trans('fail'); ?>',
		            text: '<?php echo trans('img_up'); ?>' ,
		            type: 'success',
		            html:true,
		            
		            showConfirmButton:true
		        });
	                	
	                } else if (res[1]){
	                	swal({
		            title: '<?php echo trans('fail'); ?>',
		            text: res[1] ,
		            type: 'error',
		             html:true,
		            
		            showConfirmButton:true
		        });
	                } else {
	      swal({
		            title: '<?php echo trans('fail'); ?>',
		            text: '<?php echo trans('try_agin'); ?>' ,
		            type: 'error',
		            
		            showConfirmButton:true
		        });
	                };
	            }
	        });
	
	    } else {
	       message("Your Browser Don't support FormData API! Use IE 10 or Above!");
	    }   
      };
      
</script>

