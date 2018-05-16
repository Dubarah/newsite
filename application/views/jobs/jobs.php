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
            		<form method="get" action="<?php echo base_url()."jobs/1$url_ext" ?>">
            <div class="row">
                <div class="col-md-2">
                   <h6 class="mar-top">SEARCH BY :</h6>
                </div>
                <div class="col-md-3">
                    <!-- <input type="text" class="form-control form-control-lg" placeholder="Achievement Type"> -->
             	<select  class="form-control select2" id='cat_id' placeholder="Pick your job category" name="cat_id">
										<option></option>
											<?php foreach ($sub->result() as $cat) {?>
		
		        						 <option value="<?php echo $cat->category_id ?>" ><?php echo $cat->english_name ?></option>
		    						     <?php } ?>
									</select>
                </div>
                <div class="col-md-3">
                    <!-- <input type="text" class="form-control form-control-lg" placeholder="Country"> -->
                  <select  class="form-control select2" id="country" placeholder="Pick your country" name="country_id">
										<option></option>
											<?php foreach ($countrys->result() as $country) {?>
	
	            						 <option style="text-align: center;" value="<?php echo $country->country_id ?>" ><?php echo $country->country_english_name ?></option>
	        						     <?php } ?>
									</select>
                </div>
                <div class="col-md-3">
                    <input type="text" name="search" class="form-control" placeholder="Search any word">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-secondary">Find</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    

    <div class="container" style="max-width: 950px;">
    	 <div class="row col">
            <p>SORT BY :  
             
								<a  class="btn btn-link" href="<?php echo base_url()."jobs/1".($url_ext ? "$url_ext&filter=all" : "?filter=all") ?>"><?php echo LANG() == 'en' ? 'All' : 'الكل' ?></a>
							
							<?php foreach ($job_types as $value): ?>
								
									<a  class="btn btn-link" href="<?php echo base_url()."jobs/1".($url_ext ? "$url_ext&filter=$value->type_id" : "?filter=$value->type_id") ?>"><?php echo LANG() == 'en' ? $value->type_name : $value->type_name_ar ?></a>
						
							<?php endforeach ?>
        </div>
    	
          <div class="row mar-top ">
            <div class="col-lg-10">
                <img style="width: 20%;" src="<?php echo base_url() ?>asset/imgs/dublack.svg"> <span class="red-text" style="font-size: 25px;padding-left: 10px;position:relative;top: 7px;"><strong>Jobs</strong></span></h4>
            </div>
            <div class="col-lg-2">
                <a class="red-text float-right"><strong>+ Add Job</strong></a>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
           
            <div class="col-lg-12">
            

                        <div class="row">
                        	    <?php 
					    
				    	$pages = $num_rows % 12 === 0 ? $num_rows / 12 : ((int) $num_rows / 12) + 1;
						$pages = (int) $pages;
				    	if ($results) { ?>
				    		
							<?php $i = (($page - 1) * 12) + 1; $comm = 0; $total_price = 0; foreach ($results as $job) { ?>
                            <div class="col-lg-4">
                                <div class="card du-job-homecard">
                                    <div class="card-body du-job-homecard">
                                        <h4 class="card-title "><strong><u><a href="<?php echo base_url().'job/'.$job->advertisement_id ?>"><?php echo $job->title ?></a></u></strong></h4>
                                        <p class="card-title"><?php echo $job->address ?></p>
                                        <p class="card-text text-muted"><?php
                                        
                                        /* $i = 0; foreach ($jobSkills[$job->advertisement_id] as $skill) {
                                            	if($i == 2){
                                            		echo "..... ";
													break;
                                            	}
                                            echo $skill->skill_name.', ';
                                       $i++; }
										echo "<br />";*/
                                        echo lang()=='en' ? $job->type_name.', '.$job->employer : $job->type_name_ar.', '.$job->employer ?> </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                      
                 

                </div>
            </div>
           		<?php if ($num_rows > 12): ?>
					<div class="text-center">
						<ul class="pagination ">
							<li><a href="<?php echo base_url()."jobs/1"?>" ><</a></li>
							<?php if ($page - 4 >= 1): ?>
								<li><a href="<?php echo base_url()."jobs/".($page - 4).$url_ext ?>"><?php echo $page - 4 ?></a></li>
							<?php endif ?>
							<?php if ($page - 3 >= 1): ?>
								<li><a href="<?php echo base_url()."jobs/".($page - 3).$url_ext ?>"><?php echo $page - 3 ?></a></li>
							<?php endif ?>
							<?php if ($page - 2 >= 1): ?>
								<li><a href="<?php echo base_url()."jobs/".($page - 2).$url_ext ?>"><?php echo $page - 2 ?></a></li>
							<?php endif ?>
							<?php if ($page - 1 >= 1): ?>
								<li><a href="<?php echo base_url()."jobs/".($page - 1).$url_ext ?>"><?php echo $page - 1 ?></a></li>
							<?php endif ?>
							<li class="active"><a href="#"><?php echo $page ?></a></li>
							<?php if ($page + 1 <= $pages): ?>
								<li><a href="<?php echo base_url()."jobs/".($page + 1).$url_ext ?>"><?php echo $page + 1 ?></a></li>
							<?php endif ?>
							<?php if ($page + 2 <= $pages): ?>
								<li><a href="<?php echo base_url()."jobs/".($page + 2).$url_ext ?>"><?php echo $page + 2 ?></a></li>
							<?php endif ?>
							<?php if ($page + 3 <= $pages): ?>
								<li><a href="<?php echo base_url()."jobs/".($page + 3).$url_ext ?>"><?php echo $page + 3 ?></a></li>
							<?php endif ?>
							<?php if ($page + 4 <= $pages): ?>
								<li><a href="<?php echo base_url()."jobs/".($page + 4).$url_ext ?>"><?php echo $page + 4 ?></a></li>
							<?php endif ?>
							<li><a href="<?php echo base_url()."jobs/".($pages).$url_ext ?>">></a></li>
							
						</ul>
					</div>
				<?php endif ?>
				
			<?php } else { ?>
				<b><center><?php echo $this->lang->line('no_emps'); ?></center></b>
			<?php } ?>    

        </div>

        
    </div> </div> </div>



    <!-- footer -->
    <?php $this->load->view('dubarah4/footer'); ?>

    <!-- Optional JavaScript == jQuery first, then Popper.js, then Bootstrap JS == -->
    <script src="<?php echo base_url()?>asset/js/jquery-3.2.1.slim.min.js" ></script>
    <!-- the following jquery is instade of the slim one above to support ajax #PE$$ -->
    <script src="<?php echo base_url()?>asset/js/jquery-3.2.1.js"></script>
    <script src="<?php echo base_url()?>asset/js/popper.min.js" i></script>
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js" ></script>
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