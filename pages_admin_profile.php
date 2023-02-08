<?php 
		require_once('include/config.php');
		require_once('include/function.php');
		$row = mysql_fetch_assoc(mysql_query("SELECT * FROM admin_data"));
		
		 if(isset($_POST['update'])){
	  		$sql = "UPDATE admin_data SET Name='".$_POST['admin']."',email='".$_POST['email']."',contact='".$_POST['contact']."',username='".$_POST['username']."'";
			$result = mysql_query($sql);
			 if($result)
		     {
		  	$_SESSION['query']="<span style='color:#0f0;font-size:16px;'>Admin Data Update Successfully</span>";
		      }
		     else
		    {	
		  	$_SESSION['query']="<span style='color:#f00;font-size:16px;'>MySQL Query Error!</span>";
		    }
			
	  }
	  
	    if(isset($_POST['changepass'])){
	  		$sql = "UPDATE admin_data SET password='".md5($_POST['pass'])."'";
			$result = mysql_query($sql);
			 if($result)
		     {
		  	$_SESSION['pass']="<span style='color:#0f0;font-size:16px;'>Password Update Successfully</span>";
		      }
		     else
		    {	
		  	$_SESSION['pass']="<span style='color:#f00;font-size:16px;'>MySQL Query Error!</span>";
		    }
			
	  }
?>		
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Feedback - User profile</title>
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
                                <h1>Admin Profile <small>Admin Profile Page </small> </h1>
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
                    <li class="active">Admin Profile Page</li>
                </ol>
            </div>
        </div>
         <!-- end: BREADCRUMB -->
					<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-sm-12">
								<div class="tabbable">
									<ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
										<li class="active">
											<a data-toggle="tab" href="#panel_overview">
												Overview
											</a>
										</li>
										<li>
											<a data-toggle="tab" href="#panel_edit_account">
												Edit Account
											</a>
										</li>
										
									</ul>
									<div class="tab-content">
										<div id="panel_overview" class="tab-pane fade in active">
											<div class="row">
												<div class="col-sm-5 col-md-4">
													<div class="user-left">
														<div class="center">
															<h4><?php echo $row['Name'];?></h4>
															<div class="fileupload fileupload-new" data-provides="fileupload">
																<div class="user-image">
																	<div class="fileupload-new thumbnail"><img src="assets/images/anonymous.jpg" alt="">
																	</div>
																	
																</div>
															</div>
															
															
															<hr>
														</div>
														<table class="table table-condensed table-hover">
															<thead>
																<tr>
																	<th colspan="3">Admin  Information</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>User Name:</td>
																	<td>
                                                                    	<?php echo $row['username'];?>
																	</td>
																</tr>
																<tr>
																	<td>Email:</td>
																	<td>
                                                                      	<?php echo $row['email'];?>
																	</td>
																</tr>
																<tr>
																	<td>Conatct:</td>
																	<td>
                                                                    	<?php echo $row['contact'];?>	
                                                                    </td>
</tr>															</tbody>
														</table>
														
														
													</div>
												</div>
												<div class="col-sm-7 col-md-8">
												</div>
											</div>
										</div>
										<div id="panel_edit_account" class="tab-pane fade">
										
												<div class="row">
													<div class="col-md-12">
														<h3>Account Info</h3>
														<hr>
													</div>
                                                    	<form action="" role="form" id="form" method="post" onSubmit="return validuser()">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label">
																Full Name
															</label>
															<input type="text" value="<?php echo $row['Name'];?>" class="form-control" id="firstname" name="admin" required maxlength="50">
														</div>
														<div class="form-group">
															<label class="control-label">
																User Name
															</label>
															<input type="text" value="<?php echo $row['username'];?>" class="form-control" id="username" name="username" required maxlength="50">
														</div>
                                                         <div style="margin-bottom:10px">
									   							<div class="controls" id="error6" style="color:#FF0000;font-size:14px;">
                                    						</div>
														</div>
														<div class="form-group">
															<label class="control-label">
																Email Address
															</label>
															<input type="email" value="<?php echo $row['email'];?>" class="form-control" id="email" name="email" required maxlength="50">
														</div>
														<div class="form-group">
															<label class="control-label">
																Phone
															</label>
															<input type="text" value="<?php echo $row['contact'];?>" class="form-control" id="phone" name="contact" required maxlength="12" onKeyPress="return isNumberKey(event)">
														</div>
														
                                             <div style="margin-bottom:10px">      
                                                         <?php
									   	if(isset($_SESSION['query']))
										{
											echo $_SESSION['query'];
											unset($_SESSION['query']);
										}
									   ?>
                                       </div>
                                                        <div class="form-group">
														<button class="btn btn-green btn-block" type="submit" name="update">
															Update <i class="fa fa-arrow-circle-right"></i>
														</button>
													</div>
													</div>
                                                    </form>
                                                   <form class="form-horizontal" action="" method="post" onSubmit="return validpass()" name="chnagepass">
													<div class="col-md-6">
                                                    	
										                <div class="form-group">
															<label class="control-label">
																Password
															</label>
															<input type="password" placeholder="password" class="form-control" name="pass" id="password" required>
														</div>
                                                        <div style="margin-bottom:10px">
												<div class="controls" id="error4" style="color:#FF0000;font-size:14px;">
												</div>
											</div>
														<div class="form-group">
															<label class="control-label">
																Confirm Password
															</label>
															<input type="password"  placeholder="password" class="form-control" id="conpass" name="conpass" required>
														</div>
                                                        <div style="margin-bottom:10px">
												   <div class="controls" id="error5" style="color:#FF0000;font-size:14px;">
												</div>
											</div>
                                                         <div style="margin-bottom:10px">      
                                                            <?php
									   	if(isset($_SESSION['pass']))
										{
											echo $_SESSION['pass'];
											unset($_SESSION['pass']);
										}
									   ?>
                                       </div>
                                                        <div class="form-group">
														<button class="btn btn-green btn-block" type="submit" name="changepass">
															Change Password
														</button>
													</div>
                                                   
                                                    </div>
                                                   </form> 
												</div>
											
										</div>
                                      
                                          
									</div>
								</div>
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
			<!-- start: SUBVIEW SAMPLE CONTENTS -->
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
		<script src="assets/plugins/jquery.pulsate/jquery.pulsate.min.js"></script>
		<script src="assets/js/pages-user-profile.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CORE JAVASCRIPTS  -->
		<script src="assets/js/main.js"></script>
		<!-- end: CORE JAVASCRIPTS  -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				SVExamples.init();
				PagesUserProfile.init();
			});
			
			 function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : event.keyCode
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;
 	
          return true;
       	}
		
		function validuser()
		{
			var username=$('#username').val();
		    var i=0;
			if((username.length<5) || (username.length>20))
			{
				i++;
				$('#error6').html('Username should be greater than 5 and less than 20');
			}
			if(i!=0)
			{
				return false;
			}
			else
			{
				return true;
			}
			
		}
		
		function validpass()
		{
			var password=$('#pass').val();
			var confirm_password=$('#conpass').val();
			var i=0;
			if(password.length <= 5 ){
			    $('#error4').html('Password length should be grater than 5 charecters.');
				i++;
			}else{
			if(password!=confirm_password)
			{
				i++;
				$('#error4').html('Password Not Match.');
				$('#error5').html('Password Not Match.');
			}
		}
		if(i!=0)
			{
				return false;
			}
			else
			{
				return true;
			}
	}
		</script>
	</body>
	<!-- end: BODY -->
</html>