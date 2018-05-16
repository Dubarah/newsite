<div class="container" id="section_bus1">
     <input id="is_edit" name="is_edit" value="0" hidden="true" />
     <input id="busi_id" name="busi_id" value="<?php isset($busin_data)? $busin_data[0]->id : ''?>" hidden="true" />
    <div class="col-lg-8">
        <div class="header">
            <p>
                <h2> <strong>  Add Your Business</strong>  1 of 3  </h2>
                Add information about your business below. Your business page will not appear in
                search results until this information has been verified and approved by our
                moderators. Once it is approved, you will receive an email with instructions on how to
                claim your business page.
            </p>
        </div> 
        <p>
            Make sure it's not already listed
	<div class="row">
    <div class="col-lg-8"> 
               <input type="text" id="search_busi_name" placeholder="Your business name"  
                class="form-control " value="" />
            </div> 
              <div class="col-lg-4"> 
               <div name="search_busi_name_btn" id="search_busi_name_btn" 
                        class="btn btn-danger  "> search</div> 
            </div>
            </div>
            <div id="search_busi_res"></div>
        </p>
        <div class="divider"></div>
            <div class="row pad_form">
            <label> <strong> Country </strong> </label> 
            <select name="country"  name="country-select" id="country-select" class="form-control form-control-lg mar-top" placeholder="Business Country">
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

            <div class="row pad_form">
                <label> <strong> Business Name </strong> </label>
                <input type="text" name="name"  
                 placeholder="Dr. Nabeel Clinic, Shawrma Al Demashqi"
                 class="form-control" 
                 value="<?php if(isset($busin_data[0]->name) )echo $busin_data[0]->name ?>"
                 />
                 <span id="v-name" class="lst_spn_val"></span>
            </div>
            <div class="row pad_form">
                <label> <strong> Address</strong> </label>
                <input type="text" name="address" class="form-control" placeholder="123 Downtown"
                value="<?php if(isset($busin_data[0]->address) )echo $busin_data[0]->address ?>"
                >
                <span id="v-address" class="lst_spn_val"></span>
                <br/><br/><br/>
                <input type="text" name="addressOffice" class="form-control" placeholder="Office number 123"
                value="<?php if(isset($busin_data[0]->address_office) )echo $busin_data[0]->address_office ?>"
                >
                <span id="v-addressOffice" class="lst_spn_val"></span>
            </div>
            <div class="row pad_form">
                <div class="col-lg-4">
                    <label> <strong> City </strong> </label>
                    <select name="city" class=" form-control form-control-lg " name="city-select" id="city-select">
                         <option value="0" disabled selected>Business City</option> 
                    </select>
                    <span id="v-city" class="lst_spn_val"></span>
                    <input type="hidden" id="city_callback" value="<?php isset($busin_data)?$busin_data[0]->cityId : ''?>">
                    <br/><br/>
                </div>
                <div class="col-lg-4">
                    <label> <strong> Province </strong> </label>
                    <input type="text" name="province" class="form-control" placeholder="ON"
                    value="<?php if(isset($busin_data[0]->province) )echo $busin_data[0]->province ?>"
                    > <br/><br/>
                    <span id="v-province" class="lst_spn_val"></span>
                </div>
                <div class="col-lg-4">
                    <label> <strong> Postal / Zip Code </strong> </label>
                    <input type="text" name="postal" class="form-control" placeholder="N4P 2L4"
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
                <input type="hidden" id="category_callback" value="<?php isset($busin_data)?$busin_data[0]->category_prnt :   '' ?>">
                <span id="v-category" class="lst_spn_val"></span ><br/>
                
            </div>
          <div class="pad_form select2-wrapper col-lg-8 pull-right">
            <label>   Business  Category list </label>
             <div  >
                    <select name="category_sub[]" class="form-control  js-example-responsive    select2MaX3"   id="category_sub" placeholder='category list' multiple></select>
                    <span id="v-category_sub" class="lst_spn_val"></span>
                    <br/><br/>
                    <input type="hidden" id="categorylist_callback" value="<?php if(isset($busin_data)) echo $busin_catgo ; else echo '' ;?>">
            </div>
            </div>
            </div>

           <div class="row pad_form">
                <label> <strong>     Web Address </strong> </label>
                <input type="text" name="webAddress"  
                 placeholder="https://www.yourbusinessdomain.com/"
                 class="form-control" 
                 value="<?php if(isset($busin_data[0]->webaddress) )echo $busin_data[0]->webaddress ?>"
                 />
                 <span id="v-webAddress" class="lst_spn_val"></span>
            </div>
            
            <div class="row pad_form">
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
