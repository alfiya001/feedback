<?php
	
	function cleanstr($input) {
	$allowed = "<iframe>";
	$input = trim($input);
	$input = strip_tags($input,$allowed);
	$input = stripslashes($input);
	$input = mysql_real_escape_string($input);
	return $input;
 }
 
 	function role($id){
	$sql = "SELECT name FROM roles WHERE id='$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	return $row[0];	 
 } 
 
 	function branch($id){
	$sql = "SELECT name FROM department WHERE id='$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	return $row[0];	 
 } 
 
 function subject($id){
	$sql = "SELECT sub_name FROM subject WHERE id='$id'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	return $row[0];	 
 } 
 
 function semester($id){
 	if($id == '1'){
		return 'I';
	}else if($id == '2'){
		return 'II';
	}else if($id == '3'){
		return 'III';
	}else if($id == '4'){
		return 'IV';
	}else if($id == '5'){
		return 'V';
	}else if($id == '6'){
		return 'VI';
	}else if($id == '7'){
		return 'VII';
	}else if($id == '8'){
	   return 'VIII';
	}
	
	
 }
?>