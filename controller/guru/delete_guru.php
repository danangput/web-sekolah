<?php
include __DIR__ . "\..\db_connect.php";

// get the id of the guru to be deleted from the URL parameter
$id = $_GET['id_guru'];

// fetch the image file name to be deleted before deleting the record
$sql = "SELECT * FROM guru WHERE id_guru = '$id'";

// fetch the image file name to be deleted before deleting the record
$show = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($show);

// delete the image file if it exists in the public/img/guru directory
if (file_exists("public/img/guru/" . $result['gambar_guru'])) {
  unlink("public/img/guru/" . $result['gambar_guru']);  // delete the file
}

// delete the record from the database
$query = "DELETE FROM guru WHERE id_guru = $id";
$result = mysqli_query($conn, $query);
// redirect to the admin page after deletion
header("location:/web-sekolah/admin.php?page=guru");
