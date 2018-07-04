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
         <div class="card">
            <div class="card-body">
               <div class="row">
                  <div class="col-lg-3">
                     <img class="rounded float-left img-responsive " style="width: 139px; height: auto;" src="<?php echo $user_info->photo ? base_url().'uploads/users/'.$user_info->photo:  base_url()."ass/images/dub-icon.png" ?>" alt="Image" >
                  </div>
                  <div class="col-lg-9">
                     <div class="row">
                        <h5  class="card-title" ><a href="#"></span><?php echo $user_info->username .' '.$user_info->lastname  ?></a></h5>
                        <div class="new-meta">
                           <ul>
                            
                              <li style="margin-bottom: 7px; margin-left: 3px;"><?php echo $user_info->gender==1 ?   translate('male') : translate('female')?></li>
                              <li style="margin-bottom: 7px; margin-left: 3px;"><?php echo $user_info->country_english_name .', '.$user_info->city_english_name ?></li>
                           
                           
                           </ul>
                        </div>
                        <!-- new-meta -->									
                     </div>
                    
                     <div class="row">
                        
                        <div class="new-meta">
                           <ul>
                            
                              <li style="margin-bottom: 7px;     margin-left: 2px;"><a  href="#"><i class="fa fa-tags" aria-hidden="true"> <span class="card-text"  style="font-size: 15px" ><?php echo $user_info->mobile ?></span></i></a></li>
                         
                           </ul>
                        </div>
                     			
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         
         </div>
          <div class="col-lg-8 col-sm-12">
                  <div class="card border-light " >
            <div class="card-header">
               <h5 class="card-title"><?php echo trans('your_note')?></h5>
            </div>
            <div class="card-body">
               <p class="card-text"><?php echo $user_info->massage ?></p>
               <a href="<?php echo base_url().'download/'.$user_info->a_id?>" class=""><i class="fa fa-cloud-download">  <?php echo trans('download_cv')?></i></a>
               <a href="<?php echo base_url().'profile/'  ?>" target="_blank" style="margin: 5px; padding: 5px" class="btn btn-primary">Applicant Profile</a>

               </div>
            </div>
         </div>
         </div>
         </div>
        
  
	
<?php $this->load->view('jobs/common/footer'); ?>