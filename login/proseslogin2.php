<?php
	include 'db_connect.php';

	$username_vendor = $_POST['username_vendor'];
	$password_vendor = $_POST['password_vendor'];

	$result = mysqli_query($connect, "SELECT * FROM vendor WHERE username_vendor='$username_vendor' and password_vendor='$password_vendor'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row) {
		$_SESSION['id'] = $row['id_vendor'];
		$_SESSION['active'] = 2;
		if($_SESSION['id'] == '1'){
?>
			<script language="javascript">alert("Hello, Vendor!");</script>
			<script> document.location.href='../dashboard.php';</script>
<?php
		}
		else {
?>
			<script language="javascript">alert("Logging Succesful");</script>
			<script> document.location.href='../profil.php';</script>
<?php
		}
	}
	else {
?>
		<script language="javascript">alert("Logging Failed");</script>
		<script>document.location.href='../login/login.php';</script>
<?php
	}
	mysqli_close($conn);
?>
