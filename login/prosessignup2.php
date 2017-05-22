<?php
	session_start();
require_once 'db_connect.php';

if($_POST) {
	$fname_vendor = $_POST['fname_vendor'];
	$lname_vendor = $_POST['lname_vendor'];
	$telephone_vendor = $_POST['telephone_vendor'];
	$email_vendor = $_POST['email_vendor'];
	$username_vendor = $_POST['username_vendor'];
	$password_vendor = $_POST['password_vendor'];
	$usercheck = mysqli_query($connect,"SELECT * FROM vendor WHERE username_vendor = '$username_vendor'");
	$emailcheck = mysqli_query($connect,"SELECT * FROM vendor WHERE email_vendor = '$email_vendor'");
	if(mysqli_num_rows($usercheck) > 1){ ?>
			<script language="javascript">alert("Username is already taken!");</script>
        	<script>document.location.href='../login/signup.php';</script>
            $еrror = true;
            <?php
    }
    
    elseif(mysqli_num_rows($emailcheck) > 1){ ?>
			<script language="javascript">alert("email is already exist!");</script>
        	<script>document.location.href='../login/signup.php';</script>
            $еrror = true;
            <?php
    }

    else {
	$sql = "INSERT INTO vendor (id_vendor, fname_vendor, lname_vendor, telephone_vendor, email_vendor, address_vendor, id_category, amount, username_vendor, password_vendor, active) VALUES ('', '$fname_vendor', '$lname_vendor', '$telephone_vendor', '$email_vendor', '', '', '', '$username_vendor', '$password_vendor' ,1) ";
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
