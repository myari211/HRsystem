<?php
	$conn = new mysqli('localhost', 'h84845_root', 'Caleb26100@', 'h84845_hrmsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>