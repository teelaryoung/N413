<?php	
	$host = 'localhost';
	$username = 'youngtyj';
	$password  = 'youngtyj';
	$tableName = 'youngtyj_db';
	
	$connect = mysqli_connect($host, $username, $password, $tableName);

	if (!$connect) {
		die('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
	}
?>