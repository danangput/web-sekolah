<?php
include __DIR__ . "\..\db_connect.php";
$id = $_GET['id_jurusan'];
$sql = "SELECT * FROM jurusan WHERE id_jurusan = '$id'";

$file = "public/img/jurusan/";
$show = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($show);

if (file_exists($file . $result['gambar'])) {
  unlink($file . $result['gambar']);
}

$query = "DELETE FROM jurusan WHERE id_jurusan = $id";
$result = mysqli_query($conn, $query);

header("location: /web-sekolah/admin.php?page=jurusan");
