<?php
include __DIR__. "\..\db_connect.php";

if(isset($_POST['submit'])){
    $judul = $_POST['judul_artikel'];
    $tanggal = $_POST['tanggal'];
    $gambar = "gambar.jpg";
    $deskripsi = $_POST['deskripsi'];

    mysqli_query($conn, "INSERT INTO artikel(judul_artikel, tanggal, gambar, deskripsi) VALUES('$judul', '$tanggal', '$gambar','$deskripsi')");

    header("location:/web-sekolah/admin.php?page=artikel");

}else {
    echo "gagal input";
}

?>