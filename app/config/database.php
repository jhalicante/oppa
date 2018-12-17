<?php

	// Database Variables
	define('SERVERNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', 'root');
	define('DATABASE', 'jobstalk_dbs');

	// Create connection
	$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
    
	// Check connection
	if ($conn->connect_error)
	{
		die("Database Connection failed: "); // Die the whole page when the connection goes failed
	}


?>