
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $title; ?></h3>
            </div>
            <div class="box-body">
              <?php echo $body; ?>
            </div><!-- /.box-body -->
            <div class="box-footer">
            	<button type="button" onclick="goBack()" class="btn btn-default pull-left" data-dismiss="modal"><?php echo $this->lang->line('back') ?></button>
              <?php if (isset($submit)) {
                  echo $submit;
              } ?>
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        