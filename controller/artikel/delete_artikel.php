<?php
include __DIR__ . "\..\db_connect.php";
// include "controller/db_connect.php";

$id = $_GET['id_artikel'];
$sql = "SELECT * FROM artikel WHERE id_artikel = '$id'";

$show = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($show);

if (file_exists("public/img/artikel/" . $result['gambar'])) {
  unlink("public/img/artikel/" . $result['gambar']);
}

$query = "DELETE FROM artikel WHERE id_artikel = $id";
$result = mysqli_query($conn, $query);


header("location:/web-sekolah/admin.php?page=artikel");
