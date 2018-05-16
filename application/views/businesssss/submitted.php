
    <img src="<?php echo base_url()?>asset/imgs/ach-intro.png" class="img-fluid intro-img">
    <div class="container">
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

            <form role="form" id="theForm" method="post" enctype="multipart/form-data">
                <div class="tab-content">
                    <!-- Step 1 -->
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="row mar-top">
                            <div class="col">
                                <h4> <i class="fa fa-plus-circle" aria-hidden="true"></i> Adding Achivment </h4>
                            </div>
                            <div class="col">
                                <p class="text-right">Step 1 Of 4</p>
                            </div>
                        </div>
                        <div class="divider"></div>

                        <div class="row">
                            <div class="col-sm-9">
                                <select id="ach_type" name="achType" class="form-control form-control-lg">
                                    <option selected disabled>Achivment Type - Choose One -</option>
                                    <?php foreach ($ach_type as $type): ?>
                                        <option value = "<?=$type->ach_typeid?>"><?=$type->type_name ?></option>
                                    <?php endforeach?>
                                </select>
                                <span id="ach_type-v"></span>
                                <input name="Nocker" id ="nck" class="form-control form-control-lg mar-top" type="text" placeholder="Nocker">
                                <span id="nck-v"></span>
                                <h5 class="mar-top">Logo</h5>
                                <p class="small">
                                    Please Upload The Logo Related To Your  Achievement Below .
                                    Ex : Business Logo , Certification issuer Logo , etc ...
                                </p>
                                <div class="row">
                                    <!-- <div class="col-sm-2">
                                        <div class="btn-group-vertical">
                                            <button type="button" class="btn btn-secondary">Upload</button>
                                            <button type="button" class="btn btn-danger red">Delete</button>
                                        </div>
                                    </div> -->
                                    <div class="col">
                                        
                                        <!-- replaced with the another image upload way #PE$$ -->
                                        <!-- <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/demo-img-user.png" style="width : 100px ; height: 100px ; "> -->
                                        <div class="user-images" id='profile-upload' style="border-radius: 5px;height: 100px;width: 100px;
                                            border-bottom-left-radius: 0;
                                            border-bottom-right-radius: 0;
                                            margin-top: 11px;
                                        background-image: url('<?php echo base_url().'ass/images/image_profile.jpg' ?>')">
                                            <div class="hvr-profile-img"><input type="file" name="com-logo" id='getval' accept="image/*" class="upload w180" title="Dimensions 180 X 180" id="imag"></div>
                                            <i class="fa fa-camera"></i>
                                        </div>
                                        <button id="logo-del" type="button" class="btn btn-danger red">Delete</button>
                                        
                                    </div>
                                </div>
                                <input name="achDate" id='ach_date' class="form-control form-control-lg mar-top" type="date" placeholder="Achievement Date Ex : Project Or Company Founded Date." >
                                <span id="ach_date-v"></span>
                                <!-- <input class="form-control form-control-lg mar-top" type="text" placeholder="Country Of Achievement"> -->
                                <select name="country" id="country-select" class="form-control form-control-lg mar-top" placeholder="Country Of Achievement">
                                    <option disabled selected>Country Of Achievement</option>
                                    <?php foreach ($countries->result() as $country):?>
                                        <option value="<?php echo $country->country_id?>">
                                            <?php echo $country->country_english_name?>
                                        </option>
                                    <?php endforeach?>
                                </select>
                                <span id="country-select-v"></span>
                                <select name="city" class="form-control form-control-lg mar-top" id="city-select" placeholder="City Of Achievement">
                                    <option disabled selected>City Of Achievement</option>
                                </select>
                                <span id="city-select-v"></span>
                                <!-- <input class="form-control form-control-lg mar-top" type="text" placeholder="City Of Achievement"> -->
                                <textarea id="ach_exp" name="achExp" class="form-control mar-top" rows="3" placeholder="Briefly Explain Your Achievement & What You Did."></textarea>
                                <span id="ach_exp-v"></span>
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
                                
                                <div class="col-6 mar-top">
                                    <input id="ach_web" name="achWeb" type="text" class="form-control" placeholder="Website :">
                                </div>

                                <div class="col-6 mar-top">
                                    <input id="ach_fb" name="achFb" type="text" class="form-control" placeholder="Facebook :">
                                </div>

                                <div class="col-6 mar-top">
                                    <input id="ach_tw" name="achTw" type="text" class="form-control" placeholder="Twitter :">
                                    <span id="ach_tw-v"></span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-3">
                                <div class="card" style="width: 16rem;">
                                    <img class="card-img-top" src="<?php $user_photo ? print(base_url().'uploads/users/'.$user_photo) : print(base_url().'asset/imgs/demo-img-user.png') ?>" alt="Card image cap" />
                                
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $userData['first'].' ' .$userData['last'].' '?><i class="fa fa-check-circle red-text" aria-hidden="true"></i></h4>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData['prof']?></h6>
                                        <i class="fa fa-star grey-text" aria-hidden="true"></i>
                                        <i class="fa fa-star grey-text" aria-hidden="true"></i>
                                        <i class="fa fa-star grey-text" aria-hidden="true"></i>
                                        <i class="fa fa-star grey-text" aria-hidden="true"></i>
                                        <i class="fa fa-star grey-text" aria-hidden="true"></i>
                                        <div class="media">
                                            <span class="flag flag-can flag-1x mar-right"></span>
                                            <div class="media-body">
                                                <p id = 'city-country' class="text-muted small">City, Country</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body grey-lighten-3">
                                        <div class="media">
                                            <img id="n_logo" class="d-flex mr-3" src="http://via.placeholder.com/100x100" width="50" height="50">
                                            <div class="media-body">
                                                <h5 id="nck_view" class="mt-0">Nocker</h5>
                                                <p id='achDate_view' class="text-muted small">Date</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mar-top">
                                            <div class="col">
                                                <p class="text-muted">0 followers</p>
                                            </div>
                                            <div class="col text-right">
                                                <a href="#" class="btn btn-sm btn-outline-secondary">follow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <ul class="list-inline mar-top text-right">
                            <li class="list-inline-item">
                                <a id="cancel" class="btn btn-primary red text-white no-border" href="<?php echo base_url()?>home" role="button">Cancle</a>
                                <button type="button" id="next-step1" class="btn btn-secondary">Next</button>
                            </li>
                        </ul>
                    </div>
                    <!-- Step 2 -->
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="row mar-top">
                            <div class="col">
                                <h4> <i class="fa fa-plus-circle" aria-hidden="true"></i> Adding Achivment </h4>
                            </div>
                            <div class="col">
                                <p class="text-right">Step 2 Of 4</p>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="col">
                            <h4> Looks Great ! </h4>
                            <p>Review Your Profile Card  , This's How Will Look Like In Page  </p>
                        </div>

                        <div class="row">

                            <div class="col-sm-12 col-lg-3">
                                <div class="card disabled-card">
                                    <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/leadership/majd.png" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Ahmad Edilbi <i class="fa fa-check-circle red-text" aria-hidden="true"></i></h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Dubarah Founder </h6>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <div class="media">
                                            <span class="flag flag-can flag-1x mar-right"></span>
                                            <div class="media-body">
                                                <p class="text-muted small">Toronto, Canada</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body grey-lighten-3">
                                        <div class="media">
                                            <img class="d-flex mr-3" src="<?php echo base_url()?>asset/imgs/dubarah-footer-img.jpg" width="50" height="50">
                                            <div class="media-body">
                                                <h5 class="mt-0">Dubarah</h5>
                                                <p class="text-muted small">Feb 11, 2013</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mar-top">
                                            <div class="col">
                                                <p class="text-muted">5,256,331 followers</p>
                                            </div>
                                            <div class="col text-right">
                                                <a href="#" class="btn btn-sm btn-outline-danger">Unfollow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-3">
                                <div class="card">
                                    <i class="fa fa-check-circle fa-5x on-img text-success" aria-hidden="true"></i>
                                    <img class="card-img-top" src="<?php $user_photo ? print(base_url().'uploads/users/'.$user_photo) : print(base_url().'asset/imgs/demo-img-user.png') ?>" alt="Card image cap"/>
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $userData['first'].' ' .$userData['last'].' '?><i class="fa fa-check-circle red-text" aria-hidden="true"></i></h4>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData['prof']?></h6>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <div class="media">
                                            <span class="flag flag-can flag-1x mar-right"></span>
                                            <div class="media-body">
                                                <p id = 'city-country2' class="text-muted small">City, Country</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body grey-lighten-3">
                                        <div class="media">
                                            <img id="n_logo2" class="d-flex mr-3" src="http://via.placeholder.com/100x100" width="50" height="50">
                                            <div class="media-body">
                                                <h5 id="nck_view2" class="mt-0"></h5>
                                                <p id="achDate_view2" class="text-muted small">Feb 11, 2013</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mar-top">
                                            <div class="col">
                                                <p class="text-muted">0 followers</p>
                                            </div>
                                            <div class="col text-right">
                                                <a href="#" class="btn btn-sm btn-outline-success">follow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-3">
                                <div class="card disabled-card">
                                    <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/leadership/majd.png" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Ahmad Edilbi <i class="fa fa-check-circle red-text" aria-hidden="true"></i></h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Dubarah Founder </h6>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <div class="media">
                                            <span class="flag flag-can flag-1x mar-right"></span>
                                            <div class="media-body">
                                                <p class="text-muted small">Toronto, Canada</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body grey-lighten-3">
                                        <div class="media">
                                            <img class="d-flex mr-3" src="<?php echo base_url()?>asset/imgs/dubarah-footer-img.jpg" width="50" height="50">
                                            <div class="media-body">
                                                <h5 class="mt-0">Dubarah</h5>
                                                <p class="text-muted small">Feb 11, 2013</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mar-top">
                                            <div class="col">
                                                <p class="text-muted">5,256,331 followers</p>
                                            </div>
                                            <div class="col text-right">
                                                <a href="#" class="btn btn-sm btn-outline-danger">Unfollow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 col-lg-3">
                                <div class="card disabled-card">
                                    <img class="card-img-top" src="<?php echo base_url()?>asset/imgs/leadership/majd.png" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Ahmad Edilbi <i class="fa fa-check-circle red-text" aria-hidden="true"></i></h4>
                                        <h6 class="card-subtitle mb-2 text-muted">Dubarah Founder </h6>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <div class="media">
                                            <span class="flag flag-can flag-1x mar-right"></span>
                                            <div class="media-body">
                                                <p class="text-muted small">Toronto, Canada</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body grey-lighten-3">
                                        <div class="media">
                                            <img class="d-flex mr-3" src="<?php echo base_url()?>asset/imgs/dubarah-footer-img.jpg" width="50" height="50">
                                            <div class="media-body">
                                                <h5 class="mt-0">Dubarah</h5>
                                                <p class="text-muted small">Feb 11, 2013</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mar-top">
                                            <div class="col">
                                                <p class="text-muted">5,256,331 followers</p>
                                            </div>
                                            <div class="col text-right">
                                                <a href="#" class="btn btn-sm btn-outline-danger">Unfollow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="divider"></div>
                        <ul class="list-inline mar-top text-right">
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-default" id="prev-step">Back</button>
                                <button type="submit" id="next-step2" class="btn btn-secondary">Next</button>
                            </li>
                        </ul>
                    </div>
                    <!-- Step 3 -->
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <div class="row mar-top">
                            <div class="col">
                                <h4 class="text-muted"> Subscription Plan </h4>
                            </div>
                            <div class="col">
                                <p class="text-right">Step 3 Of 4</p>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="col">
                            <h4> Unlock the Power of Dubarah , <span class="font-weight-bold">Join Dubarah Plus. </span> </h4>
                            <!-- will be uncommented later -->
                            <!-- <h5 class="font-weight-bold">Do You Have Promo Code ? </h5>
                            <p>Dubarah Offering 6 Months Free Plan For Social Entrepreneurs Who Have Decent Impact In Their Communities Check Your Eligibility Here . </p> -->
                        </div>
                        <!-- will be uncommented later -->
                        <!-- <div class="col-sm-12 col-lg-6">
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
                        <div class="row">

                            <div class="col-lg-9">
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
                            </div>


                            <div class="col-sm-12 col-lg-3">
                                <div class="card">
                                    <i class="fa fa-check-circle fa-5x on-img text-success" aria-hidden="true"></i>
                                    <img class="card-img-top" src="<?php $user_photo ? print(base_url().'uploads/users/'.$user_photo) : print(base_url().'asset/imgs/demo-img-user.png') ?>" alt="Card image cap"/>
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $userData['first'].' ' .$userData['last'].' '?><i class="fa fa-check-circle red-text" aria-hidden="true"></i></h4>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData['prof']?></h6>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <div class="media">
                                            <span class="flag flag-can flag-1x mar-right"></span>
                                            <div class="media-body">
                                                <p id = 'city-country3' class="text-muted small">City, Country</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body grey-lighten-3">
                                        <div class="media">
                                            <img id="n_logo3" class="d-flex mr-3" src="http://via.placeholder.com/100x100" width="50" height="50">
                                            <div class="media-body">
                                                <h5 id="nck_view3" class="mt-0"></h5>
                                                <p id="achDate_view3" class="text-muted small">Feb 11, 2013</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mar-top">
                                            <div class="col">
                                                <p class="text-muted">0 followers</p>
                                            </div>
                                            <div class="col text-right">
                                                <a href="#" class="btn btn-sm btn-outline-success">follow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


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
                        <div class="row mar-top">
                            <div class="col">
                                <h4 class="text-muted"> Done ! </h4>
                            </div>
                            <div class="col">
                                <p class="text-right">Step 4 Of 4</p>
                            </div>
                        </div>

                        <div class="divider"></div>
                        <div class="col">
                            <h3 class="text-success"><i class="fa fa-check-circle fa-3x" aria-hidden="true"></i> You Are Online Now !</h3>
                        </div>

                        <div class="col">
                            <div class="jumbotron bg-white">
                                <h1>What Next ?</h1>
                                <div class="row">
                                    <div class="col-sm-8 row">
                                        <div class="circle-div">
                                            1
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Followers .. Followers start get followers</h5>
                                            <p>
                                                Share your profile in your facebook page, twitter etc..
                                            </p>
                                            <div class="row mar-left">
                                                <div class="mar-right">
                                                    <p>Share : </p>
                                                </div>
                                                <div class="mar-left text-white">
                                                    <a class="btn btn-block btn-social btn-facebook">
                                                        <span class="fa fa-facebook"></span> Share On Facebook
                                                    </a>

                                                    <a class="btn btn-block btn-social btn-twitter">
                                                        <span class="fa fa-twitter"></span> Share On Twitter
                                                    </a>

                                                    <a class="btn btn-block btn-social btn-linkedin">
                                                        <span class="fa fa-linkedin"></span> Share On Linkedin
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <img style="width: 100%" src="<?php echo base_url()?>asset/imgs/leadership/AhmadEdilbi.jpg" alt="Ahmad Edilbi">
                                                    </div>
                                                    <div class="col">
                                                        <img style="width: 100%" src="<?php echo base_url().'uploads/users/'.$user_photo?>" alt="User photo">
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
                                    <div class="col-sm-12 mar-top mar-bot">
                                        <div class="divider"></div>
                                    </div>
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
                                    <div class="col-sm-12 mar-top mar-bot">
                                        <div class="divider"></div>
                                    </div>
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
                                    <div class="col-sm-12 mar-top mar-bot">
                                        <div class="divider"></div>
                                    </div>

                                    <div class="col-sm-12 row">
                                        <div class="circle-div">
                                            4
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">Your profile link is below:</h5>
                                            <input class="form-control form-control-lg" type="text" value="<?php echo base_url().'profile/'.$u_id?>" readonly>
                                            <button type="button" class="btn btn-secondary btn-lg mar-top" onclick="location.href = '<?php echo base_url().'profile/'.$u_id?>';">Go To My Public Profile</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <ul class="list-inline mar-top text-right">
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-secondary" onclick="location.href='<?php echo base_url()?>profile';">Close</button>
                            </li>
                        </ul>
                    </div>

                </div>
            </form>
        </section>
    </div>
    <!-- footer -->
    <?php $this->load->view('dubarah4/footer'); ?>
    <!-- Optional JavaScript == jQuery first, then Popper.js, then Bootstrap JS == -->

    <!-- Those added to the footer #PE$$ -->
    

    <script src="<?php echo base_url()?>asset/js/jquery-3.2.1.js"></script> -->
    <script src="<?php echo base_url()?>asset/js/popper.min.js" ></script>
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"  ></script>
    <script src="<?php echo base_url()?>asset/js/additional.js"></script>
    <!-- script for dynamic city insert #PE$$-->
    <script type ="text/JavaScript">
        $(document).ready(function () {

          // dynamic city change #PE$$
          $("#country-select").change(function(){
            $.ajax({
                url: '<?php echo base_url()?>get_city/' + $(this).val(),
                success: function(data) {

                    if (data) {
                        $("#city-select").html("<option disabled selected>City Of Achievement</option>" + data);
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

          //user 8 images delete #PE$$
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

          //logo image delete #PE$$
          $("#logo-del").click(function(){
            $("#profile-upload").css("background-image", "url('<?php echo base_url().'ass/images/image_profile.jpg' ?>')");
            $("#n_logo, #n_logo2, #n_logo3").attr("src","http://via.placeholder.com/100x100");  
          });
          //cancel link #PE$$
          $("#cancel").click(function(){
            
          });

          //testing
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
                        
                        final= 1;
                        link = '<?php echo base_url()?>add_hero/' + final;
                        console.log("step 1 " + final);
                        break;
                    case $(this).is("#next-step1"):
                        final = 0;
                        link = '<?php echo base_url()?>add_hero';
                        console.log("step 1 " + final);
                        break;
                    default:
                        var final = 0;
                        link = '<?php echo base_url()?>add_hero';
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
                        console.log("validate");
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
                                //console.log(res[2]);
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

          $("#prev-step").click(function(){
            $("#step2").removeClass('active');
            $("#step1").addClass('active');
            document.getElementById("step1").scrollIntoView(true);
          });
          $("#next-step3").click(function(){
            $("#step3").removeClass("active");
            $("#complete").addClass("active");
            document.getElementById("complete").scrollIntoView(true);
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
                document.getElementById('n_logo').src =reader.result;
                document.getElementById('n_logo2').src =reader.result;
                document.getElementById('n_logo3').src =reader.result;
            }
            if(file){
                reader.readAsDataURL(file);
            }else{
            }
        }        
    </script>