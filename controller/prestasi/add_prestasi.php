<?php
  include __DIR__."\..\db_connect.php";

  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];

    if ($_FILES['gambar_prestasi']['name']) {
      $filename = $_FILES['gambar_prestasi']['name'];
      $tmpname = $_FILES['gambar_prestasi']['tmp_name'];
      $filesize = $_FILES['gambar_prestasi']['size'];

      if ($filesize > 1000000) {
          echo "ukuran gambar terlalu besar";
          exit();
      }
      $folder = "public/img/prestasi/". $filename;
          move_uploaded_file($tmpname, $folder);
          $gambar = $filename;
  }
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO prestasi(nama, deskripsi, gambar_prestasi, tanggal) VALUES ('$nama', '$deskripsi', '$gambar', '$tanggal')";

    mysqli_query($conn, $query);

    header("location: /web-sekolah/admin.php?page=prestasi");
  } else {
    echo "gagal input";
  }
?>