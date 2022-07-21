	<!-- Modal -->
	<div class="modal fade" id="myModalLoginUser" tabindex="-1" role="dialog" aria-labelledby="modal_login_user">
	    <div class="modal-dialog modal-md" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title" id="modal_add_address_title"></h4>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	            </div>
	            <div class="modal-body ">
	                <form class="login-form" method="post" name="login_form" id="login-form">
	                    <div class="row">
	                        <div class="col-lg-12">
	                            <div class="form-group position-relative">
	                                <label><?php echo $lang['left115'] ?> <span class="text-danger">*</span></label>
	                                <i class="mdi mdi-account ml-3 icons"></i>
	                                <input type="text" class="form-control pl-5" placeholder="<?php echo $lang['left116'] ?>" name="username" id="username" required="">
	                            </div>
	                        </div>

	                        <div class="col-lg-12">
	                            <div class="form-group position-relative">
	                                <label><?php echo $lang['left117'] ?> <span class="text-danger">*</span></label>
	                                <i class="mdi mdi-key ml-3 icons"></i>
	                                <input type="password" class="form-control pl-5" placeholder="<?php echo $lang['left118'] ?>" name="password" id="password" required="">
	                            </div>
	                        </div>

	                        <div class="col-lg-12">
	                            <p class="float-right forgot-pass"><a href="forgot-password.php" class="text-dark font-weight-bold"><?php echo $lang['left119'] ?></a></p>
	                            <div class="form-group">
	                                <div class="custom-control custom-checkbox">
	                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
	                                    <label class="custom-control-label" for="customCheck1"><?php echo $lang['left120'] ?></label>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-lg-12 mb-0">
	                            <button class="btn btn-warning rounded w-100"><?php echo $lang['left121'] ?></button>
	                            <input name="login" type="hidden" value="1" />
	                        </div>

	                        <div class="col-12 text-center">
	                            <p class="mb-0 mt-3"><small class="text-dark mr-2"><?php echo $lang['left122'] ?></small> <a href="sign-up.php" class="text-dark font-weight-bold"><?php echo $lang['left123'] ?></a></p>
	                        </div>
	                    </div>
	                </form>
	            </div>
	            <!-- <div class="modal-footer">
	                <button type="submit" class="btn btn-success" id="save_data_address">Save</button>
	                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	            </div> -->
	        </div>
	    </div>