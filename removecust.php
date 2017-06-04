<?php
require_once 'db_connect.php';

if($_GET['id_cust']){
  $id_cust = $_GET['id_cust'];

  $sql = "SELECT * FROM customer WHERE id_cust = {$id_cust}";
  $result = $connect->query($sql);
  $data = $result->fetch_assoc();

  $connect->close();
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Remove Customer</title>
</head>
<body>

<h3>Do you really want to remove?</h3>
<form action="prosesremovecust.php" method="post">
  <input type="hidden" name="id_cust" value="<?php echo $data['id_cust']?>"/>
  <button type="submit">Yes</button>
  <a href="adminsuper.php"><button type="button">No</button></a>
</form>

</body>
</html>
