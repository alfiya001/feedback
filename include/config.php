<?php 
    ob_start();
	session_start();
	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','');
	define('DB_NAME','feedback');
	
	/*define('DB_HOST','localhost');
	define('DB_USER','itsnex_pr');
	define('DB_PASS','admin@pr');
	define('DB_NAME','itsnex_pr');*/
	
	@$dbconnect = mysql_connect(DB_HOST,DB_USER,DB_PASS);
	if(!$dbconnect)
	{
		die(mysql_error());
	}
	$dbselect = mysql_select_db(DB_NAME);
	if(!$dbselect)
	{
		die(mysql_error());
	}  

?>