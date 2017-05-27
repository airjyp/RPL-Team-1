<?php
	include "db_connect.php";
	if($_SESSION['active'] == 1) {
		$id = $_SESSION['id'];
		$folder = "images";
		$upload = "images";
		$foto_size = $_FILES["avatar"]["size"];
		$foto_loc = $_FILES["avatar"]["tmp_name"];
		$foto_name = $_FILES["avatar"]["name"];
		$info = getimagesize($foto_loc);

		if(($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)){
		?>  <script language="javascript">alert("Not an image!");</script>
			<script>document.location.href='profilcustomer.php';</script>
		<?php
		}
		else{
		if($foto_size < 1000000){
			move_uploaded_file($foto_loc, "$upload/$foto_name");
			$hasil = mysqli_query($connect, "UPDATE customer SET avatar='$folder/$foto_name' WHERE id_cust ='$id'");

			if ($hasil) {
?>
				<script language="javascript">alert("Photo Change Successful");</script>
				<script>document.location.href='profilcustomer.php';</script>
<?php
			}
		}
		else{
?>
			<script language="javascript">alert("Photo Change Failed");</script>
			<script>document.location.href='../profile.php';</script>
<?php
		}
	}
?>
<?php
		}
?>
