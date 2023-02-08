<?php 
		require_once('include/config.php');
		require_once('include/function.php');
	    $id = $_GET['id'];
		$row1 = mysql_fetch_assoc(mysql_query("SELECT * FROM stuff_data WHERE id='$id'"));
		if(isset($_POST['submit'])){
			$result = mysql_query("INSERT INTO hod_comment SET 	staff_id='$id',dep_id='".$row1['dep_id']."',comment='".$_POST['comment']."'") ;
			if($result){
				header("location:staff_feedback_single.php?id=$id");
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
		<title>Feedback - Staff profile</title>
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
		<!-- start: SLIDING BAR (SB) -->
		
		<!-- end: SLIDING BAR -->
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
                                <h1>User Profile </h1>
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
                    <li class="active">User profile</li>
                </ol>
            </div>
        </div>
         <!-- end: BREADCRUMB -->
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
                                    </ul>
									<div class="tab-content">
										<div id="panel_overview" class="tab-pane fade in active">
											<div class="row">
												<div class="col-sm-5 col-md-4">
													<div class="user-left">
														<div class="center">
															<h4>
															<?php 
															
															echo $row1['firstname']." ".$row1['lastname'];
																													?>
															</h4>
															<hr>
														</div>
														<table class="table table-condensed table-hover">
															<thead>
																<tr>
																	<th colspan="3">User  Information</th>
																</tr>
															</thead>
															<tbody>
															<tr>
															<td>Department:</td>
															<td>
                                                            <?php echo branch($row1['dep_id']);?>
															</td>
															</tr>
															<tr>
															<td>Semesters:</td>
															<td>
                                                            <?php 
															$result = mysql_query("SELECT semster FROM staff_semester WHERE staff_id='".$row1['id']."'");
															$semster = "";
															while($row2 = mysql_fetch_assoc($result)){
															$semster .= semester($row2['semster']).", " ;
															}
															$semster = substr($semster,0,-2);
															echo $semster;
																		?>
															</td>
															</tr>
															<tr>
															<td>Subject:</td>
															<td>
                                                            <?php 
															$sub = explode(',',$row1['subject_id']);
															$subjects = "";
															foreach($sub as $subject){
															$subjects .=  subject($subject).", ";
															}
															$subjects = substr($subjects,0,-4);
															echo $subjects;?>
															</td>
															</tr>
															<tr>
															<td>Gender:</td>
															<td>
                                                            <?php 
															if($row1['gender'] == 'M'){
															echo 'Male';
															}else{
															echo 'Female';
															}?>
															</td>
															</tr>
															<tr>
															<td>Email:</td>
															<td>
                                                            <?php echo $row1['email'];?>
															</td>
															</tr>
															<tr>
															<td>Conatct:</td>
															<td>
                                                            <?php echo $row1['contact'];?>	
                                                            </td>
                                                            </tr>
														 </tbody>
														</table>
														
														
													</div>
												</div>
												<div class="col-sm-7 col-md-8">
												    <div class="panel-group accordion" id="accordion">
										    <?php 
											   $result = mysql_query("SELECT semster FROM staff_semester WHERE staff_id='".$id."'");
												
												while($row1 = mysql_fetch_assoc($result)){
		
													$sum = mysql_fetch_array(mysql_query("SELECT count(id),sum(f1),sum(f2),sum(f3),sum(f4),sum(f5) FROM sem".$row1['semster']." WHERE staffid='".$id."' and status='1'"));    
													              if($sum[0] != 0){
												?>
																			
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">
													<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
														<i class="icon-arrow"></i> SEM <?php echo semester($row1['semster']);?>
													</a></h5>
												</div>
												<div id="collapseOne" class="panel-collapse collapse in">
													<div class="panel-body">
													<?php $result3 = mysql_query("SELECT * FROM feedbackarea");
													            $i=1;
																while($area = mysql_fetch_array($result3)){  
																$total = $sum[0] * 10;
																$avg = ($sum[$i]/$total)*100;
															 ?>
														     <div><span style="margin-right:20px"><?php echo $area['name'];?></span><progress value="<?php echo $avg;?>" max="100"></progress><span style="margin-left:20px"><?php echo $avg;?></span><div>
														 
														 <?php $i++;}?>
													</div>
												</div>
											</div>
											
											
											<?php  
											}
											
											}
																			
											?>
										</div>
									</div>
								</div>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
							<?php
								$result = mysql_query("SELECT * FROM hod_comment WHERE id='$id'");
								if($_SESSION['role'] == 2){
								if(!mysql_num_rows($result)){
							?>
							              <div style="margin-top:50px">
													<form action="" method="post">
														<table>
															<tbody>
															<tr>
															 	<td width="100" valign="top">Comment</td><td colspan="2"><textarea name="comment" cols="50" rows="3" required></textarea></td>
															 </tr>
															 <tr>
															 	<td></td><td colspan="2" height="50"><input type="submit" value="Submit" name="submit"></td>
															 </tr>
														    </tbody>
													    </table>
													</form>
													</div>
							<?php }else{
									$row =  mysql_fetch_assoc($result);
								?>
                            		<div style="margin-top:50px">
                                        <h3>Comment:</h3>
                                    	<?php 
											echo $row['comment'];
										?>
                                    
                            		</div>
                            <?php }
								}else{
									   if(!mysql_num_rows($result)){
										   
									   }else{
										$row =  mysql_fetch_assoc($result);
								?>
                                <div style="margin-top:50px">
                                        <h3>Comment By HOD:</h3>
                                    	<?php 
										    
											echo $row['comment'];
										?>
                                    
                            		</div>
                                	
								<?php }}?>						
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