<!-- Header -->
<?php $this->load->view('heroCitizen/common/header'); ?>
<div class="wrapper grey-lighten-3">
<img src="<?php echo base_url()?>asset/imgs/headerCitizen.svg" class="img-fluid intro-img">
<div class="container" style="max-width: 1000px">
  <section>
    <!-- Steps Number -->
    <ul class="nav nav-tabs hiddden" role="tablist">
        <li role="presentation" class="nav-item">
            <a href="#step1" class="nav-link active" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                1 Of 4
            </a>
        </li>
        <li role="presentation" class="nav-item">
            <a href="#step2" class="nav-link disable" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                2 Of 4
            </a>
        </li>
        <li role="presentation" class="nav-item">
            <a href="#step3" class="nav-link disable" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                3 Of 4
            </a>
        </li>
        <li role="presentation" class="nav-item">
            <a href="#complete" class="nav-link disable" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                4 Of 4
            </a>
        </li>
    </ul>
    <!-- form start -->
    <form role="form" id="theForm" method="post" enctype="multipart/form-data">
      <!-- content start -->
      <div class="tab-content">
        <!-- Step 1 -->
        <div class="tab-pane active" role="tabpanel" id="step1">
          <!-- heading & numbering start -->
          <div class="row mar-top">
            <div class="col">
              <h5> + Adding Achivment </h5>
            </div>
            <div class="col">
              <h6 class="text-right">Step 1 Of 4</h6>
            </div>
          </div>
          <!-- heading & numbering end -->
          <div class="divider"></div>
          <!-- all stuff start -->
          <div class="row">
            <!-- form column start-->
            <div class="col-sm-9">
              <!-- Achievement type start-->
              <select id="ach_type" style="height: 50px;" name="achType" class="form-control no-border ">
                <option selected disabled>Achivment Type - Choose One -</option>
                <?php foreach ($ach_type as $type): ?>
                    <option value = "<?=$type->ach_typeid?>"><?php echo $type->type_name.' '.$type->example;?></option>
                <?php endforeach?>
              </select>
              <span id="ach_type-v"></span>
              <!-- Achievement type end-->
              <!-- Achievement name start-->
              <input name="Nocker" id ="nck" class="form-control  no-border mar-top" type="text" placeholder="Your Achivment Name">
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
                  <div class="user-images" id='profile-upload' style="border-radius: 5px;height: 100px;width: 100px;
                    border-bottom-left-radius: 0;
                    border-bottom-right-radius: 0;
                    margin-top: 11px;
                    background-image: url('<?php echo base_url().'ass/images/image_profile.jpg' ?>')">
                    <div class="hvr-profile-img"><input type="file" name="com-logo" id='getval' accept="image/*" class="upload w180" title="Dimensions 180 X 180" id="imag"></div>
                    <i class="fa fa-camera"></i>
                  </div>
                  <button id="logo-del" type="button" class="btn">Delete</button>
                </div> 
              </div>
              <!-- Achievement logo end-->
              <!-- Achievement date start-->
              <input name="achDate" id='ach_date' class="form-control no-border  mar-top" type="date" placeholder="Achievement Date Ex : Project Or Company Founded Date." >
              <span id="ach_date-v"></span>
              <!-- Achievement date end-->
              <!-- Achievement country start-->
              <select name="country" style="    height: 50px;"  id="country-select" class="form-control  no-border mar-top" placeholder="Country Of Achievement">
                <option disabled selected>Country Of Achievement</option>
                <?php foreach ($countries as $country):?>
                  <option value="<?php echo $country->country_id?>">
                      <?php echo $country->country_english_name?>
                  </option>
                <?php endforeach?>
              </select>
              <span id="country-select-v"></span>
              <!-- Achievement country end-->
              <!-- Achievement city start-->
              <select name="city" style="    height: 50px;"  class="form-control no-border  mar-top" id="city-select" placeholder="City Of Achievement">
                  <option disabled selected>City Of Achievement</option>
              </select>
              <span id="city-select-v"></span>
              <!-- Achievement city end-->
              <!-- Achievement explanation start-->
              <textarea id="ach_exp" name="achExp" class="form-control no-border mar-top" rows="4" placeholder="Briefly Explain Your Achievement & What You Did."></textarea>
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
                  <img id="image-1" src="<?php echo base_url()?>asset/imgs/demo-img.png"  class="img-thumbnail">
                  </label>
                  <input name = "imageInput1" type="file" accept="image/*" id="image-input1" style="display: none;">
                  <button type="button" id="image-del1" class="btn btn-link">Delete</button>
                </div>
                <div class="mar-top col-sm-12 col-lg-2 text-center">
                  <label for="image-input2">
                  <img id="image-2" src="<?php echo base_url()?>asset/imgs/demo-img.png"  class="img-thumbnail">
                  </label>
                  <input name = "imageInput2" type="file" accept="image/*" id="image-input2" style="display: none;">
                  <button type="button" id="image-del2" class="btn btn-link">Delete</button>
                </div>
                <div class="mar-top col-sm-12 col-lg-2 text-center">
                  <label for="image-input3">
                  <img id="image-3" src="<?php echo base_url()?>asset/imgs/demo-img.png"  class="img-thumbnail">
                  </label>
                  <input name = "imageInput3" type="file" accept="image/*" id="image-input3" style="display: none;">
                  <button type="button" id="image-del3" class="btn btn-link">Delete</button>
                </div>
                <div class="mar-top col-sm-12 col-lg-2 text-center">
                  <label for="image-input4">
                  <img id="image-4" src="<?php echo base_url()?>asset/imgs/demo-img.png"  class="img-thumbnail">
                  </label>
                  <input name = "imageInput4" type="file" accept="image/*" id="image-input4" style="display: none;">
                  <button type="button" id="image-del4" class="btn btn-link">Delete</button>
                </div>
                <div class="mar-top col-sm-12 col-lg-2 text-center">
                  <label for="image-input5">
                  <img id="image-5" src="<?php echo base_url()?>asset/imgs/demo-img.png"  class="img-thumbnail">
                  </label>
                  <input name = "imageInput5" type="file" accept="image/*" id="image-input5" style="display: none;">
                  <button type="button" id="image-del5" class="btn btn-link">Delete</button>
                </div>
                <div class="mar-top col-sm-12 col-lg-2 text-center">
                  <label for="image-input6">
                  <img id="image-6" src="<?php echo base_url()?>asset/imgs/demo-img.png"  class="img-thumbnail">
                  </label>
                  <input name = "imageInput6" type="file" accept="image/*" id="image-input6" style="display: none;">
                  <button type="button" id="image-del6" class="btn btn-link">Delete</button>
                </div>
              </div>
              <!-- Achievement images end-->
              <!-- Achievement socialLinks start-->
              <div class="row">
                <!-- first column start -->
                <div class="col-6">
                  <div class="mar-top">
                    <input id="ach_web" name="achWeb" type="text" class="form-control no-border" placeholder="Website :">
                  </div>
                  <div class="mar-top">
                    <input id="ach_fb" name="achFb" type="text" class="form-control no-border" placeholder="Facebook :">
                  </div>
                  <div class="mar-top">
                    <input id="ach_tw" name="achTw" type="text" class="form-control no-border" placeholder="Twitter :">
                  </div>
                </div>
                <!-- first column end -->
                <!-- second column start -->
                <div class="col-6">
                  <div class="mar-top">
                    <input id="ach_lnk" name="achLnk" type="text" class="form-control no-border" placeholder="Linkedin :">
                  </div>
                  <div class="mar-top">
                    <input id="ach_ins" name="achIns" type="text" class="form-control no-border" placeholder="Instagram :">
                  </div>
                  <div class="mar-top">
                    <input id="ach_you" name="achYou" type="text" class="form-control no-border" placeholder="Youtube :">
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
                <img class="card-img-top img-hero" style="height: 200px;" src="<?php $user_photo->photo ? print(base_url().'uploads/users/'.$user_photo->photo) : print(base_url().'asset/imgs/demo-img-user.png') ?>"  alt="Card image cap">
                <div class="flagCitizenImgOverlay" style="height: 30px;">
                  <img src="http://localhost/achievement/asset/imgs/flag_citizen.svg" width="80">
                </div>
                <div class="card-body">
                  <a style="color: black;" href="http://localhost/achievement/profile/38111">
                  <h5 class="card-title"><?php echo $userData['fName'].' ' .$userData['lName'].'   '?><i class="fa fa-check-circle red-text" aria-hidden="true"></i></h5></a>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData['prof']?></h6>
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
                    <img class="d-flex mr-3 n_logo" src="<?php echo base_url()?>asset/imgs/100placeholder.png" width="50" height="50">
                    <div class="media-body">
                      <h6 id="nck_view" class="mt-0">Nocker</h6>
                      <p id='achDate_view' class="text-muted small">Date</p>
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
                  <a id="cancel" class="btn btn-primary red text-white no-border" href="<?php echo base_url()?>home" role="button">Cancle</a>
                  <button type="button" id="next-step1" class="btn btn-secondary">Next</button>
              </li>
          </ul>
          <!-- Buttons end-->
        </div>
        <!-- Step 2 -->
        <div class="tab-pane" role="tabpanel" id="step2">
          <!-- heading & numbering start -->
          <div class="row mar-top">
            <div class="col">
              <h4> <i class="fa fa-plus-circle" aria-hidden="true"></i> Adding Achivment </h4>
            </div>
            <div class="col">
              <p class="text-right">Step 2 Of 4</p>
            </div>
          </div>
          <!-- heading & numbering end -->
          <div class="divider"></div>
          <!-- title start -->
          <div class="col">
            <h4> Looks Great ! </h4>
            <p>Review Your Profile Card  , This's How Will Look Like In Page  </p>
          </div>
          <!-- title end -->
          <!-- cards priview start -->
          <div class="row">
            <div class="col-lg-3  col-sm-3">
              <!-- card start (disabled) -->
              <div class="card hero-card disabled-card">
                <!-- card image -->
                <img class="card-img-top img-hero" style="height: 200px;" src="<?php echo $user_photo->photo ? base_url().'uploads/users/'.$user_photo->photo : base_url().'asset/imgs/demo-img-user.png'; ?>" alt="Card image cap">
                <!-- citizen flag -->
                <div class="flagCitizenImgOverlay" style="height: 30px;">
                  <img src="<?php echo base_url()?>asset/imgs/flag_citizen.svg" width="80">
                </div>
                <!-- card (name, rating, country + city)  -->
                <div class="card-body">
                  <a style="color: black;" href="#">
                  <h5 class="card-title"><?php echo $userData['fName'].' ' .$userData['lName'].'   '?><i class="fa fa-check-circle red-text" aria-hidden="true"></i></h5></a>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData['prof']?></h6>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-full" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>                                        
                  <div class="media">
                    <span class="flag flag-can flag-1x mar-right"></span>
                    <div class="media-body">
                      <p id ="city-country2" class="text-muted small">City, Country</p>
                    </div>
                  </div>
                </div>
                <!-- card (logo, achiv name, date) -->
                <div class="card-body grey-lighten-3">
                  <div class="media" style="height: 51px;">
                    <img class="d-flex mr-3 n_logo" src="<?php echo base_url()?>asset/imgs/100placeholder.png" width="50" height="50">
                    <div class="media-body">
                      <h6 id="nck_view2" class="mt-0">Nocker</h6>
                      <p id="achDate_view2" class="text-muted small">Date</p>
                    </div>
                  </div>
                </div>
                <!-- card actions (followers, follow) -->
                <div class="card-body" style="height: 39px;">
                  <div class="row mar-top" style="margin-top: 4px;">
                    <div class="col">
                      <p style="font-size: 11px;" class="text-muted followers">0 followers</p>
                    </div>
                    <div class="col text-right following">
                      <a href="JavaScript:void(0);" style="margin-top: -4px;font-size: 12px;" class="btn btn-sm btn-outline-success follow">Follow</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card end -->
            </div> 
              
            <div class="col-lg-3  col-sm-3">
              <!-- card start -->
              <div class="card hero-card ">
                <!-- card image -->
                <img class="card-img-top img-hero" style="height: 200px;" src="<?php echo $user_photo->photo ? base_url().'uploads/users/'.$user_photo->photo : base_url().'asset/imgs/demo-img-user.png'; ?>" alt="Card image cap">
                <!-- citizen flag -->
                <div class="flagCitizenImgOverlay" style="height: 30px;">
                  <img src="<?php echo base_url()?>asset/imgs/flag_citizen.svg" width="80">
                </div>
                <!-- card (name, rating, country + city)  -->
                <div class="card-body">
                  <a style="color: black;" href="#">
                  <h5 class="card-title"><?php echo $userData['fName'].' ' .$userData['lName'].'   '?><i class="fa fa-check-circle red-text" aria-hidden="true"></i></h5></a>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData['prof']?></h6>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-full" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>                                        
                  <div class="media">
                    <span class="flag flag-can flag-1x mar-right"></span>
                    <div class="media-body">
                      <p id ="city-country2" class="text-muted small">City, Country</p>
                    </div>
                  </div>
                </div>
                <!-- card (logo, achiv name, date) -->
                <div class="card-body grey-lighten-3">
                  <div class="media" style="height: 51px;">
                    <img class="d-flex mr-3 n_logo" src="<?php echo base_url()?>asset/imgs/100placeholder.png" width="50" height="50">
                    <div class="media-body">
                      <h6 id="nck_view2" class="mt-0">Nocker</h6>
                      <p id="achDate_view2" class="text-muted small">Date</p>
                    </div>
                  </div>
                </div>
                <!-- card actions (followers, follow) -->
                <div class="card-body" style="height: 39px;">
                  <div class="row mar-top" style="margin-top: 4px;">
                    <div class="col">
                      <p style="font-size: 11px;" class="text-muted followers">0 followers</p>
                    </div>
                    <div class="col text-right following">
                      <a href="JavaScript:void(0);" style="margin-top: -4px;font-size: 12px;" class="btn btn-sm btn-outline-success follow">Follow</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card end -->
            </div> 

            <div class="col-lg-3  col-sm-3">
              <!-- card start (disabled) -->
              <div class="card hero-card disabled-card">
                <!-- card image -->
                <img class="card-img-top img-hero" style="height: 200px;" src="<?php echo $user_photo->photo ? base_url().'uploads/users/'.$user_photo->photo : base_url().'asset/imgs/demo-img-user.png'; ?>" alt="Card image cap">
                <!-- citizen flag -->
                <div class="flagCitizenImgOverlay" style="height: 30px;">
                  <img src="<?php echo base_url()?>asset/imgs/flag_citizen.svg" width="80">
                </div>
                <!-- card (name, rating, country + city)  -->
                <div class="card-body">
                  <a style="color: black;" href="#">
                  <h5 class="card-title"><?php echo $userData['fName'].' ' .$userData['lName'].'   '?><i class="fa fa-check-circle red-text" aria-hidden="true"></i></h5></a>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData['prof']?></h6>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-full" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>                                        
                  <div class="media">
                    <span class="flag flag-can flag-1x mar-right"></span>
                    <div class="media-body">
                      <p id ="city-country2" class="text-muted small">City, Country</p>
                    </div>
                  </div>
                </div>
                <!-- card (logo, achiv name, date) -->
                <div class="card-body grey-lighten-3">
                  <div class="media" style="height: 51px;">
                    <img class="d-flex mr-3 n_logo" src="<?php echo base_url()?>asset/imgs/100placeholder.png" width="50" height="50">
                    <div class="media-body">
                      <h6 id="nck_view2" class="mt-0">Nocker</h6>
                      <p id="achDate_view2" class="text-muted small">Date</p>
                    </div>
                  </div>
                </div>
                <!-- card actions (followers, follow) -->
                <div class="card-body" style="height: 39px;">
                  <div class="row mar-top" style="margin-top: 4px;">
                    <div class="col">
                      <p style="font-size: 11px;" class="text-muted followers">0 followers</p>
                    </div>
                    <div class="col text-right following">
                      <a href="JavaScript:void(0);" style="margin-top: -4px;font-size: 12px;" class="btn btn-sm btn-outline-success follow">Follow</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card end -->
            </div>

            <div class="col-lg-3  col-sm-3">
              <!-- card start (disabled) -->
              <div class="card hero-card disabled-card">
                <!-- card image -->
                <img class="card-img-top img-hero" style="height: 200px;" src="<?php echo $user_photo->photo ? base_url().'uploads/users/'.$user_photo->photo : base_url().'asset/imgs/demo-img-user.png'; ?>" alt="Card image cap">
                <!-- citizen flag -->
                <div class="flagCitizenImgOverlay" style="height: 30px;">
                  <img src="<?php echo base_url()?>asset/imgs/flag_citizen.svg" width="80">
                </div>
                <!-- card (name, rating, country + city)  -->
                <div class="card-body">
                  <a style="color: black;" href="#">
                  <h5 class="card-title"><?php echo $userData['fName'].' ' .$userData['lName'].'   '?><i class="fa fa-check-circle red-text" aria-hidden="true"></i></h5></a>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData['prof']?></h6>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-full" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>                                        
                  <div class="media">
                    <span class="flag flag-can flag-1x mar-right"></span>
                    <div class="media-body">
                      <p id ="city-country2" class="text-muted small">City, Country</p>
                    </div>
                  </div>
                </div>
                <!-- card (logo, achiv name, date) -->
                <div class="card-body grey-lighten-3">
                  <div class="media" style="height: 51px;">
                    <img class="d-flex mr-3 n_logo" src="<?php echo base_url()?>asset/imgs/100placeholder.png" width="50" height="50">
                    <div class="media-body">
                      <h6 id="nck_view2" class="mt-0">Nocker</h6>
                      <p id="achDate_view2" class="text-muted small">Date</p>
                    </div>
                  </div>
                </div>
                <!-- card actions (followers, follow) -->
                <div class="card-body" style="height: 39px;">
                  <div class="row mar-top" style="margin-top: 4px;">
                    <div class="col">
                      <p style="font-size: 11px;" class="text-muted followers">0 followers</p>
                    </div>
                    <div class="col text-right following">
                      <a href="JavaScript:void(0);" style="margin-top: -4px;font-size: 12px;" class="btn btn-sm btn-outline-success follow">Follow</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card end -->
            </div> 
          </div>
          <!-- cards priview end -->
          <div class="divider"></div>
          <!-- Buttons start -->
          <ul class="list-inline mar-top text-right">
            <li class="list-inline-item">
              <button type="button" class="btn btn-default" id="prev-step">Back</button>
              <button type="submit" id="next-step2" class="btn btn-secondary">Next</button>
            </li>
          </ul>
          <!-- Buttons end -->
        </div>
        <!-- Step 3 -->
        <div class="tab-pane" role="tabpanel" id="step3">
          <!-- heading & numbering start -->
          <div class="row mar-top">
            <div class="col">
              <h4 class="text-muted"> Subscription Plan </h4>
            </div>
            <div class="col">
              <p class="text-right">Step 3 Of 4</p>
            </div>
          </div>
          <!-- heading & numbering end -->
          <div class="divider"></div>
          <!-- heading & numbering start -->
          <!-- title start -->
          <div class="col">
            <h4> Unlock the Power of Dubarah , <span class="font-weight-bold">Join Dubarah Plus. </span> </h4>
            <!-- will be uncommented later #PE$$-->
            <!-- <h5 class="font-weight-bold">Do You Have Promo Code ? </h5>
            <p>Dubarah Offering 6 Months Free Plan For Social Entrepreneurs Who Have Decent Impact In Their Communities Check Your Eligibility Here . </p> -->
          </div>
          <!-- title end -->
          <!-- will be uncommented later #PE$$-->
          <!--<div class="col-sm-12 col-lg-6">
            <form>
              <div class="form-row align-items-center">
                <div class="col">
                  <input type="text" class="form-control mb-2 mb-sm-0" placeholder="Promo Code">
                </div>
                <div class="col-auto">
                  <button type="submit" class="btn btn-warning">Check</button>
                </div>
              </div>
            </form>
          </div>
          <div class="row mar-top">
            <div class="col-sm-12 col-lg-6">
              <div class="alert alert-secondary" role="alert">
                <h4 class="alert-heading text-success">Dubarah Promo / 6 Months Plan</h4>
                <p class="grey-darken-3-text">You Are Good To Go Until 15/3/2018</p>
                <button type="button" class="btn btn-secondary btn-lg btn-block bg-white grey-darken-3-text">Subscribe</button>
              </div>
            </div>
          </div> -->
          <!-- hero citizen info start -->
          <div class="row">
            <div class="col-lg-8">
              <!-- features start -->
              <div class="card">
                  <h2 class="card-header">Du<span class="red-text">Plus</span>™ <span class="text-muted">Dubarah Plus Features</span></h2>
                  <div class="card-body">
                    <div class="media mar-top">
                        <img class="d-flex mr-3 small-media-img" src="<?php echo base_url()?>asset/imgs/duplus-img1.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h4 class="mt-0">Daily Auto Boost</h4>
                            <p class="text-muted">
                                Increase your popularity. Be seen by more people with an automat-ic boost everyday during peak hour.s
                            </p>
                        </div>
                    </div>

                    <div class="media mar-top">
                      <img class="d-flex mr-3 small-media-img" src="<?php echo base_url()?>asset/imgs/duplus-img2.png" alt="Generic placeholder image">
                      <div class="media-body">
                        <h4 class="mt-0">Add Unlimited Achivments</h4>
                        <p class="text-muted">
                          Reqular users are limited to 1 achievment, Dubarah Plus members can add up to 12  achievments
                        </p>
                      </div>
                    </div>

                    <div class="media mar-top">
                      <img class="d-flex mr-3 small-media-img" src="<?php echo base_url()?>asset/imgs/duplus-img3.png" alt="Generic placeholder image">
                      <div class="media-body">
                        <h4 class="mt-0">Being “Hero Citizen”</h4>
                        <p class="text-muted">
                          Reqular users are limited to 3000 folowers, Dubarah Plus members can get unlimited followers (after you reached 5000 followers, your profile will be reviewed for “Hero Citizen” badge eligibality.
                          <a class="red-text" href="#">Click for Preview</a>
                        </p>
                      </div>
                    </div>

                    <div class="media mar-top">
                      <img class="d-flex mr-3 small-media-img" src="<?php echo base_url()?>asset/imgs/duplus-img4.png" alt="Generic placeholder image">
                      <div class="media-body">
                        <h4 class="mt-0">Verifying your account</h4>
                        <p class="text-muted">
                          The red verified badge <i class="fa fa-check-circle red-text fa-lg" aria-hidden="true"></i> on Dubarah lets people know that an account of public interest is authen-tic. You should have over than 5000 folowers and at least 2 high impact achievments. Only Dubarh plus members are eligible for this Feature (More personal information required)
                          <a class="red-text" href="#">Click for Preview</a>
                        </p>
                      </div>
                    </div>

                    <div class="media mar-top">
                      <img class="d-flex mr-3 small-media-img" src="<?php echo base_url()?>asset/imgs/duplus-img5.png" alt="Generic placeholder image">
                      <div class="media-body">
                        <h4 class="mt-0">Link your profile with your business page</h4>
                        <p class="text-muted">
                          After listing your business in Dubarah Business page, Dubarah Plus members are welcome to link this business with their profile.
                        </p>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- features end -->
              <!-- payment plans start -->
              <div class="row mar-top">
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 20rem;">
                    <div class="card-body text-center">
                      <h3 class="card-title">6 Months Plan</h3>
                      <p class="card-text">US $7,95 / Month</p>
                      <p class="small text-muted">One-time Payment No Aoutomatic Renewal</p>
                    </div>
                    <button type="button" class="btn btn-success btn-lg btn-block no-border-radius">Subscribe</button>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 20rem;">
                    <div class="card-body text-center">
                      <h3 class="card-title">3 Months Plan</h3>
                      <p class="card-text">US $11,95 / Month</p>
                      <p class="small text-muted">One-time Payment No Aoutomatic Renewal</p>
                    </div>
                    <button type="button" class="btn btn-success btn-lg btn-block no-border-radius">Subscribe</button>
                  </div>
                </div>
                <div class="col">
                  <div class="card bg-light mb-3" style="max-width: 20rem;">
                    <div class="card-body text-center">
                      <h3 class="card-title">6 Months Plan</h3>
                      <p class="card-text">US $7,95 / Month</p>
                      <p class="small text-muted">Now Payment Required , You Still Great</p>
                    </div>
                    <button type="button" class="btn btn-secondary btn-lg btn-block no-border-radius" id="next-step3">Continue For FREE</button>
                  </div>
                </div>
              </div>
              <!-- payment plans end -->
            </div>
            <!-- card priview start -->
            <div class="col-lg-3  col-sm-3">
              <!-- card start -->
              <div class="card hero-card ">
                <!-- card image -->
                <img class="card-img-top img-hero" style="height: 200px;" src="<?php echo $user_photo->photo ? base_url().'uploads/users/'.$user_photo->photo : base_url().'asset/imgs/demo-img-user.png'; ?>" alt="Card image cap">
                <!-- citizen flag -->
                <div class="flagCitizenImgOverlay" style="height: 30px;">
                  <img src="<?php echo base_url()?>asset/imgs/flag_citizen.svg" width="80">
                </div>
                <!-- card (name, rating, country + city)  -->
                <div class="card-body">
                  <a style="color: black;" href="#">
                  <h5 class="card-title"><?php echo $userData['fName'].' ' .$userData['lName'].'   '?><i class="fa fa-check-circle red-text" aria-hidden="true"></i></h5></a>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData['prof']?></h6>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star-half-full" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <i class="fa fa-star-o" aria-hidden="true"></i>                                        
                  <div class="media">
                    <span class="flag flag-can flag-1x mar-right"></span>
                    <div class="media-body">
                      <p id ="city-country2" class="text-muted small">City, Country</p>
                    </div>
                  </div>
                </div>
                <!-- card (logo, achiv name, date) -->
                <div class="card-body grey-lighten-3">
                  <div class="media" style="height: 51px;">
                    <img class="d-flex mr-3 n_logo" src="<?php echo base_url()?>asset/imgs/100placeholder.png" width="50" height="50">
                    <div class="media-body">
                      <h6 id="nck_view2" class="mt-0">Nocker</h6>
                      <p id="achDate_view2" class="text-muted small">Date</p>
                    </div>
                  </div>
                </div>
                <!-- card actions (followers, follow) -->
                <div class="card-body" style="height: 39px;">
                  <div class="row mar-top" style="margin-top: 4px;">
                    <div class="col">
                      <p style="font-size: 11px;" class="text-muted followers">0 followers</p>
                    </div>
                    <div class="col text-right following">
                      <a href="JavaScript:void(0);" style="margin-top: -4px;font-size: 12px;" class="btn btn-sm btn-outline-success follow">Follow</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card end -->
            </div>
            <!-- card priview end -->
          </div>
          <!-- hero citizen info end -->
          <!-- third step canceled and submit with "continue free" #PE$$ -->
          <!-- <div class="divider"></div>
          <ul class="list-inline mar-top text-right">
              <li class="list-inline-item">
                  <button type="button" class="btn btn-default prev-step">Back</button>
                  <button type="button" class="btn btn-secondary next-step">Next</button>
              </li>
          </ul> -->
        </div>
        <!-- Step 4 -->
        <div class="tab-pane" role="tabpanel" id="complete">
          <!-- heading & numbering start -->
          <div class="row mar-top">
            <div class="col">
              <h4 class="text-muted"> Done ! </h4>
            </div>
            <div class="col">
              <p class="text-right">Step 4 Of 4</p>
            </div>
          </div>
          <!-- heading & numbering end -->
          <div class="divider"></div>
          <!-- title start -->
          <div class="col">
              <h3 class="text-success"><i class="fa fa-check-circle fa-3x" aria-hidden="true"></i> You Are Online Now !</h3>
          </div>
          <!-- title end -->
          <!-- instruction start -->
          <div class="col">
            <div class="jumbotron bg-white">
              <h1>What Next ?</h1>
              <div class="row">
                <!-- share profile start -->
                <div class="col-sm-8 row">
                  <div class="circle-div">
                      1
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0">Start geting more followers</h5>
                    <p>
                      Share your profile in your facebook page, twitter etc..
                    </p>
                    <div class="row mar-left">
                      <div class="mar-right">
                        <p>Share : </p>
                      </div>
                      <div class="mar-left text-white">

                        <a class="btn btn-block btn-social btn-facebook" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url().'profile/'.user_id();?>', 'Facebook Share', 'width=620, height=420'); return false;">
                          <span class="fa fa-facebook"></span> Share On Facebook
                        </a>

                        <a class="btn btn-block btn-social btn-twitter" href="#" onclick="window.open('https://twitter.com/share?url=<?php echo base_url().'profile/'.user_id();?>&via=Dubarah&text=Follow me on Dubarah hero Citizen', 'Twitter Share', 'width=620, height=420'); return false;">
                          <span class="fa fa-twitter"></span> Share On Twitter
                        </a>

                        <a class="btn btn-block btn-social btn-linkedin" href="#" onclick="window.open('https://www.linkedin.com/cws/share?url=<?php echo base_url().'profile/'.user_id();?>&original_referer=<?php echo base_url()?>&token=&isFramed=false&lang=en_US&_ts=1518864154821.235&xd_origin_host=<?php echo base_url()?>', 'Linkedin Share', 'width=620, height=420'); return false;">
                          <span class="fa fa-linkedin"></span> Share On Linkedin
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- share profile end -->
                <!-- ahmad edilbi & user start -->
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <img style="width: 100%" src="<?php echo base_url()?>asset/imgs/leadership/AhmadEdilbi.jpg" alt="Ahmad Edilbi">
                        </div>
                        <div class="col">
                          <img style="width: 100%;height: 112.03px;object-fit: cover;" src="<?php echo base_url().'uploads/users/'.$user_photo->photo?>" alt="User photo">
                        </div>
                      </div>
                      <h5 class="mar-top">Ahmad Edilbi - Follow my Achievments</h5>
                      <p class="small">Founder and CEO at Dubarah - Toronto Canada</p>
                    </div>
                    <div class="card-footer">
                      <p class="small text-uppercase">dubarah.com</p>
                    </div>
                  </div>
                </div>
                <!-- ahmad edilbi & user end -->
                <div class="col-sm-12 mar-top mar-bot">
                  <div class="divider"></div>
                </div>
                <!-- edit profile start -->
                <div class="col-sm-12 row">
                  <div class="circle-div">
                      2
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0">Improve your profile</h5>
                    <p>
                      Your bio, image profile and title should be perfect and up to date.you can <a class="btn-link" target="_blank" href="<?php echo base_url()?>my_profile"> edit your profile here </a>
                    </p>
                  </div>
                </div>
                <!-- edit profile end -->
                <div class="col-sm-12 mar-top mar-bot">
                  <div class="divider"></div>
                </div>
                <!-- join dubarah plus start -->
                <div class="col-sm-12 row">
                  <div class="circle-div">
                      3
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0">Your achievments is what matter here</h5>
                    <p>
                      Pepole like to read sucess stories, So Improve your current achivments,add more images, write it in english, you can add more achievmetsby joining <a class="btn-link" href="#">Dubarah Plus</a> .
                    </p>
                  </div>
                </div>
                <!-- join dubarah plus end -->
                <div class="col-sm-12 mar-top mar-bot">
                  <div class="divider"></div>
                </div>
                <!-- profile link start -->
                <div class="col-sm-12 row">
                  <div class="circle-div">
                      4
                  </div>
                  <div class="media-body">
                    <h5 class="mt-0">Your profile link is below:</h5>
                    <input class="form-control  " type="text" value="<?php echo base_url().'profile/'.user_id()?>" readonly>
                    <button type="button" class="btn btn-secondary btn-lg mar-top" onclick="location.href = '<?php echo base_url().'profile/'.user_id()?>';">Go To My Public Profile</button>
                  </div>
                </div>
                <!-- profile link end -->
              </div>
            </div>
          </div>
          <!-- instruction end -->
          <!-- buttons start -->
          <ul class="list-inline mar-top text-right">
            <li class="list-inline-item">
              <button type="button" class="btn btn-secondary" onclick="location.href='<?php echo base_url()?>profile';">Close</button>
            </li>
          </ul>
          <!-- buttons end -->
        </div>
      </div>
      <!-- content end -->
    </form>
    <!-- form end -->
  </section>
</div>
<!-- footer -->
<?php $this->load->view('heroCitizen/common/footer'); ?>

<!-- don't move this script to main footer  -->
<script type="text/javascript">
  $(document).ready(function(){
    //user 8 images dynamic change #PE$$ /* don't move to main footer */
    function readURL(input, img) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $(img).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }
    //dynamicly image change /* don't move to main footer */
    $("#image-input1, #image-input2, #image-input3, #image-input4, #image-input5, #image-input6").change(function() {
      switch(true){
        case $(this).is("#image-input1"):
            readURL(this,"#image-1");
            break;
        case $(this).is("#image-input2"):
            readURL(this,"#image-2");
            break;
        case $(this).is("#image-input3"):
            readURL(this,"#image-3");
            break;
        case $(this).is("#image-input4"):
            readURL(this,"#image-4");
            break;
        case $(this).is("#image-input5"):
            readURL(this,"#image-5");
            break;
        case $(this).is("#image-input6"):
            readURL(this,"#image-6");
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
            $("#image-1").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png")
            break;
        case $(this).is("#image-del2"):
            $("#image-input2").val("");
            $("#image-2").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png")
            break;
        case $(this).is("#image-del3"):
            $("#image-input3").val("");
            $("#image-3").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png")
            break;
        case $(this).is("#image-del4"):
            $("#image-input4").val("");
            $("#image-4").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png")
            break;
        case $(this).is("#image-del5"):
            $("#image-input5").val("");
            $("#image-5").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png")
            break;
        case $(this).is("#image-del6"):
            $("#image-input6").val("");
            $("#image-6").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png")
            break;
        default:
            console.log("none of those photos been deleted");
            break;   
      };
    });
    
    //logo image delete #PE$$ /* don't move to main footer */
    $("#logo-del").click(function(){
      $("#profile-upload").css("background-image", "url('<?php echo base_url().'ass/images/image_profile.jpg' ?>')");
      $(".n_logo").attr("src","<?php echo base_url()?>asset/imgs/100placeholder.png");
    });
  });
</script>