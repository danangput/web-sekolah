<?php
  include __DIR__."\..\db_connect.php";

  $id = $_POST['id_prestasi'];
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $gambar = "gambar_prestasi";
  $tanggal = $_POST['tanggal'];

  $query = "UPDATE prestasi SET nama = '$nama', deskripsi = '$deskripsi', gambar_prestasi = '$gambar', tanggal = '$tanggal' WHERE id_prestasi = $id";

  $update = mysqli_query($conn, $query);

  if ($update) {
    header("location: /web-sekolah/admin.php?page=prestasi");
  }
?>