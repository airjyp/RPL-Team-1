<?php

require_once 'db_connect.php';

if($_GET['id_cust']){
	$id_cust = $_GET['id_cust'];
	$sql = "SELECT * FROM customer WHERE id_cust = {$id_cust} ";
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

	<form action="prosesupdatecust.php?id_cust=$data['id_cust']" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>First Name</th>
				<td><input type="text" name="fname_cust" placeholder="First Name" required value="<?php echo $data['fname_cust']?>" /></td>
			</tr>
			<tr>
				<th>Last Name</th>
				<td><input type="text" name="lname_cust" placeholder="Last Name" value="<?php echo $data['lname_cust'] ?>" /></td>
			</tr>
			<tr>
				<th>Telephone</th>
				<td><input type="text" name="telephone_cust" placeholder="Telephone" required value="<?php echo $data['telephone_cust'] ?>" /></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="email_cust" placeholder="Email" required value="<?php echo $data['email_cust'] ?>" /></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><input type="text" name="address_cust" placeholder="Address" value="<?php echo $data['address_cust']?>" /></td>
			</tr>
			<tr>
				<th>Username</th>
				<td><input type="text" name="username_cust" placeholder="Username" required value="<?php echo $data['username_cust'] ?>" /></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" name="password_cust" placeholder="Password" required value="<?php echo $data['password_cust'] ?>" /></td>
			</tr>
			<tr>
				<input type="hidden" name="id_cust" value="<?php echo $data['id_cust']?>" />
				<td><button type="submit">Save Changes</button></td>
				<td><a href="adminsuper.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>

<?php
}
?>
