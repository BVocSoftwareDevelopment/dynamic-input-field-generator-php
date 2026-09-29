<?php
	$host		= 'localhost';
	$db			= 'db_dynamic_input';
	$user 		= 'root';
	$pass 		= '';
	$charset 	= 'utf8mb4';
	
	
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	
	try{
		$mysqli = new mysqli($host, $user, $pass, $db);
		$mysqli->set_charset($charset);
	}catch (mysqli_sql_exception $e) {
		error_log($e->getMessage(), 3, __DIR__ . '/../logs/error.log');
		die("Connection failed.");
	}
?>