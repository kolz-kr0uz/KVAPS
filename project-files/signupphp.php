<?php 
session_start();
require_once('db.php'); 

$login = trim($_POST['login'] ?? '');
$pass = trim($_POST['pass'] ?? '');
$email = trim($_POST['email'] ?? '');

if (empty($login) || empty($pass) || empty($email)) {
    $_SESSION['msg'] = 'Заполните все поля';
    header('location: signup.php');
    exit;
}

$stmt = $conn->prepare("SELECT id FROM users WHERE login = ?"); 
$stmt->bind_param('s', $login);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $_SESSION['msg'] = 'Данный логин занят';
    header('location: signup.php');
    exit;
} else {
    $stmt = $conn->prepare("INSERT INTO users (login, email, pass) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $login, $email, $pass);
    
    if ($stmt->execute()) {
        $_SESSION['msg'] = 'Успешная регистрация';
        $_SESSION['user'] = $login;
        header('location: index_author.php');
        exit;
    } else {
        $_SESSION['msg'] = "Ошибка: " . $conn->error;
        header('location: signup.php');
        exit;
    }
}

$stmt->close();
$conn->close();
?>

