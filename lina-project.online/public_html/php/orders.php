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
    <table class="table">
      <thead class="black white-text">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Название</th>
          <th scope="col">Товар</th>
          <th scope="col">Клиент</th>
          <th scope="col">Адрес</th>
          <th scope="col">Дата доставки</th>
          <th scope="col">Цена</th>
          <th scope="col">Статус заказа</th>
        </tr>

      </thead>
      <tbody>
      <?php foreach ($all_orders as $torder){?>
        <tr>
          <th scope="row"><?=$torder["id"]?></th>
          <td><a><?=$torder["name"]?></a></td>
          <td><a><?=$torder["goods"]?></a></td>
          <td><a><?=$torder["buyer"]?></a></td>
          <td><a><?=$torder["adress"]?></a></td>
          <td><a><?=$torder["date"]?></a></td>
          <td><a><?=$torder["totalprice"]?></a></td>
          <td><a><?=$torder["status"]?></a></td>
        </tr>
        <?}?>
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