<?php 
		require_once('include/config.php');
		require_once('include/function.php');
		if(isset($_SESSION['log'])){
			 header('location:home.php');
		 }
	if(isset($_POST['login'])){
	     $role = $_POST['role'];
		 $email = cleanstr($_POST['email']);
		 $password = cleanstr($_POST['password']);
		if(!empty($email) && !empty($password) && !empty($role)){
		if($role == 1){
			$tablename = "principle_data";
			$password = $password;
		}elseif($role == 2){
		    $tablename = "hod_data";
			$password = md5($password);
		}elseif($role == 3){
		    $tablename = "stuff_data";
			$password = md5($password);
		}elseif($role == 4){
            $tablename = "student_data";
			$password = md5($password);		
		}
		$sql = " SELECT * FROM $tablename WHERE email = '".$email."' AND password = '".$password."' " ;
		$SuperQuery = mysql_query($sql);
		$no = mysql_num_rows($SuperQuery);
		if(!$no){
			 $_SESSION['log_error'] = "You Enterd Wrong Credential";
			}else{
			       $row = mysql_fetch_array($SuperQuery);
				   $_SESSION['id'] = $row['id'];
				   $_SESSION['role'] = $role;
				   $_SESSION['log'] = rand();
				   $_SESSION['table_name'] = $tablename;
				   if($role == 1){
					 header('location: home.php');
				}elseif($role == 2){
					 header('location: home.php');
				}elseif($role == 3){
					 header('location: home.php');
				}elseif($role == 4){
					 header('location: home.php');	
				}	 
		}
	}else{
	    $_SESSION['log_error'] = "Please Fill Role, Email And Password";
	}
	
	}
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Login - user</title>
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
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/plugins/animate.css/animate.min.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/styles-responsive.css">
		<link rel="stylesheet" href="assets/plugins/iCheck/skins/all.css">

		<link rel="stylesheet" type="text/css" href="css/sidebar.css">
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo" style="font-size:24px;font-weight:600;">
					<!--<img src="assets/images/logo.png">--> USER LOGIN
				</div>
				<!-- start: LOGIN BOX -->
				<div class="box-login">
                   
					<h3>Sign in to your account</h3>
					<form class="form-login" action="" method="post">
						<!-- <div class="errorHandler alert alert-danger no-display">
							<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                          
						</div> -->
                        <div class="errorHandler" style="color:#F00;margin-bottom:10px;font-size:14px;">
                        		<?php 
										if(isset($_SESSION['log_error'])){
										echo $_SESSION['log_error']; 
										unset($_SESSION['log_error']);
										}
								?>
                        </div>
						<fieldset>
						    <div class="form-group">
											<label for="form-field-select-1">
												Role
											</label>
											<select id="form-field-select-1" class="form-control" name="role">
												<option value="">Select Role </option>
												<option value="1">Priciple</option>
												<option value="2">Hod</option>
												<option value="3">Staff</option>
												<option value="4">Student</option>
											</select>
							</div>			
							<div class="form-group">
								<span class="input-icon">
									<input type="text" class="form-control" name="email" placeholder="Email" maxlength="50">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input type="password" class="form-control password" name="password" placeholder="Password" maxlength="20">
									<i class="fa fa-lock"></i>
									 </span>
							</div>
							<div class="form-actions">
								 <button type="submit" class="btn btn-green pull-right" name="login">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
					<div class="copyright">
						<!-- 2015 &copy; Design and Developed --> <!-- Wasim Khan --> 
					</div>
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: LOGIN BOX -->
				<!-- start: FORGOT BOX -->
				<div class="box-forgot">
					<h3>Forget Password?</h3>
					<p>
						Enter your e-mail address below to reset your password.
					</p>
					<form class="form-forgot">
						<!-- <div class="errorHandler alert alert-danger no-display">
							<i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
						</div> -->
						<fieldset>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" placeholder="Email">
									<i class="fa fa-envelope"></i> </span>
							</div>
							<div class="form-actions">
								<a class="btn btn-light-grey go-back">
									<i class="fa fa-chevron-circle-left"></i> Log-In
								</a>
								<button type="submit" class="btn btn-green pull-right">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>
					<!-- start: COPYRIGHT -->
					<!-- <div class="copyright">
						2014 &copy; Rapido by cliptheme.
					</div> -->
					<!-- end: COPYRIGHT -->
				</div>
				<!-- end: FORGOT BOX -->
				</div>
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
		<script src="assets/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="assets/plugins/jquery.transit/jquery.transit.js"></script>
		<script src="assets/plugins/TouchSwipe/jquery.touchSwipe.min.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
		<script src="assets/js/login.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>