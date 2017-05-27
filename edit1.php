<!DOCTYPE html>
<html lang="en">
<?php
include "db_connect.php";

if(empty($_SESSION['active'])) {?>
  <script>document.location.href="login/login.php";</script>
<?php }

if(!empty($_SESSION['active'])){
    if($_SESSION['active']==1){
   $id = $_SESSION['id'];
   $query = mysqli_query($connect, "SELECT * FROM customer WHERE id_cust = '$id'");
   $data= mysqli_fetch_array($query);

$fname_cust = $data['fname_cust'];
$lname_cust = $data['lname_cust'];
$telephone_cust = $data['telephone_cust'];
$email_cust = $data['email_cust'];
$aboutme = $data['aboutme'];
$address_cust = $data['address_cust'];
$birthdate = $data['birthdate'];
$avatar = $data['avatar'];

?>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo ' ', $data['username_cust'] ?>'s Profile</title>
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
		<a class="navbar-brand page-scroll" href="index.php#page-top"><img src="img/logo.png" alt="logolayana"></a>
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
			<li> <a href="login/logoutproses.php">Logout</a> </li>
			<?php } else {
			 ?>
			<li>
			<a class="page-scroll" href="index.php#testimonials">Testimony</a>
			</li>
			<?php } } } ?>
		</ul>
	</div>



	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
</br>
</br>
        <!-- resumt -->
        <div class="panel panel-default">
               <div class="panel-heading resume-heading">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="col-xs-12 col-sm-4">
                           <figure>

                              <img class="img-circle img-responsive" alt="" src=<?php echo $data['avatar'] ?>>
                              <form name="uploader" action="updateavatar.php" method="POST" enctype="multipart/form-data">

                  <input type="file" name="avatar">

                  <button type="submit">Upload</button>
              </form>
                           </figure>


                           <div class="row">
                              <div class="col-xs-12 social-btns">
                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                    <a href="#" class="btn btn-social btn-block btn-google">
                                    <i class="fa fa-google"></i> </a>
                                 </div>
                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                    <a href="#" class="btn btn-social btn-block btn-facebook">
                                    <i class="fa fa-facebook"></i> </a>
                                 </div>
                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                    <a href="#" class="btn btn-social btn-block btn-twitter">
                                    <i class="fa fa-twitter"></i> </a>
                                 </div>
                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                    <a href="#" class="btn btn-social btn-block btn-linkedin">
                                    <i class="fa fa-linkedin"></i> </a>
                                 </div>
                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                    <a href="#" class="btn btn-social btn-block btn-github">
                                    <i class="fa fa-github"></i> </a>
                                 </div>
                                 <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                    <a href="#" class="btn btn-social btn-block btn-stackoverflow">
                                    <i class="fa fa-stack-overflow"></i> </a>
                                 </div>
                              </div>


                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-8">
                        <form method="post" action='editproses1.php'>
                           <ul class="list-group">
                              <h1><?php echo ' ', $data['username_cust'] ?>'s profile </h1>

                              <li class="list-group-item">First Name    : <br><i class="fa fa-user"></i> <input type="text" name="fname_cust" required value= "<?php echo $fname_cust?>"/> </li>
                              <li class="list-group-item">Last Name    : <br><i class="fa fa-group"></i> <input type="text" name="lname_cust" required value= "<?php echo $lname_cust?>"/> </li>
                              <li class="list-group-item">My birthday    : <br><i class="fa fa-spinner"></i> <input type="date" name="birthdate"  value= "<?php echo $birthdate?>"/> </li>
                              <li class="list-group-item">Address    : <br><i class="fa fa-home"></i> <input type="text" name="address_cust"  value= "<?php echo $address_cust?>"/> </li>
                              <li class="list-group-item">Telephone number    : <br><i class="fa fa-phone"></i> <input type="number" name="telephone_cust" required value= "<?php echo $telephone_cust?>"/> </li>
                              <li class="list-group-item">Email   : <br><i class="fa fa-envelope"></i> <input type="email" name="email_cust" required value= "<?php echo $email_cust?>"/> </li>
                              <li class="list-group-item">About me    : <br><i class="fa fa-comment"></i> <input type="text" name="aboutme"  value= "<?php echo $aboutme?>"/> </li>
                           </ul>
                           <center><input type="hidden" name="id_cust" value="<?php echo $data['id_cust']?>"/>
			        <label><input type="submit" value="Change"></label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="bs-callout bs-callout-danger">
                  <p><center>
                  </center></p>
            </div>
         </div>
        <!-- resume -->

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
