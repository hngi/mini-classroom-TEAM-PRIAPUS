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
	<link href="<?= base_url()?>public/assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="<?= base_url()?>public/assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="<?= base_url()?>public/assets/css/material_style.css">
	<!-- inbox style -->
	<link href="<?= base_url()?>public/assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="<?= base_url()?>public/assets/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="<?= base_url()?>public/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>public/assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>public/assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>public/assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
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
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="<?= base_url()?>public/assets/img/dp.jpg" />
								<span class="username username-hide-on-mobile"><?= $_SESSION['email']?></span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="<?= base_url()?>index.php/student/logout">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>
						<!-- end manage user dropdown -->
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start page container -->
		<div class="page-container">
                <style>
                        .page-contentola {
                            margin-top: 0;
                        min-height: 600px;
                        padding: 25px 20px 10px;
                    }
                </style>
			<div class="page-content-wrapper">
				<div class="page-contentola">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Classes</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								
								<div class="card-body" id="bar-parent">
									<form action=""  method="post" class="form-horizontal">
                                     <?php if (isset($_SESSION["success"])) { ?>
                                            <?php echo $_SESSION["success"]; ?>
                                            <?php } ?>

                                            <?php if (isset($_SESSION['error'])) { ?>
                                            <?php echo $_SESSION['error']; ?>
                                            <?php } ?>
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3">Course Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													 <select name="class[]" multiple="multiple" class="form-control selectpicker" required>
                                                        <option value="">&mdash;Select Your Class &mdash;</option>
                                                        <?php foreach($class as $key => $class):?>
                                                        <option value="<?= $class->id;?>"><?= $class->class_name;?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                    <small>Press the control key and select multiple classes</small>
												</div>
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="submit"
															class="btn btn-info m-r-20" name="save">Submit</button>
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
			<div class="page-footer-inner"> 2019 &copy; Team Priapus</div>
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