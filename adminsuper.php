<?php
	include 'db_connect.php';
?>

<script language="javascript">alert("Welcome back MASTAH!!!");</script>

<!DOCTYPE html>
<html>
<title>Super Admin</title>
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
		<a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo.png" alt="logolayana"></a>
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li>
			<a class="page-scroll" href="#page-top">Home</a>
			</li>
			<li>
			<a class="page-scroll" href="#services">Services</a>
			</li>
			
			<li>
			<a href="#">Profile</a>
			</li>
			<li>
			<a href="login/logoutproses.php">Log Out</a>
			</li>

			<li>
			<a class="page-scroll" href="#testimonials">Testimony</a>
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
    <br>
    <br>
    <center><img src="img/lav.jpg" style="width:45%;" class="w3-round"><br><br>
    <center><h4><b>ADMIN</b></h4>
    <p class="w3-text-grey">SUPER</p></center>
  </div>
	<center><hr class="garisitem"></center>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-th-large fa-fw w3-margin-right"></i>DASHBOARD</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>CUSTOMER</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw w3-margin-right"></i>VENDOR</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <body id="portfolio">
    <a href="#"><img src="#" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <br>
    <br>
    <br>
    </div>
  </body>

  <div class="dashboard">
			
      <div class="w3-row-padding">
        <center>
				<center><hr class="garisitem"></center>
				<h1 id="portfolio"><b><center>S U P E R - A D M I N </center></b></h1>
				<h2 class="lobster">Dashboard</h2>
				<h6 class="righteous">General Information</h6>
				<hr class="garisitem">
        </center>

        <center><br>
				<div class="row">
					<div class="col s4">
						<div class="cmember"><br>
							<h2><i class="fa fa-users"></i></h2>
							<h5>Total Customer</h5>
							<a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding" style="color: #000;">
								<h1>
								<?php
									$query4 = mysqli_query($connect, "SELECT * FROM customer WHERE id_cust != '1' AND active = '1'");
									$hitung = mysqli_num_rows($query4);
									echo $hitung;
								?> 
							</h1></a><br>
						</div>
					</div>


					<div class="col s4">
						<div class="cpost"><br>
							<h2><i class="fa fa-user"></i></h2>
							<h5>Total Vendor</h5>
							<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding" style="color: #000;"><h2>
								<?php
				 						$query5 = mysqli_query($connect, "SELECT * FROM vendor WHERE active = '2'");
					 					$hitung2 = mysqli_num_rows($query5);
					 					echo $hitung2;
				 				?>
							</h2></a><br>
						</div>
					</div>
				</div>
			<br></center>
    </div>
	</div>
	
	<center><hr class="garisitem"> </center>


<!-- Section CUSTOMER TABLE -->
<br>
<br>
<br>
<center>
<div class="row" >
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="panel panel-default">
	<div class="panel-heading">
	<center><h3 id="about"><b>DAFTAR CUSTOMER</b></h3></center>
	</div>
			<div class="panel-body">
          <div class="table-responsive">
              <table class="tablew3-centered">
                  <thead>
<table border="1" cellspacing="5" cellpadding="6">
		<thead>
			<tr>
				<th>ID Cust</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Telephone</th>
				<th>Email</th>
				<th>Address</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM customer WHERE active = 1";
			$result = $connect->query($sql);
			if($result-> num_rows > 0) {
				while($row = $result-> fetch_assoc()) {
					echo "<tr>
						<td>".$row['id_cust']."</td>
						<td>".$row['fname_cust']."</td>
						<td>".$row['lname_cust']."</td>
						<td>".$row['telephone_cust']."</td>
						<td>".$row['email_cust']."</td>
						<td>".$row['address_cust']."</td>
						<td>".$row['username_cust']."</td>
						<td>".$row['password_cust']."</td>
						<td>
							<a href='updatecust.php?id_cust=".$row['id_cust']."'><button type='button'>Edit</button></a>
							<a href='removecust.php?id_cust=".$row['id_cust']."'><button type='button'>Remove</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='9'><center>No Data Avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</table>

	</div>
	</div>
	</div>          
	</div>
	</div>
	</center>


  <!-- Section VENDOR TABLE -->

<br>
<br>
<br>
<center>
<div class="row" >
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="panel panel-default">
	<div class="panel-heading">
	<center><h3 id="contact"><b>DAFTAR VENDOR</b></h3></center>
	</div>
          <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover w3-centered">
                  <thead>
<table border="1" cellspacing="5" cellpadding="6">
		<thead>
			<tr>
				<th>ID vendor</th>
				<th>First name</th>
				<th>Last name</th>
				<th>Telephone</th>
				<th>Email</th>
				<th>Address</th>
				<th>ID Category</th>
				<th>Amount</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM vendor WHERE active = 2";
			$result = $connect->query($sql);
			if($result-> num_rows > 0) {
				while($row = $result-> fetch_assoc()) {
					echo "<tr>
						<td>".$row['id_vendor']."</td>
						<td>".$row['fname_vendor']."</td>
						<td>".$row['lname_vendor']."</td>
						<td>".$row['telephone_vendor']."</td>
						<td>".$row['email_vendor']."</td>
						<td>".$row['address_vendor']."</td>
						<td>".$row['id_category']."</td>
						<td>".$row['amount']."</td>
						<td>".$row['username_vendor']."</td>
						<td>".$row['password_vendor']."</td>
						<td>
							<a href='updatevend.php?id_vendor=".$row['id_vendor']."'><button type='button'>Edit</button></a>
							<a href='removevend.php?id_vendor=".$row['id_vendor']."'><button type='button'>Remove</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='11'><center>No Data Avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</table>
</div>
</div>
</div>
</div>
</center>


  	
<!-- Section Footer
================================================== -->
<section class="bg-dark">
<div class="container">
<div class="row">
	<div class="col-md-10 text-center" style="margin:0 -16px">
		<h1 class="bottombrand wow flipInX">Lavender</h1>
		<p>
			a low priced event organizer
		</p>
	</div>
	<br>
	<br>
</div>
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
