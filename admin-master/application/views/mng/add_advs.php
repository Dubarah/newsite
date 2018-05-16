

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
        <form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>content_mng/add_ads">
	        <div class="row toastr-row" style="margin-bottom: 35px">
	            <div class="col-md-4">
	                <div class="form-group">
	                    <label>Horisontal photo</label>
	                    <input id="file-0" class="file borderd" name="mainlogo1" type="file">
	                </div>
	            </div>
	            <div class="col-md-4">
	               <div class="form-group">
	                    <label>Right vertical</label>
	                    <input id="file-0" class="file borderd" name="mainlogo2" type="file">
	                </div>
	            </div>
	            <div class="col-md-4">
	                <div class="form-group">
	                    <label>Left vertical</label>
	                    <input id="file-0" class="file borderd" name="mainlogo3" type="file">
	                </div>
	                
	            </div>
	        </div>
	        
	  		
	        <div class="row toastr-row" style="margin-bottom: 35px">  
	        	<div class="col-md-3">
	        		 <div class="form-group<?php echo form_error('country') ? ' has-error' : '' ?>">
	                    <label class="control-label" for="country"><?php echo form_error('country') ? form_error('country') : 'Country'; ?></label>
	                    <select name="country" class="js-states form-control" tabindex="-1" style="display: none; width: 100%">
		                	<option value="" selected="">Select a country</option>
		                	<?php foreach ($countries as $row): ?>
								<option value="<?php echo $row->country_id ?>"><?php echo $row->country_english_name ?></option>
							<?php endforeach ?>
		                </select>
	                </div>
	             </div>
	             <div class="col-md-3">
	        		<div class="form-group<?php echo form_error('page') ? ' has-error' : '' ?>">
		                <label class="control-label" for="message"><?php echo form_error('page') ? form_error('page') : 'Page'; ?></label>
		                <select name="page" class="js-states form-control" tabindex="-1" style="display: none; width: 100%">
		                	<option value="" selected="">Select a page</option>
		                	<?php foreach ($pages as $row): ?>
								<option value="<?php echo $row->id ?>"><?php echo $row->page ?></option>
							<?php endforeach ?>
		                </select>
		            </div>
	        	</div>
	        	<div class="col-md-3">
	        		<div class="form-group">
                        <label class="control-label">From date</label>
                        <input type="text" name="from" class="form-control date-picker">
                    </div>
	        	</div>
	        	<div class="col-md-3">
	        		<div class="form-group">
                        <label class="control-label">To date</label>
                        <input type="text" name="to" class="form-control date-picker">
                    </div>
	        	</div>
	        </div>
	        <div class="col-md-12"> 
	        	<input type="submit" class="btn btn-success" value="Save" style="float: right; margin-left: 15px">
	        	<button class="btn btn-default borderd" type="button" style="float: right">Cancel</button>
	        </div>
        </form>
    </div>
        
    	<?php /*
    	$pages = $num_rows % 200 === 0 ? $num_rows / 200 : ((int) $num_rows / 200) + 1;
		$pages = (int) $pages;
    	if ($results) { ?>
        	<table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
            	<thead>
                	<tr>
                    	<th style="width: 40px"><center>#</center></th>
                    	<th><center><?php echo $this->lang->line('ttitle') ?></center></th>
	                	<th><center><?php echo $this->lang->line('parent_cat') ?></center></th>
	                	<th><center><?php echo $this->lang->line('desc') ?></center></th>
	                	<th><center><?php echo $this->lang->line('icon') ?></center></th>
	                	<th><center><?php echo $this->lang->line('staff') ?></center></th>
	                 	<?php if (have_access(23, TRUE)) { ?>
	                    	<th><center><?php echo $this->lang->line('edit') ?></center></th>
						<?php } ?>
						<?php if (have_access(24, TRUE)) { ?>
							<th><center><?php echo $this->lang->line('delete') ?></center></th>
						<?php } ?>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th style="width: 40px"><center>#</center></th>
                    	<th><center><?php echo $this->lang->line('ttitle') ?></center></th>
	                	<th><center><?php echo $this->lang->line('parent_cat') ?></center></th>
	                	<th><center><?php echo $this->lang->line('desc') ?></center></th>
	                	<th><center><?php echo $this->lang->line('icon') ?></center></th>
	                	<th><center><?php echo $this->lang->line('staff') ?></center></th>
	                 	<?php if (have_access(23, TRUE)) { ?>
	                    	<th><center><?php echo $this->lang->line('edit') ?></center></th>
						<?php } ?>
						<?php if (have_access(24, TRUE)) { ?>
							<th><center><?php echo $this->lang->line('delete') ?></center></th>
						<?php } ?>
					</tr>
				</tfoot>
				<tbody>
					<?php $i = (($page - 1) * 200) + 1; $comm = 0; $total_price = 0; foreach ($results->result() as $result) { ?>
					<tr>
						<td style="text-align: center"><?php echo $i; $i++; ?></td>
						<td style="text-align: center"><?php echo LANG() == 'en' ? $result->english_name : $result->arabic_name; ?></td>
						<?php $parent_cat = ''; if (LANG() == 'en' && $result->pc_english) {
							$parent_cat = $result->pc_english;
						} elseif (LANG() == 'en' && !$result->pc_english) {
							$parent_cat = "It's a main category";
						} elseif(LANG() != 'en' && $result->pc_arabic) {
							$parent_cat = $result->pc_arabic;
						} else {
							$parent_cat = 'تصنيف رئيسي';
						} ?>
						<td style="text-align: center"><?php echo $parent_cat; ?></td>
						<td style="text-align: center"><?php echo LANG() == 'en' ? $result->english_description : $result->arabic_description; ?></td>
						<td style="text-align: center">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $result->category_id ?>"><i style="font-size: 20px" class="icon-picture"></i></button>
                            <div class="modal fade bs-example-modal-lg<?php echo $result->category_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title" id="myLargeModalLabel"><?php echo trans('image') ?></h4>
                                        </div>
                                        <div class="modal-body">
                                        	<img src="<?php echo $website.'ass/'.$result->icon ?>" />
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</td>
						<td style="text-align: center"><?php echo $result->is_staff ? '<i style="color: green" class="fa fa-check"></i>' : '<i style="color: red" class="fa fa-remove"></i>'; ?></td>
						<?php if (have_access(23, TRUE)) { ?>
							<td><center>
								<a href="<?php echo base_url().'edit_cat/'.$result->category_id; ?>">
									<i class="fa fa-edit"></i>
								</a></center>
							</td>
						<?php } ?>
						<?php if (have_access(24, TRUE)) { ?>
							<td><center>
								<a onclick="return confirm('Are you sure')" href="<?php echo base_url().'fire_cat/'.$result->category_id; ?>">
									<i class="fa fa-remove"></i>
								</a></center>
							</td>
						<?php } ?>
						
						</tr>
						<?php } ?>
					</tbody>
				</table> 
				<?php if ($num_rows > 200): ?>
					<nav>
						<ul class="pagination">
							<li><a href="<?php echo base_url() ?>users/1" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
							<?php if ($page - 4 >= 1): ?>
								<li><a href="<?php echo base_url()."users/".($page - 4) ?>"><?php echo $page - 4 ?></a></li>
							<?php endif ?>
							<?php if ($page - 3 >= 1): ?>
								<li><a href="<?php echo base_url()."users/".($page - 3) ?>"><?php echo $page - 3 ?></a></li>
							<?php endif ?>
							<?php if ($page - 2 >= 1): ?>
								<li><a href="<?php echo base_url()."users/".($page - 2) ?>"><?php echo $page - 2 ?></a></li>
							<?php endif ?>
							<?php if ($page - 1 >= 1): ?>
								<li><a href="<?php echo base_url()."users/".($page - 1) ?>"><?php echo $page - 1 ?></a></li>
							<?php endif ?>
							<li class="active"><a href="#"><?php echo $page ?></a></li>
							<?php if ($page + 1 <= $pages): ?>
								<li><a href="<?php echo base_url()."users/".($page + 1) ?>"><?php echo $page + 1 ?></a></li>
							<?php endif ?>
							<?php if ($page + 2 <= $pages): ?>
								<li><a href="<?php echo base_url()."users/".($page + 2) ?>"><?php echo $page + 2 ?></a></li>
							<?php endif ?>
							<?php if ($page + 3 <= $pages): ?>
								<li><a href="<?php echo base_url()."users/".($page + 3) ?>"><?php echo $page + 3 ?></a></li>
							<?php endif ?>
							<?php if ($page + 4 <= $pages): ?>
								<li><a href="<?php echo base_url()."users/".($page + 4) ?>"><?php echo $page + 4 ?></a></li>
							<?php endif ?>
							<li><a href="<?php echo base_url()."users/".($pages) ?>" aria-label="Next"><span aria-hidden="true">»</span></a></li>
						</ul>
					</nav> 
				<?php endif ?>
				
			<?php } else { ?>
				<b><center><?php echo $this->lang->line('no_emps'); ?></center></b>
			<?php } */?>    
	    </div>
	</div>
<?php $this->load->view('common/footer'); ?>
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/form-select2.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>assets/js/pages/form-elements.js"></script>


        <script src="<?php echo base_url() ?>assets/plugins/summernote-master/summernote.min.js"></script>
        <script src="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url() ?>assets/js/pages/form-elements.js"></script>