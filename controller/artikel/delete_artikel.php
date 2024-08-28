<?php
include __DIR__ . "\..\db_connect.php";
$id = $_GET['id_artikel'];
$query = "DELETE FROM artikel WHERE id_artikel = $id";
$result = mysqli_query($conn, $query);


header("location:/web-sekolah/admin.php?page=artikel");

?>