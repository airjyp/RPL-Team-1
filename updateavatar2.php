<?php
	include "db_connect.php";
	if($_SESSION['active'] == 2) {
		$id = $_SESSION['id'];
		$folder = "images";
		$upload = "images";
		$foto_size = $_FILES["avatar"]["size"];
		$foto_loc = $_FILES["avatar"]["tmp_name"];
		$foto_name = $_FILES["avatar"]["name"];
		$info = getimagesize($foto_loc);

		if(($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG) && ($info[2] !== IMAGETYPE_JPG)){
		?>  <script language="javascript">alert("Not an image!");</script>
		<script>document.location.href='edit2.php';</script>
		<?php
		}
		else{
		if($foto_size < 1000000){
			move_uploaded_file($foto_loc, "$upload/$foto_name");
			$hasil = mysqli_query($connect, "UPDATE vendor SET avatare='$folder/$foto_name' WHERE id_vendor ='$id'");

			if ($hasil) {
?>
				<script language="javascript">alert("Photo Change Successful");</script>
				<script>document.location.href='profil.php';</script>
<?php
			}
		}
		else{
?>
			<script language="javascript">alert("Photo Change Failed");</script>
			<script>document.location.href='edit2.php';</script>
<?php
		}
	}
?>
<?php
		}
?>
