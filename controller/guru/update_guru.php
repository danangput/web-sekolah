<?php
include __DIR__ . "\..\db_connect.php";

$id = $_POST['id_guru'];
$nama = $_POST['nama_guru'];
$alamat = $_POST['alamat'];
$no_telp = $_POST["no_telp"];

$file = "public/img/guru";
$sql = "SELECT * FROM guru WHERE id_guru = '$id';";
$show = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($show);

if ($_FILES['gambar']['name']) {
  $gambar = $_FILES['gambar']['name'];
  if (file_exists($file . $result['gambar'])) {
    unlink($file . $result['gambar']);
  }
  move_uploaded_file($_FILES['gambar']['tmp_name'], $file . $_FILES['gambar']['name']);
} else {
  $gambar = $result['gambar'];
}

$query = "UPDATE guru SET nama_guru = '$nama', alamat= '$alamat', no_telp = '$no_telp', gambar_guru= '$image' WHERE id_guru = $id";

$update = mysqli_query($conn, $query);

if ($update) {
  header("location: /web-sekolah/admin.php?page=guru");
}
