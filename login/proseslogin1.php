<?php
	include 'db_connect.php';
	$username_cust = $_POST['username_cust'];
	$password_cust = base64_encode($_POST['password_cust']);

	$result = mysqli_query($connect, "SELECT * FROM customer WHERE username_cust='$username_cust' and password_cust='$password_cust'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row) {
		$_SESSION['id'] = $row['id_cust'];
		$_SESSION['active'] =1;
		if($_SESSION['id'] == '1'){
?>
			<script language="javascript">alert("Hello, Customer!");</script>
			<script> document.location.href='../adminsuper.php';</script>
<?php
		}
		else {
?>
			<script language="javascript">alert("Logging Succesful");</script>
			<script> document.location.href='../index.php';</script>
<?php
		}
	}
	else {
?>
		<script language="javascript">alert("Logging Failed");</script>
		<script>document.location.href='login.php';</script>
<?php
	}
	mysqli_close($connect);
?>
