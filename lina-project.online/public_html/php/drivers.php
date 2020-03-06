<?php

$data = require('menu.php');

?>
<?php
$connection = new PDO("mysql:host=localhost; port=3306; dbname=projectpl_db; charset=utf8","projectpl_db", '*b1dqmH%');
$all_orders = $connection->query("SELECT * FROM orders");

?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Заказы - Складистика</title>
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

  <!-- Start your project here-->
  <?= $data['menu'] ?>
  <div class="card">
      <h2>Список водителей</h2>
    <table class="table">
      <thead class="black white-text">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">ФИО</th>
          <th scope="col">Дата рождения</th>
          <th scope="col">Номер</th>
          <th scope="col">Почта</th>
          <th scope="col">Стаж (лет)</th>
          <th scope="col">Категории</th>
        </tr>

      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><a>Птицин Иван</a></td>
          <td><a>20.11.1988</a></td>
          <td><a>+7(923)112-22-37</a></td>
          <td><a>pticin@yandex.ru</a></td>
          <td><a>7</a></td>
          <td><a> B, D</a></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td><a>Мишустин Глеб</a></td>
            <td><a>20.11.1978</a></td>
            <td><a>+7(921)993-12-67</a></td>
            <td><a>mishustin@yandex.ru</a></td>
            <td><a>15</a></td>
            <td><a> B, D</a></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- End your project here-->

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