<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Edit Class</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="dashboard.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Edit</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Edit Class</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
                                 <?php if (isset($_SESSION["success"])) { ?>
                                    <?php echo $_SESSION["success"]; ?>
                                <?php } ?>

                                <?php if (isset($_SESSION['error'])) { ?>
                                    <?php echo $_SESSION['error']; ?>
                                <?php } ?>
                                <center> <strong><p style="color:red;"> <?php echo validation_errors(); ?> </p> </strong> </center>

								<div class="card-body" id="bar-parent">
									<form action="<?= base_url();?>index.php/teacher_es/edit_class/<?= $user['id'];?>" method="post" class="form-horizontal">
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Course Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="class_name" placeholder="enter course name"
														class="form-control input-height" value="<?= ucfirst($user['class_name']) ?>"/>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Course Details
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<textarea name="class_details" placeholder="course details"
														class="form-control-textarea" value="" rows="5" required>
                                                        <?= ucfirst($user['class_details']) ?>
                                                        </textarea>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="submit"
															class="btn btn-info m-r-20" name="save">SAVE</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end page content -->
		</div>
		<!-- end page container -->