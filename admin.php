<?php


session_start();

if(!isset($_SESSION["isLogin"])) {
    header('Location: login.php');
    exit;
}

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
    case 'artikel-create':
        // include "controller/artikel/add_artikel.php";
        include "view/admin/artikel/tambah.php";
        break;
    case 'artikel-edit':
        include "controller/artikel/edit_artikel.php";
        include "view/admin/artikel/edit.php";
        break;
    case 'artikel-store':
        include "controller/artikel/add_artikel.php";
        break;
    case 'artikel-update':
        include "controller/artikel/update_artikel.php";
    case 'jurusan':
        include "controller/jurusan/table_jurusan.php";
        include "view/admin/jurusan/table.php";
        break;
    case 'jurusan-create':
        // include "controller/jurusan/add_jurusan.php";
        include "view/admin/jurusan/tambah.php";
        break;
    case 'jurusan-edit':
        include "controller/jurusan/edit_jurusan.php";
        include "view/admin/jurusan/edit.php";
        break;
    case 'jurusan-store':
        include "controller/jurusan/add_jurusan.php";
        break;
    case 'guru':
        include "controller/guru/table_guru.php";
        include "view/admin/guru/table.php";
        break;
    case 'guru-create':
        // include "controller/guru/add_guru.php";
        include "view/admin/guru/tambah.php";
        break;
    case 'guru-edit':
        include "controller/guru/edit_guru.php";
        include "view/admin/guru/edit.php";
        break;
    case 'guru-store':
        include "controller/guru/add_guru.php";
        break;
    case 'prestasi':
        include "controller/prestasi/table_prestasi.php";
        include "view/admin/prestasi/table.php";
        break;
    case 'prestasi-create':
        // include "controller/prestasi/add_prestasi.php";
        include "view/admin/prestasi/tambah.php";
        break;
    case 'prestasi-edit':
        include "controller/prestasi/edit_prestasi.php";
        include "view/admin/prestasi/edit.php";
        break;
    case 'prestasi-store':
        include "controller/prestasi/add_prestasi.php";
        break;
    case 'dashboard':
        include "dashboard.php";
        break;

}

include "layout_admin/footer.php";

?>
