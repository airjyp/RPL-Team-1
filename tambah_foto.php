<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include "db_connect.php";
 if($_SESSION['active']==2){
		$id = $_SESSION['id'];
		$query = mysqli_query($connect, "SELECT * FROM vendor WHERE id_vendor = '$id'");
		$data= mysqli_fetch_array($query);

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Foto</title>
</head>
<body>
<table align="center">
<tr>
<?php

	$namafolder="imgpost/"; //tempat menyimpan file
	if (isset($_POST['kirim'])) {
	for($i=0; $i<count($_FILES['nama_file']); $i++)
	{
		if (!empty($_FILES["nama_file"]["tmp_name"][$i]))
		{
			$tgl=date("His");
			$jenis_gambar=$_FILES['nama_file']['type'][$i];
			$ket_gambar=$_POST['ket'][$i];

			if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
			{
				$gambar = $namafolder.$tgl.basename($_FILES['nama_file']['name'][$i]);
				$nama_gbr= $tgl.basename($_FILES['nama_file']['name'][$i]);
				if (move_uploaded_file($_FILES['nama_file']['tmp_name'][$i], $gambar)) {
					//tampilkan ke layar
					echo "<td><img src=\"$namafolder$nama_gbr\" width=\"100\" alt=\"$ket_gambar\" /><br />";
					echo "".$ket_gambar."<br /></td>";
					//proses menyimpan database berikut ini
					mysqli_query($connect, "insert into gambar(namaf,id_vendor,ketf,tgl) values('$nama_gbr','$id','$ket_gambar',now())") or die(mysql_error());

					}
		   }
		   else
		   {
				echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png<br />";
		   }
	   }
	}
	?><script>document.location.href='profil.php';</script><?php
	}
?>
		</tr>
	</table>
<form action="" method="post" enctype="multipart/form-data">
  <h3 align="center">Choose your photos:  </h3>
  <div align="center"><ul>
  <li>
    Hanya file gambar jpg/gif/png
    </li>
    <li>
      Nama file harus kurang dari 25 karakter
    </li>
  </ul></div>
  <table width="600"  border="0" align="center">
    <tr><td>&nbsp;</td>
    </select></td></tr>
	<tr>
      <td width="8%"><div align="center"><strong>No.</strong></div></td>
      <td width="48%"><div align="center"><strong>File Gambar</strong></div></td>
      <td width="44%"><div align="center"><strong>Keterangan Gambar </strong></div></td>
    </tr>
    <tr>
      <td><div align="center">1.</div></td>
      <td><input name="nama_file[]" type="file" />&nbsp;</td>
      <td><textarea name="ket[]"></textarea></td>
    </tr>
    <tr>
      <td><div align="center">2.</div></td>
      <td><input name="nama_file[]" type="file" />&nbsp;</td>
      <td><textarea name="ket[]"></textarea>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">3.</div></td>
      <td><input name="nama_file[]" type="file" />&nbsp;</td>
      <td><textarea name="ket[]"></textarea>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p align="center">
    <input name="kirim" type="submit" id="btnKirim" value="SEND" />

</form
></body>
</html>
<?php }  ?>
