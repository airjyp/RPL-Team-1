<?php
  session_start();
require_once 'db_connect.php';

if($_POST) {
	$fname_cust = $_POST['fname_cust'];
	$lname_cust = $_POST['lname_cust'];
	$telephone_cust = $_POST['telephone_cust'];
	$email_cust = $_POST['email_cust'];
	$username_cust = $_POST['username_cust'];
	$password_cust = $_POST['password_cust'];
	$sql = "INSERT INTO customer (id_cust, fname_cust, lname_cust, telephone_cust, email_cust, address_cust, username_cust, password_cust, active) VALUES ('', '$fname_cust', '$lname_cust', '$telephone_cust', '$email_cust', '','$username_cust', '$password_cust' ,1) ";
	if($connect->query($sql) === TRUE) {

?>

		<script language="javascript">alert("Register Success!");</script>
        <script>document.location.href='../login/login.php';</script>

<?php
	} else {
		echo "Error ! " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>
