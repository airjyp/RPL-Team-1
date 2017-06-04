<?php
include('db_connect.php');
require('config.php');

if(($_POST) & !empty($_POST)){
	$username_cust = mysqli_real_escape_string($connect, $_POST['username_cust']);
	$sql = "SELECT * FROM customer WHERE username_cust = '$username_cust'";
	$res = mysqli_query($connect, $sql);
	$count = mysqli_num_rows($res);
	if($count == 1){
		$r = mysqli_fetch_assoc($res);
		$password_cust = $r['password_cust'];
		$to = $r['email_cust'];
		$subject = "Your Recovered Password";

		$message = "Please use this password to login " . $password_cust;
		$headers = "From : lavender@event.com";
		if(mail($to, $subject, $message, $headers)){
			echo "Your Password has been sent to your email!";
		}else{
			echo "Failed to Recover your password, try again";
		}

	}else{
		echo "User name does not exists";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password in PHP & MySQL</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Forgot password</h2>
        <div class="input-group">
		  <span class="input-group-addon" id="basic-addon1">@</span>
		  <input type="text" name="username_cust" class="form-control" placeholder="Username" required>
		</div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Forgot Password</button>

      </form>
</div>
</body>
</html>
