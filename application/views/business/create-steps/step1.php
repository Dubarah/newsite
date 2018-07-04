<div class="container" id="section_bus1">
     <input id="is_edit" name="is_edit" value="0" hidden="true" />
     <input id="busi_id" name="busi_id" value="<?php isset($busin_data)? $busin_data[0]->id : ''?>" hidden="true" />
    <div class="col-lg-8">
        <div class="header">
            <p>
                <h2> <strong><?php echo $selected == 'edit'? 'Edit '   :  'Add '   ?>   Your Business</strong>  1 of 3  </h2>
              <?php if($selected == 'create'): ?>
                Add information about your business below. Your business page will not appear in
                search results until this information has been verified and approved by our
                moderators. Once it is approved, you will receive an email with instructions on how to
                claim your business page.
                <?php endif; ?>
            </p>
        </div> 
      
      
      <?php if($selected == 'create'): ?>
        <p>
            Make sure it's not already listed
  <div class="row">
    <div class="col-lg-8"> 
               <input type="text" id="search_busi_name" placeholder="Your business name"  
                class="form-control " value="" />
            </div> 
              <div class="col-lg-4"> 
               <!-- <div name="search_busi_name_btn" id="search_busi_name_btn" 
                        class="btn btn-danger  "> search</div>  -->
             <div name="search_busi_name_btn" 
             id="search_busi_name_btn" 
             class="btn btn-light btn-block duOrange text-white">Add My Business</div>
            </div>
            </div>
            <div id="search_busi_res"></div>
        </p>
        
        <?php endif; ?>
        <div class="divider"></div>
        
            <div class=" pad_form">
            <label> <strong> Country </strong> </label> 
            <select name="country"  name="country-select" id="country-select" class="form-control form-control-lg no-border mar-top " placeholder="Business Country">
                <option value="0" disabled selected>Business Country </option>
                <?php foreach ($countries->result() as $country):?>
                    <option  <?php if(isset($busin_data[0]) && 
                                $busin_data[0]->countryId == $country->country_id)
                                { echo " selected ";}else {echo "" ;} ?>
                    value="<?php echo $country->country_id?>">
                        <?php echo $country->country_english_name?>
                    </option>
                <?php endforeach?>
            </select>
            <span id="v-country" class="lst_spn_val"></span>
            </div>

            <div class=" pad_form">
                <label> <strong> Business Name </strong> </label>
                <input type="text" name="name"  
                 placeholder="Dr. Nabeel Clinic, Shawrma Al Demashqi"
                 class="form-control no-border mar-top" 
                 value="<?php if(isset($busin_data[0]->name) )echo $busin_data[0]->name ?>"
                 />
                 <span id="v-name" class="lst_spn_val"></span>
            </div>
            <div class=" pad_form">
                <label> <strong> Address</strong> </label>
              
                <textarea id="ach_exp" name="address" class="form-control no-border mar-top" rows="4" 
                placeholder="123 Downtown" >
                <?php if(isset($busin_data[0]->address) )echo $busin_data[0]->address ?>
                </textarea>
                <span id="v-address" class="lst_spn_val"></span>
                
                <input type="text" name="addressOffice" class="form-control no-border mar-top" placeholder="Office number 123"
                value="<?php if(isset($busin_data[0]->address_office) )echo $busin_data[0]->address_office ?>"
                >
                <span id="v-addressOffice" class="lst_spn_val"></span>
            </div>
            <div class="row pad_form">
                <div class="col-lg-4">
                    <label> <strong> City </strong> </label>
                    <select name="city" class=" form-control form-control-lg no-border mar-top" name="city-select" id="city-select">
                          
                          <?php if(isset($busin_data)):  ?>
                             <option value="<?php echo $my_cityId->city_id?>"  selected><?php echo $my_cityId->city_english_name ?></option> 

                
                          <?php  else:  ?>
                          <option value="0" disabled selected>Business City</option> 
                           <?php endif;?>
                    </select>
                    <span id="v-city" class="lst_spn_val"></span>
                    <input type="hidden" id="city_callback" value="<?php echo isset($busin_data)?$busin_data[0]->cityId : ''?>">
                    <br/><br/>
                </div>
                <div class="col-lg-4">
                    <label> <strong> Province </strong> </label> 
                    <input type="text" name="province" class="form-control no-border mar-top" placeholder="ON"
                    value="<?php if(isset($busin_data[0]->province) )echo $busin_data[0]->province ?>"
                    > <br/><br/>
                    <span id="v-province" class="lst_spn_val"></span>
                </div>
                <div class="col-lg-4">
                    <label> <strong> Postal / Zip Code </strong> </label>
                    <input type="text" name="postal" class="form-control no-border mar-top" placeholder="N4P 2L4"
                    value="<?php if(isset($busin_data[0]->postal) )echo $busin_data[0]->postal ?>"
                    > <br/><br/>
                    <span id="v-postal" class="lst_spn_val"></span>
                </div>
            </div>

            <div class="row pad_form">
                <div class="col-lg-6">
                <label> <strong> Work Phone</strong> </label>
                <input type="text" name="workPhone" class="form-control" placeholder="1234567890"
                value="<?php if(isset($busin_data[0]->work_phone) )echo $busin_data[0]->work_phone ?>"
                >
                <span id="v-workPhone" class="lst_spn_val"></span>
                </div>
                <div class="col-lg-6">
                <label> <strong>Mobile Phone ( Optional )</strong> </label>
                <input type="text" name="mobilePhone" class="form-control" placeholder="1234567890"
                value="<?php if(isset($busin_data[0]->mobile_phone) )echo $busin_data[0]->mobile_phone ?>"
                >
                <span id="v-mobilePhone" class="lst_spn_val"></span>
                </div>
            </div>

            <div class="row pad_form">
                  <div class="pad_form select2-wrapper col-lg-4 pull-left">
                <label> <strong> Business  Categories *</strong> </label>
                <?php  // print_r( $busin_catgo  ) ;  exit() ; ?>
                <select id="category_prnt"  name="category_prnt"
                class="form-control js-example-responsive select2MaX3"
                placeholder='max 3' onchange="get_catgos(this.value)"> <!-- busin_catgo // edit--> 
                    <?php foreach ($categories->result() as $category):?>

                    <option value="<?php echo $category->id?>"
                        <?php // if(isset($busin_catgo)  ) { 
                                //$busin_catgo2 = explode(',', $busin_catgo)  ; print_r($busin_catgo2);
                                //foreach ($busin_catgo2[1] as $cat) {
                                    if( isset($busin_data[0]) && $busin_data[0]->category_prnt == $category->id )
                                    { echo " selected ";}else {echo "" ;}
                                //}   
                            // }
                        ?>
                        >
                        <?php echo $category->name?>
                         <?php //echo $busin_data[0]->category_prnt . "=" .  $category->id ;  ?>
                    </option>
                    <?php endforeach?>
                </select>
                <input type="hidden" id="category_callback" value="<?php echo isset($busin_data)?$busin_data[0]->category_prnt :   '' ?>">
                <span id="v-category" class="lst_spn_val"></span ><br/>
                
            </div>
          <div class="pad_form select2-wrapper col-lg-8 pull-right">
            <label>   Business  Category list </label>
             <div  >
                    <select name="category_sub[]" class="form-control  js-example-responsive    select2MaX3"   id="category_sub" placeholder='category list' multiple>
                      <?php if(isset($busin_data)){
                        
              
                      foreach ($my_categories->result() as  $value) {?>
                        
                        
                    
                        
          <option value="<?php echo $value->id ?>" selected><?php echo $value->name ?></option>           
              
                    <?php   } } ?>
                      
                    </select>
                    <span id="v-category_sub" class="lst_spn_val"></span>
                    <br/><br/>
                    <input type="hidden" id="categorylist_callback" value="<?php echo isset($busin_data)?  $busin_catgo  : '' ;?>">
            </div>
            </div>
            </div>
           
           <?php if(isset($busin_data)){?>
           <input type="hidden" name="busi_id" id="busi_id" value="<?php echo $busi_id ?>">
           <?php } ?>
				
           <div class=" pad_form">
                <label> <strong>     Web Address </strong> </label>
                <input type="text" name="webAddress"  
                 placeholder="https://www.yourbusinessdomain.com/"
                 class="form-control" 
                 value="<?php if(isset($busin_data[0]->webaddress) )echo $busin_data[0]->webaddress ?>"
                 />
                 <span id="v-webAddress" class="lst_spn_val"></span>
            </div>
            
            <div class=" pad_form">
                <label> <strong>   Work email address </strong> </label>
                <input type="email" name="emailAddress"  validate='email'
                 placeholder="info@YourBusinessDomain.com"
                 class="form-control" 
                 value="<?php if(isset($busin_data[0]->work_email) )echo $busin_data[0]->work_email ?>"
                 />
                 <span id="v-emailAddress" class="lst_spn_val"></span>
            </div>

          
    </div>   
    <div >
        <br/><br/>
        <div class="divider"></div>
        <br/><br/>
        <div class="pull-right col-md-4">
         <button type="button" id="business-next-step2" class="btn  btn-block btn-default">Next</button>
       </div>
    </div>
    <br/><br/><br/><br/>
</div> 
