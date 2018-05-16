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

  <!-- script for createAchi #PE$$-->
  <script type ="text/JavaScript">
      $(document).ready(function () {

        // dynamic city change #PE$$
        $("#country-select").change(function(){
          $.ajax({
              url: '<?php echo base_url()?>get_city/' + $(this).val(),
              success: function(data) {
                  if (data) {
                      $("#city-select").html("<option disabled selected>Select City</option>" + data);
                  };
              }
          });
        });
        
        //dynamic card change #PE$$
        $("#nck").change(function(){
          $("#nck_view, #nck_view2, #nck_view3").text($(this).val());
        });
        $("#ach_date").change(function(){
          $("#achDate_view, #achDate_view2, #achDate_view3").text($(this).val());
        });
        $("#city-select").change(function(){
          $("#city-country, #city-country2, #city-country3").text($("#country-select option:selected").text()+", " +$("#city-select option:selected").text());
        });


        //steps jquery for adding achievement
        $(".tab-content").on("click", "#next-step1, #next-step2",function(e){
          e.preventDefault();
          //showing loading modal till ajax request respond back #PE$$
          swal({
          title: "Checking Data...",
          text: "Please wait",
          imageUrl: "<?php echo base_url()?>asset/imgs/loading_icon.gif",
          showConfirmButton: false,
          allowOutsideClick: false
          });
          
          switch(true){
            case $(this).is("#next-step2"):
                step = 2;
                link = '<?php echo base_url()?>process/' + step;
                console.log("step 2");
                break;
            case $(this).is("#next-step1"):
                step = 1;
                link = '<?php echo base_url()?>process/' + step;
                console.log("step 1");
                break;
            default:
                step = 1;
                link = '<?php echo base_url()?>process/' + step;
                console.log("none");
                break;
          }

          $.ajax({
            type: 'POST',
            url: link,
            data: new FormData($('#theForm')[0]),
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
              res = JSON.parse(data);
              //console.log("here2");
              $("#ach_type").addClass("validate");
              $("#ach_type-v").html("");

              $("#nck").addClass("validate");
              $("#nck-v").html("");

              $("#ach_date").addClass("validate");
              $("#ach_date-v").html("");

              $("#country-select").addClass("validate");
              $("#country-select-v").html("");

              $("#city-select").addClass("validate");
              $("#city-select-v").html("");

              $("#ach_exp").addClass("validate");
              $("#ach_exp-v").html("");

              $("#ach_tw").addClass("validate");
              $("#ach_tw-v").html("");
              //res return(1)
              if (res[0]) {
                console.log("validate success");
                //if not the second step
                if(!res[1]){
                swal({
                    title: 'Validated!',
                    text: 'Ahead to the next step.',
                    type: 'success',
                    timer: 6000,
                    html: true,
                    showConfirmButton:true
                });
                $("#step1").removeClass("active");
                $("#step2").addClass("active");
                document.getElementById("step2").scrollIntoView(true);
                }else{
                  //check if there is errors
                  if(res[2]){
                    $("#step2").removeClass('active');
                    $("#step1").addClass('active');
                    document.getElementById("step1").scrollIntoView(true);
                    title = '<?php echo trans('fail'); ?>';
                    text  =res[2];
                    type='error';
                    swal({
                        title: title,
                        text: text,
                        type: type,
                        timer: 6000,
                        html: true,
                        showConfirmButton:true
                    });
                  }else{
                    swal({
                        title: 'Done!',
                        text: 'Ahead to the next step.',
                        type: 'success',
                        timer: 6000,
                        html: true,
                        showConfirmButton:true
                    });
                    $("#step2").removeClass("active");
                    $("#step3").addClass("active");
                    document.getElementById("step3").scrollIntoView(true);
                  }
                }
              }
              //res return(0)
              if(!res[0]){
                swal({
                    title: 'Not validate!',
                    text: 'Please complete the required files.',
                    type: 'error',
                    timer: 6000,
                    html: true,
                    showConfirmButton:true
                });
                console.log(' validation errors');
                errors = res[1];
                if(errors["achType"]){
                    $("#ach_type").addClass(" invalid");
                    $("#ach_type-v").html(errors["achType"]);
                }
                if(errors["Nocker"]){
                    $("#nck").addClass(" invalid");
                    $("#nck-v").html(errors["Nocker"]);
                }
                if(errors["achDate"]){
                    $("#ach_date").addClass(" invalid");
                    $("#ach_date-v").html(errors["achDate"]);
                }
                if(errors["country"]){
                    $("#country-select").addClass(" invalid");
                    $("#country-select-v").html(errors["country"]);
                }
                if(errors["city"]){
                    $("#city-select").addClass(" invalid");
                    $("#city-select-v").html(errors["city"]);
                }
                if(errors["achExp"]){
                    $("#ach_exp").addClass(" invalid");
                    $("#ach_exp-v").html(errors["achExp"]);
                }
                if(errors["achTw"]){
                    $("#ach_tw").addClass(" invalid");
                    $("#ach_tw-v").html(errors["achTw"]);
                }
              }
            }
          });
        });

        $("#prev-step").click(function(){
          $("#step2").removeClass('active');
          $("#step1").addClass('active');
          document.getElementById("step1").scrollIntoView(true);
        });
        $("#next-step3").click(function(){
          $("#step3").removeClass("active");
          $("#complete").addClass("active");
          document.getElementById("complete").scrollIntoView(true);
          <?php if($this->session->userdata('war_message')):?>
            title = 'Be Attention';
            text  = '<?php echo $this->session->userdata('war_message'); $this->session->unset_userdata('war_message'); ?>';
            type  = 'warning';
          <?php endif;?>
          swal({
            title: title,
            text: text,
            type: type,
            html: true,
            showConfirmButton:true
          });
        }); 
      });

      //logo image priview #PE$$
      document.getElementById('getval').addEventListener('change', readURL, true);
      function readURL(){
          var file = document.getElementById("getval").files[0];
          var reader = new FileReader();
          reader.onloadend = function(){
              document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";
              //add to change the logo on the card dynamicly #PE$$
              var logo = document.getElementsByClassName('n_logo');
              for(i=0;i<logo.length;i++){
                logo[i].src =reader.result;
              }
          }
          if(file){
              reader.readAsDataURL(file);
          }else{
          }
      }        
  </script>

  <!-- script for showAchi -->
  <script type="text/javascript">
    $(document).ready(function(){
          //unfollow hero #PE$$
          $('.following').on('click','.unfollow', function(){
            var heroId = $(this).attr('heroid');
            var link = "<?php echo base_url()?>unfollow/" + heroId;
            $.ajax({url: link,
              success: function(data){
                if(data){
                  $('.unfollow[heroid="'+heroId+'"]').html('Follow');
                  //selector.html('Follow');
                  $('.unfollow[heroid="'+heroId+'"]').removeClass('btn-outline-danger unfollow').addClass('btn-outline-success follow');
                  var followers = $('.followers[heroid ="'+heroId+'"]').attr('followers');
                  $('.followers[heroid ="'+heroId+'"]').html(parseInt(followers) -1 +' followers').attr('followers',parseInt(followers)-1);
                }
              }
            });
          });
          //follow hero #PE$$
          $('.following').on('click','.follow', function(){
            var heroId = $(this).attr('heroid');
            var link = "<?php echo base_url()?>follow/" + heroId;
            $.ajax({url: link,
              success: function(data){
                if(data){
                  $('.follow[heroid="'+heroId+'"]').html('Unfollow');
                  $('.follow[heroid="'+heroId+'"]').removeClass('btn-outline-success follow').addClass('btn-outline-danger unfollow');
                  var followers = $('.followers[heroid ="'+heroId+'"]').attr('followers');
                  $('.followers[heroid ="'+heroId+'"]').html(parseInt(followers) +1 +' followers').attr('followers',parseInt(followers)+1);
                }
              }
            });
          });
        });
  </script>


</body>
</html>