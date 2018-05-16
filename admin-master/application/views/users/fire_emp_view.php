

<?php $this->load->view('common/header'); ?>

<link href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>


<div class="panel panel-white">
    <div class="panel-heading clearfix">
        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>><?php echo $this->lang->line('fire_res'); ?></h3>
    </div>
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url()."fire_emp/$emp_id"; ?>">
    	<div class="panel-body">
        	<div class="form-group <?php echo form_error('fire_res') ? 'has-error' : ''; ?>">
                <label for="fire_res"><?php echo form_error('fire_res') ? form_error('fire_res') : $this->lang->line('fire_res') ?></label>
                <textarea type="text" class="form-control" rows="10" name="fire_res" id="fire_res" placeholder="">
                	<?php echo set_value('fire_res'); ?>
                </textarea>
            </div>
           
	    </div>
	    <div class="modal-footer">
	        <input type="submit" name="submit" style="margin-left: 10px; margin-right: 10px" value="<?php echo $this->lang->line('fire'); ?>" class="btn btn-danger">
	        <button type="button" class="btn btn-default" onclick="goBack()"><?php echo $this->lang->line('back') ?></button>
	    </div>
    </form>
</div>



<?php $this->load->view('common/footer'); ?>
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/pages/form-select2.js"></script>
<script src="<?php echo base_url() ?>assets/js/pages/form-elements.js"></script>
       
        