<?php
include __DIR__ . "\..\db_connect.php";

if (isset($_POST['submit'])) {
  $nama = $_POST['nama_jurusan'];

  if ($_FILES['gambar']['name']) {
    $filename = $_FILES['gambar']['name'];
    $tmpname = $_FILES['gambar']['tmp_name'];
    $filesize = $_FILES['gambar']['size'];

    if ($filesize > 1000000) {
      echo "ukuran gambar terlalu besar";
      exit();
    }
    $folder = "public/img/jurusan/";
    $new_filename = $filename;
    $i = 1;
    while (file_exists($folder . $new_filename)) {
        $new_filename = pathinfo($filename, PATHINFO_FILENAME) . '_' . $i . '.' . pathinfo($filename, PATHINFO_EXTENSION);
        $i++;
    }
 
    move_uploaded_file($tmpname, $folder.$new_filename);
    $gambar = $new_filename;
  }
  $deskripsi = $_POST['deskripsi'];

  $query = "INSERT INTO jurusan(nama_jurusan, gambar, deskripsi) VALUES ('$nama', '$gambar', '$deskripsi')";

  mysqli_query($conn, $query);

  header("location: /web-sekolah/admin.php?page=jurusan");
} else {
  echo "Gagal";
}
