<?php
require_once 'db_connect.php';

if($_GET['id_vendor']){
  $id_vendor = $_GET['id_vendor'];

  $sql = "SELECT * FROM vendor WHERE id_vendor = {$id_vendor}";
  $result = $connect->query($sql);
  $data = $result->fetch_assoc();

  $connect->close();
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
   <title>Remove Vendor</title>
</head>
<body>

<h3>Do you really want to remove?</h3>
<form action="prosesremovevend.php" method="post">
  <input type="hidden" name="id_vendor" value="<?php echo $data['id_vendor']?>"/>
  <button type="submit">Yes</button>
  <a href="adminsuper.php"><button type="button">No</button></a>
</form>

</body>
</html>
