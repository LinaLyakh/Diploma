<?php
    setcookie('coockie-user', $user['first_name'], time() - 3600, '/');
    header('Location:http://lina-project.online/');
?>