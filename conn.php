<?php
	define('SQL_HOST', 'localhost');
	define('SQL_USER', value); //username
	define('SQL_PASS', value); // password
	define('SQL_DB', value); //database name
	$conn = mysql_connect(SQL_HOST, SQL_USER, SQL_PASS) or 
		die('Could not connect to the database: ' . mysql_error());
	mysql_select_db(SQL_DB, $conn) or 
		die('Could not select the database: ' . mysql_error());
?>