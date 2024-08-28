<?php
  include "controller/db_connect.php";
  $home_jurusan = mysqli_query($conn, "SELECT * FROM jurusan ORDER BY id_jurusan LIMIT 3");
  $home_guru = mysqli_query($conn, "SELECT * FROM guru ORDER BY id_guru LIMIT 3");

?>