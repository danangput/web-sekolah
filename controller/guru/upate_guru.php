<?php
  include __DIR__. "\..\db_connect.php";

    $id = $_POST['id_guru'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST ["no_telp"];
    $image ='image';

    $query = "UPDATE guru SET nama_guru = '$nama', nama = '$alamat', alamat = '$no_telp', no_telp= '$image' WHERE id_guru = $id";

    
  $update = mysqli_query($conn, $query);

    if ($update) {
        header("location: /web-sekolah/admin.php?page=guru");
      }
  
?>