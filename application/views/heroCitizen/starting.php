<!-- Header #PE$$ -->

 <?php
// echo "<pre>";
 // print_r($achs);
// exit; ?>
<?php $this->load->view('heroCitizen/common/header'); ?>
<div class="wrapper" style="background-color: #f2f2f2;">
<!-- Cover Photo -->
<img src="<?php echo base_url()?>asset/imgs/headerCitizen.svg" class="img-fluid intro-img">
  <div class="container" style="max-width: 1000px;">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-3">
            <h4 class="mar-top"><span class="font-weight-bold"> 13,245 </span> Heros</h4>
          </div>
          <div class="col-3">
            <h4 class="mar-top"><span class="font-weight-bold"> 18 </span> Countries</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="divider"></div>
    <div class="row big-pad-bot" style="padding-top: 61px;">
      <div class="col-6">
        <h2 >Are You Hero ?</h1>
        <p>Dubarah always proud of you and your achievments, so it’s your chance now to show the world what you did for the comninity you are based on, (Starting a Business, voluntering, sucess etc .. be proud and let us proud too.</p>
      </div>
      <div class="col-6">
        <form method="post" action="<?php echo base_url()?>add-achit">
          <div class="row">
            <div class="col-lg-6">
              <input name="fName"  class="form-control form-control-lg mar-right mar-bot no-border " type="text" value="<?=set_value('fName')?>" placeholder="First Name">
              <span style="color: red"><?php echo form_error('fName') ? form_error('fName') : '' ?></span>
            </div>
            <div class="col-lg-6">
              <input name= "lName" class="form-control form-control-lg  mar-bot no-border " type="text" value="<?=set_value('lName')?>" placeholder="Last Name">
              <span style="color: red"><?php echo form_error('lName') ? form_error('lName') : '' ?></span>
            </div>
          </div>
          <div class="row">
          	<div class="col-lg-12">
              <input name= "prof" class="form-control form-control-lg mar-bot no-border " type="text" value="<?=set_value('prof')?>" placeholder="Professional Title ( 22 Characters )">
              <span style="color: red"><?php echo form_error('prof') ? form_error('prof') : '' ?></span>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <select name="NNL" style="color: #c1c1c1;" class="form-control form-control-lg no-border" placeholder="Nationality" >
                <option disabled selected>Nationality</option>
                <?php foreach ($nations->result() as $nation):?>
                  <option value="<?php echo $nation->nation_id?>">
                    <?php echo $nation->nationality?>
                  </option>
                <?php endforeach?>
              </select>
              <span style="color: red"><?php echo form_error('NNL') ? form_error('NNL') : '' ?></span>
            </div>
            <div class="col-lg-6">
              <button style="float: right;color: #212529; background-color: #ffffff;border-color: #212529;" type="submit" class="btn btn-secondary btn-lg btn-lg">Next</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  
  <?php if(!empty($achs)):?>
  <div class="jumbotron jumbotron-fluid">
    <div class="container" style="max-width: 1000px;">
      <h3 class="">Top Listed Heros</h1>
    </div>
    <div class="container" style="max-width: 950px;"> 
      <div class="row">
        <?php foreach ($achs as $ach):?>
          <div class="col-lg-3  col-sm-3">
            <div class="card hero-card"> 
              <a href="<?php echo base_url().'profile/'.$ach->user_id ?>">
              <img class="card-img-top img-hero" src="<?php echo $ach->photo ? base_url().'uploads/users/'.$ach->photo : 'asset/imgs/demo-img-user.png' ?>" alt="Card image cap" /></a>
              <div class="flagCitizenImgOverlay" style="height: 30px;">
                  <img src="<?php echo base_url() ?>asset	/imgs/flag_citizen.svg" width="80" />
              </div>
              <div class="card-body">
                <a style="color: black;" href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                <h5 class="card-title"><?php echo $ach->username ." ".$ach->lastname." ".($ach->verified ? '<i class="fa fa-check-circle red-text" aria-hidden="true"></i>' : ''); ?></h5></a>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $ach->job ?></h6>
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
                    <p class="text-muted small">
                      <?php 
          	           $COUBTRY = $ach->ach_city.', '. $ach->ach_country ;
                     echo substr($COUBTRY,0,17) . '...';
                     ?>
                    </p>
                  </div>
                </div>
              </div>

              <div class="card-body grey-lighten-3">
                  <div class="media" style="height: 51px;">
                      <img class="d-flex mr-3" src="<?php echo $ach->ach_logo ? base_url().'uploads/achievements/logos/'.$ach->ach_logo : 'http://via.placeholder.com/100x100' ?>" width="50" height="50">
                      <div class="media-body">
                          <h6 class="mt-0"><?php  $title = $ach->ach_title; echo  substr($title,0,11) ?></h6>
                          <p class="text-muted small"><?php echo Date('M j, Y',$ach->ach_date) ?></p>
                      </div>
                  </div>
              </div>

              <div class="card-body" style="height: 39px;">
                  <div class="row mar-top" style="margin-top: 4px;">
                      <div class="col">
                          <p style="font-size: 11px;" class="text-muted followers" heroId="<?php echo $ach->hero_id?>" followers="<?php echo $followers[$ach->hero_id]?>"><?php echo $followers[$ach->hero_id]?> followers</p>
                      </div>
                      <?php if($this->session->userdata('user_id')){
                        if($follow[$ach->hero_id]){
                          echo "<div  class='col text-right following'>
                            <a href='JavaScript:void(0);' style='margin-top: -4px;font-size: 12px;' class='btn btn-sm btn-outline-danger unfollow'  heroId='".$ach->hero_id."'>Unfollow</a>
                          </div>";
                        }else{
                          echo "<div class='col text-right following'>
                            <a  href='JavaScript:void(0);'style='margin-top: -4px;font-size: 12px;' class='btn btn-sm btn-outline-success follow' 
                            heroId='".$ach->hero_id."'>Follow</a>
                          </div>";
                        } 
                      }?>
                  </div>
              </div>
            </div>
          </div>
        <?php endforeach?>
      </div>
      <div class="row col-sm-12">
          <button onclick="location.href ='<?php echo base_url()?>achievements';" type="button" class="btn btn-outline-dark btn-lg mar mx-auto">More</button>
      </div>
    </div>
  </div>
  <?php endif ?>
</div>
<!-- footer #PE$$ -->
<?php $this->load->view('heroCitizen/common/footer'); ?>