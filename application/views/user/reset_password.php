<div id="container" class="container mx-auto pt-5">
	<div class="row">
		<div class="col-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center"><?php echo __("Reset Password"); ?>?</h2>
                  <p><?php echo __("You can reset your password here."); ?></p>
                  <div class="panel-body">
                    
                    <?php if(validation_errors() != ''): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo validation_errors(); ?>
                    </div>
                    <?php endif; ?>

                    <form role="form" autocomplete="off" class="form" method="post" action="<?php echo site_url('user/reset_password'); ?>/<?php echo $reset_code; ?>">

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"><?php echo __("Password"); ?></label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="<?php echo __("Password"); ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"><?php echo __("Confirm Password"); ?></label>
                            <div class="col-sm-10">
                                <input type="password" name="password_confirm" class="form-control" id="inputPassword" placeholder="<?php echo __("Password"); ?>">
                            </div>
                        </div>

                      <div class="mb-3">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="<?php echo __("Reset Password"); ?>" type="submit">
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>