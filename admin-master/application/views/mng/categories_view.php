

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
    	<?php /*<form method="get" target="<?php echo base_url()."admin/users/1" ?>">
    		<div class="col-md-3 form-group">
	            <label for="exampleInputEmail1"><?php echo trans('username') ?></label>
	            <input type="text" name="username" class="form-control" placeholder="<?php echo trans('enterusername') ?>">
	        </div>
	        <div class="col-md-3 form-group">
	            <label for="exampleInputEmail1"><?php echo trans('phone') ?></label>
	            <input type="text" name="phone" class="form-control" placeholder="<?php echo trans('enterphone') ?>">
	        </div>
	        <div class="col-md-3 form-group">
	            <label for="exampleInputEmail1"><?php echo trans('email') ?></label>
	            <input type="text" name="email" class="form-control" placeholder="<?php echo trans('enteremail') ?>">
	        </div>
	        <div class="col-md-3 form-group">
	            <label for="exampleInputEmail1"><?php echo trans('place') ?></label>
	            <input type="text" name="place" class="form-control" placeholder="<?php echo trans('enterplace') ?>">
	        </div>
	        <div class="col-md-3 form-group">
	            <input type="submit" class="btn btn-danger" value="<?php echo trans('search') ?>">
	        </div>
    	</form> */ ?>
    	<div class="col-md-3 form-group">
	    	<button type="button"  style="font-size: 15px" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="icon-plus"></i> <?php echo LANG() == 'en' ? 'Add category' : 'إضافة تصنيف' ?></button>
	        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
	            <div class="modal-dialog modal-lg">
	                <div class="modal-content">
	                    <div class="modal-header">
	                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
	                        <h4 class="modal-title" id="myLargeModalLabel"><?php echo trans('image') ?></h4>
	                    </div>
	                    <form method="post" action="<?php echo base_url()."add_cat" ?>">
		                    <div class="modal-body">
		                    	<div class="form-group <?php echo form_error('arabic_name') ? 'has-error' : ''; ?>">
					                <label for="arabic_name"><?php echo form_error('arabic_name') ? form_error('arabic_name') : $this->lang->line('arabic_name') ?></label>
					                <input type="text" value="<?php echo set_value('arabic_name'); ?>" class="form-control" rows="10" name="arabic_name" id="arabic_name" placeholder="">
					            </div>
					        	<div class="form-group <?php echo form_error('english_name') ? 'has-error' : ''; ?>">
					                <label for="english_name"><?php echo form_error('english_name') ? form_error('english_name') : $this->lang->line('english_name') ?></label>
					                <input class="form-control" type="text" value="<?php echo set_value('english_name'); ?>" rows="10" name="english_name" id="english_name" placeholder="">
					            </div>
					            <div class="form-group <?php echo form_error('parent_cat') ? 'has-error' : ''; ?>">
					                <label for="parent_cat"><?php echo form_error('parent_cat') ? form_error('parent_cat') : $this->lang->line('parent_cat') ?></label>
					                <select class="form-control" name="parent_cat">
					                	<option value="0"><?php echo LANG() == 'en' ? 'Main category' : 'تصنيف رئيسي' ?></option>
					                	<?php foreach ($main_cat as $value): ?>
											<option value="<?php echo $value->category_id ?>">
												<?php echo LANG() == 'en' ? $value->english_name : $value->arabic_name ?>
											</option>
										<?php endforeach ?>
					                </select>
					            </div>
					            <div class="form-group <?php echo form_error('arabic_description') ? 'has-error' : ''; ?>">
					                <label for="arabic_description"><?php echo form_error('arabic_description') ? form_error('arabic_description') : $this->lang->line('arabic_description') ?></label>
					                <input type="text" value="<?php echo set_value('arabic_description'); ?>" class="form-control" rows="10" name="arabic_description" id="arabic_description" placeholder="">
					            </div>
					            <div class="form-group <?php echo form_error('english_description') ? 'has-error' : ''; ?>">
					                <label for="english_description"><?php echo form_error('english_description') ? form_error('english_description') : $this->lang->line('english_description') ?></label>
					                <input type="text" value="<?php echo set_value('english_description'); ?>" class="form-control" rows="10" name="english_description" id="english_description" placeholder="">
					            </div>
					            <div class="form-group <?php echo form_error('staff') ? 'has-error' : ''; ?>">
					                
					                <input type="checkbox" value="1" name="is_staff" /> <label for="staff"><?php echo form_error('staff') ? form_error('staff') : $this->lang->line('staff') ?></label>
					            </div>
						    </div>
						    <div class="modal-footer">
		                    	<input type="submit" class="btn btn-success" value="<?php echo LANG() == 'en' ? 'Create' : 'إضافة' ?>">
		                        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo LANG() == 'en' ? 'Close' : 'إغلاق' ?></button>
		                    </div>
	                    </div>
	                    
                	</form>
                </div>
            </div>
        </div>
    </div>
        
    	<?php 
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
        