<?php
include "db_connect.php";
session_start();
if(empty($_SESSION['status'])) {?>
  <script>document.location.href="login/login.php";</script>
<?php }

if(!empty($_SESSION['status'])){
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


<html>
<head>
 <title> Edit profil </title>


</head>
<body style = 'margin : 20px; font : 16px arial;'>

<p>Edit profil</p>

<form method="post" action='editproses1.php'>
			<table>
				<tr>
					<td>First name</td>
					<td><input type="text" name="fname_cust" required value= "<?php echo $fname_cust?>"/> </td>
				</tr>
				<tr>
					<td>Last name</td>
					<td><input type="text" name="lname_cust" required value= "<?php echo $lname_cust?>"/> </td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td><input type="number" name="telephone_cust" required value= "<?php echo $telephone_cust?>"/> </td>
				</tr>
        <tr>
					<td>Email</td>
					<td><input type="email" name="email_cust" required value= "<?php echo $email_cust?>"/> </td>
				</tr>
        <tr>
          <td>Address</td>
          <td><input type="text" name="address_cust"  value= "<?php echo $address_cust?>"/> </td>
        </tr>
        <tr>
					<td>Birthdate</td>
					<td><input type="date" name="birthdate"  value= "<?php echo $birthdate?>"/> </td>
				</tr>
        <tr>
					<td>About me</td>
					<td><input type="text" name="aboutme"  value= "<?php echo $aboutme?>"/> </td>
				</tr>
        <tr>
          <td>Avatar</td>
          <td><input type="file" name="avatar" value= "<?php echo $avatar?>"/> </td>
        </tr>
				<tr>
					<input type="hidden" name="id_cust" value="<?php echo $data['id_cust']?>"/>
					<td><input type="submit" value="Change"></td>
				</tr>
			</table>
		</form>



</body>
</html>
<?php
}
 ?>
