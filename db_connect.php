<?php

	$servername = '192.168.64.2';
	$username = "test";
	$password = "Kean1230@";
	$dbname = "wclient";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (mysqli_connect_errno()) 
	{
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

?>