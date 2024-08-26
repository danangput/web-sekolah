<?php
  include "controller/db_connect.php";

  $id = $_GET['id_prestasi'];
  $query = "SELECT * FROM prestasi WHERE id_prestasi = $id";
  $edit = mysqli_fetch_assoc(mysqli_query($conn, $query));
?>