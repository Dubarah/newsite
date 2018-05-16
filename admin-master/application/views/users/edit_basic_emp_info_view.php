

<?php $this->load->view('common/header'); ?>

<link href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
       
<div class="panel panel-white">
    <div class="panel-heading clearfix">
        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>><?php echo $this->lang->line('edit_basic_info'); ?></h3>
    </div>
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()."edit_emp/$emp_id"; ?>">
    	<div class="panel-body">
        	
            <div class="form-group <?php echo form_error('username') ? 'has-error' : ''; ?>">
                <label for="username"><?php echo form_error('username') ? form_error('username') : $this->lang->line('username') ?></label>
                <input type="text" value="<?php echo set_value('username') ? set_value('username') : $employee->username; ?>" class="form-control" rows="10" name="username" id="username" placeholder="">
            </div>
        	<div class="form-group <?php echo form_error('mobile') ? 'has-error' : ''; ?>">
                <label for="mobile"><?php echo form_error('mobile') ? form_error('mobile') : $this->lang->line('phone') ?></label>
                <input type="text" value="<?php echo set_value('mobile') ? set_value('mobile') : $employee->mobile; ?>" class="form-control" rows="10" name="mobile" id="mobile" placeholder="">
            </div>
            <div class="form-group <?php echo form_error('email') ? 'has-error' : ''; ?>">
                <label for="email"><?php echo form_error('email') ? form_error('email') : $this->lang->line('email') ?></label>
                <input type="text" value="<?php echo set_value('email') ? set_value('email') : $employee->email; ?>" class="form-control" rows="10" name="email" id="email" placeholder="">
            </div>
            <div class="form-group <?php echo form_error('place') ? 'has-error' : ''; ?>">
                <label for="place"><?php echo form_error('place') ? form_error('place') : $this->lang->line('place') ?></label>
                <input type="text" value="<?php echo set_value('place') ? set_value('place') : $employee->place; ?>" class="form-control" rows="10" name="place" id="place" placeholder="">
            </div>
            <div class="form-group <?php echo form_error('staff') ? 'has-error' : ''; ?>">
                
                <input type="checkbox" value="1" name="is_staff"  <?php echo $employee->is_staff ? 'checked="checked"' : '' ?> /> <label for="staff"><?php echo form_error('staff') ? form_error('staff') : $this->lang->line('staff') ?></label>
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