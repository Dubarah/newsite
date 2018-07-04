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
                     <img class="rounded float-left img-responsive " style="width: 139px; height: auto;" src="<?php echo $job->img ? base_url()."uploads/jobslogo/".$job->img : base_url()."ass/images/defult.png" ?>" alt="Image" >
                  </div>
                  <div class="col-lg-9">
                     <div class="row">
                        <h5  class="card-title" ><a href="#"><?php echo $job->title ?></a> @ <a href="#"> <?php echo $job->employer ?></a></h5>
                        <div class="new-meta">
                           <ul>
                              <li style="margin-bottom: 7px; margin-left: 3px;"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $job->country_english_name ?> ,</a>
                                 <a href="#"> <?php echo $job->address ?>  </a>
                              </li>
                              <li style="margin-bottom: 7px; margin-left: 3px;"><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo LANG() == 'en' ? $job->type_name : $job->type_name_ar ?></a></li>
                              <li style="margin-bottom: 7px; margin-left: 3px;"><i class="fa fa-hourglass-start" aria-hidden="true"></i> <?php echo trans('deadline') ?>: <?php echo $job->diff." ".trans('days') ?></li>
                           </ul>
                        </div>
                        <!-- new-meta -->									
                     </div>
                     <?php if($skils_num){ ?>
                     <div class="row">
                        <h6 class="card-title" ><?php echo translate('req_skills') ?></h6>
                        <div class="new-meta">
                           <ul>
                              <?php $i = 1; foreach ($skills->result() as $skill) {?>
                              <li style="margin-bottom: 7px;     margin-left: 2px;"><a  href="#"><i class="fa fa-tags" aria-hidden="true"> <span class="card-text"  style="font-size: 15px" ><?php echo $skill->skill_name ?></span></i></a></li>
                              <?php  $i==3  ?  ''  : ''?>
                              <?php  $i++; } ?>
                           </ul>
                        </div>
                        <?php } ?>			
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="card border-light " >
            <div class="card-header">
               <h5 class="card-title">Description</h5>
            </div>
            <div class="card-body">
               <p class="card-text"><?php echo $job->description ?></p>
               <p>
                  <?php if($this->session->userdata('user_id') && $this->session->userdata('user_id') == $job->user_id){ ?>
                  <a  class="btn btn-primary" target="_blank" href="<?php echo base_url()."edit_job/".$job_id?>"><?php echo trans('edit')?></a>
                  <?php } else{
                     if($job->phone){ ?> 
                  <a class="btn btn-primary" data-toggle="collapse"  href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2"  onclick="myFunction()"><i class="fa fa-phone"></i> <?php echo trans('phone_apply') ?> </button>
                  <?php if($job->email){ ?> 
                  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1" onclick="myFunction()"><i class="fa fa-envelope"></i> <?php echo trans('email_apply')?></a>
                  <?php } if($job->link){ ?> 
                  <a class="btn btn-primary" target="_blank" href="<?php echo $job->link ?>" onclick="myFunction()"><i class="fas fa-link"></i> Link</a>
                  <?php } }  }?>
               </p>
               <div id="fb-root"> </div>
               <div class="fb-share-button" 
                  data-href="<?php echo base_url().'job/'. $job_id; ?>" 
                  data-layout="button_count">
               </div>
               <div class="row">
                  <div class="col">
                     <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <?php if ($this->session->userdata('user_id') && $this->session->userdata('user_id') != $job->user_id) { ?>
                        <div class="card card-body">
                           <?php echo $job->phone?>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="collapse multi-collapse" id="multiCollapseExample2">
                        <?php if($this->session->userdata('user_id') && $this->session->userdata('user_id') != $job->user_id){?>
                        <div class="card-header" id="for">
                           <h5 class="card-title"><?php echo trans('job_up') ?></h5>
                        </div>
                        <div class="card-body">
                           <form method="post" enctype="multipart/form-data" action="<?php echo base_url()."job/" .$job_id ?>">
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
                              </div>
                           </form>
                        </div>
                        <?php }  ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php if($this->session->userdata('user_id') && $this->session->userdata('user_id') != $job->user_id){?>
      <div class="card border-light none" id="uploud" style="display: none"  >
         <div class="card-header" id="for">
            <h5 class="card-title"><?php echo trans('job_up') ?></h5>
         </div>
         <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="<?php echo base_url()."job/" .$job_id ?>">
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
               </div>
            </form>
         </div>
      </div>
      <?php } ?>
      <div class="col-lg-4 col-sm-12">
         <div class="card border-light " >
            <div class="card-header">
               <h5 class="card-title"><?php echo trans('short_info') ?></h5>
            </div>
            <div class="card-body">
               <ul>
                  <li style="    margin-bottom: 6px;"><span class="icon"><i><img style="margin-left: -4px;" src="<?php echo base_url() ?>ass/images/asset1.png"  /></i> </span><?php echo trans('job_type') ?>: <?php echo lang()=='en'? $job->type_name : $job->type_name_ar?></li>
                  <li style="    margin-bottom: 6px;"><span class="icon"><i><img style="margin-left: -4px;" src="<?php echo base_url() ?>ass/images/asset2.png"  /></i> </span><?php echo trans('category') ?>: <a href="#"><?php echo $job->english_name?></a></li>
                  <li style="    margin-bottom: 6px;"><span class="icon"><i><img style="margin-left: -14px;" src="<?php echo base_url() ?>ass/images/asset4.png"  /></i> </span><?php echo trans('rgender') ?>: <?php  if ($job->gender==3){ echo trans('any'); } elseif ($job->gender == 2) {echo trans('female'); } else {echo trans('male');} ?> <span class="text-center"></span></li>
                  <li style="    margin-bottom: 6px;"><span class="icon"><i><img style="margin-left: -4px;" src="<?php echo base_url() ?>ass/images/asset5.png"  /></i> </span><?php echo trans('post_date') ?>: <?php echo date("m-d-Y h:i A" ,strtotime($job->created_at)); ?> <span class="text-center"></span></li>
                  <li style="    margin-bottom: 6px;"><span class="icon"><i><img style="margin-left: 4px;" src="<?php echo base_url() ?>ass/images/asset6.png"  /></i> </span><?php echo trans('deadline') ?>: <?php echo $job->diff." ".trans('days') ?> <span class="text-center"></span></li>
                  <li style="    margin-bottom: 6px;"><span class="icon"><i><img style="margin-left: -4px;" src="<?php echo base_url() ?>ass/images/asset7.png"  /></i> </span><?php echo trans('postedby') ?>: <?php echo $job->username.' '.$job->lastname ?> <span class="text-center"></span></li>
                  <li style="    margin-bottom: 6px;"><span class="icon"><i><img style="margin-left: -4px;" src="<?php echo base_url() ?>ass/images/asset1.png"  /></i> </span >
                     <?php echo trans('job_type') ?>: <?php echo lang()=='en'? $job->type_name : $job->type_name_ar?>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<script>
   window.onload = function() 
   {	 document.getElementById('uploud').style.display = 'none';
       
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
   	        <?php } elseif($job->user_id == $this->session->userdata('user_id')) { ?>
   	        	swal({
   	            title: '<?php echo trans('fail'); ?>',
   	            text: '<?php echo trans('owner'); ?>' ,
   	            type: 'error',
   	            
   	            showConfirmButton:true
   	        });
   	        	
   	<?php } ?>
      } 
      
     function myphone() {
      	<?php if (!$this->session->userdata('user_id') || $this->session->userdata('user_id') == $job->user_id) { ?>
      		var text = '<?php echo !$this->session->userdata('user_id') ? trans('needlogin') : trans('cannt_show_my_phone'); ?>';
   		swal({
   			
   	            title: '<?php echo trans('fail'); ?>',
   	            text: text ,
   	            type: 'error',
   	            
   	            showConfirmButton:true
   	        });
   	<?php }  ?>
   		 
      } 
      
      
      function show() {
    
        <?php if($this->session->userdata('user_id')){?>
          document.getElementById('showup').style.display = 'block';
         <?php } ?>
      
      } 
      //$( ".select2" ).select2( {  maximumSelectionSize: 15 } );
   (function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
       fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
</script>
<?php $this->load->view('jobs/common/footer'); ?>