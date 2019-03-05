<?php
    require_once("config.php");
    // Если форма авторизации отправлена...
    // if (!empty($_POST['pass']) and !empty($_POST['login'])) {
    //
    //     // Пишем логин и пароль из формы в переменные для удобства работы:
    //     $login = $_POST['login'];
    //     $pass = $_POST['password'];
    //
    //     // Формируем и отсылаем SQL запрос:
    //     $query = "SELECT * FROM users WHERE login='$login' AND password='$pass'";
    //     $result = mysqli_query($link, $query);
    //
    //     // Преобразуем ответ из БД в нормальный массив PHP:
    //     $user = mysqli_fetch_assoc($result);
    //
    //     if (!empty($user)) {
    //         // Пользователь прошел авторизацию, выполним какой-то код
    //         echo 'есть авторизация';
    //     } else {
    //         echo 'не правильный логин';
    //         // Пользователь неверно ввел логин или пароль, выполним какой-то код
    //     }
    // }


 ?>
<!-- header -->
<?php require_once("inc/header.php"); ?>
<div class="reg-cont">
    <div class="game-logo">
        <img src="img/gamelogo2.png" alt="">
    </div>
    <div class="form-block">
        <h1>Авторизация</h1>
        <form method="POST">
            <label>Логин:</label>
            <input type="text" name="login"/>
            <!-- <span id="username_error" style="color: red;"></span> -->

            <label>Пароль:</label>
            <input type="password" name="pass" value=""/>

            <div class="form-block_inner">
                <button class="form-block_btn" type="submit" name="loginSubmit">Войти</button>
            </div>
        </form>
    </div>
    <div class="greeting">
        <p>Готов продолжить приключение? Авторизуйся, если еще не зарегестрирован перейди на <a href="/warmaster/reg.php">страницу регистрации</a></p>
    </div>
</div>
<!-- footer -->
<?php require_once("inc/footer.php"); ?>
