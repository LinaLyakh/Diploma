<?php
    $first_name = filter_var(trim($_POST['first-name']), FILTER_SANITIZE_STRING);
    $last_name = filter_var(trim($_POST['last-name']), FILTER_SANITIZE_STRING);
    $db_login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $db_password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $db_phone_number = filter_var(trim($_POST['phone-number']), FILTER_SANITIZE_STRING);

    if(mb_strlen($first_name) < 2 || mb_strlen($first_name) > 90){
        echo "Недопустимая длина Имени!";
        exit();
    }
    else if(mb_strlen($last_name) < 2 || mb_strlen($last_name) > 90){
        echo "Недопустимая длина Фамилии!";
        exit();
    }
    else if(mb_strlen($db_login) < 5 || mb_strlen($db_login) > 90){
        echo "Недопустимая длина Логина!";
        exit();
    }
    else if(mb_strlen($db_password) < 9 || mb_strlen($db_password) > 90){
        echo "Недопустимая длина Пароля! От 9 до 90 символов";
        exit();
    }

    $mysql = new mysqli('localhost', 'projectpl_db', '*b1dqmH%', 'projectpl_db');
    $mysql->query("INSERT INTO `register-users` (`first_name`, `last_name`, `login`, `password`, `phone_number`)
    VALUES('$first_name', '$last_name', '$db_login', '$db_password', '$db_phone_number')");
    
    $mysql->close();

    header('Location:http://lina-project.online/php/main.php');
?>
