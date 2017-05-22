<?php

require_once 'db_connect.php';

if($_POST) {
	$id_vendor = $_POST['id_vendor'];
	$fname_vendor = $_POST['fname_vendor'];
	$lname_vendor = $_POST['lname_vendor'];
	$telephone_vendor = $_POST['telephone_vendor'];
	$email_vendor = $_POST['email_vendor'];
	$address_vendor = $_POST['address_vendor'];
	$username_vendor = $_POST['username_vendor'];
	$password_vendor = $_POST['password_vendor'];
	$sql  = "UPDATE vendor SET fname_vendor = '$fname_vendor', lname_vendor = '$lname_vendor', telephone_vendor = '$telephone_vendor', email_vendor = '$email_vendor', address_vendor = '$address_vendor', username_vendor = '$username_vendor', password_vendor = '$password_vendor' WHERE id_vendor = {$id_vendor}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Updated !!</p>";
		echo "<a href='../update.php?id_vendor=".$id_vendor."'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>
