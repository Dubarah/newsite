

<?php $this->load->view('common/header'); ?>

<link href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
       
<div class="panel panel-white">
    <div class="panel-heading clearfix">
        <h3 class="panel-title" <?php echo LANG() == 'en' ? '' : 'style="float: right"' ?>><?php echo $title; ?></h3>
    </div>
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()."edit_cat/$cat_id"; ?>">
    	<div class="panel-body">
        	
            <div class="form-group <?php echo form_error('arabic_name') ? 'has-error' : ''; ?>">
                <label for="arabic_name"><?php echo form_error('arabic_name') ? form_error('arabic_name') : $this->lang->line('arabic_name') ?></label>
                <input type="text" value="<?php echo set_value('arabic_name') ? set_value('arabic_name') : $result->arabic_name; ?>" class="form-control" rows="10" name="arabic_name" id="arabic_name" placeholder="">
            </div>
        	<div class="form-group <?php echo form_error('english_name') ? 'has-error' : ''; ?>">
                <label for="english_name"><?php echo form_error('english_name') ? form_error('english_name') : $this->lang->line('english_name') ?></label>
                <input class="form-control" type="text" value="<?php echo set_value('english_name') ? set_value('english_name') : $result->english_name; ?>" rows="10" name="english_name" id="english_name" placeholder="">
            </div>
            <div class="form-group <?php echo form_error('parent_cat') ? 'has-error' : ''; ?>">
                <label for="parent_cat"><?php echo form_error('parent_cat') ? form_error('parent_cat') : $this->lang->line('parent_cat') ?></label>
                <select class="form-control" name="parent_cat">
                	<option value="0"><?php echo LANG() == 'en' ? 'Main category' : 'تصنيف رئيسي' ?></option>
                	<?php foreach ($main_cat as $value): ?>
						<option value="<?php echo $value->category_id ?>" <?php echo $value->category_id == $result->parent_category_id ? 'selected' : '' ?>>
							<?php echo LANG() == 'en' ? $value->english_name : $value->arabic_name ?>
						</option>
					<?php endforeach ?>
                </select>
            </div>
            <div class="form-group <?php echo form_error('arabic_description') ? 'has-error' : ''; ?>">
                <label for="arabic_description"><?php echo form_error('arabic_description') ? form_error('arabic_description') : $this->lang->line('arabic_description') ?></label>
                <input type="text" value="<?php echo set_value('arabic_description') ? set_value('arabic_description') : $result->arabic_description; ?>" class="form-control" rows="10" name="arabic_description" id="arabic_description" placeholder="">
            </div>
            <div class="form-group <?php echo form_error('english_description') ? 'has-error' : ''; ?>">
                <label for="english_description"><?php echo form_error('english_description') ? form_error('english_description') : $this->lang->line('english_description') ?></label>
                <input type="text" value="<?php echo set_value('english_description') ? set_value('english_description') : $result->english_description; ?>" class="form-control" rows="10" name="english_description" id="english_description" placeholder="">
            </div>
            <div class="form-group <?php echo form_error('staff') ? 'has-error' : ''; ?>">
                
                <input type="checkbox" value="1" name="is_staff"  <?php echo $result->is_staff ? 'checked="checked"' : '' ?> /> <label for="staff"><?php echo form_error('staff') ? form_error('staff') : $this->lang->line('staff') ?></label>
            </div>
	    </div>
	    <div class="modal-footer">
	        <input type="submit" name="submit" style="margin-left: 10px; margin-right: 10px" value="<?php echo $this->lang->line('edit'); ?>" class="btn btn-danger">
	        <button type="button" class="btn btn-default" onclick="goBack()"><?php echo $this->lang->line('back') ?></button>
	    </div>
    </form>
</div>



<?php $this->load->view('common/footer'); ?>
 
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/jquery.datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/table-data.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/form-select2.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/form-elements.js"></script>
       
        
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/form-elements.js"></script>