<?php
include __DIR__ . "\..\db_connect.php";

$id = $_GET['id_prestasi'];
$sql = "SELECT * FROM prestasi WHERE id_prestasi = '$id'";

$file = "public/img/prestasi/";
$show = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($show);

if (file_exists($file . $result['gambar_prestasi'])) {
  unlink($file . $result['gambar_prestasi']);
}

$query = "DELETE FROM prestasi WHERE id_prestasi = $id";
$result = mysqli_query($conn, $query);

header("location: /web-sekolah/admin.php?page=prestasi");
