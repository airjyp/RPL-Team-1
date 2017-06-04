<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Galeri Foto</title>
</head>
<body>
<?php include "koneksi.php";
$tampil=mysql_query("SELECT * from gambar order by idf desc");?>


<h2>Arsip Foto (<?php $jumlah=mysql_num_rows($tampil); echo"$jumlah";?> foto)</h2>
<table width="300" border="1">
  <tr>
    <td><a href="index.php">Home</a></td>
    <td><a href="tambah_foto.php">Tambah Foto</a></td>
    <td><a href="data_album.php">Data Album</a></td>
  </tr>
</table><p>
<?php
$dataPerPage = 9; //jumlah foto dalam satu halaman

// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
// sedangkan apabila belum, nomor halamannya 1.

if(isset($_GET['page']))
{
    $noPage = $_GET['page'];
}
else $noPage = 1;

// perhitungan offset

$offset = ($noPage - 1) * $dataPerPage;

// query SQL untuk menampilkan data perhalaman sesuai offset

if (isset($_GET['alb']) && ($id_al=$_GET['alb']) && ($id_al !="")){
$hasil=mysql_query("SELECT * FROM album WHERE ida='$id_al'") or die ('ERROR');
$data = mysql_fetch_array ($hasil);
$nama_alb=$data['nma']; echo "<h2>Foto Album: $nama_alb</h2>";
$query="SELECT * FROM gambar WHERE ida=$id_al order by idf desc LIMIT $offset, $dataPerPage";
$que   = "SELECT COUNT(*) AS jumData FROM gambar WHERE idf=$id_al";}
else {$query="SELECT * FROM gambar order by idf desc LIMIT $offset, $dataPerPage";
$que   = "SELECT COUNT(*) AS jumData FROM gambar";
$id_al="";}
$result = mysql_query($query) or die('Error');

// menampilkan data
?>
<table>
		<tr>
		<?php
$i = 1;
while ($row = mysql_fetch_array ($result))
{?>
<td>
			<a href="imgpost/<?php echo $row['namaf'];?>">
			<img src="imgpost/<?php echo $row['namaf'];?>" alt="" width="200" border="0"/></a>
			<br/><?php echo $row['ketf'];?><br/> Diupload tanggal: <?php echo $row['tgl'];?><br>
			<a href="hapus_foto.php?id=<?php echo $row['idf'];?>" onclick="return confirm('Anda yakin menghapus foto ini?');">Hapus</a>
			| <a href="edit_foto.php?id=<?php echo $row['idf'];?>">Edit</a>
</td>
		<?php
			if($i % 3 == 0){
				echo '</tr><tr>';
			}
			$i++;
		}
		?>
		</tr>
	</table>
<?php
// mencari jumlah semua data dalam tabel

$hasi  = mysql_query($que);
$data     = mysql_fetch_array($hasi);

$jumData = $data['jumData'];

// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data

$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

if ($noPage > 1) echo  "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."&alb=".$id_al."'>&lt;&lt; Prev</a>";

// memunculkan nomor halaman dan linknya

for($page = 1; $page <= $jumPage; $page++)
{
         if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
         {
 //           if (($showPage == 1) && ($page != 2))  echo "...";
 //           if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."&alb=".$id_al."'>".$page."</a> ";
            $showPage = $page;
         }
}

// menampilkan link next

if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."&alb=".$id_al."'>Next &gt;&gt;</a>";
?>


</body>
</html>
