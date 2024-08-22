<?php 
include "../db_connect.php";

$id = $_GET['id'];
$query = "DELETE FROM artikel WHERE id = $id";
$result = mysqli_query($conn, $query);
header("Location: admin.php?page=artikel");

?>