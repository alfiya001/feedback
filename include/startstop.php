<?php 
    require_once('config.php');
    mysql_query("UPDATE init_feedback SET status='0'");
	echo "INSERT INTO init_feedback SET status='1', date_start='".date('Y-m-d')."', date_end='".date('Y-m-d')."'";
	mysql_query("INSERT INTO init_feedback SET status='1', date_start='".date('Y-m-d')."', date_end='".date('Y-m-d')."'");
	for($i=1;$i<=6;$i++){
		echo "UPDATE sem$i SET status='0'";
	mysql_query("UPDATE sem$i SET status='0'");
	}
	  mysql_query("TRUNCATE TABLE store_id");
	header('location:../index.php');
?>