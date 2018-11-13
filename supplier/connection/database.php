<?php session_start();date_default_timezone_set('Asia/Calcutta');
	//error_reporting(0);	
	$host="localhost";
	$user="root";
	$password="";
	$database="CT_CManager"; 	
	$db_con = new mysqli($host, $user, $password,$database);
	if ($db_con->connect_errno) {
		printf("Connect failed: %s\n", $db_con->connect_error);
		exit();
	}
?>