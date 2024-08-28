<?php
  include "controller/db_connect.php";

  $id = $_GET['id_artikel'];
  $query = "SELECT * FROM artikel WHERE id_artikel = $id";
  $detail_artikel = mysqli_fetch_assoc(mysqli_query($conn, $query));
?>