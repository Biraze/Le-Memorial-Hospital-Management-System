<?php

	$dbServerName = "localhost";
	$user = "root";
	$pass = "";
	$dbName = "lememorial";

	$conn = mysqli_connect($dbServerName, $user, $pass, $dbName);

	if (mysqli_connect_errno()) {
		echo "not connected";
	    die("Connection failed: ");
	}

?>