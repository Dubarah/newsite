<!-- Header #PE$$ -->
<?php $this->load->view('heroCitizen/common/header'); ?>
<!-- Cover Photo -->
<style>
	  .businessesCategoryImage{
            margin:15px 0;
            cursor: pointer;
        }
</style>
<img src="<?php echo $service->cover ? base_url().'asset/imgs/'.$service->cover : 'http://via.placeholder.com/1200x250'?>" class="img-fluid intro-img">
<!-- service row -->

<div class="jumbotron jumbotron-fluid" style="padding-bottom: 15px;padding-top: 30px;">
	<div class="container" style="max-width: 1090px;padding-left: 140px;">
  	<div class="row">
  		<div class="col-lg-8">
        <h2><?php echo $service->serv_name ?></h2>
      </div>
    	<div class="col-lg-4">
  		  <?php $link = base_url().'HelpRequest';
          switch ($ser_id) {
            case 1:
                $link = base_url().'achievements';
                $get_started_link = base_url().'add-achi';
                break;
            case 2:
                $link = base_url().'jobs';
                $get_started_link = base_url().'add_dubarah';
                break;
            case 5:
                $link = base_url().'DuHubForm';
                $get_started_link = '';
                break;
            case 6:
                $link = 'http://blog.dubarah.com/';
                $get_started_link = '';
                break;
            case 7:
                $link = 'http://dubarahsolutions.com/';
                $get_started_link = '';
                break;
            case 8:
                $link = 'http://www.mshmosh.com/';
                $get_started_link = '';
                break;
            default:
                $link = base_url().'HelpRequest';
                $get_started_link = '';
                break;
        }?>
        <button type="button" class="btn btn-outline-dark" onclick="location.href = '<?php echo $link?>';">Check Service</button>
    	</div>
  	</div>
	</div>
</div>
	<div class="container" style="    margin-top: 80px;
    margin-bottom: 80px;
    max-width: 1090px;
    padding-left: 140px;">
     <div style="    padding-left: 0px;" class="col-lg-12">
  <p><?php echo $service->description?></p>
  <?php if($get_started_link):?>
  <button type="button" class="btn btn-warning ml-3" onclick="location.href = '<?php echo $get_started_link;?>';">Get Started Now</button>
  <?php endif;?>
</div>
</div>







 <?php if($ser_id == 5){ ?>
 	
 <h2 class="text-center font-weight-bold" style="margin-bottom: 30px ;margin-top: 10px"> WHAT WE DO </h2>		
 
 	<div class="container" style="max-width: 887px; margin-bottom: 50px">
	<div class="row">
		
	
	
	
    <div class="container">
        <div class="row">
        	
            <div class="col-lg-3" >
            	<div class="card" style="background-color: #e9ecef">
                <h2 class="text-center font-weight-bold" style="margin-bottom: 5px  ;">		
			 <img src="<?php echo base_url() ?>asset/imgs/hub1.svg" style="max-width: 25%" class="img-fluid text-center businessesCategoryImage">
        	
        	</h2>
        		<h6 class="text-center font-weight-bold" style="margin-bottom: 32px;">Co-working Space</h6>
            </div>
            </div>
            <div class="col-lg-3" >
            	<div class="card" style="background-color: #e9ecef">
                <h2 class="text-center font-weight-bold" style="margin-bottom: 5px  ;">		
			 <img src="<?php echo base_url() ?>asset/imgs/hub2.svg" style="max-width: 25%" class="img-fluid text-center businessesCategoryImage">
        	
        	</h2>
        		<h6 class="text-center font-weight-bold" style="margin-bottom: 32px;">Meeting Rooms</h6>
            </div>
            </div>
             <div class="col-lg-3" >
            	<div class="card" style="background-color: #e9ecef">
                <h2 class="text-center font-weight-bold" style="margin-bottom: 5px  ;">		
			 <img src="<?php echo base_url() ?>asset/imgs/hub3.svg" style="max-width: 25%" class="img-fluid text-center businessesCategoryImage">
        	
        	</h2>
        		<h6 class="text-center font-weight-bold" style="margin-bottom: 32px;">Private Offices</h6>
            </div>
            </div>
             <div class="col-lg-3" >
            	<div class="card" style="background-color: #e9ecef">
                <h2 class="text-center font-weight-bold" style="margin-bottom: 5px  ;">		
			 <img src="<?php echo base_url() ?>asset/imgs/hub4.svg" style="max-width: 25%" class="img-fluid text-center businessesCategoryImage">
        	
        	</h2>
        		<h6 class="text-center font-weight-bold"  style="margin-bottom: 13px;">Legal Advice and Firms registration</h6>
            </div>
            </div>
        </div>
                <div class="row">
            <div class="col-lg-3" >
            	<div class="card" style="background-color: #e9ecef">
                <h2 class="text-center font-weight-bold" style="margin-bottom: 5px  ;">		
			 <img src="<?php echo base_url() ?>asset/imgs/hub5.svg" style="max-width: 25%" class="img-fluid text-center businessesCategoryImage">
        	
        	</h2>
        		<h6 class="text-center font-weight-bold" style="margin-bottom: 32px;">Co-working Space</h6>
            </div>
            </div>
            <div class="col-lg-3" >
            	<div class="card" style="background-color: #e9ecef">
                <h2 class="text-center font-weight-bold" style="margin-bottom: 5px  ;">		
			 <img src="<?php echo base_url() ?>asset/imgs/hub6.svg" style="max-width: 25%" class="img-fluid text-center businessesCategoryImage">
        	
        	</h2>
        		<h6 class="text-center font-weight-bold" style="margin-bottom: 32px;">Co-working Space</h6>
            </div>
            </div>
             <div class="col-lg-3" >
            	<div class="card" style="background-color: #e9ecef">
                <h2 class="text-center font-weight-bold" style="margin-bottom: 5px  ;">		
			 <img src="<?php echo base_url() ?>asset/imgs/hub7.svg" style="max-width: 25%" class="img-fluid text-center businessesCategoryImage">
        	
        	</h2>
        		<h6 class="text-center font-weight-bold" style="margin-bottom: 32px;">Co-working Space</h6>
            </div>
            </div>
             <div class="col-lg-3" >
            	<div class="card" style="background-color: #e9ecef">
                <h2 class="text-center font-weight-bold" style="margin-bottom: 5px  ;">		
			 <img src="<?php echo base_url() ?>asset/imgs/hub8.svg" style="max-width: 25%" class="img-fluid text-center businessesCategoryImage">
        	
        	</h2>
        		<h6 class="text-center font-weight-bold" style="margin-bottom: 32px;">Co-working Space</h6>
            </div>
            </div>
        </div>
    </div>
</div>
 
 </div>
 
 
 <div  style="padding-bottom: 60px;padding-top: 60px;background-color: #606060; margin-bottom: 20px">
  <div class="container" style="max-width: 887px;">
    <div class="row">
      <div class="col-lg-8">
      <h2 style="color: #fff">	WHO IS IT FOR?</h2>
		<p style="color: #fff">All kinds of people, which is what makes Dubarah Hub so special. Solo entrepreneurs, freelance professionals, teams and start-ups but also non-profits, artists, designers, and intrapreneurs. All working to solve the world's problems big and small.
       </p>
       
         <button type="button" class="btn btn-warning" onclick="location.herf = '<?php echo $get_started_link;?>';">Get Started Now</button>

      </div>
      <div class="col-lg-4">
      	
      	<img src="<?php echo base_url() ?>asset/imgs/hublogo.png" />
      	
      	
      </div>
    </div>
  </div>
</div>
 
 
 <?php }elseif($ser_id == 4){?>
 	
 	<div class="jumbotron jumbotron-fluid" style="padding-bottom: 60px;padding-top: 30px;    margin-bottom: 0px;">
 		 <h2 class="text-center font-weight-bold" style="margin-bottom: 30px ;margin-top: 10px">WHAT NOCKER CAN DO</h2>	
	<div class="container" style="max-width: 860px;">
  	<div class="row">
  		
  		    <div class="col-lg-4" >
            	<div class="card" style="background-color: #FFFFFF">
                <h2 class="text-center font-weight-bold" style="margin-bottom: 5px  ;">		
			 <img src="<?php echo base_url() ?>asset/imgs/nok1.svg" style="max-width: 25%" class="img-fluid text-center businessesCategoryImage">
        	
        	</h2>
        	<div class="card-body duServicesCBody">
        		<h6 class="text-center font-weight-bold" style="margin-bottom: 32px;">Build newcomer credentials </h6>
        		
        		<p class="text-center">
        			Nocker enables refugees and newcomers to practice their skills while earning income, improving their English in real-life contexts, building their network and credibility.
        		</p>
            </div>
            </div>
            </div>
  		
  			    <div class="col-lg-4" >
            	<div class="card" style="background-color: #FFFFFF">
                <h2 class="text-center font-weight-bold" style="margin-bottom: 5px  ;">		
			 <img src="<?php echo base_url() ?>asset/imgs/nok2.svg" style="max-width: 54%" class="img-fluid text-center businessesCategoryImage">
        	
        	</h2>
        	<div class="card-body duServicesCBody">
        		<h6 class="text-center font-weight-bold" style="margin-bottom: 32px;">Integrate quickly </h6>
        		<p class="text-center">Nocker shortens newcomer integration time and enables refugees and newcomers to connect to a network of customers.</p>
            </div>
            </div>
  			</div>
  			    <div class="col-lg-4" >
            	<div class="card" style="background-color: #FFFFFF">
                <h2 class="text-center font-weight-bold" style="margin-bottom: 5px  ;">		
			 <img src="<?php echo base_url() ?>asset/imgs/nok3.svg" style="max-width: 25%" class="img-fluid text-center businessesCategoryImage">
        	
        	</h2>
        	<div class="card-body duServicesCBody">
        		<h6 class="text-center font-weight-bold" style="margin-bottom: 32px;">Reduce poverty </h6>
        		<p class="text-center">
        			
        			Reduce poverty The risk of not enabling newcomers to work upon arrival is significant: 46% of recent immigrants live in poverty. Nocker gives newcomers a chance to work as soon as arrived.
        		</p>
            </div>
            </div>
  		</div>
  	</div>
	</div>
</div>
<div class="img-cover">
	<img src="<?php echo base_url()?>asset/imgs/nocover.png" style="position:relative;display:inline-block;text-align:center;width: 100%;">
	
</div>
 <div  style="padding-bottom: 60px;padding-top: 60px;background-color: #283942; margin-bottom: 20px">
  <div class="container" style="max-width: 887px;">
    <div class="row">
      <div class="col-lg-8">
      <h2 style="color: #fff">	Ready to give nocker a try? Sign Up now.</h2>
       </p>
       
         <button type="button" class="btn btn-warning" onclick="location.herf = '<?php echo $get_started_link;?>';">Get Started Now</button>

      </div>
      <div class="col-lg-4">
      	
      	<img src="<?php echo base_url() ?>asset/imgs/nockerlogo.svg" />
      	
      	
      </div>
    </div>
  </div>
</div>

 	
 	<?php }elseif($ser_id == 7){?>
 	
 	<div class="jumbotron jumbotron-fluid" style="padding-bottom: 60px;padding-top: 30px;    margin-bottom: 0px;">
	<div class="container" style="max-width: 860px;">
  	<div class="row">
  		<div class="img-cover">
	<img src="<?php echo base_url()?>asset/imgs/dus_prod.png" style="position:relative;display:inline-block;text-align:center;width: 100%;">
	
		</div>
  		   
  		</div>
  	</div>
	</div>

		
 <div  style="padding-bottom: 60px;padding-top: 60px;    background-color: #303030; ">
 	 		 <h2 class="text-center font-weight-bold" style="color: #fff;margin-bottom: 42px;margin-top: 10px">Our SERVICESS</h2>	

  <div class="container" style="max-width: 887px;">

    	
    	<div class="row" style=" margin-bottom: 20px">
      <div class="col-lg-3">
      <h6 style="color: #fff">DIGITAL & WEB DESIGN</h6>
       </p>
       

      </div>
          <div class="col-lg-3">
     <h6 class="text-center" style="color: #fff">SOCIAL MEDIA</h6>
       </p>
       

      </div>
          <div class="col-lg-3">
     <h6 class="text-center" style="color: #fff">BRANDING</h6>
       </p>
       </div>
  		<div class="col-lg-3">
     <h6 class="text-center" style="color: #fff">GRAPHIC DESIGN</h6>
       </p>
       </div>
   
   	</div>
   	<div class="row">
      <div class="col-lg-3">
     <h6 class="text-center" style="color: #fff">COPYWRITING</h6>
       </p>
       

      </div>
          <div class="col-lg-3">
     <h6 class="text-center" style="color: #fff">COPYWRITING</h6>
       </p>
       

      </div>
          <div class="col-lg-3">
     <h6 class="text-center" style="color: #fff">E- AND M-COMMERCE</h6>
       </p>
       </div>
  		<div class="col-lg-3">
    	 <h6 class="text-center" style="color: #fff">E- AND M-COMMERCE</h6>
       </p>
       </div>
   
   	</div>
   	
     
 
  </div>
</div>


 <div  style="padding-bottom: 60px;padding-top: 60px;background-color: #424649; margin-bottom: 20px">
  <div class="container" style="max-width: 887px;">
    <div class="row">
      <div class="col-lg-8">
      <h2 style="color: #fff">Chech Our portfolio</h2>
       </p>
       
         <button type="button" class="btn btn-warning" onclick="location.herf = '<?php echo $get_started_link;?>';">Get Started Now</button>

      </div>
      <div class="col-lg-4">
      	
      	<img src="<?php echo base_url() ?>asset/imgs/dus_logo.svg" />
      	
      	
      </div>
    </div>
  </div>
</div>

 	
 	<?php }elseif($ser_id == 10){ ?>
 		
 		<div class="container" style="max-width: 800px; margin-bottom: 50px">
 		<iframe width="800" height="500" src="https://www.youtube.com/embed/KvhuTjxgt5I" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
 		
 		</div>
 	<div class="jumbotron jumbotron-fluid" style="padding-bottom: 60px;padding-top: 30px;    margin-bottom: 0px;">
 <h2 class="text-center font-weight-bold" style="margin-bottom: 30px ;margin-top: 10px"> WHAT WE DO </h2>		
 
 	<div class="container" style="max-width: 887px; margin-bottom: 50px">
	<div class="row">
		
	
	
	
    <div class="container">
        <div class="row">
        	
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/1.jpg"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>
 				
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/2.jpg"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>	
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/3.jpg"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>	
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/4.jpg"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>
        </div>
                 <div class="row">
        	
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/5.jpg"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>
 				
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/6.jpg"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>	
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/7.jpg"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>	
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/8.png"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>
        </div>
    </div>
</div>
 
 </div>
 </div>
  
 <div  style="padding-bottom: 60px;padding-top: 60px;background-color: #fff; margin-bottom: 20px">
  <div class="container" style="max-width: 887px;">
    <div class="row">
      <div class="col-lg-8">
      <h6 >	        	<p> This game requires more development to achieve its goal,counting on the generosity of supporters like you.</p>
</h6>
       
       
         <button type="button" class="btn btn-danger" style="background-color: #FC391D" onclick="location.herf = '<?php echo base_url().'Donate';?>';">DONATE</button>

      </div>
      
    </div>
  </div>
</div>

 
 <div  style="padding-bottom: 60px;padding-top: 60px;background-color: #424649; margin-bottom: 20px">
  <div class="container" style="max-width: 887px;">
    <div class="row">
      <div class="col-lg-8">
      <h4 style="color: #fff">	Ready to play and support? get it now!</h4>
       
 
 <a href="http://google.com"> 
<img src="http://localhost/achievement/asset/imgs/gitandroid.svg" width="200">
</a>  

<a href="http://google.com">
<img src="http://localhost/achievement/asset/imgs/storeapp.svg" width="200"></a>
      </div>
      <div class="col-lg-4">
      	
      	<img src="<?php echo base_url() ?>asset/imgs/gamelogo.svg" style="    max-width: 82%;" />
      	
      	
      </div>
    </div>
  </div>
</div>
 
 
 <?php } elseif($ser_id == 8){ ?>
 	
 <h2 class="text-center font-weight-bold" style="margin-bottom: 30px ;margin-top: 10px"> WHAT WE DO </h2>		
 
 	<div class="container" style="max-width: 887px; margin-bottom: 50px">
	<div class="row">
		
	
	
	
    <div class="container">
        <div class="row">
        	
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/mshmosh.png"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>
 				
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/mshmosh2.png"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>	
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/mshmosh3.png"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>	
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/mshmosh4.png"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>
        </div>
                 <div class="row">
        	
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/mshmosh5.png"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>
 				
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/mshmosh6.png"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>	
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/mshmosh7.png"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>	
            <div class="col-lg-3" >
            
               	
			 <img src="<?php echo base_url() ?>asset/imgs/mshmosh8.png"  class="img-fluid text-center businessesCategoryImage">
        	
        	
        	
            
            </div>
        </div>
    </div>
</div>
 
 </div>
 
 
 <div  style="padding-bottom: 60px;padding-top: 60px;background-color: #424649; margin-bottom: 20px">
  <div class="container" style="max-width: 887px;">
    <div class="row">
      <div class="col-lg-8">
      <h4 style="color: #fff">	Share the passion and support us by
					getting one of our t-shirts!</h4>
       
       
         <button type="button" class="btn btn-warning" onclick="location.herf = '<?php echo $get_started_link;?>';">Get Started Now</button>

      </div>
      <div class="col-lg-4">
      	
      	<img src="<?php echo base_url() ?>asset/imgs/msh1.svg" />
      	
      	
      </div>
    </div>
  </div>
</div>
 
 
 <?php } ?>

<!-- service row -->


<!-- footer #PE$$ -->
<?php $this->load->view('heroCitizen/common/footer'); ?>
