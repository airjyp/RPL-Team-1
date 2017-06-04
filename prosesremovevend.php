<?php
require_once 'db_connect.php';

if($_POST) {
  $id_vendor  = $_POST['id_vendor'];

  $sql = "UPDATE vendor SET active = 0 where id_vendor = {$id_vendor}";
  if($connect->query($sql) === TRUE) {
    echo "<p>Successfully removed!</p>";
    echo "<a href='adminsuper.php'><button type='button'>Back</button></a>";
  } else {
    echo "Error removed : ".$connect->error;
  }
  $connect->close();
}
 ?>
