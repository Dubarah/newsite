<?php 
// echo "<pre>";
// echo($busi_id);
// exit;


 /*
 * 
 * 
 * 
 * 
 * 



<?php// $this->load->view('/business/common/header'); ?>
<?php// $this->load->view('/business/common/navbar'); ?>

<?php 
//echo "<pre>";
//print_r($data);
//exit;
?>
 * 
 * 
 */
 ?>
<?php $this->load->view('main/second/header'); ?>
 <style>

        .duOrange {  background-color : #e85100 !important ;  }
        .duOrangeText {  color : #f4511e !important ;  }
        .duGreen {  background-color: #45FF00 !important;  }
        .duGreenText {  color: #45FF00 !important;  }

        .intro{
            min-width: 100%;
            height:12rem;
        }
	
     .fa-thumbs-o-up:hover, .fa-thumbs-o-down:hover {
        color: red;
    }
    .fa-thumbs-up:hover, .fa-thumbs-down:hover {
        color: red;
    }
    .user-images {
        margin-top:20px;
        margin-right:20px;
        width:20%;
        width:100%;
    }
    #profile-upload{
        background-image:url('');
        background-size:cover;
        background-position: center;
        height: 125px; width: 125px;
        position:relative;
        border-radius:250px;
        overflow:hidden;
    }
    .form-control::-webkit-input-placeholder { color: #c1c1c1; }  /* WebKit, Blink, Edge */
    .form-control:-moz-placeholder { color: #c1c1c1; }  /* Mozilla Firefox 4 to 18 */
    .form-control::-moz-placeholder { color: #c1c1c1; }  /* Mozilla Firefox 19+ */
    .form-control:-ms-input-placeholder { color: #c1c1c1; }  /* Internet Explorer 10-11 */
    .form-control::-ms-input-placeholder { color: #c1c1c1; }  /* Microsoft Edge */
    #profile-upload:hover input.upload{
      display:block;
    }
    #profile-upload:hover .hvr-profile-img{
      display:inline-block;
     }
    #profile-upload .fa{   margin: auto;
        position: absolute;
        bottom: -4px;
        left: 0;
        text-align: center;
        right: 0;
        padding: 6px;
       opacity:1;
      transition:opacity 1s linear;
       -webkit-transform: scale(.75); 
     
     
    }
    #profile-upload:hover .fa{
       opacity:1;
       -webkit-transform: scale(1); 
    }
    #profile-upload input.upload {
        z-index:1;
        left: 0;
        margin: 0;
        bottom: 0;
        top: 0;
        padding: 0;
        opacity: 0;
        outline: none;
        cursor: pointer;
        position: absolute;
        background:#ccc;
        width:100%;
        display:none;
    }

    #profile-upload .hvr-profile-img {
      width:100%;
      height:100%;
      display: none;
      position:absolute;
      vertical-align: middle;
      position: relative;
      background: transparent;
     }
    #profile-upload .fa:after {
        content: "";
        position:absolute;
        bottom:0; left:0;
        width:100%; height:0px;
        background:rgba(0,0,0,0.3);
        z-index:-1;
        transition: height 0.3s;
        }

    #profile-upload:hover .fa:after { height:100%; }

    /* css for the user 8 images*/
    .img-thumbnail:hover{
       border: 2px solid rgb(255, 255, 254);
    }
    /*css for logo delete button*/
    #logo-del{
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        width: 100px;

    }
    .btn-link {
        font-weight: 400;
        color: #4e4e4e;
        border-radius: 0;
    }
    .img-thumbnail {
        padding: 0;
        background-color: #fff;
        border: 0px solid #ddd;
        border-radius: .25rem;
        transition: all .2s ease-in-out;
        max-width: 100%;
        height: auto;
    }
    /* change pagenation style*/
    .page-item.active .page-link {
        background-color: #febe29!important;
        border-color: #febe29!important;
    }
    .page-link:focus, .page-link:hover, .page-link{
        color: #febe29!important;
    }
    .page-item.active .page-link{
        color: #fff!important;
    }
  
	.modal-dialog{
   		 overflow-y: initial !important
		}
		.modal-body{
   		 height: 250px;
    		overflow-y: auto;
		}
        .user-images {
        margin-top:20px;
        margin-right:20px;
        width:20%;
        width:100%;
   		}
   		.my_img_upload{
			background-image:url('');
		    background-size:cover;
		    background-position: center;
		    height: 125px; width: 125px;
		   
		    position:relative;
		  border-radius:250px;
		  overflow:hidden;
   		}


        #profile-upload , #cover-upload {
		    background-image:url('');
		    background-size:cover;
		    background-position: center;
		    height: 125px; width: 125px;
		   
		    position:relative;
		  border-radius:250px;
		  overflow:hidden;
		}
		#profile-upload:hover input.upload , #cover-upload:hover input.upload{
		  display:block;
		}
		#profile-upload:hover .hvr-profile-img , #cover-upload:hover .hvr-COVER-img 
		.my_img_upload{
		  display:inline-block;
		 }
		#profile-upload .fa , #cover-upload .fa{   margin: auto;
		    position: absolute;
		    bottom: -4px;
		    left: 0;
		    text-align: center;
		    right: 0;
		    padding: 6px;
		   opacity:1;
		  transition:opacity 1s linear;
		   -webkit-transform: scale(.75); 
		 
		 
		}
		#profile-upload:hover .fa , #cover-upload:hover .fa{
		   opacity:1;
		   -webkit-transform: scale(1); 
		}
		#profile-upload input.upload , #cover-upload input.upload  {
		    z-index:1;
		    left: 0;
		    margin: 0;
		    bottom: 0;
		    top: 0;
		    padding: 0;
		    opacity: 0;
		    outline: none;
		    cursor: pointer;
		    position: absolute;
		    background:#ccc;
		    width:100%;
		    display:none;
		}

		#profile-upload .hvr-profile-img ,#cover-upload .hvr-cover-img {
		  width:100%;
		  height:100%;
		  display: none;
		  position:absolute;
		  vertical-align: middle;
		  position: relative;
		  background: transparent;
		 }
		#profile-upload .fa:after , #cover-upload .fa:after  {
		    content: "";
		    position:absolute;
		    bottom:0; left:0;
		    width:100%; height:0px;
		    background:rgba(0,0,0,0.3);
		    z-index:-1;
		    transition: height 0.3s;
		    }

		#profile-upload:hover .fa:after , #cover-upload:hover .fa:after   { height:100%; }

		/* css for the user 8 images*/
		.img-thumbnail:hover{
		    border: 3px solid rgba(255, 0, 0, 0.6);
		}
		/*css for logo delete button*/
		#logo-del{
		    border-top-left-radius: 0;
		    border-top-right-radius: 0;
		    width: 100px;
		}
		#cover-del{
		    border-top-left-radius: 0;
		    border-top-right-radius: 0;
		    width: 100px;
		}
   

    </style>
    
    
  <div class="row" style="    margin-right: 0px;
    margin-left: 0px;">
 <div class=" intro duOrange ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <img src="<?php echo base_url() ?>asset/imgs/DubarahLogoWhite.svg" class="img-fluid" style="    max-width: 13rem;
    margin-top: 4.5rem;
    margin-left: 2rem;"><span class="text-white font-weight-bold" style="font-size: 1.5rem; vertical-align: bottom;"> Business </span>
                </div>
                <div class="col-lg-4 col-sm-12 	d-none d-lg-block .d-xl-block" >
                    <div class="card" style="border-radius: 10px 10px 0 0;top: 6.5rem;">
                        <img class="card-img-top" src="<?php echo base_url() ?>asset/imgs/cardImageBusiness.svg">
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
    </div> 

<div class="container panel-head panel ">
	<div class="col-lg-12">
    <div class="clear"> </div>
     <style type="text/css">
        .pad_form{    padding-top: 20px; }
    </style>
		<div class="form-content">
			 <form role="form" id="theForm" method="post" enctype="multipart/form-data">
          <div class="tab-content" id="business-tab-content">
              <div id="input_status" hidden="true"><?php echo $this->uri->segment(1);?></div>
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
  <script type="text/javascript">
       function fill_init_data_card() {
       /// categories
        cs = $("#category_sub").select2('data'); cats = "";
        for (var i = 0; i < cs.length; i++) {
          cats += cs[i].text + " , <br/> " ;
        }
       $("#card_cates").html(cats) ;
       /// country
       // flag = 
       // $("#card_flg").addClass('flag-'+flag);
      }
        $(document).ready(function(){
            $( ".select2MaX3" ).select2( {  maximumSelectionSize: 3 } );
            $( ".select2" ).select2( );
            $(".tab-content#business-tab-content")
             .on("click", "#business-submit ,#business-next-step1, #business-next-step2 , #business-next-step3",function(e){
              e.preventDefault();
              swal({
              title: "Checking Data...",
              text: "Please wait",
              imageUrl: "<?php echo base_url()?>asset/imgs/loading_icon.gif",
              showConfirmButton: false,
              allowOutsideClick: false ,
              timer : 500,   });
              stepNo = 1;
              switch(true){ 
                    case $(this).is("#business-submit"):
                        stepNo= 4;
                        console.log("step 4 " + stepNo);
                        break;
                    case $(this).is("#business-next-step3"):
                        stepNo= 3;
                        console.log("step 3 " + stepNo);
                        break;
                    case $(this).is("#business-next-step2"):
                        stepNo= 2;
                        console.log("step 2 " + stepNo);
                        fill_init_data_card();
                        break;
                    default:
                        stepNo= 1;                    
                        console.log("none");
                        break;
                }
                if(stepNo == 3)
                {
                  lgo = $("#profile-upload").css("background-image");
                  cov = $("#cover-upload").css("background-image");
                  default_img = 'url("<?php echo base_url()?>ass/images/image_profile.jpg")';
                  if( cov == default_img || lgo == default_img ){ //LOGO_SCRLL                   
                    swal("Logo & Cover are mandatory inputs, please check... !!");

                    return;
                  }
                }
                //console.log(  $("#category_sub"). val()  ) ;
                //console.log($("#category").val());
               // return;
                link = '<?php echo base_url()?>business-adding/' + stepNo;
                frmdata = $('#theForm').find('#section_bus'+ --stepNo)
                          .find('input , textarea , select') ;  
                if(stepNo === 2){
                  imgs = $('#theForm').find('#section_bus2').find('img.myInputedImgs');
                  formDataList = [] ;// new FormData();
                  imgs_str="" ;
                  for ( i = 0; i < imgs.length ; i++) {
                     string = $(imgs[i]).attr('src');
                     if(  string.includes( 'demo-img.png' )  === false  )
                     {
                      imgs_str =  string  + "|"  + imgs_str ;
                     }
                  }
                  if(imgs_str !== ""){
                    $("#MyImgsData").val(imgs_str);
                  }
                  ///-------- logo & cover
                  $('#logo_valhide').val()
                  $('#cover_valhide').val()
                }
                  formDataList = frmdata.serialize() ;
                  //console.log(formDataList);
                   $.post( link ,  formDataList ).done(function( data ) {
                        processfrom(data);
                  });
                function processfrom(data) 
                {
                    console.log(data); //return;
                    res = JSON.parse(data);
                    if (res[0]) {
                        if(res[1]=="step2"){
                            swal({
                                title: 'Validated!',
                                text: ' Turn to Next Step.',
                                type: 'success',
                                timer: 3000,
                                html: true,
                                showConfirmButton:true
                            });
                         $("#step1").removeClass("active");
                         $("#step2").addClass("active");
                         document.getElementById("step2").scrollIntoView(true);
                        }else if(res[1]=="step3"){
                            //set_validate()
                            swal({
                                title: 'Validated!',
                                text: ' Turn to Next Step.',
                                type: 'success',
                                timer: 3000,
                                html: true,
                                showConfirmButton:true
                            });
                         $("#step2").removeClass("active");
                         $("#step3").addClass("active");
                         document.getElementById("step3").scrollIntoView(true);
                        }else if(res[1]=="step4"){
                              console.log(res);
                                 swal({
                                    title: 'Done!',
                                    text: 'Ahead to the next step.',
                                    type: 'success',
                                    timer: 6000,
                                    html: true,
                                    showConfirmButton:true
                                    });
                                 $("#step3").removeClass("active");
                                //is_edit =   $("#is_edit").val();
                                // alert(is_edit);
                                
                                <?php  if($selected =='edit'):?>
                                
                                 
                             	<?php  $this->messages->success('Edit Done');?>
                                 window.location.replace("<?php echo base_url().'business-profile/'.$busi_id?>");
                                 
                                 <?php else:  ?>
                                 	
                                 $("#step4").addClass("active");
                              	 document.getElementById("step4").scrollIntoView(true);
                                <?php  endif ?>
                                // $("#step4").addClass("active");
                                
                        }else{  swal("STH STEPS WORNG");   }
                    } else{ 
                         swal({
                                title: 'Not validate!',
                                text: 'Please complete the required files.',
                                type: 'error',
                                timer: 6000,
                                html: true,
                                showConfirmButton:true
                            });
                            // console.log('errors');
                            errors = res[2];
                            lisVal = $(".lst_spn_val");
                            for (var i = 0; i < lisVal.length; i++) {
                              cid= $(lisVal[i]).attr('id');
                              c= $(lisVal[i]).attr('id').replace('v-','');
                              
                                if(errors[c]  != ""){
                                    $("input[name='"+c+"']").removeClass("validate");
                                    $("#"+ cid).html(errors[c]);
                                    $("#"+ cid).addClass(" invalid ");
                                    console.log( c );
                                }else{
                                    $("input[name='"+c+"']").addClass("validate");
                                    $("#"+ cid).html("");
                                    $("#"+ cid ).removeClass(" invalid ");
                                }
                            } 
                      }
                }
                $("#prev-to-step2").click(function(){
                    $("#step3").removeClass('active');
                    $("#step2").addClass('active');
                    document.getElementById("step2").scrollIntoView(true);
                });
                $("#prev-to-step1").click(function(){
                    $("#step2").removeClass('active');
                    $("#step1").addClass('active');
                    document.getElementById("step1").scrollIntoView(true);
                });
            });

        });
    </script>
