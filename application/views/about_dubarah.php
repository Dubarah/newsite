<!DOCTYPE html>
  <?php   if ($this->session->userdata('user_id')){
    $notif          = get_statics();
    $new_nots       = $notif['notifcs'];
    $old_nots       = $notif['oldnotif'];
    $num_row        = $notif['num_row'];
    $this->session->set_userdata('dub_num', $notif['my_dubarah_num']);
    }
    if (!$this->session->userdata('social')){
        social();
    } 
    
?>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php echo base_url()?>asset/css/bootstrap.min.css" >
    <!-- Bootstrap Social BUTTON CSS -->
    <link href="<?php echo base_url()?>asset/css/bootstrap-social.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <!-- Google WEBONT openSans Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <!-- Additional CSS -->
    <!-- Flag Icon CSS -->
    <link href="<?php echo base_url()?>asset/css/flag-css.min.css" rel="stylesheet">
    <!-- Additional CSS For Design-->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/css/additional.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/toastr.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>ass/css/sweetalert.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        body, html {
            height: 100%;
            margin: 0;
            background-color: #f1f1f1;
        }
        .hidden-sm ,.hidden-xs ,.hidden-md{
	@media screen and (min-width: 1400px;)
	display: none;
}

.navbar-toggle {
    position: relative;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-right: 15px;
    margin-bottom: 8px;
    background-color: #555;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}

@media screen and (min-width: 750px){
	.ul{
	margin: 0;
	padding: 0;
	list-style: none;    
	display: inline-block;
}

.li{
	color: black;
	display: inline-block;
	font-size: 20px;
	line-height: 24px;
	cursor: pointer;
	position: relative;
}
.li:after {
  transition: all 0.3s ease;
  position: absolute;
  bottom: 5px;
  left: 50%;
  display: block;
  overflow: hidden;
  margin-left: 0px;
  width: 0px;
  height: 0px;
  background: black;
  content: '-';
  text-indent: -999em;
  -webkit-border-radius: 7px;
  -moz-border-radius: 7px;
  border-radius: 7px;
}

.navbar-toggle {
    position: relative;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-right: 15px;
    margin-bottom: 8px;
    background-color: #555;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.ul{
	margin: 0;
	padding: 0;
	list-style: none;
	display: inline-block;

}

.li{
	color: black;
	display: inline-block;
	font-size: 20px;
	line-height: 24px;
	cursor: pointer;
	position: relative;
}
.li:after {
  transition: all 0.3s ease;
  position: absolute;
  bottom: 5px;
  left: 50%;
  display: block;
  overflow: hidden;
  margin-left: 0px;
  width: 0px;
  height: 0px;
  background: black;
  content: '-';
  text-indent: -999em;
  -webkit-border-radius: 7px;
  -moz-border-radius: 7px;
  border-radius: 7px;
}


.navbar-nav{
	display: -webkit-box;
}


}


.bb{
    color: #000;
    background-color: #ffffff;
    border-color: #000000;
    border:1px solid black;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    border-radius: 5px;
    margin-top: 9px;
    margin-left: 20px;
}
.bb:hover{
    color: #fff;
    background-color: #222222;
    border-color: #fff;
    border:1px solid black;
    transition: ease-in .15s;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 5px;
    padding-bottom: 5px;
    border-radius: 5px;
}

.img-responsive{
	width: 100%;
	height: auto;
}



@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
  .c{
    max-width: 1100px;
  }
  .bb{
  	margin-left: 65px;
  }
  
}

@media (max-width: 1000px)
{
.container-fluid>.navbar-collapse, .container-fluid>.navbar-header, .container>.navbar-collapse, .container>.navbar-header {
    margin-right: 0;
    margin-left: 0;
    position: relative;
    top: -20px;
    margin-bottom: -20px;
    margin-right: -14px;
    }
}

.square {
  width: 100%;
  height:100%;
      margin-bottom: 38px;
          padding-bottom: 71px;
}

.square:after {
  content: "";
  display: block;
  padding-bottom: 100%;
}

.img-responsive2{
	width: 100%;
	height: auto;
    padding-left:50px;
    padding-right:50px;
    padding-top:35px;
    margin-bottom: 50px;
}

.hr1 {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    width: 85%;
}

.hr2{
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    width: 85%;
}
.hr3{
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    width: 85%;
}

@media screen and (min-width: 1200px){
	.hr1{
    position: relative;
    top: 130px;

}

   .first{
	position: relative;
    top: 100px;
}
   .text{
	position: relative;
	top:115px;
}
   .new{
   	position: relative;
    top: 170px;
   }
   .leader{
    position: relative;
    top: 220px;
   }

   .move{
   
    position:  relative;
    top: 270px;
    margin-left: 30px;

 }

}
@media (max-width: 800px){
    .leader{
      margin-bottom:40px; 
    }

}

@media (min-width: 1200px){
  .hr2{
      position: relative;
      top: 1050px;
    }
  .leader1{
    position: relative;
    top: 390px;
    width: 98%;
}
   .s{
    position: relative;
    top: 450px;
    left: 5px;
   }
   .hr3{
      position: relative;
      top: 900px;
    }
    .leader2{
      position: relative;
      top: 680px;
      left: -170px;
    }
  
  }
@media (max-width: 700px){
 .s{
    position: relative;
    top: 50px;
   
   }

}
.s{
    margin-bottom: 30px;
}

@media (max-width: 900px){
  .hr3{
      position: relative;
      top: 30px;
    }
    
}
@media (min-width: 1200px){
    
    .hr3{
      position: relative;
      top: 480px;
    }
  .leader2{
      position: relative;
      top: 500px;
      left: -30px;
    }
    .ert{
      position: relative;
      top: 550px;
      
    }
    
}
.ert{
  position: relative;
  left: 115px;
}
    </style>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/slick/slick-theme.css"/>


</head>

<body>
<div id="fb-root">
</div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="border" style="background-color: white;">             
    <nav class="navbar navbar-expand-lg navbar-dark" >
        <div class="container b ">
            <a class="navbar-brand col-xs-10 col-md-6 col-sm-6 col-lg-2" href="#">
                <img src="<?php echo base_url() ?>asset/imgs/logo_b.svg" width="250" height="40" alt="">
            </a>
        <div class="hidden-sm hidden-xs hidden-md">
            <div class="rr" style="position: relative;top: 12px;left:150px; ">
            <div  class="fb-like " data-href="https://www.facebook.com/" data-width="200" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true" >
            </div>
            </div>
        </div>
        <form class="form-horizontal">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group has-feedback">
                    <label for="inputSuccess"></label>
                    <div style="position: relative;top: 9px;left: 15px;">
                        <input type="text" class="form-control" placeholder="Search on newsroom" style="height: 25px;">
                        <span class="fa fa-search form-control-feedback" style="font-size: 20px;right: 0px;top: -4px;"></span>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </nav>
</div>
<div class="border2" style="background-color: white;">
    <nav class="navbar navbar-expand-lg navbar-dark" style="margin-bottom: 0px;">
        <div class="container" style="width:950px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color:#222222;margin-top: 20px;margin-bottom: 0px;">
                    <span class="icon-bar" style="background-color: white;"></span>
                    <span class="icon-bar" style="background-color: white;"></span>
                    <span class="icon-bar" style="background-color: white;"></span>                       
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="li">
                    <a href="#" style="color:#000000;text-decoration:none;background-color:#ffffff00;font-size:13px;">
                        <strong>ABOUT DUBARAH</strong>
                    </a>
                </li>
                <li class="li">
                    <a href="#" style="color:#000000;text-decoration:none;background-color:#ffffff00;font-size:13px;">
                        <strong>NEWSROOM</strong>
                    </a>
                </li>
                <li  class="li">
                    <a href="#" style="color:#000000;text-decoration:none;background-color:#ffffff00;font-size:13px;">
                        <strong>GALLERY</strong>
                    </a>
                </li>
                <li  class="li">
                    <a href="#" style="color:#000000;text-decoration:none;background-color:#ffffff00;font-size:13px;">
                        <strong>CONTACT US</strong>
                    </a>
                </li>
            </ul>
            <div class="nav navbar-nav navbar-right col-sm-6 col-lg-3 col-md-4 col-xs-10">
                <button class="bb" onclick="window.location='<?php echo base_url() ?>'" style="position: relative;left: 0px;">Back to website</button>
            </div>
        </div>
        </div>
    </nav>
</div>

<div class="container c">
    <img src="<?php echo base_url() ?>asset/imgs/footer.svg" class="img-responsive">
    <div class="square" style="background-color: white;">
            <img src="<?php echo base_url() ?>asset/imgs/paner.png" class="img-responsive2">
            <h1 style="text-align: center;font-size: 30px;">
                <strong>About Dubarah</strong>
            </h1>
            <div class="col-lg-12" style="text-align: center;margin-top: 15px;padding-left: 60px;padding-right: 60px;">
            <p ><strong>Dubarah is a global network that bridges Syrian refugees problems with solutions, operates in 15 countries with over than 180K volunteers working to support refugees at any necessity and level. As many Syrians were forced to leave Syria and take decision of asylum and immigra tion in countries they have never visited, it was a must to have a network which addresses their needs and provide them with help & support in those countries to be able to continue their lives.</strong></p>
            </div>
            <hr style="border-top: 2px solid #f1f1f1;">
            <h1 style="text-align: center;font-size: 30px;" class="first">
            <strong>Our Mission</strong>
            </h1>  
            <div class="col-lg-12 text" style="text-align: center;padding-left: 60px;padding-right: 60px;">
                <p><strong>Founded in 2013,Dubarah's mission is to give refugees and newcomers equal oppartunities that raise their standard of living.people use Dubarah to get closer to available oppartunities around them,to discaver what's going on nearby,to get them inolved.</strong></p>
            </div>
                 <img src="<?php echo base_url() ?>asset/imgs/worldChart.svg" class="img-responsive new">
                 <h1 style="text-align: center;font-size: 25px;" class="leader">
                 <strong>LEADERSHIP</strong>
                 </h1>
            <div class="col-lg-10 move">
            <div class="media">
                <img class="mr-5 rounded-circle" width="135" src="<?php echo base_url() ?>asset/imgs/leadership/ahmad_edilbi.png" >
                <div class="media-body mar-top " style="margin-bottom: 40px;">
                    <h5><strong>Ahmad Edilbi</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285"><strong>Founder,and chief Executive Officer</strong></h6>
                    <div class="fb-follow" data-href="https://www.facebook.com/zuck" data-layout="button" data-size="small" data-show-faces="false"></div>
                    <iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fzuck&width=0&height=65&layout=button&size=small&show_faces=false&appId" width="70" height="30" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>
                    <strong>Asocial entrepreneur, Ashoka Fellow and the founder of Dubarah, a global network that bridges Syrian refugees� problems with solutions. Edilbi responsible for setting the overall direction and strategy for nocker project.</strong></div>
            </div>
        </div>
        
             <div class="col-lg-10 move">
            <div class="media">
                <img class="mr-5 rounded-circle" width="135" src="<?php echo base_url() ?>asset/imgs/leadership/majd.png" >
                <div class="media-body mar-top " style="margin-bottom: 60px;">
                    <h5><strong>Majd Khanje</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285"><strong>Co -Founder Chief Operating Officer</strong></h6>
                    <div class="fb-follow" data-href="https://www.facebook.com/zuck" data-layout="button" data-size="small" data-show-faces="false"></div>
                    <iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fzuck&width=0&height=65&layout=button&size=small&show_faces=false&appId" width="70" height="30" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>
                    <strong>Overseeing the firm's business operations. Prior to Dubarah, Majd was head of corporate and VIP of Sales Operations at Syriatel telecommunication. </strong></div>
            </div>
        </div>
        <div class="col-lg-10 move">
            <div class="media">
                <img class="mr-5 rounded-circle" width="135" src="<?php echo base_url() ?>asset/imgs/leadership/talin.png" >
                <div class="media-body mar-top " style="margin-bottom: 60px;">
                    <h5><strong>Talin Kdikian</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285"><strong>Corporate Communication Manager</strong></h6>
                    <div class="fb-follow" data-href="https://www.facebook.com/zuck" data-layout="button" data-size="small" data-show-faces="false"></div>
                    <iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fzuck&width=0&height=65&layout=button&size=small&show_faces=false&appId" width="70" height="30" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>
                    <strong>Talin managing and orchestrating all internal and external communications aimed at creating favourable point of view among stakeholders on which the network depends.</strong></div>
            </div>
        </div>
        <div class="col-lg-10 move">
            <div class="media">
                <img class="mr-5 rounded-circle" width="135" src="<?php echo base_url() ?>asset/imgs/leadership/MaherKalash.png" >
                <div class="media-body mar-top ">
                    <h5><strong>Maher Kalash</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285"><strong>Chief Technology Officer</strong></h6>
                    <div class="fb-follow" data-href="https://www.facebook.com/zuck" data-layout="button" data-size="small" data-show-faces="false"></div>
                    <iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fzuck&width=0&height=65&layout=button&size=small&show_faces=false&appId" width="70" height="30" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>
                    <strong>Maher Maintain the current information about technology standards and compliance regulations. Also he monitor technology and social trends that could impact the company and Communicate the organization's technology strategy to partners, management, Advisory board and employees. </strong></div>
            </div>
        </div>
   
                    <hr class="hr2" style="border-top: 2px solid #f1f1f1;">
                    <h1 style="text-align: center;font-size: 25px;" class="leader1">
                        <strong>
                            ADVISORY BOARD
                        </strong>
                    </h1>
            <div class="row">
                <div class="col-lg-4 s">
                    <div class="media">
                        <img src="<?php echo base_url() ?>asset/imgs/advisory/bill.svg" >
                            <div class="media-body mar-top" style="margin-left:20px;position:  relative;top: 25px;">
                                <h5 >
                                    <strong>
                                    Bill Young
                                    </strong>
                                </h5>
                                <h6 style="position: relative;top:-5px;color:#808285">
                                    <strong>Founder & President, Social Capital Partners</strong>
                                </h6>
                            </div>
                    </div>
                </div>

                <div class="col-lg-4 s">
                    <div class="media">
                        <img src="imgs/John Phillips.png" >
                        <div class="media-body mar-top" style="margin-left:20px;position:  relative;top: 25px;">
                        <h5>
                            <strong>John Phillips</strong>
                        </h5>
                        <h6 style="position: relative;top:-5px;color:#808285"><strong>Investor & Director,Shopify Inc.</strong></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 s">
                    <div class="media">
                    <img src="imgs/Dr. Wendy Cukier.png" >
                    <div class="media-body mar-top" style="margin-left:20px;position:  relative;top: 25px;">
                        <h5 >
                            <strong>Dr. Wendy Cukier</strong>
                        </h5>
                        <h6 style="position: relative;top:-5px;color:#808285">
                            <strong>Professor, School of Information Technology Management at Ryerson UniversityUniversity, Director, Diversity Institute,
                            </strong>
                        </h6>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 s">
                    <div class="media">
                    <img src="imgs/Bruce Lawson.png" >
                    <div class="media-body mar-top" style="margin-left:20px;position:  relative;top: 25px;">
                        <h5 >
                            <strong>Bruce Lawson</strong>
                        </h5>
                        <h6 style="position: relative;top:-5px;color:#808285">
                            <strong>President The Counselling Foundation of Canada</strong>
                        </h6>
            
                   </div>
                   </div>
                </div>
                <div class="col-lg-4 s">
                    <div class="media">
                    <img src="imgs/Dr. Mark Campbell.png" >
                    <div class="media-body mar-top" style="margin-left:20px;position:  relative;top: 25px;">
                        <h5 >
                            <strong>Dr. Mark Campbell</strong>
                        </h5>
                        <h6 style="position: relative;top:-5px;color:#808285">
                            <strong>Sr. Research Associate, Faculty of Communications and Design, Ryerson University </strong>
                        </h6>
                   </div>
                   </div>
                </div>
                <div class="col-lg-4 s">
                    <div class="media">
                    <img src="imgs/Rama Chakaki.png" >
                    <div class="media-body mar-top" style="margin-left:20px;position:  relative;top: 25px;">
                        <h5 >
                            <strong>Rama Chakaki</strong>
                        </h5>
                        <h6 style="position: relative;top:-5px;color:#808285">
                            <strong>Co-Founder, VIP.Fund   , and Founder, BarakaBits</strong>
                        </h6>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 s">
                    <div class="media">
                    <img src="imgs/Karim Harji.png" >
                    <div class="media-body mar-top" style="margin-left:20px;position:  relative;top: 25px;">
                        <h5 >
                            <strong>Karim Harji</strong>
                        </h5>
                        <h6 style="position: relative;top:-5px;color:#808285"><strong>Co-Founder,Purpose Capital</strong></h6>
                   </div>
                   </div>
                </div>
                    <hr class="hr3" style="border-top: 2px solid #f1f1f1;">
            </div>
                    
                <h1 style="text-align: center;font-size: 25px;" class="leader2">
                    <strong>WORLD WIDE TEAM</strong>
                </h1>

            <div class="row">
                <div class="col-lg-2 ert" style="margin-bottom: 25px;">
                    <h4 ><strong>Taib Ehfar</strong>
                    </h4>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
                <div class="col-lg-2 ert" style="margin-bottom: 25px;">
                    <h4 ><strong>Taib Ehfar</strong></h4>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
                <div class="col-lg-2 ert" style="margin-bottom: 25px;">
                    <h4 ><strong>Taib Ehfar</strong></h4>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
                <div class="col-lg-2 ert" style="margin-bottom: 25px;">
                    <h4 ><strong>Taib Ehfar</strong></h4>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
                <div class="col-lg-2 ert" style="margin-bottom: 25px;">
                    <h4 ><strong>Taib Ehfar</strong></h4>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 ert" style="margin-bottom: 25px;">
                    <h4 ><strong>Taib Ehfar</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
                <div class="col-lg-2 ert" style="margin-bottom: 25px;">
                    <h4 ><strong>Taib Ehfar</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
                <div class="col-lg-2 ert" style="margin-bottom: 25px;">
                    <h4 ><strong>Taib Ehfar</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div> 
                <div class="col-lg-2 ert" style="margin-bottom: 25px;">
                    <h4 ><strong>Taib Ehfar</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
                <div class="col-lg-2 ert" style="margin-bottom: 25px;">
                    <h4 ><strong>Taib Ehfar</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 ert">
                    <h4 ><strong>Taib Ehfar</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
                <div class="col-lg-2 ert">
                    <h4 ><strong>Taib Ehfar</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
                <div class="col-lg-2 ert">
                    <h4 ><strong>Taib Ehfar</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
                <div class="col-lg-2 ert">
                    <h4 ><strong>Taib Ehfar</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
                <div class="col-lg-2 ert">
                    <h4 ><strong>Taib Ehfar</strong></h5>
                    <h6 style="position: relative;top:-5px;color:#808285">
                        <strong>Turkey Team leader</strong>
                    </h6>
                </div>
            </div>
        </div>

        </div>
    
        



 <img src="<?php echo base_url() ?>asset/imgs/footer.svg" class="img-responsive">
<footer class="page-footer grey-darken-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="media">
                        <img class="d-flex mr-3" src="<?php echo base_url() ?>asset/imgs/dubarah-footer-img.jpg" width="75" height="75" style="border-radius: 5px ;    margin-top: 10px; ">
                        <div class="media-body">
                            <h6 class="grey-text text-lighten-3">
                                Dubarah is a global network that bridges Syrian refugees’ problems with soluions, operates in 15 countries with over than 180K volunteers working to support refugees at any necessity and level.
                            </h6>  
                              <h5 class="text-lighten-3">  Dubarah™is Non-Profit Corporaion, incorporated under the"Canada NFP Corporaion Act. CN# 6-972045
                         </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h4 style="margin-top: -4px;
    margin-left: 24px;
    margin-bottom: -3px;" class="white-text">Quick Links</h4>
                    <div class="row" style="border-left: solid 1px #9e9e9e;">
                        <div class="col">
                            <ul>
                                <li><h5><a class="grey-text text-lighten-3" href="#!">Terms Of Use</a></h5></li>
                                <li><h5><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></h5></li>
                                <li><h5><a class="grey-text text-lighten-3" href="#!">Media Kit</a></h5></li>
                                <li><h5><a class="grey-text text-lighten-3" href="#!">Contact Us</a></h5></li>
                            </ul>
                        </div>
                    </div>
                </div>
                             <div class="col-lg-2 col-sm-6">
       <h4 style="margin-top: -4px; margin-left: 24px; margin-bottom: -3px; margin-bottom: 14px;" class="white-text"></h4>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><h5><a class="grey-text text-lighten-3" href="#!">Terms Of Use</a></h5></li>
                                <li><h5><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></h5></li>
                                <li><h5><a class="grey-text text-lighten-3" href="#!">Media Kit</a></h5></li>
                                <li><h5><a class="grey-text text-lighten-3" href="#!">Contact Us</a></h5></li>
                            </ul>
                        </div>
                    </div>
                </div>
                   <div class="col-lg-2 col-sm-6">
                    <h4 style="margin-top: -4px;margin-left: 24px;margin-bottom: -3px;" class="white-text">Quick Links</h4>
    
                    <div class="row" style="border-right: solid 1px #9e9e9e;   border-left: solid 1px #9e9e9e;">
                        <div class="col">
                            <ul>
                                <li><h5><a class="grey-text text-lighten-3" href="#!">Terms Of Use</a></h5></li>
                                <li><h5><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></h5></li>
                                <li><h5><a class="grey-text text-lighten-3" href="#!">Media Kit</a></h5></li>
                                <li><h5><a class="grey-text text-lighten-3" href="#!">Contact Us</a></h5></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h4 class="white-text">Social Media</h3>
					<div class="row" style="margin-left: 8px;" >
                    <a style="    margin-right: 1px;" class="btn btn-social-icon btn-facebook btn-socialMedia">
                        <span class="fa fa-facebook"></span>
                    </a>

                    <a style="    margin-right: 1px;" class="btn btn-social-icon btn-twitter btn-socialMedia">
                        <span class="fa fa-twitter"></span>
                    </a>

                    <a style="    margin-right: 1px;" class="btn btn-social-icon btn-linkedin btn-socialMedia">
                        <span class="fa fa-linkedin"></span>
                    </a>

                    <a class="btn btn-social-icon btn-google btn-socialMedia">
                        <span class="fa fa-google-plus"></span>
                    </a>
					</div>
                </div>
            </div>
        </div>

<!-- Optional JavaScript == jQuery first, then Popper.js, then Bootstrap JS == -->


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : 'your-app-id',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.11'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</html>

