
<?php $this->load->view('common/header'); ?>
 	<section id="home-one-info" class="clearfix home-one">
		<!-- world -->
		<div id="banner-two" class="parallax-section img-responsive">
            <img src="<?php echo base_url()?>ass/images/main.jpg" class="img-responsive">
			<div class="text-center" style="position: absolute; top: 70%;  left: 50%; transform: translate(-50%, -50%);">
				<!-- banner -->
				<div class="col-sm-12">
					<div class="banner"><?php /*
						<h1 class="title"><?php translate('welcome') ?></h1>
						<h3><?php translate('we_link') ?><br><?php translate('refugees') ?>  <span style="color:#ff3a1d"><?php translate('solution') ?></span></h3>
						<br /><br />*/?>
						<!-- banner-form -->
						<div class="banner-form">

							<form method="get" action="<?php echo base_url()."jobs/"?>">
								<!-- category-change
								<div class="dropdown category-dropdown">
			 						<a data-toggle="dropdown" href="#"><span class="change-text">Select Category</span> <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu category-change">
										<li>Jobs</li>

									</ul>
								</div> category-change -->

								<input type="text" name="search" class="form-control" placeholder="What are you looking for...?"style="box-shadow: 0px 0px 8px 5px #b7b7b7" >
								<button type="submit" class="form-control" value="Search"><?php echo trans('search'); ?></button>
							</form>
						</div><!-- banner-form -->
						
						<!-- banner-socail -->
						<ul class="banner-socail">
							<?php foreach ($social as $value) { ?>
							<li><a target="_blank" href="<?php echo $value->social_media_link?>"><img src="<?php echo base_url()."ass/images/social/$value->social_media_name" ?>.png" class="social-<?php echo $value->social_media_name ?>"></a></li>
							<?php } ?>
						</ul><!-- banner-socail -->
					</div>
				</div><!-- banner -->
			</div><!-- row -->
		</div><!-- world -->
		
		<div class="container" >
			<!--
			<div class="col-md-12">
			<div class="section category-new text-center" style="width: 100%">
				<div class="col-md-4">
					<a href="<?php echo base_url()?>categories_main/2">
						<div class="category-icon"><img src="<?php echo base_url() ?>ass/images/icon/1.png" alt="images" class="img-responsive"></div>
						<span class="category-title">Jobs</span>
						<span class="category-quantity">()</span>
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo base_url()?>categories_main/3">
							<div class="category-icon"><img src="<?php echo base_url() ?>ass/images/icon/2.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Housing</span>
							<span class="category-quantity">(76212)</span>
						</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo base_url()?>categories_main/4">
							<div class="category-icon"><img src="<?php echo base_url() ?>ass/images/icon/3.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Investments</span>
							<span class="category-quantity">(212)</span>
						</a>
				</div>
				<?php /*
				<ul class="category-list">	
					<li class="category-item">
						<a href="">
							<div class="category-icon"><img src="<?php echo base_url() ?>ass/images/icon/1.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Jobs</span>
							<span class="category-quantity">()</span>
						</a>
					</li><!-- category-item -->
					<!--
					<li class="category-item">
						<a href="">
							<div class="category-icon"><img src="<?php echo base_url() ?>ass/images/icon/2.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Housing</span>
							<span class="category-quantity">(76212)</span>
						</a>
					</li><!-- category-item -->
					<!--
					<li class="category-item">
						<a href="">
							<div class="category-icon"><img src="<?php echo base_url() ?>ass/images/icon/3.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Investments</span>
							<span class="category-quantity">(212)</span>
						</a>
					</li> -->
					<!--
					<li class="category-item">
						<a href="categories.php">
							<div class="category-icon"><img src="<?php echo base_url() ?>ass/images/icon/4.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Education</span>
							<span class="category-quantity">(972)</span>
						</a>
					</li><!-- category-item -->
					<!--
					<li class="category-item">
						<a href="categories.php">
							<div class="category-icon"><img src="<?php echo base_url() ?>ass/images/icon/5.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Expatriate Guide</span>
							<span class="category-quantity">(1298)</span>
						</a>
					</li><!-- category-item -->
					<!--
					<li class="category-item">
						<a href="categories.php">
							<div class="category-icon"><img src="<?php echo base_url() ?>ass/images/icon/6.png" alt="images" class="img-responsive"></div>
							<span class="category-title">Initiatives</span>
							<span class="category-quantity">(76212)</span>
						</a>
					</li><!-- category-item -->	<!-- category-new -->	*/ ?>	
				</ul>				
			</div>
			

			<!-- trending-news -->
		<?php /*	<div class="section trending-news">
				<div class="section-title tab-manu">
					<h4>Trending Ads</h4>
					 <!-- Nav tabs -->      
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#recent-news"  data-toggle="tab">Recent Ads</a></li>
						<li role="presentation"><a href="#popular" data-toggle="tab">Popular Ads</a></li>
						<li role="presentation"><a href="#hot-news"  data-toggle="tab">Hot Ads</a></li>
					</ul>
				</div>

				<!-- Tab panes -->
				<div class="tab-content">
					<!-- tab-pane -->
					<div role="tabpanel" class="tab-pane fade in active" id="recent-news">
						<!-- new-item -->
						
							<?php foreach ($resent->result() as $al) {?>
			 
            						  
							<div class="new-item row">
								<div class="item-image-box col-sm-4">
									<!-- item-image -->
									<div class="item-image">
										<a href="<?php echo base_url().'dubarah/'.$al->advertisement_id  ?>"><img src="<?php echo base_url()?>ass/images/listing/1.jpg" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div><!-- item-image-box -->
								
								<!-- rending-text -->
								<div class="item-info col-sm-8">
									<!-- new-info -->
									<div class="new-info">
										
										<h4 class="item-title"><a href="#"><?php echo $al->english_name ?></a></h4>
										<div class="item-cat">
											<span><a href="#"><?php echo $al->english_name ?></a></span> 
											<span><a href="#"></a></span>
										</div>										
									</div><!-- new-info -->									
																	
									<!-- new-meta -->
									<div class="new-meta">
										<div class="meta-content">
											<span class="dated"><a href="#"><?php echo $al->created_at ?></a></span>
										</div>									
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="<?php echo $al->country_english_name ?>"><i class="fa fa-map-marker"></i> </a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
										</div><!-- item-info-right -->
									</div><!-- new-meta -->
								</div><!-- item-info -->
							</div>
  						 <?php } ?>
						<!-- new-item -->
						
						
						<!-- new-item -->
<!-- new-item -->

						<!-- new-item -->
<!-- new-item -->		
						
					</div><!-- tab-pane -->
					
					<!-- tab-pane -->
					<div role="tabpanel" class="tab-pane fade" id="popular">
						
						<div class="new-item row">
							<div class="item-image-box col-sm-3">
								<!-- item-image -->
								<div class="item-image">
									<a href="details.html"><img src="<?php echo base_url() ?>ass/images/trending/3.jpg" alt="Image" class="img-responsive"></a>
								</div><!-- item-image -->
							</div><!-- item-image-box -->
							
							
							<div class="item-info col-sm-9">
								<!-- new-info -->
								<div class="new-info">
									<h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
									<h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
									<div class="item-cat">
										<span><a href="#">Electronics & Gedgets</a></span> /
										<span><a href="#">Mobile Phone</a></span>
									</div>	
								</div><!-- new-info -->											
								
								<!-- new-meta -->
								<div class="new-meta">
									<div class="meta-content">
										<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
										<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
									</div>									
									<!-- item-info-right -->
									<div class="user-option pull-right">
										<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
										<a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-suitcase"></i> </a>											
									</div><!-- item-info-right -->
								</div><!-- new-meta -->
							</div><!-- item-info -->
						</div><!-- new-item -->	
						
				
					</div><!-- tab-pane -->

					<!-- tab-pane -->
					<div role="tabpanel" class="tab-pane fade" id="hot-news">
						
							<div class="new-item job-new-item">
								<div class="item-info">
									<div class="item-image-box">
										<div class="item-image">
											<a href="job-details.html"><img src="<?php echo base_url() ?>ass/images/trending/3.jpg" alt="Image" class="img-responsive"></a>
										</div><!-- item-image -->
									</div>

									<div class="new-info">
										<span><a href="job-details.html" class="title">Project Manager</a> @ <a href="#">Dominos Pizza</a></span>
										<div class="new-meta">
											<ul>
												<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
												<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
												<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											</ul>
										</div><!-- new-meta -->									
									</div><!-- new-info -->
								</div><!-- item-info -->
							</div><!-- job-new-item -->
						<!-- new-item -->
						
					</div><!-- tab-pane -->
				</div>
			</div><!-- trending-news -->	
				<!-- recommended-news -->
				*/?>

				<div class="section trending-news latest-jobs-news">
				<div class="section-title tab-manu"style="  border-bottom: 0px solid #f2f2f2;">
					<h4><a href="<?php base_url()?>categories_main/2" style="color: black"><?php translate('jobs') ?></a></h4>
					 <!-- 
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#recent-jobs" data-toggle="tab" style="color: black"><?php translate('recent_jobs') ?></a></li>
					<!--	<li role="presentation"><a href="#hot-jobs" data-toggle="tab" style="color: black"><?php translate('most_viewed') ?></a></li>

					</ul>-->
				</div>

				<div class="tab-content">
				<?php /*	<div role="tabpanel" class="tab-pane fade in" id="hot-jobs">
						<div class="new-item job-new-item" style="background-color: #fafafa;">
							<div class="item-info">
								<div class="item-image-box">
									<div class="item-image">
										<a href="job-details.html"><img src="<?php echo base_url()?>ass/images/listing/1.jpg" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
								</div>

								<div class="new-info">
									<span><a href="job-details.html" class=title>CTO</a> @ <a href="#">Volja Events & Entertainment</a></span>
									<div class="new-meta">
										<ul>
											<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US </a></li>
											<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
											<li><a href="#"><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
										</ul>
									</div><!-- new-meta -->									
								</div><!-- new-info -->
								<div class="button">
									<a href="#" class="btn btn-primary">Apply Now</a>
								</div>
							</div><!-- item-info -->
						</div><!-- new-item -->	



	
					</div><!-- tab-pane -->*/?>
					
					
					
					

					<div role="tabpanel" class="tab-pane fade in active" id="recent-jobs">
					<?php foreach ($resent->result() as $al) {?>
						<div class="new-item job-new-item" style="background-color: #fafafa;border: 1px solid #dfdfdf;">
							<div class="row">
					<div class="col-lg-12">
					
					<div class="col-md-4" style="width: 120px; height: auto;margin-top: 12px; margin-bottom: 12px;">
										<a href="<?php echo base_url().'job/'.$al->advertisement_id  ?>"><img src="<?php echo $al->img ? base_url()."uploads/jobslogo/".$al->img : base_url()."ass/images/defult.png" ?>" alt="Image" class="img-responsive"></a>
									</div><!-- item-image -->
									<div class="col-md-9 row" style="    margin-top: 25px;">
							
							
							<span style="    font-size: 22px;"><span><a href="<?php echo base_url().'job/'.$al->advertisement_id  ?>" class="title"><?php echo $al->title ?></a></span> @ <a href="<?php echo base_url().'job/'.$al->advertisement_id  ?>"><?php echo $al->employer ?></a></span>
									<div class="new-meta">
								<ul>
									
									<li style="margin-bottom: 7px;  margin-left:  3px; "><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $al->country_english_name ?> ,</a>
									<a href="#"> <?php echo $al->address ?>  </a></li>
									
									<li style="margin-bottom: 7px;      margin-right: 9px;   margin-left: 2px;"><a href="#"> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo lang()=='en'? $al->type_name : $al->type_name_ar?></a></li>
								
									
									<li style="margin-bottom: 7px;     margin-left: 3px;"><i class="fa fa-hourglass-start" aria-hidden="true"></i> <?php echo trans('deadline') ?> : <?php echo $al->diff." ".trans('days') ?></li>
								</ul>
								
									</div><!-- new-meta -->									
								</div><!-- new-info -->
								<div class="button row">
									<a href="<?php echo base_url().'job/'.$al->advertisement_id ?>" class="btn btn-primary"><?php translate('apply_now') ?></a>
								</div>
							</div><!-- item-info -->
						
						</div>
						</div><!-- new-item -->	
					<?php } ?>
						<!-- new-item -->	
					<!-- tab-pane -->

			<!--trending ads -->		
			
               <center> <a href="<?php echo base_url()?>jobs" style="color: grey" >See More</a></center>
			</div><!-- workshop-traning -->

	

		

			<!-- cta -->
			<!--
			<div class="cta text-center">
				<div class="row">
				
					<div class="col-sm-4">
						<div class="single-cta">
							<a href="#">
							
								<div class="cta-icon icon-secure">
									<img src="<?php echo base_url() ?>ass/images/icon/old/ask.png" alt="Icon" class="img-responsive">
								</div>

								<h4>Ask Dubarji</h4>
								<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
							</a>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="single-cta">
							<a href="#">
							
								<div class="cta-icon icon-support">
									<img src="<?php echo base_url() ?>ass/images/icon/old/housing.png" alt="Icon" class="img-responsive">
								</div><!-- cta-icon 

								<h4>Housing</h4>
								<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
							</a>
						</div>
					</div>

			
					<div class="col-sm-4">
						<div class="single-cta">
							<a href="#">
							<!--	
								<div class="cta-icon icon-trading">
									<img src="<?php echo base_url() ?>ass/images/icon/old/Suggestions.png" alt="Icon" class="img-responsive">
								</div><!-- cta-icon 

								<h4>Suggestions</h4>
								<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
							</a>
						</div>
					</div><!-- single-cta -->
				</div><!-- row -->
			</div><!-- cta -->	
		</div>
		</div><!-- container -->
	</section>
	<?php $this->load->view('common/footer'); ?>	