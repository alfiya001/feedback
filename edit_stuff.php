<?php 
		require_once('include/config.php');
		require_once('include/function.php');
		$id=$_GET['id'];
		if(isset($_POST['register'])){
		
			$result = mysql_query("update stuff_data SET firstname='".$_POST['firstname']."', lastname='".$_POST['lastname']."', email='".$_POST['email']."', dep_id='".$_POST['dep']."',subject_id='".implode(',',$_REQUEST['sub']).','."', contact='".$_POST['contact']."', gender='".$_POST['gender']."', modify_date='".date('Y-m-d')."' where id='".$id."'");
			if($result){
			    mysql_query("DELETE FROM staff_semester WHERE staff_id='$id'");
				for($i=0;$i<count($_POST['sem']);$i++){
					mysql_query("INSERT INTO staff_semester SET staff_id='$id',semster='".$_POST['sem'][$i]."'");
				}
				$_SESSION['pass'] = "Registration Succsessfully Done";	
			}
			else
			{
				$_SESSION['pass']="MySql Query Error!!!";
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
		<title>Feedback - Stuff Registration</title>
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
                                <h1>Edit Staff Registration <!-- <small>overview & stats </small> --></h1>
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
                    <li class="active">Edit Staff Profile</li>
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
										<h2><i class="fa fa-pencil-square"></i> REGISTER</h2>
										
										<form action="" role="form" id="form" method="post">
										<?php 
											$res=mysql_query("select *  from stuff_data where id='".$id."'");
											$res_row=mysql_fetch_array($res);
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
														<input type="text" placeholder="Insert your First Name" class="form-control" id="firstname" name="firstname" maxlength="50"  value="<?php echo $res_row['firstname'];?>" required="required">
													</div>
													<div class="form-group">
														<label class="control-label">
															Last Name <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Insert your Last Name" class="form-control" id="lastname" name="lastname" maxlength="50" value="<?php echo $res_row['lastname'];?>" required="required">
													</div>
													<div class="form-group">
														<label class="control-label">
															Email Address <span class="symbol required"></span>
														</label>
														<input type="email" placeholder="Insert Your Email Id" class="form-control" id="email" name="email" maxlength="50" value="<?php echo $res_row['email'];?>" required="required">
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label">
																	Contact  <span class="symbol required"></span>
																</label>
																<input class="form-control" type="text" name="contact" id="contact" onKeyPress="return isNumberKey(event)" maxlength="12" value="<?php echo $res_row['contact'];?>" required="required">
															</div>
														</div>
													</div>
													<?php
														if($res_row['gender']=='M')
														{
															?>
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
													<div class="form-group connected-group">
														<label class="control-label">
															Select Semesters<span class="symbol required"></span>
														</label>
														<div class="row">
															<div class="col-md-12">
																<span style="margin-right:8px;">
																	<input type="checkbox" value="1" name="sem[]" style="margin-right:5px;" <?php 
																		if(checksem($id,'1')) echo 'checked';
																	?>><label>I</label>
																</span>
																<span style="margin-right:8px;">
																	<input type="checkbox" value="2" name="sem[]" style="margin-right:5px;" <?php 
																		if(checksem($id,'2')) echo 'checked';
																	?>><label>II</label>
																</span>
																<span style="margin-right:8px;">
																	<input type="checkbox" value="3" name="sem[]" style="margin-right:5px;" <?php 
																		if(checksem($id,'3')) echo 'checked';
																	?>><label>III</label>
																</span>
																<span style="margin-right:8px;">
																	<input type="checkbox" value="4" name="sem[]" style="margin-right:5px;" <?php 
																		if(checksem($id,'4')) echo 'checked';
																	?>><label>IV</label>
																</span>
																<span style="margin-right:8px;">
																	<input type="checkbox" value="5" name="sem[]" style="margin-right:5px;" <?php 
																		if(checksem($id,'5')) echo 'checked';
																	?>><label>V</label>
																</span>
																<span style="margin-right:8px;">
																	<input type="checkbox" value="6" name="sem[]" style="margin-right:5px;" <?php 
																		if(checksem($id,'6')) echo 'checked';
																	?>><label>VI</label>
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
																	<option value="" >Select Department</option>
                                                                    <?php 
																	 $result = mysql_query("SELECT * FROM department");	
																	while($row = mysql_fetch_assoc($result)){
																	if($res_row['dep_id']==$row['id'])
																	{
																		$sl='selected="selected"';
																	}
																	else
																	{
																		$sl='';
																	}
																	?>
                                                                    <option value="<?php echo $row['id'];?>" <?php echo $sl;?>><?php echo $row['name'];?></option>
                                                                    <?php }?>
																</select>
															</div>
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
																			$select=explode(',',$res_row['subject_id']);
																			$sel_sub=mysql_query("select * from subject");
																			while($sub_row=mysql_fetch_assoc($sel_sub))
																			{
																			$sel='';
																				if(in_array($sub_row['id'],$select))
																				{
																					$sel='checked="checked"';
																				}
																				
																				?>
																					<li><input type="checkbox" <?php echo $sel;?> name="sub[]" value="<?php echo $sub_row['id'];?>">&nbsp;&nbsp;<?php echo $sub_row['sub_name'];?></li>
																					
																				<?php
																				
																			}	
																		?>
																	</ul>
																</div>
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
						<?php 
							function checksem($id,$sid){
								 $result = mysql_query("SELECT * FROM staff_semester WHERE semster='$sid' AND staff_id='$id'");
								 $no = mysql_num_rows($result);
								if($no){
									return true;
								}else{
									return false;
								}
							}
						?>
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