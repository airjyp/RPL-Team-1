<?php

require_once 'db_connect.php';

if($_POST) {
	$id_cust = $_POST['id_cust'];
	$fname_cust = $_POST['fname_cust'];
	$lname_cust = $_POST['lname_cust'];
	$telephone_cust = $_POST['telephone_cust'];
	$email_cust = $_POST['email_cust'];
	$address_cust = $_POST['address_cust'];
	$username_cust = $_POST['username_cust'];
	$password_cust = $_POST['password_cust'];
	$birthdate_cust = $_POST['birthdate_cust'];
	$about_cust = $_POST['about_cust'];
	$sql  = "UPDATE customer SET fname_cust = '$fname_cust', lname_cust = '$lname_cust', telephone_cust = '$telephone_cust', email_cust = '$email_cust', address_cust = '$address_cust', username_cust = '$username_cust', password_cust = '$password_cust', birthdate_cust = '$birthdate_cust', about_cust = '$about_cust' WHERE id_cust = {$id_cust}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Updated !!</p>";
		echo "<a href='../update.php?id_cust=".$id_cust."'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>
