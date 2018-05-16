<!-- Header -->
<?php $this->load->view('heroCitizen/common/header'); ?>

<style type="text/css">
    .tab-content input[type="radio"]+label {
        cursor: pointer;
        margin-right:20px;
        padding-left:25px;
        vertical-align:sub !important;
        position:relative;
        color:#838383;
        margin-bottom:0;
    }
    .tab-content input[type="radio"] {
        display:none;
    }
    .tab-content input[type="radio"] + label:before,
    .tab-content input[type="radio"] + label:after {
        position:absolute;
        top:5px;
        left:0;
        content:"";
        width:14px;
        height:14px;
        border-radius:50%;
        display:inline-block;
        background-color:transparent;
    }

    .tab-content input[type="radio"] + label:before {
        border: 2px solid #f44336;
    }

    .tab-content input[type="radio"]:checked + label:after {
        border: 5px solid #f44336;
    }

    .required {
        color: #ed1c24;
    }
</style>

<div class="container">
    <div class="row no-mar">
        <div class="col-lg-3 mar-top ">
            <div class="jumbotron" style="padding: 0">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <h5><a class="nav-link active setting-side-links " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php echo trans('general') ?></i></a></h5>
                    <h5><a class="nav-link setting-side-links " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><?php echo trans('profile_con') ?></a></h5>
                    <h5><a class="nav-link setting-side-links " id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><?php echo trans('sec_pass') ?></a></h5>
                    <h5><a class="nav-link setting-side-links " id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><?php echo trans('act') ?></a></h5>
                </div>
            </div>
        </div>
        <div class="col-lg-9 mar-top">
            <form method="post" enctype="multipart/form-data" action="<?php echo base_url()?>my_profile">
            <fieldset>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <h3 class="h3-title-setting"><?php echo trans('general') ?></h3>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><?php echo translate('firstname') ?><span class="required"></span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="firstname" value="<?php echo set_value('firstname') ? set_value('firstname') : $user->username ?>" placeholder="Ex. Basel">
                                </div>
                                <span style="color: red;"><?php echo form_error('firstname') ? form_error('firstname') : '' ?></span>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><?php echo translate('last_name') ?><span class="required"></span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="lastname" value="<?php echo set_value('lastname') ? set_value('lastname') : $user->lastname ?>" placeholder="Ex. Shoban">
                                </div>
                                <span style="color: red;"><?php echo form_error('lastname') ? form_error('lastname') : '' ?></span>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><?php echo trans('country') ?><span class="required"></span></label>
                                <div class="col-sm-6">
                                    <div class="select2-wrapper">
                                        <select name="country" class="form-control select2" placeholder="First pick your country" id="country-select">
                                            <?php if ($place->country_id){?>
                                       <option selected="selected" value="<?php echo $place->country_id ?>"><?php echo $place->country_english_name ?></option>
                                      <?php } ?>
                                         <?php if(!$place->country_id){echo "<option></option>";} ?>
                                        <?php foreach ($countries->result() as $country) {?>
                                            <option value="<?php echo $country->country_id ?>" ><?php echo $country->country_english_name ?></option>
                                        <?php } ?>
                                     </select>
                                     <span style="color: red;"><?php echo form_error('country') ? form_error('country') : '' ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><?php echo trans('city') ?><span class="required"></span></label>
                                <div class="col-sm-6">
                                    <div class="select2-wrapper">
                                        <select name="city" id="city-select" class="form-control select2" style="" placeholder="Pick you city">
                                         <?php if(!$place->city_id){echo "<option></option>";} ?>
                                         <?php if ($place->city_id){?>
                                           <option selected="selected" value="<?php echo $place->city_id ?>"><?php echo $place->city_english_name ?></option>
                                          <?php } ?>
                                            
                                        </select>
                                     <span style="color: red;"><?php echo form_error('country') ? form_error('country') : '' ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><?php echo trans('gender') ?><span class="required"></span></label>
                                <div class="col-sm-6">                                   
                                  <input type="radio" name="gender"  value="1" id="male"  <?php echo $user->gender==1 ? 'checked="checked"' : '' ?>>
                                  <label for="male"><?php echo trans('male') ?></label>
                                  <input type="radio" name="gender"  value="2" id="female" <?php echo $user->gender==2 ? 'checked="checked"' : '' ?>>
                                  <label for="female"><?php echo trans('female') ?></label>
                                </div> 
                                <span style="color: red;"><?php echo form_error('gender') ? form_error('gender') : '' ?></span>
                            </div>
                            <!-- language #PE$$ -->
                            <!-- <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Language</label>
                                <div class="col-sm-6">
                                    <select class="custom-select">
                                        <option selected>English</option>
                                        <option value="1">Arabic</option>
                                        <option value="2">Turkey</option>
                                        <option value="3">chines</option>
                                    </select>
                                </div>
                            </div> -->

                    <!-- <div class="divider mar-bot mar-top"></div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" value="adnan_developer">
                            <p class="text-muted">www.dubarah.com/adnan_developer</p>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-dark"><i class="fa fa-link" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="adnandiab38@gmail.com">
                        </div>
                        <h6 class="text-muted">only you</h6>
                    </div> -->
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

                    <h3 class="h3-title-setting"><?php echo trans('profile_con') ?></h3>

                    <div class="form-group row mar-top">
                        <label class="col-sm-2 col-form-label"><?php echo trans('professional') ?><span class="required"></span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo set_value('job') ? set_value('job') : $user->job ?>" name="job">
                            <span style="color: red;"><?php echo form_error('job') ? form_error('job') : '' ?></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><?php echo trans('about') ?><span class="required"></span></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="" rows="3" name="about" ><?php echo set_value('about') ? set_value('about') : $user->about ?></textarea>
                            <span style="color: red;"><?php echo form_error('about') ? form_error('about') : '' ?></span> 
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><?php echo trans('phone') ?><span class="required"></span></label>
                        <div class="col-sm-6">
                            <input type="number" class="form-control" value="<?php echo set_value('phone') ? set_value('phone') : $user->mobile ?>" name="phone">
                            <span style="color: red;"><?php echo form_error('phone') ? form_error('phone') : '' ?></span> 
                        </div>
                    </div>

                    <div class="form-group row mar-top">
                        <label class="col-sm-2 col-form-label"><?php echo trans('languages') ?><span class="required"></label>
                        <div class="col-sm-8">
                            <div class="select2-wrapper">
                                <select name="langs[]" class="form-control select2 old" placeholder=""  multiple="multiple">
                                <?php foreach ($langs->result() as $lang) {?>
                                    <option value="<?php echo $lang->id ?>" <?php echo in_array($lang->id, $userlangs) ? 'selected' : '' ?>><?php echo $lang->lang_name ?></option>
                                <?php } ?>
                                </select>
                            </div>  
                           <span style="color: red;"><?php echo form_error('langs[]') ? form_error('langs[]') : '' ?></span>
                        </div>
                    </div>

                    <div class="form-group row mar-top">
                        <label class="col-sm-2 col-form-label"><?php echo trans('my_skills') ?></label>
                        <div class="col-sm-8">
                            <div class="select2-wrapper">
                                <select class="form-control select2 old" placeholder="Pick your Skills"  multiple="multiple" name="skills[]">
                                    <?php foreach ($skills->result() as $skill) {?>
                                        <option value="<?php echo $skill->skill_id ?>"  <?php echo in_array($skill->skill_id, $userskills) ? 'selected' : '' ?>><?php echo $skill->skill_name ?></option>
                                    <?php } ?>
                                </select>
                             </div>
                            <span style="color: red;"><?php echo form_error('skills[]') ? form_error('skills[]') : '' ?></span>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <h3 class="h3-title-setting"><?php echo trans('sec_pass') ?></h3>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" placeholder="************">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">New Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" placeholder="************">
                            <p class="text-muted">Password Must be from 8 -12 contain symbols</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Re-Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" placeholder="************">
                        </div>
                    </div>
                    <h4>Where you're logged in</h4>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Browser</th>
                            <th scope="col">Location</th>
                            <th scope="col">Most recent activity</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Chrome on Fedora</td>
                            <td>Syria</td>
                            <td>Current session</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Chrome on Windows 10</td>
                            <td>London</td>
                            <td>2 month ago</td>
                            <td><i class="fa fa-times" aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Chrome on Windows 7</td>
                            <td>Bierut</td>
                            <td>5 day ago</td>
                            <td><i class="fa fa-times" aria-hidden="true"></i></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                    <div class="row">
                        <div class="col-lg-9">
                            <h3 class="h3-title-setting"><?php echo trans('last_act') ?></h3>
                        </div>
                        <div class="col-lg-3">
                            <div class="dropdown" style="padding: 15px 0 ;">
                                <button class="btn btn-outline-secondary dropdown-toggle btn-block" type="button" id="activities" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Activity
                                </button>/////////////////////////
                                <div class="dropdown-menu" aria-labelledby="activities">
                                    <a class="dropdown-item" href="#">Achivments</a>
                                    <a class="dropdown-item" href="#">Follow</a>
                                    <a class="dropdown-item" href="#">Business</a>
                                    <a class="dropdown-item" href="#">Jobs</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mar-top">
                        <div class="card-header">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                            You Deleted <a href="#">Dubarah</a> From Your Achivmnets <a class="float-right" href="#">undo ?</a cl>
                        </div>
                    </div>

                    <div class="card mar-top">
                        <div class="card-header">
                            <i class="fa fa-ban" aria-hidden="true"></i>
                            You Blocked <a href="#">@MDO</a><a class="float-right" href="#">undo ?</a cl>
                        </div>
                    </div>

                    <div class="card mar-top">
                        <div class="card-header">
                            <i class="fa fa-rss" aria-hidden="true"></i>
                            You Followed <a href="#">@smothiecat</a><a class="float-right" href="#">undo ?</a cl>
                        </div>
                    </div>

                    <div class="card mar-top">
                        <div class="card-header">
                            <i class="fa fa-minus-circle" aria-hidden="true"></i>
                            You Canceled <a href="#">Graphic Designer</a> Job <a class="float-right" href="#">undo ?</a cl>
                        </div>
                    </div>

                    <div class="card mar-top">
                        <div class="card-header">
                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                            You Liked <a href="#">Adnan_99</a> Profile <a class="float-right" href="#">undo ?</a cl>
                        </div>
                    </div>

                    <div class="card mar-top">
                        <div class="card-header">
                            <i class="fa fa-share" aria-hidden="true"></i>
                            You Requested to start new job <a href="#">Web Developer</a> Profile <a class="float-right" href="#">undo ?</a cl>
                        </div>
                    </div> -->
                <div class="divider mar-bot mar-top"></div>
                <button type="submit" style="background-color: #f44336;" class="btn btn-danger float-right mar-bot mar-right"><?php echo trans('save')?></button>
                </div>
                <button type="button" class="btn btn-default float-right mar-bot mar-right" onclick="location.href = '<?php echo base_url()?>profile';"><?php echo trans('cancel')?></button>
                </div>
                </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php $this->load->view('heroCitizen/common/footer'); ?>
