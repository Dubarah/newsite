<div class="container"  id="section_bus3">
    <div class="col-lg-8">
            <div class="header">
                <p>
                    <h2> <strong>  Add Your Business</strong>  3 of 3  </h2>
                    Please choose the features below that your business support it:
                </p>
            </div>  

            <div class=" pad_form">
                <?php 
                    if(isset($busin_data[0]->price)){
                        $price=$busin_data[0]->price; $pr1=$pr2=$pr3=$pr4="";
                        switch ($price) {
                            case '1':  $pr1 ="selected" ;
                                break;
                            case '2': $pr2 ="selected" ;
                                break;
                            case '3': $pr3 ="selected" ;
                                break;
                            case '4': $pr4 ="selected" ;
                                break;
                            default:
                                break;
                        }
                    }
                ?>
              <label> <strong> Price <i class="text-danger">*</i> </strong> </label>
               <select name="Price"   
                class="form-control">
                    <option <?=$pr1?> value="1">$</option>
                    <option <?=$pr2?> value="2">$$</option>
                    <option <?=$pr3?> value="3">$$$</option>
                    <option <?=$pr4?> value="4">$$$$</option>
                </select>
            </div>

            <div class=" pad_form">
              <label> <strong> General Features </strong> </label>
               <select class="form-control  select2" placeholder="Business General Features"  
                  name="genfeat[]" id="genfeat" multiple="multiple"  >
                <?php foreach ($generalFeatures->result() as $feat):?>
                    <option value="<?php echo $feat->id?>"
                        <?php if(isset($busin_genfeat) ) {
                                foreach ($busin_genfeat as $gf) {
                                    if($gf->gf_id == $feat->id)
                                    { echo " selected ";}else {echo "" ;}
                                }   
                            } ?>
                        >
                        <?php echo $feat->name?>
                    </option>
                <?php endforeach?>
                </select>
            </div>
            <div class="pad_form">
              <label> <strong> Parking <i class="text-danger">*</i>  </strong> </label>
               <select name="Parking"  
                class="form-control">
                <?php  
                $Parkings = [ 'Street' , 'Garage' , 'Valet' , 'Private_Lot' , 'Validated' ];
                foreach ($Parkings as $value): ?>
                <option <?php if(isset($busin_data[0]) && 
                        $busin_data[0]->parking == $value  ) { echo " selected ";}else {echo "" ;} ?>
                     value="<?=$value?>"><?php echo str_replace('_', " ", $value); ?>   </option>
                <?php endforeach ?>
                </select>
            </div>

            <div class=" pad_form">
              <label> <strong> Wi-Fi <i class="text-danger">*</i> </strong> </label>
               <select name="WiFi"  
                class="form-control">
                <?php  
                $WiFi = [ '0' => 'Free' , '1' => 'Paid' ];
                foreach ($WiFi  as $key  => $value): ?>
                ?>
                <option <?php if(isset($busin_data[0]) && 
                        $busin_data[0]->wi_fi == $key  )
                     { echo " selected ";}else {echo "" ;} ?>
                     value="<?=$key?>"><?php echo   $value ; ?>   </option>
                <?php endforeach ?>
                </select>
            </div>

             <div class=" pad_form">
              <label> <strong> Smoking <i class="text-danger">*</i> </strong> </label>
               <select name="Smoking"  
                class="form-control">
                <?php  $WiFi = [ '0' => 'No' , '1' => 'Outdoor Area / Patio Only' ];
                foreach ($WiFi  as $key  => $value): ?>
                ?>
                <option <?php if(isset($busin_data[0]) && 
                        $busin_data[0]->smoking == $key  )
                     { echo " selected ";}else {echo "" ;} ?>
                     value="<?=$key?>"><?php echo   $value ; ?>   </option>
                <?php endforeach ?>
                </select>
            </div>

            <div class=" pad_form">
              <label> <strong> Meals Served  </strong> </label>
               <select name="MealsServed"  
                class="form-control">
                <?php  
                $Parkings = [ 'Breakfast' , 'Brunch' , 'Lunch' , 'Dinner' , 'Dessert',"Late_Night" ];
                foreach ($Parkings as $value): ?>
                <option <?php if(isset($busin_data[0]) && 
                        $busin_data[0]->meals_served == $value  ) { echo " selected ";}else {echo "" ;} ?>
                     value="<?=$value?>"><?php echo str_replace('_', " ", $value); ?>   </option>
                <?php endforeach ?>
                </select>
            </div>

            <div class=" pad_form">
              <label> <strong> Alcohol  </strong> </label>
               <select name="Alcohol"  
                class="form-control">
                <?php  $Alcohol = [ 'Full_Bar' => 'Full Bar' , 
                                 'Beer&WineOnly' => 'Beer & Wine Only' ,
                                  'HappyHour' => ' Happy Hour '];
                foreach ($Alcohol  as $key  => $value): ?>
                ?>
                <option <?php if(isset($busin_data[0]) && 
                        $busin_data[0]->alcohol == $key  )
                     { echo " selected ";}else {echo "" ;} ?>
                     value="<?=$key?>"><?php echo   $value ; ?>   </option>
                <?php endforeach ?>
                </select>
            </div>

            <div class=" pad_form">
              <label> <strong> Music </strong> </label>
               <select name="Music"  
                class="form-control">
                <?php $Parkings = [ 'DJ' , 'Juke_Box' , 'Karaoke' , 'Live' ];
                foreach ($Parkings as $value): ?>
                <option <?php if(isset($busin_data[0]) && 
                        $busin_data[0]->music == $value  ) { echo " selected ";}else {echo "" ;} ?>
                     value="<?=$value?>"><?php echo str_replace('_', " ", $value); ?>   </option>
                <?php endforeach ?>
                </select>
            </div>
            <br/>
            <div class="divider"></div>
            <br/>
            <h2 class="mar-top col-lg-8"> Call to action button </h2>
            <p class="small">
                What the best from below can describe your business: <br/>
            </p>
            <div class="mar-top ">
                <div class="input-group col-md-12">
                    <div class="col-md-6">
                        <label><input type="radio" name="calltype" value="1">
                        Make your reservation today! <br/>
                        <small> Contact us </small>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <label><input type="radio" name="calltype" value="2"  >
                        Book an Appointment today! <br/>
                        <small>Book Now </small>
                        </label>
                    </div>
                </div>
                <div class="col-md-12">
                     <div class="input-group">
                        <div class="col-md-6">
                            <label><input type="radio" name="calltype" value="3"  >
                            Get a Quick Quote Now! <br/>
                            <small> Get Quote </small>
                            </label>
                        </div>
                        <div class="col-md-6">
                        <label><input type="radio" name="calltype" value="4"  >
                        Sign up today! <br/>
                        <small> Sign Up </small>
                        </label>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <label><input type="radio" name="calltype" value="5"  >
                            Get to know more about us today! <br/>
                            <small>View Website </small>
                            </label><br/>
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="weblink" class="form-control " 
                            placeholder="https://www.yourbusinessdomain.com/">
                        </div>
                </div>
            </div>
    </div>   
    
     <div class="col-lg-12">
        <br/><br/>
        <div class="divider col-lg-12"></div>
        <br/><br/>
        <div class="btn-group-horizontal col-lg-12"> 
        <div class="pull-left col-lg-8">
            <p>
            Please note that any business additions must first be evaluated by our moderators
            before they appear in search results. This process typically takes two days or less,
            depending on our ability to independently verify the information. If your business is
            eligible you will receive an email notification when your business submission is
            accepted </p>
        </div>
        <div class="pull-right ">
            <div class="btn-group-horizontalcol-lg-4">
                <div class="col-md-4">
                <button type="button" id="prev-to-step2" class="btn">back</button></div>
                <div class="col-md-4">
                <button type="button" id="business-submit" class="btn add-dubarah-btn btn-block btn-default">
                Submit My Business</button> 
                </div>
            </div>
        </div>    
        <br/><br/><br/><br/>
        </div>
        <div class="  col-lg-12"> <br/><br/></div>
    </div>
    
</div> 