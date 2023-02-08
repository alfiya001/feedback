<?php 
		require_once('include/config.php');
		require_once('include/function.php');
		$id=$_GET['id'];
		if(isset($_POST['update'])){
			
			$result1 = mysql_query("UPDATE student_data SET firstname='".$_POST['firstname']."', lastname='".$_POST['lastname']."', email='".$_POST['email']."', dep_id='".$_POST['dep']."', cyear='".$_POST['cyear']."', sem='".$_POST['sem']."', contact='".$_POST['contact']."', gender='".$_POST['gender']."', modify_date='".date('Y-m-d')."' where id='".$id."'");
			if($result1){
				$_SESSION['pass'] = "Student Profile Updated";	
			}
			else
			{
				$_SESSION['pass']="MySQl Query Error!!!";
			}
		}
		
?>
<!DOCTYPE html>
<!-- Template Name: Rapido - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.0 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Feedback - Edit Student </title>
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
		
		<!-- end: SLIDING BAR -->
			
     <?php require_once('header.php');?>
    <div id="wrapper" >
        <!-- Sidebar -->
        <br>
        <div class="container-fluid">
        <br>
        <?php require_once('sidebar.php');?>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                            <div class="col-sm-6 hidden-xs">
                                <div class="page-header">
                                <h1>Edit Student  Registration <!-- <small>overview & stats </small> --></h1>
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
                    <li class="active">Edit HOD Profile</li>
                </ol>
            </div>
        </div>
         <!-- end: BREADCRUMB -->
						<div class="row">
							<div class="col-md-12">
								<ol class="breadcrumb">
									<li>
										<a href="index.php">
											Dashboard
										</a>
									</li>
									<li class="active">
										Edit Student Profile
									</li>
								</ol>
							</div>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-md-12">
								<!-- start: FORM VALIDATION 1 PANEL -->
								<div class="panel panel-white">
									
									<div class="panel-body">
										<h2><i class="fa fa-pencil-square"></i> EDIT</h2>
										
										<form action="" role="form" id="form" method="post">
										<?php
											$result=mysql_query("select * from student_data where id='".$id."'");
											$row=mysql_fetch_array($result);
										?>
											<div class="row">
												<div class="col-md-12">
													<div class="errorHandler alert alert-danger no-display">
														<i class="fa fa-times-sign"></i> You have some form errors. Please check below.
													</div>
													<div class="successHandler alert alert-success no-display">
														<i class="fa fa-ok"></i> Your form validation is successful!
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">
															First Name <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Insert your First Name" class="form-control" id="firstname" name="firstname" maxlength="50" value="<?php echo $row['firstname'];?>" required="required">
													</div>
													<div class="form-group">
														<label class="control-label">
															Last Name <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Insert your Last Name" class="form-control" id="lastname" name="lastname" maxlength="50" value="<?php echo $row['lastname'];?>" required="required">
													</div>
													<div class="form-group">
														<label class="control-label">
															Email Address <span class="symbol required"></span>
														</label>
														<input type="email" placeholder="Insert Your Email Id" class="form-control" id="email" name="email" maxlength="50" value="<?php echo $row['email'];?>" required="required">
													</div>
													
												</div>
												<div class="col-md-6">
													<div class="form-group connected-group">
														<label class="control-label">
															Department Name <span class="symbol required"></span>
														</label>
														<div class="row">
															<div class="col-md-12">
																<select name="dep" id="dd" class="form-control" required="required" >
																	<option value="">Select Department</option>
                                                                    <?php 
																	$dep=$row['dep_id'];
																	 $result2 = mysql_query("SELECT * FROM department ");	
																	while($row1 = mysql_fetch_array($result2)){
																		if($row1['id']==$dep)
																		{
																			$sl='selected="selected"';
																		}
																		else
																		{
																			$sl='';
																		}
																	?>
                                                                    <option value="<?php echo $row1['id'];?>" <?php echo $sl;?>><?php echo $row1['name'];?></option>
                                                                    <?php }?>
																</select>
															</div>
													   </div>
													   <div class="form-group connected-group">
														<label class="control-label">
															Select Current Year  <span class="symbol required"></span>
														</label>
														<div class="row">
															<div class="col-md-12">
																<select name="cyear" id="cy" class="form-control" required="required" onChange="get_sem(this.value)">
																	<option value="">Select year</option>
                                                                    <option value="1" <?php if($row['cyear'] == 1) echo 'selected="selected"';?>>1st</option>
																	<option value="2" <?php if($row['cyear'] == 2) echo 'selected="selected"';?>>2nd</option>
																	<option value="3" <?php if($row['cyear'] == 3) echo 'selected="selected"';?>>3rd</option>
																</select>
															</div>
													   </div>
													</div>
													<div class="form-group connected-group">
														<label class="control-label">
															Select  Semester <span class="symbol required"></span>
														</label>
														<div class="row">
															<div class="col-md-12">
																<select name="sem" id="sem" class="form-control" required="required">
																	<option value="">Select Semester</option>
																	<?php 
																		if($row['cyear'] == 1){
																	?>
																	 <option value="1" <?php if($row['sem'] == 1) echo 'selected="selected"';?>>1</option>
																	<option value="2" <?php if($row['sem'] == 2) echo 'selected="selected"';?>>2</option>
																	<?php }else if($row['cyear'] == 2){?>
																	 <option value="1" <?php if($row['sem'] == 3) echo 'selected="selected"';?>>3</option>
																	<option value="2" <?php if($row['sem'] == 4) echo 'selected="selected"';?>>4</option>
																	<?php }else if($row['cyear'] == 3){?>
																	 <option value="1" <?php if($row['sem'] == 5) echo 'selected="selected"';?>>5</option>
																	<option value="2" <?php if($row['sem'] == 6) echo 'selected="selected"';?>>6</option>
																	<?php }?>
																</select>
															</div>
													   </div>
													</div>
													
													</div>
													<?php
														if($row['gender']=='M')
														{
															?>
															<div class="form-group">
																<label class="control-label">
																	Gender <span class="symbol required"></span>
																</label>
																<div>
																	<label class="radio-inline">
																		<input type="radio" class="grey" value="F" name="gender" id="gender_female">
																		Female
																	</label>
																	<label class="radio-inline">
																		<input type="radio" class="grey" value="M" name="gender"  id="gender_male" checked="checked">
																		Male
																	</label>
																</div>
															</div>
															<?php
														}
														else
														{
															?>
															<div class="form-group">
																<label class="control-label">
																	Gender <span class="symbol required"></span>
																</label>
																<div>
																	<label class="radio-inline">
																		<input type="radio" class="grey" value="F" name="gender" id="gender_female" checked="checked">
																		Female
																	</label>
																	<label class="radio-inline">
																		<input type="radio" class="grey" value="M" name="gender"  id="gender_male">
																		Male
																	</label>
																</div>
															</div>
															<?php
														}
													?>
													
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label">
																	Contact  <span class="symbol required"></span>
																</label>
																<input class="form-control" type="text" name="contact" id="contact" onKeyPress="return isNumberKey(event)" maxlength="12" value="<?php echo $row['contact'];?>" required="required">
															</div>
														</div>
													</div>
													<div class="form-group" style="color:#096;font-size:14px;">
														<?php 
															if(isset($_SESSION['pass'])){
																echo $_SESSION['pass'];
																unset($_SESSION['pass']);	
															}
														?>
														
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<div>
														<span class="symbol required"></span>Required Fields
														<hr>
													</div>
												</div>
											</div>
											<div class="row">
												<!--<div class="col-md-8">
													<p>
														By clicking REGISTER, you are agreeing to the Policy and Terms &amp; Conditions.
													</p>
												</div>-->
												<div class="col-md-4">
													<button class="btn btn-yellow btn-block" type="submit" name="update">
														Submit <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
											</div>
										</form>
									</div>
								</div>
								<!-- end: FORM VALIDATION 1 PANEL -->
							</div>
						</div>
						
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
		<script src="assets/plugins/ckeditor/ckeditor.js"></script>
		<script src="assets/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="assets/js/form-validation.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE JAVASCRIPTS  -->
		<script src="assets/js/main.js"></script>
		<!-- end: CORE JAVASCRIPTS  -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
				FormValidator.init();
			});
		function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : event.keyCode
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;
 	
          return true;
       	}
		</script>
	</body>
	<!-- end: BODY -->
</html>