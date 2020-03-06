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
                    <p class="h4 mb-4">Добавление клиента</p>
                    <p></p>
                    <select class="browser-default custom-select">
                        <option selected value="1">Физическое лицо</option>
                        <option value="2">Юридическое лицо</option>
                    </select>
                    <hr>
                    <input type="text" class="form-control mb-4"
                           name="first_name" placeholder="ФИО">
                    <input type="last_name" class="form-control mb-4"
                           name="number_of_card" placeholder="Адрес" required>
                    <input type="text"  class="form-control mb-4"
                           name="card_number" placeholder="Телефон" required>
                    <input type="text"  class="form-control mb-4"
                           name="card_number" placeholder="Почта" required>
                    <button class="btn btn-info btn-block" type="submit">Добавить клиента</button>
                    <button class="btn btn-info btn-block" onClick='location.href="http://lina-project.online/php/buyers.php"'>Отмена</button>
                </form>
                <?php
                if ($_POST){
                    $connection = new PDO("mysql:host=localhost; port=3306; dbname=projectpl_db; charset=utf8","projectpl_db", '*b1dqmH%');
                    $newfirstname = $_POST['first_name'];
                    $newlastname = $_POST['last_name'];
                    $newcardnumber = $_POST['card_number'];
                    $connection->query("INSERT INTO buyers VALUES ('$newfirstname', '$newlastname', '$newcardnumber')");
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