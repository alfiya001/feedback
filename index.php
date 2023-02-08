<?php 
        require_once('include/config.php');
        require_once('include/function.php');
        if(!isset($_SESSION['admin'])){
             header('location:login.php');
         }
         $sql= "Select id,status FROM init_feedback ORDER BY id DESC LIMIT 1";
         $num = mysql_fetch_assoc(mysql_query($sql));
         if($num['status']){
             $string = 'Feedback Stop';
         }else{
             $string = 'Feedback Start';
         }
         if(isset($_GET['val'])){
                if($num['status']){
                    mysql_query("UPDATE init_feedback SET status='0' WHERE id='".$num['id']."'");   
                }else{
                    mysql_query("UPDATE init_feedback SET status='1' WHERE id='".$num['id']."'");
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
        <title>Index - Feedback</title>
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

        

   
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <!-- SIDEBARE CSS -->
    <link rel="stylesheet" type="text/css" href="css/sidebar.css">
     </style>
    </head>
    <!-- end: HEAD -->
    <!-- start: BODY -->
    <body>

     <?php require_once('header.php');?>
        <div id="wrapper" >
        <!-- Sidebar -->
        <br>
        <br>
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
    <!-- start: PAGE CONTENT -->
    <div class="row">
        <div class="col-md-6 col-lg-3 col-sm-6">
            <div class="panel panel-default panel-white core-box">
                <div class="panel-body no-padding">
                    <div class="partition-green padding-20 text-center core-icon">
                    <i class="fa fa-bar-chart-o fa-2x icon-big"></i>
                    </div>
                    <div class="padding-20 core-content">
                    <h3 class="title block no-margin">Create Feedback</h3>
                        <span class="subtitle"></span>
                    </div>
                </div>
                <div class="panel-footer clearfix no-padding">
                    <div class=""></div>
                        <a href="include/startstop.php" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="Create New Feedback" onClick="return confirm('Are You Sure To Create New Feedback')"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-sm-6">
                <div class="panel panel-default panel-white core-box">
                                    
                    <div class="panel-body no-padding">
                        <div class="partition-blue padding-20 text-center core-icon">
                            <i class="fa fa-code fa-2x icon-big"></i>
                        </div>
                        <div class="padding-20 core-content">
                            <h3 class="title block no-margin"><?php echo $string;?></h3>
                            <span class="subtitle"></span>
                        </div>
                    </div>
                    <div class="panel-footer clearfix no-padding">
                        <a href="index.php?val=0" class="col-xs-4 padding-10 text-center text-white tooltips partition-red" data-toggle="tooltip" data-placement="top" title="Action On Feedback" id="strat_stop" onClick="return confirm('Are You Sure')"><i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: PAGE CONTENT-->
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
     <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


   
   
});
    </script>