<?php 
		require_once('include/config.php');
		require_once('include/function.php');
		if(!isset($_SESSION['log'])){
			 header('location:index1.php');
		 }
		 if(!$_SESSION['admin']){
		 $row = mysql_fetch_assoc(mysql_query("SELECT * FROM ".$_SESSION['table_name']." WHERE id='".$_SESSION['id']."'"));
		 if($_SESSION['role'] == 4){
		 	$_SESSION['sem'] = $row['sem'];
			 if($_SESSION['sem'] == 1){
		 	$_SESSION['semtable'] = 'sem1';
		 }elseif($_SESSION['sem'] == 2){
		 	$_SESSION['semtable'] = 'sem2';
		 }elseif($_SESSION['sem'] == 3){
		 	$_SESSION['semtable'] = 'sem3';
		 }elseif($_SESSION['sem'] == 4){
		    $_SESSION['semtable'] = 'sem4';
		 }elseif($_SESSION['sem'] == 5){
		 	$_SESSION['semtable'] = 'sem5';
		 }elseif($_SESSION['sem'] == 6){
		 	$_SESSION['semtable'] = 'sem6';
		  }
		 }
		}
		 
?>		
<header class="topbar navbar navbar-inverse navbar-fixed-top inner" style="background: #F39C12 ">
				<!-- start: TOPBAR CONTAINER -->
				<div class="container">
					<div class="navbar-header">
						<a class="sb-toggle-left hidden-md hidden-lg" href="#main-navbar">
							<i class="fa fa-bars"></i>
						</a>
						<!-- start: LOGO -->
						<a class="navbar-brand" href="index.php" style="color:#2E4053 ">
						FeedBack System
						</a>
						<!-- end: LOGO -->
					</div>
					<div class="topbar-tools">
						<!-- start: TOP NAVIGATION MENU -->
						<ul class="nav navbar-right">
							<!-- start: USER DROPDOWN -->
							<li class="dropdown current-user">
								<a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
									<img src="assets/images/anonymous.jpg" class="img-circle" alt="" width="30" height="30"> <span class="username hidden-xs"><?php 
															 if(!@$_SESSION['admin']){
															if($_SESSION['role'] == 1){
															echo $row['name'];
															}else{
															echo $row['firstname']." ".$row['lastname'];
															}
															}else{
															   echo 'Admin';
															}
															?></span> <i class="fa fa-caret-down "></i>
								</a>
								<ul class="dropdown-menu dropdown-dark">
								    <?php if(isset($_SESSION['role'])){?>
									<li>
										<a href="users_profile.php">
											My Profile
										</a>
									</li>
									<li>
										<a href="users_logout.php">
											Log Out
										</a>
									</li>
									<?php }else{
									?>
									<li>
										<a href="pages_admin_profile.php">
											My Profile
										</a>
									</li>
									<li>
										<a href="logout.php">
											Log Out
										</a>
									</li>
									<?php }?>
								</ul>
							</li>
							<!-- end: USER DROPDOWN -->
							
						</ul>
						<!-- end: TOP NAVIGATION MENU -->
					</div>
				</div>
				<!-- end: TOPBAR CONTAINER -->
			</header>