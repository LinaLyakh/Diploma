<?php

$data = require('menu.php');

?>
<?php
$connection = new PDO("mysql:host=localhost; port=3306; dbname=projectpl_db; charset=utf8","projectpl_db", "*b1dqmH%");
$current_orders = $connection->query("SELECT * FROM currents_orders");
$current_orders = $connection->query("SELECT * FROM soc_orders");
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Новая заявка - Отслеживание и учет товара ©</title>
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
  <h2>Новые заявки</h2>

  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <h4>Заявки с портала</h4>
              <table class="table">
                  <thead class="black white-text">
                  <tr>
                      <th scope="col">Заявка N</th>
                      <th scope="col">ФИО</th>
                      <th scope="col">номер телефона</th>
                      <th scope="col">товар</th>
                      <th scope="col">кол-во</th>
                      <th scope="col">цена</th>
                      <th scope="col">физическое/юридическое лицо</th>
                      <th scope="col">эл.почта</th>
                      <th scope="col">адрес доставки</th>
                      <th scope="col">дата доставки</th>
                  </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td><a>1</a></td>
                          <td><a>Петров Евгений Михайлович</a></td>
                          <td><a>+7(923)134-22-18</a></td>
                          <td><a>Jardin Crema кофе в зернах, 1 кг (промышленная упаковка)</a></td>
                          <td><a>2</a></td>
                          <td><a>730руб.</a></td>
                          <td><a>физическое лицо</a></td>
                          <td><a>petrov2000@gmail.com</a></td>
                          <td><a>г.Москва, ул.Веселая д.3а</a></td>
                          <td><a>2020-03-11T13:00</a></td>
                      </tr>
                      <tr>
                          <td><a>1</a></td>
                          <td><a>Михайлова Людмила Ивановна</a></td>
                          <td><a>+7(921)184-12-77</a></td>
                          <td><a>Greenfield подарочный набор: 8 видов чая, 178 г (деревянная шкатулка)</a></td>
                          <td><a>2</a></td>
                          <td><a>1911руб.</a></td>
                          <td><a>физическое лицо</a></td>
                          <td><a>mihailova_l@yandex.ru</a></td>
                          <td><a>г.Москва, ул.Профсоюзная д.3</a></td>
                          <td><a>2020-03-12T12:00</a></td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
      <hr>

      <div class="row">
          <div class="col-md-12">
              <h4>Заявки из социальных сетей</h4>
              <table class="table">
                  <thead class="black white-text">
                  <tr>
                      <th scope="col">Заявка N</th>
                      <th scope="col">ФИО</th>
                      <th scope="col">номер телефона</th>
                      <th scope="col">товар</th>
                      <th scope="col">кол-во</th>
                      <th scope="col">цена</th>
                      <th scope="col">физическое/юридическое лицо</th>
                      <th scope="col">эл.почта</th>
                      <th scope="col">адрес доставки</th>
                      <th scope="col">дата доставки</th>
                  </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td><a>1</a></td>
                          <td><a>Голубев Леонид Денисович</a></td>
                          <td><a>+7(921)124-28-08</a></td>
                          <td><a>Jardin Crema кофе в зернах, 1 кг (промышленная упаковка)</a></td>
                          <td><a>5</a></td>
                          <td><a>730руб.</a></td>
                          <td><a>физическое лицо</a></td>
                          <td><a>golubev12@gmail.com</a></td>
                          <td><a>г.Москва, ул.Красная пресня, д.12</a></td>
                          <td><a>2020-03-12T12:00</a></td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>


  <div class="card">

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