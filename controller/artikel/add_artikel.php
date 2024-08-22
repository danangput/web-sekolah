<?php 
include "../db_connect.php";

$judul = $_POST['judul'];
$desc = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];

$gambar = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
$folder = "../assets/images/artikel/$gambar";


move_uploaded_file($tmp, $folder);

$query = mysqli_query($conn, "INSERT INTO artikel VALUES ('', '$judul', '$desc', '$folder', '$tanggal')");

if ($query) {
    header("location: admin.php?page=artikel");
}


?>