<?php
	require_once('include/config.php');
	if(isset($_SESSION['admin'])){
	   unset($_SESSION['admin']);
	   session_destroy();
	   header("Location: login.php");
	  } 
	 else{
	 	unset($_SESSION['log']);
		unset($_SESSION['role']);
		session_destroy();
		header("Location: users_login.php");
	 }  
	
	

?>