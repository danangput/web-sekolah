<?php 
include "controller/db_connect.php";
$query = mysqli_query($conn, "SELECT * FROM guru ORDER BY id_guru DESC");

// $artikel = ["id"=>"1","judul"=>"Belajar PHP", "deskripsi"=>"Belajar PHP","tanggal"=>"2023-01-01","image"=>"gambar.jpg"];
 ?>