<?php
include __DIR__ . "\..\db_connect.php";

$id = $_POST['id_guru'];
$nama = $_POST['nama_guru'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$image = $_FILES['gambar'];
// var_dump($image);
// die();
$query_guru = mysqli_query($conn, "SELECT * FROM guru WHERE id_guru = $id");
$result = mysqli_fetch_assoc($query_guru);
$path_gambar = 'public/img/guru/' . $result['gambar_guru'];

if (file_exists($path_gambar)) {
  echo "File already exists";
  exit();
} else {
  echo "File does not exist";
}
die();
// $image = $_FILES['image']['name'];
// $tmpname = $_FILES['image']['tmp_name'];
// move_uploaded_file($tmpname, $folder);

$query = "UPDATE guru SET nama_guru = '$nama', alamat= '$alamat', no_telp = '$no_telp', gambar_guru= '$image' WHERE id_guru = $id";


$update = mysqli_query($conn, $query);

if ($update) {
  header("location: /web-sekolah/admin.php?page=guru");
}

?>