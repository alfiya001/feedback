<?php 
		require_once('include/config.php');
		require_once('include/function.php');
		$id=$_GET['id'];
		$result=mysql_query("DELETE from hod_data where id='".$id."'");
		if($result)
		{
			header('Location:view_hod.php');
		}
		
?>