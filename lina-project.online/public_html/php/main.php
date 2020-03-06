<?php

$data = require('menu.php'); 
//var_dump(require_once('menu.php'));

?>
<?php
$connection = new PDO("mysql:host=localhost; port=3306; dbname=projectpl_db; charset=utf8","projectpl_db", "*b1dqmH%");
$current_orders = $connection->query("SELECT * FROM currents_orders");
?>
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

  <!-- Start your project here-->
  <?= $data['menu'] ?>
  <div class="card">
    <table class="table">
      <thead class="black white-text">
        <tr>
          <th scope="col">Заказ N</th>
          <th scope="col">Заказчик</th>
          <th scope="col">Водитель</th>
          <th scope="col">Транспорт</th>
        </tr>
      </thead>
      <tbody>
        <? foreach ($current_orders as $order){?>
        <tr>
          <th scope="row"><?=$order["id"]?></th>
          <td><a><?=$order["customer"]?></a></td>
          <td><a><?=$order["driver"]?></a></td>
          <td><a><?=$order["transport"]?></a></td>
        </tr>
        <?}?>
        <tr>
          <th scope="row">2</th>
          <td><a>Якобсон</a></td>
          <td><a>Цукерберг</a></td>
          <td><a>Бычок У123АУ95</a></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td><a>Харламов</a></td>
          <td><a>Птицын</a></td>
          <td><a>ЗИЛ В001АВ999</a></td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td><a>Ян</a></td>
          <td><a>Гус</a></td>
          <td><a>А555РР77</a></td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td><a>Шнипперсон</a></td>
          <td><a>Ии</a></td>
          <td><a>123</a></td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td><a>Медведев</a></td>
          <td><a>Мишустин</a></td>
          <td><a>ЗИС 7777АА77</a></td>
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