<?php
  include __DIR__."\..\db_connect.php";

  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = "gambar.jpg";
    $tanggal = "tanggal";

    $query = "INSERT INTO prestasi(nama, deskripsi, gambar, tanggal) VALUES ('$nama', '$deskripsi', '$gambar', '$tanggal')";

    mysqli_query($conn, $query);

    header("location: /web-sekolah/admin.php?page=prestasi");
  } else {
    echo "gagal input";
  }
?>