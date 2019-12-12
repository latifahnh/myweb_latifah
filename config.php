<?php

	$servername = "db4free.net";
	$username = "latifah";
	$password = "12345678";
	$dbname = "latifahdb";

	//create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//cek connection
	if ($conn->connect_error) {
		die("connection failed: " . $conn->connect_error);
	}
		
?>