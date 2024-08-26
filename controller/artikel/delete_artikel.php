<?php 
include __DIR__. "\..\db_connect.php";
$id="";
$id = $_GET['id_artikel'];
$query = "DELETE FROM artikel WHERE id_artikel = $id";
$result = mysqli_query($conn, $query);
header("location: ".$_SERVER['PHP_SELF']."?refreshed=1");

?>