<?php
    require_once("config.php");
    $errors = [];
    if(!empty($_POST)){
      $password=$_POST['password'];
      $login = $_POST['login'];
      $confirmPass = $_POST['confirm_password'];
      // Чистим данные ввода =============================================
      $login = stripslashes($login);
      $login = htmlspecialchars($login);
      $password = stripslashes($password);
      $password = htmlspecialchars($password);
      $login = trim($login);
      $password = trim($password);
      // Проверка логина на наличие в бд =================================
      $stmt = $dbConn->prepare('SELECT * FROM users WHERE username = ?');
      try {
          $stmt->execute(array($login));
      }
      catch(PDOException $e){
          echo 'Error : '.$e->getMessage();
          exit();
      }
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      // массив ошибок ===================================================
       if (count($rows)){
            $errors[] = 'Ошибка! Такой пользователь уже существует';
       }else{
           if ($login == '') {
               $errors[] = 'Поля логина не может быть пустым';
           }
           if ($password =='') {
               $errors[] = 'Введите пароль';
           }
           if($confirmPass == "") {
               $errors[] = 'Подтвердите пароль';
           }
           if($confirmPass !== "" and $password !== $confirmPass){
               $errors[] = 'Введенные пароли не совпадают';
           }
           if(strlen($password) < 6) {
               $errors[] = 'Пароль не может быть меньше 6 символов';
           }
           if(strlen($login) > 15) {
               $errors[] = 'Логин не может быть больше 15 символов';
           }
        }
    }
    //    if (isset($_POST['login'])) {
    //        $login = $_POST['login'];
    //        if ($login == '') {
    //            unset($login);
    //            $errors[] = 'Поля логина и пароля не могут быть пустыми';
       //
    //        }
    //    }
    //    if (isset($_POST['password'])) {
    //        $password=$_POST['password'];
    //        if ($password =='') {
    //            unset($password);
    //            $errors[] = 'Поля логина и пароля не могут быть пустыми';
       //
    //        }
    //    }
    //    if (empty($login) or empty($password)){
    //     //    exit();
    //    }
    //    var_dump(mysqli_num_rows($result));
    //    if(mysqli_num_rows($result) == 0){
    //        echo 'нет такого юзера';
    //    }else{
    //         echo 'есть такой юзер';
    //    }
    //    $myrow = mysql_fetch_array($result);
    //    if (!empty($myrow['id'])) {
    //    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    //    }
    // // если такого нет, то сохраняем данные
    //    $result2 = mysql_query ("INSERT INTO users (login,password) VALUES('$login','$password')");
    //    // Проверяем, есть ли ошибки
    //    if ($result2=='TRUE')
    //    {
    //    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    //    }
    // else {
    //    echo "Ошибка! Вы не зарегистрированы.";
    //    }



?>
<!-- header -->
<?php require_once("inc/header.php"); ?>
<div class="reg-cont">
    <div class="game-logo">
        <img src="img/gamelogo2.png" alt="">
    </div>
    <div class="error-modal">
        <?php foreach ($errors as $error) :?>
            <p><?php echo $error;?></p>
        <?php endforeach; ?>
    </div>
    <div class="form-block">
        <h1>Регистрация</h1>
        <form method="POST">
            <label>Логин:</label>
            <input type="text" name="login" id="username"/>
            <span id="username_error" style="color: red;"></span>

            <label>Пароль:</label>
            <input type="password" name="password" value=""/>

            <label>Подтвердите пароль:</label>
            <input type="password" name="confirm_password" value=""/>
            <div class="form-block_inner">
                <button class="form-block_btn" type="submit" name="regSubmit">Регистрация</button>
            </div>
        </form>
    </div>
    <div class="greeting">
        <p>Добро пожаловать игрок! Чтобы начать приключение тебе нужно зарегестрироваться, если ты уже сделал это перейди по ссылке, <a href="/warmaster/login.php">чтобы авторизоваться</a></p>
    </div>
</div>
<!-- footer -->
<?php require_once("inc/footer.php"); ?>
