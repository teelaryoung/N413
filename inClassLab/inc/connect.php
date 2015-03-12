<?php	
	$host = 'localhost';
	$username = 'youngtyj';
	$password  = 'youngtyj';
	$dbName = 'youngtyj_db';
	
	$connect = mysqli_connect($host, $username, $password, $dbName);

	if (!$connect) {
		die('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
	}
?>