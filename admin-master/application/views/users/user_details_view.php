

<?php $this->load->view('common/header'); ?>
<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>	
<link href="<?php echo base_url(); ?>assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	
<div class="panel panel-white">
    <div class="panel-heading clearfix">
        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>><?php echo $this->lang->line('emp_details'); ?></h3>
    </div>
    <div class="panel-body">
        <div class="row fontawesome-icon-list">
            
            <div class="col-md-6 col-sm-4" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>> 
            	<ul class="list-inline">
                    <li><?php echo $this->lang->line('full_name'); ?>:</li>
                    <li><?php echo $employee->first_name.' '.$employee->last_name; ?></li>
                </ul>
            </div>
            
            <div class="col-md-6 col-sm-4" style="float: right">
            	<ul class="list-inline">
                    <li><?php echo $this->lang->line('join_date'); ?>:</li>
                    <li><?php echo date('Y-m-d', $employee->join_date); ?></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-4" style="float: right">
            	<ul class="list-inline">
                    <li><?php echo $this->lang->line('username'); ?>:</li>
                    <li><?php echo $employee->username; ?></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-4" style="float: right">
            	<ul class="list-inline">
                    <li><?php echo $this->lang->line('branch'); ?>:</li>
                    <li><?php echo $employee->br_name; ?></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-4" style="float: right">
            	<ul class="list-inline">
                    <li><?php echo $this->lang->line('email'); ?>:</li>
                    <li><?php echo $employee->email; ?></li>
                </ul>
            </div>
            
            <div class="col-md-6 col-sm-4" style="float: right">
            	<ul class="list-inline">
                    <li><?php echo $this->lang->line('city'); ?>:</li>
                    <li><?php echo $employee->ci_name; ?></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-4" style="float: right">
            	<?php if (have_access(14, TRUE)) { ?>
	            	<ul class="list-inline">
	                    <li><?php echo $this->lang->line('fire_emp'); ?>:</li>
	                    <li><a href="<?php echo base_url()."fire_emp/$emp_id" ?>"><?php echo $this->lang->line('fire'); ?></a></li>
	                </ul>
                <?php } ?>
            </div>
            <div class="col-md-6 col-sm-4" style="float: right">
            	<ul class="list-inline">
                    <li><?php echo $this->lang->line('country'); ?>:</li>
                    <li><?php echo $employee->co_name; ?></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-4" style="float: right">
            	<?php if (have_access(20, TRUE)) { ?>
	            	<ul class="list-inline">
	                    <li><?php echo $this->lang->line('edit_basic_info'); ?>:</li>
	                    <li><a href="<?php echo base_url()."edit_emp/$emp_id" ?>"><?php echo $this->lang->line('edit'); ?></a></li>
	                </ul>
                <?php } ?>
            </div>
            
        </div>
    </div>
</div>

<div class="panel panel-white">
	<form method="post" action="<?php echo base_url().'home' ?>">
	    <div class="panel-heading clearfix">
	        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>><?php echo $this->lang->line('emp_details'); ?></h3>
	    </div>
	    <div class="panel-body">
	    	<div class="col-md-6 col-sm-4" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
			    <div class="form-group">
			        <label class="col-sm-2 control-label" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right; text-align: left"' ?>><?php echo $this->lang->line('from') ?></label>
			        <div class="col-sm-10" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
			            <input type="text" class="form-control date-picker" name="from">
			        </div>
			    </div>
		    </div>
		    <div class="col-md-6 col-sm-4" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
			    <div class="form-group">
			        <label class="col-sm-2 control-label" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right; text-align: left"' ?>><?php echo $this->lang->line('to') ?></label>
			        <div class="col-sm-10" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
			            <input type="text" class="form-control date-picker" name="to">
			        </div>
			    </div>
		    </div>
	    </div>
	    <div class="modal-footer">
	        <input type="submit" value="<?php echo $this->lang->line('show'); ?>" class="btn btn-danger">
	    </div>
    </form>
</div>
<?php if ($_POST) { ?>
<div class="panel panel-white" style="min-height: 800px">
    <div class="panel-heading clearfix">
        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>><?php echo $this->lang->line('emp_operattions'); ?></h3>
    </div>
    <div class="panel-body">
        <div role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>><a href="#tab5" role="tab" data-toggle="tab" aria-expanded="false"><?php echo $this->lang->line('clients'); ?></a></li>
                <li role="presentation" class="" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>><a href="#tab6" role="tab" data-toggle="tab" aria-expanded="false"><?php echo $this->lang->line('sessions'); ?></a></li>
                <li role="presentation" class="" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>><a href="#tab7" role="tab" data-toggle="tab" aria-expanded="false"><?php echo $this->lang->line('ads_list'); ?></a></li>
                <li role="presentation" class="" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>><a href="#tab8" role="tab" data-toggle="tab" aria-expanded="true"><?php echo $this->lang->line('sons_list'); ?></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active in" id="tab5">
                	<?php if ($clients->num_rows()) { ?>
                    <div class="table-responsive">
	                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
	                        <thead>
	                            <tr>
	                                <th style="width: 40px"><center>#</center></th>
		                            <th><center><?php echo $this->lang->line('full_name') ?></center></th>
		                            <th><center><?php echo $this->lang->line('phone') ?></center></th>
		                            <th><center><?php echo $this->lang->line('username') ?></center></th>
		                            <th><center><?php echo $this->lang->line('gov_id') ?></center></th>
		                            <th><center><?php echo $this->lang->line('email') ?></center></th>
		                            <th><center><?php echo $this->lang->line('join_date') ?></center></th>
		                            <th><center><?php echo $this->lang->line('branch') ?></center></th>
		                            <th><center><?php echo $this->lang->line('city') ?></center></th>
		                            <th><center><?php echo $this->lang->line('country') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_num') ?></center></th>
									<?php if (have_access(80, true)) { ?>
				                	<th><center><?php echo $this->lang->line('edit') ?></center></th>
				                	<?php } ?>      
	                            </tr>
	                        </thead>
	                        <tfoot>
	                            <tr>
	                                <th style="width: 40px"><center>#</center></th>
		                            <th><center><?php echo $this->lang->line('full_name') ?></center></th>
		                            <th><center><?php echo $this->lang->line('phone') ?></center></th>
		                            <th><center><?php echo $this->lang->line('username') ?></center></th>
		                            <th><center><?php echo $this->lang->line('gov_id') ?></center></th>
		                            <th><center><?php echo $this->lang->line('email') ?></center></th>
		                            <th><center><?php echo $this->lang->line('join_date') ?></center></th>
		                            <th><center><?php echo $this->lang->line('branch') ?></center></th>
		                            <th><center><?php echo $this->lang->line('city') ?></center></th>
		                            <th><center><?php echo $this->lang->line('country') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_num') ?></center></th>
									<?php if (have_access(80, true)) { ?>
				                	<th><center><?php echo $this->lang->line('edit') ?></center></th>
				                	<?php } ?>      
	                            </tr>
	                        </tfoot>
	                        <tbody>
	                            <?php $i = 1; $comm = 0; $total_price = 0; foreach ($clients->result() as $result) { ?>
		                          <tr>
		                            <td><?php echo $i; $i++; ?></td>
		                            <td><?php echo $result->client_fname.' '.$result->client_lname; ?></td>
		                            <td><?php echo $result->phone; ?></td>
		                            <td><?php echo $result->username; ?></td>
		                            <td><?php echo $result->client_gov_id; ?></td>
		                            <td><?php echo $result->email; ?></td>
		                            <td><?php echo date('Y-m-d', $result->join_date); ?></td>
		                            <td><?php echo $result->br_name; ?></td>
		                            <td><?php echo $result->ci_name; ?></td>
		                            <td><?php echo $result->co_name; ?></td>
		                            <td><?php echo $result->ads_sum; ?></td>
									<?php if (have_access(80, true)) { ?>
		                            <td><a href="<?php echo base_url()."edit_clt/$result->client_id" ?>"><?php echo $this->lang->line('edit') ?></a></td>
		                        	<?php } ?>     
		                          </tr>
		                          <?php } ?>
	                        </tbody>
                       </table>  
                    </div>
                    <?php } else { ?>
                      <b><center><?php echo $this->lang->line('no_clients'); ?></center></b>
                    <?php } ?>           
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab6">
                	<?php if ($sessions->num_rows()) { ?>
                    <div class="table-responsive">
	                    <table id="example1" class="display table" style="width: 100%; cellspacing: 0;">
	                        <thead>
	                            <tr>
	                                <th><center>#</center></th>
	                                <th><center><?php echo $this->lang->line('full_name') ?></center></th>
	                                <th><center><?php echo $this->lang->line('username') ?></center></th>
	                                <th><center><?php echo $this->lang->line('ip_address') ?></center></th>
	                                <th><center><?php echo $this->lang->line('device') ?></center></th>
	                                <th><center><?php echo $this->lang->line('os') ?></center></th>
	                                <th><center><?php echo $this->lang->line('browser') ?></center></th>
	            					<th><center><?php echo $this->lang->line('date') ?></center></th>
	                            </tr>
	                        </thead>
	                        <tfoot>
	                            <tr>
	                                <th><center>#</center></th>
	                                <th><center><?php echo $this->lang->line('full_name') ?></center></th>
	                                <th><center><?php echo $this->lang->line('username') ?></center></th>
	                                <th><center><?php echo $this->lang->line('ip_address') ?></center></th>
	                                <th><center><?php echo $this->lang->line('device') ?></center></th>
	                                <th><center><?php echo $this->lang->line('os') ?></center></th>
	                                <th><center><?php echo $this->lang->line('browser') ?></center></th>
	            					<th><center><?php echo $this->lang->line('date') ?></center></th>
	                            </tr>
	                        </tfoot>
	                        <tbody>
	                            <?php $i = 1; $comm = 0; $total_price = 0; foreach ($sessions->result() as $result) { ?>
		                          <tr>
		                            <td><?php echo $i; $i++; ?></td>
		                            <td><?php echo $result->first_name.' '.$result->last_name; ?></td>
		                            <td><?php echo $result->username; ?></td>
		                            <td><?php echo $result->ip_address; ?></td>
		                            <td><?php echo $result->device; ?></td>
		                            <td><?php echo $result->os; ?></td>
		                            <td><?php echo $result->browser; ?></td>
		                            <td><?php echo date('Y-m-d H:i', $result->start_time); ?></td>
		                          </tr>
		                          <?php } ?>
	                        </tbody>
                       </table>  
                    </div>
                    <?php } else { ?>
                      <b><center><?php echo $this->lang->line('no_sessions'); ?></center></b>
                    <?php } ?>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab7">
                	<?php if ($ads->num_rows()) { ?>
                	<table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
	                        <thead>
	                            <tr>
	                                <th style="width: 40px"><center>#</center></th>
		                            <th><center><?php echo $this->lang->line('client') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_name') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_prof') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_pos') ?></center></th>
		                            <th><center><?php echo $this->lang->line('price') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_publish_date') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_image') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_desc') ?></center></th>
		                            <th><center><?php echo $this->lang->line('commision') ?></center></th>
		                            <th><center><?php echo $this->lang->line('type') ?></center></th>
		                            <?php if (have_access(68, true)) { ?>
			                        	<th><center><?php echo $this->lang->line('renew') ?></center></th>
			                        <?php } ?>
									<?php if (have_access(29, true)) { ?>
		                            	<th><center><?php echo $this->lang->line('approve_ad') ?></center></th>
			                        <?php } ?>
									<?php if (have_access(55, true)) { ?>
			                            <th><center><?php echo $this->lang->line('fire') ?></center></th>
			                        <?php } ?>
	                            </tr>
	                        </thead>
	                        <tfoot>
	                            <tr>
	                                <th style="width: 40px"><center>#</center></th>
		                            <th><center><?php echo $this->lang->line('client') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_name') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_prof') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_pos') ?></center></th>
		                            <th><center><?php echo $this->lang->line('price') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_publish_date') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_image') ?></center></th>
		                            <th><center><?php echo $this->lang->line('ad_desc') ?></center></th>
		                            <th><center><?php echo $this->lang->line('commision') ?></center></th>
		                            <th><center><?php echo $this->lang->line('type') ?></center></th>
		                            <?php if (have_access(68, true)) { ?>
			                        	<th><center><?php echo $this->lang->line('renew') ?></center></th>
			                        <?php } ?>
									<?php if (have_access(29, true)) { ?>
		                            	<th><center><?php echo $this->lang->line('approve_ad') ?></center></th>
			                        <?php } ?>
									<?php if (have_access(55, true)) { ?>
			                            <th><center><?php echo $this->lang->line('fire') ?></center></th>
			                        <?php } ?>
	                            </tr>
	                        </tfoot>
	                        <tbody>
	                            <?php $i = 1; $comm = 0; $total_price = 0; foreach ($ads->result() as $result) { ?>
		                          <tr>
		                            <td><?php echo $i; $i++; ?></td>
		                            <td><?php echo $result->client_fname.' '.$result->client_lname; ?></td>
		                            <td><?php echo $result->title; ?></td>
		                            <td><?php echo $result->prof_name_ar; ?></td>
		                            <td><?php echo $result->position_name; ?></td>
		                            <td><?php echo $result->price; $total_price += $result->price; ?></td>
		                            <td><?php echo date('Y-m-d', $result->publish_date); ?></td>
		                            <td>
		                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg<?php echo $result->ad_id ?>"><?php echo $this->lang->line('download') ?></button>
		                                <div class="modal fade bs-example-modal-lg<?php echo $result->ad_id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					                        <div class="modal-dialog modal-lg">
					                            <div class="modal-content">
					                                <div class="modal-header">
					                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					                                    <h4 class="modal-title" id="myLargeModalLabel"><?php echo $result->title; ?></h4>
					                                </div>
					                                <div class="modal-body">
					                                    <img style="width: 100%" src="<?php echo base_url()."uploads/$result->image"; ?>" />
					                                </div>
					                                <div class="modal-footer">
					                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
		                            
		                            </td>
		                            <td><?php echo $result->description; ?></td>
		                            <td><?php echo $result->credit; $comm += $result->credit; ?></td>
		                            <td><?php echo $result->emp_id == $this->session->userdata('user_id') ? $this->lang->line('mine') : $this->lang->line('team') ?></td>
		                            <?php if (have_access(68, true)) { ?>
			                            <td><a href="<?php echo base_url()."renew_ad/$result->ad_id" ?>"><?php echo $this->lang->line('renew') ?></a></td>
			                        <?php } ?>
					 				<?php if (have_access(29, true)) { ?>
		                          		<td>
		                            <?php if ($result->approved_ad) {
		                                echo $this->lang->line('approved');
		                            } else { ?>
		                                <a href="<?php echo base_url()."approve/$result->ad_id"; ?>">
		                                  <?php echo $this->lang->line('approve'); ?></td>
		                                </a>
		                            <?php } ?>  
		                            
		                            </td>
			                        <?php } ?>
			 						<?php if (have_access(55, true)) { ?>
			                            <td><a href="<?php echo base_url()."del_ad/$result->ad_id" ?>" onclick="return confirm('Are you sure?')" ><?php echo $this->lang->line('fire') ?></a></td>
			                        <?php } ?>
		                          </tr>
		                          <?php } ?>
	                        </tbody>
                       </table>  
                       <?php } else { ?>
	                      <b><center><?php echo $this->lang->line('no_ads'); ?></center></b>
	                   <?php } ?>
                    
                    
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab8">
                    <?php if ($sons->num_rows()) { ?>
                	<table id="example4" class="display table" style="width: 100%; cellspacing: 0;">
	                        <thead>
	                            <tr>
	                                <th style="width: 40px"><center>#</center></th>
			                        <th><center><?php echo $this->lang->line('full_name') ?></center></th>
			                        <th><center><?php echo $this->lang->line('phone') ?></center></th>
			                        <th><center><?php echo $this->lang->line('username') ?></center></th>
			                        <th><center><?php echo $this->lang->line('gov_id') ?></center></th>
			                        <th><center><?php echo $this->lang->line('email') ?></center></th>
			                        <th><center><?php echo $this->lang->line('join_date') ?></center></th>
			                        <th><center><?php echo $this->lang->line('branch') ?></center></th>
			                        <th><center><?php echo $this->lang->line('city') ?></center></th>
			                        <th><center><?php echo $this->lang->line('country') ?></center></th>
			                        <th><center><?php echo $this->lang->line('commision') ?></center></th>
			                        <th><center><?php echo $this->lang->line('ad_num') ?></center></th>
			                        <?php if (have_access(21, TRUE)) { ?>
			                            <th><center><?php echo $this->lang->line('more_details') ?></center></th>
			                        <?php } ?>
	                            </tr>
	                        </thead>
	                        <tfoot>
	                            <tr>
	                                <th style="width: 40px"><center>#</center></th>
			                        <th><center><?php echo $this->lang->line('full_name') ?></center></th>
			                        <th><center><?php echo $this->lang->line('phone') ?></center></th>
			                        <th><center><?php echo $this->lang->line('username') ?></center></th>
			                        <th><center><?php echo $this->lang->line('gov_id') ?></center></th>
			                        <th><center><?php echo $this->lang->line('email') ?></center></th>
			                        <th><center><?php echo $this->lang->line('join_date') ?></center></th>
			                        <th><center><?php echo $this->lang->line('branch') ?></center></th>
			                        <th><center><?php echo $this->lang->line('city') ?></center></th>
			                        <th><center><?php echo $this->lang->line('country') ?></center></th>
			                        <th><center><?php echo $this->lang->line('commision') ?></center></th>
			                        <th><center><?php echo $this->lang->line('ad_num') ?></center></th>
			                        <?php if (have_access(21, TRUE)) { ?>
			                            <th><center><?php echo $this->lang->line('more_details') ?></center></th>
			                        <?php } ?>
	                            </tr>
	                        </tfoot>
	                        <tbody>
	                            <?php $i = 1; $comm = 0; $total_price = 0; foreach ($sons->result() as $result) { ?>
			                      <tr>
			                        <td><?php echo $i; $i++; ?></td>
			                        <td><?php echo $result->first_name.' '.$result->last_name; ?></td>
			                        <td><?php echo $result->phone; ?></td>
			                        <td><?php echo $result->username; ?></td>
			                        <td><?php echo $result->gov_id; ?></td>
			                        <td><?php echo $result->email; ?></td>
			                        <td><?php echo date('Y-m-d', $result->join_date); ?></td>
			                        <td><?php echo $result->br_name; ?></td>
			                        <td><?php echo $result->ci_name; ?></td>
			                        <td><?php echo $result->co_name; ?></td>
			                        <td><?php echo $result->commision; ?></td>
			                        <td><?php echo $result->ads_sum; ?></td>
			                        <?php if (have_access(21, TRUE)) { ?>
			                        <td>
			                          <a href="<?php echo base_url().'emp_details/'.$result->emp_id; ?>">
			                            <?php echo $this->lang->line('show'); ?>
			                          </a>
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
        </div>
    </div>
</div>
<?php } ?>
<?php $this->load->view('common/footer'); ?>
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/js/jquery.datatables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/table-data.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/form-elements.js"></script>
        