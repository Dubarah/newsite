

<?php $this->load->view('common/header'); ?>
<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>	
<link href="assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	



<div class="panel panel-white" style="min-height: 800px">
    <div class="panel-heading clearfix">
        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
        	<?php echo $this->lang->line('employees'); ?>
        </h3>
    </div>
    <div class="panel-body">
    	<?php if ($results) { ?>
        	<table id="example3" class="display table" style="margin: 0">
                    <thead>
                        <tr>
                            <th><center>#</center></th>
	                        <th><center><?php echo $this->lang->line('full_name') ?></center></th>
	                        <th><center><?php echo $this->lang->line('phone') ?></center></th>
	                        <th><center><?php echo $this->lang->line('username') ?></center></th>
	                        
	                        <th style="width: 100px"><center><?php echo $this->lang->line('email') ?></center></th>
	                        <th><center><?php echo $this->lang->line('join_date') ?></center></th>
	                        <th><center><?php echo $this->lang->line('city') ?></center></th>
	                        <th><center><?php echo $this->lang->line('country') ?></center></th>
	                        <?php if (have_access(10, TRUE)) { ?>
	                            <th><center><?php echo $this->lang->line('restore') ?></center></th>
	                        <?php } ?>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><center>#</center></th>
	                        <th><center><?php echo $this->lang->line('full_name') ?></center></th>
	                        <th><center><?php echo $this->lang->line('phone') ?></center></th>
	                        <th><center><?php echo $this->lang->line('username') ?></center></th>
	                        <th><center><?php echo $this->lang->line('email') ?></center></th>
	                        <th><center><?php echo $this->lang->line('join_date') ?></center></th>
	                        <th><center><?php echo $this->lang->line('city') ?></center></th>
	                        <th><center><?php echo $this->lang->line('country') ?></center></th>
	                        <?php if (have_access(10, TRUE)) { ?>
	                            <th><center><?php echo $this->lang->line('restore') ?></center></th>
	                        <?php } ?>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; $comm = 0; $total_price = 0; foreach ($results as $result) { ?>
	                      <tr>
	                        <td><?php echo $i; $i++; ?></td>
	                        <td><?php echo $result->first_name.' '.$result->last_name; ?></td>
	                        <td><?php echo $result->phone; ?></td>
	                        <td><?php echo $result->username; ?></td>
	                        <td><?php echo $result->email; ?></td>
	                        <td><?php echo date('Y-m-d', $result->join_date); ?></td>
	                        <td><?php echo $result->ci_name; ?></td>
	                        <td><?php echo $result->co_name; ?></td>
	                        <?php if (have_access(10, TRUE)) { ?>
	                        <td>
	                        	<center>
	                          <a href="<?php echo base_url().'restore_emp/'.$result->emp_id; ?>" onclick="return confirm('<?php echo $this->lang->line('are_usure'); ?>')">
	                            <?php echo $this->lang->line('restore'); ?>
	                          </a></center>
	                        </td>
	                        <?php } ?>
	                      </tr>
	                      <?php } ?>
                    </tbody>
               </table>  
               <?php } else { ?>
                  <b><center><?php echo $this->lang->line('no_emps'); ?></center></b>
               <?php } ?>    
    
    </div>
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

<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/js/pages/form-elements.js"></script>
        