<?php
define('SECURITY_CHECK', true);
session_start();

if (isset($_SESSION["isLogin"])) {
    header('Location: admin.php');
    exit;
}
include "controller/db_connect.php";

$nama= '';
$password= '';
$err= '';

if (isset($_POST['login'])) {
    $nama = $_POST['username'];
    $password = $_POST['password'];

    if ($nama == '' or $password == '') {
        $err .= "<li>Silahkan masukkan username dan password</li>";
    }
    if (empty($err)) {
        $sqli1 = "SELECT * FROM user WHERE username = '$nama'";
        $q1 = mysqli_query($conn, $sqli1);
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$nama'");
        $r1 = mysqli_fetch_array($q1);
        if (mysqli_num_rows($result) === 1) {
            if ($r1['password'] === md5($password)) {
                $_SESSION['username'] = $data['username'];
                $_SESSION['isLogin'] = true;
                header("location: admin.php");
                exit;
            } else {
                $err = true;
            }
        } else {
            $err = true;
        }
    }


    // $hash_password = hash('sha256', $password);

    // $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$nama'");

    // if( mysqli_num_rows($result) === 1 ){
    //     $loginMessage = true;
        // $row = mysqli_fetch_assoc($result);
        // if (password_verify($password, $row["password"])){
        //     $_SESSION['username'] = $data['username'];
        //     $_SESSION['isLogin'] = true;
        //     header("location: admin.php");
        // }
        // $loginMessage = true;
    // }
    // $mssg = true;
}

// $sql = "SELECT * FROM user WHERE username = '$nama' AND password = '$password'";

// $hasil = $conn->query($sql);

// if ($hasil->num_rows > 0) {
//     $data = $hasil->fetch_assoc();
//     $_SESSION['username'] = $data['username'];
//     $_SESSION['isLogin'] = true;

//     header("location: admin.php");
// } else {
//     $loginMessage = true;
// }
// $conn->close();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body style="background-image: url('public/img/bgLogin.jpeg'); background-size: cover; background-repeat: no-repeat;">
    <div class="container" style="letter-spacing: 1.5px">
        <div class="d-flex align-items-center justify-content-center min-vh-100">
            <div class="card border border-danger border-3" style="width: 50rem; padding: 5rem;
       background: rgba(128, 128, 128, 0.5)
">
                <div class="card-body">
                    <h2 class="card-title text-center text-uppercase">Login</h2>

                    <form action="" method="POST">
                        <?php
                        if ($err): ?>
                        <p>Username atau Password yang anda masukkan salah!</p>
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="inputUser" class="form-label">Username</label>
                            <input type="text" value="<?= $username ?>" class="form-control" id="inputUser"
                                name="username" required />
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="password" required />
                        </div>
                        <div class="d-flex justify-content-center gap-5">
                            <a href="http://localhost/web-sekolah/index.php?page=home" style="letter-spacing: 1.5px"
                                class="btn btn-success">
                                <i class="bi bi-house-door" style="margin-right: 2px"></i>Home
                            </a>
                            <button type="submit" class="btn btn-primary" name="login" style="letter-spacing: 1.5px">
                                <i class="bi bi-box-arrow-in-right" style="margin-right: 2px"></i> Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>