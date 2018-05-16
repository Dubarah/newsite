<?php $this->load->view('/business/common/header'); ?>
<?php $this->load->view('/business/common/navbar'); ?>



<img src="<?php echo base_url()?>asset/imgs/centar_bus.svg" class="img-fluid intro-img">
<div class="col-lg-12 dub_org  "  >
    <div class="row col-lg-10  mx-auto">
        <div class="col-lg-10  mx-auto">
        <div class=" card center-block  ">
          <div class="input-group">
            <span class="input-group-addon inpt_lbl_wit" id="basic-addon2">
                <strong>Find</strong>
            </span>
          <input type="text" class="form-control inpt_innr_wit" 
          placeholder="Graphic designer, Doctor, printer" aria-describedby="basic-addon2">
          <span class="input-group-addon inpt_lbl_wit" id="basic-addon2">
                <strong>Near</strong>
            </span>
          <input type="text" class="form-control inpt_innr_wit" 
          placeholder="Toronto, ON" aria-describedby="basic-addon2">
          <button class=" btn btn-sm m-1 dub_org">
              Go and Find
          </button>
        </div>
        </div>
        </div>
    </div>
    <div class="row col-lg-10 mx-auto">
        <div class="col-lg-10 mx-auto ">
            <div class="pull-left " > Browsing <strong> Toronto, ON, Canada </strong> Businesses  </div>
            <div class="pull-right " > Showing 1-10 of 11160 </div>
        </div>
    </div>
    <div class="clear"> </div>
    <div class="clear"> </div><br/>
</div>
<style type="text/css">
.dub_org{
     background-color: #e85100;
     color: #FFF;
}
.innr_btn{
   
}
.inpt_lbl_wit , .inpt_innr_wit{
    border: 0px;
    background-color: #FFF;
}
 .row.vdivide [class*='col-']:not(:last-child):after {
  background: #e0e0e0;
  width: 1px;
  content: "";
  display:block;
  position: absolute;
  top:0;
  bottom: 0;
  right: 0;
  min-height: 70px;
}
.text-nowrap {
    white-space: nowrap;
    margin: 3px;
}
</style>
<div id="filters" class="card bg-faded bg-light p-3">
    <dir class="row vdivide">
        <div class="col-sm-4 text-center list-inline">
            <button class="btn btn-outline-secondary "> 
                <i class="fa fa-clock-o "></i> OPEN NOW  
            </button>
            <button class="btn btn-success">
                <i class="fa fa-sliders fa-rotate-90"></i> ALL FILTERS 
            </button>
        </div>
        <div class="col-sm-8 text-center text-left row list-inline">
            <dl class="col-2">
                <dt class="strong text-left">
                 SORT BY:  
                </dt>
                <dd>
                  <ul class=" text-left small">
                      <li><a class="srtBy link-btn" id="BM"> Best Match</a></li>
                      <li><a class="srtBy link-btn" id="HR"> Highest rated</a></li>
                      <li><a class="srtBy link-btn" id="MR"> Most Reviewed</a></li>
                  </ul>
                </dd>
            </dl>
            <dl class="col-2">
                <dt class="strong text-left">
                 DISTANCE:
                </dt>
                <dd>
                  <ul class=" text-left small">
                      <li><a class="srtBy link-btn" id="BM"> Driving (5 km) </a></li>
                      <li><a class="srtBy link-btn" id="HR"> Biking (5 km) </a></li>
                      <li><a class="srtBy link-btn" id="MR"> Walking (5 km)</a></li>
                      <li><a class="srtBy link-btn" id="MR"> Arround 4 blocks</a></li>
                  </ul>
                </dd>
            </dl>
            <dl class="col-sm-3">
                <dt class="strong text-left text-nowrap">
                 NEIGHBORHOODS
                </dt>
                <dd>
                  <ul class=" text-left small">
                      <li><a class="srtBy link-btn" id="BM"> Mount </a></li>
                      <li><a class="srtBy link-btn" id="HR"> Bayview  </a></li>
                      <li><a class="srtBy link-btn" id="MR"> Aveny </a></li>
                  </ul>
                </dd>
            </dl>
            <dl class="col-2">
                <dt class="strong text-left">
                 FEATURES:
                </dt>
                <dd>
                  <div class=" text-left small row ">
                    <div class="text-nowrap"><a class="srtBy link-btn" id="BM">Wheelchair Accessible </a></div>  ,  
                    <div class="text-nowrap"><a class="srtBy link-btn" id="HR">Kids Friendly  </a></div>  ,  
                    <div class="text-nowrap"><a class="srtBy link-btn" id="MR">Delivery </a></div>  ,  
                    <div class="text-nowrap"><a class="srtBy link-btn" id="MR">Parking </a></div>  ,  
                    <div class="text-nowrap"><a class="srtBy link-btn" id="MR">Wi-Fi </a></div>  ,  
                    <div class="text-nowrap"><a class="srtBy link-btn" id="MR">NO Smoking </a></div>  ,  
                    <div class="text-nowrap"><a class="srtBy link-btn" id="MR">Alcohol </a></div>  ,  
                    <div class="text-nowrap"><a class="srtBy link-btn" id="MR">Music </a></div>  ,  
                    <div class="text-nowrap"><a class="srtBy link-btn" id="MR"><u> More.... </u></a></div>  
                  </div>
                </dd>
            </dl>
             <dl class="col-3">
                <dt class="strong text-left text-nowrap">
                 PRICE:
                </dt>
                <dd>
                  <ul class=" text-left small">
                      <li><a class="srtBy link-btn" id="$">  $ </a></li>
                      <li><a class="srtBy link-btn" id="$$">  $$ </a></li>
                      <li><a class="srtBy link-btn" id="$$$">  $$$ </a></li>
                      <li><a class="srtBy link-btn" id="$$$$">  $$$$ </a></li>
                  </ul>
                </dd>
            </dl>
        </div>
        </div>
    </dir>
</div>
<div id="list" class="bg-white pad">
    <div class="container">
        <div id="title"> Browsing <strong>Toronto, ON, Canada </strong> Businesses </div>
        <div class="divider"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="col-lg-12 list-inline" >
                    <div class="row ">
                        <div class="col-md-4 mar-top"> <div class="card">
                                <!-- <i class="fa fa-check-circle fa-3x on-img text-success" aria-hidden="true"></i> -->
                                <div class="bg-faded bg-light p-5">
                                     <!-- <img class="card-img-top " id="cover-upload-card" style="width:200px" src="<?php //isset($user_photo) ? print(base_url().'uploads/users/'.$user_photo) : print(base_url().'asset/imgs/demo-img-user.png') ?>" alt="Card image cap"/> -->
                                </div>
                               
                                <div class="card-body">
                                    <div class="row ">
                                    <div class="row col-md-12">
                                        <h4 class="card-title"><?php isset($userData)  
                                        ?  $userData['first'].' ' .$userData['last'].' '  
                                        :  "S"  
                                        ?>
                                        <!-- <i class="fa fa-check-circle red-text" aria-hidden="true"></i> --></h4>
                                        <h6 class="card-subtitle mb-2 text-muted ">
                                            <strong>
                                            <?php 
                                        //isset($userData['prof']) 
                                        //? $userData['prof']
                                        echo "Pie Bar"  ?></strong></h6>
                                    </div>

                                    <div class="row col-md-12">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <div class="media">
                                        <span class="flag flag-can flag-1x mar-right"></span>
                                        <div class="media-body">
                                            <p id = 'city-country3' class="text-muted small">10 reviews</p>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                     <div class="row ">     
                                    <div class="small text-left">
                                            <p><span  >Category1, Category2, </span></p>
                                            <p class="text-muted">Address • 0.0 km </p>
                                    </div>
                                    </div>
                                </div>
                        </div></div>
                         <div class="col-md-4 mar-top"> <div class="card">
                                <!-- <i class="fa fa-check-circle fa-3x on-img text-success" aria-hidden="true"></i> -->
                                <div class="bg-faded bg-light p-5">
                                     <!-- <img class="card-img-top " id="cover-upload-card" style="width:200px" src="<?php //isset($user_photo) ? print(base_url().'uploads/users/'.$user_photo) : print(base_url().'asset/imgs/demo-img-user.png') ?>" alt="Card image cap"/> -->
                                </div>
                               
                                <div class="card-body">
                                    <div class="row ">
                                    <div class="row col-md-12">
                                        <h4 class="card-title"><?php isset($userData)  
                                        ?  $userData['first'].' ' .$userData['last'].' '  
                                        :  "S"  
                                        ?>
                                        <!-- <i class="fa fa-check-circle red-text" aria-hidden="true"></i> --></h4>
                                        <h6 class="card-subtitle mb-2 text-muted ">
                                            <strong>
                                            <?php 
                                        //isset($userData['prof']) 
                                        //? $userData['prof']
                                        echo "Pie Bar"  ?></strong></h6>
                                    </div>

                                    <div class="row col-md-12">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <div class="media">
                                        <span class="flag flag-can flag-1x mar-right"></span>
                                        <div class="media-body">
                                            <p id = 'city-country3' class="text-muted small">10 reviews</p>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                     <div class="row ">     
                                    <div class="small text-left">
                                            <p><span  >Category1, Category2, </span></p>
                                            <p class="text-muted">Address • 0.0 km </p>
                                    </div>
                                    </div>
                                </div>
                        </div></div>
                         <div class="col-md-4 mar-top"> <div class="card">
                                <!-- <i class="fa fa-check-circle fa-3x on-img text-success" aria-hidden="true"></i> -->
                                <div class="bg-faded bg-light p-5">
                                     <!-- <img class="card-img-top " id="cover-upload-card" style="width:200px" src="<?php //isset($user_photo) ? print(base_url().'uploads/users/'.$user_photo) : print(base_url().'asset/imgs/demo-img-user.png') ?>" alt="Card image cap"/> -->
                                </div>
                               
                                <div class="card-body">
                                    <div class="row ">
                                    <div class="row col-md-12">
                                        <h4 class="card-title"><?php isset($userData)  
                                        ?  $userData['first'].' ' .$userData['last'].' '  
                                        :  "S"  
                                        ?>
                                        <!-- <i class="fa fa-check-circle red-text" aria-hidden="true"></i> --></h4>
                                        <h6 class="card-subtitle mb-2 text-muted ">
                                            <strong>
                                            <?php 
                                        //isset($userData['prof']) 
                                        //? $userData['prof']
                                        echo "Pie Bar"  ?></strong></h6>
                                    </div>

                                    <div class="row col-md-12">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <div class="media">
                                        <span class="flag flag-can flag-1x mar-right"></span>
                                        <div class="media-body">
                                            <p id = 'city-country3' class="text-muted small">10 reviews</p>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                     <div class="row ">     
                                    <div class="small text-left">
                                            <p><span  >Category1, Category2, </span></p>
                                            <p class="text-muted">Address • 0.0 km </p>
                                    </div>
                                    </div>
                                </div>
                        </div></div>
                         <div class="col-md-4 mar-top"> <div class="card">
                                <!-- <i class="fa fa-check-circle fa-3x on-img text-success" aria-hidden="true"></i> -->
                                <div class="bg-faded bg-light p-5">
                                     <!-- <img class="card-img-top " id="cover-upload-card" style="width:200px" src="<?php //isset($user_photo) ? print(base_url().'uploads/users/'.$user_photo) : print(base_url().'asset/imgs/demo-img-user.png') ?>" alt="Card image cap"/> -->
                                </div>
                               
                                <div class="card-body">
                                    <div class="row ">
                                    <div class="row col-md-12">
                                        <h4 class="card-title"><?php isset($userData)  
                                        ?  $userData['first'].' ' .$userData['last'].' '  
                                        :  "S"  
                                        ?>
                                        <!-- <i class="fa fa-check-circle red-text" aria-hidden="true"></i> --></h4>
                                        <h6 class="card-subtitle mb-2 text-muted ">
                                            <strong>
                                            <?php 
                                        //isset($userData['prof']) 
                                        //? $userData['prof']
                                        echo "Pie Bar"  ?></strong></h6>
                                    </div>

                                    <div class="row col-md-12">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <div class="media">
                                        <span class="flag flag-can flag-1x mar-right"></span>
                                        <div class="media-body">
                                            <p id = 'city-country3' class="text-muted small">10 reviews</p>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                     <div class="row ">     
                                    <div class="small text-left">
                                            <p><span  >Category1, Category2, </span></p>
                                            <p class="text-muted">Address • 0.0 km </p>
                                    </div>
                                    </div>
                                </div>
                        </div>  </div>
                    </div>
                </div>                 
            </div>
            <div class="col-md-4 row">
                <div id="ma3reft" class="panel" >
                    <div class="col-md-3">
                        <img  width="100" src="<?php echo base_url()?>ass/images/dub-icon.png"/>
                    </div>
                    <div class="col-md-10">
                        <div class="strong "> Dubarah inc.</div class="strong">
                        <div class="small">
                        Add discreption, cover photo, and
                        gallery must always be perfect and
                        up to date</div class="small">
                        <div class="small">(415) 715-9767 </div>  
                        <div class="btn  btn-sm btn-outline-secondary"> Get Quote</div>
                    </div>
                </div>
                <br/>
                <div id="ma3reft" class="panel"  >
                    <div class="col-md-3">
                        <img  width="100" src="<?php echo base_url()?>ass/images/dub-icon.png"/>
                    </div>
                    <div class="col-md-10">
                        <div class="strong "> Dubarah inc.</div class="strong">
                        <div class="small">
                        Add discreption, cover photo, and
                        gallery must always be perfect and
                        up to date</div class="small">
                        <div class="small">(415) 715-9767 </div>  
                        <div class="btn  btn-sm btn-outline-secondary"> Get Quote</div>
                    </div>
                </div>
                <br/>
                <div id="ma3reft"  >
                    <div class="col-md-3">
                        <img  width="100" src="<?php echo base_url()?>ass/images/dub-icon.png"/>
                    </div>
                    <div class="col-md-10">
                        <div class="strong "> Dubarah inc.</div class="strong">
                        <div class="small">
                        Add discreption, cover photo, and
                        gallery must always be perfect and
                        up to date</div class="small">
                        <div class="small">(415) 715-9767 </div>  
                        <div class="btn  btn-sm btn-outline-secondary"> Get Quote</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear mar-top"> </div>
        Browsing <strong > Toronto, ON, Canada <strong > Offers
        <div class="divider"></div>
       <div class="row">
            <div class=" ">
                <div class="col-lg-12 list-inline" >
                    <div class="row ">
                        <div class="col-md-3 mar-top"> 
                            <div class="card">
                                <div class="bg-faded bg-light p-5">
                                </div>
                                <div class="card-body">
                                    <div class="row ">
                                        <div class="row col-md-12">
                                            <h4 class="card-title"><?php isset($userData)  
                                            ?  $userData['first'].' ' .$userData['last'].' '  
                                            :  "S"  
                                            ?>
                                            <h6 class="card-subtitle mb-2 text-muted ">
                                                <strong>
                                                    Up to 46% off Italian Cuisine
                                            </strong></h6>
                                        </div>
                                        <div class="row col-md-12 ">     
                                        <div class="small text-left">
                                                <p><span  > luci Restaurant</span></p>
                                                <p> <span class="flag flag-can flag-1x mar-right"></span>
                                                <span class="text-muted">Address • 0.0 km </span>
                                                </p>
                                        </div>
                                        </div>
                                        <div class="row col-md-12">
                                            <div class="text-left">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p id = 'city-country3' class="text-muted small">10 reviews</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right text-right  col-xs-offset-2">
                                              <del>C$60</del> <span class="text-success">C$30</span>
                                              </div>
                                        </div>
                                    </div>
                                </div></div>
                        </div> 
                        <div class="col-md-3 mar-top"> 
                            <div class="card">
                                <div class="bg-faded bg-light p-5">
                                </div>
                                <div class="card-body">
                                    <div class="row ">
                                        <div class="row col-md-12">
                                            <h4 class="card-title"><?php isset($userData)  
                                            ?  $userData['first'].' ' .$userData['last'].' '  
                                            :  "S"  
                                            ?>
                                            <h6 class="card-subtitle mb-2 text-muted ">
                                                <strong>
                                                    Up to 46% off Italian Cuisine
                                            </strong></h6>
                                        </div>
                                        <div class="row col-md-12 ">     
                                        <div class="small text-left">
                                                <p><span  > luci Restaurant</span></p>
                                                <p> <span class="flag flag-can flag-1x mar-right"></span>
                                                <span class="text-muted">Address • 0.0 km </span>
                                                </p>
                                        </div>
                                        </div>
                                        <div class="row col-md-12">
                                            <div class="text-left">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p id = 'city-country3' class="text-muted small">10 reviews</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right text-right  col-xs-offset-2">
                                              <del>C$60</del> <span class="text-success">C$30</span>
                                              </div>
                                        </div>
                                    </div>
                                </div></div>
                        </div> 
                        <div class="col-md-3 mar-top"> 
                            <div class="card">
                                <div class="bg-faded bg-light p-5">
                                </div>
                                <div class="card-body">
                                    <div class="row ">
                                        <div class="row col-md-12">
                                            <h4 class="card-title"><?php isset($userData)  
                                            ?  $userData['first'].' ' .$userData['last'].' '  
                                            :  "S"  
                                            ?>
                                            <h6 class="card-subtitle mb-2 text-muted ">
                                                <strong>
                                                    Up to 46% off Italian Cuisine
                                            </strong></h6>
                                        </div>
                                        <div class="row col-md-12 ">     
                                        <div class="small text-left">
                                                <p><span  > luci Restaurant</span></p>
                                                <p> <span class="flag flag-can flag-1x mar-right"></span>
                                                <span class="text-muted">Address • 0.0 km </span>
                                                </p>
                                        </div>
                                        </div>
                                        <div class="row col-md-12">
                                            <div class="text-left">
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <div class="media">
                                                    <div class="media-body">
                                                        <p id = 'city-country3' class="text-muted small">10 reviews</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-right text-right  col-xs-offset-2">
                                              <del>C$60</del> <span class="text-success">C$30</span>
                                              </div>
                                        </div>
                                    </div>
                                </div></div>
                        </div> 
                    </div>
                </div>                 
            </div>
        </div>
    </div>
</div>

<?php /*
    <div class="jumbotron jumbotron-fluid bg-white pad">
        <div class="container">
            <form method="get" action="<?php echo base_url()?>achievements/">
            <div class="row">
                <div class="col">
                   <h4 class="mar-top">SEARCH BY :</h4>
                </div>
                <div class="col">
                    <!-- <input type="text" class="form-control form-control-lg" placeholder="Achievement Type"> -->
                    <select id="ach_type" name="achType" class="form-control form-control-lg">
                        <option selected disabled>Achivment Type</option>
                        <?php foreach ($ach_type as $type): ?>
                            <option value = "<?=$type->ach_typeid?>"><?=$type->type_name ?></option>
                        <?php endforeach?>
                    </select>
                </div>
                <div class="col">
                    <!-- <input type="text" class="form-control form-control-lg" placeholder="Country"> -->
                    <select name="country" id="country-select" class="form-control form-control-lg">
                        <option disabled selected>Country Of Achievement</option>
                        <?php foreach ($countries->result() as $country):?>
                            <option value="<?php echo $country->country_id?>">
                                <?php echo $country->country_english_name?>
                            </option>
                        <?php endforeach?>
                    </select>
                </div>
                <div class="col">
                    <input type="text" name="search" class="form-control form-control-lg" placeholder="Search any word">
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-secondary btn-lg">Go & Find</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row col">
            <p>SORT BY :  
                <a href="<?php echo base_url().'achievements/1/'.($url_ext ? "$url_ext&sort=all" : "?sort=all")?>" class="btn btn-link"><?php echo LANG() == 'en' ? 'All' : 'الكل' ?></a>
                <a href="#" class="btn btn-link">Heros</a></p>
        </div>

        <div class="row col">
            <p><span class="font-weight-bold">TOP HERO CITIZENS</span> / Insights from top leaders</p>
        </div>

        <div class="divider"></div>
        <?php 
        $pages = $num_rows % 8 === 0 ? $num_rows / 8 : ((int) $num_rows / 8) + 1;
        $pages = (int) $pages;
        ?>
        <div class="row">
            <?php foreach($achs as $ach): ?>   
                <div style="margin-bottom: 10px;" class="col-sm-12 col-lg-3">
                <div class="card">
                    <a href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                    <img class="card-img-top" src="<?php echo $ach->photo ? base_url().'uploads/users/'.$ach->photo : base_url().'asset/imgs/demo-img-user.png' ?>" alt="Card image cap"></a>
                    <div class="card-body">
                        <a style="color:black;" href="<?php echo base_url().'profile/'.$ach->user_id ?>"><h4 class="card-title"><?php echo $ach->username ." ".$ach->lastname." "; echo $ach->verified ? '<i class="fa fa-check-circle red-text" aria-hidden="true"></i>' : '' ;?>
                        </h4></a>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $ach->job ?> </h6>
                        <!-- rate switch #PE$$ -->
                        <?php
                            $per = $ach->rate;
                            switch (true) {
                                case ($per<10):
                                    echo   '<i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>';
                                    break;
                                case (10<=$per&&$per<20):
                                    echo   '<i class="fa fa-star-half-full" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>';
                                    break;
                                case (20<=$per&&$per<30):
                                    echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>';
                                    break;
                                case (30<=$per&&$per<40):
                                    echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>';
                                    break;
                                case (40<=$per&&$per<50):
                                    echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>';
                                    break;
                                case (50<=$per&&$per<60):
                                    echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>';
                                    break;
                                case (60<=$per&&$per<70):
                                    echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>';
                                    break;
                                case (70<=$per&&$per<80):
                                    echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-full" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>';
                                    break;
                                case (80<=$per&&$per<90):
                                    echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>';
                                    break;
                                case (90<=$per&&$per<100):
                                    echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half-full" aria-hidden="true"></i>';
                                    break;
                                case ($per=100):
                                    echo   '<i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>';
                                    break;
                                default:
                                    echo   '<i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>';
                                    break;
                            }
                        ?>
                        <div class="media">
                            <span class="flag flag-can flag-1x mar-right"></span>
                            <div class="media-body">
                                <p class="text-muted small"><?php echo $cities[(string)((int)$ach->ach_city - 1)]->city_english_name.", ".$countries->result()[(string)((int)$ach->ach_country - 1)]->country_english_name ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="card-body grey-lighten-3">
                        <div class="media">
                            <img class="d-flex mr-3" src="<?php echo $ach->ach_logo ? base_url().'uploads/achievements/logos/'.$ach->ach_logo : 'http://via.placeholder.com/100x100' ?>" width="50" height="50">
                            <div class="media-body">
                                <h5 class="mt-0"><?php echo $ach->ach_title ?></h5>
                                <p class="text-muted small"><?php echo Date('M j, Y',$ach->ach_date) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mar-top">
                            <div class="col">
                                <p class="text-muted followers" heroId="<?php echo $ach->hero_id?>" followers="<?php echo $followers[$ach->hero_id]?>"><?php echo $followers[$ach->hero_id]?> followers</p>
                            </div>
                            <?php if($this->session->userdata('user_id')){
                              if($follow[$ach->hero_id]){
                                echo "<div class='col text-right following'>
                                  <a href='JavaScript:void(0);' class='btn btn-sm btn-outline-danger unfollow'  heroId='".$ach->hero_id."'>Unfollow</a>
                                </div>";
                              }else{
                                echo "<div class='col text-right following'>
                                  <a href='JavaScript:void(0);' class='btn btn-sm btn-outline-success follow' 
                                  heroId='".$ach->hero_id."'>Follow</a>
                                </div>";
                              } 
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
                </div>
            <?php endforeach ?>
            <?php if(empty($achs)){
                echo '<div class="col"><b>There Is No Achievements To Show!</b></div>';
            } ?>
            <?php if ($num_rows > 8): ?>
                    <div class="text-center">
                        <ul class="pagination ">
                            <li><a href="<?php echo base_url()."achievements/1"?>" ><</a></li>
                            <?php if ($page - 4 >= 1): ?>
                                <li><a href="<?php echo base_url()."achievements/".($page - 4).$url_ext ?>"><?php echo $page - 4 ?></a></li>
                            <?php endif ?>
                            <?php if ($page - 3 >= 1): ?>
                                <li><a href="<?php echo base_url()."achievements/".($page - 3).$url_ext ?>"><?php echo $page - 3 ?></a></li>
                            <?php endif ?>
                            <?php if ($page - 2 >= 1): ?>
                                <li><a href="<?php echo base_url()."achievements/".($page - 2).$url_ext ?>"><?php echo $page - 2 ?></a></li>
                            <?php endif ?>
                            <?php if ($page - 1 >= 1): ?>
                                <li><a href="<?php echo base_url()."achievements/".($page - 1).$url_ext ?>"><?php echo $page - 1 ?></a></li>
                            <?php endif ?>
                            <li class="active"><a href="#"><?php echo $page ?></a></li>
                            <?php if ($page + 1 <= $pages): ?>
                                <li><a href="<?php echo base_url()."achievements/".($page + 1).$url_ext ?>"><?php echo $page + 1 ?></a></li>
                            <?php endif ?>
                            <?php if ($page + 2 <= $pages): ?>
                                <li><a href="<?php echo base_url()."achievements/".($page + 2).$url_ext ?>"><?php echo $page + 2 ?></a></li>
                            <?php endif ?>
                            <?php if ($page + 3 <= $pages): ?>
                                <li><a href="<?php echo base_url()."achievements/".($page + 3).$url_ext ?>"><?php echo $page + 3 ?></a></li>
                            <?php endif ?>
                            <?php if ($page + 4 <= $pages): ?>
                                <li><a href="<?php echo base_url()."achievements/".($page + 4).$url_ext ?>"><?php echo $page + 4 ?></a></li>
                            <?php endif ?>
                            <li><a href="<?php echo base_url()."achievements/".($pages).$url_ext ?>">></a></li>
                            
                        </ul>
                    </div>
                <?php endif ?>

            <div class="row col-sm-12">
                <button type="button" class="btn btn-outline-dark btn-lg mar mx-auto">Check More</button>
            </div>

            <div class="row col">
                <p><span class="font-weight-bold">TOP HERO CITIZENS</span> / Insights from top leaders</p>
            </div>

            <div class="divider"></div>


        </div>
    </div>
    <!-- footer -->
    <?php $this->load->view('dubarah4/footer'); ?>

    <!-- Optional JavaScript == jQuery first, then Popper.js, then Bootstrap JS == -->
    <script src="<?php echo base_url()?>asset/js/jquery-3.2.1.slim.min.js"  ></script>
    <!-- the following jquery is instade of the slim one above to support ajax #PE$$ -->
    <script src="<?php echo base_url()?>asset/js/jquery-3.2.1.js"></script>
    <script src="<?php echo base_url()?>asset/js/popper.min.js"  ></script>
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"  ></script>
    <script src="<?php echo base_url()?>asset/js/additional.js"></script>       
    <script type="text/javascript">
        $(document).ready(function(){
            //unfollow #PE$$
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
            //follow #PE$$
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
*/ ?> 

<?php $this->load->view('business/common/footer'); ?>