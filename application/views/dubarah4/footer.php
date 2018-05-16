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
                    <span class="fa fa-twitter"></span>
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
  <script src="<?php echo base_url()?>ass/js/sweetalert.min.js"></script>
  <script src="<?php echo base_url()?>ass/js/toastr.min.js"></script>
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
    });
    <?php if ($this->session->userdata('user_id')) { ?>
        function read_nots() {
          $.ajax({
              url: '<?php echo base_url(); ?>read_notifications/',
              success: function(data) {
                if (data) {
                    $("#badge").addClass('badge-default').removeClass('badge-danger');
                    $("#badge").html(0);
                };
              }
          });
        }
        window.onload = function () {
            get_nots();
        };
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
                    //document.getElementById("notbill").style.color = "#e7412c";
                    // var mytext =    '<a style="color:#777; margin: 20px" href="' + res[3] + '">' +
                    //                     '<b>' + res[2] + ': </b>' + res[4] +
                    //                 '</a>';
                    var mytext = '<div class="media"><img class="d-flex mr-3 mar-left" src="<?php echo base_url()?>asset/imgs/dubarah-footer-img.jpg" width="50" height="50" style="border-radius: 50%; " onclick="location.href=\''+res[3]+'\';"><div class="media-body" onclick="location.href=\''+res[3]+'\';"><h5 class="mt-0">'+res[2]+':</h5><p>'+ res[4]+'</p><p class="text-muted small">Just Now</p></div><a class="close mar-right" data-toggle="tooltip" data-placement="bottom" title="Mark as Read"><i class="fa fa-check" aria-hidden="true"></i></a></div><div class="divider"></div>';
                    //alert(mytext);
                    $("#first_divider").after(mytext);
                    $("#badge").html(res[5]);
                    $('#badge').removeClass('badge-default').addClass('badge-danger');
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
    <?php }?>
  </script>
</body>
</html>