<?php

$data = require('menu.php'); 
//var_dump(require_once('menu.php'));

?>
<?php
$connection = new PDO("mysql:host=localhost; port=3306; dbname=projectpl_db; charset=utf8","projectpl_db", '*b1dqmH%');
$all_goods = $connection->query("SELECT * FROM products");

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
          <th scope="col">Id</th>
          <th scope="col">Артикуль</th>
          <th scope="col">Название</th>
          <th scope="col">Категория</th>
          <th scope="col">Описание</th>
          <th scope="col">Кол-во на складе</th>
          <th scope="col">Зарезервированно</th>
          <th scope="col">Отгружено</th>
          <th scope="col">Вес</th>
          <th scope="col">Цена</th>
          <th scope="col">Поставщик</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($all_goods as $goods){?>
        <tr>
          <th scope="row"><?=$goods["id"]?></th>
          <td><a><?=$goods["unique-number"]?></a></td>
          <td><a><?=$goods["name"]?></a></td>
          <td><a><?=$goods["category"]?></a></td>
          <td><a><?=$goods["description"]?></a></td>
          <td><a><?=$goods["quantity"]?></a></td>
          <td><a><?=$goods["reserve"]?></a></td>
          <td><a><?=$goods["shipped"]?></a></td>
          <td><a><?=$goods["weight"]?></a></td>
          <td><a><?=$goods["price"]?></a></td>
          <td><a><?=$goods["supplier"]?></a></td>
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