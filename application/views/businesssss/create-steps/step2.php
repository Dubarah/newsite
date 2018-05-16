<div class="container"  id="section_bus2">
    <div class="col-lg-12">
        <div class=" pad_form col-lg-8">
            <p>
               
                <h2> <strong>  Add Your Business </strong>  2 of 3  </h2>
                <br/>
                 <div class="alert  alert-dark pad_form" >
                    <i class="fa fa-home"></i> &nbsp;
                    <?php 
                   // $str1 =" checked='checked' " ;  $str0 ="" ;
                    // if(isset($busin_data[0]) &&  $busin_data[0]->isOwner == 0 )
                    // { $str0 = $str1; $str1=""; } 
                    ?>
                    <input type="radio" name="isOwner" value="1" checked="checked" />
                    <label>I’m a business owners I’m</label>
                    &nbsp;
                    <input type="radio" name="isOwner"  value="0" />
                    <label>I’m  <u> NOT </u>  a business owne </label>
                 </div>
            </p>
        </div>  
        <!-- busin_datetimes busin_faq -->
        <div class="row pad_form col-lg-8">
            <div class=""> 
                <h2>Open days and hours </h2>
            </div> 
            <div class="clear"></div>
            <div class=""> 
                <h6>
                    <div class="text-sm">
                    Adjust opening time and closing and remove weekends from below
                    </div>
                </h6> 
            </div>
              <div class="row">
             
                <input type="hidden" name="timesCount" id="timesCount" value="">
              
                <div id="timesContainer">
                    <!-- <div id="timesCount" style="display: none"><div>   -->
                </div>
                <br/>
                
            </div>
            <div class="row col-lg-2 pull-right list-inline">
                    <div class="btn  btn-sm  btn-default" id="delTimes" title="Delete Time">
                        <i class="fa-trash-o fa "></i>
                    </div>
                    <div class="btn btn-sm btn-default " id="addTimes" title="Add Time">
                        <i class="fa-plus fa"></i>
                    </div>
                </div>
        </div>
        <div class="divider col-lg-8"></div> 
        <div class="row pad_form col-lg-8">
            <div class="h2">FAQ </div>
            <br/>
            <div class="h6 " >
                Start adding frequently asked questions and answer it to cover all your customers concerns.
            </div>
             <div class="col-lg-12">
                <br/>
                <input type="hidden" name="faqsCount" id="faqsCount" value="">
                 <div class="col-lg-10 pull-left" id="faqsContainer">
                   <!-- <div id="faqsCount" style="display: none"><div> -->  
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
        </div> 
        <br/>
        <div class="divider col-lg-8"></div>
        <br/>
        <div class="row pad_form col-lg-8">
                <h2> About Your Business </h2><br/>
                <textarea id="about" name="about" class="form-control  "  style="height:auto !important; "
                placeholder="Briefly Explain Your Achievement & What You Did." rows="10"><?php if(isset($busin_data[0]->about) )echo $busin_data[0]->about ?></textarea>
        </div>
        <br/>
        <div class="divider col-lg-8"></div>
        <br/>
        <div class=" pad_form col-lg-8">
                <h2> Logo </h2><br/>
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
                        <div class="user-images" 
                        id='profile-upload' style="border-radius: 5px;height: 100px;width: 100px;
                            border-bottom-left-radius: 0;
                            border-bottom-right-radius: 0;
                            margin-top: 11px;
                        background-image: url('<?php echo $logoImg ; ?>')">
                            <div class="hvr-profile-img"><input type="file" name="com-logo" id='getval' accept="image/*" class="upload w180 com_snglimg" title="Dimensions 180 X 180" id="imag"></div>
                            <i class="fa fa-camera"></i>
                        </div>
                        <button id="logo-del" type="button" class="btn btn-danger red">Delete</button>
                        <input type="hidden" name="logo_img" id="logo_valhide" value="<?=base64_encode(file_get_contents($logoImg))?>">
                    </div>
                </div>
            </div>
        <br/>
        <div class="divider col-lg-8"></div>
        <br/>
         <div class=" pad_form col-lg-8">
                <h2> Upload Business Cover Photo  </h2><br/>
                <div class="mar-top">
                <h6> This image will appear on your business card, choose it carefully to be high quality and creative images describe <br/>your business. Good images will be selected to be featured on our homepage cover. <small>(<i> less than 6 MB </i>)</small></h6>
                </div>
                <div class="row">
                    <?php if(isset($busin_data[0]->cover) )
                            {
                                $coverImg=base_url().$busin_data[0]->cover  ;
                            }else{
                                $coverImg=base_url().'ass/images/image_profile.jpg' ;
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
                        <button id="cover-del" type="button" class="btn btn-danger red">Delete</button>
                        <input type="hidden" name="cover_img" id="cover_valhide" value="<?=base64_encode(file_get_contents($coverImg))?>">
                    </div>
                </div>
            </div>


         <div   class="pull-right" >
             <div class="card">
                <i class="fa fa-check-circle fa-3x on-img text-success" aria-hidden="true"></i>
                <img class="card-img-top " id="cover-upload-card" style="width:200px" src="<?php $user_photo ? print(base_url().'uploads/users/'.$user_photo) : print(base_url().'asset/imgs/demo-img-user.png') ?>" alt="Card image cap"/>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $userData['first'].' ' .$userData['last'].' '?><i class="fa fa-check-circle red-text" aria-hidden="true"></i></h4>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $userData['prof']?></h6>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <div class="media">
                        <span class="flag flag-can flag-1x mar-right"></span>
                        <div class="media-body">
                            <p id = 'city-country3' class="text-muted small">10 reviews</p>
                        </div>
                    </div>
                </div>
                <div class="card-body ">     
                    <div class="mar-top ">
                        <div >
                            <p><span  >Category1, Category2, </span></p>
                            <p class="text-muted">Address • 0.0 km </p>
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
            <small>(<i> less than 6 MB </i>)</small>
        </p>
        <div class="row col-lg-8">
            <div class="mar-top col-sm-12 col-lg-2 text-center">
                <label for="image-input1">
                <img id="image-1" src="<?php echo base_url()?>asset/imgs/demo-img.png"  class="img-thumbnail
                myInputedImgs">
                </label> 
                <input class="myImgInp" name = "imageInput1" type="file" accept="image/*" id="image-input1" style="display: none;">
                <button type="button" id="image-del1" class="btn btn-link">Delete</button>
            </div>
            <div class="mar-top col-sm-12 col-lg-2 text-center">
                <label for="image-input2">
                <img id="image-2" src="<?php echo base_url()?>asset/imgs/demo-img.png"  class="img-thumbnail myInputedImgs">
                </label>
                <input class="myImgInp" name = "imageInput2" type="file" accept="image/*" id="image-input2" style="display: none;">
                <button type="button" id="image-del2" class="btn btn-link">Delete</button>
            </div>
            <div class="mar-top col-sm-12 col-lg-2 text-center">
                <label for="image-input3">
                <img id="image-3" src="<?php echo base_url()?>asset/imgs/demo-img.png"  class="img-thumbnail myInputedImgs">
                </label>
                <input class="myImgInp" name = "imageInput3" type="file" accept="image/*" id="image-input3" style="display: none;">
                <button type="button" id="image-del3" class="btn btn-link">Delete</button>
            </div>
            <div class="mar-top col-sm-12 col-lg-2 text-center">
                <label for="image-input4">
                <img id="image-4" src="<?php echo base_url()?>asset/imgs/demo-img.png"  class="img-thumbnail myInputedImgs">
                </label>
                <input class="myImgInp" name = "imageInput4" type="file" accept="image/*" id="image-input4" style="display: none;">
                <button type="button" id="image-del4" class="btn btn-link">Delete</button>
            </div>
            <div class="mar-top col-sm-12 col-lg-2 text-center">
                <label for="image-input5">
                <img id="image-5" src="<?php echo base_url()?>asset/imgs/demo-img.png"  class="img-thumbnail myInputedImgs">
                </label>
                <input class="myImgInp" name = "imageInput5" type="file" accept="image/*" id="image-input5" style="display: none;">
                <button type="button" id="image-del5" class="btn btn-link">Delete</button>
            </div>
            <div class="mar-top col-sm-12 col-lg-2 text-center">
                <label for="image-input6">
                <img id="image-6" src="<?php echo base_url()?>asset/imgs/demo-img.png"  class="img-thumbnail myInputedImgs">
                </label>
                <input class="myImgInp" name = "imageInput6" type="file" accept="image/*" id="image-input6" style="display: none;">
                <button type="button" id="image-del6" class="btn btn-link">Delete</button>
            </div>
        </div>

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
                <input id="Pinterest" name="Pinterest" type="text" class="form-control" placeholder="
                Pinterest "
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
