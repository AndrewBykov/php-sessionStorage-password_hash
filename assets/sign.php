<?php

session_start();
require 'connection.php';

$login = $_POST['login'];
$password = $_POST['password'];

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");

if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);

    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['login']
        ];

        header('Location: /web.php');
    }
} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: /index.php');
}
