<?php
$host = "localhost"; // atau nama host dari hosting
$user = "user_sistem"; // username MySQL
$pass = "password_saya"; // password MySQL
$db   = "permohonan_db"; // nama database

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Sambungan ke pangkalan data gagal: " . mysqli_connect_error());
}
?>
