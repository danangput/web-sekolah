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
$old_gambar = 'public/img/guru/' . $result['gambar_guru'];

if (file_exists($old_gambar)) {
  if (!$image) {
    $image = $result['gambar_guru'];
  }
  // hapus gambar Lama
  unlink($old_gambar);
  // upload gambar baru
  move_uploaded_file($newTmpName, $folder . $image);
}

$query = "UPDATE guru SET nama_guru = '$nama', alamat= '$alamat', no_telp = '$no_telp', gambar_guru= '$image' WHERE id_guru = $id";


$update = mysqli_query($conn, $query);

if ($update) {
  header("location: /web-sekolah/admin.php?page=guru");
}

?>