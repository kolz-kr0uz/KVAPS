<?php
$servername = "MySQL-8.0";
$username = "root";
$password = "";
$dbname = "registerUser";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
?>
