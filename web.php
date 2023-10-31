<?php
    session_start();

    if (!$_SESSION['user']) {
        header('Location: /404.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style/normalize.css">
    <link rel="stylesheet" href="/style/style.css">
</head>
<body>
    <div class="container">
        <form>
            <h1>Добро пожаловать!</h1>
            <h3><?=$_SESSION['user']['name']?></h3>
            <a href="assets/logout.php" class="logout">Выйти</a>
        </form>
    </div>
</body>
</html>