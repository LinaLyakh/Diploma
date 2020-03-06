<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Добавить поставщика</title>
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
                    <p class="h4 mb-4">Добавление поставщика</p>
                    <p></p>
                    <input type="text" class="form-control mb-4"
                           name="id" placeholder="id">
                    <input type="text" class="form-control mb-4"
                           name="cname" placeholder="Название" required>
                    <input type="text"  class="form-control mb-4"
                           name="description" placeholder="Описание" required>
                    <input type="text" class="form-control mb-4"
                           name="category" placeholder="Категория" required>
                    <input type="text" class="form-control mb-4"
                           name="volumeofsales" placeholder="Объём продаж" >
                    <input type="text" class="form-control mb-4"
                           name="minimalprice" placeholder="Минимальный заказ" required>
                    <p>
                        <button class="btn btn-info btn-block" type="submit">Добавить поставщика</button>
                        <br>
                        <button class="btn btn-info btn-block" onClick='location.href="http://lina-project.online/php/buyers.php"'>Отмена</button>

                    </p>
                </form>
                <?php
                if ($_POST){
                    $connection = new PDO("mysql:host=localhost; port=3306; dbname=projectpl_db; charset=utf8","projectpl_db", '*b1dqmH%');
                    $newid = $_POST['id'];
                    $newname = $_POST['cname'];
                    $newdescription = $_POST['description'];
                    $newcategory = $_POST['category'];
                    $newvolumeofsales = $_POST['volumeofsales'];
                    $newminimalprice = $_POST['minimalprice'];
                    $connection->query("INSERT INTO `suppliers`(`name`, `description`, `category`, `volumeofsales`, `minimalprice`) VALUES ('$newname', '$newdescription', '$newcategory', '$newvolumeofsales', '$newminimalprice')");
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