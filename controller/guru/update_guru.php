<?php
include __DIR__ . '/../db_connect.php';  // Gunakan '/' sebagai pemisah direktori

// Periksa apakah form data dan file telah diterima
if (isset($_POST['id_guru'], $_POST['nama_guru'], $_POST['alamat'], $_POST['no_telp']) && isset($_FILES['gambar'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id_guru']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama_guru']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $no_telp = mysqli_real_escape_string($conn, $_POST['no_telp']);
    
    $newimage = $_FILES['gambar']['name'];
    $newtmpname = $_FILES['gambar']['tmp_name'];
    $folder = 'public/img/guru/' . $newimage; // Tentukan folder tujuan

    // Query untuk mendapatkan data gambar lama
    $query_guru = mysqli_query($conn, "SELECT gambar_guru FROM guru WHERE id_guru = $id");
    if (!$query_guru) {
        die('Query error: ' . mysqli_error($conn));
    }

    $result = mysqli_fetch_assoc($query_guru);
    $path_gambar = 'public/img/guru/' . $result['gambar_guru'];

    if (file_exists($path_gambar)) {
      if (!$newimage) {
        $newimage = $result['gambar_guru'];
      }
    }


// Hapus gambar lama jika ada
if (file_exists($path_gambar)) {
    unlink($path_gambar);
}

    // Pindahkan gambar yang diupload
    if (move_uploaded_file($newtmpname, $folder)) {
        // Update query
        $query = "UPDATE guru SET nama_guru = '$nama', alamat = '$alamat', no_telp = '$no_telp', gambar_guru = '$newimage' WHERE id_guru = $id";

        $update = mysqli_query($conn, $query);
        
        if ($update) {
            header("Location: /web-sekolah/admin.php?page=guru");
            exit(); // Pastikan script dihentikan setelah redirect
        } else {
            echo 'Update error: ' . mysqli_error($conn);
        }
    } else {
        echo 'File upload error.';
    }
} else {
    echo 'Invalid input.';
}

?>