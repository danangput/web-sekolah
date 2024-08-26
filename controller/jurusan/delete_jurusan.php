<?php
  include __DIR__."\..\db_connect.php";
  $id = $_GET['id_jurusan'];
  $query = "DELETE FROM jurusan WHERE id_jurusan = $id";
  $result = mysqli_query($conn, $query);
  
  header("location: /web-sekolah/admin.php?page=jurusan");
?>