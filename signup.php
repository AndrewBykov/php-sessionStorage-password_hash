<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <form action="assets/registr.php" method="post">
                <h3>Регистрация</h3>
                <input type="text" name="login" id="login" placeholder="Логин">
                <label>Пароль должен быть длиной 6 символов, так же должны присутствовать (A-Z,a-z,@,#,!,$,%,^,&,*)</label>
                <input type="password" name="password" id="password" placeholder="Пароль">

                <a href="#" id="watch-pass">Увидеть пароль</a>
                <a href="#" id="generation-pass">Сгенирировать пароль</a>
                
                <input type="password" name="repeat_password" id="password-repeat" placeholder="Повторите пароль">
                <a href="/index.php" id="index-page">У вас есть аккаунта? Войти.</a>
                <?php
                    if(isset($_SESSION['message'])) {
                        echo '<p class="error" style="color: red;">'.$_SESSION['message'].'</p>';
                    } else {
                        echo "";
                    }
                    unset($_SESSION['message']);
                ?>
                <input type="submit" id="btn-registr" value="Зарегистрироваться">
            </form>
        </div>
    </div>
    <script src="js/sessionStorageForRegistr.js"></script>
    <script src="js/script.js"></script>
</body>
</html>