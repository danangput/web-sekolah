<?php
  include "controller/db_connect.php";

  $id = $_POST['id_artikel'];
  $judul = $_POST['judul_artikel'];
  $tanggal = $_POST['tanggal'];
  $gambar = "gambar.jpg";
  $deskripsi = $_POST['deskripsi'];

  $query = "UPDATE artikel SET, judul_artikel = '$judul', tanggal = '$tanggal', gambar.jpg = '$gambar', deskripsi = '$deskripsi' WHERE id_artikel = $id";

  $update = mysqli_query($conn, $query);

  // if ($update) {
  //   header("location: admin.php?page=artikel");
  // }
?>