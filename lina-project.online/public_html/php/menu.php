<?php
return [
    'menu' => 
        '
    <nav class="navbar navbar-expand-lg navbar-dark primary-color">
        <a class="navbar-brand" href="main.php">Отслеживание и учет товара &copy;</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Диспетчер</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="neworder.php">Новые заявки</a>
                        <a class="dropdown-item" href="route.php">Составить маршрут</a>
                        <a class="dropdown-item" href="http://lina-project.online/php/map/">Найти кратчайший путь</a>
                     </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Товары</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="goods.php">Список товаров</a>
                        <a class="dropdown-item" href="add-product.php">Добавить товар</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Поставщики</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="suppliers.php">Список постащиков</a>
                        <a class="dropdown-item" href="add_supplier.php">Добавить поставщика</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Заказы</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="orders.php">Список заказов</a>
                        <a class="dropdown-item" href="add_order.php">Новый заказ</a>
                    </div>
                </li>
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Покупатели</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="buyers.php">Список покупателей</a>
                        <a class="dropdown-item" href="add-buyers.php">Добавить покупателя</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Транспорт</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="transport.php">Поиск водителей</a>
                        <a class="dropdown-item" href="drivers.php">Список водителей</a>
                        <a class="dropdown-item" href="#">Добавить водителя</a>
                        <a class="dropdown-item" href="cars.php">Список автомобилей</a>
                        <a class="dropdown-item" href="#">Добавить автомобиль</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="exit.php">Выход</a>
                </li>
                <!--<li class="nav-item">
                    <input class="form-control" type="search" placeholder="Номер заказа" aria-label="Номер заказа">
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Поиск</button>
                </li>-->
            </ul>
            <nav class="navbar-dark default-color">
            </nav>
    </nav>
        '
    ];
