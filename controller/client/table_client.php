<?php
include "controller/db_connect.php";
$query = mysqli_query($conn, "SELECT * FROM pesan ORDER BY id_pesan");
