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
      <h2>Список автомобилей</h2>
    <table class="table">
      <thead class="black white-text">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Марка</th>
          <th scope="col">Модель</th>
          <th scope="col">Номер</th>
          <th scope="col">Показание одометра</th>
          <th scope="col">Обслуживание</th>
        </tr>

      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><a>MAN </a></td>
          <td><a>TGX D38 </a></td>
          <td><a>Т212ТК 750RUS</a></td>
          <td><a>32100км</a></td>
          <td><a>через 7900км</a></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td><a>Volvo </a></td>
            <td><a> FH 62RB </a></td>
            <td><a>О376ЕН 750RUS</a></td>
            <td><a>92720км</a></td>
            <td><a>через 7280км</a></td>
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