<?php
include __DIR__ . "\..\db_connect.php";
// session_start();

if (isset($_POST['submit'])) {
    $judul = $_POST['judul_artikel'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    if ($_FILES['gambar']['name']) {
        $filename = $_FILES['gambar']['name'];
        $tmpname = $_FILES['gambar']['tmp_name'];
        $filesize = $_FILES['gambar']['size'];

        $max_char = 30;
        $jmlhJudul = strlen($judul);
        var_dump($jmlhJudul);

        if ($jmlhJudul > $max_char) {
            $_SESSION['execution'] = "Input melebihi jumlah character";
        }

        if ($filesize > 1000000) {
            echo "ukuran gambar terlalu besar";
            exit();
        }

        $folder = "public/img/artikel/";
        $new_filename = $filename;
        $i = 1;
        while (file_exists($folder . $new_filename)) {
            $new_filename = pathinfo($filename, PATHINFO_FILENAME) . '_' . $i . '.' . pathinfo($filename, PATHINFO_EXTENSION);
            $i++;
        }

        move_uploaded_file($tmpname, $folder . $new_filename);
        $gambar = $new_filename;
    }

    mysqli_query($conn, "INSERT INTO artikel(judul_artikel, tanggal, gambar, deskripsi) VALUES('$judul', '$tanggal', '$gambar','$deskripsi')");

    header("location: /web-sekolah/admin.php?page=artikel");
} else {
    echo "gagal input";
}
