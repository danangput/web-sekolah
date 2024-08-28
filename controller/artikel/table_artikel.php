<?php
// if (!defined('SECURITY_CHECK')) {
//     die('Akses langsung tidak diizinkan.');
// }

include "controller/db_connect.php";
$query = mysqli_query($conn, "SELECT * FROM artikel ORDER BY id_artikel DESC");
?>