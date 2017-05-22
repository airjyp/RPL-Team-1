<?php

require_once 'modul/db_connect.php';

if($_GET['id_vendor']){
	$id_vendor = $_GET['id_vendor'];
	$sql = "SELECT * FROM vendor WHERE id_vendor = {$id_vendor} ";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();
	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit ME</title>

	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<fieldset>
	<legend>Edit ME</legend>

	<form action="modul/prosesupdate.php?id_vendor=$data['id_vendor']" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>First Name</th>
				<td><input type="text" name="fname_vendor" placeholder="First Name" required value="<?php echo $data['fname_vendor']?>" /></td>
			</tr>
			<tr>
				<th>Last Name</th>
				<td><input type="text" name="lname_vendor" placeholder="Last Name" value="<?php echo $data['lname_vendor'] ?>" /></td>
			</tr>
			<tr>
				<th>Telephone</th>
				<td><input type="text" name="telephone_vendor" placeholder="Telephone" required value="<?php echo $data['telephone_vendor'] ?>" /></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="email_vendor" placeholder="Email" required value="<?php echo $data['email_vendor'] ?>" /></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><input type="text" name="address_vendor" placeholder="Address" value="<?php echo $data['address_vendor']?>" /></td>
			</tr>
			<tr>
				<th>Username</th>
				<td><input type="text" name="username_vendor" placeholder="Username" required value="<?php echo $data['username_vendor'] ?>" /></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" name="password_vendor" placeholder="Password" required value="<?php echo $data['password_vendor'] ?>" /></td>
			</tr>
			<tr>
				<input type="hidden" name="id_vendor" value="<?php echo $data['id_vendor']?>" />
				<td><button type="submit">Save Changes</button></td>
				<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>

<?php
}
?>
