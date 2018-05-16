  <?php $this->load->view('newIndex/header')?>
  <!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5dnR8s3xWmYrn9cSZ5oCFcA9Sfs0DoFo";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->

  <div class="container" style="width: 50%;position:relative;left: -80px;">
    <div style="margin-top: 25%">
      <h2  class="text-white " >We never stop looking for ways to make people's lives better.</h2>
      <h6 class="text-white"  style="padding-top: 15px;">Not because we have to, but because it's a commitment.</h6>
      <?php if(!$this->session->userdata('user_id')){ ?>
      <button type="button" style="margin-top: 35px;width:23%;" onclick="location.href = '<?php echo base_url() ?>signup';" class="btn btn-outline mar-right red text-white btn-block-sm add-dubarah-btn">Join US</button>
      <?php }?>
      <button type="button" onclick="location.href = '<?php echo base_url() ?>Donate';" style="margin-top: 35px;" class="btn btn-outline-secondary text-white btn-block-sm mar-right">DONATE NOW</button>
    </div>
  </div>
</div>
 
<div class="container">
	
	<div class="row" style="margin-top: 50px ;">
    <div class="col-lg-6">
      <div class="media">
        <img class="mr-3 rounded-circle" width="100" src="<?php echo base_url()?>asset/imgs/dubarji.svg" style="position: relative;top: -10px;" >
        <div class="media-body mar-top ">
          <h6 class="font-weight-bold"> <p>Dubarah a Canadian not for profit, aims to support Syrians worldwide, through practical and creative solutions to make their lives better.</p>  <a href="#">MORE</a> </h6>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="media">
        <img class="mr-3" src="<?php echo base_url()?>asset/imgs/world.svg"  width="100">
        <div class="media-body">
          <h3 class="mt-0">3,200,650</h3>
          <h5 class="mt-0 font-weight-bold">BENEFICIARIES</h5>
          Since Feb 11th, 2013 - Realtime update
        </div>
      </div>
    </div>
  </div>

  <div class="divider" style="margin: 40px 0 !important;"></div>
  <h2 class="text-center font-weight-bold" style="margin-bottom: 30px  ;"> WHAT WE DO </h2>
  <div class="responsive row">
    <?php 	//here ?>
      <div class="col-lg-2 card-size" >
        <div class="card text-center duServicesImg" style="background-color: #eee;">
          <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/dujobsi.svg" alt="Card image cap">
          <div class="card-body duServicesCBody">
            <p class="card-text serv-card">Post a job or apply for a full-time and part-time jobs around the world.</p>
            <a href="<?php echo base_url().'jobs' ?>" class="btn btn-light btn-block" style="border-color: #141415;">More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-2 card-size" >
        <div class="card text-center duServicesImg" style="background-color: #eee;">
          <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/dubusi.svg" alt="Card image cap">
          <div class="card-body duServicesCBody">
            <p class="card-text serv-card">List your business and reach customers nearby you.</p>
            <a href="<?php echo base_url().'DuBusiness' ?>" class="btn btn-light btn-block" style="border-color: #141415;">More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-2 card-size"  >
        <div class="card text-center duServicesImg" style="background-color: #eee;">
          <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/herologo.svg" alt="Card image cap">
          <div class="card-body duServicesCBody">
            <p class="card-text serv-card">List your achievements, and let all the community know what you did so far.</p>
            <a href="<?php echo base_url().'HeroCitizen' ?>" class="btn btn-light btn-block" style="border-color: #141415;">More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-2 card-size" >
        <div class="card text-center duServicesImg" style="background-color: #eee;">
          <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/dublogi.svg" alt="Card image cap">
          <div class="card-body duServicesCBody">
              <p class="card-text serv-card">We’are committed to post and share best info to support and empower our members.</p>
              <a href="<?php echo'http://blog.dubarah.com' ?>" class="btn btn-light btn-block" style="border-color: #141415;">More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-2 card-size">
        <div class="card text-center duServicesImg" style="background-color: #eee;">
          <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/nocer.svg" alt="Card image cap">
          <div class="card-body duServicesCBody">
            <p class="card-text serv-card">Post a project or start getting paid by offering services to the nearby community.</p>
            <a href="<?php echo base_url().'Nocker' ?>" class="btn btn-light btn-block" style="border-color: #141415;">More</a>
          </div>
        </div>
        <span class="flag flag-can flag-2x mar-right"></span><span>Canada Only</span>
      </div>

      <div class="col-lg-2 card-size"  >
        <div class="card text-center duServicesImg" style="background-color: #eee;">
          <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/huplogo.svg" alt="Card image cap">
          <div class="card-body duServicesCBody">
            <p class="card-text serv-card" >We are committed to support Syrian entrepreneurs to launch their services.</p>
            <a href="<?php echo base_url().'DuHub' ?>" class="btn btn-light btn-block" style="border-color: #141415;">More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-2 card-size">
        <div class="card text-center duServicesImg" style="background-color: #eee;">
          <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/dusoli.svg" alt="Card image cap">
          <div class="card-body duServicesCBody">
            <p class="card-text serv-card" >An online brand and communications consultancy offering a fully integrated service to a combination of local, regional and global clients.</p>
            <a href="<?php echo base_url().'DuSolution' ?>" class="btn btn-light btn-block" style="border-color: #141415;">More</a>
          </div>
        </div>
      </div>
        
      <div class="col-lg-2 card-size">
        <div class="card text-center duServicesImg" style="background-color: #eee;">
          <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/moshmoshi.svg" alt="Card image cap">
          <div class="card-body duServicesCBody">
            <p class="card-text serv-card" >Bringing more creativity into the world.</p>
            <a href="<?php echo base_url().'Mshmosh' ?>" class="btn btn-light btn-block" style="border-color: #141415;">More</a>
          </div>
        </div>
      </div>
    <?php   //tohere ?>
  </div>
</div>
<!-- Image here -->
<img src="<?php echo base_url()?>asset/imgs/worldChart.svg" style="margin: 50px 0">

<div class="container" style="max-width: 950px;">
  <div class="row mar-top ">
    <div class="col-lg-10">
  		<img style="width: 20%;" src="<?php echo base_url() ?>asset/imgs/dublack.svg"><span class="red-text" style="font-size: 25px;position: relative;top: 10px;padding-left: 10px;"><strong>Info Blog</strong></span>
    </div>
    <div class="col-lg-2">
      <a href="#" class="red-text float-right"><strong>+ Add Post</strong></a>
    </div>
  </div>

  <div class="divider"></div>

  <div class="row">
    <div class="col-lg-12">
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="san_francisco" role="tabpanel">
          <div class="row">
            <div class="col-lg-3">
              <div class="card du-blog-homecard">
                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/blog/كامبريدج-218x150.png" alt="Card image cap">
                
                  <h4 class="blogtitle">Card title</h4>
              
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card du-blog-homecard">
                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/blog/jobs-websites-leb-218x150" alt="Card image cap">
                 <h4 class="blogtitle">Card title</h4>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card du-blog-homecard">
                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/blog/WUSC-218x150.png" alt="Card image cap">
                 <h4 class="blogtitle">Card title</h4>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card du-blog-homecard">
                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/blog/aga-khan-218x150.png" alt="Card image cap">
                 <h4 class="blogtitle">Card title</h4>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="card du-blog-homecard">
                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/blog/fake-news-218x150.png" alt="Card image cap">
                 <h4 class="blogtitle">Card title</h4>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card du-blog-homecard">
                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/blog/asfari-218x150.png" alt="Card image cap">
                 <h4 class="blogtitle">Card title</h4>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card du-blog-homecard">
                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/blog/ANU_scholarship-218x150.png" alt="Card image cap">
                 <h4 class="blogtitle">Card title</h4>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="card du-blog-homecard">
                <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/blog/turk-scholarship-218x150.png" alt="Card image cap">
                 <h4 class="blogtitle">Card title</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="damascus" role="tabpanel">
          <!-- empty -->
        </div>
        <div class="tab-pane fade" id="san_jose" role="tabpanel">
          <!-- empty -->
        </div>
      </div>
    </div>
  </div>

 <div class="text-center mar-top" style="margin: 50px 0;">
    <h6><a><u>See More Posts</u></a></h6>
  </div>
</div>

<div class="jumbotron jumbotron-fluid">
    <div class="container" style="max-width: 950px;">
          <div class="row mar-top ">
            <div class="col-lg-10">
                <img style="width: 20%;" src="<?php echo base_url() ?>asset/imgs/dublack.svg"> <a href="<?php echo base_url()?>jobs"><span class="red-text" style="font-size: 25px;padding-left: 10px;position:relative;top: 7px;text-decoration: none;"><strong>Jobs</strong></span></a>
            </div>
            <div class="col-lg-2">
                <a href="<?php echo base_url()?>add_dubarah" class="red-text float-right"><strong>+ Add Job</strong></a>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
            <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
              <?php if(isset($country_j)):?>
                <li class="nav-item">
                    <a class="nav-link active home-nave-links" data-toggle="pill" href="#<?php echo str_replace(' ', '', $country_j);?>1" role="tab" aria-controls="<?php echo $country_j;?>" aria-selected="true"><?php echo $country_j;?></a>
                </li>
              <?php endif;?>
              <?php if(isset($country_j1)):?>
                <li class="nav-item">
                    <a class="nav-link home-nave-links " data-toggle="pill" href="#<?php echo str_replace(' ', '', $country_j1);?>1" role="tab" aria-controls="<?php echo $country_j1;?>" aria-selected="false"><?php echo $country_j1;?></a>
                </li>
              <?php endif;?>
              <?php if(isset($country_j2)):?>
                <li class="nav-item">
                    <a class="nav-link home-nave-links " data-toggle="pill" href="#<?php echo str_replace(' ', '', $country_j2);?>1" role="tab" aria-controls="<?php echo $country_j2;?>" aria-selected="false"><?php echo $country_j2;?></a>
                </li>
              <?php endif;?>
              <?php if(isset($country_j3)):?>
                <li class="nav-item">
                    <a class="nav-link home-nave-links " data-toggle="pill" href="#<?php echo str_replace(' ', '', $country_j3);?>1" role="tab" aria-controls="<?php echo $country_j3;?>" aria-selected="false"><?php echo $country_j3;?></a>
                </li>
              <?php endif;?>
            </ul>
            <div class="col-lg-12">
                <div class="tab-content" id="pills-tabContent">
                  <?php if(isset($country_j)):?>
                    <div class="tab-pane fade show active" id="<?php echo str_replace(' ', '', $country_j);?>1" role="tabpanel">
                      <div class="row">
                        <?php foreach($jobs as $job): ?>
                          <div class="col-lg-4">
                            <div class="card du-job-homecard">
                              <div class="card-body du-job-homecard">
                                <h4 class="card-title "><strong><u><a href="<?php echo base_url().'job/'.$job->advertisement_id ?>"><?php echo $job->title ?></a></u></strong></h4>
                                <p class="card-title"><?php echo $job->address ?></p>
                                <p class="card-text text-muted"><?php $i = 0;
                                 foreach ($jobSkills[$job->advertisement_id] as $skill) {
                                    if($i == 2){
                                      echo "..... ";
                                      break;
                                    }
                                    echo $skill->skill_name.', ';
                                    $i++;
                                  }
                                  echo "<br />";
                                  echo lang()=='en' ? $job->type_name.', '.$job->employer : $job->type_name_ar.', '.$job->employer ?> </p>
                              </div>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  <?php endif;?>

                  <?php if(isset($country_j1)):?>
                    <div class="tab-pane fade <?php echo (!isset($country_j)) ? 'show active': '';?>" id="<?php echo str_replace(' ', '', $country_j1);?>1" role="tabpanel">
                      <div class="row">
                        <?php foreach($jobs1 as $job): ?>
                          <div class="col-lg-4">
                              <div class="card du-job-homecard">
                                  <div class="card-body du-job-homecard">
                                      <h4 class="card-title "><strong><u><a href="<?php echo base_url().'job/'.$job->advertisement_id ?>"><?php echo $job->title ?></a></u></strong></h4>
                                      <p class="card-title"><?php echo $job->address ?></p>
                                      <p class="card-text text-muted">
                                      	<?php $i = 0; foreach ($jobSkills[$job->advertisement_id] as $skill) {
                                          if($i == 2){
                                            echo "..... ";
                                            break;
                                          }
                                          echo $skill->skill_name.', ';
                                          $i++;
                                        }
                                        echo "<br />";
                                        echo lang()=='en' ? $job->type_name.', '.$job->employer : $job->type_name_ar.', '.$job->employer ?> </p>
                                  </div>
                              </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  <?php endif;?>

                  <?php if(isset($country_j2)):?>
                    <div class="tab-pane fade" id="<?php echo str_replace(' ', '', $country_j2);?>1" role="tabpanel">
                      <div class="row">
                        <?php foreach($jobs2 as $job): ?>
                          <div class="col-lg-4">
                            <div class="card du-job-homecard">
                              <div class="card-body du-job-homecard">
                                <h4 class="card-title "><strong><u><a href="<?php echo base_url().'job/'.$job->advertisement_id ?>"><?php echo $job->title ?></a></u></strong></h4>
                                <p class="card-title"><?php echo $job->address ?></p>
                                <p class="card-text text-muted"><?php $i = 0; foreach ($jobSkills[$job->advertisement_id] as $skill) {
                                    if($i == 2){
                                      echo "..... ";
                                      break;
                                    }
                                    echo $skill->skill_name.', ';
                                    $i++;
                                  }
                                  echo "<br />";
                                  echo lang()=='en' ? $job->type_name.', '.$job->employer : $job->type_name_ar.', '.$job->employer ?> </p>
                              </div>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  <?php endif;?>

                  <?php if(isset($country_j3)):?>
                    <div class="tab-pane fade" id="<?php echo str_replace(' ', '', $country_j3);?>1" role="tabpanel">
                      <div class="row">
                        <?php foreach($jobs3 as $job): ?>
                          <div class="col-lg-4">
                            <div class="card du-job-homecard">
                              <div class="card-body du-job-homecard">
                                <h4 class="card-title "><strong><u><a href="<?php echo base_url().'job/'.$job->advertisement_id ?>"><?php echo $job->title ?></a></u></strong></h4>
                                <p class="card-title"><?php echo $job->address ?></p>
                                <p class="card-text text-muted"><?php $i = 0; foreach ($jobSkills[$job->advertisement_id] as $skill) {
                                    if($i == 2){
                                      echo "..... ";
                                      break;
                                    }
                                    echo $skill->skill_name.', ';
                                    $i++;
                                  }
                                  echo "<br />";
                                  echo lang()=='en' ? $job->type_name.', '.$job->employer : $job->type_name_ar.', '.$job->employer ?> </p>
                              </div>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  <?php endif;?>

                </div>
            </div>
        </div>

        <div class="text-center mar-top" style="margin-top: 50px;">
            <h4><a href="<?php echo base_url()?>jobs"><u>See More Jobs</u></a></h4>
        </div>

    </div>
</div>



<div class="container"  style="max-width: 950px;">
            <div class="row mar-top ">
            <div class="col-lg-9">
                <img style="width: 20%;" src="<?php echo base_url() ?>asset/imgs/dublack.svg"> <span class="red-text" style="font-size: 25px;padding-left: 10px;position:relative;top: 7px;"><strong>Business</strong></span></h4>
            </div>
            <div class="col-lg-3">
                <a class="red-text float-right"><strong>+ List your Business</strong></a>
            </div>
        </div>
      <div class="divider"></div>
      <div class="row">
        <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
        	 <?php if(isset($country)):?>
                <li class="nav-item">
                    <a class="nav-link active home-nave-links" data-toggle="pill" href="#<?php echo str_replace(' ', '', $country);?>" role="tab" aria-controls="<?php echo $country;?>" aria-selected="true">
                      <?php echo $country;?></a>
                </li>
              <?php endif;?>
              <?php if(isset($countryb1)):?>
                <li class="nav-item">
                    <a class="nav-link <?php echo (!isset($country)) ? 'active': '';?> home-nave-links " data-toggle="pill" href="#<?php echo str_replace(' ', '', $countryb1);?>" role="tab" aria-controls="<?php echo $countryb1;?>" aria-selected="false"><?php echo $countryb1;?></a>
                </li>
              <?php endif;?>
              <?php if(isset($countryb2)):?>
                <li class="nav-item">
                    <a class="nav-link home-nave-links " data-toggle="pill" href="#<?php echo str_replace(' ', '', $countryb2);?>" role="tab" aria-controls="<?php echo $countryb2;?>" aria-selected="false"><?php echo $countryb2;?></a>
                </li>
              <?php endif;?>
              <?php if(isset($countryb3)):?>
                <li class="nav-item">
                    <a class="nav-link home-nave-links " data-toggle="pill" href="#<?php echo str_replace(' ', '', $countryb3);?>" role="tab" aria-controls="<?php echo $countryb3;?>" aria-selected="false"><?php echo $countryb3;?></a>
                </li>
              <?php endif;?>
           
            <li class="nav-item"><a class="nav-link font-weight-bold" href="#damascus" style="color: #000;">+ More Cities</a></li>
        </ul>
        <div class="col-lg-12">
            <div class="tab-content" id="pills-tabContent">
              
              
              
              
            <?php if(isset($country)):?>
                    <div class="tab-pane fade show active" id="<?php echo str_replace(' ', '', $country);?>" role="tabpanel">
              
              
                    <div class="row">
                    	
               <?php foreach ($bus as $value): ?>
                   
          	
                        <div class="col-lg-3">
                            <div class="card">
                            	<a href="<?php echo base_url().'business-profile/'. $value->id ?>">
                                <img class="card-img-top" src="<?php echo base_url().$value->cover?>" alt="Card image cap">
                              </a>
                                <div class="card-body">
                                	<a href="<?php echo base_url().'business-profile/'. $value->id ?>">
                                    <h4 class="card-title"><?php echo $value->name ?></h4>
                                    </a>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/nostae.svg" /></i>
									
                                    <p class="text-muted"><?php $i = 0; foreach ($bus_cat[$value->id] as $bus_cat0) { 
                                  if($i == 2){
                                      echo "..... ";
                                      break;
								  }
										echo $bus_cat0->name.',';
                                    	
                                    	 $i++;} ?>
                                    	
                    
                                    	
                                    </p>
                               
                                    <p><?php echo $value->country_english_name ?></p>
                                </div>
                            </div>
                        </div>

                     <?php endforeach ?>  
                     
                     </div>  
                     </div>
   						 <?php  endif?>
						
						  <?php if(isset($countryb1)):?>
                  			  <div class="tab-pane fade <?php echo (!isset($country)) ? 'show active': '';?>" id="<?php echo str_replace(' ', '', $countryb1);?>" role="tabpanel">
              
              
                    <div class="row">
                    	
               <?php foreach ($bus1 as $value): ?>
                   
          	
                        <div class="col-lg-3">
                            <div class="card">
                            	<a href="<?php echo base_url().'business-profile/'. $value->id ?>">
                                <img class="card-img-top" src="<?php echo base_url().$value->cover?>" alt="Card image cap">
                                </a>
                                <div class="card-body">
                                    <a href="<?php echo base_url().'business-profile/'. $value->id ?>">
                                    <h4 class="card-title"><?php echo $value->name ?></h4>
                                    </a>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/nostae.svg" /></i>
								
                                    <p class="text-muted">
                                    	<?php $i = 0; foreach ($bus_cat[$value->id] as $buscat1) { 
                                  if($i == 2){
                                      echo "..... ";
                                      break;
								  }
										echo $buscat1->name.',';
                                    	
                                    	 $i++;} ?>
                                    	
                    
                                    	
                                    </p>
                                   
                                       <p><?php echo $value->country_english_name ?></p>
                                </div>
                            </div>
                        </div>

                             <?php endforeach ?>  
                              </div>  
                     </div>  
						    <?php  endif?>
						  <?php if(isset($countryb2)):?>
                    <div class="tab-pane fade " id="<?php echo str_replace(' ', '', $countryb2);?>" role="tabpanel">
              
              
                    <div class="row">
                    	
               <?php foreach ($bus2 as $value): ?>
                   
          	
                        <div class="col-lg-3">
                            <div class="card">
                            	<a href="<?php echo base_url().'business-profile/'. $value->id ?>">
                                <img class="card-img-top" src="<?php echo base_url().$value->cover?>" alt="Card image cap">
                                </a>
                                <div class="card-body">
                                		<a href="<?php echo base_url().'business-profile/'. $value->id ?>">
                                    <h6 class="card-title"><?php echo $value->name ?></h6>
                                    </a>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/nostae.svg" /></i>
									
                                     <p class="text-muted"><?php $i = 0; foreach ($bus_cat[$value->id] as $bus_cat) { 
                                  if($i == 2){
                                      echo "..... ";
                                      break;
								  }
										echo $bus_cat->name.',';
                                    	
                                    	 $i++;} ?>
                                    	
                    
                                    	
                                    </p>
                                
                                       <p><?php echo $value->country_english_name ?></p>
                                </div>
                            </div>
                        </div>

                             <?php endforeach ?>  
                              </div>  
                     </div>  
    <?php  endif?>

  <?php if(isset($countryb3)):?>
                    <div class="tab-pane fade " id="<?php echo str_replace(' ', '', $countryb3);?>" role="tabpanel">
              
              
                    <div class="row">
                    	
               <?php foreach ($bus3 as $value): ?>
                   
          	
                        <div class="col-lg-3">
                            <div class="card">
                            	<a href="<?php echo base_url().'business-profile/'. $value->id ?>">
                                <img class="card-img-top" src="<?php echo base_url().$value->cover?>" alt="Card image cap">
                               </a>
                                <div class="card-body">
                                	<a href="<?php echo base_url().'business-profile/'. $value->id ?>">
                                    <h6 class="card-title"><?php echo $value->name ?></h6>
                                   </a>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/star.svg" /></i>
                                    <i  aria-hidden="true"><img width="15" src="<?php echo base_url()?>asset/imgs/nostae.svg" /></i>
								
                                     <p class="text-muted"><?php $i = 0; foreach ($bus_cat[$value->id] as $bus_cat) { 
                                  if($i == 2){
                                      echo "..... ";
                                      break;
								  }
										echo $bus_cat->name.',';
                                    	
                                    	 $i++;} ?>
                                    	
                    
                                    	
                                    </p>
                               
                                     <p><?php echo $value->country_english_name ?></p>
                                </div>
                            </div>
                        </div>

                             <?php endforeach ?>    

                    </div>
                </div>
                <?php  endif?>
                
                
                

            </div>
        </div>
      </div>
      
 <div class="text-center mar-top" style="margin: 50px 0;">
        <h6><a><u>See More business</u></a></h6>
    </div>
</div>

<div class="jumbotron jumbotron-fluid">
    <div class="container" style="max-width: 950px">
        <div class="row mar-top ">
            <div class="col-lg-10">
              <a href="<?php echo base_url()?>HeroCitizen">
                <img src="<?php echo base_url()?>asset/imgs/heroCitizen.svg" width="150">
              </a>
            </div>
            <div class="col-lg-2">
            <a href="<?php base_url().'add-achi'?>" class="red-text float-right"><strong>+ List your ach</strong></a>
        </div>
        </div>
        <div class="divider"></div>
        <div class="row">
            <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
              <?php if(isset($country)):?>
                <li class="nav-item">
                    <a class="nav-link active home-nave-links" data-toggle="pill" href="#<?php echo str_replace(' ', '', $country);?>" role="tab" aria-controls="<?php echo $country;?>" aria-selected="true">
                      <?php echo $country;?></a>
                </li>
              <?php endif;?>
              <?php if(isset($country1)):?>
                <li class="nav-item">
                    <a class="nav-link <?php echo (!isset($country)) ? 'active': '';?> home-nave-links " data-toggle="pill" href="#<?php echo str_replace(' ', '', $country1);?>" role="tab" aria-controls="<?php echo $country1;?>" aria-selected="false"><?php echo $country1;?></a>
                </li>
              <?php endif;?>
              <?php if(isset($country2)):?>
                <li class="nav-item">
                    <a class="nav-link home-nave-links " data-toggle="pill" href="#<?php echo str_replace(' ', '', $country2);?>" role="tab" aria-controls="<?php echo $country2;?>" aria-selected="false"><?php echo $country2;?></a>
                </li>
              <?php endif;?>
              <?php if(isset($country3)):?>
                <li class="nav-item">
                    <a class="nav-link home-nave-links " data-toggle="pill" href="#<?php echo str_replace(' ', '', $country3);?>" role="tab" aria-controls="<?php echo $country3;?>" aria-selected="false"><?php echo $country3;?></a>
                </li>
              <?php endif;?>
            </ul>
            <div class="col-lg-12">
                <div class="tab-content" id="pills-tabContent">
                  
                    <?php if(isset($country)):?>
                    <div class="tab-pane fade show active" id="<?php echo str_replace(' ', '', $country);?>" role="tabpanel">
                        <div class="row">
                            <?php foreach ($achs as $ach):?>
                            <div class="col-lg-3  col-sm-3" style="padding-left: 5px;padding-right: 5px;">
                                <div class="card hero-card">
                                   <a href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                                    <img class="card-img-top img-hero" src="<?php echo $ach->photo ? base_url().'uploads/users/'.$ach->photo : 'asset/imgs/demo-img-user.png' ?>" alt="Card image cap" alt="Card image cap"></a>
                                  <?php if($ach->hero):?>
                                    <div class="flagCitizenImgOverlay" style="height: 30px;">
                                        <img src="<?php echo base_url() ?>asset	/imgs/flag_citizen.svg" width="80">
                                    </div>
                                  <?php endif;?>
                                    <div class="card-body">
                                        <a style="color: black;" href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                                        <h6 class="card-title"><?php echo $ach->username ." ".$ach->lastname." ".($ach->verified ? '<i class="fa fa-check-circle red-text" aria-hidden="true"></i>' : ''); ?></h5></a>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $ach->job ?></h6>
                                        <?php
                                        if($ach->likes){
                                            $per =((int) $ach->likes * 100/(int)((int)$ach->likes + (int)$ach->dislikes));
                                            $per = round($per);
                                        }else{
                                            $per = 0;
                                        }
                                        switch (true) {
                                            case ($per<10):
                                                echo   '<i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (10<=$per&&$per<20):
                                                echo   '<i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (20<=$per&&$per<30):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (30<=$per&&$per<40):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (40<=$per&&$per<50):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (50<=$per&&$per<60):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (60<=$per&&$per<70):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (70<=$per&&$per<80):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (80<=$per&&$per<90):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (90<=$per&&$per<100):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>';
                                                break;
                                            case ($per=100):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>';
                                                break;
                                            default:
                                                echo   '<i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                        }
                                        ?>
                                        <div class="media">
                                            <span class="flag flag-<?php echo strtolower($ach->country_arabic_name) ?> flag-1x mar-right"></span>
                                            <div class="media-body">
                                                <p class="text-muted small"><?php 
                                                 $COUBTRY = $ach->city_english_name.', '. $ach->country_english_name ;
                        												 echo substr($COUBTRY,0,17) . '...';
                        												 
                        												 ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body grey-lighten-3">
                                        <div class="media" style="height: 51px;">
                                            <img class="d-flex mr-3" src="<?php echo $ach->ach_logo ? base_url().'uploads/achievements/logos/'.$ach->ach_logo : 'http://via.placeholder.com/100x100' ?>" width="50" height="50">
                                            <div class="media-body">
                                                <h6 class="mt-0"><?php  $title = $ach->ach_title; echo  substr($title,0,11) ?></h6>
                                                <p class="text-muted small"><?php echo Date('M j, Y',$ach->ach_date) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body" style="height: 39px;">
                                        <div class="row mar-top" style="margin-top: 4px;">
                                            <div class="col">
                                                <p style="font-size: 11px;" class="text-muted followers" heroId="<?php echo $ach->hero_id?>" followers="<?php echo $ach->followers;?>"><?php echo $ach->followers;?> followers</p>
                                            </div>
                                            <?php if($this->session->userdata('user_id')){
                                              if($ach->follow){
                                                echo "<div  class='col text-right following'>
                                                  <a href='JavaScript:void(0);' style='margin-top: -4px;font-size: 12px;' class='btn btn-sm btn-outline-danger unfollow'  heroId='".$ach->hero_id."'>Unfollow</a>
                                                </div>";
                                              }else{
                                                echo "<div class='col text-right following'>
                                                  <a  href='JavaScript:void(0);'style='margin-top: -4px;font-size: 12px;' class='btn btn-sm btn-outline-success follow' 
                                                  heroId='".$ach->hero_id."'>Follow</a>
                                                </div>";
                                              } 
                                            }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>

                        </div>
                    
                    </div>
                    <?php endif;?>

                    <?php if(isset($country1)):?>
                    <div class="tab-pane fade <?php echo (!isset($country)) ? 'show active': '';?>" id="<?php echo str_replace(' ', '', $country1);?>" role="tabpanel">
                        <div class="row">
                            <?php foreach ($achs1 as $ach):?>
                            <div class="col-lg-3  col-sm-3" style="padding-left: 5px;padding-right: 5px;">
                                <div class="card hero-card">
                                   <a href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                                    <img class="card-img-top img-hero" src="<?php echo $ach->photo ? base_url().'uploads/users/'.$ach->photo : 'asset/imgs/demo-img-user.png' ?>" alt="Card image cap" alt="Card image cap"></a>
                                  <?php if($ach->hero):?>
                                    <div class="flagCitizenImgOverlay" style="height: 30px;">
                                        <img src="<?php echo base_url() ?>asset /imgs/flag_citizen.svg" width="80">
                                    </div>
                                  <?php endif;?>
                                    <div class="card-body">
                                        <a style="color: black;" href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                                        <h6 class="card-title"><?php echo $ach->username ." ".$ach->lastname." ".($ach->verified ? '<i class="fa fa-check-circle red-text" aria-hidden="true"></i>' : ''); ?></h5></a>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $ach->job ?></h6>
                                        <?php
                                        if($ach->likes){
                                            $per =((int) $ach->likes * 100/(int)((int)$ach->likes + (int)$ach->dislikes));
                                            $per = round($per);
                                        }else{
                                            $per = 0;
                                        }
                                        switch (true) {
                                            case ($per<10):
                                                echo   '<i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (10<=$per&&$per<20):
                                                echo   '<i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (20<=$per&&$per<30):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (30<=$per&&$per<40):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (40<=$per&&$per<50):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (50<=$per&&$per<60):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (60<=$per&&$per<70):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (70<=$per&&$per<80):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (80<=$per&&$per<90):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (90<=$per&&$per<100):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>';
                                                break;
                                            case ($per=100):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>';
                                                break;
                                            default:
                                                echo   '<i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                        }
                                        ?>
                                        <div class="media">
                                            <span class="flag flag-<?php echo strtolower($ach->country_arabic_name) ?> flag-1x mar-right"></span>
                                            <div class="media-body">
                                                <p class="text-muted small"><?php 
                                                 $COUBTRY = $ach->city_english_name.', '. $ach->country_english_name ;
                                                 echo substr($COUBTRY,0,17) . '...';
                                                 
                                                 ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body grey-lighten-3">
                                        <div class="media" style="height: 51px;">
                                            <img class="d-flex mr-3" src="<?php echo $ach->ach_logo ? base_url().'uploads/achievements/logos/'.$ach->ach_logo : 'http://via.placeholder.com/100x100' ?>" width="50" height="50">
                                            <div class="media-body">
                                                <h6 class="mt-0"><?php  $title = $ach->ach_title; echo  substr($title,0,11) ?></h6>
                                                <p class="text-muted small"><?php echo Date('M j, Y',$ach->ach_date) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body" style="height: 39px;">
                                        <div class="row mar-top" style="margin-top: 4px;">
                                            <div class="col">
                                                <p style="font-size: 11px;" class="text-muted followers" heroId="<?php echo $ach->hero_id?>" followers="<?php echo $ach->followers;?>"><?php echo $ach->followers;?> followers</p>
                                            </div>
                                            <?php if($this->session->userdata('user_id')){
                                              if($ach->follow){
                                                echo "<div  class='col text-right following'>
                                                  <a href='JavaScript:void(0);' style='margin-top: -4px;font-size: 12px;' class='btn btn-sm btn-outline-danger unfollow'  heroId='".$ach->hero_id."'>Unfollow</a>
                                                </div>";
                                              }else{
                                                echo "<div class='col text-right following'>
                                                  <a  href='JavaScript:void(0);'style='margin-top: -4px;font-size: 12px;' class='btn btn-sm btn-outline-success follow' 
                                                  heroId='".$ach->hero_id."'>Follow</a>
                                                </div>";
                                              } 
                                            }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>

                        </div>
                    </div>
                    <?php endif;?>

                    <?php if(isset($country2)):?>
                    <div class="tab-pane fade" id="<?php echo str_replace(' ', '', $country2);?>" role="tabpanel">
                        <div class="row">
                            <?php foreach ($achs2 as $ach):?>
                            <div class="col-lg-3  col-sm-3" style="padding-left: 5px;padding-right: 5px;">
                                <div class="card hero-card">
                                   <a href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                                    <img class="card-img-top img-hero" src="<?php echo $ach->photo ? base_url().'uploads/users/'.$ach->photo : 'asset/imgs/demo-img-user.png' ?>" alt="Card image cap" alt="Card image cap"></a>
                                  <?php if($ach->hero):?>
                                    <div class="flagCitizenImgOverlay" style="height: 30px;">
                                        <img src="<?php echo base_url() ?>asset /imgs/flag_citizen.svg" width="80">
                                    </div>
                                  <?php endif;?>
                                    <div class="card-body">
                                        <a style="color: black;" href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                                        <h6 class="card-title"><?php echo $ach->username ." ".$ach->lastname." ".($ach->verified ? '<i class="fa fa-check-circle red-text" aria-hidden="true"></i>' : ''); ?></h5></a>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $ach->job ?></h6>
                                        <?php
                                        if($ach->likes){
                                            $per =((int) $ach->likes * 100/(int)((int)$ach->likes + (int)$ach->dislikes));
                                            $per = round($per);
                                        }else{
                                            $per = 0;
                                        }
                                        switch (true) {
                                            case ($per<10):
                                                echo   '<i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (10<=$per&&$per<20):
                                                echo   '<i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (20<=$per&&$per<30):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (30<=$per&&$per<40):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (40<=$per&&$per<50):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (50<=$per&&$per<60):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (60<=$per&&$per<70):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (70<=$per&&$per<80):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (80<=$per&&$per<90):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (90<=$per&&$per<100):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>';
                                                break;
                                            case ($per=100):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>';
                                                break;
                                            default:
                                                echo   '<i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                        }
                                        ?>
                                        <div class="media">
                                            <span class="flag flag-<?php echo strtolower($ach->country_arabic_name) ?> flag-1x mar-right"></span>
                                            <div class="media-body">
                                                <p class="text-muted small"><?php 
                                                 $COUBTRY = $ach->city_english_name.', '. $ach->country_english_name ;
                                                 echo substr($COUBTRY,0,17) . '...';
                                                 
                                                 ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body grey-lighten-3">
                                        <div class="media" style="height: 51px;">
                                            <img class="d-flex mr-3" src="<?php echo $ach->ach_logo ? base_url().'uploads/achievements/logos/'.$ach->ach_logo : 'http://via.placeholder.com/100x100' ?>" width="50" height="50">
                                            <div class="media-body">
                                                <h6 class="mt-0"><?php  $title = $ach->ach_title; echo  substr($title,0,11) ?></h6>
                                                <p class="text-muted small"><?php echo Date('M j, Y',$ach->ach_date) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body" style="height: 39px;">
                                        <div class="row mar-top" style="margin-top: 4px;">
                                            <div class="col">
                                                <p style="font-size: 11px;" class="text-muted followers" heroId="<?php echo $ach->hero_id?>" followers="<?php echo $ach->followers;?>"><?php echo $ach->followers;?> followers</p>
                                            </div>
                                            <?php if($this->session->userdata('user_id')){
                                              if($ach->follow){
                                                echo "<div  class='col text-right following'>
                                                  <a href='JavaScript:void(0);' style='margin-top: -4px;font-size: 12px;' class='btn btn-sm btn-outline-danger unfollow'  heroId='".$ach->hero_id."'>Unfollow</a>
                                                </div>";
                                              }else{
                                                echo "<div class='col text-right following'>
                                                  <a  href='JavaScript:void(0);'style='margin-top: -4px;font-size: 12px;' class='btn btn-sm btn-outline-success follow' 
                                                  heroId='".$ach->hero_id."'>Follow</a>
                                                </div>";
                                              } 
                                            }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>
                    </div>
                    <?php endif;?>

                    <?php if(isset($country3)):?>
                    <div class="tab-pane fade" id="<?php echo str_replace(' ', '', $country3);?>" role="tabpanel">
                        <div class="row">
                            <?php foreach ($achs3 as $ach):?>
                            <div class="col-lg-3  col-sm-3" style="padding-left: 5px;padding-right: 5px;">
                                <div class="card hero-card">
                                   <a href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                                    <img class="card-img-top img-hero" src="<?php echo $ach->photo ? base_url().'uploads/users/'.$ach->photo : 'asset/imgs/demo-img-user.png' ?>" alt="Card image cap" alt="Card image cap"></a>
                                  <?php if($ach->hero):?>
                                    <div class="flagCitizenImgOverlay" style="height: 30px;">
                                        <img src="<?php echo base_url() ?>asset /imgs/flag_citizen.svg" width="80">
                                    </div>
                                  <?php endif;?>
                                    <div class="card-body">
                                        <a style="color: black;" href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                                        <h6 class="card-title"><?php echo $ach->username ." ".$ach->lastname." ".($ach->verified ? '<i class="fa fa-check-circle red-text" aria-hidden="true"></i>' : ''); ?></h5></a>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $ach->job ?></h6>
                                        <?php
                                        if($ach->likes){
                                            $per =((int) $ach->likes * 100/(int)((int)$ach->likes + (int)$ach->dislikes));
                                            $per = round($per);
                                        }else{
                                            $per = 0;
                                        }
                                        switch (true) {
                                            case ($per<10):
                                                echo   '<i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (10<=$per&&$per<20):
                                                echo   '<i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (20<=$per&&$per<30):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (30<=$per&&$per<40):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (40<=$per&&$per<50):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (50<=$per&&$per<60):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (60<=$per&&$per<70):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (70<=$per&&$per<80):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (80<=$per&&$per<90):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                            case (90<=$per&&$per<100):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star-half-full" aria-hidden="true"></i>';
                                                break;
                                            case ($per=100):
                                                echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>';
                                                break;
                                            default:
                                                echo   '<i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                                        <i class="fa fa-star-o" aria-hidden="true"></i>';
                                                break;
                                        }
                                        ?>
                                        <div class="media">
                                            <span class="flag flag-<?php echo strtolower($ach->country_arabic_name) ?> flag-1x mar-right"></span>
                                            <div class="media-body">
                                                <p class="text-muted small"><?php 
                                                 $COUBTRY = $ach->city_english_name.', '. $ach->country_english_name ;
                                                 echo substr($COUBTRY,0,17) . '...';
                                                 
                                                 ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body grey-lighten-3">
                                        <div class="media" style="height: 51px;">
                                            <img class="d-flex mr-3" src="<?php echo $ach->ach_logo ? base_url().'uploads/achievements/logos/'.$ach->ach_logo : 'http://via.placeholder.com/100x100' ?>" width="50" height="50">
                                            <div class="media-body">
                                                <h6 class="mt-0"><?php  $title = $ach->ach_title; echo  substr($title,0,11) ?></h6>
                                                <p class="text-muted small"><?php echo Date('M j, Y',$ach->ach_date) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body" style="height: 39px;">
                                        <div class="row mar-top" style="margin-top: 4px;">
                                            <div class="col">
                                                <p style="font-size: 11px;" class="text-muted followers" heroId="<?php echo $ach->hero_id?>" followers="<?php echo $ach->followers;?>"><?php echo $ach->followers;?> followers</p>
                                            </div>
                                            <?php if($this->session->userdata('user_id')){
                                              if($ach->follow){
                                                echo "<div  class='col text-right following'>
                                                  <a href='JavaScript:void(0);' style='margin-top: -4px;font-size: 12px;' class='btn btn-sm btn-outline-danger unfollow'  heroId='".$ach->hero_id."'>Unfollow</a>
                                                </div>";
                                              }else{
                                                echo "<div class='col text-right following'>
                                                  <a  href='JavaScript:void(0);'style='margin-top: -4px;font-size: 12px;' class='btn btn-sm btn-outline-success follow' 
                                                  heroId='".$ach->hero_id."'>Follow</a>
                                                </div>";
                                              } 
                                            }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                        </div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
		<div class="text-center mar-top" style="margin: 50px;">
        <h6><a href="<?php echo base_url()?>achievements"><u>See More Heros</u></a></h6>
    </div>
  </div>
</div>

<div class="text-center mar-top" style="margin: 50px;">
    <h1 class="font-weight-bold"><a>Download Our Game</a></h1>
</div>

<div class="img-cover">
	<img src="<?php echo base_url()?>asset/imgs/Dubarji_Game.png" style="position:relative;display:inline-block;text-align:center;width: 100%;">
	
	<div class="appleImgOverlay">
		<img src="<?php echo base_url()?>asset/imgs/storeapp.svg" width="200"  />
	</div>
	<div class="andImgOverlay">
		<img src="<?php echo base_url()?>asset/imgs/gitandroid.svg" width="200"  />
	</div>
</div>

<!-- footer -->
<?php $this->load->view('newIndex/footer'); ?>


<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


