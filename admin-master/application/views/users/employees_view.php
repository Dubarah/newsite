

<?php $this->load->view('common/header'); ?>
<link href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>	
<link href="<?php echo base_url(); ?>assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	


<div class="panel panel-white" style="min-height: 800px">
    <div class="panel-heading clearfix">
        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
        	<?php echo $this->lang->line('employees'); ?>
        </h3>
    </div>
    <div class="panel-body">
    	<form method="get" target="<?php echo base_url()."admin/users/1" ?>">
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
	            <label for="exampleInputEmail1">Country</label>
	            <select name="place" class="js-states form-control" tabindex="-1" style="display: none; width: 100%">
                	<option value="" selected="">Select a country</option>
                	<?php foreach ($countries as $row): ?>
						<option value="<?php echo $row->country_id ?>"><?php echo $row->country_english_name ?></option>
					<?php endforeach ?>
                </select>
	        </div>
	        <div class="col-md-3 form-group">
	            <input type="submit" class="btn btn-danger" value="<?php echo trans('search') ?>">
	        </div>
	        <div class="col-md-3 form-group">
	            <a href="<?php echo base_url().'users/1?staff=1' ?>" class="btn btn-danger"><?php echo trans('staff') ?></a>
	        </div>
    	</form>
    	
    	<?php 
    	$pages = $num_rows % 200 === 0 ? $num_rows / 200 : ((int) $num_rows / 200) + 1;
		$pages = (int) $pages;
    	if ($results) { ?>
        	<table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
            	<thead>
                	<tr>
                    	<th style="width: 40px"><center>#</center></th>
                    	<th><center><?php echo $this->lang->line('full_name') ?></center></th>
	                	<th><center><?php echo $this->lang->line('phone') ?></center></th>
	                	<th><center><?php echo $this->lang->line('email') ?></center></th>
	                	<th><center><?php echo $this->lang->line('place') ?></center></th>
	                	<th><center>Jobs applyment</center></th>
	                	<th><center>Jobs Opened</center></th>
	                 	<?php if (have_access(8, TRUE)) { ?>
	                    	<th><center><?php echo $this->lang->line('fire_emp') ?></center></th>
						<?php } ?>
						<th><center>Delete user</center></th>
						<th><center>Make stuff</center></th>
						<?php if (have_access(11, TRUE)) { ?>
							<th><center><?php echo $this->lang->line('edit_basic_info') ?></center></th>
						<?php } ?>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th style="width: 40px"><center>#</center></th>
						<th><center><?php echo $this->lang->line('full_name') ?></center></th>
						<th><center><?php echo $this->lang->line('phone') ?></center></th>
						<th><center><?php echo $this->lang->line('email') ?></center></th>
						<th><center><?php echo $this->lang->line('place') ?></center></th>
						<th><center>Jobs applyment</center></th>
						<th><center>Jobs Opened</center></th>
						<?php if (have_access(8, TRUE)) { ?> 
							<th><center><?php echo $this->lang->line('fire_emp') ?></center></th>
						<?php } ?>
						<th><center>Delete user</center></th>
						<th><center>Make stuff</center></th>
						<?php if (have_access(11, TRUE)) { ?>
							<th><center><?php echo $this->lang->line('edit_basic_info') ?></center></th>
						<?php } ?>
					</tr>
				</tfoot>
				<tbody>
					<?php $i = (($page - 1) * 200) + 1; $comm = 0; $total_price = 0; foreach ($results as $result) { ?>
					<tr id="allrow<?php echo $result->id ?>">
						<td style="text-align: center"><?php echo $i; $i++; ?></td>
						<td style="text-align: center"><?php echo $result->username; ?></td>
						<td style="text-align: center"><?php echo $result->mobile; ?></td>
						<td style="text-align: center"><?php echo $result->email; ?></td>
						<td style="text-align: center"><?php echo $result->place; ?></td>
						<td style="text-align: center"><?php echo $result->app_count; ?></td>
						<td style="text-align: center"><?php echo $result->jobs_count; ?></td>
						<?php if (have_access(8, TRUE)) { ?>
							<td><center>
								<a href="<?php echo base_url().'fire_emp/'.$result->id; ?>">
									<i class="fa fa-remove"></i>
								</a></center>
							</td>
						<?php } ?>
						<td><center>
							<a onclick="delete_user(<?php echo $result->id ?>)" href="#">
								<i class="fa fa-remove"></i>
							</a></center>
						</td>
						<td><center>
							<a onclick="make_stuff(<?php echo $result->id ?>)" href="#" id="stuff<?php echo $result->id ?>">
								<?php if ($result->is_staff): ?>
									<i class="fa icon-dislike" style="font-weight: bolder"></i>
								<?php else: ?>
									<i class="fa icon-like" style="color: green; font-weight: bolder"></i>
								<?php endif ?>
								
							</a></center>
						</td>
						<?php if (have_access(11, TRUE)) { ?>
							<td><center>
								<a href="<?php echo base_url().'edit_emp/'.$result->id; ?>">
									<i class="fa fa-edit"></i>
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

<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/form-select2.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
	function delete_user (user_id) {
	  con = confirm("Are you sure!");
	  if (con) {
	  		$.ajax({
				url: '<?php echo base_url(); ?>delete_user/' + user_id,
				success: function(data) {
					if (data == 1) {
						toastr["success"]("User deleted succeed")
						toastr.options = {
						  "closeButton": false,
						  "debug": false,
						  "newestOnTop": false,
						  "progressBar": false,
						  "positionClass": "toast-bottom-right", 
						  "preventDuplicates": false,
						  "onclick": null,
						  "showDuration": "300",
						  "hideDuration": "1000",
						  "timeOut": "5000",
						  "extendedTimeOut": "1000",
						  "showEasing": "swing",
						  "hideEasing": "linear",
						  "showMethod": "fadeIn",
						  "hideMethod": "fadeOut"
						};
						$('#allrow' + user_id).remove();
					}
		        }
		    });
	  };  
	}
	
	function make_stuff (user_id) {
	  con = confirm("Are you sure!");
	  if (con) {
	  		$.ajax({
				url: '<?php echo base_url(); ?>staff/' + user_id,
				success: function(data) {
					if (data) {
						toastr["success"]("User update succeed")
						toastr.options = {
						  "closeButton": false,
						  "debug": false,
						  "newestOnTop": false,
						  "progressBar": false,
						  "positionClass": "toast-bottom-right", 
						  "preventDuplicates": false,
						  "onclick": null,
						  "showDuration": "300",
						  "hideDuration": "1000",
						  "timeOut": "5000",
						  "extendedTimeOut": "1000",
						  "showEasing": "swing",
						  "hideEasing": "linear",
						  "showMethod": "fadeIn",
						  "hideMethod": "fadeOut"
						};
						text = '';
						if (data == 1) {
							text = '<i class="fa icon-dislike" style="color: red; font-weight: bolder"></i>';
						} else{
							text = '<i class="fa icon-like" style="color: green; font-weight: bolder"></i>';
						};
						$('#stuff' + user_id).html(text);
					}
		        }
		    });
	  };  
	}
</script>
        