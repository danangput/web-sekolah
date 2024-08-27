<?php
include __DIR__. "\..\db_connect.php";

if(isset($_POST['submit'])){
    $judul = $_POST['judul_artikel'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    if ($_FILES['gambar']['name']) {
        $filename = $_FILES['gambar']['name'];
        $tmpname = $_FILES['gambar']['tmp_name'];
        $filesize = $_FILES['gambar']['size'];

        if ($filesize > 1000000) {
            echo "ukuran gambar terlalu besar";
            exit();
        }
        $folder = "public/img/artikel/". $filename;
            move_uploaded_file($tmpname, $folder);
            $gambar = $filename;
    }

    mysqli_query($conn, "INSERT INTO artikel(judul_artikel, tanggal, gambar, deskripsi) VALUES('$judul', '$tanggal', '$gambar','$deskripsi')");

    header("location: /web-sekolah/admin.php?page=artikel");

}else {
    echo "gagal input";
}

?>