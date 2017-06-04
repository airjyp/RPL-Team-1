<?php
require_once 'db_connect.php';

if($_POST) {
  $id_cust = $_POST['id_cust'];

  $sql = "UPDATE customer SET active = 0 where id_cust = {$id_cust}";
  if($connect->query($sql) === TRUE) {
    echo "<p>Successfully removed!</p>";
    echo "<a href='adminsuper.php'><button type='button'>Back</button></a>";
  } else {
    echo "Error removed : ".$connect->error;
  }
  $connect->close();
}
 ?>
