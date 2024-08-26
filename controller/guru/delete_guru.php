<?php 
include __DIR__. "\..\db_connect.php";
$id = $_GET['id_guru'];
$query = "DELETE FROM guru WHERE id_guru = $id";
$result = mysqli_query($conn, $query);
header("location:/web-sekolah/admin.php?page=guru");

?>