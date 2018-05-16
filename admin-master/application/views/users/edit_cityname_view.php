

<?php $this->load->view('common/header'); ?>
<div class="panel panel-white">
    <div class="panel-heading clearfix">
        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
        	<?php echo $this->lang->line('edit_cityname'); ?>
        </h3>
    </div>
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()."edit_cityname/$city_id";?>">
    	<div class="panel-body">
        	
            <div class="form-group <?php echo form_error('city_name_ar') ? 'has-error' : ''; ?>">
                <label for="city_name_ar"><?php echo form_error('city_name_ar') ? form_error('city_name_ar') : $this->lang->line('city_name_ar') ?></label>
                <input type="text" value="<?php echo set_value('city_name_ar') ? set_value('city_name_ar') : $city->city_name_ar; ?>" class="form-control" rows="10" name="city_name_ar" id="city_name_ar" placeholder="">
            </div>
        	<div class="form-group <?php echo form_error('city_name_en') ? 'has-error' : ''; ?>">
                <label for="city_name_en"><?php echo form_error('city_name_en') ? form_error('city_name_en') : $this->lang->line('city_name_en') ?></label>
                <input type="text" value="<?php echo set_value('city_name_en') ? set_value('city_name_en') : $city->city_name_en; ?>" class="form-control" rows="10" name="city_name_en" id="city_name_en" placeholder="">
            </div>
            
	    </div>
	    <div class="modal-footer">
	        <input type="submit" name="submit" style="margin-left: 10px; margin-right: 10px" value="<?php echo $this->lang->line('edit'); ?>" class="btn btn-danger">
	        <button type="button" class="btn btn-default" onclick="goBack()"><?php echo $this->lang->line('back') ?></button>
	    </div>
    </form>
</div>



<?php $this->load->view('common/footer'); ?>
 