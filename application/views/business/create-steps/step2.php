<div class="container"  id="section_bus2">
    <div class="col-lg-12">
        <div class=" pad_form col-lg-8">
            <p>
               
                <h4> <strong>  Add Your Business </strong>  2 of 3  </h4>
                <br/>
                 <div class="alert  alert-dark pad_form" >
                    <i class="fa fa-home"></i> &nbsp;
                    <?php 
                     $str1 =" checked='checked' " ;  $str0 ="" ;
                     if(isset($busin_data[0]) &&  $busin_data[0]->isOwner == 0 )
                     { $str0 =" checked='checked' "; $str1=""; } 
                    ?>
                    <input type="radio" name="isOwner" id="isOwner1" value="1" <?=$str1?> />
                    <label>I’m a business owners I’m</label>
                    &nbsp;
                    <input type="radio" name="isOwner" id="isOwner0"  value="0" <?=$str0?> />
                    <label>I’m  <u> NOT </u>  a business owne </label>
                 </div>
            </p>
        </div>  
        <!-- busin_datetimes busin_faq -->
        <div class=" pad_form col-lg-8">
            <div class=""> 
                <h4>Open days and hours </h4>
              
            </div> 
            <div class="clear"></div>
            <div class=""> 
                <h6>
                    <div class="text-sm">
                    Adjust opening time and closing and remove weekends from below
                    </div>
                       <small>(<i> one at least </i> ) </small>
                </h6> 
            </div>
              <div class="">
                <br/>
                <input type="hidden" name="timesCount" id="timesCount" value="">
                <div id="timesContainer">
                </div>
                <div>
                    <span id='v-day'  class="lst_spn_val"></span><br/>
                    <span id='v-timeFrom'  class="lst_spn_val"></span><br/>
                    <span id='v-timeto'  class="lst_spn_val"></span><br/>
                </div>
                <br/>
                <div class="col-lg-2 pull-right list-inline">
                    <div class="btn  btn-sm  btn-default" id="delTimes" title="Delete Time">
                        <i class="fa-trash-o fa "></i>
                    </div>
                    <div class="btn btn-sm btn-default " id="addTimes" title="Add Time">
                        <i class="fa-plus fa"></i>
                    </div>
                </div>
                <div class="container">

</div>
            </div>
        </div>
        <div class="divider col-lg-8"></div> 

        <div class=" pad_form col-lg-8">
            <div class="h4">FAQ </div>
            <br/>
            <div class="h6 " >
                Start adding frequently asked questions and answer it to cover all your customers concerns.
                <small>(<i> one at least </i> ) </small>
            </div>
             <div class="col-lg-12">
                <br/>
                <input type="hidden" name="faqsCount" id="faqsCount" value="">
                 <div class="col-lg-10 pull-left" id="faqsContainer">
                </div>
                <div class="col-lg-2 pull-right list-inline">
                    <div class="btn  btn-sm  btn-default" id="delFaqs" title="Delete Question">
                        <i class="fa-trash-o fa "></i>
                    </div>
                    <div class="btn btn-sm btn-default " id="addFaqs" title="Add Question">
                        <i class="fa-plus fa"></i>
                    </div>
                </div>

            </div>
            <div>
                    <span id='v-question'  class="lst_spn_val"></span><br/>
                    <span id='v-answer'  class="lst_spn_val"></span><br/>
            </div>
        </div> 
        <br/>
        <div class="divider col-lg-8"></div>
        <br/>
        <div class=" pad_form col-lg-8">
                <h4> About Your Business </h4> <i class='text-danger'>*</i> <br/>
                <textarea id="about" name="about" class="form-control  "  style="height:auto !important; "
                placeholder="Briefly Explain Your Achievement & What You Did." rows="10"><?php if(isset($busin_data[0]->about) )echo $busin_data[0]->about ?></textarea>
        </div>
        <div> <span id='v-about'  class="lst_spn_val"></span></div>
        <br/>
        <div class="divider col-lg-8"></div>
        <div id="LOGO_SCRLL"></div>
        <br/>
        <div class=" pad_form col-lg-8">
                <h4> Logo <i class='text-danger'>*</i></h4>  <br/>
                <div class="mar-top">
                <h6> Please upload your business logo <small>(<i> less than 6 MB </i>)</small></h6>
                </div>
                <div class="row">
                    <?php if(isset($busin_data[0]->logo) )
                            {  
                                $logoImg=base_url().$busin_data[0]->logo  ;
                                     
                            }else{
                                $logoImg=base_url().'ass/images/image_profile.jpg' ;
                            }
                        ?>
                    <div class="btn-group-vertical">
                        <div 
                        id='profile-upload' 
                        style="/*border-radius: 5px;height: 100px;width: 100px;*/
                           /* border-bottom-left-radius: 0;
                            border-bottom-right-radius: 0;*/
                          /*  margin-top: 11px;*/
                        background-image: url('<?php echo $logoImg ; ?>')">
                            <div class="hvr-profile-img"><input type="file" name="com-logo" id='getval' accept="image/*"
                                class="img-thumbnail upload w180 com_snglimg" 
                             title="Dimensions 180 X 180" id="imag"></div>
                            <i class="fa fa-camera"></i>
                        </div>
                        <!-- class="upload w180 com_snglimg" 
                        class="user-images  " -->
                       <!--  <button id="logo-del" type="button" class="btn btn-danger red">Delete</button> -->
                        <input type="hidden" name="logo_img" id="logo_valhide" value="<?=$logoImg?>">
                    </div>
                </div>
            </div>
        <br/>
        <div class="divider col-lg-8"></div>
        <br/>
         <div class=" pad_form col-lg-8">
                <h4> Upload Business Cover Photo  <i class='text-danger'>*</i></h4> <br/>
                <div class="mar-top">
                <h6> This image will appear on your business card, choose it carefully to be high quality and creative images describe <br/>your business. Good images will be selected to be featured on our homepage cover. <small>(<i> less than 6 MB </i>)</small></h6>
                </div>
                <div class="row">
                    <?php if(isset($busin_data[0]->cover) )
                            {
                                $coverImg=base_url().$busin_data[0]->cover  ;
                                $user_photo = true;
                            }else{
                                $coverImg=base_url().'ass/images/image_profile.jpg' ;
                                $user_photo = false;
                            }
                        ?>
                    <div class="btn-group-vertical">
                        <div class="user-images " id='cover-upload' style="border-radius: 5px;height: 100px;width: 100px;
                            border-bottom-left-radius: 0;
                            border-bottom-right-radius: 0;
                            margin-top: 11px;
                        background-image: url('<?php echo $coverImg ?>')">
                            <div class="hvr-profile-img"><input type="file" name="com-cover" id='getval-cover' accept="image/*" class="upload w180 com_snglimg" title="Dimensions 180 X 180" id="imag"></div>
                            <i class="fa fa-camera"></i>
                        </div>
                       <!--  <button id="cover-del" type="button" class="btn btn-danger red">Delete</button> -->
                        <input type="hidden" name="cover_img" id="cover_valhide" value="<?php echo $coverImg ?>">
                    </div>
                </div>
            </div>


         <div   class="pull-right" >
             <div class="card">
                <i class="fa fa-check-circle fa-3x on-img text-success" aria-hidden="true"></i>
                <img class="card-img-top " id="cover-upload-card" style="width:200px" src="<?=$coverImg?>" alt="Card image cap"/>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $userData['first'].' ' .$userData['last'].' '?><i class="fa fa-check-circle red-text" aria-hidden="true"></i></h4>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData['prof']?></h6>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <div class="media">
                        <span id="card_flg" class="flag  flag-1x mar-right"></span>
                        <div class="media-body">
                            <p id = 'city-country3' class="text-muted small">0 reviews</p>
                        </div>
                    </div>
                </div>
                <div class="card-body ">     
                    <div class="mar-top ">
                        <div >
                            <p><span id="card_cates">Category1, Category2,</span></p>
                            <!-- <p class="text-muted">Address • 0.0 km </p> -->
                        </div>
                    </div>
                </div>
            </div>
         </div>   
        <br/>
        <div class="divider col-lg-8"></div>
        <br/>
       
        <h2 class="mar-top col-lg-8"> Upload gallery </h2>
        <p class="small">
            Give your customers a better understanding of your place, work, etc.. <br/>
            Good images will be selected to be featured on our homepage cover
            <small>(<i> <u> one at least </u> & less than 6 MB </i>)</small>
        </p>
                <!-- HERE IS THE IMGES -->
        <?php  $ImgNo = 6; $ImgArr = [] ;
            for ($i=0; $i < $ImgNo   ; $i++) { 
                $imgSrc = base_url()."asset/imgs/demo-img.png"; 
                if ( isset($busin_imgs[$i] ) ) {
                    $imgSrc =  base_url().$busin_imgs[$i]->img; 
                } 
                array_push( $ImgArr , $imgSrc );
            } 
            
        ?>
        <div class="row col-lg-8">
            <?php   for ($i=0; $i < count($ImgArr); $i++) {  ?>
            <div class="mar-top col-sm-12 col-lg-2 text-center">
                <label for="image-input<?=$i+1?>">
                <img id="image-<?=$i+1?>" src="<?=$ImgArr[$i]?>"  class="img-thumbnail
                myInputedImgs">
                </label> 
                <input class="myImgInp" name = "imageInput<?=$i+1?>" type="file" accept="image/*" id="image-input<?=$i+1?>" style="display: none;">
                <button type="button" id="image-del<?=$i+1?>" class="btn btn-link">Delete</button>
            </div>
            <?php } ?>
        </div>
        <div><span id='v-MyImgsData'  class="lst_spn_val"></span></div>
        <br/>
        <div class="divider col-lg-8"></div>
        <br/>
        <div class="pad_form col-lg-8">
        <h2 class="mar-top"> Social Media</h2>
            <div class="  mar-top">
                <input id="fb" name="Fb" type="text" class="form-control" placeholder="Facebook "
                 value="<?php if(isset($busin_data[0]->facebook) )echo $busin_data[0]->facebook ?>"
                >
            </div>
            <div class=" mar-top">
                <input id="tw" name="Tw" type="text" class="form-control" placeholder="Twitter "
                value="<?php if(isset($busin_data[0]->twitter) )echo $busin_data[0]->twitter ?>"
                >
            </div>
            <div class="mar-top">
                <input id="lnkin" name="lnkin" type="text" class="form-control" placeholder="Linkedin "
                value="<?php if(isset($busin_data[0]->linkedin) )echo $busin_data[0]->linkedin ?>"
                >
            </div>
            <div class="mar-top">
                <input id="Pinterest" name="Pinterest" type="text" class="form-control" placeholder="Pinterest"
                value="<?php if(isset($busin_data[0]->pinterest) )echo $busin_data[0]->pinterest ?>"
                >
            </div>
        </div>
       <!--  <br/>
        <div class="divider col-lg-8"></div>
        <br/>
        
        <div class="pad_form col-lg-8">
            <h2 class="mar-top">  Write a review for this business </h2>
            
            <div class="alert  alert-dark pad_form" >
                Select your rating
                 <textarea id="review" name="review" class="form-control  "  style="height:auto !important; " 
                placeholder="Start your review ..." rows="5"></textarea>
            </div>
        </div> -->
        <div >
            <br/><br/>
            <div class="divider col-lg-12"></div>
            <br/><br/>
            <div class=" col-lg-12">
            <div class="pull-right col-lg-6">
                <div class=" btn-group-horizontal">
                    <button type="button" id="prev-to-step1" class="btn col-md-4  ">back</button>
                    <button type="button" id="business-next-step3" class="btn col-md-4 pull-right   btn-block btn-default">Next and finalise</button>
                </div>
                </div>
            </div>
        </div>
        <br/><br/><br/><br/>
    </div>
    <div style="display: none">
        <input type="hidden" name="MyImgsData" id="MyImgsData" value="" />
    </div>
</div> 
