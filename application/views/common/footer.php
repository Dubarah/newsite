<!-- footer -->
	

	<footer id="footer" class="clearfix" style="background-color: #222222;">
		 <section class="footer-top clearfix" style="background-color: #d8d8da; padding: 0    margin-bottom: -40px;">
            <div class="container">
                <div class="row">
                    <!-- footer-widget -->
                    <div class="col-sm-2">
                        <div class="footer-widget">
                            <img class="img-center center-block" style="display: block; height: 113px;width: auto;" src="<?php echo base_url()?>ass/images/foot/ashoka.png"  /><br /><br />
                        </div>
                    </div><!-- footer-widget -->
                    <div class="col-sm-2">
                        <div class="footer-widget">
                            <img class="img-center center-block" style="display: block; height: 113px;width: auto;"  src="<?php echo base_url()?>ass/images/foot/bobs.png"  /><br /><br />
                        </div>
                    </div><!-- 
                    <div class="col-sm-2">
                        <div class="footer-widget">
                            <img src="<?php echo base_url()?>ass/images/foot/bobs2.png"  /><br /><br />
                        </div>
                    </div><!-- footer-widget -->
                    <div class="col-sm-2">
                        <div class="footer-widget">
                            <img class="img-center center-block" style="display: block; height: 113px;width: auto;"  src="<?php echo base_url()?>ass/images/foot/Gifted_Citizen.png"  /><br /><br />
                        </div>
                    </div><!-- footer-widget -->
                    <div class="col-sm-2">
                        <div class="footer-widget">
                            <img class="img-center center-block" style="display: block; height: 113px;width: auto;"  src="<?php echo base_url()?>ass/images/foot/RSA.png"  /><br /><br />
                        </div>
                    </div><!-- footer-widget -->
                    <div class="col-sm-2">
                        <div class="footer-widget">
                            <img class="img-center center-block" style="display: block; height: 113px;width: auto;" src="<?php echo base_url()?>ass/images/foot/schwab.png"  /><br /><br />
                        </div>
                    </div><!-- footer-widget -->

                    <!-- footer-widget -->



                </div><!-- row -->
            </div><!-- container -->
        </section><!-- footer-top -->
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
					<div class="col-sm-5" style="border-right: 1px solid rgb(111, 113, 118); margin-bottom: 20px; margin-right: 10px">
						<div class="footer-widget">
							<br /><br />
							<div class="col-sm-3">
								<img style="    width: 95px;" src="<?php echo base_url() ?>ass/images/dub-icon.png" />
							</div>
							<div class="col-sm-9">
							<p style="color: #858585;"><b>Dubarah</b> is a global network that bridges Syrian refugees’ problems with soluions, operates in 15 countries with over than 180K volunteers working to support refugees at any necessity and level.<br><br><span style="color:#6f6f6e">©Dubarah Solutions FZCO</span></p>
						</div>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3" style="border-right: 1px solid rgb(111, 113, 118); margin-bottom: 20px; height: 200px">
						<div class="footer-widget">
						<h3><?php echo trans('quick') ?></h3>
							<div class="col-sm-6">
								<ul>
									<?php if (!$this->session->userdata('user_id')): ?>
										<li><a href="<?php echo base_url()?>signup">- <?php echo trans('register')?></a></li>
										<li><a href="<?php echo base_url()?>login">- <?php echo trans('signin')?></a></li>
									<?php else: ?>
										<li><a href="<?php echo base_url()?>add_dubarah">- <?php echo trans('add_dubarah')?></a></li>
										<li><a href="<?php echo base_url()?>my_profile">- <?php echo trans('my_profile')?></a></li>
									
										<li><a href="<?php echo base_url()?>logout">- <?php echo trans('logout')?></a></li>
									<?php endif ?>
								</ul>
							</div>
							<div class="col-sm-6" >
								<ul>
									<li><a target="_blank"  href="<?php echo base_url()?>aboutus">- <?php echo trans('about_us')?></a></li>
									<li><a target="_blank" href="<?php echo base_url()?>privacy">- <?php echo trans('privacy_policy')?></a></li>
									<li><a target="_blank" href="<?php echo base_url()?>terms">- <?php echo trans('termsofuse')?></a></li>
								
									<!--<li><a href="<?php echo base_url()?>team">- <?php echo trans('contact_us')?></a></li>-->
								</ul>
							</div>
						</div>
					</div><!-- footer-widget -->
					
					<div class="col-sm-2" style="border-right: 1px solid rgb(111, 113, 118); margin-bottom: 20px; height: 200px">
						<div class="footer-widget">
							<h3><?php echo trans('services') ?></h3>
							<div class="col-sm-6" >
							<ul>
								<li><a target="_blank" href="<?php echo base_url() ?>categories_main/2">- <?php echo trans('jobs') ?></a></li>
								<!-- hero citizen service added by #PE$$ -->
								<li><a target="_blank" href="<?php echo base_url() ?>achievements">- <?php echo trans('hero') ?></a></li>
							</ul>
							</div>
						</div>
					</div><!-- footer-widget -->
					<div class="col-sm-1">
						
						<h3 style="    font-weight: bold;  color: #EEEEEE; line-height: 28px;  margin-bottom: 10px; text-transform: capitalize;"><?php echo trans('social_media') ?></h3>
							
								
						<ul class="banner-socail row">
							<?php $socials = $this->session->userdata('social'); $i = 1;
							foreach ($socials as $value) { ?>
							<li class="col-sm-1" <?php echo $i ==5? 'style="margin-left: 11px;"' : '' ?>><a target="_blank" href="<?php echo $value->social_media_link?>"><i style="color: gray;" class="fa fa-<?php echo $value->social_media_name ?>"></i></a></li>
							<?php $i++;} ?>
						</ul><!-- banner-socail -->
								
								
							
					
					</div>
				
				</div><!-- row -->
					<!-- footer-widget -->
			</div><!-- container -->
		</section><!-- footer-top -->

    <?php if ($this->session->userdata('first_logged')) { ?>
        <div class="modal fade" id="welcome" role="dialog">
            <div class="modal-dialog modal-sm">

                <!-- Modal content-->
                <div class="modal-content" style="background-color: #f1f1f2">

                    <div class="modal-body" style="overflow: hidden; margin-left: 30px; margin-right: 30px">
                        <center><img src="<?php echo base_url() ?>ass/images/dub-gray.png" style="width: 100%"></center>

                        <p style="margin-top: 10px; color: #a6a8ab;font-weight: bolder;">Post a Job you have </p>
                        <a style="padding: 7px 8px 7px 8px;color: black;background-color: #808184; width: 100%; text-align: <?php echo LANG() == 'en' ? 'left' : 'right' ?>" id="btnn" href="#" onclick="add_dubarah()" class="btn"><img src="<?php echo base_url() ?>ass/images/plus-dub-gray.png" style="font-style:bold;height:24px;width:24px;margin-right:10px;"><strong>Add Dubarah</strong></a>

                        <p style="margin-top: 20px; color: #a6a8ab;font-weight: bolder;">Apply for jobs  already exist </p>
                        <a style="padding: 7px 8px 7px 8px;color: black;background-color: #808184; width: 100%; text-align: <?php echo LANG() == 'en' ? 'left' : 'right' ?>" id="btnn" href="<?php echo  base_url()?>categories_main/2"  class="btn"><img src="<?php echo base_url() ?>ass/images/yes-dub.png" style="font-style:bold;height:24px;width:24px;margin-right:10px;">Apply for a <b>job</b></a>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    <?php } ?>

		
	</footer><!-- footer -->


     <!-- JS -->


	
     <!-- JS --
    <script src="<?php echo base_url() ?>ass/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>ass/js/modernizr.min.js"></script>
    <script src="<?php echo base_url() ?>ass/js/bootstrap.min.js"></script>
	
	

	<script src="<?php echo base_url() ?>ass/js/map.js"></script>
    <script src="<?php echo base_url() ?>ass/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>ass/js/smoothscroll.min.js"></script>
    <script src="<?php echo base_url() ?>ass/js/scrollup.min.js"></script>
    <script src="<?php echo base_url() ?>ass/js/price-range.js"></script>    
    <script src="<?php echo base_url() ?>ass/js/custom.js"></script>
	<script src="<?php echo base_url() ?>ass/js/switcher.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>ass/js/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>ass/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script src="<?php echo base_url() ?>ass/js/select2.js"></script>
	-->
	<script src="<?php echo base_url() ?>ass/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>ass/js/modernizr.min.js"></script>
    <script src="<?php echo base_url() ?>ass/js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="<?php echo base_url() ?>ass/js/gmaps.min.js"></script>
	<script src="<?php echo base_url() ?>ass/js/goMap.js"></script>
	<script src="<?php echo base_url() ?>ass/js/map.js"></script>
    <script src="<?php echo base_url() ?>ass/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>ass/js/smoothscroll.min.js"></script>
    <script src="<?php echo base_url() ?>ass/js/scrollup.min.js"></script>
    <script src="<?php echo base_url() ?>ass/js/price-range.js"></script>    
    <script src="<?php echo base_url() ?>ass/js/custom.js"></script>
	<script src="<?php echo base_url() ?>ass/js/switcher.js"></script>
	<script src="<?php echo base_url() ?>ass/js/select2.js"></script>
	<script src="<?php echo base_url() ?>ass/js/sweetalert.min.js"></script>
	<script src="<?php echo base_url() ?>ass/js/toastr.min.js"></script>
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
            width = $(window).width();
            if (width < 990 && width > 766) {
                $('#home-one-info').css('margin-top',50+'px');
            }
            if (width < 766 && width > 342) {
                $('#home-one-info').css('margin-top',45+'px');
            }
            if (width < 342) {
                $('#home-one-info').css('margin-top',74+'px');
                //$('#btnn1').css('margin-left',0+'px');
            }
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
        <?php if ($this->session->userdata('first_logged')) { ?>
        $(window).load(function(){
            var modal = $('#welcome'),
                dialog = modal.find('.modal-dialog');
            modal.css('display', 'block');

            // Dividing by two centers the modal exactly, but dividing by three
            // or four works better for larger screens.
            dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
//redirect after 5seconds
            setTimeout(function(){
                  $("#welcome").modal('show');
              },5000)

          });
        <?php } ?>
        
        
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37812549-1', 'auto');
  ga('send', 'pageview');


        
        
	</script>
  </body>
</html>