<?php
include "layout/header.php";
include "layout/navbar.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';  // Default ke 'home' jika tidak ada parameter
}

switch ($page) {
    case 'home':
        include "view/home.php";
        break;
    case 'visi_misi':
        include "view/visi_misi.php";
        break;
    case 'jurusan':
        include "view/jurusan.php";
        break;
    case 'prestasi':
        include "controller/prestasi/prestasi_client.php";
        include "view/prestasi.php";
        break;
    case 'guru':
        include "view/guru.php";
        break;
    case 'artikel':
        include "view/artikel.php";
        break;
    case 'show_artikel':
        include "view/show_artikel.php";
        break;
    case 'infor':
        include "view/detailjurusan/infor.php";
        break;
    case 'machine':
        include "view/detailjurusan/machine.php";
        break;
    case 'analis':
        include "view/detailjurusan/analis.php";
        break;

    
}

include "layout/footer.php";

//penggunaan routing http://localhost/web-sekolah/index.php?page=visi_misi
?>