<?php
include "layout_admin/header.php";
include "layout_admin/navbar.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'dashboard';  // Default ke 'home' jika tidak ada parameter
}

switch ($page) {
    case 'artikel':
        include "view/admin/artikel/table.php";
        break;
    case 'artikel-edit':
        include "view/admin/artikel/edit.php";
        break;
    case 'artikel-tambah':
        include "view/admin/artikel/tambah.php";
        break;
    case 'jurusan':
        include "view/admin/jurusan/table.php";
        break;
    case 'jurusan-tambah':
        include "view/admin/jurusan/tambah.php";
        break;
}

include "layout_admin/footer.php";

?>
