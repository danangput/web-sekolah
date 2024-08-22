<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="db_sekolah";

$conn =mysqli_connect($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("koneksi gagal; " .$conn->connect_error);
}
?>