<?php
  include "controller/db_connect.php";

  $id = $_GET['id_jurusan'];
  $query = "SELECT * FROM jurusan WHERE id_jurusan = $id";
  $jurusan = mysqli_fetch_assoc(mysqli_query($conn, $query));
?>