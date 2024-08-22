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
}

include "layout_admin/footer.php";

?>
