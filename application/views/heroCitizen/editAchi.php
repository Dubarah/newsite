<!-- Header -->
<?php $this->load->view('main/second/header'); ?>
<div class="wrapper grey-lighten-3">
  <img src="<?php echo base_url()?>asset/imgs/headerCitizen.svg" class="img-fluid intro-img">
  <div class="container" style="max-width: 1000px">
    <section>
      <form role="form" id="theForm" method="post" enctype="multipart/form-data">
        <div class="tab-content">
          <!-- Step 1 -->
          <div class="tab-pane active" role="tabpanel" id="step1">
            <!-- heading start-->
            <div class="row mar-top">
              <div class="col">
                <h5> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editing Achievement </h5>
              </div>
            </div>
            <!-- heading end-->
            <div class="divider"></div>
            <!-- all stuff start -->
            <div class="row">
              <!-- form column start-->
              <div class="col-sm-9">
                <!-- Achievement type start-->
                <select id="ach_type" style="height: 50px;" name="achType" class="form-control no-border">
                  <?php foreach ($ach_type as $type){
                    echo '<option value = "'.$type->ach_typeid.'" '.($type->ach_typeid == $ach->ach_type ? 'selected' : '').'>'.$type->type_name.'</option>';
                  }?>
                </select>
                <span id="ach_type-v"></span>
                <!-- Achievement type end-->
                <!-- Achievement name start-->
                <input name="Nocker" id ="nck" class="form-control no-border mar-top" type="text" placeholder="Nocker" value="<?php echo $ach->ach_title?>" >
                <span id="nck-v"></span>
                <!-- Achievement name end-->
                <!-- Achievement logo start-->
                <h5 class="mar-top">Logo</h5>
                <p class="small">
                  Please Upload The Logo Related To Your  Achievement Below .
                  Ex : Business Logo , Certification issuer Logo , etc ...
                </p>
                <div class="row">
                  <div class="col">
                    <div class="user-images" id='profile-upload' style="border-radius: 5px;
                      height: 100px;width: 100px;
                      border-bottom-left-radius: 0;
                      border-bottom-right-radius: 0;
                      margin-top: 11px;
                      background-image: url('<?php echo $ach->ach_logo ? base_url().'uploads/achievements/logos/'.$ach->ach_logo : base_url().'asset/imgs/100placeholder.png'; ?>')">
                      <div class="hvr-profile-img"><input type="file" name="com-logo" id='getval' accept="image/*" class="upload w180" title="Dimensions 180 X 180" id="imag"></div>
                      <i class="fa fa-camera"></i>
                      <input type="search" name="oldlogo" id="oldlogo" value="<?php echo $ach->ach_logo ? $ach->ach_logo : '' ?>" style="display: none;" >
                      <input type="text" name="dellogo" id="dellogo" value="0" style="display: none;" >
                    </div>
                    <button id="logo-del" type="button" class="btn">Delete</button>
                  </div>
                </div>
                <!-- Achievement logo end-->
                <!-- Achievement date start-->
                <input name="achDate" id='ach_date' class="form-control  mar-top no-border" type="date" placeholder="Achievement Date Ex : Project Or Company Founded Date." value="<?php echo Date('Y-m-d',$ach->ach_date) ?>">
                <span id="ach_date-v"></span>
                <!-- Achievement date end-->
                <!-- Achievement country start-->
                <select name="country" id="country-select" class="form-control no-border mar-top" placeholder="Country Of Achievement">
                  <option disabled selected>Country Of Achievement</option>
                  <?php foreach ($countries as $country){
                    echo '<option value = "'. $country->country_id.'" '.($country->country_id == $ach->ach_country ? 'selected':'').'>'.$country->country_english_name.'</option>';
                  }?>
                </select>
                <span id="country-select-v"></span>
                <!-- Achievement country end-->
                <!-- Achievement city start-->
                <select name="city" class="form-control no-border mar-top" id="city-select" placeholder="City Of Achievement">
                    <option disabled selected>City Of Achievement</option>
                </select>
                <span id="city-select-v"></span>
                <!-- Achievement city end-->
                <!-- Achievement explanation start-->
                <textarea id="ach_exp" name="achExp" class="form-control no-border mar-top" rows="6" placeholder="Briefly Explain Your Achievement & What You Did." ><?php echo $ach->ach_exp?></textarea>
                <span id="ach_exp-v"></span>
                <!-- Achievement explanation end-->
                <!-- Achievement images start-->
                <h5 class="mar-top">Impress Others !</h5>
                <p class="small">
                  Upload Up To 8 Image Related To this Achievement , EX : Certifications , Team Image , etc ...
                </p>
                <div class="row">
                  <div class="mar-top col-sm-12 col-lg-2 text-center">
                    <label for="image-input1">
                    <img id="image-1" src="<?php echo isset($imgs[0]->img) ? base_url().'uploads/achievements/pictures/'.$imgs[0]->img : base_url().'asset/imgs/demo-img.png' ?>"  class="img-thumbnail">
                    </label>
                    <input name = "imageInput1" type="file" accept="image/*" id="image-input1" style="display: none;">
                    <button type="button" id="image-del1" class="btn btn-link">Delete</button>
                    <input type="search" name="oldimg-1" id="oldimg-1" value="<?php echo isset($imgs[0]->img) ? $imgs[0]->img : '' ?>" style="display: none;">
                    <input type="text" name="delimg-1" id="delimg-1" value="0" style="display: none;" >
                  </div>
                  <div class="mar-top col-sm-12 col-lg-2 text-center">
                    <label for="image-input2">
                    <img id="image-2" src="<?php echo isset($imgs[1]->img) ? base_url().'uploads/achievements/pictures/'.$imgs[1]->img : base_url().'asset/imgs/demo-img.png' ?>"  class="img-thumbnail">
                    </label>
                    <input name = "imageInput2" type="file" accept="image/*" id="image-input2" style="display: none;">
                    <button type="button" id="image-del2" class="btn btn-link">Delete</button>
                    <input type="search" name="oldimg-2" id="oldimg-2" value="<?php echo isset($imgs[1]->img) ? $imgs[1]->img : '' ?>" style="display: none;">
                    <input type="text" name="delimg-2" id="delimg-2" value="0" style="display: none;" >
                  </div>
                  <div class="mar-top col-sm-12 col-lg-2 text-center">
                    <label for="image-input3">
                    <img id="image-3" src="<?php echo isset($imgs[2]->img) ? base_url().'uploads/achievements/pictures/'.$imgs[2]->img : base_url().'asset/imgs/demo-img.png' ?>"  class="img-thumbnail">
                    </label>
                    <input name = "imageInput3" type="file" accept="image/*" id="image-input3" style="display: none;">
                    <button type="button" id="image-del3" class="btn btn-link">Delete</button>
                    <input type="search" name="oldimg-3" id="oldimg-3" value="<?php echo isset($imgs[2]->img) ? $imgs[2]->img : '' ?>" style="display: none;">
                    <input type="text" name="delimg-3" id="delimg-3" value="0" style="display: none;" >
                  </div>
                  <div class="mar-top col-sm-12 col-lg-2 text-center">
                    <label for="image-input4">
                    <img id="image-4" src="<?php echo isset($imgs[3]->img) ? base_url().'uploads/achievements/pictures/'.$imgs[3]->img : base_url().'asset/imgs/demo-img.png' ?>"  class="img-thumbnail">
                    </label>
                    <input name = "imageInput4" type="file" accept="image/*" id="image-input4" style="display: none;">
                    <button type="button" id="image-del4" class="btn btn-link">Delete</button>
                    <input type="search" name="oldimg-4" id="oldimg-4" value="<?php echo isset($imgs[3]->img) ? $imgs[3]->img : '' ?>" style="display: none;">
                    <input type="text" name="delimg-4" id="delimg-4" value="0" style="display: none;" >
                  </div>
                  <div class="mar-top col-sm-12 col-lg-2 text-center">
                    <label for="image-input5">
                    <img id="image-5" src="<?php echo isset($imgs[4]->img) ? base_url().'uploads/achievements/pictures/'.$imgs[4]->img : base_url().'asset/imgs/demo-img.png' ?>"  class="img-thumbnail">
                    </label>
                    <input name = "imageInput5" type="file" accept="image/*" id="image-input5" style="display: none;">
                    <button type="button" id="image-del5" class="btn btn-link">Delete</button>
                    <input type="search" name="oldimg-5" id="oldimg-5" value="<?php echo isset($imgs[4]->img) ? $imgs[4]->img : '' ?>" style="display: none;">
                    <input type="text" name="delimg-5" id="delimg-5" value="0" style="display: none;" >
                  </div>
                  <div class="mar-top col-sm-12 col-lg-2 text-center">
                    <label for="image-input6">
                    <img id="image-6" src="<?php echo isset($imgs[5]->img) ? base_url().'uploads/achievements/pictures/'.$imgs[5]->img : base_url().'asset/imgs/demo-img.png' ?>"  class="img-thumbnail">
                    </label>
                    <input name = "imageInput6" type="file" accept="image/*" id="image-input6" style="display: none;">
                    <button type="button" id="image-del6" class="btn btn-link">Delete</button>
                    <input type="search" name="oldimg-6" id="oldimg-6" value="<?php echo isset($imgs[5]->img) ? $imgs[5]->img : '' ?>" style="display: none;">
                    <input type="text" name="delimg-6" id="delimg-6" value="0" style="display: none;" >
                  </div>
                </div>
                <!-- Achievement images end-->
                <!-- Achievement socialLinks start-->
                <div class="row">	
                  <!-- first column start -->
                  <div class="col-6">
                    <div class="mar-top">
                        <input id="ach_web" name="achWeb" type="text" class="form-control no-border" placeholder="Website :" value="<?php echo $ach->website?>">
                    </div>
                    <div class="mar-top">
                      <input id="ach_fb" name="achFb" type="text" class="form-control no-border" placeholder="Facebook :" value="<?php echo $ach->facebook?>">
                    </div>
                    <div class="mar-top">
                      <input id="ach_tw" name="achTw" type="text" class="form-control no-border" placeholder="Twitter :" value="<?php echo $ach->twitter?>">
                    </div>
		              </div>
                  <!-- first column end -->
                  <!-- second column start -->
                  <div class="col-6">
		                <div class="mar-top">
                    <input id="ach_lnk" name="achLnk" type="text" class="form-control no-border" placeholder="Linkedin :" value="<?php echo $ach->linkedin?>">
                  </div>
                  <div class="mar-top">
                    <input id="ach_ins" name="achIns" type="text" class="form-control no-border" placeholder="Instagram :" value="<?php echo $ach->instagram?>">
                  </div>
                  <div class="mar-top">
                    <input id="ach_you" name="achYou" type="text" class="form-control no-border" placeholder="Youtube :" value="<?php echo $ach->youtube?>">
                  </div>
                  </div>
                  <!-- second column end -->
                  <span class="ml-3" id="ach_tw-v"></span>
                </div>
                <!-- Achievement socialLinks end-->
              </div> 
              <!-- form column end-->
              <!-- card column start -->  
              <div class="col-lg-3  col-sm-3">
                <div class="card hero-card">
                  <img class="card-img-top img-hero" style="height: 200px;" src="<?php echo $ach->photo ? base_url().'uploads/users/'.$ach->photo : base_url().'asset/imgs/demo-img-user.png' ?>"  alt="Card image cap">
                  <div class="flagCitizenImgOverlay" style="height: 30px;">
                    <img src="http://localhost/achievement/asset/imgs/flag_citizen.svg" width="80">
                  </div>
                  <div class="card-body">
                    <a style="color: black;" href="http://localhost/achievement/profile/38111">
                      <h5 class="card-title"><?php echo $ach->username.' ' .$ach->lastname.'   '?><i class="fa fa-check-circle red-text" aria-hidden="true"></i></h5>
                    </a>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $ach->job?></h6>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-full" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <div class="media">
                      <span class="flag flag-can flag-1x mar-right"></span>
                      <div class="media-body">
                        <p id = 'city-country' class="text-muted small">City, Country</p>
                      </div>
                    </div>
                  </div>

                  <div class="card-body grey-lighten-3">
                    <div class="media" style="height: 51px;">
                      <img class="d-flex mr-3 n_logo" src="<?php echo $ach->ach_logo ? base_url().'uploads/achievements/logos/'.$ach->ach_logo : base_url().'asset/imgs/100placeholder.png'; ?>" width="50" height="50">
                      <div class="media-body">
                        <h6 id="nck_view" class="mt-0"><?php echo $ach->ach_title?></h6>
                        <p id='achDate_view' class="text-muted small"><?php echo Date('M j, Y',$ach->ach_date) ?></p>
                      </div>
                    </div>
                  </div>

                  <div class="card-body" style="height: 39px;">
                    <div class="row mar-top" style="margin-top: 4px;">
                      <div class="col">
                        <p style="font-size: 11px;" class="text-muted followers" heroid="26" followers="2">0 followers</p>
                      </div>
                      <div class="col text-right following">
                        <a href="JavaScript:void(0);" style="margin-top: -4px;font-size: 12px;" class="btn btn-sm btn-outline-success follow" heroid="26">Follow</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              <!-- card column end --> 
            </div>
            <!-- all stuff end -->
            <div class="divider"></div>
            <!-- Buttons start-->
            <ul class="list-inline mar-top text-right">
              <li class="list-inline-item">
                <a id="cancel" class="btn btn-primary red text-white no-border" href="<?php echo base_url()?>profile" role="button">Cancle</a>
                <button type="button" id="submit" class="btn btn-secondary">Update</button>
              </li>
            </ul>
            <!-- Buttons end-->
          </div>
          <!-- step end -->
        </div>
      </form>
    </section>
  </div>
</div>
<!-- footer -->
<?php $this->load->view('heroCitizen/common/footer'); ?>

<!-- don't move this script to main footer #PE$$ -->
<script type ="text/JavaScript">
  $(document).ready(function () {

    //get city data and select it /* don't move to main footer */
    $.ajax({
      url: '<?php echo base_url()?>get_city/' + $("#country-select").val(),
      success: function(data) {
        if (data) {
          $("#city-select").html("<option disabled selected>City Of Achievement</option>" + data);
          $("#city-select option[value='<?php echo $ach->ach_city?>']").attr('selected','');
          $("#city-country").text($("#country-select option:selected").text()+", " +$("#city-select option:selected").text());
        }else{
          console.log('getting city ajax error');
        }
      }
    });
    
    //user 8 images dynamic change #PE$$
    function readURL(input, img) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $(img).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    //image dynamic change /* don't move to main footer */
    $("#image-input1, #image-input2, #image-input3, #image-input4, #image-input5, #image-input6").change(function() {
      switch(true){
        case $(this).is("#image-input1"):
            readURL(this,"#image-1");
            $("#delimg-1").attr('value',0);
            break;
        case $(this).is("#image-input2"):
            readURL(this,"#image-2");
            $("#delimg-2").attr('value',0);
            break;
        case $(this).is("#image-input3"):
            readURL(this,"#image-3");
            $("#delimg-3").attr('value',0);
            break;
        case $(this).is("#image-input4"):
            readURL(this,"#image-4");
            $("#delimg-4").attr('value',0);
            break;
        case $(this).is("#image-input5"):
            readURL(this,"#image-5");
            $("#delimg-5").attr('value',0);
            break;
        case $(this).is("#image-input6"):
            readURL(this,"#image-6");
            $("#delimg-6").attr('value',0);
            break;
        default:
            console.log("none of those photos been clicked");
            break;   
      };
    });

    //user 8 images delete #PE$$ /* don't move to main footer */
    $("#image-del1, #image-del2, #image-del3, #image-del4, #image-del5, #image-del6").click(function(){
        switch(true){
        case $(this).is("#image-del1"):
          $("#image-input1").val("");
          $("#image-1").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png");
          $("#delimg-1").attr('value',1);
          break;
        case $(this).is("#image-del2"):
          $("#image-input2").val("");
          $("#image-2").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png");
          $("#delimg-2").attr('value',1);
          break;
        case $(this).is("#image-del3"):
          $("#image-input3").val("");
          $("#image-3").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png");
          $("#delimg-3").attr('value',1);
          break;
        case $(this).is("#image-del4"):
          $("#image-input4").val("");
          $("#image-4").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png");
          $("#delimg-4").attr('value',1);
          break;
        case $(this).is("#image-del5"):
          $("#image-input5").val("");
          $("#image-5").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png");
          $("#delimg-5").attr('value',1);
          break;
        case $(this).is("#image-del6"):
          $("#image-input6").val("");
          $("#image-6").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png");
          $("#delimg-6").attr('value',1);
          break;
        default:
          console.log("none of those photos been deleted");
          break;   
      };
    });

    //logo image delete #PE$$ /* don't move to main footer */
    $("#logo-del").click(function(){
      $("#getval").attr('value',0);
      $("#profile-upload").css("background-image", "url('<?php echo base_url().'ass/images/image_profile.jpg' ?>')");
      $(".n_logo").attr("src","<?php echo base_url()?>asset/imgs/100placeholder.png");
      $("#dellogo").attr('value',1);
    });

    //ajax submit /* don't move to main footer */
    $(".tab-content").on("click", "#submit", function(e){
        e.preventDefault();

        //showing loading modal till ajax request respond back #PE$$
        swal({
          title: "Checking Data...",
          text: "Please wait",
          imageUrl: "<?php echo base_url()?>asset/imgs/loading_icon.gif",
          showConfirmButton: false,
          allowOutsideClick: false
        });

        var link = "<?php echo base_url().'edit_process/'.$ach->hero_id.'/'.$ach->ach_id?>";
         $.ajax({
            type: 'POST',
            url: link,
            data: new FormData($('#theForm')[0]),
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                //alert(data);
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
                    console.log("validate");
                    if(res[0]==2){
                        title  = '<?php echo trans('fail'); ?>';
                        text   = res[1];
                        type   = 'error';
                        swal({
                            title: title,
                            text: text,
                            type: type,
                            timer: 6000,
                            html: true,
                            showConfirmButton:true
                        });
                        //console.log(res[2]);
                    }else{
                        console.log('data updated');
                        location.href='<?php echo base_url()?>profile';
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
                    console.log('errors');
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
  });
</script>
</body>
</html>