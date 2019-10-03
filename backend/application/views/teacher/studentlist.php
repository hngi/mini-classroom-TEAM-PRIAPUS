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
								<div class="page-title">All Students</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="dashboard.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="">Students</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">List students</li>
							</ol>
						</div>
					</div>
					   <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-red">
                                <div class="card-head">
                                    
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-scrollable">
                                        <table
                                            class="table table-striped table-bordered table-hover table-checkable order-column"
                                            style="width: 100%" id="example4">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th width="25%">Name</th>
                                                    <th width="30%">Email</th>
                                                    <th width="45%">Classes</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($list as $key => $list): ?>
                                                <tr class="odd gradeX">
                                                    <td><?= $list->name; ?></td>
                                                    <td style="word-break:break-all;"><?= $list->email; ?></td>
																										<td id="student_<?= $list->id; ?>" >
																											<div class="btn-group">
                                                        <a onclick="getClasses('<?= $list->id; ?>', '<?= $list->class_id; ?>')" class="btn btn-primary">
																														<i class="fa fa-chevron-down"></i> Show
																												</a>
                                                    </td>
                                                </tr>
                                             <?php endforeach;?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<!-- end page content -->
		</div>
        <!-- end page container -->

    <script type="text/javascript">
        var url = "<?php echo base_url(); ?>";
        function getClasses(id, class_id) {
            document.getElementById('student_'+id).innerHTML = '<div class="loader"></div>'
            var arr = class_id.split(',');
            var classes = arr.join('-');
            console.log(classes);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this);
                var response = JSON.parse(this.response);
                var subjectRes = '';
                for(var i = 0; i < response.length; i++){
                    subjectRes += response[i].class_name+', ';
                }
                document.getElementById('student_'+id).innerHTML = subjectRes;
            }
            };
            xmlhttp.open("GET", "<?php echo base_url('index.php/teacher_es/students_classes/'); ?>"+classes, true);
            xmlhttp.send();
        }
        
    </script>

