<html>
<head>
<title>Resset Password</title>
<style>
body {background:#C1392B; padding:0px; margin:0px}
h3 {color:#ffffff; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:20px; margin:20px;}
.wrapper-f{width:300px; margin:auto; padding:40px 20px 20px 20px; background:#E84C3D; margin-top:5%; min-height:120px;}
.wrapper-f label {color:#ffffff;}
.wrapper-f input {padding:5px; background:#eeeeee; border:0px; color:#333; width:98%; margin-bottom:10px;}
.wrapper-f input:focus{ background:#ccc;}
.wrapper-f .button {padding:10px 20px 10px 20px; color:#ffffff; background:#C1392B; margin-top:10px; cursor:pointer}
.wrapper-f .button:hover {background:#333;}
.warning {background:#FF9900; color:#ffffff; padding:10px; border-radius:5px; border:1px; text-align:center;margin:auto;
 width:400px; margin-top:20px;}
</style>
</head>
<h3>FORGOT PASSWORD</h3>
<div class="wrapper-f">
<form action="" method="post">
<label>Masukkan Email anda</label>
<input name="email" type="email" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Masukkan Email Dengan benar oke gan')">
<input class="button" name="act_resset" type="submit" value="Submit">

</form>

</div>
<div style="width:600px; margin:auto">
<?php
include 'db_connect.php';
if (isset($_POST['act_resset'])) {
date_default_timezone_set("Asia/Jakarta");
$pass="1A2B4HTjsk5kwhadbwlff"; $panjang='8'; $len=strlen($pass);
$start=$len-$panjang; $xx=rand('0',$start);
$yy=str_shuffle($pass);
$passwordbaru=substr($yy, $xx, $panjang);
$email = trim(strip_tags($_POST['email']));
$password_cust = mysqli_real_escape_string($connect, htmlentities((md5($passwordbaru))));
$datetime=date("h:i:s-j-M-Y");

// mencari alamat email si user

$query = "SELECT * FROM customer WHERE email_cust ='$email'";
$hasil = mysqli_query($connect, $query);
$data  = mysqli_fetch_array( $hasil);
$cek = mysqli_num_rows($hasil);
$id_cust = strip_tags($data['id_cust']);
$alamatEmail = strip_tags($data['email_cust']);
$username_cust =trim(strip_tags($data['username_cust']));
if ($cek == 1) {
// title atau subject email
$title  = "Permintaan Password Baru";
// isi pesan email disertai password
$pesan  = "Kami telah meresset Ulang Kata sandi ".$username_cust." Dan anda dapat login kembali ke web kami \n\n
DETAIL AKUN ANDA :\n Nama Penguna : ".$username." \n
Kata sandi Anda yang baru adalah: ".$passwordbaru."\n\n
\n\n PESAN NO-REPLY";
// header email berisi alamat pengirim
$header = "From: nama-website<no-reply@domain.com>";
// mengirim email
$kirimEmail = mail($alamatEmail, $title, $pesan, $header);
// cek status pengiriman email
if ($kirimEmail) {

    // update password baru ke database (jika pengiriman email sukses)
    $query = "UPDATE customer SET password_cust='$password_cust' WHERE id_cust = '$id_cust'";
    $hasil = mysqli_query($query);

    if ($hasil)
	echo'<div class="warning">Kata sandi baru telah direset dan sudah dikirim ke email "'.$alamatEmail.'" Silahkan cek emailnya</div><br><br><hr><h3>CONTOH PESAN DALAM EMAIL<hr><br>
	'.$pesan.'<hr>';
    }
	else {
echo'<div class="warning">Pengiriman Kata sandi baru ke email gagal</div>';
}
}
else{

echo'<div class="warning">Alamat Email tidak ditemukan</div>';
}}


?>

</div>

<body>
</body>
</html>
