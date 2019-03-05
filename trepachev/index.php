<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"></meta>
    <link rel="stylesheet" href="css/style.css"></link>
    <title>Learn PHP</title>
</head>

<body>

    <table>
        <tr>
    		<th>id</th>
    		<th>name</th>
    		<th>age</th>
    		<th>salary</th>
    	</tr>
        <?php
        	//Устанавливаем доступы к базе данных:
        		$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
        		$user = 'root'; //имя пользователя, по умолчанию это root
        		$password = ''; //пароль, по умолчанию пустой
        		$db_name = 'test'; //имя базы данных

        	//Соединяемся с базой данных используя наши доступы:
        		$link = mysqli_connect($host, $user, $password, $db_name);

        	//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
        		mysqli_query($link, "SET NAMES 'utf8'");
            // ===================================================================================
            // формируем инпут
                function input($name, $placeholder)
                {
                    if (isset($_POST[$name])) {
                        $value = $_POST[$name];
                    } else {
                        $value = '';
                    }

                    return '<input name="' . $name . '" value="' . $value .'" placeholder="' . $placeholder . '">';
                }
                // Сохранение нового (до получения!):
        		if (!empty($_POST)) {
        			$name = $_POST['name'];
        			$age = $_POST['age'];
        			$salary = $_POST['salary'];

        			$query = "INSERT INTO workers SET name='$name', age='$age', salary='$salary'";
        			mysqli_query($link, $query) or die(mysqli_error($link));
        		}
                // Удаление по id (до получения!):
        		if (isset($_GET['del'])) {
        			$del = $_GET['del'];
        			$query = "DELETE FROM workers WHERE id=$del";
        			mysqli_query($link, $query) or die(mysqli_error($link));
        		}

        	    //Формируем тестовый запрос:
        		$query = "SELECT * FROM workers";
                //ВСТАВИТЬ В имя_таблицы УСТАНОВИТЬ имя='Гена', возраст=30, зарплата=1000
    	        // $query = "INSERT INTO workers SET name='Гена', age=30, salary=1000";

        	    //Делаем запрос к БД, результат запроса пишем в $result:
        		$result = mysqli_query($link, $query) or die(mysqli_error($link));
                //Преобразуем то, что отдала нам база в нормальный массив PHP $data:
    		    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

                $result = '';
        		foreach ($data as $elem) {
        			$result .= '<tr>';

        			$result .= '<td>' . $elem['id'] . '</td>';
        			$result .= '<td>' . $elem['name'] . '</td>';
        			$result .= '<td>' . $elem['age'] . '</td>';
        			$result .= '<td>' . $elem['salary'] . '</td>';
                    $result .= '<td><a href="?del=' . $elem['id'] . '">удалить</a></td>';

        			$result .= '</tr>';
        		}

        		echo $result;

        	    //Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
        		// var_dump($data);
        ?>
    </table>
    <form action="" method="POST">
    	<?php echo input('name','Имя'); ?>
    	<?php echo input('age','Возраст'); ?>
    	<?php echo input('salary','Зарплата'); ?>
    	<input type="submit" value="добавить работника">
    </form>

</body>
</html>
