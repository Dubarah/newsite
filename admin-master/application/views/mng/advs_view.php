

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
    <div class="panel-body">
    	<form action="" method="get">
			<div class="col-md-2 form-group">
	            <label for="" class="col-sm-6 control-label">Search By</label>
	            <div class="col-sm-6">
	                <select name="search_by">
	                	<option value="all" selected="">All jobs</option>
	                	<option value="id" selected="">Job ID</option>
	                	<option value="comp" selected="">Company</option>
	                	<option value="pemding" selected="">Pending</option>
	                	<option value="Deleted" selected="">Unpublished</option>
	                	<option value="post" selected="">Email</option>
	                </select>
	            </div>
	        </div>
	        <div class="col-md-3 form-group">
	            <input type="text" name="search_str" class="form-control" id="" placeholder="Search...">
	        </div>
	        <div class="col-md-3 form-group">
	            <input type="submit" class="form-control" value="Search" style="background-color: gray;border-radius: 10px;color: #f9f9f9;width: 92px;">
	        </div>
		</form>
	    	
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
                    	<th><center>Title</center></th>
	                	<th><center>Company</center></th>
	                	<th><center>Country</center></th>
	                	<th><center>Type</center></th>
	                	<th><center>Edit</center></th>
	                	<th><center>More details</center></th>
	                	<th><center><?php echo trans('skills') ?></center></th>
	                	<th><center>Status</center></th>
	                	<th><center><?php echo trans('approve') ?></center></th>
						<th><center><?php echo trans('delete') ?></center></th>
						<th><center>Show who applied</center></th>
						<th><center>View in site</center></th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th style="width: 40px"><center>#</center></th>
						<th><center>Creation date</center></th>
                    	<th><center>Title</center></th>
	                	<th><center>Company</center></th>
	                	<th><center>Country</center></th>
	                	<th><center>Type</center></th>
	                	<th><center>Edit</center></th>
	                	<th><center>More details</center></th>
	                	<th><center><?php echo trans('skills') ?></center></th>
	                	<th><center>Status</center></th>
	                	<th><center><?php echo trans('approve') ?></center></th>
						<th><center><?php echo trans('delete') ?></center></th>
						<th><center>Show who applied</center></th>
						<th><center>View in site</center></th>
					</tr>
				</tfoot>
				<tbody>
					<?php $i = (($page - 1) * 200) + 1; foreach ($results->result() as $result) { ?>
					<tr>
						<td style="text-align: center"><?php echo $i; $i++; ?></td>
						<td style="text-align: center"><?php echo $result->created_at; ?></td>
						<td style="text-align: center"><?php echo $result->title; ?></td>
						<td style="text-align: center"><?php echo $result->employer; ?></td>
						<td style="text-align: center"><?php echo $result->country_english_name; ?></td>
						<td style="text-align: center"><?php echo $result->type_name; ?></td>
						<td><center>
							<a target="_blank" href="<?php echo base_url().'edit_dubarah/'.$result->advertisement_id; ?>">
								<i class="fa fa-edit" style="color: green; font-size: 20px"></i>
							</a></center>
						</td>
						<td>
							<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal<?php echo $result->advertisement_id ?>"><i style="font-size: 20px" class="fa fa-bar-chart"></i></button>
                            <div class="modal fade bs-example-modal<?php echo $result->advertisement_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title" id="myLargeModalLabel"><?php echo trans('image') ?></h4>
                                        </div>
                                        <div class="modal-body">
                                        	<div class="col-lg-12">
					
												<div class="col-md-4" style="width: 213px; height: 154px;margin-top: 12px; margin-bottom: 12px;">
											
															<img style="width: 139px; height: auto;" src="<?php echo $result->img ? website()."uploads/jobslogo/".$result->img : base_url()."ass/images/defult.png" ?>" alt="Image" class="img-responsive">
													<!-- item-image -->
												</div>
													
												<div class="col-md-9 row" style="    margin-top: 25px;">
													
													
													<span style="    font-size: 22px;"><span><a href="#" class="title"><?php echo $result->title ?></a></span> @ <a href="#"> <?php echo $result->employer ?></a></span>
													<div class="new-meta row">
														<ul>
															<li><i class="fa fa-hourglass-start" aria-hidden="true"></i>Phone : <?php echo $result->phone; ?></li>
															<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $result->country_english_name ?> ,</a>
															<li> <?php echo $result->address ?>  </a></li>
															
															<li><a href="#"> <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo LANG() == 'en' ? $result->type_name : $result->type_name_ar ?></a></li> 
															<li><i class="fa fa-hourglass-start" aria-hidden="true"></i> Application Deadline : <?php echo $result->diff." ".trans('days') ?></li>
															<li><i class="fa fa-hourglass-start" aria-hidden="true"></i> Creation date: <?php echo $result->created_at ?></li>
														</ul>
													</div><!-- new-meta -->									
												</div><!-- new-info -->
									
												
						   
						   
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</td>
							
						<td style="text-align: center">
                            <button type="button" class="btn btn-success" data-toggle="modal" onclick="getskills(<?php echo $result->advertisement_id ?>)" data-target=".bs-example-modal-lg<?php echo $result->advertisement_id ?>"><i style="font-size: 20px" class="fa fa-bar-chart"></i></button>
                            <div class="modal fade bs-example-modal-lg<?php echo $result->advertisement_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title" id="myLargeModalLabel"><?php echo trans('image') ?></h4>
                                        </div>
                                        <div class="modal-body" id="results<?php echo $result->advertisement_id ?>">
                                        	
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</td>	
						<td id="stat<?php echo $result->advertisement_id ?>">
							<?php if ($result->status == 0){ ?>
								<span class="label label-info">Pending</span> 
							<?php } elseif ($result->status == 1 && $result->diff > 0) { ?>
								<span class="label label-success">Active</span> 
							<?php } elseif ($result->status == 3) { ?>
								<span class="label label-danger">Deleted</span> 
							<?php } else { ?>
								<span class="label label-warning">Expired</span> 
							<?php } ?>
								
							
						</td>
						<td><center>
							<a onclick="approve(<?php echo $result->advertisement_id ?>)" href="#">
								<i style="color: green; font-size: 20px; font-weight: bold" class="fa icon-like"></i>
							</a></center>
						</td>	
						<td><center>
							<a onclick="disapprove(<?php echo $result->advertisement_id ?>)" href="#">
								<i class="fa icon-dislike" style="font-size: 20px; font-weight: bold"></i>
							</a></center>
						</td>
						<td>
							<button type="button" class="btn btn-success" data-toggle="modal" onclick="show_applics(<?php echo $result->advertisement_id ?>)" data-target=".bs-exam-modal<?php echo $result->advertisement_id ?>"><i style="font-size: 20px" class="fa fa-bar-chart"></i></button>
                            <div class="modal fade bs-exam-modal<?php echo $result->advertisement_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title" id="myLargeModalLabel"><?php echo trans('image') ?></h4>
                                        </div>
                                        <div class="modal-body">
                                        	<div class="col-lg-12" id="userresults<?php echo $result->advertisement_id ?>">
												
						   
						  					</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</td>
						<td><center>
							<a target="_blank" href="<?php echo website().'admin_view/'.$result->advertisement_id; ?>">
								<i class="fa fa-eye" style="color: green; font-size: 20px;"></i>
							</a></center>
						</td>
						
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
				//alert(data);
				$('#userresults' + ad_id).html(data);
	        }
	    });
	}
	
	function approve (ad_id) {
	  $.ajax({
			url: '<?php echo base_url(); ?>approve_ad/' + ad_id,
			success: function(data) {
				if (data == 1) {
					toastr["success"]("Job approve success")
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
	
	function disapprove (ad_id) {
	  $.ajax({
			url: '<?php echo base_url(); ?>delete_ad/' + ad_id,
	        
			success: function(data) {
				if (data == 1) {
					toastr["success"]("Job deleted success")
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