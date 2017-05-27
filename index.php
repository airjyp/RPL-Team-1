<!DOCTYPE html>
<html lang="en">
<?php
	include 'db_connect.php';
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Lavender</title>
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
			<a class="page-scroll" href="#page-top">Home</a>
			</li>
			<li>
			<a class="page-scroll" href="#about">About</a>
			</li>
			<li>
			<a class="page-scroll" href="#services">Services</a>
			</li>
			<?php
			if(!empty($_SESSION['active'])) {
			?>
			<li> <a href="profilcustomer.php">Profile</a> </li>
			<li> <a href="login/logoutproses.php">Logout</a> </li>
			<?php } else {
			 ?>
			<li>
			<a class="page-scroll" href="#testimonials">Testimony</a>
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
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<!-- First slide -->
		<div class="item active" style="background-image:url(img/slideshow1.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInDown">
				Welcome to </h2>
				<h1 data-animation="animated bounceInUp">
				Lavender </h1>
				<?php
				if(!empty($_SESSION['active'])) {
					?>
			<a href="#services" class="btn btn-primary btn-lg ; page-scroll" data-animation="animated fadeInDown">Start Looking</a>
				<?php }
				else { ?>
			<a href="login/login.php" class="btn btn-ghost btn-lg" data-animation="animated fadeInLeft">Log In</a><a href="login/signup.php" class="btn btn-primary btn-lg" data-animation="animated fadeInRight">Sign Up</a>
				<?php
				} ?>
			</div>
		</div>
		<!-- /.item -->
		<!-- Second slide -->
		<div class="item" style="background-image:url(img/slideshow2.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated zoomInLeft">
				a Low Priced </h2>
				<h1 data-animation="animated zoomInRight">
				event organizer </h1>
				<?php
				if(!empty($_SESSION['active'])) {
					?>
					<a href="#services" class="btn btn-ghost btn-lg ; page-scroll" data-animation="animated fadeInDown">Start Looking</a>
				<?php }
				else { ?>
					<a href="login/login.php" class="btn btn-ghost btn-lg" data-animation="animated fadeInLeft">Log In</a><a href="login/signup.php" class="btn btn-primary btn-lg" data-animation="animated fadeInRight">Sign Up</a>
				<?php
				} ?>
			</div>
		</div>
		<!-- /.item -->
		<!-- Third slide -->
		<div class="item" style="background-image:url(img/slideshow3.jpg)">
			<div class="carousel-caption">
				<h2 data-animation="animated bounceInLeft">
				create your own</h2>
				<h1 data-animation="animated bounceInRight">
				special event</h1>
				<?php
				if(!empty($_SESSION['active'])) {
					?>
			<a href="#services" class="btn btn-primary btn-lg ; page-scroll" data-animation="animated fadeInDown">Start Looking</a>
				<?php }
				else { ?>
					<a href="login/login.php" class="btn btn-ghost btn-lg" data-animation="animated fadeInLeft">Log In</a><a href="login/signup.php" class="btn btn-primary btn-lg" data-animation="animated fadeInRight">Sign Up</a>
				<?php
				} ?>
			</div>
		</div>
		<!-- /.item -->
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
			<h2 class="section-heading">ABOUT OUR<br/><b>LAVENDER</b></h2>
			<hr>
			<p>
				 Memories are priceless treasure that we can look it up again in the future.That is one of the biggest reasons why we focus on make your special event amazing
			</p>
			<p>
				 Capturing the "once in a life time" events, happy faces, smiles, happy tears have special meaning in our hearts
			</p>
			<p>
				 Our clients are not just clients, but they become our good friends
			</p>
	</div>
</div>
</div>
</section>
<!-- Section after about
==================================================
<section class="no-padding">
<div class="equal-heights w-middle">
<div class="col-md-4 bg-primary">
	<div class="box">
		<--
		<h2>Make a Difference</h2>
		<p>
			 Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus.
		</p>
		<a href="#" class="btn btn-round btn-white btn-xl">Find a Cause!</a>
	</div>
</div>
<div class="col-md-4">
	<img src="https://s3-eu-west-1.amazonaws.com/layanademo/wom.jpg" alt="">
</div>
<div class="col-md-4 bg-dark">
	<div class="box">
		<h2>Real <b>Solutions</b></h2>
		<p>
			 The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer. Let us not forget that the real solution lies in a world in which charity will be unnecessary.
		</p>
	</div>
</div>
</div>
<div class="equal-heights w-middle">
<div class="col-md-4 bg-gray">
	<div class="box">
		<h2>Give <b>Cheerfully</b></h2>
		<p>
			 When we give cheerfully and accept gratefully, everyone is blessed. A bone to the dog is not charity. Charity is the bone shared with the dog, when you are just as hungry as the dog.
		</p>
	</div>
</div>
<div class="col-md-4 bg-darkgray">
	<div class="box">
		<h2>Real <b>Solutions</b></h2>
		<p>
			 The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer. Let us not forget that the real solution lies in a world in which charity will be unnecessary.
		</p>
	</div>
</div>
<div class="col-md-4 bg-gray">
	<div class="box">
		<h2>Enjoy <b>Life</b></h2>
		<p>
			 The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer. Let us not forget that the real solution lies in a world in which charity will be unnecessary.
		</p>
	</div>
</div>
</div>
</section>
<div class="clearfix">
</div>
-->

<!-- Section Services
================================================== -->
<section id="services">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading">Our <b>Services</b></h2>
		<hr class="primary">
	</div>
</div>
</div>
<div class="container">
<div class="row">
	<!-- begin 1st row -->
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-primary">
				<i class="fa fa-2x fa-camera wow bounceIn text-fade"></i>
			</div>
			<h3><a class="text-muted" href="photographer.php">Photography</a></h3>
			<p class="text-muted">
				 We provide you a profesional photographer from around the world
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-dark">
				<i class="fa fa-2x fa-spinner wow bounceIn text-fade" data-wow-delay=".1s"></i>
			</div>
			<h3><a class="text-muted" href="decoration.php">Decoration</a></h3>
			<p class="text-muted">
				 Don't make your event have a bad decoration
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-primary">
				<i class="fa fa-2x fa-eye wow bounceIn text-fade" data-wow-delay=".2s"></i>
			</div>
			<h3><a class="text-muted" href="makeup.php">Make up Artist</a></h3>
			<p class="text-muted">
				Being beautiful is a must
			</p>
		</div>
	</div>
</div>
<!-- end 1st row -->
<br/>
<div class="row">
	<!-- begin 2nd row -->
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-dark">
				<i class="fa fa-2x fa-cutlery wow bounceIn text-fade"></i>
			</div>
			<h3><a class="text-muted" href="cathering.php">Cathering</a></h3>
			<p class="text-muted">
				 We provide you world class food and beverages with amazing taste
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-primary">
				<i class="fa fa-2x fa-camera-retro wow bounceIn text-fade" data-wow-delay=".1s"></i>
			</div>
			<h3><a class="text-muted" href="invitation.php">Invitation Design</a></h3>
			<p class="text-muted">
				Make your event looks elegant
			</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 text-center">
		<div class="service-box">
			<div class="iconbox bg-dark">
				<i class="fa fa-2x fa-star wow bounceIn text-fade" data-wow-delay=".2s"></i>
			</div>
			<h3><a class="text-muted" href="entertainment.php">Entertainment</a></h3>
			<p class="text-muted">
				 Entertaint all the guest
			</p>
		</div>
	</div>
</div>
<!-- end 2nd row -->
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Team
================================================== -->
<section class="no-padding">
<div class="col-md-4 bg-primary no-padding teambox">
<div class="team-thumb overlay-image view-overlay">
	<img src="img/high1.jpg" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
			<p>
				 good entertainment all over the world
			</p>
		</div>
	</div>
</div>
<h2>BEVERLY GARCIA</h2>
<p>
	 Entertainment
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
	<img src="img/high2.jpg" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
			<p>
				 As sweet as vanilla !!!
			</p>
		</div>
	</div>
</div>
<h2>VANILLA LATTE FOTOGRAFIA</h2>
<p>
	 Photographer
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
	<img src="img/high3.jpg" alt="" class="img-responsive">
	<div class="mask team_quote">
		<div class="port-zoom-link">
			<p>
				Every women is beautiful
			</p>
		</div>
	</div>
</div>
<h2>CAROL STEPHENS</h2>
<p>
	 Make Up Artist
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

<!-- Section Testimonials
================================================== -->
<section id="testimonials">
<div class="container">
<div class="row">
	<div class="col-md-12" data-wow-delay="0.2s">
		<div class="carousel slide" data-ride="carousel" id="quote-carousel">
			<!-- Bottom Carousel Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="img/testi1.jpg" alt="">
				</li>
				<li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="img/testi2.jpg" alt="">
				</li>
			</ol>
			<!-- Carousel Slides / Quotes -->
			<div class="carousel-inner text-center">
				<!-- Quote 1 -->
				<div class="item active">
					<blockquote>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<p>
									Thanks Lavender, your services are so great, my event works well
								</p>
								<small>Pam</small>
							</div>
						</div>
					</blockquote>
				</div>
				<!-- Quote 2 -->
				<div class="item">
					<blockquote>
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<p>
									It's nice to works with Lavender'
								</p>
								<small>Sinduwinarta</small>
							</div>
						</div>
					</blockquote>
				</div>
				<!-- End Quote 2 -->
			</div>
			<!-- Carousel Buttons Next/Prev -->
			<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
			<a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
		</div>
	</div>
</div>
</div>
</section>

<!-- Section Fun Facts
================================================== -->
<section id="funfacts" class="parallax parallax-image" style="background-image:url(img/fun.jpg);">
<div class="wrapsection">
<div class="container">
	<div class="parallax-content">
		<div class="row">
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<i class="fa fa-tint"></i>
					</div>
					<h2 class="counter" data-from="0" data-to="294" data-speed="2500"></h2>
					<h4>Happy Clients</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<i class="fa fa-trophy"></i>
					</div>
					<h2 class="counter" data-from="0" data-to="163" data-speed="2500"></h2>
					<h4>Awards Received</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<i class="fa fa-send-o"></i>
					</div>
					<h2 class="counter" data-from="0" data-to="317" data-speed="2500"></h2>
					<h4>Letters Sent</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<i class="fa fa-user"></i>
					</div>
					<h2 class="counter" data-from="0" data-to="458" data-speed="2500"></h2>
					<h4>Hired People</h4>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Portfolio
================================================== -->
<section id="portfolio">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading"><b>PORTFOLIO</b></h2>
		<hr class="primary">
		<br/>
	</div>
</div>
</div>
<div class="container-fluid">
<div class="row no-gutter">
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
		<img src="img/porto1.jpg" class="img-responsive" alt="">
		<div class="portfolio-box-caption">
			<div class="portfolio-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					 Prewedding
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
		<img src="img/porto2.jpg" class="img-responsive" alt="">
		<div class="portfolio-box-caption">
			<div class="portfolio-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					 Wedding
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
		<img src="img/porto3.jpg" class="img-responsive" alt="">
		<div class="portfolio-box-caption">
			<div class="portfolio-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					Prewedding
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
		<img src="img/porto4.jpg" class="img-responsive" alt="">
		<div class="portfolio-box-caption">
			<div class="portfolio-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					 Wedding
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
		<img src="img/porto5.jpg" class="img-responsive" alt="">
		<div class="portfolio-box-caption">
			<div class="portfolio-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					 Prewedding
				</div>
			</div>
		</div>
		</a>
	</div>
	<div class="col-lg-4 col-sm-6">
		<a href="#" class="portfolio-box">
		<img src="img/porto6.jpg" class="img-responsive" alt="">
		<div class="portfolio-box-caption">
			<div class="portfolio-box-caption-content">
				<div class="project-category text-faded">
					 Category
				</div>
				<div class="project-name">
					 Prewedding
				</div>
			</div>
		</div>
		</a>
	</div>
</div>
</div>
</section>

<!-- Section Pricing
================================================== -->
<section id="pricing" class="no-padding">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading"><STRONG>SPECIAL</STRONG> PRICING </h2>
		<hr class="primary">
		<br/>
	</div>
</div>
</div>
<div class="container">
<div class="row">
	<div class="wow-pricing-table col-md-4">
		<div class="wow-pricing">
			<div class="wow-pricing-header">
				<h5>Silver</h5>
				<div class="wow-pricing-cost">
					 Rp 6 Million
				</div>
				<div class="wow-pricing-per">
					 Family Events
				</div>
			</div>
			<div class="wow-pricing-content">
				<ul>
					<li>MuA</li>
					<li>2 photographers</li>
					<li>decoration</li>
					<li>cathering for 200px</li>
				</ul>
			</div>
			<div class="wow-pricing-button">
				<a href="#" class="wow-button buttonprice" target="_self" rel="nofollow"><span class="wow-button-inner">Sign Up</span></a>
			</div>
		</div>
	</div>
	<!-- /.col-md-4 -->
	<div class="wow-pricing-table col-md-4">
		<div class="wow-pricing featured">
			<div class="wow-pricing-header">
				<h5>Premium</h5>
				<div class="wow-pricing-cost">
					 Rp 7.5 Million
				</div>
				<div class="wow-pricing-per">
					 Prewedding
				</div>
			</div>
			<div class="wow-pricing-content">
				<ul>
					<li>Mua</li>
					<li>2 photographers</li>
					<li>1 videographers</li>
					<li>2 places</li>
				</ul>
			</div>
			<div class="wow-pricing-button">
				<a href="#" class="wow-button buttonprice" target="_self" rel="nofollow"><span class="wow-button-inner">Sign Up</span></a>
			</div>
		</div>
	</div>
	<!-- /.col-md-4 -->
	<div class="wow-pricing-table col-md-4">
		<div class="wow-pricing">
			<div class="wow-pricing-header">
				<h5>Ultim</h5>
				<div class="wow-pricing-cost">
					 Rp 11 Million
				</div>
				<div class="wow-pricing-per">
					 Wedding
				</div>
			</div>
			<div class="wow-pricing-content">
				<ul>
					<li>Mua</li>
					<li>3 photographers</li>
					<li>1 videographers</li>
					<li>decoration</li>
					<l1>cathering for 500px</l1>
				</ul>
			</div>
			<div class="wow-pricing-button">
				<a href="#" class="wow-button buttonprice" target="_self" rel="nofollow"><span class="wow-button-inner">Sign Up</span></a>
			</div>
		</div>
	</div>
	<!-- /.col-md-4 -->
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section after pricing
==================================================
<section>
<div class="equal-heights w-middle">
<div class="col-md-4 bg-primary">
	<div class="box">
		<h2>Final <b>Action</b></h2>
		<p>
			 Praesent vestibulum aenean nonummy hendrerit mauris. Cum sociis natoque penatibus.
		</p>
		<a href="#" class="btn btn-round btn-white btn-xl">Action Button</a>
	</div>
</div>
<div class="col-md-4" style="height: 337px;">
	<img src="https://s3-eu-west-1.amazonaws.com/layanademo/cat.jpg" alt="">
</div>
<div class="col-md-4 bg-dark">
	<div class="box">
		<h2><b>Convinced</b> Yet</h2>
		<p>
			 The simplest acts of kindness are by far more powerful then a thousand heads bowing in prayer. Let us not forget that the real solution lies in a world in which charity will be unnecessary.
		</p>
	</div>
</div>
</div>
</section>
<div class="clearfix">
</div>
-->

<!-- Section Timeline
================================================== -->
<section id="tline">
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
		<ul class="tline-holder">
			<!-- tline ITEM-->
			<li class="tline-item-left wow fadeInLeft">
			<div class="tline-item-content">
				<div class="date-icon fa fa-rocket">
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
			</li>
			<!-- /tline-->
			<!-- tline-->
			<li class="tline-item-right wow fadeInRight">
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
			</li>
			<!-- /tline-->
			<!-- tline-->
			<li class="tline-item-left wow fadeInLeft">
			<div class="tline-item-content">
				<div class="date-icon fa fa-user">
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
			</li>
			<!-- /tline-->
			<!-- tline-->
			<li class="tline-item-right wow fadeInRight">
			<div class="tline-item-content">
				<div class="date-icon fa fa-bullhorn">
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
			</li>
			<!-- /tline-->
			<li class="tline-start">
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
</section>

<!-- Section Social
================================================== -->
<section id="social" class="parallax parallax-image" style="background-image:url(img/social.jpg);">
<div class="overlay" style="background:#222;opacity:0.5;">
</div>
<div class="wrapsection">
<div class="container">
	<div class="parallax-content">
		<div class="row wow fadeInLeft">
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
					<h4>Twitter</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="#"><i class="fa fa-facebook"></i></a>
					</div>
					<h4>Facebook</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="#"><i class="fa fa-google"></i></a>
					</div>
					<h4>Google</h4>
				</div>
			</div>
			<div class="col-md-3">
				<div class="funfacts text-center">
					<div class="icon">
						<a href="#"><i class="fa fa-wordpress"></i></a>
					</div>
					<h4>Blog</h4>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
<div class="clearfix">
</div>

<!-- Section Contact
================================================== -->
<section id="contact">
<div class="container">
<div class="row">
	<div class="col-md-8 col-md-offset-2 text-center">
		<h2 class="section-heading">CONTACT <b>US</b></h2>
		<hr class="primary">
		<p>
			 Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!
		</p>
		<div class="regularform">
			<div class="done">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					Your message has been sent. Thank you!
				</div>
			</div>
			<form method="post" action="contact.php" id="contactform" class="text-left">
				<input name="name" type="text" class="col-md-6 norightborder" placeholder="Your Name *">
				<input name="email" type="email" class="col-md-6" placeholder="E-mail address *">
				<textarea name="comment" class="col-md-12" placeholder="Message *"></textarea>
				<input type="submit" id="submit" class="contact submit btn btn-primary btn-xl" value="Send message">
			</form>
		</div>
	</div>
</div>
</div>
</section>

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
