

<?php $this->load->view('common/header'); ?>

<link href="<?php echo base_url(); ?>assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>	
<link href="<?php echo base_url(); ?>assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	

<div class="panel panel-white">
	
	    <div class="panel-heading clearfix">
	        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
	        	<?php echo $this->lang->line('countries_manage'); ?>
	        </h3>
	    </div>
	    <div class="panel-body">
	      <?php if ($results) { ?>
	      	<table id="example3" class="display table" style="margin: 0">
                    <thead>
                        <tr>
			                <th style="width: 30px"><center>#</center></th>
			                <th style="min-width: 60%; width: 60%"><center><?php echo $this->lang->line('count_name') ?></center></th>
			                <?php if (have_access(43, true)) { ?>
			                    <th><center><?php echo $this->lang->line('edit_cities') ?></center></th>
			                <?php } ?>
			                 <?php if (have_access(44, true)) { ?>
			                    <th><center><?php echo $this->lang->line('edit_name') ?></center></th>
			                <?php } ?>
			                <?php if (have_access(74, true)) { ?>
			                    <th><center><?php echo $this->lang->line('fire') ?></center></th>
			                <?php } ?>
			              </tr>
                    </thead>
                    <tfoot>
                        <tr>
			                <th style="width: 30px"><center>#</center></th>
			                <th style="min-width: 60%; width: 60%"><center><?php echo $this->lang->line('count_name') ?></center></th>
			                <?php if (have_access(43, true)) { ?>
			                    <th><center><?php echo $this->lang->line('edit_cities') ?></center></th>
			                <?php } ?>
			                 <?php if (have_access(44, true)) { ?>
			                    <th><center><?php echo $this->lang->line('edit_name') ?></center></th>
			                <?php } ?>
			                <?php if (have_access(74, true)) { ?>
			                    <th><center><?php echo $this->lang->line('fire') ?></center></th>
			                <?php } ?>
			              </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; foreach ($results as $result) { ?>
                      <tr>
                        <td><?php echo $i; $i++; ?></td>
                        <td><center><?php echo !$this->session->userdata('lang') || $this->session->userdata('lang') == 'ar'? $result->coun_name_ar : $result->coun_name_en; ?></center></td>
                        <?php if (have_access(43, true)) { ?>
                        <td>
                          <center>
                            <a href="<?php echo base_url()."edit_country/$result->country_id"; ?>">
                            <?php echo $this->lang->line('edit'); ?>
                            </a>
                          </center>
                        </td>
                        <?php } ?>
                        <?php if (have_access(44, true)) { ?>
                        <td>
                          <center>
                            <a href="<?php echo base_url()."edit_countname/$result->country_id"; ?>">
                            <?php echo $this->lang->line('edit'); ?>
                            </a>
                          </center>
                        </td>
                        <?php } ?>
                        <?php if (have_access(74, true)) { ?>
                        <td>
                          <center>
                            <a onclick="return confirm('Are you sure')" href="<?php echo base_url()."del_country/$result->country_id"; ?>">
                            <?php echo $this->lang->line('fire'); ?>
                            </a>
                          </center>
                        </td>
                        <?php } ?>
                      </tr>
                      <?php } ?>
                    </tbody>
               </table>  
		  <?php } else { ?>
				  <h3><?php echo $this->lang->line('no_countries_ex') ?></h3>
			  <?php }?>
          
              </div>
              <?php if (have_access(45, true)) { ?>
              <form method="post" action="<?php echo base_url()."add_country/$region_id"; ?>">
	              <div class="modal-footer">
				      <input type="submit" style="margin-left: 10px; margin-right: 10px" value="<?php echo $this->lang->line('add'); ?>" class="btn btn-danger">
				      <button type="button" class="btn btn-default" onclick="goBack()"><?php echo $this->lang->line('back') ?></button>
				  </div>
	    	  </form>
	    	  <?php } ?>
</div>


<?php $this->load->view('common/footer'); ?>

<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
<?php if($this->session->userdata('lang') == 'en'){ ?>
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/jquery.datatable.min.js"></script>
<?php } else { ?>
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/jquery.datatables.min.js"></script>
<?php } ?>
<script src="<?php echo base_url(); ?>assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/table-data.js"></script>

<script src="<?php echo base_url(); ?>assets/js/pages/form-elements.js"></script>
        