<?php
    $new_db_login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $new_db_password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'projectpl_db', '*b1dqmH%', 'projectpl_db');
     
    $result = $mysql->query("SELECT * FROM `register-users` WHERE `login` = '$new_db_login' AND `password` = '$new_db_password'");
    $user = $result->fetch_assoc();

    setcookie('coockie-user', $user['first_name'], time() + 3600, '/');

    $mysql->close();

    header('Location:http://lina-project.online/php/main.php');
?>