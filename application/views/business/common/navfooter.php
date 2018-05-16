  <footer class="page-footer ">
    <div class="container" style="max-width: 900px;">
        <div class="row">
        	
                <div class="col-lg-3 col-sm-6">
                <div class="row">
                    <div class="col">
                    	                    <h5 class="text-dark " 	><?php echo trans('quick') ?></h5>
  					<div style="    background-color: gray !important;" class="divider"></div>
                            <ul style="padding-left: 0px;">
                            <li><a class="text-dark  text-lighten-3" target="_blank" href="<?php echo base_url()?>terms"><?php echo trans('termsofuse')?></a></li>
                            <li><a class="text-dark  text-lighten-3" target="_blank" href="<?php echo base_url()?>privacy"><?php echo trans('privacy_policy')?></a></li>
                            <li><a class="text-dark  text-lighten-3" target="_blank" href="#!">Media Kit</a></li>
                            <!-- commented in the old design so commented here and replaced with the "about us" #PE$$ -->
                            <!-- <li><a class="text-dark  text-lighten-3" target="_blank" href="<?php echo base_url()?>team"><?php echo trans('contact_us')?></a></li> -->
                            <li><a class="text-dark  text-lighten-3" target="_blank" href="<?php echo base_url()?>aboutus"><?php echo trans('about_us')?></a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-6">
                <div class="row">
                    <div class="col">
                    <h5 class="text-dark " ><?php echo 'Services'//trans('quick') ?></h5>
  				<div style="    background-color: gray !important;" class="divider"></div>
                        <ul style="padding-left: 0px;">
                        	
                       <li> <a class="text-dark text-lighten-3" target="_blank" href="<?php echo base_url() ?>Jobs"><?php echo 'Dubarah™ Jobs'//trans('profile') ?></a> </li>
                 <li>       <a class="text-dark text-lighten-3" target="_blank" href="<?php echo base_url() ?>Business"><?php echo 'Dubarah™ Business'//trans('logout') ?></a></li>
                    <li>    <a class="text-dark text-lighten-3" target="_blank" href="<?php echo base_url() ?>Hero"><?php echo 'Hero Citizen™'//trans('logout') ?></a></li>
                     <li>   <a class="text-dark text-lighten-3" target="_blank"  href="<?php echo base_url() ?>nocker™"><?php echo 'nocker™'//trans('logout') ?></a></li>
                    <li>    <a class="text-dark text-lighten-3" target="_blank" href="<?php echo base_url() ?>"><?php echo 'Syria Calender™'//trans('logout') ?></a></li>
                   <li>     <a class="text-dark text-lighten-3" target="_blank" href="<?php echo base_url() ?>"><?php echo 'Dubarji™ Game'//trans('logout') ?></a></li>
   					<li>	<a class="text-dark text-lighten-3" target="_blank"  href="<?php echo base_url() ?>"><?php echo 'Dubarah™'//trans('logout') ?></a></li>
                   <li>     <a class="text-dark text-lighten-3" target="_blank" href="<?php echo base_url() ?>"><?php echo 'Blog'//trans('logout') ?></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-1 col-sm-6">
            	</div>
            
           
            <div class="col-lg-3 col-sm-6">
           
            	<img style="margin-bottom: 10px" src="<?php echo base_url() ?>asset/imgs/ashoka dub.svg" class="img-fluid " >
                <h3 class="text-dark" style="font-size: 11px; font-weight:bold ">Dubarah™ is Non-Profit Corporation, incorporated under theCanada NFP Corporation Act. CN# 972045-6 <strong> ©2017 Dubarah, Inc.</strong><?php //echo trans('new_social_media') ?></h3>
                <?php $socials = $this->session->userdata('social');?>
                <a class="btn btn-social-icon btn-facebook btn-socialMedia" target="_blank" href="<?php echo $socials[0]->social_media_link?>">
                   <img src="<?php echo base_url() ?>asset/imgs/face.svg" />
                </a>

                <a class="btn btn-social-icon btn-twitter btn-socialMedia" target="_blank" href="<?php echo $socials[1]->social_media_link?>">
                      <img src="<?php echo base_url() ?>asset/imgs/tw.svg" />
                </a>

               
                <!-- added by #PE$$ -->
                <a class="btn btn-social-icon btn-linkedin btn-socialMedia" target="_blank" href="<?php echo $socials[3]->social_media_link?>">
                 
                      <img src="<?php echo base_url() ?>asset/imgs/linkedin.svg" />
                </a>
                <!-- link should be add to the database #PE$$-->
                <a class="btn btn-social-icon btn-google btn-socialMedia" target="_blank" href="https://plus.google.com/+DubarahNetwork">
                   
                      <img src="<?php echo base_url() ?>asset/imgs/g+.svg" />
                </a>

            </div>
            
        </div>
        
    </div>
    <img src="<?php echo base_url() ?>asset/imgs/footer.svg" class="img-fluid">
         
  </footer>