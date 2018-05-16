

<?php $this->load->view('common/header'); ?>
<link href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>	
<link href="<?php echo base_url(); ?>assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	


<div class="panel panel-white" style="min-height: 800px">
    <div class="panel-heading clearfix">
        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
        	<?php echo $title; ?>
        </h3>
    </div>
    <div class="panel-body">
    	
    	<?php if ($results) { ?>
    		<form method="post" action="<?php echo base_url() ?>social_media">
	        	<table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
	            	<thead>
	                	<tr>
	                    	<th style="width: 40px"><center>#</center></th>
	                    	<th><center><?php echo $this->lang->line('ttitle') ?></center></th>
		                	<th><center><?php echo $this->lang->line('link') ?></center></th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th style="width: 40px"><center>#</center></th>
							<th><center><?php echo $this->lang->line('ttitle') ?></center></th>
		                	<th><center><?php echo $this->lang->line('link') ?></center></th>
						</tr>
					</tfoot>
					<tbody>
						<?php $i = 1; foreach ($results->result() as $result) { ?>
						<tr>
							<td style="text-align: center"><?php echo $i; $i++; ?></td>
							<td style="text-align: center; width: 30%"><?php echo $result->social_media_name; ?></td>
							<td style="text-align: center; width: 60%">
								<input class="form-control" type="text" value="<?php echo $result->social_media_link ?>" name="field_<?php echo $result->social_media_id ?>" />
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<div class="modal-footer">
			        <input type="submit" name="submit" style="margin-left: 10px; margin-right: 10px" value="<?php echo $this->lang->line('save'); ?>" class="btn btn-danger">
			        <button type="button" class="btn btn-default" onclick="goBack()"><?php echo $this->lang->line('back') ?></button>
			    </div>
			</form>
		<?php } else { ?>
			<b><center><?php echo $this->lang->line('no_media'); ?></center></b>
		<?php } ?>   
	    </div>
	</div>
<?php $this->load->view('common/footer'); ?>
<?php if($this->session->userdata('lang') == 'en'){ ?>
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/jquery.datatable.min.js"></script>
<?php } else { ?>
	<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/jquery.datatables.min.js"></script>
<?php } ?>
<script src="<?php echo base_url(); ?>assets/js/pages/table-data.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/form-select2.js"></script>
        