<?php $this->load->view('main/second/header'); ?>
<style>
   ul {
   list-style-type: none;
   }
   .card-body {
   flex: 1 1 auto;
   padding: 1.25rem !important;
   }
</style>
<div class="container">
   <div class="row">
      <div class="col-lg-8 col-sm-12">
         <div class="card border-light ">
            <div class="card-header">
               <h5 class="card-title">My Applicants</h5>
            </div>
            <div class="card-body">
               <?php 
                  $pages = $num_rows % 8 === 0 ? $num_rows / 8 : ((int) $num_rows / 8) + 1;
                  $pages = (int) $pages;
                  if ($results) { ?>
               <?php $i = (($page - 1) * 8) + 1; $comm = 0; $total_price = 0; foreach ($results as $result) { ?>
               <div class="card" style="background-color: #fafafa;border: 1px solid #dfdfdf;">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-lg-3">
                           <a href="<?php echo base_url().'resume/'.$result['hash_id'] ?>">
                           <img class="rounded float-left img-responsive " style="width: 139px; height: auto;" src="<?php echo $result['photo']? base_url().'uploads/users/'.$result['photo']:  base_url()."ass/images/dub-icon.png" ?>" alt="Image" >
                           </a>
                        </div>
                        <div class="col-lg-9">
                           <div class="row">
                              <h5  class="card-title" ><a href="<?php echo base_url().'resume/'.$result['hash_id'] ?>"><?php echo $result['username'].' '. $result['lastname'] ?></a></h5>
                           </div>
                           <div class="new-meta">
                              <ul>
                                 <li style="margin-bottom: 7px;"><i class="fa fa-envelope"></i> <?php echo $result['email'] ?>
                                 </li>
                                 <li><a href="#"><i class="fa fa-venus-mars"></i> <?php echo $result['gender']==1 ?   translate('male') : translate('female') ?></a></li>
                                 <!-- <li style="margin-bottom: 7px; margin-left: 3px;"><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo LANG() == 'en' ? $job->type_name : $job->type_name_ar ?></a></li> 
                                    <li style="margin-bottom: 7px; margin-left: 3px;"><i class="fa fa-hourglass-start" aria-hidden="true"></i> <?php echo trans('deadline') ?>: <?php echo $job->diff." ".trans('days') ?></li> -->
                              </ul>
                           </div>
                           <!-- new-meta -->		
                           <div class="button">
                              <a href="<?php echo base_url().'resume/'.$result['hash_id'] ?>" class="btn btn-primary">CV</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>
               <!-- new-item -->
               <!-- new-section -->						
               <div class="new-section text-center">
                  <a href="#"><img src="<?php echo base_url()?>ass/images/ads/3.jpg" alt="Image" class="img-responsive"></a>
               </div>
               <!-- new-section -->
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
               <b>
                  <center><?php echo $this->lang->line('no_emps'); ?></center>
               </b>
               <?php } ?>    
            </div>
         </div>
      </div>
   </div>
</div>
<?php $this->load->view('jobs/common/footer'); ?>