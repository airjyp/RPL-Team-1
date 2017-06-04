<?php
include "db_connect.php";
if(isset($_GET['id']))
{
	$id = (int) $_GET['id'];
	$namafolder="img/"; //tempat menyimpan file
	$sql = "select * from gambar where idf='$id'";
	$result = mysqli_query($connect,$sql);
	$num_rows = $result->num_rows;
	if($num_rows > 0 )
	{
		$data = mysqli_fetch_array($result);
		//delete file
		@unlink($namafolder.$data['namaf']);
		//delete data di database
		mysqli_query($connect,"delete from gambar where idf='$id'");
	}
}
header("Location: profil.php")
?>
