

<?php $this->load->view('common/header'); ?>
<link href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
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

        
    	<?php 
    	$pages = $num_rows % 200 === 0 ? $num_rows / 200 : ((int) $num_rows / 200) + 1;
		$pages = (int) $pages;
    	if ($results) { ?>
    		<div class="table-responsive">
        	<table id="example" class="display table dataTable" style="width: 100%; cellspacing: 0;">
            	<thead>
                	<tr>
                    	<th style="width: 40px"><center>#</center></th>
                    	<th><center>Creation date</center></th>
                    	
	                	<th><center>Name</center></th>
	                	<th><center>Email</center></th>
	                	<th><center>Subject</center></th>
						<th><center>Message</center></th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th style="width: 40px"><center>#</center></th>
						<th><center>Creation date</center></th>
                    	
	                	<th><center>Name</center></th>
	                	<th><center>Email</center></th>
	                	<th><center>Subject</center></th>
						<th><center>Message</center></th>
					</tr>
				</tfoot>
				<tbody>
					<?php $i = (($page - 1) * 200) + 1; foreach ($results->result() as $result) { ?>
					<tr>
						<td style="text-align: center"><?php echo $i; $i++; ?></td>
						<td style="text-align: center"><?php echo $result->created_at; ?></td>
						<td style="text-align: center"><?php echo $result->name; ?></td>
						
						<td style="text-align: center"><?php echo $result->email; ?></td>
						<td style="text-align: center"><?php echo $result->subject; ?></td>
						<td style="text-align: center"><?php echo $result->subject; ?></td>
						

					
						
						
						</tr>
						<?php } ?>
					</tbody>
				</table> 
				</div>
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
				<b><center><?php echo trans('no_emps'); ?></center></b>
			<?php } ?>    
	    </div>
	</div>
<?php $this->load->view('common/footer'); ?>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/jquery.datatable.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/table-data.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/form-select2.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
	function getskills (ad_id) {
	  $.ajax({
			url: '<?php echo base_url(); ?>getskills/' + ad_id,
			success: function(data) {
				$('#results' + ad_id).html(data);
	        }
	    });
	}
	
	function show_applics (ad_id) {
	  $.ajax({
			url: '<?php echo base_url(); ?>show_applics/' + ad_id,
			success: function(data) {
				alert(data);
				$('#userresults' + ad_id).html(data);
	        }
	    });
	}
	
	function approve (ad_id) {
	  $.ajax({
			url: '<?php echo base_url(); ?>approve_bus/' + ad_id,
			success: function(data) {
				if (data == 1) {
					toastr["success"]("business approve success")
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
					$('#stat' + ad_id).html('<span class="label label-success">Active</span>');
				} else {
					
				};
	        }
	    });
	}
	function verified (ad_id) {
	  $.ajax({
			url: '<?php echo base_url(); ?>verified_bus/' + ad_id,
			success: function(data) {
				if (data == 1) {
					toastr["success"]("business verified success")
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
					$('#verified' + ad_id).html('<span class="label label-success">verified</span>');
				} else {
					
				};
	        }
	    });
	}
	function notverified (ad_id) {
	  $.ajax({
			url: '<?php echo base_url(); ?>notverified_bus/' + ad_id,
			success: function(data) {
				if (data == 1) {
					toastr["success"]("business Not verified success")
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
					$('#verified' + ad_id).html('<span class="label label-danger">Not verified</span>');
				} else {
					
				};
	        }
	    });
	}
	
	
	function disapprove (ad_id) {
	  $.ajax({
			url: '<?php echo base_url(); ?>delete_bus/' + ad_id,
	        
			success: function(data) {
				if (data == 1) {
					toastr["success"]("business deleted success")
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
					$('#stat' + ad_id).html('<span class="label label-danger">Deleted</span>');
				}
	        }
	    });
	}
</script>