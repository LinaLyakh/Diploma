<?php
    $name = filter_var(trim($_POST['name-of-product']), FILTER_SANITIZE_STRING);
    $type = filter_var(trim($_POST['type-of-product']), FILTER_SANITIZE_STRING);
    $size = filter_var(trim($_POST['size-of-product']), FILTER_SANITIZE_STRING);
    $unique_number = filter_var(trim($_POST['unique-number-of-product']), FILTER_SANITIZE_STRING);

    if(mb_strlen($name) < 2 || mb_strlen($name) > 90){
        echo "Недопустимая длина Имени!";
        exit();
    }
    else if(mb_strlen($type) < 2 || mb_strlen($type) > 90){
        echo "Недопустимый тип продукта!";
        exit();
    }
    else if(mb_strlen($size) < 2 || mb_strlen($size) > 90){
        echo "Недопустимый размер продукта!";
        exit();
    }
    else if(mb_strlen($unique_number) != 9){
        echo "Номер не соответствует логистическому номеру продукции!";
        exit();
    }

    $mysql = new mysqli('localhost', 'root', '', 'lina_project');
    $mysql->query("INSERT INTO `list-of-products` (`name`, `type`, `size`, `unique-number`)
    VALUES('$name', '$type', '$size', '$unique_number')");
    
    $mysql->close();

    header('Location:http://localhost/lina-project/php/list-of-product.php');
?>