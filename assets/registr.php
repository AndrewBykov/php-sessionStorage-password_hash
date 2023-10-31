<?php

session_start();
require 'connection.php';

$login = $_POST['login'];
$password = $_POST['password'];
$password_repeat = $_POST['repeat_password'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$checkLoginQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
$checkLoginResult = mysqli_query($connect, $checkLoginQuery);

if (mysqli_num_rows($checkLoginResult) > 0) {
    $_SESSION['message'] = 'Пользователь с таким логином уже существует';
    header('Location: /signup.php');
} else {
    if (empty($login) || empty($password) || empty($password_repeat)) {
        $_SESSION['message'] = 'Заполните все поля';
        header('Location: /signup.php');
    } elseif (strlen($password) < 6) {
        $_SESSION['message'] = 'Пароль слишком короткий';
        header('Location: /signup.php');
    } elseif (!preg_match('/[0-9]/', $password)) {
        $_SESSION['message'] = 'Пароль должен содержать цифру';
        header('Location: /signup.php');
    } elseif (!preg_match('/[A-Z]/', $password)) {
        $_SESSION['message'] = 'Пароль должен содержать заглавные буквы';
        header('Location: /signup.php');
    } elseif (!preg_match('/[a-z]/', $password)) {
        $_SESSION['message'] = 'Пароль должен содержать маленькие буквы';
        header('Location: /signup.php');
    } elseif (!preg_match('/[!@#$%^&*(){}[\];.,\/:<>?]/', $password)) {
        $_SESSION['message'] = 'Пароль должен содержать специальные символы';
        header('Location: /signup.php');
    } elseif ($password !== $password_repeat) {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: /signup.php');
    } else {
        $sql = "INSERT INTO `users` (`login`, `password`) VALUES ('$login', '$hashedPassword')";
        
        if (mysqli_query($connect, $sql)) {
            $_SESSION['message'] = 'Регистрация прошла успешно';
            header('Location: /signup.php');
        } else {
            $_SESSION['message'] = 'Произошла ошибка при добавлении пользователя в БД: ' . mysqli_error($connect);
            header('Location: /signup.php');
        }
    }
}
