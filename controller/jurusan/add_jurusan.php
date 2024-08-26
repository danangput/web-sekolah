<?php
  include __DIR__."\..\db_connect.php";

  if (isset($_POST['submit'])) {
    $nama = $_POST['nama_jurusan'];
    $gambar = "gambar.jpg";
    $deskripsi = $_POST['deskripsi'];

    $query = "INSERT INTO jurusan(nama_jurusan, gambar, deskripsi) VALUES ('$nama', '$gambar', '$deskripsi')";

    mysqli_query($conn, $query);

    header("location: /web-sekolah/admin.php?page=jurusan");
  } else {
    echo "Gagal";
  }
?>