<?php 
		require_once('include/config.php');
		require_once('include/function.php');
		if(isset($_SESSION['admin'])){
			 header('location:index.php');
		 }
	if(isset($_POST['login'])){
		$username = cleanstr($_POST['username']);
		$password = cleanstr($_POST['password']);


		

		if(!empty($username) && !empty($password)){
		$sql = " SELECT * FROM admin_data WHERE username = '".$username."' AND password = '".md5($password)."' " ;
		$SuperQuery = mysql_query($sql);
		$no = mysql_num_rows($SuperQuery);
		
		if(!$no){
			 $_SESSION['log_error'] = "You Enterd Wrong Credential";
			}else{
			       $row = mysql_fetch_array($SuperQuery);
				   $_SESSION['admin'] = $row['id'];
				    $_SESSION['log'] = rand();
			       header('location: index.php');
				/*if(isset($_POST['remember'])){
									setcookie("cookname", $username, time()+60*60*24*10, "/");
									setcookie("cookpass", $password, time()+60*60*24*10, "/");
							}
							if(isset( $_SESSION['oldURL'])){
								   header('location:'.$_SESSION['oldURL']);
								}else{*/
								 
								/*}*/
				}
	}else{
	    $_SESSION['log_error'] = "Please Fill Both User name And Password";
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
		<title>Login - admin</title>
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
					<!--<img src="assets/images/logo.png">--> ADMIN LOGIN
				</div>
				<!-- start: LOGIN BOX -->
				<div class="box-login">
                   
					<h3>Sign in to your account</h3>
					<form class="form-login" action="" method="post">
						
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
								<span class="input-icon">
									<input type="text" class="form-control" name="username" placeholder="Username" maxlength="20">
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