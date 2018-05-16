

<?php $this->load->view('common/header'); ?>

<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
       
<div class="panel panel-white">
    <div class="panel-heading clearfix">
        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>><?php echo $this->lang->line('create_user_header'); ?></h3>
    </div>
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>create_user">
    	<div class="panel-body">
        	<div class="col-md-6" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
                <div class="form-group <?php echo form_error('first_name') ? 'has-error' : ''; ?>">
	                <label for="first_name"><?php echo form_error('first_name') ? form_error('first_name') : $this->lang->line('first_name') ?></label>
	                <input type="text" class="form-control" value="<?php echo set_value('first_name') ?>" name="first_name" id="first_name" placeholder="">
	            </div>
	            <div class="form-group <?php echo form_error('last_name') ? 'has-error' : ''; ?>">
	                <label for="last_name"><?php echo form_error('last_name') ? form_error('last_name') : $this->lang->line('last_name') ?></label>
	                <input type="text" class="form-control" value="<?php echo set_value('last_name') ?>" name="last_name" id="ad_name" placeholder="">
	            </div>
	            <p id="username_status"></p>
	            <div class="form-group <?php echo form_error('username') ? 'has-error' : ''; ?>">
	                <label for="username"><?php echo form_error('username') ? form_error('username') : $this->lang->line('username') ?></label>
	                <input type="text" class="form-control" pattern="[A-Za-z]{3,}" onkeyup="get_username_emp(this.value)" title="<?php echo $this->lang->line('username_rules'); ?>" value="<?php echo set_value('username') ?>" name="username" id="username" placeholder="">
	            </div>
	            <div class="form-group <?php echo form_error('password') ? 'has-error' : ''; ?>">
	                <label for="password"><?php echo form_error('password') ? form_error('password') : $this->lang->line('password') ?></label>
	                <input type="text" class="form-control" value="<?php echo set_value('password') ?>" name="password" id="password" placeholder="">
	            </div>
	            <p id="email_status"></p>
	            <div class="form-group <?php echo form_error('email') ? 'has-error' : ''; ?>">
	                <label for="email"><?php echo form_error('email') ? form_error('email') : $this->lang->line('email') ?></label>
	                <input type="text" onkeyup="get_email_emp(this.value)" class="form-control" value="<?php echo set_value('email') ?>" name="email" id="email" placeholder="">
	            </div>
            </div>
            <div class="col-md-6" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
            	
	            <div class="form-group <?php echo form_error('gender') ? 'has-error' : ''; ?>">
	                <label for="gender"><?php echo form_error('gender') ? form_error('gender') : $this->lang->line('gender') ?></label>
	                <select class="form-control" name="gender" id="<?php echo form_error('gender') ? 'inputError' : 'gender'; ?>">
                        <option value=""><?php echo $this->lang->line('gender'); ?></option>
                        <option value="m"><?php echo $this->lang->line('male'); ?></option>
                        <option value="f"><?php echo $this->lang->line('female'); ?></option>
                    </select>
	            </div>
	            
	            <div class="form-group">
			        <label for="birth_date"><?php echo $this->lang->line('birth_date') ?></label>
		            <input type="text" class="form-control date-picker" value="<?php echo set_value('birth_date') ?>" name="birth_date">
			    </div>
			    <div class="form-group <?php echo form_error('phone') ? 'has-error' : ''; ?>">
	                <label for="phone"><?php echo form_error('phone') ? form_error('phone') : $this->lang->line('phone') ?></label>
	                <input type="text" onkeyup="get_phone_emp(this.value)" class="form-control"  onkeyup="get_phone_emp(this.value)" value="<?php echo set_value('phone') ?>" name="phone" id="phone" placeholder="">
	            </div>
                <div class="form-group <?php echo form_error('country_id') ? 'has-error' : ''; ?>">
	                <label for="country_id"><?php echo form_error('country_id') ? form_error('country_id') : $this->lang->line('country') ?></label>
	                <select class="js-states form-control" onchange="get_cities(this.value)" tabindex="-1" name="country_id" id="country_id" style="display: none; width: 100%">
                    	<option value=""><?php echo $this->lang->line('country'); ?></option>
                        <?php foreach ($countries as $key => $country) { ?>
                            <option value="<?php echo $country->country_id; ?>"><?php echo $this->session->userdata('lang') == 'en' ? $country->coun_name_en : $country->coun_name_ar ; ?></option>
                        <?php } ?>
                    </select>
	            </div>
	            
	            <div class="form-group <?php echo form_error('city_id') ? 'has-error' : ''; ?>">
	                <label for="city_id"><?php echo form_error('city_id') ? form_error('city_id') : $this->lang->line('city') ?></label>
	                <select class="js-states form-control" disabled onchange="get_branches(this.value)" tabindex="-1" name="city_id" id="city_id" style="display: none; width: 100%">
                    	<option value=""><?php echo $this->lang->line('city'); ?></option>
                        <?php foreach ($cities as $key => $city) { ?>
                            <option value="<?php echo $city->city_id; ?>"><?php echo $this->session->userdata('lang') == 'en' ? $city->city_name_en : $city->city_name_ar ; ?></option>
                        <?php } ?>
                    </select>
	            </div>
	            
            </div>
	    </div>
	    <div class="modal-footer">
	        <input type="submit" name="submit" style="margin-left: 10px; margin-right: 10px" value="<?php echo $this->lang->line('create'); ?>" class="btn btn-danger">
	        <button type="button" class="btn btn-default" onclick="goBack()"><?php echo $this->lang->line('back') ?></button>
	    </div>
    </form>
</div>



<?php $this->load->view('common/footer'); ?>
 
        <script src="assets/plugins/jquery/jquery-2.1.3.min.js"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
<script src="assets/plugins/datatables/js/jquery.datatables.min.js"></script>
<script src="assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
<script src="assets/js/pages/table-data.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/js/pages/form-select2.js"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/js/pages/form-elements.js"></script>
       
        
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/js/pages/form-elements.js"></script>
<script type="text/javascript">
        function get_countries(id) {
            $.ajax({
              url: '<?php echo base_url(); ?>get_countries/' + id,
              success: function(data) {
                //alert(data);
                $('#country_id').html(data).prop('disabled', false);
              }
          });
        }
	function get_username_emp(username) {
	if (username.length>2){
            $.ajax({

              url: '<?php echo base_url(); ?>check_usrnm_emp/' + username,
              success: function(data) {
                //alert(data);
				if (data == 1)
		            $('#username_status').html("<?php echo $this->lang->line('username_no'); ?>").css('color','red');
				else if(data == 0)
	                $('#username_status').html("<?php echo $this->lang->line('username_yes'); ?>").css('color','green');
	            else if(data == 2)
	            	$('#username_status').html("<?php echo $this->lang->line('error_chars'); ?>").css('color','red');
              }
          });
	 }
	else
	$('#username_status').html("<?php echo $this->lang->line('username_invalid'); ?>").css('color','red');
        }
        
        function get_cities(id) {
            $.ajax({
              url: '<?php echo base_url(); ?>get_cities/' + id,
              success: function(data) {
                //alert(data);
                $('#city_id').html(data).prop('disabled', false);
              }
          });
        }
	function check_username(username) {
            $.ajax({
              url: '<?php echo base_url(); ?>get_cities/' + username,
              success: function(data) {
                //alert(data);
                $('#city_id').html(data).prop('disabled', false);
              }
          });
        }
        
        function get_branches(id) {
            $.ajax({
              url: '<?php echo base_url(); ?>get_branches/' + id,
              success: function(data) {
                //alert(data);
                $('#branch_id').html(data).prop('disabled', false);
              }
          });
        }
        function get_email_emp(email) {
            $.ajax({

              url: '<?php echo base_url(); ?>check_email_emp/' + email,
              success: function(data) {
                //alert(data);
		if (data==1)
                $('#email_status').html("<?php echo $this->lang->line('email_no'); ?>").css('color','red');
		else 
                $('#email_status').html("<?php echo $this->lang->line('email_yes'); ?>").css('color','green');
              }
          });
        }
	function get_phone_emp(phone) {
            $.ajax({

              url: '<?php echo base_url(); ?>check_phone_emp/' + phone,
              success: function(data) {
                //alert(data);
		if (data==1)
                $('#phone_status').html("<?php echo $this->lang->line('phone_no'); ?>").css('color','red');
		else 
                $('#phone_status').html("<?php echo $this->lang->line('phone_yes'); ?>").css('color','green');
              }
          });
        }
        $('#datetimepicker').datetimepicker({
	        format: 'dd-MM-yyyy',
	        language: 'en-GB'
	      });
    </script>