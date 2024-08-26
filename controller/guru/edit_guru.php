<?php
include "controller/db_connect.php";
$id = $_GET['id_guru'];
$query = "SELECT * FROM guru WHERE id_guru = '$id'";
$edit = mysqli_fetch_assoc(mysqli_query($conn, $query));

if (!$edit) {
  echo "Error: " . mysqli_error($conn);
}
?>