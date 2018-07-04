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
         <div class="section seller-info">
            <h5><?php echo trans('my_dubarahs') ?></h5>
            <!-- ad-item -->
            <?php 
               $pages = $num_rows % 8 === 0 ? $num_rows / 8 : ((int) $num_rows / 8) + 1;
               $pages = (int) $pages;
               if ($results) { ?>
            <?php $i = (($page - 1) * 8) + 1; $comm = 0; $total_price = 0; foreach ($results as $job) { ?>
            <div class="card" style="background-color: #fafafa;border: 1px solid #dfdfdf;">
               <div class="card-body">
                  <div class="row">
                     <div class="col-lg-3">
                        <a href="<?php echo base_url().'my_applicants/'.$job->advertisement_id  ?>">
                        <img class="rounded float-left img-responsive " style="width: 139px; height: auto;" src="<?php echo $job->img ? base_url()."uploads/jobslogo/".$job->img : base_url()."ass/images/defult.png" ?>" alt="Image" >
                        </a>
                     </div>
                     <div class="col-lg-9">
                        <div class="row">
                           <h5  class="card-title" ><a href="<?php echo base_url().'my_applicants/'.$job->advertisement_id  ?>"><?php echo $job->title ?></a> @ <a href="#"> <?php echo $job->employer ?></a></h5>
                           <div class="new-meta">
                              <ul>
                                 <li style="margin-bottom: 7px; margin-left: 3px;"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $job->country_english_name ?> ,</a>
                                    <a href="#"> <?php echo $job->address ?>  </a>
                                 </li>
                                 <!-- <li style="margin-bottom: 7px; margin-left: 3px;"><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo LANG() == 'en' ? $job->type_name : $job->type_name_ar ?></a></li> 
                                    <li style="margin-bottom: 7px; margin-left: 3px;"><i class="fa fa-hourglass-start" aria-hidden="true"></i> <?php echo trans('deadline') ?>: <?php echo $job->diff." ".trans('days') ?></li> -->
                              </ul>
                           </div>
                           <!-- new-meta -->		
                           <div class="button">
                              <a href="<?php echo base_url().'dubarah/'.$job->advertisement_id  ?>" target="_blank" style="margin: 5px; padding: 5px" class="btn btn-primary"><?php translate('see_post') ?></a>
                              <a href="<?php echo base_url().'my_applicants/'.$job->advertisement_id  ?>" style="margin: 5px; padding: 5px" class="btn btn-primary"><?php translate('who_applyed') ?></a>
                              <a href="<?php echo base_url().'edit_dubarah/'.$job->advertisement_id  ?>" style="margin: 5px; padding: 5px" target="_blank" class="btn btn-primary"><?php translate('edit') ?></a>
                              <a href="<?php echo base_url().'unpublish_dubarah/'.$job->advertisement_id  ?>" style="margin: 5px; padding: 5px" class="btn btn-primary"><?php translate('unpublish') ?></a>
                              <a href="<?php echo base_url().'delete_dubarah/'.$job->advertisement_id  ?>" style="margin: 5px; padding: 5px" target="_blank" class="btn btn-primary"><?php translate('delete') ?></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- new-item -->		 
            <?php } ?>
            <!-- new-item -->
            <!-- new-section -->						
            <?php /*<div class="new-section text-center">
               <a href="#"><img src="<?php echo base_url()?>ass/images/ads/3.jpg" alt="Image" class="img-responsive"></a>
         </div>
         <!-- new-section --> */?>
         <!-- new-item -->
         <?php if ($num_rows > 8): ?>
         <div class="text-center">
            <ul class="pagination ">
               <li><a href="<?php echo base_url()."my_dubarah/1"?>" ><</a></li>
               <?php if ($page - 4 >= 1): ?>
               <li><a href="<?php echo base_url()."my_dubarah/".($page - 4) ?>"><?php echo $page - 4 ?></a></li>
               <?php endif ?>
               <?php if ($page - 3 >= 1): ?>
               <li><a href="<?php echo base_url()."my_dubarah/".($page - 3) ?>"><?php echo $page - 3 ?></a></li>
               <?php endif ?>
               <?php if ($page - 2 >= 1): ?>
               <li><a href="<?php echo base_url()."my_dubarah/".($page - 2) ?>"><?php echo $page - 2 ?></a></li>
               <?php endif ?>
               <?php if ($page - 1 >= 1): ?>
               <li><a href="<?php echo base_url()."my_dubarah/".($page - 1) ?>"><?php echo $page - 1 ?></a></li>
               <?php endif ?>
               <li class="active"><a href="#"><?php echo $page ?></a></li>
               <?php if ($page + 1 <= $pages): ?>
               <li><a href="<?php echo base_url()."my_dubarah/".($page + 1) ?>"><?php echo $page + 1 ?></a></li>
               <?php endif ?>
               <?php if ($page + 2 <= $pages): ?>
               <li><a href="<?php echo base_url()."my_dubarah/".($page + 2) ?>"><?php echo $page + 2 ?></a></li>
               <?php endif ?>
               <?php if ($page + 3 <= $pages): ?>
               <li><a href="<?php echo base_url()."my_dubarah/".($page + 3) ?>"><?php echo $page + 3 ?></a></li>
               <?php endif ?>
               <?php if ($page + 4 <= $pages): ?>
               <li><a href="<?php echo base_url()."my_dubarah/".($page + 4) ?>"><?php echo $page + 4 ?></a></li>
               <?php endif ?>
               <li><a href="<?php echo base_url()."my_dubarah/".($pages) ?>">></a></li>
            </ul>
         </div>
         <?php endif ?>
         <?php } else { ?>
         <b>
            <center><?php echo $this->lang->line('no_dubarah'); ?></center>
         </b>
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
   </div>
   <!-- recommended-ads -->
   <div class="col-lg-4 col-sm-12">
      <div class="card border-light ">
         <div class="card-header">
            <h5 class="card-title">Quick rules</h5>
         </div>
         <div class="card-body">
            <p class="card-text">  Posting an ad on <a href="<?php echo base_url()?>">Dubarah.com</a> is free! However, all posts must follow our rules:</p>
            <ul>
               <li>Make sure you post in the correct category.</li>
               <li>Do not post the same Dubarah more than once.</li>
               <li>Do not upload pictures with watermarks.</li>
               <li>Do not put your email or phone numbers in the title or description.</li>
               <li>You are responsible about the content of the post, and any abuse report will hold you responsible.</li>
            </ul>
         </div>
      </div>
   </div>
</div>
<!-- quick-rules -->
</div><!-- photos-ad -->
<?php $this->load->view('jobs/common/footer'); ?>
<script>
   document.getElementById('getval').addEventListener('change', readURL, true);
   function readURL(){
       var file = document.getElementById("getval").files[0];
       var reader = new FileReader();
       reader.onloadend = function(){
           document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";        
       }
       if(file){
           reader.readAsDataURL(file);
       }else{
       }
   }
   
   
   
   function dis() {
    
   if (document.getElementById('send').checked) {
    //var val = document.getElementById('submit');
   	document.getElementById('submit').disabled = false;			
   }else{  
       document.getElementById('submit').disabled = true;  
          }};
      
   $( ".select2" ).select2( {  maximumSelectionSize: 15 } );
   
     $( ":checkbox" ).on( "click", function() {
         $( this ).parent().nextAll( "select" ).select2( "enable", this.checked );
     });
   
     $( "#demonstrations" ).select2( { placeholder: "Select2 version", minimumResultsForSearch: -1 } ).on( "change", function() {
         document.location = $( this ).find( ":selected" ).val();
     } );
   
     $( "button[data-select2-open]" ).click( function() {
         $( "#" + $( this ).data( "select2-open" ) ).select2( "open" );
     });
     $(".form_datetime").datetimepicker({
         format: "dd mm yyyy"
     }); 
     function citys(id) {
         $.ajax({
             url: '<?php echo base_url(); ?>get_city/' + id,
             success: function(data) {
                 if (data) {
                     $("#select2_3").html(data);
                 };
             }
         });
     }
     
   function photo_up()  {
   if (typeof FormData !== 'undefined') {
   
         // send the formData
         var formData = new FormData( $("#photo_up")[0] );
   
          $.ajax({
              url : '<?php echo base_url() ?>up_img',  // Controller URL
              type : 'POST',
              data : formData,
              async : false,
              cache : false,
              contentType : false,
              processData : false,
              success : function(data) {
                  res = JSON.parse(data);
                 
                  
                  if (res[0]) {
                  	swal({
               title: '<?php echo trans('fail'); ?>',
               text: '<?php echo trans('img_up'); ?>' ,
               type: 'success',
               html:true,
               
               showConfirmButton:true
           });
                  	
                  } else if (res[1]){
                  	swal({
               title: '<?php echo trans('fail'); ?>',
               text: res[1] ,
               type: 'error',
                html:true,
               
               showConfirmButton:true
           });
                  } else {
        swal({
               title: '<?php echo trans('fail'); ?>',
               text: '<?php echo trans('try_agin'); ?>' ,
               type: 'error',
               
               showConfirmButton:true
           });
                  };
              }
          });
   
      } else {
         message("Your Browser Don't support FormData API! Use IE 10 or Above!");
      }   
       };
       
</script>