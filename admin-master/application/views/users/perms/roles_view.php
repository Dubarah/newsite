

<?php $this->load->view('common/header'); ?>

<div class="panel panel-white">
	
<div class="panel-heading clearfix">
    <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>><?php echo $this->lang->line('roles'); ?></h3>
</div>
<div class="panel-body">
  <table id="example2" class="table table-bordered table-hover">
    <thead>
      <tr>
        <th style="width: 40px"><center>#</center></th>
        <th><center><?php echo $this->lang->line('role_name') ?></center></th>
        <th style="width: 40%"><center><?php echo $this->lang->line('role_desc') ?></center></th>
        <?php if (have_access(2, TRUE)) { ?>
            <th><center><?php echo $this->lang->line('role_perms') ?></center></th>
        <?php } ?>
        <?php if (have_access(3, true)) { ?>
            <th><center><?php echo $this->lang->line('role_users') ?></center></th>
        <?php } ?>
        <?php if (have_access(4, true)) { ?>
        	<th><center><?php echo $this->lang->line('edit_info') ?></center></th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; foreach ($results as $result) { ?>
	      <tr>
	        <td><?php echo $i; $i++; ?></td>
	        <td><center><?php echo $result->role_name; ?></center></td>
	        <td><center><?php echo $result->role_desc; ?></center></td>
	        <?php if (have_access(2, TRUE)) { ?>
	        <td>
	          <center>
	            <a href="<?php echo base_url()."edit_pers/$result->role_id"; ?>">
	            <?php echo $this->lang->line('edit'); ?>
	            </a>
	          </center>
	        </td>
	        <?php } ?>
	        <?php if (have_access(3, TRUE)) { ?>
	        <td>
	          <center>
	            <a href="<?php echo base_url()."edit_emps/$result->role_id"; ?>">
	            <?php echo $this->lang->line('edit'); ?>
	            </a>
	          </center>
	        </td>
	        <?php } ?>
	        <?php if (have_access(4, TRUE)) { ?>
	        <td>
	          <center>
	            <a href="<?php echo base_url()."edit_desc/$result->role_id"; ?>">
	            <?php echo $this->lang->line('edit'); ?>
	            </a>
	          </center>
	        </td>
	        <?php } ?>
	      </tr>
	      <?php } ?>
      	</tbody>
      </table>
      </div>
      <?php if (have_access(5, true)) { ?>
      <form method="post" action="<?php echo base_url().'add_role' ?>">
          <div class="modal-footer">
		      <input type="submit" style="margin-left: 10px; margin-right: 10px" value="<?php echo $this->lang->line('add'); ?>" class="btn btn-danger">
		      <button type="button" class="btn btn-default" onclick="goBack()"><?php echo $this->lang->line('back') ?></button>
		  </div>
	  </form>
	  <?php } ?>
</div>


<?php $this->load->view('common/footer'); ?>

        