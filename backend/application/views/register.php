



<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Team Priapus Mini-Classroom</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="<?= base_url()?>public/fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>public/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>public/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="<?= base_url()?>public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>public/assets/plugins/bootstrap-datepicker/datepicker.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?= base_url()?>public/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?= base_url()?>public/assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="<?= base_url()?>public/assets/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="<?= base_url()?>public/assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>public/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>public/assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>public/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>public/assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="<?= base_url()?>public/assets/img/favicon.ico" />

    <style>
      .page-content-wrapper .page-contentola {
       
        margin-top: 0;
        min-height: 600px;
        padding: 25px 20px 10px
    }
    
    
    </style>
</head>
<!-- END HEAD -->

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="dashboard.html">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">Priapus</span> </a>
				</div>
				<!-- logo end -->
				<div class="top-menu">
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-contentola">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Teacher Signup</div>
							</div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								
								<div class="card-body" id="bar-parent">
                                     
									<form action="#" method="post" action="" class="form-horizontal">
                                         <?php if (isset($_SESSION["success"])) { ?>
                                            <?php echo $_SESSION["success"]; ?>
                                        <?php } ?>

                                        <?php if (isset($_SESSION['error'])) { ?>
                                            <?php echo $_SESSION['error']; ?>
                                        <?php } ?>
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Full Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="name"
														placeholder="enter first name"
														class="form-control input-height" required />
												</div>
											</div>
										
											<div class="form-group row">
												<label class="control-label col-md-3">Email
												</label>
												<div class="col-md-5">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
														<input type="text" class="form-control input-height"
															name="email" placeholder="Email Address" required> </div>
												</div>
											</div>
										
											<div class="form-group row">
												<label class="control-label col-md-3">Password
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="password" name="password" 
														placeholder="enter Password"
														class="form-control input-height" required />
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Confirm Password
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="password" name="passconf" 
														placeholder="Reenter your password"
														class="form-control input-height"  required/>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Gender
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height" name="gender" required>
														<option value="">Select...</option>
														<option value="male">Male</option>
														<option value="female">Female</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Mobile No.
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input name="phone" type="text" placeholder="mobile number"
														class="form-control input-height" required /> </div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3">Address
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<textarea name="address" placeholder="address"
														class="form-control-textarea" rows="5" required></textarea>
												</div>
											</div>
											
											<div class="form-group row">
												<label class="control-label col-md-3">Bio
												</label>
												<div class="col-md-5">
													<textarea name="bio" class="form-control-textarea"
														placeholder="Education" rows="5" required></textarea>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="submit"
															class="btn btn-info m-r-20" name="submit">Submit</button>
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
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2019 &copy; &hearts; Team Priapus</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="<?= base_url()?>public/assets/plugins/jquery/jquery.min.js"></script>
	<script src="<?= base_url()?>public/assets/plugins/popper/popper.js"></script>
	<script src="<?= base_url()?>public/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="<?= base_url()?>public/assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script src="<?= base_url()?>public/assets/plugins/jquery-validation/js/additional-methods.min.js"></script>
	<script src="<?= base_url()?>public/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="<?= base_url()?>public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url()?>public/assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="<?= base_url()?>public/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
	<script src="<?= base_url()?>public/assets/plugins/bootstrap-datepicker/datepicker-init.js"></script>
	<!-- Common js-->
	<script src="<?= base_url()?>public/assets/js/app.js"></script>
	<script src="<?= base_url()?>public/assets/js/pages/validation/form-validation.js"></script>
	<script src="<?= base_url()?>public/assets/js/layout.js"></script>
	<script src="<?= base_url()?>public/assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="<?= base_url()?>public/assets/plugins/material/material.min.js"></script>
	<!-- end js include path -->
</body>

</html>