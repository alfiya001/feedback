<?php 
		require_once('include/config.php');
		require_once('include/function.php');
		if(isset($_POST['register'])){
			if ((($_POST['password']) != $_POST['password_again']))
			{
				$_SESSION['confirm_pass'] = "Confirm Password is not Match with Password!!!";	
			}
			else
			{
		     if(count($_POST['sem'])){
			 	if(count($_POST['sub'])){
			$result = mysql_query("INSERT INTO stuff_data SET firstname='".$_POST['firstname']."', lastname='".$_POST['lastname']."', email='".$_POST['email']."', password='".md5($_POST['password'])."', con_pass='".$_POST['password_again']."', dep_id='".$_POST['dep']."',subject_id='".implode(',',$_REQUEST['sub']).','."', contact='".$_POST['contact']."', gender='".$_POST['gender']."', create_date='".date('Y-m-d')."' ");
			if($result){
			    $id = mysql_insert_id();
				for($i=0;$i<count($_POST['sem']);$i++){
					mysql_query("INSERT INTO staff_semester SET staff_id='$id',semster='".$_POST['sem'][$i]."'");
				}
				$_SESSION['pass'] = "Registration Succsessfully Done";	
			}
			else
			{
				$_SESSION['error']="MySql Query Error!!!";
			}
			}else{
				$_SESSION['error']="Please Select Subjects";
			}
			}else{
				$_SESSION['error']="Please Select Semester";
			}
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
		<title>Feedback - Staff Registration</title>
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

		<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		
     <?php require_once('header.php');?>
   	 <div id="wrapper" >
        <!-- Sidebar -->
       
        <div class="container-fluid">
        
        <?php require_once('sidebar.php');?>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                            <div class="col-sm-6 hidden-xs">
                                <div class="page-header">
                                <h1>Staff  Registration <!-- <small>overview & stats </small> --></h1>
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
                    <li class="active">Registration</li>
                </ol>
            </div>
        </div>
         <!-- end: BREADCRUMB -->
			<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
				<div class="main-content">
					
					<!-- end: SPANEL CONFIGURATION MODAL FORM -->
					<div class="container">
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-md-12">
								<!-- start: FORM VALIDATION 1 PANEL -->
								<div class="panel panel-white">
									
									<div class="panel-body">
										<h2><i class="fa fa-pencil-square"></i> REGISTER</h2>
										
										<form action="" role="form" id="form" method="post">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">
															First Name <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Insert your First Name" class="form-control" id="firstname" name="firstname" maxlength="50" required="required">
													</div>
													<div class="form-group">
														<label class="control-label">
															Last Name <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Insert your Last Name" class="form-control" id="lastname" name="lastname" maxlength="50" required="required">
													</div>
													<div class="form-group">
														<label class="control-label">
															Email Address <span class="symbol required"></span>
														</label>
														<input type="email" placeholder="Insert Your Email Id" class="form-control" id="email" name="email" maxlength="50" required="required">
													</div>
													<div class="form-group">
														<label class="control-label">
															Password <span class="symbol required"></span>
														</label>
														<input type="password" class="form-control" name="password" id="password" maxlength="50" required="required">
													</div>
													<div class="form-group">
														<label class="control-label">
															Confirm Password <span class="symbol required"></span>
														</label>
														<input type="password" class="form-control" id="password_again" name="password_again" maxlength="50" required="required">
													</div>
													<div class="form-group" style="color:#096;font-size:14px;">
														<?php 
															if(isset($_SESSION['confirm_pass'])){
																echo $_SESSION['confirm_pass'];
																unset($_SESSION['confirm_pass']);	
															}
														?>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label">
																	Contact  <span class="symbol required"></span>
																</label>
																<input class="form-control" type="text" name="contact" id="contact" onKeyPress="return isNumberKey(event)" maxlength="12" required="required">
															</div>
														</div>
													</div>
													<div class="form-group connected-group">
														<label class="control-label">
															Select Semesters<span class="symbol required"></span>
														</label>
														<div class="row">
															<div class="col-md-12">
																<span style="margin-right:8px;">
																	<input type="checkbox" value="1" name="sem[]" style="margin-right:5px;"><label>I</label>
																</span>
																<span style="margin-right:8px;">
																	<input type="checkbox" value="2" name="sem[]" style="margin-right:5px;"><label>II</label>
																</span>
																<span style="margin-right:8px;">
																	<input type="checkbox" value="3" name="sem[]" style="margin-right:5px;"><label>III</label>
																</span>
																<span style="margin-right:8px;">
																	<input type="checkbox" value="4" name="sem[]" style="margin-right:5px;"><label>IV</label>
																</span>
																<span style="margin-right:8px;">
																	<input type="checkbox" value="5" name="sem[]" style="margin-right:5px;"><label>V</label>
																</span>
																<span style="margin-right:8px;">
																	<input type="checkbox" value="6" name="sem[]" style="margin-right:5px;"><label>VI</label>
																</span>
											
										
															</div>
													   </div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group connected-group">
														<label class="control-label">
															Department Name <span class="symbol required"></span>
														</label>
														<div class="row">
															<div class="col-md-12">
																<select name="dep" id="dd" class="form-control" required="required">
																	<option value="">Select Department</option>
                                                                    <?php 
																	 $result = mysql_query("SELECT * FROM department");	
																	while($row = mysql_fetch_assoc($result)){
																	?>
                                                                    <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                                                    <?php }?>
																</select>
															</div>
													   </div>
													</div>
													<div class="form-group">
														<label class="control-label">
															Gender <span class="symbol required"></span>
														</label>
														<div>
															<label class="radio-inline">
																<input type="radio" class="grey" value="F" name="gender" id="gender_female" >
																Female
															</label>
															<label class="radio-inline">
																<input type="radio" class="grey" value="M" name="gender"  id="gender_male" checked="checked">
																Male
															</label>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label">
																	Select Subject  <span class="symbol required"></span>
																</label>
																<div class="select_subject">
																	<ul>
																		<?php
																			$sel_sub=mysql_query("select * from subject");
																			while($sub_row=mysql_fetch_array($sel_sub))
																			{
																				?>
																					<li><input type="checkbox" name="sub[]" value="<?php echo $sub_row['id'];?>">&nbsp;&nbsp;<?php echo $sub_row['sub_name'];?></li>
																				<?php
																			}
																		?>
																	</ul>
																</div>
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
											
													<div class="form-group" style="color:#096;font-size:14px;">
														<?php 
															if(isset($_SESSION['pass'])){
																echo $_SESSION['pass'];
																unset($_SESSION['pass']);	
															}
															if(isset($_SESSION['error'])){
																echo '<span style="color:#f00;">'.$_SESSION['error'].'</span>';
																unset($_SESSION['error']);	
															}
														?>
														
													</div>
												</div>
											</div>
											<div class="col-md-4">
													<button class="btn btn-yellow btn-block" type="submit" name="register">
														Register <i class="fa fa-arrow-circle-right"></i>
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
	</div></div>
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