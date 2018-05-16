<div class="container" id="section_bus1">
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
           	<ul class="list-inline list">
        	  <div class="row">
                        <div class="col-lg-8">
                            <input type="text" class="form-control" placeholder="Your Business Name">
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-light btn-block duOrange text-white">Serach</button>
                        </div>
                    </div>
        	</ul>
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
            <span id="v-country"></span>
            </div>

            <div class="row pad_form">
                <label> <strong> Business Name </strong> </label>
                <input type="text" name="name"  
                 placeholder="Dr. Nabeel Clinic, Shawrma Al Demashqi"
                 class="form-control" 
                 value="<?php if(isset($busin_data[0]->name) )echo $busin_data[0]->name ?>"
                 />
                 <span id="v-name"></span>
            </div>
            <div class="row pad_form">
                <label> <strong> Address</strong> </label>
                <input type="text" name="address" class="form-control" placeholder="123 Downtown"
                value="<?php if(isset($busin_data[0]->address) )echo $busin_data[0]->address ?>"
                >
                <span id="v-address"></span>
                </div>
               <div class="row pad_form">
                <input type="text" name="addressOffice" class="form-control" placeholder="Office number 123"
                value="<?php if(isset($busin_data[0]->address_office) )echo $busin_data[0]->address_office ?>"
                >
                <span id="v-addressOffice"></span>
            </div>
            <div class="row pad_form">
                <div class="col-lg-4">
                    <label> <strong> City </strong> </label>
                    <select name="city" class="form-control form-control-lg " name="city-select" id="city-select">
                         <option value="0" disabled selected>Business City</option> 
                    </select>
                    <span id="v-city"></span>
                    <br/><br/>
                </div>
                <div class="col-lg-4">
                    <label> <strong> Province </strong> </label>
                    <input type="text" name="province" class="form-control" placeholder="ON"
                    value="<?php if(isset($busin_data[0]->province) )echo $busin_data[0]->province ?>"
                    > <br/><br/>
                    <span id="v-province"></span>
                </div>
                <div class="col-lg-4">
                    <label> <strong> Postal / Zip Code </strong> </label>
                    <input type="text" name="postal" class="form-control" placeholder="N4P 2L4"
                    value="<?php if(isset($busin_data[0]->postal) )echo $busin_data[0]->postal ?>"
                    > <br/><br/>
                    <span id="v-postal"></span>
                </div>
            </div>

            <div class="row pad_form">
                <div class="col-lg-6">
                <label> <strong> Work Phone</strong> </label>
                <input type="text" name="workPhone" class="form-control" placeholder="1234567890"
                value="<?php if(isset($busin_data[0]->work_phone) )echo $busin_data[0]->work_phone ?>"
                >
                <span id="v-workPhone"></span>
                </div>
                <div class="col-lg-6">
                <label> <strong>Mobile Phone ( Optional )</strong> </label>
                <input type="text" name="mobilePhone" class="form-control" placeholder="1234567890"
                value="<?php if(isset($busin_data[0]->mobile_phone) )echo $busin_data[0]->mobile_phone ?>"
                >
                <span id="v-mobilePhone"></span>
                </div>
            </div>

           <div class="row pad_form">
                <label> <strong>     Web Address </strong> </label>
                <input type="text" name="webAddress"  
                 placeholder="https://www.yourbusinessdomain.com/"
                 class="form-control" 
                 value="<?php if(isset($busin_data[0]->webaddress) )echo $busin_data[0]->webaddress ?>"
                 />
                 <span id="v-webAddress"></span>
            </div>
            
            <div class="row pad_form">
                <label> <strong>   Work email address </strong> </label>
                <input type="text" name="emailAddress"  
                 placeholder="info@YourBusinessDomain.com"
                 class="form-control" 
                 value="<?php if(isset($busin_data[0]->work_email) )echo $busin_data[0]->work_email ?>"
                 />
                 <span id="v-emailAddress"></span>
            </div>

            <div class="row pad_form select2-wrapper">
                <label> <strong> Business  Categories </strong> </label>
                <select class="form-control js-example-responsive select2MaX3"
                placeholder='max 3'
                 name="category[]" id="category" 
                 multiple="multiple"  > <!-- busin_catgo // edit--> 
                    <?php foreach ($categories->result() as $category):?>
                    <option value="<?php echo $category->category_id?>"
                        <?php if(isset($busin_catgo) ) {
                                foreach ($busin_catgo as $cat) {
                                    if($cat->cat_id == $category->category_id )
                                    { echo " selected ";}else {echo "" ;}
                                }   
                            } ?>
                        >
                        <?php echo $category->english_name?>
                    </option>
                    <?php endforeach?>
                </select>
                <span id="v-category"></span>
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