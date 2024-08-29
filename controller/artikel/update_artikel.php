<?php
include __DIR__ . "/../db_connect.php"; // Pastikan path relatif yang benar

// Ambil data dari form
$id = $_POST['id_artikel'];
$judul = $_POST['judul_artikel'];
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];
$image = $_FILES['gambar-artikel']['name'];
$newTmpImg = $_FILES['gambar-artikel']['tmp_name'];
$folder = 'public/img/artikel/';

$query_artikel = mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel = $id");
$result = mysqli_fetch_assoc($query_artikel);
$old_gambar = $folder . $result['gambar'];

// Jika gambar baru di-upload
if ($image) {
  // Hapus gambar lama jika ada
  if (file_exists($old_gambar)) {
    unlink($old_gambar);
  }
  // Pindahkan gambar baru ke folder
  move_uploaded_file($newTmpImg, $folder . $image);
} else {
  // Jika tidak ada gambar baru, gunakan gambar lama
  $image = $result['gambar'];
}

$query = "UPDATE artikel SET judul_artikel = '$judul', tanggal = '$tanggal', gambar = '$image', deskripsi =
'$deskripsi' WHERE id_artikel = $id";

$update = mysqli_query($conn, $query);

if($update){
  header("location: /web-sekolah/admin.php?page=artikel");
}

?>