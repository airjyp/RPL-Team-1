<!DOCTYPE html>
<html lang="en">
<?php
	include 'db_connect.php';
	session_start();
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Invitation - Lavender</title>
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
<!-- Plugin CSS -->
<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
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
		<a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo.png" alt="logolayana"></a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li>
			<a class="page-scroll" href="index.php#page-top">Home</a>
			</li>
			<li>
			<a class="page-scroll" href="index.php#about">About</a>
			</li>
			<li>
			<a class="page-scroll" href="index.php#services">Services</a>
			</li>
			<?php
			if(!empty($_SESSION['status'])) {
			?>
			<li> <a href="#">Profile</a> </li>
			<li> <a href="login/logoutproses.php">Logout</a> </li>
			<?php } else {
			 ?>
			<li>
			<a class="page-scroll" href="index.php#testimonials">Testimony</a>
			</li>
			<?php } ?>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>


<!-- Section Intro Slider
================================================== -->
<div id="carousel-example-generic" class="carousel intro slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<!-- First slide -->
		<div class="item active" style="background-image:url(img/slideinv.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInDown">
				Welcome to </h2>
				<h1 data-animation="animated bounceInUp">
				Lavender's
				Invitation </h1>
			</div>
		</div>
		<!-- /.item -->
		<!-- Second slide -->
		<div class="item" style="background-image:url(img/slideinv1.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated zoomInLeft">
				we provide you high quality of </h2>
				<h1 data-animation="animated zoomInRight">
				Invitation </h1>
			</div>
		</div>
	</div>
	<!-- /.carousel-inner -->
	<!-- Controls (currently displayed none from style.css)-->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
	</a>
</div>
<!-- /.carousel -->


<!-- Section About
================================================== -->
<section id="about">
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 text-center">
			<h2 class="section-heading">OUR <b>INVITATION</b></h2>
			<hr>
			<p>
				We provide you a high quality of invitation
			</p>
			<p>
				So, many of your friend and family can join your party
			</p>
	</div>
</div>
</div>
</section>


<!-- Section Team
================================================== -->
<section class="no-padding">
<div class="col-md-4 bg-primary no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
	<img src="img/kyub.jpg" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
			<p>
				 KYUB
			</p>
		</div>
	</div>
</div>
<h2>KYUB</h2>
<p>
	 INVITATION
</p>
<div class="team-social">
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-google-plus"></i></a>
	<a href="#"><i class="fa fa-skype"></i></a>
</div>
</div>
<div class="col-md-4 bg-dark no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
	<img src="img/lovely.jpg" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
			<p>
				 LOVELY CARD
			</p>
		</div>
	</div>
</div>
<h2>LOVELY CARD</h2>
<p>
	 INVITATION
</p>
<div class="team-social">
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-google-plus"></i></a>
	<a href="#"><i class="fa fa-skype"></i></a>
</div>
</div>
<div class="col-md-4 bg-primary no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
	<img src="img/DISTILLERY.jpg" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
			<p>
				DISTILLERY
			</p>
		</div>
	</div>
</div>
<h2>DISTILLERY</h2>
<p>
	 INVITATION
</p>
<div class="team-social">
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-google-plus"></i></a>
	<a href="#"><i class="fa fa-skype"></i></a>
</div>
</div>
</section>
<div class="clearfix">
</div>

</br>
</br>


<!-- Section Team 2
================================================== -->
<section class="no-padding">
<div class="col-md-4 bg-primary no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
	<img src="img/paper.jpg" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
			<p>
				 PAPER LOVE STORY
			</p>
		</div>
	</div>
</div>
<h2>PAPER LOVE STORY</h2>
<p>
	 INVITATION
</p>
<div class="team-social">
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-google-plus"></i></a>
	<a href="#"><i class="fa fa-skype"></i></a>
</div>
</div>
<div class="col-md-4 bg-dark no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
	<img src="img/hyoo.jpg" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
			<p>
				 HYOO STUDIO
			</p>
		</div>
	</div>
</div>
<h2>HYOO STUDIO</h2>
<p>
	 INVITATION
</p>
<div class="team-social">
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-google-plus"></i></a>
	<a href="#"><i class="fa fa-skype"></i></a>
</div>
</div>
<div class="col-md-4 bg-primary no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
	<img src="img/paperie.jpg" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
			<p>
				THE PAPERIE
			</p>
		</div>
	</div>
</div>
<h2>THE PAPERIE</h2>
<p>
	 INVITATION
</p>
<div class="team-social">
	<a href="#"><i class="fa fa-twitter"></i></a>
	<a href="#"><i class="fa fa-linkedin"></i></a>
	<a href="#"><i class="fa fa-facebook"></i></a>
	<a href="#"><i class="fa fa-google-plus"></i></a>
	<a href="#"><i class="fa fa-skype"></i></a>
</div>
</div>
</section>
<div class="clearfix">
</div>

</br>
</br>


<!-- Section Footer
================================================== -->
<section class="bg-dark">
<div class="container">
<div class="row">
	<div class="col-md-12 text-center">
		<h1 class="bottombrand wow flipInX">Lavender</h1>
		<p>
			a low priced event organizer
		</p>
	</div>
	<br>
	<br>

	<div class="copyright">
		<p> <br> <center> All rights reserved | Created by <a href="http://sinduwinarta.id/" target="_blank">MIPA (Memed, Ihda, Pam, AIR)</center></a></p>
	</div>
	<!-- //copyright -->
</div>
</div>
</section>

<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/contact.js"></script>
<script src="js/countto.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>
