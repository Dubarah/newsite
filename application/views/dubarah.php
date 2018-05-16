 <?php $this->load->view('common/header'); ?>
 <section id="main" class="clearfix details-page">
		<div class="container">
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					
					
					<li><a href="<?php echo base_url() ?>"><?php echo translate('home') ?></a></li>
					
					<li><?php echo translate('dubarah') ?></li>
			
				</ol>
				<!-- breadcrumb -->
				<?php foreach ($dubarah->result() as $du) {?>
					<h2 class="title"></h2>						
			</div>
			  <!-- banner -->
		<?php /*<div class="section slider">					
				<div class="row">
					<!-- carousel -->
					
					<div class="col-md-7">
						<div id="product-carousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#product-carousel" data-slide-to="0" class="active">
									<img src="<?php echo base_url()?>ass/images/slider/list-1.jpg" alt="Carousel Thumb" class="img-responsive">
								</li>
								<li data-target="#product-carousel" data-slide-to="1">
									<img src="<?php echo base_url()?>ass/images/slider/list-2.jpg" alt="Carousel Thumb" class="img-responsive">
								</li>
								<li data-target="#product-carousel" data-slide-to="2">
									<img src="<?php echo base_url()?>ass/images/slider/list-3.jpg" alt="Carousel Thumb" class="img-responsive">
								</li>
								<li data-target="#product-carousel" data-slide-to="3">
									<img src="<?php echo base_url()?>ass/images/slider/list-4.jpg" alt="Carousel Thumb" class="img-responsive">
								</li>
								<li data-target="#product-carousel" data-slide-to="4">
									<img src="<?php echo base_url()?>ass/images/slider/list-5.jpg" alt="Carousel Thumb" class="img-responsive">
								</li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<!-- item -->
								<div class="item active">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="<?php echo base_url()?>ass/images/slider/1.jpg" alt="Featured Image" class="img-responsive">
									</div>
								</div><!-- item -->

								<!-- item -->
								<div class="item">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="<?php echo base_url()?>ass/images/slider/2.jpg" alt="Featured Image" class="img-responsive">
									</div>
								</div><!-- item -->

								<!-- item -->
								<div class="item">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="<?php echo base_url()?>ass/images/slider/3.jpg" alt="Featured Image" class="img-responsive">
									</div>
								</div><!-- item -->

								<!-- item -->
								<div class="item">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="<?php echo base_url()?>ass/images/slider/4.jpg" alt="Featured Image" class="img-responsive">
									</div>
								</div><!-- item -->

								<!-- item -->
								<div class="item">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="<?php echo base_url()?>ass/images/slider/5.jpg" alt="Featured Image" class="img-responsive">
									</div>
								</div><!-- item -->
							</div><!-- carousel-inner -->

							<!-- Controls -->
							<a class="left carousel-control" href="#product-carousel" role="button" data-slide="prev">
								<i class="fa fa-chevron-left"></i>
							</a>
							<a class="right carousel-control" href="#product-carousel" role="button" data-slide="next">
								<i class="fa fa-chevron-right"></i>
							</a><!-- Controls -->
						</div>
					</div><!-- Controls -->	
					
					<?php foreach ($dubarah->result() as $du) {?>

					<!-- slider-text -->
					<div class="col-md-5">
						<div class="slider-text">
							
							<h3 class="title"><?php echo $du->title?><span></span></h3>
							<span><?php echo $du->english_name?></span>
						
							<p><span>Offered by: <a href="#"><?php echo $du->username?> </a></span>
							<span> Ad ID:<a href="#" class="time"><?php echo $du->advertisement_id?></a></span></p>
							<span class="icon"><i class="fa fa-clock-o"></i><a href="#"><?php echo $du->created_at?></a></span>
							<span class="icon"><i class="fa fa-map-marker"></i><a href="#"><?php echo $du->country_english_name?></a></span>
							<span class="icon"><i class="fa fa-suitcase online"></i><a href="#">Dealer <strong>(online)</strong></a></span>
							
							<!-- short-info -->
							<div class="short-info">
								<h4>Short Info</h4>
								<p><strong>Condition: </strong><a href="#">New</a> </p>
								<p><strong>Brand: </strong><a href="#">Apple</a> </p>
								<p><strong>Features: </strong><a href="#">Camera,</a> <a href="#">Dual SIM,</a> <a href="#">GSM,</a> <a href="#">Touch screen</a> </p>
								<p><strong>Model: </strong><a href="#">iPhone 6</a></p>
							</div><!-- short-info -->
							
							<!-- contact-with -->
							<div class="contact-with">
								<h4>Contact with </h4>
								<span class="btn btn-red show-number">
									<i class="fa fa-phone-square"></i>
									<span class="hide-text">Click to show phone number </span> 
									<span class="hide-number">012-1234567890</span>
								</span>
								<a href="#" class="btn"><i class="fa fa-envelope-square"></i>Reply by email</a>
							</div><!-- contact-with -->
							
							<!-- social-links -->
							<div class="social-links">
								<h4>Share this ad</h4>
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
									
								</ul>
							</div>
							<!-- social-links -->	<?php }?>					
						</div>
					</div>
					<!-- slider-text -->				
				</div>				
			</div> 
			*/
			  	$cr =$du->created_at;
					
						$ex =$du->expiration;
						
						$data= $ex;
						
						  ?>
			<div class="job-details">
				<div class="section new-item job-new-item ">
					<div class="row">
					<div class="col-lg-12">
					
					<div class="col-md-4" style="width: 213px; height: 154px;margin-top: 12px; margin-bottom: 12px;">
				
								<img style="width: 139px; height: auto;" src="<?php echo $du->img ? base_url()."uploads/jobslogo/".$du->img : base_url()."ass/images/defult.png" ?>" alt="Image" class="img-responsive">
						<!-- item-image -->
					</div>
						
						<div class="col-md-9 row" style="    margin-top: 25px;">
							
							
							<span style="    font-size: 22px;"><span><a href="#" class="title"><?php echo $du->title ?></a></span> @ <a href="#"> <?php echo $du->employer ?></a></span>
							<div class="new-meta">
								<ul>
									
									<li style="margin-bottom: 7px; margin-left: 3px;"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $du->country_english_name ?> ,</a>
									<a href="#"> <?php echo $du->address ?>  </a></li>
									
									<li style="margin-bottom: 7px; margin-left: 12px;"><a href="#"> <i class="fa fa-clock-o" aria-hidden="true"></i><?php echo LANG() == 'en' ? $du->type_name : $du->type_name_ar ?></a></li> 
									<li style="margin-bottom: 7px; margin-left: 0px;"><i class="fa fa-hourglass-start" aria-hidden="true"></i><?php echo trans('deadline') ?>: <?php echo $du->diff." ".trans('days') ?></li>
									
								</ul>
							</div><!-- new-meta -->									
						</div><!-- new-info -->
				<?php if($skils_num){ ?>
			<div class="col-md-9 row"style="margin-top: 15px;>
			<span  style="font-size: 15px;"><a href="#" class="title"><?php echo translate('req_skills') ?></a></span> 

						
						<div class="new-meta">
								<ul>
								
									<?php $i = 1; foreach ($skills->result() as $skill) {?>
										
									
									<li style="margin-bottom: 7px;     margin-left: 2px;"><a  href="#"><i class="fa fa-tags" aria-hidden="true"> <span  style="font-size: 15px" ><?php echo $skill->skill_name ?></span></i></a></li>
									<?php  $i==3  ?  ''  : ''?>
									
									
									<?php  $i++; } ?>
								</div>
							  </ul>
							  </div>
						   </div>
						</div>
					<?php } ?>			
				</div>

				</div><!-- job-new-item -->
				<div class="job-details-info">
					<div class="row">
						<div class="col-sm-8">
							<div class="section job-description">
								<div class="description-info">
									<h1>Description</h1>
									<p><span><?php echo $du->description ?></span></p>
								</div>
	
						<div class="contact-with">
							<h4></h4>
							
							
							
							
							
							
							<?php 
							if($this->session->userdata('user_id') && $this->session->userdata('user_id') == $du->user_id){ ?>
								
								
							<a  class="btn" href="<?php echo base_url()."edit_dubarah/".$job_id?>"><?php echo trans('edit')?></a>

							
							
							<?php } else{
								 if($du->phone){ ?> 
							<span class="btn btn show-number" onclick="myphone()">
								<i class="fa fa-phone-square"></i>
								
								<span class="hide-text"><?php echo trans('phone_apply') ?></span> 
								<?php if ($this->session->userdata('user_id') && $this->session->userdata('user_id') != $du->user_id) { ?>
								<span class="hide-number" ><?php echo $du->phone?></span>
								<?php } ?>
								
							</span>
							<?php } ?>
							<?php if($du->email){ ?> 
							<a  class="btn" href="#uploud" onclick="myFunction()"><i class="fa fa-envelope-square"></i> <?php echo trans('email_apply')?></a>
							<?php } if($du->link){ ?> 
							<a href="<?php echo $du->link ?>"  class="btn" ><i class="fa fa-envelope-square"></i> <?php echo 'Go'//trans('email_apply')?></a>
							<?php } } ?>
							
							<div id="fb-root"> </div><div class="fb-share-button" 
							    data-href="<?php echo base_url().'job/'. $job_id; ?>" 
							    data-layout="button_count">
							  </div>
							<!--<ul class="share-social" >
							<li><?php echo translate('share')?></li>
							<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
							
						</ul>-->
							</div>		
													
							</div>	
							
							
							 <?php if($this->session->userdata('user_id') && $this->session->userdata('user_id') != $du->user_id){?>
							<div class="section job-description"  id="uploud" style="display ='none'">
								<div class="description-info" id="for">
									<h1><?php echo trans('job_up') ?></h1>
								</div>
								
					
		
                               <form method="post" enctype="multipart/form-data" action="<?php echo base_url()."dubarah/" .$job_id ?>">
                               
                               
                               <div class="row form-group brand-name" >
                                    <label class="col-sm-3 label-title"><?php echo translate('firstname') ?><span class="required"></span></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px">
                                        <input type="text" value="<?php echo set_value('firstname') ? set_value('firstname') : $user->username ?>"
                                         name="firstname" class="form-control login-form-input login-form-input-email"
                                               style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               placeholder="Ex. maher">
                                    </div>
                                    <span><?php echo form_error('firstname') ? form_error('firstname') : '' ?></span>
                                </div>
                                 <div class="row form-group brand-name" >
                                    <label class="col-sm-3 label-title"><?php echo translate('last_name') ?><span class="required"></span></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px">
                                        <input type="text"  value="<?php echo set_value('lastname') ? set_value('lastname') : $user->lastname ?>"
                                        name="lastname" class="form-control login-form-input login-form-input-email"
                                               style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               placeholder="Ex. kalash">
                                    </div>
                                    <span><?php echo form_error('lastname') ? form_error('lastname') : '' ?></span>
                                </div>
                                
                                <div class="row form-group brand-name" >
		                                   <label class="col-sm-3 label-title"><?php echo trans('my_skills') ?></label>
		                                     <div class="col-sm-7" style="margin-bottom: 30px">
		                                        <div class="select2-wrapper">
		                                            <select class="form-control select2" placeholder="Pick your Skills"  multiple="multiple" name="skills[]">
		                                           			
		                                           			
		                                                  <?php foreach ($not as $no) {?>
		                                                    <option style="color: red; background:#ffffff;" selected="selected" value="<?php echo $no->skill_id ?>" ><?php echo $no->skill_name ?></option>
		                                              		<?php $not_skill[] = $no->skill_name ?>
		                                                <?php } ?>
		                                                
		                                                
		                                                <?php foreach ($userskills as $skill) {?>
		                                                    <option selected="selected" value="<?php echo $skill['skill_id'] ?>" ><?php echo $skill['skill_name'] ?></option>
		                                                <?php } ?>
		                                                <?php foreach ($allskils->result() as $skill) {?>
		                                                    <option value="<?php echo $skill->skill_id ?>" ><?php echo $skill->skill_name ?></option>
		                                                <?php } ?>
		                                            </select>
		                                         </div>
		                                         
		                                        <span><?php echo form_error('skills') ? form_error('skills') : '' ?></span>
		                                     <?php if ($n) { ?>
		                                         <span style="color: red"><?php echo $not_num ? trans('not_skill')  : '' ?> <?php echo implode(' ,', $not_skill) ?></span>
		                                     <?php } ?>
		                                    </div>
		                                </div>
                                  <div class="row form-group item-description" >
                                    	
                                    <label class="col-sm-3 label-title"><?php echo trans('your_note') ?><span class="required">*</span></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px">
                                            <textarea class="form-control" style="height: 200px" name="massage" id="textarea" placeholder=""  ><?php echo set_value('message'); ?></textarea>
                                              <span><?php echo form_error('your_note') ? form_error('your_note') : '' ?></span>  
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="row form-group item-description">
                                    	
                                   <div class="row form-group add-image"style="margin-left: 13px;">
                                	
                                    <label class="col-sm-3 label-title"><?php echo translate('upload_cv') ?><span class="required">*</span></label>
                                    
                                 
										
                                    <div class="col-sm-3" style="margin-bottom: 50px" >
                         
                                        <div class="upload-section" >
                  						<label class="fa fa-upload" for="input-image-hidden" style="margin-left: 11px;">
                  							<input type="file"  id="input-image-hidden" onchange="show()"  name="fs_images1" style="display:none"/>
                  						</label>              
                                        </div>
                                    </div>
                                    <div id="showup">
                                       <label class="col-sm-3 upload-image" style="border: none;" >
											<img style="max-width: 31%;" src="<?php echo base_url() ?>ass/images/true.png"  />
											
												
										</label>
										</div>
										<span><?php echo form_error('logo') ? form_error('logo') : '' ?></span>
                                </div>
                                        </div>
                                        
                            <!-- section -->
									<div class="row">
                         		<button class="btn btn-primary" onclick="submit()" type="button" style="float: right;margin-right: 70px;" ><i class="fa fa-briefcase" aria-hidden="true"></i> Apply</button>

							</div>					</form>						
							</div>								
						
					
			<?php } ?>
			</div>
						<div class="col-sm-4">
							<div class="section job-short-info">
								<h1><?php echo trans('short_info') ?></h1>
								<ul>
									<li><span class="icon"><i><img style="margin-left: -4px;" src="<?php echo base_url() ?>ass/images/asset1.png"  /></i> </span><?php echo trans('job_type') ?>: <?php echo lang()=='en'? $du->type_name : $du->type_name_ar?></li>
									<li><span class="icon"><i><img style="margin-left: -4px;" src="<?php echo base_url() ?>ass/images/asset2.png"  /></i></span><?php echo trans('category') ?>: <a href="#"><?php echo $du->english_name?></a></li>
									
									<li><span class="icon"><i><img style="margin-left: -4px;" src="<?php echo base_url() ?>ass/images/asset4.png"  /></i></span><?php echo trans('rgender') ?>: <?php  if ($du->gender==3){ echo trans('any'); } elseif ($du->gender == 2) {echo trans('female'); } else {echo trans('male');} ?> <span class="text-center"></span></li>
									<li><span class="icon"><i><img style="margin-left: -4px;" src="<?php echo base_url() ?>ass/images/asset5.png"  /></i></span><?php echo trans('post_date') ?>: <?php echo $du->created_at ?> <span class="text-center"></span></li>
									<li><span class="icon"><i><img style="margin-left: -4px;" src="<?php echo base_url() ?>ass/images/asset6.png"  /></i></span><?php echo trans('deadline') ?>: <?php echo $du->diff." ".trans('days') ?> <span class="text-center"></span></li>
									<li><span class="icon"><i><img style="margin-left: -4px;" src="<?php echo base_url() ?>ass/images/asset7.png"  /></i></span><?php echo trans('postedby') ?>: <?php echo $du->username.' '.$du->lastname ?> <span class="text-center"></span></li>

								
								
								</ul>
							</div>
							</div>
						 
		
			
			
			
			</div>
		<?php /*	<div class="section new-item job-new-item col-md-8">
					<div class="item-info">
						<div class="item-image-box">
							<div class="item-image"style="height:95px;">
								<img src="<?php echo base_url()."uploads/jobslogo/".$du->img ?>"  alt="Image" class="img-responsive"  >
							</div><!-- item-image -->
						</div>
						<?php  
						$cr =$du->created_at;
					
						$ex =$du->expiration;
						
						$data= strtotime($cr)+(7*24*60*60*$ex);
						
						
						
						
						  ?>
						<div class="new-info">
							<span><span><a href="#" class="title"><?php echo $du->title ?></a></span>@<a href="#"><?php echo $du->employer ?></a></span>
							<div class="new-meta">
								<ul>
									<div class="row" style="margin-bottom: 15px; margin-left: 4px ">
									<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $du->country_english_name ?></a></li>
									<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $du->address ?></a></li>
									
									<li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i><?php echo $du->job_type==1 ?   translate('full_time') : translate('part_time') ?></a></li>
									</div>
									<div class="row" style=" margin-left: 4px ">
									<li><i class="fa fa-hourglass-start" aria-hidden="true"></i>Application Deadline : <?php echo date("Y-m-d h:i" ,$data)?> </li>
									</div>
								</ul>
								</div>
								
								
								
							<!-- new-meta -->									
						</div>
						<!-- new-info -->
					</div><!-- item-info -->
					<?php if($skils_num){ ?>
					<div class="row col-md-12" style="margin-bottom: 50px;margin-left: 98px;">
						<h3><a href="#" class="title"><?php echo translate('req_skills') ?></a></h3>
						<div class="new-meta">
								<ul>
									<div class="row" style="margin-bottom: 21px;margin-left: 4px;">
									<?php $i = 1; foreach ($skills->result() as $skill) {?>
										
									
									<li><a href="#"><i class="fa fa-tags" aria-hidden="true"><span><?php echo $skill->skill_name ?></span></i></a></li>
									<?php echo $i==3  ?  '</div><div class="row" style="margin-left:4px;">'  : ''?>
									
									
									<?php  $i++; }?>
									</div>
								</ul>
								</div>
						
						
					</div>
					<?php } ?>
					
					<div class="social-media">
						<div class="button">
							<button class="btn btn-primary" onclick="myFunction()"><i class="fa fa-briefcase" aria-hidden="true"></i>Apply For This Job</button>
						<!--	<a href="#" class="btn btn-primary bookmark"><i class="fa fa-bookmark-o" aria-hidden="true"></i>Bookmark</a>-->
						</div>
						<ul class="share-social">
							<li><?php echo translate('share')?></li>
							<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
							
						</ul>
					</div>					
				</div><!-- slider -->
				 */?>
				<?php } ?>  
				
			
				<?php /*				
			<div class="recommended-info">
				<div class="row">
					<div class="col-sm-8">	
						 
                            <div class="section seller-info">
                                <h4><?php echo trans('job_up') ?></h4>
                               <form method="post" enctype="multipart/form-data" action="<?php echo base_url()."dubarah/" .$job_id ?>">
                                
                                  <div class="row form-group item-description">
                                    	
                                    <label class="col-sm-3 label-title"><?php echo trans('your_note') ?><span class="required">*</span></label>
                                    <div class="col-sm-7" style="margin-bottom: 30px">
                                            <textarea class="form-control" style="height: 200px" name="massage" id="textarea" placeholder=""  ></textarea>
                                              <span><?php echo form_error('your_note') ? form_error('your_note') : '' ?></span>  
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="row form-group item-description">
                                    	
                                   <div class="row form-group add-image"style="margin-bottom: 30px; margin-left: 13px;">
                                	
                                    <label class="col-sm-3 label-title"><?php echo translate('upload_cv') ?><span class="required">*</span></label>
                                    
                                 
										
                                    <div class="col-sm-3" style="margin-bottom: 50px" >
                         
                                        <div class="upload-section" >
                  						<label class="fa fa-upload" for="input-image-hidden" style="margin-left: 11px;">
                  							<input type="file"  id="input-image-hidden" onchange="show()"  name="cv1" style="display:none"/>
                  						</label>              
                                        </div>
                                    </div>
                                    <div id="showup">
                                       <label class="col-sm-3 upload-image" style="border: none;" >
													
													
												<img style="max-width: 31%;" src="<?php echo base_url() ?>ass/images/true.png"  />
											
												
										</label>
										</div>
										<span><?php echo form_error('logo') ? form_error('logo') : '' ?></span>
                                </div>
                                        </div>
                                        
                            <!-- section -->
									<div class="row">
                         		<button class="btn btn-primary" style="float: right;margin-right: 70px;" ><i class="fa fa-briefcase" aria-hidden="true"></i> Apply</button>

			</div>					</form>
						
					</div>
					
				<?php /*	<div class="col-sm-4 text-center">
						<div class="recommended-cta">					
							<div class="cta">
								<!-- single-cta -->						
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-secure">
										<img src="<?php echo base_url()?>ass/images/icon/13.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>Secure Trading</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->
								
								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-support">
										<img src="<?php echo base_url()?>ass/images/icon/14.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>24/7 Support</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->
							

								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-trading" >
										<img src="<?php echo base_url()?>ass/images/icon/15.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>Easy Trading</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->

								<!-- single-cta -->
								<div class="single-cta">
									<h5>Need Help?</h5>
									<p><span>Give a call on</span><a href="tellto:08048100000"> 08048100000</a></p>
								</div><!-- single-cta -->
							</div>
						</div><!-- cta -->
					</div><!-- recommended-cta-->*/?>
				</div><!-- row -->
			</div><!-- recommended-info -->
		</div><!-- container -->
	</section><!-- main -->
			
	<?php $this->load->view('common/footer'); ?>
	<script>
	
	window.onload = function() 
	{
	    document.getElementById('uploud').style.display = 'none';
	    document.getElementById('showup').style.display = 'none';
	    document.getElementById('not').style.color = 'red';
	    document.getElementById('not').style.backgrund = 'red';
    
	}
	
	
	

	 function myFun() 
	 {
        document.getElementById('uploud').style.display = 'none';
     } 

	function myFunction() {
    	<?php if (!$this->session->userdata('user_id')) { ?>
			swal({
		            title: '<?php echo trans('fail'); ?>',
		            text: '<?php echo trans('needlogin'); ?>' ,
		            type: 'error',
		            
		            showConfirmButton:true
		        });
		        <?php } elseif($du->user_id == $this->session->userdata('user_id')) { ?>
		        	swal({
		            title: '<?php echo trans('fail'); ?>',
		            text: '<?php echo trans('owner'); ?>' ,
		            type: 'error',
		            
		            showConfirmButton:true
		        });
		        	
		<?php } else { ?>
			 document.getElementById('uploud').style.display = 'block';
			  
		<?php } ?>
    } 
    
   function myphone() {
    	<?php if (!$this->session->userdata('user_id') || $this->session->userdata('user_id') == $du->user_id) { ?>
    		var text = '<?php echo !$this->session->userdata('user_id') ? trans('needlogin') : trans('cannt_show_my_phone'); ?>';
			swal({
				
		            title: '<?php echo trans('fail'); ?>',
		            text: text ,
		            type: 'error',
		            
		            showConfirmButton:true
		        });
		<?php } else { ?>
			 document.getElementById('uploud').style.display = 'none';
			  
		<?php } ?>
    } 
    
    
    function show() {
  
      <?php if($this->session->userdata('user_id')){?>
        document.getElementById('showup').style.display = 'block';
       <?php } ?>
    
    } 
    $( ".select2" ).select2( {  maximumSelectionSize: 15 } );
(function(d, s, id) {
	    var js, fjs = d.getElementsByTagName(s)[0];
	    if (d.getElementById(id)) return;
	    js = d.createElement(s); js.id = id;
	    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	    fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	</script>
	