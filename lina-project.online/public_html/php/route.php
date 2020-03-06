<?php
$data = require('menu.php');
include 'deikstra.php';
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
  <div class="container">
      <h4>Построить оптимальный маршрут</h4>
      <div class="row">
          <div class="col-xl-6">
              <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a href="https://yandex.ru/maps/213/moscow/?ll=37.592416%2C55.671134&mode=routes&routes%5Bavoid%5D=tolls&rtext=55.669531%2C37.581023~55.674813%2C37.567617~55.675442%2C37.610679~55.664253%2C37.627747&rtt=auto&ruri=ymapsbm1%3A%2F%2Forg%3Foid%3D1022869393~ymapsbm1%3A%2F%2Fgeo%3Fll%3D37.568%252C55.675%26spn%3D0.001%252C0.001%26text%3D%25D0%25A0%25D0%25BE%25D1%2581%25D1%2581%25D0%25B8%25D1%258F%252C%2520%25D0%259C%25D0%25BE%25D1%2581%25D0%25BA%25D0%25B2%25D0%25B0%252C%2520%25D0%259D%25D0%25B0%25D1%2585%25D0%25B8%25D0%25BC%25D0%25BE%25D0%25B2%25D1%2581%25D0%25BA%25D0%25B8%25D0%25B9%2520%25D0%25BF%25D1%2580%25D0%25BE%25D1%2581%25D0%25BF%25D0%25B5%25D0%25BA%25D1%2582%252C%252047~ymapsbm1%3A%2F%2Forg%3Foid%3D1278487195~ymapsbm1%3A%2F%2Forg%3Foid%3D1214451177&utm_medium=mapframe&utm_source=maps&z=14.02" style="color:#eee;font-size:12px;position:absolute;top:14px;">Гудзон: как доехать на автомобиле, общественным транспортом или пешком – Яндекс.Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CKapuCZK" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>         </div>
          <div class="col-xl-6">
              <form class="text-center border border-light p-5" method="POST">
                  <!--<div class="row">
                      <p>Точка 1</p>
                      <input name="t1" type="text" value="Севастопольский проспект, 24к1" class="form-control" placeholder="">
                      <p>Точка 2</p>
                      <input name="t2" type="text" value="Нахимовский проспект, 47" class="form-control" placeholder="">
                      <p>Точка 3</p>
                      <input name="t3" type="text" value="Электролитный проезд, 7к2" class="form-control" placeholder="">
                      <p>Точка 4</p>
                      <input name="t4" type="text" value="Каширское шоссе, 14" class="form-control" placeholder="">
                  </div>-->
                  <div class="row">
                      <div class="col">
                          <p>Точка a</p>
                      </div>
                      <div class="col">
                          <p>Точка b</p>
                      </div>
                      <div class="col">
                          <p>Точка c</p>
                      </div>
                      <div class="col">
                          <p>Точка d</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <p>A</p>
                      </div>
                      <div class="col">
                          <input name="aa" type="text" class="form-control" placeholder="" disabled>
                      </div>
                      <div class="col">
                          <input id="ab" name="ab" value="" type="text" class="form-control" placeholder="">
                      </div>
                      <div class="col">
                          <input id="ac" name="ac" value="" type="text" class="form-control" placeholder="">
                      </div>
                      <div class="col">
                          <input id="ad" name="ad" value="" type="text" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <p>B</p>
                      </div>
                      <div class="col">
                          <input id="ba" name="ba" value="" type="text" class="form-control" placeholder="">
                      </div>
                      <div class="col">
                          <input type="text" name="bb"  class="form-control" placeholder=""  disabled>
                      </div>
                      <div class="col">
                          <input id="bc" name="bc" value="" type="text" class="form-control" placeholder="">
                      </div>
                      <div class="col">
                          <input id="bd" name="bd" value="" type="text" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <p>C</p>
                      </div>
                      <div class="col">
                          <input id="ca" name="ca" value="" type="text" class="form-control" placeholder="">
                      </div>
                      <div class="col">
                          <input id="cb" name="cb" value="" type="text" class="form-control" placeholder="" >
                      </div>
                      <div class="col">
                          <input type="text" name="cc" class="form-control" placeholder="" disabled>
                      </div>
                      <div class="col">
                          <input id="cd" name="cd" value="" type="text" class="form-control" placeholder="">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col">
                          <p>D</p>
                      </div>
                      <div class="col">
                          <input id="da" name="da" value="" type="text" class="form-control" placeholder="">
                      </div>
                      <div class="col">
                          <input id="db" name="db" value="" type="text" class="form-control" placeholder="">
                      </div>
                      <div class="col">
                          <input id="dc" name="dc" value="" type="text" class="form-control" placeholder="">
                      </div>
                      <div class="col">
                          <input type="text" name="dd" class="form-control" placeholder="" disabled>
                      </div>
                  </div>

                  <script type="text/javascript">
                      ab.addEventListener('input', function () {
                          ba.value = (this.value);
                      });
                      ba.addEventListener('input', function () {
                          ab.value = (this.value);
                      });
                      ac.addEventListener('input', function () {
                          ca.value = (this.value);
                      });
                      ca.addEventListener('input', function () {
                          ac.value = (this.value);
                      });
                      ad.addEventListener('input', function () {
                          da.value = (this.value);
                      });
                      da.addEventListener('input', function () {
                          ad.value = (this.value);
                      });
                      bc.addEventListener('input', function () {
                          cb.value = (this.value);
                      });
                      cb.addEventListener('input', function () {
                          bc.value = (this.value);
                      });
                      bd.addEventListener('input', function () {
                          db.value = (this.value);
                      });
                      db.addEventListener('input', function () {
                          bd.value = (this.value);
                      });
                      cd.addEventListener('input', function () {
                          dc.value = (this.value);
                      });
                      dc.addEventListener('input', function () {
                          cd.value = (this.value);
                      });
                  </script>
                  <button class="btn btn-info btn-block" type="submit">Найти оптимальный маршрут</button>
              </form>
              <?php
                if ($_POST){
                    $ab= (int)$_POST['ab'];
                    $cd= (int)$_POST['cd'];
                    $bc= (int)$_POST['bc'];
                    $ad= (int)$_POST['ad'];
                    $bd= (int)$_POST['bd'];

                }
              $routes = array();
              $routes[] = array('from'=>'a', 'to'=>'b', 'price'=>$ab);
              $routes[] = array('from'=>'c', 'to'=>'d', 'price'=>$cd);
              $routes[] = array('from'=>'b', 'to'=>'c', 'price'=>$bc);
              $routes[] = array('from'=>'a', 'to'=>'d', 'price'=>$ad);
              $routes[] = array('from'=>'b', 'to'=>'d', 'price'=>$bd);
              printShortestPath('a', 'd', $routes);
              ?>
          </div>
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