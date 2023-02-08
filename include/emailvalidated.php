<?php 
	require_once('config.php');
	if(isset($_POST["email"]))
    {
		$email = $_POST["email"];
	//check if its ajax request, exit script if its not
	if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
		die();
	}
	 $sql = "SELECT email FROM user_data WHERE email='$email'";
	 $result = mysql_query($sql);
	 $no = mysql_num_rows($result);
	 if($no){
		
		 echo "1";
	 }else{
		echo '0';	 
	 }
	
   }

?>