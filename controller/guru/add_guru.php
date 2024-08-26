<?php
  include __DIR__. "\..\db_connect.php";

  if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST ["no_hp"];
    $image ='image';

    mysqli_query($conn, "INSERT INTO guru(nama_guru,alamat, no_telp,gambar_guru) VALUES('$nama', '$alamat', '$no_hp','$image')");

    header("location:/web-sekolah/admin.php?page=guru");

}else {
    echo "gagal input";
}
  
?>