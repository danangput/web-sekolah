<?php
include __DIR__ . "\..\db_connect.php";

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];

  $query = "INSERT INTO pesan(username, email, pesan) VALUES ('$username', '$email', '$pesan')";

  mysqli_query($conn, $query);

  header("location: /web-sekolah/index.php?page=home");
} else {
  echo "Gagal input";
}
