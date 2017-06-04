<!DOCTYPE html>
<html>
<?php
	include 'db_connect.php';
	if(empty($_SESSION['active'])){
		$_SESSION['active']=0;
	}
	$id = $_SESSION['id'];
	$query = mysqli_query($connect, "SELECT * FROM vendor WHERE id_vendor='$id'");
	$data = mysqli_fetch_array($query);

  $fname_vendor = $data['fname_vendor'];
  $lname_vendor = $data['lname_vendor'];
  $telephone_vendor = $data['telephone_vendor'];
  $email_vendor = $data['email_vendor'];
  $aboutme = $data['aboutme'];
  $address_vendor = $data['address_vendor'];
?>
<title><?php
$query = mysqli_query($connect, "SELECT * FROM vendor WHERE id_vendor='$id'");
$data = mysqli_fetch_array($query);
echo $data['fname_vendor']?>'s vendor</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title>Lavender</title>
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<!-- Plugin CSS -->
<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">


<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand page-scroll" href="index.php#page-top"><img src="img/logo.png" alt="logolayana"></a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li>
			<a href="profil.php">Profile</a>
			</li>
			<li>
			<a href="login/logoutproses.php">Logout</a>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    </br>
		<?php
		$quey = mysqli_query($connect, "SELECT * FROM vendor WHERE id_vendor='$id'");
		$data = mysqli_fetch_array($quey);
		?>
    <img src=<?php echo $data['avatare'] ?> style="width:45%;" class="w3-round"><br><br>
		<?php if(!empty($_SESSION['active']==2)){?>
		<form name="uploader" action="updateavatar2.php" method="POST" enctype="multipart/form-data">
			<input type="file" name="avatar">

			<button type="submit">Upload</button>
	</form><?php } ?>
    <h4><b>
		<?php
				$sql=mysqli_query($connect,"SELECT * FROM vendor WHERE id_vendor='$id'");
				$result=mysqli_fetch_array($sql);
				$username=$result['fname_vendor'];
		echo "<h2><a href='profil.php?id_vendor=".$result['id_vendor']."';>$username</a></h2>";?>
	</b></h4>
    <p class="w3-text-grey">Vendor</p>
  </div>
  <div class="w3-bar-block">
		<a href="tambah_foto.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ADD GALLERY</a>
  </div>
  <div class="w3-panel w3-large">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

<form method="post" action='editproses2.php'>
  <!-- Header -->
<br></br>
  <div class="col-xs-12 col-sm-8">
  <form method="post" action='editproses1.php'>
     <ul class="list-group">
        <h1><?php echo ' ', $data['username_vendor'] ?>'s profile </h1>

        <li class="list-group-item">First Name    : <br><i class="fa fa-user"></i> <input type="text" name="fname_vendor" required value= "<?php echo $fname_vendor?>"/> </li>
        <li class="list-group-item">Last Name    : <br><i class="fa fa-group"></i> <input type="text" name="lname_vendor" required value= "<?php echo $lname_vendor?>"/> </li>
        <li class="list-group-item">Address    : <br><i class="fa fa-home"></i> <input type="text" name="address_vendor"  value= "<?php echo $address_vendor?>"/> </li>
        <li class="list-group-item">Telephone number    : <br><i class="fa fa-phone"></i> <input type="text" onkeypress='return event.charCode >=48 && event.charCode <= 57' maxlength="12" name="telephone_vendor" placeholder="Telephone" required value= "<?php echo $telephone_vendor?>"/> </li>
        <li class="list-group-item">Email   : <br><i class="fa fa-envelope"></i> <input type="email" name="email_vendor" required value= "<?php echo $email_vendor?>"/> </li>
        <li class="list-group-item">About me    : <br><i class="fa fa-comment"></i> <input type="text" name="aboutme"  value= "<?php echo $aboutme?>"/> </li>
     </ul>
     	<center><input type="hidden" name="id_vendor" value="<?php echo $data['id_vendor']?>"/>
     	<label><input type="submit" value="Change"></label>
  </div>


	<!-- Section Footer
	================================================== -->
	<!-- <section class="bg-dark">
	<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h1 class="bottombrand wow flipInX">Lavender</h1>
			<p>
				a low priced event organizer
			</p>
		</div>
		<div class="copyright">
			<p> <center> All rights reserved | Created by <a href="http://sinduwinarta.id/" target="_blank">MIPA (Memed, Ihda, Pam, AIR)</center></a></p>
		</div> -->
		<!-- //copyright -->
	<br>
	<br>
</div>
</section>
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
