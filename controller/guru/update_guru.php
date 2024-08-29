<?php
include __DIR__ . "\..\db_connect.php";

$id = $_POST['id_guru'];
$nama = $_POST['nama_guru'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$image = $_FILES['gambar']['name'];
$newTmpName = $_FILES['gambar']['tmp_name'];
$folder = 'public/img/guru/';

$query_guru = mysqli_query($conn, "SELECT * FROM guru WHERE id_guru = $id");
$result = mysqli_fetch_assoc($query_guru);
$old_gambar = $folder . $result['gambar_guru'];

// Jika gambar baru di-upload
if ($image) {
  // Hapus gambar lama jika ada
  if (file_exists($old_gambar)) {
    unlink($old_gambar);
  }
  // Pindahkan gambar baru ke folder
  move_uploaded_file($newTmpName, $folder . $image);
} else {
  // Jika tidak ada gambar baru, gunakan gambar lama
  $image = $result['gambar_guru'];
}

$query = "UPDATE guru SET nama_guru = '$nama', alamat= '$alamat', no_telp = '$no_telp', gambar_guru= '$image' WHERE id_guru = $id";


$update = mysqli_query($conn, $query);

if ($update) {
  header("location: /web-sekolah/admin.php?page=guru");
}

?>