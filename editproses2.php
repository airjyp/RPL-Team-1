<?php

include 'db_connect.php';
if($_POST) {
	$id_vendor = $_POST['id_vendor'];
  $fname_vendor = $_POST['fname_vendor'];
  $lname_vendor = $_POST['lname_vendor'];
  $telephone_vendor = $_POST['telephone_vendor'];
  $email_vendor = $_POST['email_vendor'];
  $aboutme = $_POST['aboutme'];
  $address_vendor = $_POST['address_vendor'];
	$myquery  = mysqli_query($connect, "UPDATE vendor SET fname_vendor = '$fname_vendor', lname_vendor = '$lname_vendor', telephone_vendor = '$telephone_vendor', email_vendor = '$email_vendor', aboutme = '$aboutme', address_vendor = '$address_vendor' WHERE id_vendor = '$id_vendor' ");
	if($myquery) {

	?>
		<script language="javascript">alert("Profil edited!!");</script>
        <script>document.location.href='profil.php';</script>
<?php

}

else {

	?>

		<script language="javascript">alert("Failed to edit profil!");</script>


<?php
	}


}

?>
