<?php
  include __DIR__."\..\db_connect.php";

  $id = $_POST['id_jurusan'];
  $nama = $_POST['nama_jurusan'];
  $deskripsi = $_POST['deskripsi'];
  $gambar = $_FILES['gambar-jurusan']['name'];
  $newTmpImg = $_FILES['gambar-jurusan']['tmp_name'];
  $folder = 'public/img/jurusan/';

  $query_jurusan = mysqli_query($conn, "SELECT * FROM jurusan WHERE id_jurusan = $id");
  $result = mysqli_fetch_assoc($query_jurusan);
  $old_gambar = $folder . $result['gambar'];

// Jika gambar baru di-upload
if ($gambar) {
  // Hapus gambar lama jika ada
  if (file_exists($old_gambar)) {
    unlink($old_gambar);
  }
  // Pindahkan gambar baru ke folder
  move_uploaded_file($newTmpImg, $folder . $gambar);
} else {
  // Jika tidak ada gambar baru, gunakan gambar lama
  $gambar = $result['gambar'];
}

  $query = "UPDATE jurusan SET nama_jurusan = '$nama', gambar = '$gambar', deskripsi = '$deskripsi' WHERE id_jurusan = $id";

  $update = mysqli_query($conn, $query);

  if ($update) {
    header("location: /web-sekolah/admin.php?page=jurusan");
  }
?>