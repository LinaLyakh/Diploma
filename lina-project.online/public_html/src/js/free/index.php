<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Складистика</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Start your project here-->
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Складистика &copy;</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Диспетчер</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Новые заказы</a>
            <a class="dropdown-item" href="#">Заказы в доставке</a>
            <a class="dropdown-item" href="#">Доставлены сеголня</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Товары</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Список товаров</a>
            <a class="dropdown-item" href="#">Добавить товар</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Поставщики</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Список постащиков</a>
            <a class="dropdown-item" href="#">Добавить поставщика</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Заказы</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Список заказов</a>
            <a class="dropdown-item" href="#">Новый заказ</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Платежи</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Список оплат</a>
            <a class="dropdown-item" href="#">Добавить оплату</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Покупатели</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Список покупателей</a>
            <a class="dropdown-item" href="#">Добавить покупателя</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Транспорт</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Список водителей</a>
            <a class="dropdown-item" href="#">Добавить водителя</a>
            <a class="dropdown-item" href="#">Список автомобилей</a>
            <a class="dropdown-item" href="#">Добавить автомобиль</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Выход</a>
        </li>
		<li class="nav-item">
            <input class="form-control" type="search" placeholder="Номер заказа" aria-label="Номер заказа">
		</li>
		<li class="nav-item">
			<button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Поиск</button>
		</li>
      </ul>
      <nav class="navbar-dark default-color">
        
      </nav>

      <!-- Links -->

      <!-- Collapsible content -->

  </nav>
  <!--/.Navbar-->

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
        <tr>
          <th scope="row">1</th>
          <td><a>Борман</a></td>
          <td><a>Штирлиц</a></td>
          <td><a>Газель А777АА777</a></td>
        </tr>
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
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>

</html>