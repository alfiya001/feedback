<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Home - Feedback</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,200,100,800' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR SUBVIEW CONTENTS -->
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.theme.css">
		<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.transitions.css">
		<link rel="stylesheet" href="assets/plugins/summernote/dist/summernote.css">
		<link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
		<link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-select/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
		<link rel="stylesheet" href="assets/plugins/DataTables/media/css/DT_bootstrap.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<!-- end: CSS REQUIRED FOR THIS SUBVIEW CONTENTS-->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="assets/plugins/weather-icons/css/weather-icons.min.css">
		<link rel="stylesheet" href="assets/plugins/nvd3/nv.d3.min.css">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE CSS -->
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/styles-responsive.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-default.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="assets/css/print.css" type="text/css" media="print"/>
		<!-- end: CORE CSS -->
		<link rel="shortcut icon" href="favicon.ico" />
		
		<!-- SIDEBARE CSS -->
		<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<!-- start: SLIDING BAR (SB) -->
    <?php require_once('header.php');?>
        <div id="wrapper" >
        <!-- Sidebar -->
        <?php require_once('sidebar.php');?>
        
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                            <div class="col-sm-6 hidden-xs">
                                <div class="page-header">
                                <h1>Dashboard <small>overview & stats </small></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- start: BREADCRUMB -->
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li>
                    <a href="index.php">Dashboard</a>
                    </li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
         <!-- end: BREADCRUMB -->
			<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
				<div class="main-content">
					<!-- start: PANEL CONFIGURATION MODAL FORM -->
					
					<!-- /.modal -->
					<!-- end: SPANEL CONFIGURATION MODAL FORM -->
					
						<!-- start: PAGE CONTENT -->
                        <?php  $sql= "Select id,status FROM init_feedback ORDER BY id DESC LIMIT 1";
		 $num = mysql_fetch_assoc(mysql_query($sql));
		 if($num['status']){ ?>
						<div class="row">
						    <?php  if($_SESSION['role'] == 4){ 
								    $sql= "SELECT status FROM init_feedback ORDER BY id DESC LIMIT 1";
									$row = mysql_fetch_assoc(mysql_query($sql));	
								    if($row['status'] == 1){
							?>
							<div class="col-md-6 col-lg-3 col-sm-6">
								<div class="panel panel-default panel-white core-box">
									<div class="panel-tools">
										<a href="#" class="btn btn-xs btn-link panel-close">
											<i class="fa fa-times"></i>
										</a>
									</div>
									<div class="panel-body no-padding">
										<div class="partition-green padding-20 text-center core-icon">
											<i class="fa fa-bar-chart-o fa-2x icon-big"></i>
										</div>
										<div class="padding-20 core-content">
											<h3 class="title block no-margin">FEEDBACK</h3>
											<span class="subtitle"> Give Your Valuable Feedback</span>
										</div>
									</div>
									<div class="panel-footer clearfix no-padding">
										<div class=""></div>
										
										<a href="feedback_staff.php" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 col-sm-6">
								<div class="panel panel-default panel-white core-box">
									<div class="panel-tools">
										<a href="#" class="btn btn-xs btn-link panel-close">
											<i class="fa fa-times"></i>
										</a>
									</div>
									<div class="panel-body no-padding">
										<div class="partition-blue padding-20 text-center core-icon">
											<i class="fa fa-code fa-2x icon-big"></i>
										</div>
										<div class="padding-20 core-content">
											<h3 class="title block no-margin">Your Feedback</h3>
											<h3 class="title block no-margin"><?php 
												$row  = mysql_fetch_array(mysql_query("SELECT count(id) FROM store_id WHERE stud_id='".$_SESSION['id']."'"));
												echo $row[0];
											?></h3>
										</div>
									</div>
									<div class="panel-footer clearfix no-padding">
										
										<a href="feedback_given.php" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
							<?php }else{?>
							<div class="col-md-6 col-lg-3 col-sm-6">
								<div class="panel panel-default panel-white core-box">
									<div class="panel-tools">
										<a href="#" class="btn btn-xs btn-link panel-close">
											<i class="fa fa-times"></i>
										</a>
									</div>
									<div class="panel-body no-padding">
										<div class="partition-red padding-20 text-center core-icon">
											<i class="fa fa-desktop fa-2x icon-big"></i>
										</div>
										<div class="padding-20 core-content">
											<h3 class="title block no-margin">Feedback Closed</h3>
											<span class="subtitle">  </span>
										</div>
									</div>
									<div class="panel-footer clearfix no-padding">
										
									</div>
								</div>
							</div>
							<?php }}else if($_SESSION['role'] == 3){?>
							<div class="col-md-6 col-lg-3 col-sm-6">
								<div class="panel panel-default panel-white core-box">
									<div class="panel-tools">
										<a href="#" class="btn btn-xs btn-link panel-close">
											<i class="fa fa-times"></i>
										</a>
									</div>
									<div class="panel-body no-padding">
										<div class="partition-red padding-20 text-center core-icon">
											<i class="fa fa-desktop fa-2x icon-big"></i>
										</div>
										<div class="padding-20 core-content">
											<h3 class="title block no-margin">Your Feedback</h3>
											<span class="subtitle">  </span>
										</div>
									</div>
									<div class="panel-footer clearfix no-padding">
										<a href="my_feedback.php" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
							<?php }else if($_SESSION['role'] == 2){?>
							<div class="col-md-6 col-lg-3 col-sm-6">
								<div class="panel panel-default panel-white core-box">
									<div class="panel-tools">
										<a href="#" class="btn btn-xs btn-link panel-close">
											<i class="fa fa-times"></i>
										</a>
									</div>
									<div class="panel-body no-padding">
										<div class="partition-red padding-20 text-center core-icon">
											<i class="fa fa-desktop fa-2x icon-big"></i>
										</div>
										<div class="padding-20 core-content">
											<h3 class="title block no-margin">Staff Feedback</h3>
											<span class="subtitle">  </span>
										</div>
									</div>
									<div class="panel-footer clearfix no-padding">
										<a href="staff_feedback.php" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
							<?php }else if($_SESSION['role'] == 1){
									$result = mysql_query("SELECT * FROM department");
									while($row = mysql_fetch_assoc($result)) {	
								?>
                            <div class="col-md-6 col-lg-3 col-sm-6">
								<div class="panel panel-default panel-white core-box">
									<div class="panel-tools">
										<a href="#" class="btn btn-xs btn-link panel-close">
											<i class="fa fa-times"></i>
										</a>
									</div>
									<div class="panel-body no-padding">
										<div class="partition-red padding-20 text-center core-icon">
											<i class="fa fa-desktop fa-2x icon-big"></i>
										</div>
										<div class="padding-20 core-content">
											<h3 class="title block no-margin"><?php echo $row['name'];?>  Feedback</h3>
											<span class="subtitle">  </span>
										</div>
									</div>
									<div class="panel-footer clearfix no-padding">
										<a href="department_feedback.php?id=<?php echo $row['id'];?>" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
                            
                            
                            <?php }}?>
						</div>
                       <?php }else{	?>
                           <div class="col-md-6 col-lg-3 col-sm-6">
								<div class="panel panel-default panel-white core-box">
									
									<div class="panel-body no-padding">
										<div class="partition-green padding-20 text-center core-icon">
											<i class="fa fa-bar-chart-o fa-2x icon-big"></i>
										</div>
										<div class="padding-20 core-content">
											<h3 class="title block no-margin">FEEDBACK Is Stop Now </h3>
											<span class="subtitle"></span>
										</div>
									</div>
									<div class="panel-footer clearfix no-padding">
										<div class=""></div>
										
										<a href="feedback_staff.php" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="View More"><i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
					   <?php }?> 
						<!-- end: PAGE CONTENT-->
					</div>
					<div class="subviews">
						<div class="subviews-container"></div>
					</div>
				</div>
				<!-- end: PAGE -->
			</div>
			<!-- end: MAIN CONTAINER -->
			<!-- start: FOOTER -->
			<?php 
				require_once('footer.php');
			?>
			<!-- end: FOOTER -->
			
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="assets/plugins/respond.min.js"></script>
		<script src="assets/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jQuery/jquery-1.11.1.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="assets/plugins/jQuery/jquery-2.1.1.min.js"></script>
		<!--<![endif]-->
		<script src="assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/moment/min/moment.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="assets/plugins/bootbox/bootbox.min.js"></script>
		<script src="assets/plugins/jquery.scrollTo/jquery.scrollTo.min.js"></script>
		<script src="assets/plugins/ScrollToFixed/jquery-scrolltofixed-min.js"></script>
		<script src="assets/plugins/jquery.appear/jquery.appear.js"></script>
		<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="assets/plugins/velocity/jquery.velocity.min.js"></script>
		<script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
		<script src="assets/plugins/jquery-mockjax/jquery.mockjax.js"></script>
		<script src="assets/plugins/toastr/toastr.js"></script>
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
		<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
		<script src="assets/plugins/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
		<script src="assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/plugins/DataTables/media/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/DataTables/media/js/DT_bootstrap.js"></script>
		<script src="assets/plugins/truncate/jquery.truncate.js"></script>
		<script src="assets/plugins/summernote/dist/summernote.min.js"></script>
		<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="assets/js/subview.js"></script>
		<script src="assets/js/subview-examples.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR SUBVIEW CONTENTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
		<script src="assets/plugins/nvd3/lib/d3.v3.js"></script>
		<script src="assets/plugins/nvd3/nv.d3.min.js"></script>
		<script src="assets/plugins/nvd3/src/models/historicalBar.js"></script>
		<script src="assets/plugins/nvd3/src/models/historicalBarChart.js"></script>
		<script src="assets/plugins/nvd3/src/models/stackedArea.js"></script>
		<script src="assets/plugins/nvd3/src/models/stackedAreaChart.js"></script>
		<script src="assets/plugins/jquery.sparkline/jquery.sparkline.js"></script>
		<script src="assets/plugins/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
		<script src="assets/js/index.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE JAVASCRIPTS  -->
		<script src="assets/js/main.js"></script>
		<!-- end: CORE JAVASCRIPTS  -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
				Index.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>