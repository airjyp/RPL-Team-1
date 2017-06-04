<?php
include 'db_connect.php';
if(!empty($_SESSION['active'])) {
	if($_SESSION['active']==1){
	?>
	<script>document.location.href="../profilcustomer.php";</script>
<?php }
	elseif($_SESSION['active']==2){
	?>
	<script>document.location.href="../profil.php";</script>
<?php }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Tab Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="login/css/signup1.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<!-- //js -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Lavender</title>
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<!-- Plugin CSS -->
<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style1.css" type="text/css">
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
		<a class="navbar-brand page-scroll" href="../index.php"><img src="images/logo.png" alt="logolayana"></a>
	</div>
</div>
<!-- /.container -->
</nav>

<body>
	<!-- main -->
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
		<a class="navbar-brand page-scroll" href="../index.php"><img src="images/logo.png" alt="logolayana"></a>
	</div>

	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li>
			<a class="page-scroll" href="../index.php#page-top">Home</a>
			</li>
			<li>
			<a class="page-scroll" href="../index.php#about">About</a>
			</li>
			<li>
			<a class="page-scroll" href="../index.php#services">Services</a>
			</li>
		  <li>
		  <a class="page-scroll" href="../index.php#testimonials">Testimony</a>
		  </li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
<br>
	<div class="container">
    <h1 class="well">Lavender Register</h1>
	<div class="login-form">
	<div class="sap_tabs w3ls-tabs">
	<div class="row">
			<div>
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Customer</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Vendor</span></li>
					</ul>
					<div class="clear"> </div>
					<div class="resp-tabs-container">

				<!-- SIGN UP CUSTOMER -->
				<div class="tab-0 resp-tab-content" aria-labelledby="tab_item-0">
				<div class="login-agileits-top">
				<form action="prosessignup1.php" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" name="fname_cust" placeholder="Your first name" required minlength="3" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" name="lname_cust" placeholder="Last Name - Optional" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>Username</label>
								<input type="text" name="username_cust" placeholder="Username" required minlength="6" class="form-control">
							</div>
							<div class="col-sm-12 form-group">
								<label>Password</label>
								<input type="password" name="password_cust" placeholder="Password" required minlength="8" class="form-control">
							</div>
						</div>
					<div class="form-group">
						<label>Telephone</label>
						<input type="text" onkeypress='return event.charCode >=48 && event.charCode <= 57' maxlength="12" name="telephone_cust" placeholder="Telephone" required minlength="10" class="form-control">

					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email_cust" placeholder="Email" required class="form-control">
						<br>
						<input type="submit" value="SIGNUP As Customer">
					</div>
				</form>
				</div>
	</div>
	</div>

						<!-- SIGN UP VENDOR -->
						<div class="tab-0 resp-tab-content" aria-labelledby="tab_item-1">
				<div class="login-agileits-top">
				<form action="prosessignup2.php" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" name="fname_vendor" placeholder="Your first name" required minlength="3" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" name="lname_vendor" placeholder="Last Name - Optional" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 form-group">
								<label>Username</label>
								<input type="text" name="username_vendor" placeholder="Username" required minlength="6" class="form-control">
							</div>
							<div class="col-sm-12 form-group">
								<label>Password</label>
								<input type="password" name="password_vendor" placeholder="Password" required minlength="8" class="form-control">
							</div>
						</div>
					<div class="form-group">
						<label>Telephone</label>
						<input type="text" onkeypress='return event.charCode >=48 && event.charCode <= 57' maxlength="12" name="telephone_vendor" placeholder="Telephone" required minlength="10" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email_vendor" placeholder="Email" required class="form-control">
						<br>
						<input type="submit" value="SIGNUP As Vendor">
					</div>
				</form>
				</div>
	</div>
	</div>

			<!-- ResponsiveTabs js -->
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
			<!-- //ResponsiveTabs js -->
		</div>
	</div>
	<!-- //main -->
</div>
</div>
</section>
</body>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/contact.js"></script>
<script src="js/countto.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/common.js"></script>
</html>
