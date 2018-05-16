

<?php $this->load->view('common/header'); ?>
<link href="<?php echo base_url(); ?>assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>	
<link href="<?php echo base_url(); ?>assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	
<link href="<?php echo base_url(); ?>assets/plugins/select2/css/select2m.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css" rel="stylesheet"/>

<div class="panel panel-white">
	
	    <div class="panel-heading clearfix">
	        <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
	        	<?php echo $this->lang->line('cities_manage'); ?>
	        </h3>
	    </div>
	    <div class="panel-body">
	      <?php if ($results) { ?>
			  <table id="example3" class="display table" style="margin: 0">
	            <thead>
	              <tr>
	                <th style="width: 30px"><center>#</center></th>
	                <th style="min-width: 60%; width: 60%"><center><?php echo $this->lang->line('city_name') ?></center></th>
	                <?php if (have_access(17, true)) { ?>
	                    <th><center><?php echo $this->lang->line('edit_name') ?></center></th>
	                <?php } ?>
	                <?php if (have_access(18, true)) { ?>
	                    <th><center><?php echo $this->lang->line('fire') ?></center></th>
	                <?php } ?>
	              </tr>
	            </thead>
	            <tbody>
	              <?php $i = 1; foreach ($results as $result) { ?>
                      <tr id="resdel<?php echo $result->city_id ?>">
                        <td><?php echo $i; $i++; ?></td>
                        <td><center><?php echo !$this->session->userdata('lang') || $this->session->userdata('lang') == 'ar'? $result->city_name_ar : $result->city_name_en; ?></center></td>
                        <?php if (have_access(17, true)) { ?>
                        <td>
                          <center>
                            <a href="<?php echo base_url()."edit_cityname/$result->city_id"; ?>">
                            <?php echo $this->lang->line('edit'); ?>
                            </a>
                          </center>
                        </td>
                        <?php } ?>
                        <?php if (have_access(18, true)) { ?>
                    	<td>
			            	<center>
			            		<a onclick="return confirm('are you sure?')" href="<?php echo base_url(). "del_city/$result->city_id" ?>"><?php echo $this->lang->line('fire'); ?></a>
			            	</center>
			            </td>
                        <?php } ?>
                      </tr>
                          
                      <?php } ?>
              	</table>
		  	<?php } else { ?>
				  <h3 class="panel-title" <?php echo $this->session->userdata('lang') == 'en' ? '' : 'style="float: right"' ?>>
			        	<?php echo $this->lang->line('no_cities_ex'); ?>
			        </h3>
			<?php } ?>
          
              </div>
              <?php if (have_access(19, true)) { ?>
              <form method="post" action="<?php echo base_url()."add_city/$country_id"; ?>">
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

<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/form-select2.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/form-elements.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pages/notifications.js"></script>
<script type="text/javascript">
	function del_branch (id) {
	    new_id = document.getElementById("city" + id).value;
	    
	    $.ajax({
          	url: '<?php echo base_url(); ?>del_city/' + id + '/' + new_id,
          	success: function(data) {
          		//alert(data);
	            if (data == 1) {
	            	//$().html('');
	            	var row = document.getElementById('resdel' + id);
    				row.parentNode.removeChild(row);
    				$('.modal-backdrop').remove();
	            	//$('.modal-backdrop').s
	            	toastr.options = {
						"closeButton": false,
						"debug": false,
						"newestOnTop": false,
						"progressBar": false,
						"positionClass": "toast-bottom-<?php echo $this->session->userdata('lang') == 'en' ? 'left' : 'right' ?>",
						"preventDuplicates": false,
						"onclick": null,
						"showDuration": "1000",
						"hideDuration": "1000",
						"timeOut": "5000",
						"extendedTimeOut": "1000",
						"showEasing": "swing",
						"hideEasing": "linear",
						"showMethod": "fadeIn",
						"hideMethod": "fadeOut"
					};
					toastr["success"]("<?php echo $this->lang->line('deleted') ?>");
	            } else{
	            	toastr.options = {
						"closeButton": false,
						"debug": false,
						"newestOnTop": false,
						"progressBar": false,
						"positionClass": "toast-bottom-<?php echo $this->session->userdata('lang') == 'en' ? 'left' : 'right' ?>",
						"preventDuplicates": false,
						"onclick": null,
						"showDuration": "1000",
						"hideDuration": "1000",
						"timeOut": "5000",
						"extendedTimeOut": "1000",
						"showEasing": "swing",
						"hideEasing": "linear",
						"showMethod": "fadeIn",
						"hideMethod": "fadeOut"
					};
					toastr["error"]("<?php echo $this->lang->line('not_deleted') ?>");
	            }; 
          	}
      	});
	}
</script>
        
        

        