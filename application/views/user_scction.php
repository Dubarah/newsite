	 
			<div class="new-profile section">	
				<div class="user-profile">
					 <form method="post" id="photo_up" enctype="multipart/form-data" action="">
						<div class="user-images" id='profile-upload' style="margin-top: 11px;
						background-image: url('<?php echo $user->photo ? base_url().'uploads/users/'.$user->photo : base_url().'ass/images/image_profile.jpg' ?>')">
						<div class="hvr-profile-img"><input   type="file" name="fs_image1" id='getval' onchange="photo_up()"  class="upload w180" title="Dimensions 180 X 180" id="imag"></div>
  						<i class="fa fa-camera"></i>
 						 </div>
 					</form>

				
					
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

					<!--<li><a href="archived-news.html">Archived news </a></li>
					<li><a href="pending-news.html">Pending approval</a></li>
					<li><a href="delete-account.html">Close account</a></li>-->
				</ul>
			</div><!-- new-profile -->	