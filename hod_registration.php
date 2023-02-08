<?php 
		require_once('include/config.php');
		require_once('include/function.php');
		if(isset($_POST['register'])){
			if ((($_POST['password']) != $_POST['confirm_password']))
			{
				$_SESSION['confirm_pass'] = "Confirm Password is not Match with Password!!!";	
			}
			else
			{
			$result = mysql_query("INSERT INTO hod_data SET firstname='".$_POST['firstname']."', lastname='".$_POST['lastname']."', email='".$_POST['email']."', password='".md5($_POST['password'])."', conpass='".$_POST['confirm_password']."', dep_id='".$_POST['dep']."', contact='".$_POST['contact']."', gender='".$_POST['gender']."', date_create='".date('Y-m-d')."' ");
			if($result){
				$_SESSION['pass'] = "Hod is Registerd Succsessfully";	
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
		<title>Feedback - Hod Registration</title>
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

		<style type="text/css">
			:root {
  --info-color: #0099CC;
}

.btn-toggle-pass {
  border: none;
  position: absolute;
  top: 11px;
  background: transparent;
  right: 0;
}

.btn-toggle-pass.active {
  color: var(--info-color);
}

button{
	background: white;
	border: ipx solid silver;
	padding: 2px;
	border: top
}
		</style>
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
                                <h1>Hod  Registration <!-- <small>overview & stats </small> --></h1>
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
                    <li class="active">Registration</li>
                </ol>
            </div>
        </div>
         <!-- end: BREADCRUMB -->
        </div>
			<!-- end: PAGESLIDE LEFT -->
			<!-- start: MAIN CONTAINER -->
			<div class="main-container inner">
				<!-- start: PAGE -->
					
					<!-- end: SPANEL CONFIGURATION MODAL FORM -->
					<div class="container">
						<!-- start: PAGE HEADER -->
						
						<!-- end: PAGE HEADER -->
						
						<!-- start: PAGE CONTENT -->
						<div class="row">
							<div class="col-md-12">
								<!-- start: FORM VALIDATION 1 PANEL -->
								<div class="panel panel-white">
									
									<div class="panel-body">
										<h2><i class="fa fa-pencil-square"></i> REGISTER</h2>
										<br><br>
										<form action="" role="form" id="form" method="post">
											<div class="row">
												<!-- <div class="col-md-12">
													<div class="errorHandler alert alert-danger no-display">
														<i class="fa fa-times-sign"></i> You have some form errors. Please check below.
													</div>
													<div class="successHandler alert alert-success no-display">
														<i class="fa fa-ok"></i> Your form validation is successful!
													</div>
												</div> -->
												<div class="col-md-6">
													<div class="form-group">
														<label class="control-label">
															First Name <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="First Name" class="form-control" id="firstname" name="firstname" maxlength="50" required="true">
													</div>
													<div class="form-group">
														<label class="control-label">
															Last Name <span class="symbol required"></span>
														</label>
														<input type="text" placeholder="Last Name" class="form-control" id="lastname" name="lastname" maxlength="50" required="true">
													</div>
													<div class="form-group">
														<label class="control-label">
															Email Address <span class="symbol required"></span>
														</label>
														<input type="email" placeholder="Insert Your Email Id" class="form-control" id="email" name="email" maxlength="50"title="Must contain at least 6 or more characters" required="true">
													</div>
													<div class="form-group">
														<label class="control-label">
															Password <span class="symbol required"></span>
														</label>
														<input type="password" class="form-control" name="password" id="password" maxlength="50" required="true"  type = "password">
														<!-- <button onclick="showpassword();">showpassword</button>
														 --><!-- x -->
													</div>
													<div class="form-group">
														<label class="control-label">
															Confirm Password <span class="symbol required"></span>
														</label>
														<input type="password" class="form-control" id="confirm_password" name="confirm_password" maxlength="50" required="true" onkeypress="return checkPass()" >
													</div>
													<div class="form-group" style="color:#096;font-size:14px;">
														<?php 
															if(isset($_SESSION['confirm_pass'])){
																echo $_SESSION['confirm_pass'];
																unset($_SESSION['confirm_pass']);	
															}
														?>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group connected-group">
														<label class="control-label">
															Department Name <span class="symbol required"></span>
														</label>
														<div class="row">
															<div class="col-md-12">
																<select name="dep" id="dd" class="form-control" >
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
																<input type="radio" class="grey" value="F" name="gender" id="gender_female">
																Female
															</label>
															<label class="radio-inline">
																<input type="radio" class="grey" value="M" name="gender"  id="gender_male">
																Male
															</label>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label">
																	Contact  <span class="symbol required"></span>
																</label>
																<input class="form-control" type="text" name="contact" id="contact" onKeyPress="return isNumberKey(event)" maxlength="12" minlength="10" required="true">
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
												
												<div class="col-md-4">
													<button class="btn btn-yellow btn-block" type="submit" name="register">
														Register <i class="fa fa-arrow-circle-right"></i>
													</button>
												</div>
									</div>

								</div>
								<!-- end: FORM VALIDATION 1 PANEL -->
							</div>
						</div>
					</div>
					<div class="subviews">
						<div class="subviews-container"></div>
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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

		function checkPass(){
         var pass  = document.getElementById("password").value;
         var rpass  = document.getElementById("confirm_password").value;
        if(pass != rpass){
            document.getElementById("submit").disabled = true;
            $('.missmatch').html("Entered Password is not matching!! Try Again");
            return false;
        }else{
            $('.missmatch').html("");
            document.getElementById("submit").disabled = false;
            return true;
        }
}
(($) => {

  class Toggle {

    constructor(element, options) {

      this.defaults = {
        icon: 'fa-eye'
      };

      this.options = this.assignOptions(options);

      this.$element = element;
      this.$button = $(`<button class="btn-toggle-pass"><i class="fa ${this.options.icon}"></i></button>`);

      this.init();
    };

    assignOptions(options) {

      return $.extend({}, this.defaults, options);
    }

    init() {

      this._appendButton();
      this.bindEvents();
    }

    _appendButton() {
      this.$element.after(this.$button);
    }

    bindEvents() {

      this.$button.on('click touchstart', this.handleClick.bind(this));
    }

    handleClick() {

      let type = this.$element.attr('type');

      type = type === 'password' ? 'text' : 'password';

      this.$element.attr('type', type);
      this.$button.toggleClass('active');
    }
  }

  $.fn.togglePassword = function (options) {
    return this.each(function () {
      new Toggle($(this), options);
    });
  }

})(jQuery);

$(document).ready(function() {
  $('#password').togglePassword();
  $('#password-custom').togglePassword({
  	'icon': 'fa-lock'
  });
})
	/*function Toggle() { 
            var temp = document.getElementById("password"); 
            if (temp.type === "pass") { 
                temp.type = "text"; 
            } 
            else { 
                temp.type = "pass"; 
            } 
        } */

      /*  $("#password").password('toggle');
*/
function showpassword()
{
	var pwd = document.getElementById('password');

	if (pw.type = "text")
	{
		pw.type = "password";
	}
	else
	{
		pw.type = "text";
	}
}

		</script>
	</body>
	<!-- end: BODY -->
</html>