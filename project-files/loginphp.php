<?php
session_start();

require_once ('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if(empty($login) || empty($pass)) {
    $_SESSION['msg'] = 'Заполните все поля';
    header('Location: login.php');
} 
else {
    $sql = "SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $_SESSION['msg'] = 'Успешный вход'; 
            $_SESSION['user'] = $login;
            if ($login == "copp" and $pass == "password") {
                $_SESSION['admin'] = TRUE;
                header('Location: admin.php');
            } else {
                header('location: index_author.php');
            }
        }
    } else {
        $_SESSION['msg'] = 'Неверный логин или пароль'; 
        header('Location: login.php');
    }
}
?>