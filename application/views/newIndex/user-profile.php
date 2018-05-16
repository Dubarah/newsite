<!-- Header  -->
<?php $this->load->view('heroCitizen/common/header'); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/gallery-grid.css">
<style type="text/css">

/*test*/
.jum{
	
	padding-bottom: 25px;
    padding-top: 25px;
    padding-left: 40px;
    padding-right: 40px;
}

.burger-1, .burger-3, .burger-2 {
  left: 0;
  position: absolute;
  width: 36px;
  height: 0;
  border: 2px solid #928a8a;
  border-radius: 2px;
  transition: all 0.25s cubic-bezier(1, 1.64, 1, 1.2);
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  box-sizing: border-box;
}
.burger:hover .burger-1, .burger:hover .burger-3, .burger:hover .burger-2 {
  box-shadow: 0 0 3px #fff;
}

.burger {
  position: relative;
  height: 36px;
  width: 36px;
  cursor: pointer;
  margin: 0 auto;
}

.burger-1 {
  top: 6px;
}
.burger.active .burger-1 {
  -webkit-transform: translateY(10px) rotate(45deg);
          transform: translateY(10px) rotate(45deg);
}

.burger-3 {
  top: 26px;
}
.burger.active .burger-3 {
  -webkit-transform: translateY(-10px) rotate(-45deg);
          transform: translateY(-10px) rotate(-45deg);
}

.burger-2 {
  top: 16px;
  transition: all 0.25s, border-radius 0.7s cubic-bezier(1, 1.64, 1, 1.2);
}
.burger.active .burger-2 {
  width: 36px;
  height: 36px;
  border-width: 4px;
  border-radius: 50%;
  -webkit-transform: translateY(-16px) scale(1.5);
          transform: translateY(-16px) scale(1.5);
  border-width: 2.6666666667px;
  border-color: #928a8a;
  transition: all 0.25s cubic-bezier(1, 1.64, 1, 1.2), border-radius 0.01s cubic-bezier(1, 1.64, 1, 1.2);
}

  button, html [type="button"], [type="reset"], [type="submit"] {
    -webkit-appearance: none;
}




/*end test*/



    /*upload user photo css EDITED */
    .user-images {
        margin-top:0px!important;
        margin-right:0px!important;
        width:20%;
        width:100%;
    }
    #profile-upload{
        background-image:url('');
        
        background-size:cover;
        background-position: center;
        height: 200px!important; max-width: 200px!important;
        border: 5px solid #fff;
        position:relative;
        border-radius:5px!important;
        overflow:hidden;
    }
</style>
<!-- Cover Photo -->
<img src="<?php echo base_url() ?>asset/imgs/cover.png" class="du-cover-image">
<div class="container user-info">
  <div class="media du-profile">
    <?php if($profile){ ?> <!-- private -->
      <form method="post" id="photo_up" enctype="multipart/form-data" action="">
        <div class="user-images" id='profile-upload' style="
        width: 200px;
        background-image: url('<?php echo $user->photo ? base_url().'uploads/users/'.$user->photo : base_url().'ass/images/image_profile.jpg' ?>')">
        <div class="hvr-profile-img"><input   type="file" name="fs_image1" id='getval' onchange="photo_up()"  class="upload w180" title="Dimensions 180 X 180" id="imag"></div>
        <i class="fa fa-camera"></i>
         </div>
      </form>
    <?php }else{ ?>
      <img class="mr-3 du-profile-image" src="<?php echo $user->photo ? base_url().'uploads/users/'.$user->photo : base_url().'ass/images/image_profile.jpg' ?>" alt="Generic placeholder image" width="200" height="200" style="object-fit: cover;">
    <?php } ?>
    <div class="media-body du-profile-info">
    <?php if(!empty($hero)){ ?>
      <h4 class="mt-0 "style="font-weight: bold"><?php echo ucfirst( $user->username) ." ". ucfirst($user->lastname)." "; echo $hero->verified ? '<i class="fa fa-check-circle red-text" aria-hidden="true"></i>' : '' ; echo $hero->hero ? '<img class="heroCitizen" src="'.base_url().'asset/imgs/flag_citizen.svg"> <span class="text-muted">Since '. Date("M Y", strtotime($hero->became_hero_date)).'</span>' : '';?></h4>
      <div class="row mar-top ">
        <div class="col-lg-8">
          <h6><?php echo $user->job?></h6>
        </div>
    <?php }else{ ?>
      <h4 class="mt-0"><?php echo ucfirst( $user->username) ." ". ucfirst($user->lastname)." ";?> <img class="heroCitizen" src="<?php echo base_url() ?>asset/imgs/flag_citizen.svg"> <span class="text-muted">Since Sep 2017</span></h4>
      <div class="row mar-top ">
        <div class="col-lg-8">
          <h6></h6>
        </div>
    <?php } ?>
        <div class="col-lg-2">
          <?php echo $profile ? '<h6><a  style="text-decoration: none;color:black;" href="'.base_url().'my_profile"><i class="fa fa-cog" aria-hidden="true"></i> Edit</a></h6>' : ''?>
        </div>
      </div>
      <div class="row mar-top ">
          <div class="col-lg-3">
            <h6 class="text-muted t_likes"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <?php echo $t_likes ? $t_likes : '0' ?> </h6>
          </div>
          <div class="col-lg-4">
            <h6 class="text-muted t_dislikes"><i class="fa fa-thumbs-down" aria-hidden="true"></i> <?php echo $t_dislikes ? $t_dislikes : '0' ?> </h6>
          </div>
          <div class="col-lg-4">
            <?php if(user_id()&& !empty($hero)){
              $button = $follow[$hero->hero_id] ? '<button type="button" class="btn btn-dark btn-sm unfollow" recom="0" heroId="'.$hero->hero_id.'">Unfollow</button></h6>' : '<button type="button" class="btn btn-dark btn-sm follow" recom="0" heroId="'.$hero->hero_id.'">Follow</button></h5>';
              echo '<h6><span class="text-muted followers" recom="0" heroId="'.$hero->hero_id.'" followers="'.$followers[$hero->hero_id].'">'.$followers[$hero->hero_id].' followers </span>'.$button ;
            }?>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <h4 class="user-name-about"><i class="fa fa-user-o" aria-hidden="true"></i> About <?php echo $user->username?> <span class="flag flag-<?php echo isset($place->country)? strtolower($place->nm)  : ''; ?> flag-1x mar-right"></span>
          <span class="user-country"><?php echo (isset($place->city) ? $place->city .', ' : '') . (isset($place->country) ? $place->country : '' );?></span>
      </h4>
      <p style="    margin-left: 30px;"><?php    echo $user->about == ''? $profile?'<a  style="text-decoration: none;color:#e7412c;" href="'.base_url().'my_profile">Add Your Bio!</a>': 'No Bio Yet' : $user->about ?></p>
      <div class="divider"></div>
      <h4 class="user-name-about mar-top"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Achievments</h4>
      <?php if(!empty($achs)){ ?>
        <?php foreach ($achs as $ach):?>
          <div class="jumbotron mar-top jum" style="border: 2px solid #cccccc  ;">
            <!-- Edit Dropdown -->
            <?php if($profile): ?>
                <div class="dropdown">
                    <button type="button" class="close mar-left dropdown-toggle hide-after-icon" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                        <a class="dropdown-item" href="<?php echo base_url().'editAchievement/'.$ach->hero_id.'/'.$ach->ach_id ?>">Edit this entry</a>
                        <div class="dropdown-divider"></div>
                        <?php echo !$ach->active ? 
                        '<a class="dropdown-item primary" ach="'.$ach->ach_id.'" >Make it Primary achievment</a>
                        <div class="dropdown-divider"></div>' : '<a class="dropdown-item primary" ach="'.$ach->ach_id.'" hidden="hidden" >Make it Primary achievment</a>
                        <div class="dropdown-divider" hidden="hidden" ></div>' ?>
                        <a class="dropdown-item" href="#">Boost and get more followers</a>
                    </div>
                </div>
            <?php endif?>  
                   <a type="button" class="close mar-right acc no-border collapsed" data-toggle="collapse" data-parent="#achievments<?php echo $ach->ach_id?>" href="#achievments<?php echo $ach->ach_id?>" aria-expanded="<?php echo $ach->active == 1? 'true' : 'false' ?> " aria-controls="exampleAccordion2">
    
  <div class="burger <?php echo $ach->active == 1? 'active' : '' ?> " style="color: black">
    <div class="burger-1"></div>
    <div class="burger-2"></div>
    <div class="burger-3"></div>
</div>
      </a>                          
        
            <div class="media">
              <img class="align-self-center mr-3 user-main-achivmnet-logo" src="<?php echo $ach->ach_logo ? base_url().'uploads/achievements/logos/'.$ach->ach_logo : base_url().'ass/images/image_profile.jpg' ?>" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0"><b><?php echo ucfirst($ach->ach_title)?></b></h5>
                <?php echo Date('M j, Y',$ach->ach_date) ?>
              </div>
            </div>
            <h6 class="mar-top">Achievement Type : <span style="    font-weight: normal;"><?php echo $ach->achType?></span></h6>
            <h6 class="mar-top"><span class="flag flag-<?php echo strtolower($ach->country_arabic_name); ?> flag-2x mar-right"></span><span><?php echo $ach->city.', '.$ach->country?></span></h6>
              
            <div id="achievments<?php echo $ach->ach_id?>" class="collapse <?php echo $ach->active == 1? 'show' : '' ?>" role="tabpanel">
              <p><?php echo $ach->ach_exp?></p>

              <div class="gallery-container">
              	 <div class="tz-gallery">
              	 	    <div class="row">
                <?php foreach ($ach_data[$ach->ach_id]['imgs'] as $img):?>
                    <div class="col-lg-3">
                    	 <a class="lightbox" href="<?php echo base_url().'uploads/achievements/pictures/'.$img->img?>">
                    <img class="achivment-imgs-userprofile" src="<?php echo base_url().'uploads/achievements/pictures/'.$img->img?>">
                  </a>
                    </div>
                <?php endforeach?>
                </div>
                </div>
                <div class="divider"></div>
              </div>
              <?php if(!empty($ach->youtube) && filter_var($ach->youtube, FILTER_VALIDATE_URL)):?>
                <h6 class="mar-top"><b>Youtube : </b></h6>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="<?php echo str_replace('watch?v=', 'embed/', $ach->youtube);?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
                <div class="divider"></div>
              <?php endif?>
              <?php if(!empty($ach->website)):?>
                <h6 class="mar-top"><b>Website : </b> <?php echo $ach->website?> </h6>
              <?php endif?>
              <?php if(!empty($ach->facebook)):?>
                <h6 class="mar-top"><b>Facebook : </b><?php echo $ach->facebook?> </h6>
              <?php endif?>
              <?php if(!empty($ach->twitter)):?>
                <h6 class="mar-top"><b>Twitter : </b> <?php echo $ach->twitter?> </h6>
              <?php endif?>
              <?php if(!empty($ach->linkedin)):?>
                <h6 class="mar-top"><b>Linkedin : </b> <?php echo $ach->linkedin?> </h6>
              <?php endif?>
              <?php if(!empty($ach->instagram)):?>
                <h6 class="mar-top"><b>Instagram : </b> <?php echo $ach->instagram?> </h6>
              <?php endif?>
            </div>
            <?php if(is_logged()):?>
              <div class="divider"></div>
             
              <div class="row mar-top" style="margin-top: 30px">
                <div class="col-lg-8">
                  <h6>
                    <b class="mar-right">Do you like this?</b>&nbsp;
                    <span class="text-muted <?php echo $ach_data[$ach->ach_id]['ck_like'] ? 'liked' : 'like'?>" achId="<?php echo $ach->ach_id ?>" likes="<?php echo $ach_data[$ach->ach_id]['likes']?>"><i class="fa fa-thumbs-o-up fa-lg" aria-hidden="true"></i> <?php echo $ach_data[$ach->ach_id]['likes']?> </span>&nbsp;&nbsp;
                    <span class="text-muted <?php echo $ach_data[$ach->ach_id]['ck_dislike'] ? 'disliked' : 'dislike'?>" achId="<?php echo $ach->ach_id ?>" dislikes="<?php echo $ach_data[$ach->ach_id]['dislikes']?>"><i class="fa fa-thumbs-o-down fa-lg" aria-hidden="true"></i> <?php echo $ach_data[$ach->ach_id]['dislikes']?> </span>
                  </h6>
                  
                  </div>
                </div>
              
            <?php endif?>
          </div>  
        <?php endforeach?>
      <?php }else{ 
        echo $profile ? '<a class="btn btn-default" href="'.base_url().'add-achi">add achievement!</a>' : '<p style="margin-left: 30px;">Not A Hero yet</p>';
      }?>
    </div>
    <!-- Right Side -->
    <div class="col-lg-4">
      <!-- business section  -->
       <h4><b>My Business</b></h4>
       
       <?php if($have_bus ==1) {?>
       <?php foreach ($bus as $value): ?>
           
       
      <div class="media mar-top">
      	<a href="<?php echo base_url().'business-profile/'.$value->id ?>">
          <img class="align-self-center mr-3 user-side-achivmnet-logo" style="border-radius: 4px;" src="<?php echo base_url().$value->cover?>" alt="Generic placeholder image">
         	</a>
          <div class="media-body">
          	<a href="<?php echo base_url().'business-profile/'.$value->id ?>">
              <h4 class="mt-0"><b><?php echo $value->name ?></b></h4>
              </a>
             <?php echo  Date("M Y", strtotime($value->created_date))?>
          </div>
      </div>
      <?php endforeach ?>
      <?php }else{?>  
      	
      	 
      	  <?php echo $profile ? '<a class="btn btn-default" href="'.base_url().'add-achi">add a Business!</a>' : ' <p class="mar-left">No Business yet</p>';?>
      	
      	<?php }?>
      
    
      <div class="divider"></div>

      <h4 class="mar-top"><b>Profile View</b></h4>
    
      <p class="mar-left"><?php
      	$v =$views+1;
       echo $profile?  $views.'  views' :     $v.' views' ?></p>
      <div class="divider"></div>
      <h4 class="mar-top"><b>Skills (<?php echo count($skills)?>)</b></h4>
      <?php if(!$skills == 0){ ?>
      <?php foreach ($skills as $skill):?>
          <div class="user-skill"><?php echo $skill->skill_name?></div>
      <?php endforeach?>
      
      <?php  }else {?>
      	
      <?php echo $profile ? '<a class="btn btn-default" href="'.base_url().'add-achi">Add Skills!</a>' : ' <p class="mar-left">No Skills Yet</p>';?>
    
    <?php  } ?>
      
      <?php if(isset($re_achs)&&!empty($re_achs)&&$this->session->userdata('user_id')):?>
        <div class="divider"></div>
        <h4 class="mar-top"><b>Recomanded for you</b></h4>
           
        <?php foreach($re_achs as $ach):?>
          <div class="row">
            <div class="col-sm-12 col-lg-9">
            	<div class="card hero-card"> 
                    <a href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                        <img class="card-img-top img-hero" src="<?php echo $ach->photo ? base_url().'uploads/users/'.$ach->photo : 'asset/imgs/demo-img-user.png' ?>" alt="Card image cap" alt="Card image cap">
                    </a>
                    <div class="flagCitizenImgOverlay" style="height: 30px;">
                        <img src="<?php echo base_url() ?>asset	/imgs/flag_citizen.svg" width="80">
                    </div>
                    <div class="card-body">
                        <a style="color: black;" href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                        <h class="card-title"><?php echo $ach->username ." ".$ach->lastname." ".($ach->verified ? '<i class="fa fa-check-circle red-text" aria-hidden="true"></i>' : ''); ?></h5></a>
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
                                <p class="text-muted small"><?php 
                                 $COUBTRY = $ach->ach_city.', '. $ach->ach_country;
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
                    <div class="card-body">
                        <div class="row mar-top">
                            <div class="col">
                                <p class="text-muted followers" heroId="<?php echo $ach->hero_id?>" followers="<?php echo $re_achs_d['followers'][$ach->hero_id]?>"><?php echo $re_achs_d['followers'][$ach->hero_id]?> followers</p>
                            </div>
                            <?php if($this->session->userdata('user_id')){
                              if($re_achs_d['follow'][$ach->hero_id]){
                                echo "<div class='col text-right following'>
                                  <a href='JavaScript:void(0);' class='btn btn-sm btn-outline-danger unfollow' recom='1' heroId='".$ach->hero_id."'>Unfollow</a>
                                </div>";
                              }else{
                                echo "<div class='col text-right following'>
                                  <a href='JavaScript:void(0);' class='btn btn-sm btn-outline-success follow' recom='1' heroId='".$ach->hero_id."'>Follow</a>
                                </div>";
                              } 
                            }?>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        <?php endforeach?>  
      <?php endif?>      
      
       
    </div>
  </div>
</div>
<div style="background-color: #e6e6e6;
    padding-top: 2px;
    padding-bottom: 2px;"></div>
<!-- footer #PE$$ -->
<?php $this->load->view('heroCitizen/common/footer'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>

   
<script type="text/javascript">
var burgers = document.querySelectorAll('.burger');

for (var i = burgers.length - 1; i >=0; i -= 1) {
  burgers[i].addEventListener('click', function () {
  	this.classList.toggle('active');
  });
}
 baguetteBox.run('.tz-gallery');
  $(document).ready(function(){
     
    $('.primary').click(function(){
        var element = $(this);
        var ach_id = $(this).attr('ach');
        var hero_id = <?php echo $hero->hero_id?>;
        $.ajax({
            url: "<?php echo base_url()?>primary/"+ach_id+"/"+hero_id,
            success: function(data){
                if(data){
                    $('[hidden="hidden"]').removeAttr('hidden');
                    element.next().attr('hidden', 'hidden');
                    element.attr('hidden', 'hidden');
                    title  = '<?php echo trans('success'); ?>';
                    text   = '<?php echo trans('suc_primary')?>';
                    type   = 'success';
                    swal({
                        title: title,
                        text: text,
                        type: type,
                        timer: 6000,
                        html: true,
                        showConfirmButton:true
                    });
                }else{
                    console.log('error');
                }
            }
        });
    });
    //unfollow #PE$$
    $(document.body).on('click','.unfollow', function(){
        var heroId = $(this).attr('heroid');
        var recom = $(this).attr('recom');
        var link = "<?php echo base_url()?>unfollow/" + heroId;
        $.ajax({url: link,
            success: function(data){
              if(data){
                $('.unfollow[heroid="'+heroId+'"]').html('Follow');
                if(recom == '1'){
                    $('.unfollow[heroid="'+heroId+'"]').removeClass('btn-outline-danger unfollow').addClass('btn-outline-success follow');
                }else{
                    $('.unfollow[heroid="'+heroId+'"]').removeClass('unfollow').addClass('follow');
                }
                var followers = $('.followers[heroid ="'+heroId+'"]').attr('followers');
                $('.followers[heroid ="'+heroId+'"]').html(parseInt(followers) -1 +' followers ').attr('followers',parseInt(followers)-1);
              }
            }
        });
    });
    //follow #PE$$
    $(document.body).on('click','.follow', function(){
        var heroId = $(this).attr('heroid');
        var recom = $(this).attr('recom');
        var link = "<?php echo base_url()?>follow/" + heroId;
        $.ajax({url: link,
            success: function(data){
              if(data){
                $('.follow[heroid="'+heroId+'"]').html('Unfollow');
                if(recom == '1'){
                    $('.follow[heroid="'+heroId+'"]').removeClass('btn-outline-success follow').addClass('btn-outline-danger unfollow');
                }else{
                    $('.follow[heroid="'+heroId+'"]').removeClass('follow').addClass('unfollow');
                }
                var followers = $('.followers[heroid ="'+heroId+'"]').attr('followers');
                $('.followers[heroid ="'+heroId+'"]').html(parseInt(followers) +1 +' followers ').attr('followers',parseInt(followers)+1);
              }
            }
        });
    });

    //check if Liked or Disliked #PE$$
    $('.liked i').replaceWith('<i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i>');
    $('.disliked i').replaceWith('<i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i>');

    //like #PE$$
    $(".jumbotron").on('click','.like', function(){
        var achId = $(this).attr('achid');
        var link = "<?php echo base_url()?>like/" + achId;
        $.ajax({url: link,
            success: function(data){
              if(data){
                var likes = $('.like[achid ="'+achId+'"]').attr('likes');
                //alert(likes);
                likes = parseInt(likes) +1;
                $('.like[achid="'+achId+'"]').html('<i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i> '+ likes + ' ' ).attr('likes',likes);
                $('.like[achid="'+achId+'"]').removeClass('like').addClass('liked');
                // $('.t_likes').html('<i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i> '+ likes + ' ' );
              }
            }
        });
    });

    //cancel like #PE$$
    $(".jumbotron").on('click','.liked', function(){
        var achId = $(this).attr('achid');
        var link = "<?php echo base_url()?>c_like/" + achId;
        $.ajax({url: link,
            success: function(data){
              if(data){
                var likes = $('.liked[achid ="'+achId+'"]').attr('likes');
                //alert(likes);
                likes = parseInt(likes) -1;
                $('.liked[achid="'+achId+'"]').html('<i class="fa fa-thumbs-o-up fa-lg" aria-hidden="true"></i> '+ likes + ' ' ).attr('likes',likes);
                $('.liked[achid="'+achId+'"]').removeClass('liked').addClass('like');
                // $('.t_likes').html('<i class="fa fa-thumbs-up fa-lg" aria-hidden="true"></i> '+ likes + ' ' );
              }
            }
        });
    });

    //dislike #PE$$
    $(".jumbotron").on('click','.dislike', function(){
        var achId = $(this).attr('achid');
        var link = "<?php echo base_url()?>dislike/" + achId;
        $.ajax({url: link,
            success: function(data){
              if(data){
                var dislikes = $('.dislike[achid ="'+achId+'"]').attr('dislikes');
                //alert(likes);
                dislikes = parseInt(dislikes) +1;
                $('.dislike[achid="'+achId+'"]').html('<i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i> '+ dislikes + ' ' ).attr('dislikes',dislikes);
                $('.dislike[achid="'+achId+'"]').removeClass('dislike').addClass('disliked');
                // $('.t_dislikes').html('<i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i> '+ dislikes + ' ' );
              }
            }
        });
    });

    //cancel dislike #PE$$
    $(".jumbotron").on('click','.disliked', function(){
        var achId = $(this).attr('achid');
        var link = "<?php echo base_url()?>c_dislike/" + achId;
        $.ajax({url: link,
            success: function(data){
              if(data){
                var dislikes = $('.disliked[achid ="'+achId+'"]').attr('dislikes');
                //alert(likes);
                dislikes = parseInt(dislikes) -1;
                $('.disliked[achid="'+achId+'"]').html('<i class="fa fa-thumbs-o-down fa-lg" aria-hidden="true"></i> '+ dislikes + ' ' ).attr('dislikes',dislikes);
                $('.disliked[achid="'+achId+'"]').removeClass('disliked').addClass('dislike');
                // $('.t_dislikes').html('<i class="fa fa-thumbs-down fa-lg" aria-hidden="true"></i> '+ dislikes + ' ' );
              }
            }
        });
    });

  });
    
    //update photo dynamicly 
        document.getElementById('getval').addEventListener('change', readURL, true);
        function readURL(){
            var file = document.getElementById("getval").files[0];
            var reader = new FileReader();
            reader.onloadend = function(){
                document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";        
            }
            if(file){
                reader.readAsDataURL(file);
            }else{
            }
        }
        function photo_up()  {
            if (typeof FormData !== 'undefined') {

            // send the formData
            var formData = new FormData( $("#photo_up")[0] );

                $.ajax({
                    url : '<?php echo base_url() ?>up_img',  // Controller URL
                    type : 'POST',
                    data : formData,
                    async : false,
                    cache : false,
                    contentType : false,
                    processData : false,
                    success : function(data) {
                        res = JSON.parse(data);
                       
                        
                        if (res[0]) {
                            swal({
                        title: '<?php echo trans('success'); ?>',
                        text: '<?php echo trans('img_up'); ?>' ,
                        type: 'success',
                        html:true,
                        
                        showConfirmButton:true
                    });
                            
                        } else if (res[1]){
                            swal({
                        title: '<?php echo trans('fail'); ?>',
                        text: res[1] ,
                        type: 'error',
                         html:true,
                        
                        showConfirmButton:true
                    });
                        } else {
              swal({
                        title: '<?php echo trans('fail'); ?>',
                        text: '<?php echo trans('try_agin'); ?>' ,
                        type: 'error',
                        
                        showConfirmButton:true
                    });
                        };
                    }
                });
        
            } else {
               message("Your Browser Don't support FormData API! Use IE 10 or Above!");
            }   
        };

</script>

</body>
</html>