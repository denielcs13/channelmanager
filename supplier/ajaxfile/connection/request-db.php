<?php date_default_timezone_set('Asia/Calcutta');
	//error_reporting(0);	
	$host="localhost";
	$user="root";
	$password="";
	$database="CT_CManager"; 	
	$db_request = new mysqli($host, $user, $password,$database);
	if ($db_request->connect_errno) {
		printf("Connect failed: %s\n", $db_request->connect_error);
		exit();
	} 
?>