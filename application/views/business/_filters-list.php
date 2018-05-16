<?php $this->load->view('/business/common/header'); ?>
<?php $this->load->view('/business/common/navbar'); ?>
<?php 
 //echo "<pre>" ;
// //"FLTRs" => $filters , "BUSIs"
//print_r($businesses[0]['Busi'] );
?>
<img src="<?php echo base_url()?>ass/images/business/searchfilter-header.jpg" class="img-fluid intro-img">
<div class="col-md-12 dub_org center-block text-center"  >
    <div class="row ">
        <div class="col-lg-10 ">
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
    <div class="row">
        <div class="col-lg-10 ">
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
            <button class="btn btn-outline-secondary " id="opendBusinessBtn"> 
                <i class="fa fa-clock-o "></i> OPEN NOW  
            </button>
            <button class="btn btn-success" id="allfilterBtn">
                <i class="fa fa-sliders fa-rotate-90"></i> ALL FILTERS 
            </button>
        </div>
        <div id="filtersCard" class="col-sm-8 text-center text-left row list-inline">
          <form id="fltr_form" class="col-sm-12 text-center text-left row list-inline">
            <dl class="col-2">
                <dt class="strong text-left">
                 SORT BY:  
                </dt>
                <dd> 
                  <ul class=" text-left small">
                    <li><a class="srtBy link-btn" id="BM"> Best Match</a></li>
                    <li><a class="srtBy link-btn" id="HR"> Highest rated</a></li>
                    <li><a class="srtBy link-btn" id="MR"><strong> Most Reviewed </strong></a></li>
                  </ul>
                </dd>
            </dl>
           <!--  <dl class="col-2">
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
            </dl> -->
            <dl class="col-sm-3">
                <dt class="strong text-left text-nowrap">
                 NEIGHBORHOODS
                </dt>
                <dd>
                  <ul class=" text-left small">
                      <li><a class="srchBy link-btn" id="BM"> Mount </a></li>
                      <li><a class="srchBy link-btn" id="HR"> Bayview  </a></li>
                      <li><a class="srchBy link-btn" id="MR"> Aveny </a></li>
                  </ul>
                </dd>
            </dl>
            <dl class="col-4">
                <dt class="strong text-left">
                 FEATURES:
                </dt>
                <dd>
                  <div class=" text-left small row ">
                    <div class="text-nowrap"><a class="srchBy link-btn" id="BM">Wheelchair Accessible </a></div>  ,  
                    <div class="text-nowrap"><a class="srchBy link-btn" id="HR">Kids Friendly  </a></div>  ,  
                    <div class="text-nowrap"><a class="srchBy link-btn" id="MR">Delivery </a></div>  ,  
                    <div class="text-nowrap"><a class="srchBy link-btn" id="MR">Parking </a></div>  ,  
                    <div class="text-nowrap"><a class="srchBy link-btn" id="MR">Wi-Fi </a></div>  ,  
                    <div class="text-nowrap"><a class="srchBy link-btn" id="MR">NO Smoking </a></div>  ,  
                    <div class="text-nowrap"><a class="srchBy link-btn" id="MR">Alcohol </a></div>  ,  
                    <div class="text-nowrap"><a class="srchBy link-btn" id="MR">Music </a></div>  ,  
                    <div class="text-nowrap"><a class="srchBy link-btn" id="MR"><u> More.... </u></a></div>  
                  </div>
                </dd>
            </dl>
             <dl class="col-3">
                <dt class="strong text-left text-nowrap">
                 PRICE:
                </dt>
                <dd id='prices'>
                  <ul class=" text-left small">
                      <li><label>
                             <input type="radio" id="pricefltr" name="pricefltr" value="1" class="">
                             <i><a class="srchBy link-btn" id="$">$</a></i>
                          </label>
                      </li>
                      <li><label>
                             <input type="radio" id=pricefltr" name="pricefltr" value="2" class="">
                             <i><a class="srchBy link-btn" id="$">$</a>$</i>
                          </label>
                      </li>
                      <li><label>
                             <input type="radio" id=pricefltr" name="pricefltr" value="3" class="">
                             <i><a class="srchBy link-btn" id="$">$</a>$$</i>
                          </label>
                      </li>
                      <li><label>
                             <input type="radio" id=pricefltr" name="pricefltr" value="4" class="">
                             <i><a class="srchBy link-btn" id="$">$</a>$$$</i>
                          </label>
                      </li>
                  </ul>
                </dd>
            </dl>
        </form>
        </div>
</div>
<!--     </dir>
</div> -->
<div id="list" class="bg-white pad">
    <div class="container">
        <div id="title"> Browsing <strong>Toronto, ON, Canada </strong> Businesses </div>
        <div class="divider"></div>
        <div class="row">
            <div class="col-md-8">
                <div class="col-lg-12 list-inline" >
                    <div class="row ">
                      <?php foreach ( $businesses as $business) { ?>
                      <?php // echo "<pre>" ;print_r($business) ;//exit; ?>
                      <div class="col-md-4 mar-top"> <div class="card">
                                <div class="bg-faded bg-light p-5">
                                </div>
                                <div class="card-body">
                                    <div class="row ">
                                    <div class="row col-md-12">
                                        <h4 class="card-title">
                                        <h6 class="card-subtitle mb-2 text-muted ">
                                            <strong id="<?$business['Busi']->id?>">
                                            <?php echo $business['Busi']->name ;?> 
                                            </strong></h6>
                                    </div>
                                    <div class="row col-md-12">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <div class="media">
                                      <?php $flg= strtolower($business['Busi']->country_arabic_name); ?>
                                        <span class="flag flag-<?php echo $flg ;?> flag-1x mar-right"></span>
                                        <div class="media-body">
                                            <p id = 'city-country3' class="text-muted small">
                                            ( <?php echo $business['Busi']->rate_review ;?> ) reviews
                                            </p>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                     <div class="row ">     
                                    <div class="small text-left col-sm-12">
                                        <p><span > 
                                          <?php foreach ( $business['GenFeat'] as $GenFeat ) { ?>
                                          <?php echo $GenFeat->name ; ?> ,
                                          <?php } ?> 
                                        </span></p>
                                    </div>
                                    <div class="text-left col-sm-12">
                                        <p class="text-muted small">
                                          <?php echo $business['Busi']->province ;?> • 
                                          <?php echo $business['Busi']->city_english_name  ;?>
                                           <br/>
                                           5.1 km </p>
                                           <?//$theAddress?>
                                    </div>
                                    </div>
                                </div>
                        </div></div>
                      <?php  }  //exit; ?>
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
<?php $this->load->view('business/common/footer'); ?>
<script type="text/javascript">
  $(document).ready(function () {
      $("input[type='radio'].srch").on('change' , function(e){ 
          alert(e.id)
      });
      $(".srt").on('change' , function(e){
          alert(e.id)
      });
      $('#opendBusinessBtn').on('click',function(){
          if('opend')
            {$("#opendBusinessBtn").addClass('text-success');}
          else
            {$("#opendBusinessBtn").removeClass('text-success');}
      });
      $('#allfilterBtn').on('click',function(){
        $("#filtersCard").toggle('slow');
      });
  });
</script>