<?php
  include "controller/db_connect.php";
  $query = mysqli_query($conn, "SELECT * FROM prestasi ORDER BY id_prestasi LIMIT 6");
?>