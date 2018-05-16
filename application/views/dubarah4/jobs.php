<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/bootstrap.min.css" >
    <!-- FontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >    <!-- Additional CSS -->
    <!-- Flag Icon CSS -->
    <link href="<?php echo base_url()?>asset/css/flag-css.min.css" rel="stylesheet">
    <!-- Bootstrap Social BUTTON CSS -->
    <link href="<?php echo base_url()?>asset/css/bootstrap-social.css" rel="stylesheet">
    <!-- Google WEBONT openSans Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Additional CSS For Design-->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/additional.css">
   <style>
     
			.form-control::-webkit-input-placeholder { color: #c1c1c1; }  /* WebKit, Blink, Edge */
			.form-control:-moz-placeholder { color: #c1c1c1; }  /* Mozilla Firefox 4 to 18 */
			.form-control::-moz-placeholder { color: #c1c1c1; }  /* Mozilla Firefox 19+ */
			.form-control:-ms-input-placeholder { color: #c1c1c1; }  /* Internet Explorer 10-11 */
			.form-control::-ms-input-placeholder { color: #c1c1c1; }  /* Microsoft Edge */
			
			     
     
     
     </style>  <!-- <link rel="stylesheet" href="<?php echo base_url()?>ass/css/bootstrap.min.css"> -->


</head>

<body class="grey-lighten-3">
    <!-- Header Nav After Signin [user navbar] -->
    <?php $this->load->view('dubarah4/header'); ?>
    <img src="<?php echo base_url()?>asset/imgs/jobs_h.svg" class="img-fluid intro-img">
    <div class="jumbotron jumbotron-fluid bg-white pad">
        <div class="container">
            <form method="get" action="<?php echo base_url()?>achievements/">
            <div class="row">
                <div class="col-md-2">
                   <h6 class="mar-top">SEARCH BY :</h6>
                </div>
                <div class="col-md-4">
                    <!-- <input type="text" class="form-control form-control-lg" placeholder="Achievement Type"> -->
                    <select id="ach_type" name="achType" class="form-control">
                        <option selected disabled> </option>
                        <?php foreach ($ach_type as $type): ?>
                            <option value = "<?=$type->ach_typeid?>"><?=$type->type_name ?></option>
                        <?php endforeach?>
                    </select>
                </div>
                <div class="col-md-3">
                    <!-- <input type="text" class="form-control form-control-lg" placeholder="Country"> -->
                    <select name="country" id="country-select" class="form-control">
                        <option disabled selected>Country Of Achievement</option>
                        <?php foreach ($countries->result() as $country):?>
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
                            <div class="col-lg-3  col-sm-3">
                                <div class="card hero-card" 
                                    <a href="<?php echo base_url().'profile/'.$ach->user_id ?>">
                                   
                                    <img class="card-img-top img-hero" src="<?php echo $ach->photo ? base_url().'uploads/users/'.$ach->photo : 'asset/imgs/demo-img-user.png' ?>" alt="Card image cap" alt="Card image cap"></a>
                                    <div class="flagCitizenImgOverlay" style="height: 30px;">
                                        <img class="rounded" src="<?php echo base_url() ?>asset	/imgs/flag_citizen.svg" width="80">
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
                                            	

                                                <p class="text-muted small"><?php 
                                                 $COUBTRY = $cities[(string)((int)$ach->ach_city - 1)]->city_english_name.", ".$countries->result()[(string)((int)$ach->ach_country - 1)]->country_english_name;
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
    <script src="<?php echo base_url()?>asset/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- the following jquery is instade of the slim one above to support ajax #PE$$ -->
    <script src="<?php echo base_url()?>asset/js/jquery-3.2.1.js"></script>
    <script src="<?php echo base_url()?>asset/js/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
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