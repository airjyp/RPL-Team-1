<!DOCTYPE html>
<html>
<?php
	include 'db_connect.php';
	if(empty($_SESSION['active'])){
		$_SESSION['active']=0;
	}
	$id = $_GET['id_vendor'];
	$query = mysqli_query($connect, "SELECT * FROM vendor WHERE id_vendor='$id'");
	$data = mysqli_fetch_array($query);
?>
<title><?php echo $data['username_vendor']; ?>'s vendor</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<title><?php echo $id;?></title>
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
			<?php
			if(!empty($_SESSION['active']==2))  {
				?>
			<li>
			<a href="edit2.php">Edit Profil</a>
			</li>
			<li>
			<a href="login/logoutproses.php">Logout</a>
			</li>
		<?php } else if(!empty($_SESSION['active']==1)) {
		?>
			<li>
			<a class="page-scroll" href="index.php#page-top">Home</a>
			</li>
			<li>
			<a class="page-scroll" href="index.php#about">About</a>
			</li>
			<li>
			<a class="page-scroll" href="index.php#services">Services</a>
			</li>
			<li>
			<a href="profilcustomer.php">Profile</a>
			</li>
			<li>
			<a href="login/logoutproses.php">Logout</a>
			</li>
			<?php } else {
		 ?>
 			<li>
 			<a class="page-scroll" href="index.php#page-top">Home</a>
 			</li>
 			<li>
 			<a class="page-scroll" href="index.php#about">About</a>
 			</li>
 			<li>
 			<a class="page-scroll" href="index.php#services">Services</a>
 			</li>
			<li>
			<a class="page-scroll" href="index.php#testimonials">Testimony</a>
			</li>
			<?php }
		 ?>
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
    <img src=<?php echo $data['avatare'];?> style="width:45%;" class="w3-round"><br><br>
    <h4><b>
		<?php echo "<h2><a href='profil.php?id_vendor=".$data['id_vendor']."';>$data[fname_vendor]</a></h2>";?>
	</b></h4>
    <p class="w3-text-grey">Vendor</p>
  </div>

  <div class="w3-bar-block">
    <?php if(!empty($_SESSION['active']==2)){ ?>
		<a href="tambah_foto.php" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>ADD GALLERY</a>
		<?php } else { ?>
		<a href="#gallery" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>GALLERY</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
		<?php } ?>
  </div>

 </nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

<form method="post" action='editproses2.php'>
  <!-- Header -->
  <body>

    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <br></br>
    <h1 id="gallery"><b><center>
		<?php
		echo $data['fname_vendor']?>'s vendor</center></b></h1>
    </br>
    </div>
  </body>
	<?php
	$dataPerPage = 6; //jumlah foto dalam satu halaman

// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
// sedangkan apabila belum, nomor halamannya 1.

if(isset($_GET['page']))
{
    $noPage = $_GET['page'];
}
else $noPage = 1;

// perhitungan offset

$offset = ($noPage - 1) * $dataPerPage;
$querfoto="SELECT * FROM gambar WHERE id_vendor='$id' order by idf desc LIMIT $offset, $dataPerPage";
$que   = "SELECT COUNT(*) AS jumData FROM gambar WHERE id_vendor='$id'";
$result = mysqli_query($connect,$querfoto);?>
<?php
$i = 1;
?>

  <!-- First Photo Grid-->
  <div class="w3-row-padding">
		<?php
		while($row = mysqli_fetch_array ($result)){ ?>
    <div class="w3-third w3-container w3-margin-bottom">
			<a href="imgpost/<?php echo $row['namaf'];?>">
      <img src="imgpost/<?php echo $row['namaf'];?>" alt="" width="100%" border="0"/></a>
      <div class="w3-container w3-white">
        <p><b><?php echo $row['ketf'];?></b></p>

			<?php if(!empty($_SESSION['active']==2)) { ?>
				<a href="hapus_foto.php?id=<?php echo $row['idf'];?>" onclick="return confirm('Anda yakin menghapus foto ini?');">Hapus</a>
				<?php } ?>
      <!-- <p>Some hearts understand each other</p> -->
      </div>
			<?php if ($i % 3 == 0) {
				echo '</tr><tr>';
			} $i++;
			 ?>
    </div>
		<?php } ?>
  </div>

	<div class="w3-center w3-padding-32">
		<div class="w3-bar;w3-bar-item w3-button">

<?php

	$hasi = mysqli_query($connect, $que);
	$dat = mysqli_fetch_array($hasi);

	$jumData = $dat['jumData'];

	$jumPage = ceil($jumData/$dataPerPage);

// menampilkan link previous

	if ($noPage > 1) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage-1)."'>&lt;&lt; Prev</a>";

// memunculkan nomor halaman dan linknya
	for($page = 1; $page <= $jumPage ; $page++){
		if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
         {
 //           if (($showPage == 1) && ($page != 2))  echo "...";
 //           if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";
            if ($page == $noPage) echo " <b>".$page."</b> ";
            else echo " <a href='".$_SERVER['PHP_SELF']."?page=".$page."'>".$page."</a> ";
            $showPage = $page;
         }
	}

if ($noPage < $jumPage) echo "<a href='".$_SERVER['PHP_SELF']."?page=".($noPage+1)."'>Next &gt;&gt;</a>";
 ?>
 </div>
 </div>

  <!-- Second Photo Grid-->
  <!-- <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img/vanilla/4.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        </br>
        <p><b>Ryan & Dika</b></p>
        <p>It wa love at every sight</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img/vanilla/5.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        </br>
        <p><b>Alindra & Jihad</b></p>
        <p>Being someone's first love is good, but to be their last is beyond perfect</p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="img/vanilla/6.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        </br>
        <p><b>Indra & Mega</b></p>
        <p>You are the person I want to share my happy ending with</p>
      </div>
    </div>
  </div> -->

  <!-- Pagination-->
  <!-- <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div> -->


  <!-- Images of Me -->
  <!-- <div class="w3-row-padding w3-padding-16" >
    <div class="w3-col m6">
      <img src="img/vanilla/7.jpg" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="img/vanilla/8.jpg" alt="Me" style="width:100%">
    </div>
  </div> -->

  <div class="w3-container w3-padding-large" style="margin-bottom:32px" id="about">
    <center>
    <h4><b>About Us</b></h4>
    <p><?php echo $data['aboutme'] ?>
    </center>
    <hr>
	</div>
    <!-- Progress bars / Skills
    <h4>Technical Skills</h4>
    <p>Photography</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:95%">95%</div>
    </div>
    <p>Web Design</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:85%">85%</div>
    </div>
    <p>Photoshop</p>
    <div class="w3-grey">
      <div class="w3-container w3-dark-grey w3-padding w3-center" style="width:80%">80%</div>
    </div>
    <p>
      <button class="w3-button w3-dark-grey w3-padding-large w3-margin-top w3-margin-bottom">
        <i class="fa fa-download w3-margin-right"></i>Download Resume
      </button>
    </p>
    <hr>
  -->

<!-- Section Timeline
================================================== -->
<!-- <section id="tline">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading"><b>Timeline</b></h2>
	</div>
</div>
</div>
<br/>
<div class="container">
<div class="row">
	<div class="col-md-12">
		<ul class="tline-holder"> -->
			<!-- tline ITEM-->
			<!-- <li class="tline-item-left wow fadeInLeft">
			<div class="tline-item-content">
				<div class="date-icon fa fa-camera">
				</div>
				<div class="tline-item-txt text-right">
					<div class="meta">
						 January 2017
					</div>
					<h3>Love Fashion</h3>
					<p>
						 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
					</p>
				</div>
			</div>
			</li> -->
			<!-- /tline-->
			<!-- tline-->
			<!-- <li class="tline-item-left wow fadeInLeft">
			<div class="tline-item-content">
				<div class="date-icon fa fa-camera">
				</div>
				<div class="tline-item-txt text-left">
					<div class="meta">
						 December 2016
					</div>
					<h3>Green is Health</h3>
					<p>
						 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
					</p>
				</div>
			</div>
			</li> -->
			<!-- /tline-->
			<!-- tline-->
			<!-- <li class="tline-item-left wow fadeInLeft">
			<div class="tline-item-content">
				<div class="date-icon fa fa-camera">
				</div>
				<div class="tline-item-txt text-right">
					<div class="meta">
						 November 2016
					</div>
					<h3>Why you love us</h3>
					<p>
						 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
					</p>
				</div>
			</div>
			</li> -->
			<!-- /tline-->
			<!-- tline-->
			<!-- <li class="tline-item-left wow fadeInleft">
			<div class="tline-item-content">
				<div class="date-icon fa fa-camera">
				</div>
				<div class="tline-item-txt text-left">
					<div class="meta">
						 September 2016
					</div>
					<h3>Save our Planet</h3>
					<p>
						 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
					</p>
				</div>
			</div>
			</li> -->
			<!-- /tline-->
			<!-- <li class="tline-start">
			<div class="tline-start-content">
				<div class="tline-start-icon">
				</div>
				<a href="#" class="btn btn-primary bgn-xl wow zoomIn">START</a>
			</div>
			</li>
		</ul>
	</div>
</div>
</div>
</section> -->

  <!-- Contact Section -->
  <div class="w3-container w3-padding-large w3-grey">
    <h4 id="contact"><b>Contact Me</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
					<p>
				<?php	echo $data['email_vendor']?></p>
      </div>
      <div class="w3-third w3-black">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>
					<?php	echo $data['address_vendor'] ?></p>
      </div>
      <div class="w3-third w3-dark-grey">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>
					<?php	echo $data['telephone_vendor'] ?></p>
      </div>
    </div>
    <hr class="w3-opacity">
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
