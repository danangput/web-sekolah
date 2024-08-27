<?php
    session_start();

    if(isset($_SESSION["isLogin"])) {
        header('Location: admin.php');
        exit;
    }
  include "controller/db_connect.php";


  if (isset($_POST['Login'])) {
    $nama = $_POST['username'];
    $password = $_POST['password'];

    // $hash_password = hash('sha256', $password);

    $sql = "SELECT * FROM user WHERE username = '$nama' AND password = '$password'";

    $hasil = $conn->query($sql);

    if ($hasil->num_rows > 0 ) {
      $data = $hasil->fetch_assoc();
      $_SESSION['username'] = $data['username'];
      $_SESSION['isLogin'] = true;

      header("location: admin.php");
    } else {
      $loginMessage = true;
    }
    $conn->close();
  }
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

<body class="bg-secondary">
    <div class="container">
        <div class="d-flex align-items-center justify-content-center min-vh-100">
            <div class="card border border-primary" style="width: 50rem; padding: 5rem;
       background: hsla(01988, 100%, 50%, 0.3)
">
                <div class="card-body">
                    <button type="button" class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path
                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                        </svg></button>
                    <h2 class="card-title text-center text-uppercase">Login</h2>

                    <form action="login.php" method="POST">
                        <?php 
        if(isset($loginMessage)) : ?>
                        <p>Username atau Password yang anda masukkan salah!</p>
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="inputUser" class="form-label">Username</label>
                            <input type="text" class="form-control" id="inputUser" name="username" required />
                        </div>
                        <div class="mb-3">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="password" required />
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Allow Terms of Privacy</label>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <button type="submit" class="btn btn-primary" name="Login">
                                <i class="bi bi-box-arrow-in-right"></i> Login
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