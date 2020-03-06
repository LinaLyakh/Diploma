<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Складистика</title>
    <!-- MDB icon -->
    <link rel="icon" href="../img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <form class="text-center border border-light p-5" method="POST">
                    <p class="h4 mb-4">Добавление товара</p>
                    <p></p>
                    <input type="text" class="form-control mb-4"
                           name="uniquenumber" placeholder="Артикуль">
                    <input type="text" class="form-control mb-4"
                           name="name" placeholder="Название товара" required>
                    <input type="text"  class="form-control mb-4"
                           name="type" placeholder="Категория" required>
                    <input type="text" class="form-control mb-4"
                           name="description" placeholder="Описание" required>
                    <input type="text" class="form-control mb-4"
                           name="weight" placeholder="Вес" >
                    <input type="text" class="form-control mb-4"
                           name="price" placeholder="Цена" required>
                    <input type="text"  class="form-control mb-4"
                           name="supplier" placeholder="Поставщик">
                    <button class="btn btn-info btn-block" type="submit">Отправить товар</button>
                </form>
                <?php
                if ($_POST){
                    $connection = new PDO("mysql:host=localhost; port=3306; dbname=projectpl_db; charset=utf8","projectpl_db", '*b1dqmH%');
                    $newuniquenumber = $_POST['uniquenumber'];
                    $newname = $_POST['name'];
                    $newtype = $_POST['type'];
                    $newdescription = $_POST['description'];
                    $newweight = $_POST['weight'];
                    $newprice = $_POST['price'];
                    $newsupplier = $_POST['supplier'];
                    $connection->query("INSERT INTO products VALUES (0,'$newuniquenumber', '$newname', '$newtype', '$newdescription', '$newweight', '$newprice', '$newsupplier')");
                }
                ?>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>