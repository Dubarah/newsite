

<?php $this->load->view('common/header'); ?>
<div class="panel panel-white">
    <div class="panel-heading clearfix">
        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
        	<?php echo $this->lang->line('add_role'); ?>
        </h3>
    </div>
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()."add_role"; ?>">
    	<div class="panel-body">
        	
            <div class="form-group <?php echo form_error('role_name') ? 'has-error' : ''; ?>">
                <label for="role_name"><?php echo form_error('role_name') ? form_error('role_name') : $this->lang->line('role_name') ?></label>
                <input type="text" value="<?php echo set_value('role_name') ? set_value('role_name') : $role->role_name; ?>" class="form-control" rows="10" name="role_name" id="role_name" placeholder="">
            </div>
        	<div class="form-group <?php echo form_error('role_desc') ? 'has-error' : ''; ?>">
                <label for="role_desc"><?php echo form_error('role_desc') ? form_error('role_desc') : $this->lang->line('role_desc') ?></label>
                <input type="text" value="<?php echo set_value('role_desc') ? set_value('role_name') : $role->role_desc; ?>" class="form-control" rows="10" name="role_desc" id="role_desc" placeholder="">
            </div>
            
	    </div>
	    <div class="modal-footer">
	        <input type="submit" name="submit" style="margin-left: 10px; margin-right: 10px" value="<?php echo $this->lang->line('add'); ?>" class="btn btn-danger">
	        <button type="button" class="btn btn-default" onclick="goBack()"><?php echo $this->lang->line('back') ?></button>
	    </div>
    </form>
</div>
<?php $this->load->view('common/footer'); ?>
 