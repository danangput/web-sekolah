<?php
  include "controller/db_connect.php";
  $home_jurusan = mysqli_query($conn, "SELECT * FROM jurusan ORDER BY id_jurusan");
?>