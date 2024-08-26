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
        include "controller/artikel/table_artikel.php";
        include "view/admin/artikel/table.php";
        break;
    case 'artikel-tambah':
        include "view/admin/artikel/tambah.php";
        break;
    case 'artikel-edit':
        include "controller/artikel/edit_artikel.php";
        include "view/admin/artikel/edit.php";
        break;
    case 'jurusan':
        include "controller/jurusan/table_jurusan.php";
        include "view/admin/jurusan/table.php";
        break;
    case 'jurusan-tambah':
        // include "controller/jurusan/add_jurusan.php";
        include "view/admin/jurusan/tambah.php";
        break;
    case 'jurusan-edit':
        include "controller/jurusan/edit_jurusan.php";
        include "view/admin/jurusan/edit.php";
        break;
    case 'guru':
        include "controller/guru/tabel_guru.php";
        include "view/admin/guru/tabel.php";
        break;
    case 'guru-tambah':
        include "view/admin/guru/tambah.php";
        break;
    case 'guru-edit':
        include "controller/guru/edit_guru.php";
        include "view/admin/guru/edit.php";
        break;
    case 'prestasi':
        include "view/admin/prestasi/table.php";
        break;
    case 'prestasi-tambah':
        include "view/admin/prestasi/tambah.php";
        break;
    case 'prestasi-edit':
        include "view/admin/prestasi/edit.php";
        break;
}

include "layout_admin/footer.php";

?>
