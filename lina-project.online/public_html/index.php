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

  <div class="container-fluid">
    <?php if(!isset($_COOKIE['coockie-user'])): ?>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
          <!-- Default form register -->
          <form class="text-center border border-light p-5" action="php/registration.php" method="POST">
            <p class="h4 mb-4">Регистрация</p>
            <div class="form-row mb-4">
              <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="first-name" placeholder="Имя">
              </div>
              <div class="col">
                <!-- Last name -->
                <input type="text" id="defaultRegisterFormLastName" class="form-control" name="last-name" placeholder="Фамилия">
              </div>
            </div>
            <!-- E-mail -->
            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" name="login" placeholder="E-mail">
            <!-- Password -->
            <input type="password" id="defaultRegisterFormPassword" class="form-control" name="password" placeholder="Пароль" aria-describedby="defaultRegisterFormPasswordHelpBlock">
            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
              Не меньше 8 символов и 1 цифры
            </small>
            <!-- Phone number -->
            <input type="text" id="defaultRegisterPhonePassword" class="form-control" name="phone-number" placeholder="Телефон" aria-describedby="defaultRegisterFormPhoneHelpBlock">
            <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
              Российский номер телефона
            </small>
            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" type="submit">Зарегистрироваться</button>
          </form>
          <!-- Default form register -->
        </div>
        <div class="col-sm-4">
          <!-- Default form login -->
          <form class="text-center border border-light p-5" action="php/auth.php" method="POST">
            <p class="h4 mb-4">Войти</p>
            <!-- Email -->
            <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" name="login" placeholder="Логин">
            <!-- Password -->
            <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" name="password" placeholder="Пароль">
            <div class="d-flex justify-content-around">
              <!-- Sign in button -->
              <button class="btn btn-info btn-block my-4" type="submit">Войти</button>
              <div>
          </form>
          <!-- Default form login -->
        </div>
        <div class="col-sm-2"></div>
      </div>
    <?php else: 
      header('Location:http://lina-project.online/');
    ?>  
    <?php endif; ?>
  </div>

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