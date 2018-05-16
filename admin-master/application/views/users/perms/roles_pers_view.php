

<?php $this->load->view('common/header'); ?>

<div class="panel panel-white">
	<form method="post" action='<?php echo base_url()."edit_pers/$role_id" ?>'>
	    <div class="panel-heading clearfix">
	        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
	        	<?php echo $this->lang->line('roles_pers_list'); ?>
	        </h3>
	    </div>
	    <div class="panel-body">
	      <?php if ($results) { ?>
			  <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th style="width: 40px"><center>#</center></th>
                <th><center><?php echo $this->lang->line('perm_name') ?></center></th>
                <th><center><?php echo $this->lang->line('status') ?></center></th>
              </tr>
            </thead>
            <tbody>
              <?php $i=1; foreach ($results as $result) { ?>
                      <tr>
                        <td><center><?php echo $i; $i++; ?></center></td>
                        <td style="margin: 0"><center><?php echo $result->description; ?></center></td>
                        <td>
                            <center>
                            	<div class="checkbox" style="margin: 0">
                                    <label>
                                        <div class="checker"><input  type="checkbox" name="per_ids[]" value="<?php echo $result->per_id; ?>" <?php echo $result->id ? 'checked' : ''; ?>></div>
                                    </label>
                                </div>
                            </center>
                        </td>
                      </tr>
                      <?php } ?>
              </table>
		  <?php } else { ?>
			  <h4><?php echo $this->lang->line('no_perms_ex') ?></h4>
		  <?php } ?>
          
          </div>
         
          <div class="modal-footer">
		      <input type="submit" style="margin-left: 10px; margin-right: 10px" value="<?php echo $this->lang->line('save'); ?>" class="btn btn-danger">
		      <button type="button" class="btn btn-default" onclick="goBack()"><?php echo $this->lang->line('back') ?></button>
		  </div>
	  </form>
</div>


<?php $this->load->view('common/footer'); ?>
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/pace-master/pace.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/classie/classie.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/waves/waves.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/modern.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/form-elements.js"></script>
        