<?php
include __DIR__ . "/../db_connect.php"; // Pastikan path relatif yang benar

// Ambil data dari form
$id = $_POST['id_artikel'];
$judul = $_POST['judul_artikel'];
$tanggal = $_POST['tanggal'];
$deskripsi = $_POST['deskripsi'];

// Tentukan query untuk mendapatkan data artikel
$sql = "SELECT * FROM artikel WHERE id_artikel = '$id'";
$file = "public/img/artikel/";
$show = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($show);

// Hapus gambar lama jika ada
if ($result && isset($result['gambar']) && file_exists($file . $result['gambar'])) {
  unlink($file . $result['gambar']);
}

// Periksa apakah ada file gambar baru yang diupload
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] == 0) {
  $gambar = $_FILES['gambar']['name'];
  $tmpname = $_FILES['gambar']['tmp_name'];
  $folder = $file . $gambar;

  // Pindahkan file yang diupload ke folder tujuan
  if (move_uploaded_file($tmpname, $folder)) {
    // Update data artikel di database
    $query = "UPDATE artikel SET judul_artikel = '$judul', tanggal = '$tanggal', gambar = '$gambar', deskripsi = '$deskripsi' WHERE id_artikel = '$id'";
    $update = mysqli_query($conn, $query);

    if ($update) {
      header("Location: /web-sekolah/admin.php?page=artikel");
      exit();
    } else {
      echo "Terjadi kesalahan saat memperbarui data artikel.";
    }
  } else {
    echo "Gagal upload gambar.";
  }
} else {
  // Jika tidak ada gambar baru, update data artikel tanpa mengubah gambar
  $query = "UPDATE artikel SET judul_artikel = '$judul', tanggal = '$tanggal', deskripsi = '$deskripsi' WHERE id_artikel = '$id'";
  $update = mysqli_query($conn, $query);

  if ($update) {
    header("Location: /web-sekolah/admin.php?page=artikel");
    exit();
  } else {
    echo "Terjadi kesalahan saat memperbarui data artikel.";
  }
}
?>

// include __DIR__ . "\..\db_connect.php";

// $id = $_POST['id_artikel'];
// $judul = $_POST['judul_artikel'];
// $tanggal = $_POST['tanggal'];
// $deskripsi = $_POST['deskripsi'];

// $sql = "SELECT * FROM artikel WHERE id_artikel = '$id'";
// $show = mysqli_query($conn, $sql);
// $result = mysqli_fetch_assoc($show);

// $file = "public/img/artikel/";
// $old_image = $file . $result['gambar'];

// if (file_exists($old_image)) {
// unlink($old_image);
// }

// if ($_FILES['gambar']['error'] == 0) {
// $gambar = $_FILES['gambar']['name'];
// $tmpname = $_FILES['gambar']['tmp_name'];
// $folder = $file . $gambar;
// if (move_uploaded_file($tmpname, $folder)) {
// $query = "UPDATE artikel SET judul_artikel = '$judul', tanggal = '$tanggal', gambar = '$gambar', deskripsi = '$deskripsi' WHERE id_artikel = $id";
// $update = mysqli_query($conn, $query);
// header("location: /web-sekolah/admin.php?page=artikel");
// exit;
// } else {
// echo "Gagal upload gambar";
// }
// } else {
// $gambar = $result['gambar'];
// $query = "UPDATE artikel SET judul_artikel = '$judul', tanggal = '$tanggal', deskripsi = '$deskripsi' WHERE id_artikel = $id";
// $update = mysqli_query($conn, $query);
// header("location: /web-sekolah/admin.php?page=artikel");
// exit;
// }

// remove this line, as it's not necessary
// echo "Terdapat Kesalahan";


// include __DIR__ . "\..\db_connect.php";

// $id = $_POST['id_artikel'];
// $judul = $_POST['judul_artikel'];
// $tanggal = $_POST['tanggal'];
// $deskripsi = $_POST['deskripsi'];

// $sql = "SELECT * FROM artikel WHERE id_artikel = '$id'";

// $file = "public/img/artikel/";
// $show = mysqli_query($conn, $sql);
// $result = mysqli_fetch_assoc($show);

// if (file_exists($file . $result['gambar'])) {
// unlink($file . $result['gambar']);
// }

// if ($_FILES['gambar']['error'] == 0) {
// $gambar = $_FILES['gambar']['name'];
// $tmpname = $_FILES['gambar']['tmp_name'];
// $folder = $file . $gambar;
// if (move_uploaded_file($tmpname, $folder)) {
// $query = "UPDATE artikel SET judul_artikel = '$judul', tanggal = '$tanggal', gambar = '$gambar', deskripsi = '$deskripsi' WHERE id_artikel = $id";
// $update = mysqli_query($conn, $query);
// header("location: /web-sekolah/admin.php?page=artikel");
// } else {
// echo "Gagal upload gambar";
// }
// echo "Terdapat Kesalahan";
// }

// $query = "UPDATE artikel SET judul_artikel = '$judul', tanggal = '$tanggal', gambar = '$gambar', deskripsi = '$deskripsi' WHERE id_artikel = $id";

// $update = mysqli_query($conn, $query);

// if ($update) {
// header("location: /web-sekolah/admin.php?page=artikel");
// }