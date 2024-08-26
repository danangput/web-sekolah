<?php
  include __DIR__."\..\db_connect.php";

  $id = $_GET['id_prestasi'];
  $query = "DELETE FROM prestasi WHERE id_prestasi = $id";
  $result = mysqli_query($conn, $query);

  header("location: /web-sekolah/admin.php?page=prestasi");
?>