<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Australia/Sydney");

	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "root");
	define("DB_NAME", "amplify");
	$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	if(mysqli_connect_errno()) {
	die("Database Failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() .")" );
  }

	if(mysqli_connect_errno()) {
		echo "Failed to connect: " . mysqli_connect_errno();
	}
?>
