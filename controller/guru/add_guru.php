<?php
include __DIR__ . "\..\db_connect.php";

if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $jabatan = $_POST['jabatan'];
  $alamat = $_POST['alamat'];
  $no_telp = $_POST["no_telp"];
  $deskripsi = $_POST['deskripsi'];

  if ($_FILES['gambar_guru']['name']) {
    $filename = $_FILES['gambar_guru']['name'];
    $tmpname = $_FILES['gambar_guru']['tmp_name'];
    $filesize = $_FILES['gambar_guru']['size'];

    if ($filesize > 1000000) {
        echo "ukuran gambar terlalu besar";
        exit();
    }
    $folder = "public/img/guru/";
        $new_filename = $filename;
        $i = 1;
        while (file_exists($folder . $new_filename)) {
            $new_filename = pathinfo($filename, PATHINFO_FILENAME) . '_' . $i . '.' . pathinfo($filename, PATHINFO_EXTENSION);
            $i++;
        }
        move_uploaded_file($tmpname, $folder.$new_filename);
        $gambar = $new_filename;
}

  mysqli_query($conn, "INSERT INTO guru(nama_guru,jabatan, alamat, no_telp, gambar_guru,deskripsi) VALUES('$nama','$jabatan', '$alamat', '$no_telp','$gambar','$deskripsi')");

  header("location:/web-sekolah/admin.php?page=guru");

} else {
  echo "gagal input";
}

?>