<!-- Header -->
<?php $this->load->view('heroCitizen/common/header'); ?>
<div class="wrapper grey-lighten-3">
  <img src="<?php echo base_url()?>asset/imgs/hero.svg" class="img-fluid intro-img">
  <div class="jumbotron jumbotron-fluid bg-white pad">
    <div class="container">
      <form method="get" action="<?php echo base_url()?>achievements/">
        <div class="row">
          <div class="col-md-2">
            <h6 class="mar-top">SEARCH BY :</h6>
          </div>
          <div class="col-md-4">
            <select id="ach_type" name="achType" class="form-control">
              <option selected disabled>Achivment Type</option>
              <?php foreach ($ach_type as $type): ?>
                  <option value = "<?=$type->ach_typeid?>"><?=$type->type_name ?></option>
              <?php endforeach?>
            </select>
          </div>
          <div class="col-md-3">
            <select name="country" id="country-select" class="form-control">
              <option disabled selected>Country Of Achievement</option>
              <?php foreach ($countries as $country):?>
                <option value="<?php echo $country->country_id?>">
                  <?php echo $country->country_english_name?>
                </option>
              <?php endforeach?>
            </select>
          </div>
          <div class="col-md-2">
            <input type="text" name="search" class="form-control" placeholder="Search any word">
          </div>
          <div class="col-md-1">
            <button type="submit" class="btn btn-secondary">Find</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="container" style="    max-width: 950px;">
    <div class="row col">
      <p>SORT BY :  
        <a href="<?php echo base_url().'achievements/1/'.($url_ext ? "$url_ext&sort=all" : "?sort=all")?>" class="btn btn-link"><?php echo LANG() == 'en' ? 'All' : 'الكل' ?></a>
        <a href="<?php echo base_url().'achievements/1/'.($url_ext ? "$url_ext&sort=heros" : "?sort=heros")?>" class="btn btn-link">Heros</a>
      </p>
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
        <div class="col-lg-3 col-sm-3" style="padding-left: 5px;
    padding-right: 5px;">
          <div class="card hero-card"> 
            <a href="<?php echo base_url().'profile/'.$ach->user_id ?>">
              <img class="card-img-top img-hero" src="<?php echo $ach->photo ? base_url().'uploads/users/'.$ach->photo : base_url().'asset/imgs/demo-img-user.png' ?>" alt="Card image cap" alt="Card image cap">
            </a>
            <?php if($ach->hero):?>
              <div class="flagCitizenImgOverlay" style="height: 30px;">
                <img class="rounded" src="<?php echo base_url() ?>asset	/imgs/flag_citizen.svg" width="80">
              </div>
            <?php endif;?>
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
                <span class="flag flag-<?php echo strtolower($ach->country_arabic_name) ?> flag-1x mar-right"></span>
                <div class="media-body">
                  <p class="text-muted small">
                  <?php $COUBTRY = $cities[(string)((int)$ach->ach_city - 1)]->city_english_name.", ".$countries[(string)((int)$ach->ach_country - 1)]->country_english_name;
                   echo substr($COUBTRY,0,17) . '...';?>
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
      <?php endforeach ?>
      <!-- if no result come back -->
      <?php if(empty($achs)){
          echo '<div class="col"><b>There Is No Achievements To Show!</b></div>';
      } ?>
      <div class="container d-flex justify-content-center" style="padding-top: 1rem">
        <!-- check if pagenation is needed -->
        <?php if ($num_rows > 8): ?>
          <nav aria-label="Page navigation example mr-auto ml-auto">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="<?php echo base_url()."achievements/1"?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <?php if ($page - 4 >= 1): ?>
                <li class="page-item"><a class="page-link" href="<?php echo base_url()."achievements/".($page - 4).$url_ext ?>"><?php echo $page - 4 ?></a></li>
              <?php endif ?>
              <?php if ($page - 3 >= 1): ?>
                <li class="page-item"><a class="page-link" href="<?php echo base_url()."achievements/".($page - 3).$url_ext ?>"><?php echo $page - 3 ?></a></li>
              <?php endif ?>
              <?php if ($page - 2 >= 1): ?>
                <li class="page-item"><a class="page-link" href="<?php echo base_url()."achievements/".($page - 2).$url_ext ?>"><?php echo $page - 2 ?></a></li>
              <?php endif ?>
              <?php if ($page - 1 >= 1): ?>
                <li class="page-item"><a class="page-link" href="<?php echo base_url()."achievements/".($page - 1).$url_ext ?>"><?php echo $page - 1 ?></a></li>
              <?php endif ?>
              <li class="page-item active"><a class="page-link" href="#"><?php echo $page ?></a></li>
              <?php if ($page + 1 <= $pages): ?>
                <li class="page-item"><a class="page-link" href="<?php echo base_url()."achievements/".($page + 1).$url_ext ?>"><?php echo $page + 1 ?></a></li>
              <?php endif ?>
              <?php if ($page + 2 <= $pages): ?>
                <li class="page-item"><a class="page-link" href="<?php echo base_url()."achievements/".($page + 2).$url_ext ?>"><?php echo $page + 2 ?></a></li>
              <?php endif ?>
              <?php if ($page + 3 <= $pages): ?>
                <li class="page-item"><a class="page-link" href="<?php echo base_url()."achievements/".($page + 3).$url_ext ?>"><?php echo $page + 3 ?></a></li>
              <?php endif ?>
              <?php if ($page + 4 <= $pages): ?>
                <li class="page-item"><a class="page-link" href="<?php echo base_url()."achievements/".($page + 4).$url_ext ?>"><?php echo $page + 4 ?></a></li>
              <?php endif ?>
              <li class="page-item">
                <a class="page-link" href="<?php echo base_url()."achievements/".($pages).$url_ext ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        <?php endif ?>
      </div>
      <div class="row col mt-3">
        <p><span class="font-weight-bold">TOP HERO CITIZENS</span> / Insights from top leaders</p>
      </div>

      <div class="divider"></div>
    </div>
  </div>
</div>
    <!-- footer -->
    <?php $this->load->view('heroCitizen/common/footer'); ?>     

</body>
</html>