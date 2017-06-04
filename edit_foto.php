<?php
include "db_connect.php";
if($_POST){
	$update = "update gambar set ida='".$_POST['album']."', ketf='".$_POST['deskripsi']."' ";
	if($_FILES['file']['size'] > 0 && $_FILES['file']['error'] == 0){
		$move = move_uploaded_file($_FILES['file']['tmp_name'], "imgpost".$_FILES['file']['name']);
		if($move){
			$update .= ", namaf='".$_FILES['file']['name']."'";
		}
	}
	$update .= " where idf='".$_POST['id']."'";
	mysqli_query($connect, $update);
	header("Location: profil.php");
	exit;
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Edit Foto</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<div id="center">

<h2 align="center">Tambah Foto </h2>
<table>
<tr>
<form name="form1" action="" method="post" enctype="multipart/form-data">
  <h3 align="center">Dapat edit album, atau pilih file yang akan di upload atau edit keterangannya:</h3><br>
    <table width="600"  border="0" align="center">
    <tr><td>		<?php
		$sql = "SELECT * from gambar where idf='".intval($_GET['id'])."'";
		$data = mysqli_fetch_array(mysqli_query($connect, $sql));
		$idalb=$data['ida'];
		?>
		<!-- menampilkan gambar sebelumnya --><br/>
</td><td><img src="imgpost<?php echo $data['namaf'];?>" alt="" width="200"/></td><td>Pilih Album<br>
  <select name="album">
<?php
$query = "SELECT * FROM album ORDER BY nma";
$sql = mysqli_query ($connect, $query);
while ($hasil = mysqli_fetch_array ($sql)) {
$selected = ($hasil['ida']==$idalb)?"selected":"";
echo "<option value='$hasil[ida]' $selected>$hasil[nma]</option>";
}
?>
  </select></td></tr>
	<tr>
      <td width="8%"><div align="center">No.</div></td>
      <td width="48%"><div align="center">File Gambar * </div></td>
      <td width="44%"><div align="center">Keterangan Gambar </div></td>
    </tr>
    <tr>
      <td><div align="center">1.</div></td>
      <td><input type="file" name="file" id="file"/>&nbsp;</td>
      <td><textarea name="deskripsi" id="deskripsi"><?php echo $data['ketf'];?></textarea></td>
    </tr>
  </table><input type="hidden" name="id" value="<?php echo $data['idf'];?>"/>
  <p align="center">* Hanya file gambar jpg/gif/png </p>
  <p align="center"><input type="submit" name="save" value="Update"/></p>
</form>
</body>
</html>
