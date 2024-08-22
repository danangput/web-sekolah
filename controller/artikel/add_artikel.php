<?php 
include "../db_connect.php"; // Menyertakan file koneksi database

// Mengambil data dari form yang dikirim dengan metode POST
$judul = $_POST['judul'];
$desc = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];

// Mengambil nama file gambar dan lokasi sementara file tersebut
$gambar = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
$folder = "../assets/images/artikel/$gambar"; // Menentukan folder tempat gambar akan disimpan

// Memindahkan file gambar dari lokasi sementara ke folder tujuan
move_uploaded_file($tmp, $folder);

// Menyimpan data artikel ke dalam tabel 'artikel' di database
$query = mysqli_query($conn, "INSERT INTO artikel VALUES ('', '$judul', '$desc', '$folder', '$tanggal')");

// Jika query berhasil, redirect ke halaman admin dengan parameter 'page=artikel'
if ($query) {
    header("location: admin.php?page=artikel");
}
?>
