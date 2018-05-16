 <?php $this->load->view('common/header'); ?>

<!-- ad-profile-page -->
	<section id="main" class="clearfix  ad-profile-page">
		<div class="container">
		
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="<?php echo base_url()?>"><?php echo trans('home') ?></a></li>
					<li><?php echo trans('my_profile') ?></li>
				</ol><!-- breadcrumb -->						
				<h2 class="title"><?php echo trans('my_profile') ?></h2>
			</div><!-- banner -->
		
		
		<?php $this->load->view('user_scction');?>
		
		
		 <div class="adpost-details">
            <div class="row">
                <div class="col-md-8">
                   <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>my_profile">
                        <fieldset>
                            <div class="section seller-info">
                                <h4><?php echo trans('my_information') ?></h4>     
                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title"><?php echo translate('firstname') ?><span class="required"></span></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px">
                                        <input type="text" value="<?php echo set_value('firstname') ? set_value('firstname') : $user->username ?>"
                                         name="firstname" class="form-control login-form-input login-form-input-email"
                                               style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               placeholder="Ex. maher">
                                    </div>
                                    <span style="    color: red;"><?php echo form_error('firstname') ? form_error('firstname') : '' ?></span>
                                </div>
                                 <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title"><?php echo translate('last_name') ?><span class="required"></span></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px">
                                        <input type="text"  value="<?php echo set_value('lastname') ? set_value('lastname') : $user->lastname ?>"
                                        name="lastname" class="form-control login-form-input login-form-input-email"
                                               style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               placeholder="Ex. kalash">
                                    </div>
                                    <span style="    color: red;"><?php echo form_error('lastname') ? form_error('lastname') : '' ?></span>
                                </div>
                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title"><?php echo translate('email') ?><span class="required"></span></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px">
                                        <input type="text" value="<?php echo set_value('email') ? set_value('email') : $user->email ?>"
                                         name="email" class="form-control login-form-input login-form-input-email"
                                               style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               placeholder="Ex. ext@any.co">
                                    </div>
                                    <span style="color: red;"><?php echo form_error('email') ? form_error('email') : '' ?></span>
                                </div>
                                <div class="row form-group">
                                    <label class="col-sm-3 label-title"><?php echo trans('gender') ?><span class="required"></span></label>
                                    <div class="col-sm-9"style="margin-bottom: 30px; margin-top: 12px;">                                   
                                      <input type="radio" name="gender"  value="1" id="male"  <?php echo $user->gender==1 ? 'checked="checked"' : '' ?>>
                                   	  <label for="male"><?php echo trans('male') ?></label>
                                   	  <input type="radio" name="gender"  value="2" id="female" <?php echo $user->gender==2 ? 'checked="checked"' : '' ?>>
                                      <label for="female"><?php echo trans('female') ?></label>
                                    </div> 
                                    <span style="color: red;"><?php echo form_error('gender') ? form_error('gender') : '' ?></span>
                                </div>
							
							 
                            </div>
                            <div class="section seller-info">       
							  <h4><?php echo trans('more_info') ?></h4>
                                <div class="row form-group brand-name">
                           		  <label  class="col-sm-3 label-title" for=""><?php echo trans('languages') ?><span class="required"></span></label>
                            		  <div class="col-sm-7" style="margin-bottom: 30px">
                                                <div class="select2-wrapper">
                                                    <select name="langs[]" class="form-control select2" placeholder=""  multiple="multiple">
                                                    	<?php /*foreach ($userlangs as $langu) {?>
                                                        	<option selected="selected" value="<?php echo $langu['lang_id'] ?>><?php echo $langu['lang_name'] ?></option>
                                                        <?php }*/ ?>
                                                        
                                                        <?php foreach ($langs->result() as $lang) {?>
                                                            <option value="<?php echo $lang->id ?>" <?php echo in_array($lang->id, $userlangs) ? 'selected' : '' ?>><?php echo $lang->lang_name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>	
                                               <span style="    color: red;"><?php echo form_error('langs[]') ? form_error('langs[]') : '' ?></span>  
											</div>
                   					     </div>
		                                <div class="row form-group brand-name">
		                                   <label class="col-sm-3 label-title"><?php echo trans('my_skills') ?></label>
		                                     <div class="col-sm-7" style="margin-bottom: 30px">
		                                        <div class="select2-wrapper">
		                                            <select class="form-control select2" placeholder="Pick your Skills"  multiple="multiple" name="skills[]">
		                                                <?php foreach ($skills->result() as $skill) {?>
		                                                    <option value="<?php echo $skill->skill_id ?>"  <?php echo in_array($skill->skill_id, $userskills) ? 'selected' : '' ?>><?php echo $skill->skill_name ?></option>
		                                                <?php } ?>
		                                            </select>
		                                         </div>
		                                        <span style="    color: red;"><?php echo form_error('skills[]') ? form_error('skills[]') : '' ?></span>
		                                    </div>
		                                </div>
         							   <div class="row form-group item-description">
                                   	     <label class="col-sm-3 label-title"><?php echo trans('country') ?><span class="required"></span></label>
                                            <div class="col-sm-7" style="margin-bottom: 30px;">
                                              <div class="select2-wrapper">
                                                <select name="country" onchange="citys(this.value)" class="form-control select2" placeholder="First pick your country">
                                                	<?php if ($place->country_id){?>
                                               <option selected="selected" value="<?php echo $place->country_id ?>"><?php echo $place->country_english_name ?></option>
                                              <?php } ?>
                                                 <?php if(!$place->country_id){echo "<option></option>";} ?>
                                                <?php foreach ($countrys->result() as $country) {?>
                                                    <option value="<?php echo $country->country_id ?>" ><?php echo $country->country_english_name ?></option>
                                                <?php } ?>
                                             </select>
                                            </div>
                                          <span style="    color: red;"><?php echo form_error('country') ? form_error('country') : '' ?></span>
                                       </div>
                                    </div>                                
                               	  <div class="row form-group item-br">
                                    <label class="col-sm-3 label-title"><?php echo trans('city') ?><span class="required"></span></label>
                                      <div class="col-sm-7" style="margin-bottom: 30px;">
                                        <div class="select2-wrapper">
                                          <select name="city" id="select2_3" class="form-control select2" style="" placeholder="pick you city">
                                          	 <?php if(!$place->city_id){echo "<option></option>";} ?>
                                          	 <?php if ($place->city_id){?>
                                               <option selected="selected" value="<?php echo $place->city_id ?>"><?php echo $place->city_english_name ?></option>
                                              <?php } ?>
                                                
                                            </select>
                                        </div>
                                        <span style="color: red;"><?php echo form_error('city') ? form_error('city') : '' ?></span>
                                    </div>
                                </div>
                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title"><?php echo translate('address') ?></label>
                                    <div class="col-sm-7"style="margin-bottom: 30px">
                                        <input type="text" value="<?php echo set_value('address') ? set_value('address') : $user->place ?>"
                                               name="address" class="form-control login-form-input login-form-input-email"
                                               style="background-image:url('<?php echo base_url()?>ass/iob.png');"
                                               >
                                    </div>
                                    <span style="    color: red;"><?php echo form_error('address') ? form_error('address') : '' ?></span>
                                </div>

                               <!-- <div class="row form-group item-description">
	                               <label class="col-sm-3 label-title"><?php echo trans('address') ?><span class="required"></span></label>
	                                 <div class="col-sm-7" style="margin-bottom: 30px">
	                                   <input class="form-control login-form-input login-form-input-email" name="address"
	                                                 style="background-image:url('<?php echo base_url()?>ass/iob.png');"
	                                               id="textarea" placeholder="Write The Address" ></input>
	                                       <span><?php echo form_error('address') ? form_error('address') : '' ?></span>
	                                    </div>
	                              </div>-->
	                              </div>
	                            <div class="checkbox section agreement">
	                           	  <label for="send" class="">
	                                <input type="checkbox" name="send" id="send" onchange="javascript:dis()">
                                      I agree to Dubarah  <a href="#"  data-toggle="modal" data-target="#myModal1">Terms of Use</a> and <a href="#"  data-toggle="modal" data-target="#myModal">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Dubarah.
	                                   </label>
	                                <button type="submit" id="submit" class="btn btn-primary" disabled="true"><?php echo trans('update_info') ?></button>
	                            </div>
                        	</fieldset>
                    	</form><!-- form -->
               		 </div>
                	<!-- quick-rules -->
	                  <div class="col-md-4">
	                    <div class="section quick-rules">
	                        <h4>Tips for Great profile</h4>
	                     	 <p class="lead" style="color: grey"> It’s important to make sure your profile stands out.</p>
	                          <ul>
	                            <li>First and last name should be your name, not your business name.</li>
	                            <li>Add your email that you check daily.</li>
	                            <li>Make sure to mention all languages you speak, even if you know a little about it.</li>
	                            <li>Skills it’s the most important info in your profile, try to add all your business, and personal skills (Don’t underestimate any skill you have)</li>
	                            <li>Your address must be your work address (Home, office, cafe, etc..).</li>
	                         </ul>
	                       </div>
	                    </div><!-- quick-rules -->
	                  </div><!-- photos-ad -->
	                </div>			
			     </div><!-- container -->
        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?php echo trans('termsofuse') ?></h4>
                    </div>
                    <div class="modal-body">
                        <p><?php echo trans('terms') ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><?php echo trans('privacy_policy') ?></h4>
                    </div>
                    <div class="modal-body">
                        <p><?php echo trans('privacy') ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div><!-- user-login -->
		       </section><!-- ad-profile-page -->	
		<?php $this->load->view('common/footer'); ?>
		<script type="text/javascript" src="<?php echo base_url() ?>ass/js/ajaxfileupload.js"></script>
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
		            title: '<?php echo trans('success'); ?>',
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
      
     	window.onload = function() 
	{
  
   
    	  document.getElementById("select2-search-choice-close").style.backgroundImage = "url('<?php echo base_url().'ass/css/select2.png'?>')";
	
   
		
	}
  
    
</script>
