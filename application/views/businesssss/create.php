<?php $this->load->view('/business/common/header'); ?>
<?php $this->load->view('/business/common/navbar'); ?>

<?php 
//echo "<pre>";
//print_r($data);
//exit;
?>
 <div class="intro duOrange">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <img src="imgs/DubarahLogoWhite.svg" class="img-fluid" style="max-width: 15rem ; margin-top: 6.5rem"><span class="text-white font-weight-bold" style="font-size: 1.5rem; vertical-align: bottom;"> Business </span>
                </div>
                <div class="col-lg-5">
                    <div class="card" style="border-radius: 10px 10px 0 0;top: 6.5rem;">
                        <img class="card-img-top" src="imgs/cardImageBusiness.svg">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item" style="border: none;"><i class="fa fa-check duGreenText" aria-hidden="true"></i> Reach Thousends of local customers.</li>
                                <li class="list-group-item" style="border: none;"><i class="fa fa-check duGreenText" aria-hidden="true"></i> Appear on the top business sites on the web.</li>
                                <li class="list-group-item" style="border: none;"><i class="fa fa-check duGreenText" aria-hidden="true"></i> Deliver your message at just the right time</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container panel-head panel">
	<div class="col-lg-12">
    <div class="clear"> </div>
     <style type="text/css">
        .pad_form{    padding-top: 20px; }
    </style>
		<div class="form-content">
			 <form role="form" id="theForm" method="post" enctype="multipart/form-data">
          <div class="tab-content" id="business-tab-content">
             	<!-- Step 1 -->
             	<div class="tab-pane active" role="tabpanel" id="step1">
             		 <?php $this->load->view('business/create-steps/step1'); ?>
             	</div>
              <!-- Step 2 -->
              <div class="tab-pane" role="tabpanel" id="step2">
              	<?php $this->load->view('business/create-steps/step2'); ?>
              </div>
             
              <!-- Step 3 -->
              <div class="tab-pane" role="tabpanel" id="step3">
              	<?php $this->load->view('business/create-steps/step3'); ?>
              </div>
              <!-- Step 4 -->
              <div class="tab-pane" role="tabpanel" id="step4">
              	<?php $this->load->view('business/create-steps/step4'); ?>
              </div>
          </div>
      </form>
		</div>
	</div>
</div>
<?php $this->load->view('business/common/navfooter'); ?>
<?php $this->load->view('business/common/footer'); ?>