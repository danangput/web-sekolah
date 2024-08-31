<?php
define('SECURITY_CHECK', true);
session_start();
include "controller/db_connect.php";

$err = '';
$err1 = '';

if (isset($_POST['ubah'])) {
    $user = $_POST['username'];
    $old = $_POST['oldpass'];
    $new = $_POST['newpass'];

    $sqli = "SELECT * FROM user WHERE username = '$user'";
    $qli = mysqli_query($conn, $sqli);
    $r1 = mysqli_fetch_array($qli);
    if (mysqli_num_rows($qli) === 1) {
        if ($r1['password'] === md5($old)) {
            $enkrip = md5($new);
            mysqli_query($conn, "UPDATE user SET password = '$enkrip' WHERE username = '$user'");
            header("location: login.php");
            exit;
        } else {
            $err = true;
        }
    } else {
        $err1 = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="shortcut icon" href="public/img/logo-fav.png" type="image/x-icon">
</head>

<body>
    <div class="container-fluid" style="background: linear-gradient(to bottom, black, darkblue)">
        <div class="d-flex justify-content-center align-items-center min-vh-100"">
            <div class=" card border border-white border-3" style="width: 50rem; background-color: rgba(0, 0, 0, .3); padding: 5rem">
            <div class="card-body">
                <h2 class="card-title text-white text-center text-uppercase">Edit Password</h2>
                <form class="col g-3" action="?page=ubahpass" method="POST">
                    <?php
                    if ($err1): ?>
                        <p class="text-danger">*Username yang anda masukkan salah!</p>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label for="inputEmail4" class="form-label text-white">username</label>
                        <input type="text" class="form-control" id="inputEmail4" name="username" required>
                    </div>
                    <?php
                    if ($err): ?>
                        <p class="text-danger">*Password yang anda masukkan tidak sama!</p>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label for="inputPassword4" class="form-label text-white">Old Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="oldpass" required>
                    </div>
                    <div class="mb-5">
                        <label for="inputPassword4" class="form-label text-white">New Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="newpass" required>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" name="ubah"><i class="fas fa-spinner"></i> Change password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>