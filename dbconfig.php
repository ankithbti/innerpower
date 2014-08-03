<?php
	/*  Server Database */
	
	require_once('CommonConstants.php');

	
	if($dbc = mysql_connect(DBHOST, DBUSER, DBPW)){
		if(!mysql_select_db(DBNAME)){
			trigger_error("Could not select the database" . mysql_errno());
			exit();
		}
	}else{
		trigger_error("Could not connect to MYSQL");
		exit();
	}
	function escape_data($data){
		if(function_exists('mysql_real_escape_string')){
			global $dbc;
			$data = mysql_real_escape_string(trim($data),$dbc);
			$data = strip_tags($data);
		}else{
			$data = mysql_escape_string(trim($data));
			$data = strip_tags($data);			
		}
		return $data ;
	}
?>