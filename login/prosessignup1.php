<?php
  session_start();
include 'db_connect.php';

if($_POST) {
	$fname_cust = $_POST['fname_cust'];
	$lname_cust = $_POST['lname_cust'];
	$telephone_cust = $_POST['telephone_cust'];
	$email_cust = $_POST['email_cust'];
	$username_cust = $_POST['username_cust'];
	$password_cust = $_POST['password_cust'];
	$usercheck = mysqli_query($connect,"SELECT * FROM customer WHERE username_cust = '$username_cust'");
	$emailcheck = mysqli_query($connect,"SELECT * FROM customer WHERE email_cust = '$email_cust'");
	if(mysqli_num_rows($usercheck) > 0 ){
		?>
			<script language="javascript">alert("Username is already taken!"); </script>
        	<script>document.location.href='../login/signup.php'; </script>
            $еrror = true;
            <?php
    }
    elseif(mysqli_num_rows($emailcheck) > 0){ ?>
			<script language="javascript">alert("email is already exist!");</script>
        	<script>document.location.href='../login/signup.php';</script>
            $еrror = true;
            <?php
    }

    else {
	$sql = "INSERT INTO customer (id_cust, fname_cust, lname_cust, telephone_cust, email_cust, address_cust, username_cust, password_cust, active, birthdate, aboutme, avatar) VALUES ('', '$fname_cust', '$lname_cust', '$telephone_cust', '$email_cust', '' , '$username_cust', '$password_cust' ,1, '','', 'images/default.jpeg') ";
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
}
?>
