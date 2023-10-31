<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign</title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <form action="assets/sign.php" method="post">
                <h3>Авторизация</h3>
                <input type="text" name="login" id="login" placeholder="Логин">
                <input type="password" name="password" id="password" placeholder="Пароль">
                <a href="/signup.php">У вас нет аккаунта? Зарегистрироваться.</a>
                <?php
                    if(isset($_SESSION['message'])) {
                        echo '<p class="error" style="color: red;">'.$_SESSION['message'].'</p>';
                    } else {
                        echo "";
                    }
                    unset($_SESSION['message']);
                ?>
                <input type="submit" id="btn-sign" value="Войти">
            </form>
        </div>
    </div>
    <script src="js/sessionStorageForSign.js"></script>
</body>
</html>