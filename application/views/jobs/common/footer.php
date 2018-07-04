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
  <!-- Optional JavaScript == jQuery first, then Popper.js, then Bootstrap JS == -->
  <script src="<?php echo base_url()?>asset/js/jquery-3.2.1.js"></script>
  <script src="<?php echo base_url()?>asset/js/popper.min.js" ></script>
  <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>asset/js/additional.js"></script>
  <!-- tools -->
  <script src="<?php echo base_url()?>ass/js/sweetalert.min.js"></script>
  <script src="<?php echo base_url()?>ass/js/toastr.min.js"></script>
  <script src="<?php echo base_url() ?>ass/js/select2.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      <?php if ($this->session->userdata('suc_message') || $this->session->userdata('err_message')) { ?>

          <?php if ($this->session->userdata('err_message')) { ?>
              title = '<?php echo trans('fail'); ?>';
              text  = '<?php echo $this->session->userdata('err_message'); $this->session->unset_userdata('err_message'); ?>';
              type  = 'error';
          <?php } ?>
          <?php if ($this->session->userdata('suc_message')) { ?>
              title = '<?php echo trans('success'); ?>';
              text  = '<?php echo $this->session->userdata('suc_message'); $this->session->unset_userdata('suc_message'); ?>';
              type  = 'success';
          <?php } ?>
              
          
          swal({
              title: title,
              text: text,
              type: type,
              timer: 6000,
              html: true,
              showConfirmButton:true
          });

      <?php } ?>

      //for profile settings
      $( ".old" ).select2( {  maximumSelectionSize: 15 } );
    });
   	    <?php if ($this->session->userdata('user_id')) { ?>
	    	
	    	// request permission on page load
			document.addEventListener('DOMContentLoaded', function () {
				if (Notification.permission !== "granted")
				    Notification.requestPermission();
			});
			
			function notifyMe(title, text, link) {
			  if (Notification.permission !== "granted")
			    Notification.requestPermission();
			  else {
			    var notification = new Notification(title, {
			      icon: '',
			      body: text,
			    });
			    notification.onclick = function () {
			      window.open(link);      
			    };
			  }
			}
	    	
			window.onload = function () {
				get_nots();
				
			};
			/*pdaiJhoI2JfiMUJc2Ii1C_uas0fWRjF43jcOxHk9TFA*/
			function read_nots() {
		      $.ajax({
		          url: '<?php echo base_url(); ?>read_notifications/',
		          success: function(data) {
		          	if (data) {
		          		document.getElementById("notbill").style.color = "#fff";
		          		$("#not_num").html(0);
		          	};
		          }
		      });
		    }
		    
		    function get_nots() {
		    	//alert('fsds);
		    	setTimeout(function(){get_nots();}, 10000);
			   //alert('vft');
			   $.ajax({
		          url: '<?php echo base_url(); ?>get_notifications/',
		          success: function(data) {
		          	if (data) {
		          		//alert(data);
		          		var res = JSON.parse(data);
			            document.getElementById("notbill").style.color = "#e7412c";
			            var mytext = 	'<a style="color:#777; margin: 20px" href="' + res[3] + '">' +
											'<b>' + res[2] + ': </b>' + res[4] +
										'</a>';
						//alert(mytext);
			            $("#first_not").prepend(mytext);
			            $("#not_num").html(res[5]);
			            if (!document.hasFocus()) {
						    notifyMe(res[2], res[4], res[3]);
						}
			            toastr.options = {
						  "closeButton": false,
						  "debug": false,
						  "newestOnTop": false,
						  "progressBar": true,
						  "positionClass": "toast-bottom-right",
						  "preventDuplicates": false,
						  "onclick": null,
						  "showDuration": "1000",
						  "hideDuration": "1000",
						  "timeOut": "10000",
						  "extendedTimeOut": "1000",
						  "showEasing": "swing",
						  "hideEasing": "linear",
						  "showMethod": "fadeIn",
						  "hideMethod": "fadeOut"
						};
						toastr["success"](res[0]);
		          	};
		          	
		          }
		      });
		    }
		<?php } ?>
		
	  <?php if (!$this->session->userdata('user_id')) { ?>
		  function statusChangeCallback(response) {
		    if (response.status === 'connected') {
		      Register(); 
		    } else if (response.status === 'not_authorized') {
		     
		    } else {
		      
		    }
		  }
		
		  function checkLoginState() {
		    FB.getLoginStatus(function(response) {
		      statusChangeCallback(response);
		    });
		  }
		
		
		  
		  function Register() {
		    FB.api('/me?fields=email,first_name, last_name, age_range, gender, picture, verified', function(response) {
		      saveUserData(response);
		    });
		  }
		  
		  function saveUserData(userData){
		    $.post(
		    		'<?php echo base_url() ?>facebook', 
		    		{userData: JSON.stringify(userData)}, 
		    		function(data){
		    		    if(data=='passed'){
                            window.location = "<?php echo base_url(); ?>";
                        }
		    		    else if (data=='new')  {

                            window.location = "<?php echo base_url().'done_virfed'; ?>";

                        }


		    		}
		    	  );
		  }
	  <?php } else { ?>
	  	function face_logout () {
			FB.logout(function(response) {
				window.location = "<?php echo base_url() ?>logout";
			});
			window.location = "<?php echo base_url() ?>logout";
	  	}
	  	
	  	
	  <?php } ?>
		window.fbAsyncInit = function() {
			  FB.init({
			    appId      : '483162955140745',//'483162955140745',
			    cookie     : true,  
			    xfbml      : true,  
			    version    : 'v2.8' 
			  });
			
			  FB.getLoginStatus(function(response) {
			    statusChangeCallback(response);
			  });
		
		  };
		
		  (function(d, s, id) {
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) return;
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/en_US/sdk.js";
		    fjs.parentNode.insertBefore(js, fjs);
		  }(document, 'script', 'facebook-jssdk'));

		  function add_dubarah() {
              <?php if ($this->session->userdata('user_id')) { ?>
              window.location = '<?php echo base_url() ?>add_dubarah';
              <?php  } else { ?>
                  swal({
                      title: '<?php echo trans('fail'); ?>',
                      text: '<?php echo trans('need_login'); ?>',
                      type: 'info',
                      timer: 600000,
                      html: true,
                      showConfirmButton:true
                  });
              <?php  } ?>
          }
  
      
        
        
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37812549-1', 'auto');
  ga('send', 'pageview');

$(document).ready(function() {
    $('.select2').select2();
});
              
	</script>  
 


</body>
</html>