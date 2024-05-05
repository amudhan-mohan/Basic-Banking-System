<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";

	$conn = mysqli_connect('localhost','root','','test');

	if(!$conn){
		die("Could not connect to the database - Error:  ".mysqli_connect_error());
	}

?>