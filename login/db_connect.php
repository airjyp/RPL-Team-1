<?php
session_start();
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "lavender"; //database name

// create connection
$connect = new mysqli($localhost, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
	die("connection failed : " . $connect->connect_error);
} else {
	// echo "Successfully Connected";
}
?>
