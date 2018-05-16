
 
 <?php $this->load->view('common/header'); ?>

<section id="main" class="clearfix category-page main-categories">
		<div class="container">
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url()?>"><?php echo trans('home') ?></a></li>
					<li><?php echo trans('jobs') ?></li>
				</ol><!-- breadcrumb -->						
				<h2 class="title"></h2>
			</div>
			
			<div class="new-profile section">	
				
						
				<ul class="user-menu">
				
					<!--<li><a href="archived-news.html">Archived news </a></li>
					<li><a href="pending-news.html">Pending approval</a></li>
					<li><a href="delete-account.html">Close account</a></li>-->
				</ul>
			</div><!-- new-profile -->	
				<!-- banner-form -->
			
					<div class="category-info">	
				<div class="row" style="margin-bottom: 10px">
					<div class="col-sm-12">				
						<div class="section recommended-news" style="min-height: 90px;background-color: rgba(204, 204, 204, 0.61);margin-bottom: 22px;">
							
							<form method="get" action="<?php echo base_url()."jobs/1$url_ext" ?>">
						  	
							<div class="col-sm-3">
								<div class="select2-wrapper">
									<select  class="form-control select2" id="country" placeholder="Pick your country" name="country_id">
										<option></option>
											<?php foreach ($countrys->result() as $country) {?>
	
	            						 <option style="text-align: center;" value="<?php echo $country->country_id ?>" ><?php echo $country->country_english_name ?></option>
	        						     <?php } ?>
									</select>
								</div>
																
							</div>
							<div class="col-sm-3">
								<div class="select2-wrapper">
									<select  class="form-control select2" id='cat_id' placeholder="Pick your job category" name="cat_id">
										<option></option>
											<?php foreach ($sub->result() as $cat) {?>
		
		        						 <option value="<?php echo $cat->category_id ?>" ><?php echo $cat->english_name ?></option>
		    						     <?php } ?>
									</select>
								</div>
							</div><!-- category-change -->
							
							<!-- language-dropdown -->
							<div class="col-sm-4">
								<input type="text" class="form-control" name="search" style="height: auto;" placeholder="Type Your key word">
							</div>
							<div class="col-sm-2">
								<button type="submit" class="btn" value="Search" style=" background-color: #808080; margin-top: 0px;padding: 6px 31px 6px 31px;"><strong style="color:white"><?php echo trans('search') ?></strong></button>
							</div>
						</form>
				
						</div>
					</div><!-- recommended-ads -->

				
				</div>	
			</div>
			
			<div class="category-info">	
				<div class="row" style="margin-bottom: 10px">
					<div class="col-sm-12">				
						<div class="section recommended-news" style="min-height: 20px;background-color: rgba(204, 204, 204, 0.61);margin-bottom: 10px;">
							
							
						  	
							<div class="col-sm-1">
								Filter:
							</div>
							<div class="col-sm-1">
								<a href="<?php echo base_url()."jobs/1".($url_ext ? "$url_ext&filter=all" : "?filter=all") ?>"><?php echo LANG() == 'en' ? 'All' : 'الكل' ?></a>
							</div><!-- category-change -->
							<?php foreach ($job_types as $value): ?>
								<div class="col-sm-1">
									<a href="<?php echo base_url()."jobs/1".($url_ext ? "$url_ext&filter=$value->type_id" : "?filter=$value->type_id") ?>"><?php echo LANG() == 'en' ? $value->type_name : $value->type_name_ar ?></a>
								</div><!-- category-change -->
							<?php endforeach ?>
							
							
						</div>
					</div><!-- recommended-ads -->

				
				</div>	
			</div>
						<!-- category-change -->
		
						
			<div class="category-info">	
				<div class="row">
					<div class="col-sm-12 col-md-12">				
						<div class="section recommended-news">
							<!-- featured-top -->
							<div class="featured-top">
								<h4><?php echo trans('jobs') ?></h4>
										
							</div><!-- featured-top -->	

							<!-- ad-item -->
				<?php 
				    	$pages = $num_rows % 8 === 0 ? $num_rows / 8 : ((int) $num_rows / 8) + 1;
						$pages = (int) $pages;
				    	if ($results) { ?>
				    		
							<?php $i = (($page - 1) * 8) + 1; $comm = 0; $total_price = 0; foreach ($results as $result) { ?>
						<div class="new-item job-new-item" style="background-color: #fafafa;border: 1px solid #dfdfdf;">
							<div class="row">
					<div class="col-lg-12">
					
					<div class="col-md-4" style="width: 120px; height: auto;margin-top: 12px; margin-bottom: 12px;">
										<a href="<?php echo base_url().'job/'.$result->advertisement_id  ?>"><img src="<?php echo $result->img ? base_url()."uploads/jobslogo/".$result->img : base_url()."ass/images/defult.png" ?>" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
									<div class="col-md-9 row" style="    margin-top: 25px;">
							
							
							<span style="    font-size: 22px;"><span><a href="<?php echo base_url().'job/'.$result->advertisement_id  ?>" class="title"><?php echo $result->title ?></a></span> @ <a href="<?php echo base_url().'job/'.$result->advertisement_id  ?>"><?php echo $result->employer ?></a></span>
									<div class="new-meta">
								<ul>
									
									<li style="margin-bottom: 7px;  margin-left:  3px;     "><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $result->country_english_name ?> ,</a>
									<a href="#"> <?php echo $result->address ?>  </a></li>
									
									<li style="margin-bottom: 7px;     margin-right: 9px;    margin-left: 12px;"><a href="#"> <i class="fa fa-clock-o" aria-hidden="true"></i><?php echo lang()=='en'? $result->type_name : $result->type_name_ar?></a></li>
								
									
									<li style="margin-bottom: 7px;     margin-left: 0px;"><i class="fa fa-hourglass-start" aria-hidden="true"></i> <?php echo trans('deadline') ?> : <?php echo $result->diff." ".trans('days') ?></li>
								</ul>
								
									</div><!-- new-meta -->									
								</div><!-- new-info -->
								<div class="button row">
									<a href="<?php echo base_url().'job/'.$result->advertisement_id ?>" class="btn btn-primary"><?php translate('apply_now') ?></a>
								</div>
							</div><!-- item-info -->
						
						</div>
						</div><!-- new-item -->	
                			
            				
  						 <?php } ?>
							<!-- new-item -->
							

							<!-- new-section -->	
							<?php /*					
							<div class="new-section text-center">
								<a href="#"><img src="<?php echo base_url()?>ass/images/ads/3.jpg" alt="Image" class="img-responsive"></a>
							</div>*/?>
							
							
							<!-- new-item -->
	
							<?php if ($num_rows > 8): ?>
					<div class="text-center">
						<ul class="pagination ">
							<li><a href="<?php echo base_url()."jobs/1"?>" ><</a></li>
							<?php if ($page - 4 >= 1): ?>
								<li><a href="<?php echo base_url()."jobs/".($page - 4).$url_ext ?>"><?php echo $page - 4 ?></a></li>
							<?php endif ?>
							<?php if ($page - 3 >= 1): ?>
								<li><a href="<?php echo base_url()."jobs/".($page - 3).$url_ext ?>"><?php echo $page - 3 ?></a></li>
							<?php endif ?>
							<?php if ($page - 2 >= 1): ?>
								<li><a href="<?php echo base_url()."jobs/".($page - 2).$url_ext ?>"><?php echo $page - 2 ?></a></li>
							<?php endif ?>
							<?php if ($page - 1 >= 1): ?>
								<li><a href="<?php echo base_url()."jobs/".($page - 1).$url_ext ?>"><?php echo $page - 1 ?></a></li>
							<?php endif ?>
							<li class="active"><a href="#"><?php echo $page ?></a></li>
							<?php if ($page + 1 <= $pages): ?>
								<li><a href="<?php echo base_url()."jobs/".($page + 1).$url_ext ?>"><?php echo $page + 1 ?></a></li>
							<?php endif ?>
							<?php if ($page + 2 <= $pages): ?>
								<li><a href="<?php echo base_url()."jobs/".($page + 2).$url_ext ?>"><?php echo $page + 2 ?></a></li>
							<?php endif ?>
							<?php if ($page + 3 <= $pages): ?>
								<li><a href="<?php echo base_url()."jobs/".($page + 3).$url_ext ?>"><?php echo $page + 3 ?></a></li>
							<?php endif ?>
							<?php if ($page + 4 <= $pages): ?>
								<li><a href="<?php echo base_url()."jobs/".($page + 4).$url_ext ?>"><?php echo $page + 4 ?></a></li>
							<?php endif ?>
							<li><a href="<?php echo base_url()."jobs/".($pages).$url_ext ?>">></a></li>
							
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
					</div><!-- recommended-ads -->

				
				</div>	
			</div>
			
		</div><!-- container -->
	</section><!-- main -->
	
	<?php $this->load->view('common/footer'); ?>
	

	<script>
	$( ".select2" ).select2( {  maximumSelectionSize: 6 } );

	$( ":checkbox" ).on( "click", function() {
		$( this ).parent().nextAll( "select" ).select2( "enable", this.checked );
	});

	$( "#cat_id" ).select2( { placeholder: "Select2 version" });
	$( "#country" ).select2( { placeholder: "Select2 version" });

	$( "button[data-select2-open]" ).click( function() {
		$( "#" + $( this ).data( "select2-open" ) ).select2( "open" );
	});
	 $(".form_datetime").datetimepicker({
        format: "dd mm yyyy"
    });
    
	</script>