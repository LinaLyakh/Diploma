<?php

$data = require('menu.php');

?>
<?php
$connection = new PDO("mysql:host=localhost; port=3306; dbname=projectpl_db; charset=utf8","projectpl_db", '*b1dqmH%');
$all_orders = $connection->query("SELECT * FROM buyers");

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
    <style>
        .tabs {
            position: relative; /* Относительное позиционирование */
        }
        .tab, .tab-title {
            display: inline-block; /* Выстраиваем по горизонтали */
        }
        .tab input[type="radio"] { display: none; }
        .tab-title {
            background: #ccc; /* Цвет фона */
            padding: 5px 10px; /* Поля вокруг текста */
            border: 1px solid #666; /* Параметры рамки */
            border-bottom: none; /* Снизу линию убираем */
        }
        .tab-content {
            position: absolute; /* Абсолютное позиционирование */
            border: 1px solid #666; /* Параметры рамки */
            padding: 10px; /* Поля вокруг текста */
            left: 0; /* Размещаем у левого края */
            width: calc(100% - 20px); /* Ширина содержимого */
            display: none; /* Прячем вкладку */
        }
        .tab :checked + .tab-title {
            position: relative; /* Относительное позиционирование */
            background: #fff; /* Цвет фона */
            top: 1px; /* Сдвигаем вниз */
            z-index: 1; /* Отображаем поверх содержимого */
        }
        .tab :checked ~ .tab-content {
            display: block; /* Показываем активную вкладку */
        }
    </style>
</head>

<body>

  <!-- Start your project here-->
  <?= $data['menu'] ?>
  <div class="tabs">
      <div class="tab">
          <input type="radio" id="tab1" name="tab-group" checked>
          <label for="tab1" class="tab-title">Физическое лицо</label>
          <section class="tab-content">
              <div class="card">
                  <table class="table">
                      <thead class="black white-text">
                      <tr>
                          <th scope="col">Id</th>
                          <th scope="col">ФИО</th>
                          <th scope="col">Адрес</th>
                          <th scope="col">Телефон</th>
                          <th scope="col">Почта</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($all_orders as $torder){?>
                          <tr>
                              <th scope="row"><?=$torder["id"]?></th>
                              <td><a><?=$torder["first_name"]?></a></td>
                              <td><a><?=$torder["last_name"]?></a></td>
                              <td><a><?=$torder["card_number"]?></a></td>
                          </tr>
                      <?}?>
                      </tbody>
                  </table>
              </div>
          </section>
      </div>
      <div class="tab">
          <input type="radio" id="tab2" name="tab-group">
          <label for="tab2" class="tab-title">Юридическое лицо</label>
          <section class="tab-content">
              <div class="card">
                  <table class="table">
                      <thead class="black white-text">
                      <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Название фирмы</th>
                          <th scope="col">Адрес</th>
                          <th scope="col">Телефон</th>
                          <th scope="col">Почта</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($all_orders as $torder){?>
                          <tr>
                              <th scope="row"><?=$torder["id"]?></th>
                              <td><a><?=$torder["first_name"]?></a></td>
                              <td><a><?=$torder["last_name"]?></a></td>
                              <td><a><?=$torder["card_number"]?></a></td>
                          </tr>
                      <?}?>
                      </tbody>
                  </table>
              </div>
          </section>
      </div>
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