<?php
  include __DIR__."\..\db_connect.php";

  $id = $_POST['id_jurusan'];
  $nama = $_POST['nama_jurusan'];
  $gambar = "gambar";
  $deskripsi = $_POST['deskripsi'];

  $query = "UPDATE jurusan SET nama_jurusan = '$nama', gambar = '$gambar', deskripsi = '$deskripsi' WHERE id_jurusan = $id";

  $update = mysqli_query($conn, $query);

  if ($update) {
    header("location: /web-sekolah/admin.php?page=jurusan");
  }
?>