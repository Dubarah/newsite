</div><!-- Main Wrapper --><div class="page-footer">
                    <div class="container">
                        <p class="no-s"><?php echo date('Y') ?> &copy; <?php echo $this->lang->line("title"); ?></p>
                    </div>
                </div>
            </div><!-- Page Inner -->
    
            
            
        <!-- Page Content -->
        <nav class="cd-nav-container" id="cd-nav">
            <header>

            </header>
            <ul class="cd-nav list-unstyled">
                <li class="cd-selected" data-menu="index">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-home"></i>
                        </span>
                        <p>لوحة التحكم</p>
                    </a>
                </li>
                <li data-menu="profile">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <p>الملف الشخصي</p>
                    </a>
                </li>
                <li data-menu="inbox">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-envelope"></i>
                        </span>
                        <p>البريد</p>
                    </a>
                </li>
                <li data-menu="calendar">
                    <a href="javsacript:void(0);">
                        <span>
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                        <p>جدول مواعيد</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="cd-overlay"></div>
        <!-- Javascripts -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/classie/classie.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/modern.min.js"></script>
        
        
        <?php /*
        <script type="text/javascript">
			$( document ).ready(function() {
			    
			    // CounterUp Plugin
			    $('.counter').counterUp({
			        delay: 10,
			        time: 1000
			    });
			    <?php if ($this->session->userdata('err_message')) { ?>
					setTimeout(function() {
				        toastr.options = {
				            closeButton: true,
				            progressBar: true,
				            showMethod: 'fadeIn',
				            hideMethod: 'fadeOut',
				            timeOut: 5000
				        };
				        toastr.error(<?php echo $this->session->userdata('err_message'); $this->session->unset_userdata('err_message') ?>, <?php echo $this->lang->line('error') ?>);
				    }, 1800);
				<?php } elseif ($this->session->userdata('suc_message')) { ?>
					//alert('fsdf');
					setTimeout(function() {
				        toastr.options = {
				            closeButton: true,
				            progressBar: true,
				            showMethod: 'fadeIn',
				            hideMethod: 'fadeOut',
				            timeOut: 5000
				        };
				        toastr.success('<?php echo $this->session->userdata('suc_message'); $this->session->unset_userdata('suc_message') ?>', '<?php echo $this->lang->line('success') ?>');
				    }, 1800);
				<?php } ?>
			    
			});
            </script>
        */ ?>
        <script type="text/javascript">
        	var map = {17: false, 76: false};
			$(document).keydown(function(e) {
			    if (e.keyCode in map) {
			        map[e.keyCode] = true;
			        if (map[17] && map[76]) {
			            window.location = "<?php echo base_url() ?>screen_lock";
			        }
			    }
			}).keyup(function(e) {
			    if (e.keyCode in map) {
			        map[e.keyCode] = false;
			    }
			});
			
			$.widget.bridge('uibutton', $.ui.button);
			function goBack() {
			    window.history.back();
			}
        </script>
        
    </body>
</html>