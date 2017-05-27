<?php

include 'db_connect.php';
if($_POST) {
	$id_cust = $_POST['id_cust'];
  $fname_cust = $_POST['fname_cust'];
  $lname_cust = $_POST['lname_cust'];
  $telephone_cust = $_POST['telephone_cust'];
  $email_cust = $_POST['email_cust'];
  $aboutme = $_POST['aboutme'];
  $address_cust = $_POST['address_cust'];
  $birthdate = $_POST['birthdate'];
	$myquery  = mysqli_query($connect, "UPDATE customer SET fname_cust = '$fname_cust', lname_cust = '$lname_cust', telephone_cust = '$telephone_cust', email_cust = '$email_cust', aboutme = '$aboutme', address_cust = '$address_cust', birthdate = '$birthdate' WHERE id_cust = '$id_cust' ");
	if($myquery) {

	?>
		<script language="javascript">alert("Profil edited!!");</script>
        <script>document.location.href='profilcustomer.php';</script>
<?php

}

else {

	?>

		<script language="javascript">alert("Failed to edit profil!");</script>


<?php
	}


}

?>
