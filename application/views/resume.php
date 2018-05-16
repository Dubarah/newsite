 <?php  $this->load->view('common/header'); ?>



<section class=" job-bg page  new-profile-page">
		<div class="container">
			<div class="breadcrumb-section"style=" margin-top: 69px;">
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url()?>"><?php echo trans('home')?></a></li>
					<li><?php echo trans('resume') ?></li>
				</ol>						
				<h2 class="title"><?php echo $user_info->username .' '.$user_info->lastname .' '. trans('resume') ?></h2>
			</div><!-- breadcrumb-section -->

			<div class="resume-content">
				<?php /*
				<div class="profile section clearfix">
					<div class="profile-logo">
					    <img class="img-responsive" src="images/job/resume.jpg" alt="Image">
					</div>
					<div class="profile-info">
					    <h1><?php echo $user_info->username .' '.$user_info->lastname  ?></h1>
					    <address>
					        <p> <?php echo trans('address') .' :'. $user_info->country_english_name .', '.$user_info->city_english_name  ?><br><?php echo trans('mobile').': '.$user_info->mobile   ?><br> <?php echo trans('email')?><a href="#"> <?php echo ': '.$user_info->email   ?></a></p>
					    </address>
					</div>					
				</div>*/?><!-- profile -->
				<div class="personal-deatils section">
				    <div class="icons">
				        <i class="fa fa-user-secret" aria-hidden="true"></i>
				    </div>  
				    <div class="personal-info">
				    	<h3></h3>
				        <ul class="address">
				            <li><h5><?php echo trans('full_name')?> </h5> <span>:</span><?php echo $user_info->username .' '.$user_info->lastname  ?></li>
				        	<li><h5><?php echo trans('gender')?></h5> <span>:</span><?php echo $user_info->gender==1 ?   translate('male') : translate('female')?></li>
				         	<li><h5><?php echo trans('email')?></h5> <span>:</span><?php echo $user_info->email   ?></li>
				            <li><h5><?php echo trans('mobile')?></h5> <span>:</span><?php echo $user_info->mobile ?>  </li>
				            <li><h5><?php echo trans('address')?></h5> <span>:</span><?php echo $user_info->country_english_name .', '.$user_info->city_english_name ?></li>
				        </ul>    	
				    </div>                               
				</div><!-- personal-deatils -->	
				
				
				<div class="work-history section">
			        <div class="icons">
			            <i class="fa fa-briefcase" aria-hidden="true"></i>
			        </div>   
			        <div class="work-info">
			        	<h3><?php echo trans('your_note')?></h3>
			        	<ul>
			        		
			        		<li>
				        		
				        		<p><?php echo $user_info->massage ?></p>
			        		</li>
			        	</ul>
			        </div>                                 
											
				
					<a href="<?php echo base_url().'download/'.$user_info->a_id?>" class=""><i class="fa fa-cloud-download">  <?php echo trans('download_cv')?></i></a>
		
				
				</div><!-- work-history 

				<div class="educational-background section">
					<div class="icons">
					    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</div>	
					<div class="educational-info">
						<h3>Education Background</h3>
						<ul>
							<li>
								<h4>Masters of Arts @ Montana Satet University</h4>
								<ul>
									<li>Year: <span>1999 - 2001</span> </li>
									<li>Concentration/Major: <span>Major in Accounting</span></li>
									<li>Course Duration: <span>2 Years</span></li>
									<li>Result: <span>4.00</span></li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</li>
							<li>
								<h4>Bachalor of Arts @ Universty of Bristol</h4>
								<ul>
									<li>Year: <span>1999 - 2001</span> </li>
									<li>Concentration/Major: <span>Major in Accounting</span></li>
									<li>Course Duration: <span>2 Years</span></li>
									<li>Result: <span>4.00</span></li>
								</ul>
								<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</li>
							<li>
								<h4>Diploma in Graphics Design @ Cincinnati Christian University</h4>
								<ul>
									<li>Year: <span>1999 - 2001</span> </li>
									<li>Concentration/Major: <span>Major in Accounting</span></li>
									<li>Course Duration: <span>2 Years</span></li>
									<li>Result: <span>4.00</span></li>
								</ul>
								<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
							</li>
						</ul>
					</div>				
				</div><!-- 

				<div class="special-qualification: section">
					<div class="icons">
					    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div>	
					<div class="qualification">
						<h3>Special Qualification:</h3>
						<ul>
							<li><span>1.</span> 5 years+ experience designing and building products In the Design &amp; IT industry.</li>
							<li><span>2.</span> Passion for people-centered design, solid intuition.</li>
							<li><span>3.</span> Skilled at any Kind Design Tools. </li>
							<li><span>4.</span> Hard Worker &amp; Quick Lerner.</li>
						</ul>
					</div>				
				</div>
				<!-- educational-background -->

				<!--<div class="language-proficiency section">
			        <div class="icons">
			            <i class="fa fa-language" aria-hidden="true"></i>
			        </div>
				    <div class="proficiency">
				    	<h3>Language Proficiency</h3>
				        <ul class="list-inline">
				            <li>
				                <h5>English</h5>
				                <ul>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				                </ul>
				            </li>
				            <li>
				                <h5>German</h5>
				                <ul>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				                </ul>
				            </li>
				            <li>
				                <h5>Spanish</h5>
				                <ul>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                </ul>
				            </li>
				            <li>
				                <h5>Latin</h5>
				                <ul>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
				                </ul>
				            </li>
				        </ul>
				    </div>
				</div> language-proficiency -->		

				

				
			</div><!-- resume-content -->						
		</div><!-- container -->
	</section>
	

	<?php $this->load->view('common/footer'); ?>
	
