<?php
  include "controller/db_connect.php";
  $query = mysqli_query($conn, "SELECT * FROM jurusan ORDER BY id_jurusan");
?>