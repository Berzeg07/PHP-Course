<?php
    session_start();
    //Устанавливаем доступы к базе данных:
    //     $host = 'localhost'; //имя хоста, на локальном компьютере это localhost
    //     $user = 'root'; //имя пользователя, по умолчанию это root
    //     $password = ''; //пароль, по умолчанию пустой
    //     $db_name = 'warmaster'; //имя базы данных
    //
    // //Соединяемся с базой данных используя наши доступы:
    //     $link = mysqli_connect($host, $user, $password, $db_name);
    //
    // //Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
    //     mysqli_query($link, "SET NAMES 'utf8'");

        //Формируем тестовый запрос:
		// $query = "SELECT * FROM users WHERE id > 0";

	//Делаем запрос к БД, результат запроса пишем в $result:
		// $result = mysqli_query($link, $query) or die(mysqli_error($link));
		// for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		// var_dump($data);
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DBNAME", "warmaster");
    define("CHARSET", "utf8");
    define("SALT", "webDEVblog");

    $link = "mysql:host=" .HOST. "; dbname=".DBNAME."; charset=".CHARSET;
    try{
        $dbConn = new PDO($link, USER, PASSWORD);
    } catch (PDOException $e) {
        die('Подключение не удалось: ' . $e->getMessage());
    }
