<?php
  include __DIR__."\..\db_connect.php";

  $id = $_POST['id_prestasi'];
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $tanggal = $_POST['tanggal'];
  $gambar = $_FILES['gambar-prestasi']['name'];
  $newTmpName = $_FILES['gambar-prestasi']['tmp_name'];
  $folder = 'public/img/prestasi/';


  $query_prestasi = mysqli_query($conn, "SELECT * FROM prestasi WHERE id_prestasi = $id");
  $result = mysqli_fetch_assoc($query_prestasi);
  $old_gambar = $folder . $result['gambar_prestasi'];
  
  if (file_exists($old_gambar)) {
    if (!$gambar) {
      $gambar = $result['gambar_prestasi'];
    }
    unlink($old_gambar);
    move_uploaded_file($newTmpName, $folder . $gambar);
  }

  $query = "UPDATE prestasi SET nama = '$nama', deskripsi = '$deskripsi', gambar_prestasi = '$gambar', tanggal = '$tanggal' WHERE id_prestasi = $id";

  $update = mysqli_query($conn, $query);

  if ($update) {
    header("location: /web-sekolah/admin.php?page=prestasi");
  }
?>