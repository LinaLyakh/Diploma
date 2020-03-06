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

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <form class="text-center border border-light p-5" action="dexstra-form.php" method="POST">
                    <p class="h4 mb-4">Добавление заказа</p>
                    <p></p>
                    <input type="text" class="form-control mb-4" name="destination" placeholder="Название заказа">
                    <p>
                        <button id="btn_add" class="btn btn-info btn-block" name="button_add" type="submit">Добавить</button>
                        <?php
                        $SIZE = 6;

                        $a = array(array('1', '3', '4', '9', '5', '3'), array('11', '2', '8', '5', '3', '1'));
                        $d[$SIZE] = ''; // минимальное расстояние
                        $v[$SIZE] = ''; // посещенные вершины
                        $minindex;
                        $min;
                        $begin_index = 0;

                        for($i = 0; $i < 2; $i++){
                            for($j = 0; $j < $SIZE; $j++){
                                echo $a[$i][$j];
                                echo "<br/>";
                            }
                        }

                        for($i = 0; $i < $SIZE; $i++){
                            $d[$i] = 10000;
                            $v[$i] = 1;
                        }
                        $d[$begin_index] = 0;

                        do{
                            $minindex = 10000;
                            $min = 10000;
                            for($i = 0; $i < $SIZE; $i++){
                                if(($v[$i] == 1) && ($d[$i] < $min)){
                                    $min = $d[$i];
                                    $minindex = 1;
                                }
                            }
                            if($minindex != 10000){
                                for($i = 0; $i < $SIZE; $i++){
                                    if($a[$minindex][$i] > 0){
                                        $temp = $min + $a[$minindex][$i];
                                        if($temp < $d[$i]){
                                            $d[$i] = $temp;
                                        }
                                    }
                                }
                                $v[$minindex] = 0;
                            }
                        }while($minindex < 10000);

                        echo "Кратчайшее расстояние до вершин:";
                        for($i = 0; $i < $SIZE; $i++){
                            echo $d[$i];
                        }

                        $ver[$SIZE];
                        $end = 4;
                        $ver[0] = $end + 1;
                        $k = 1;
                        $weight = $d[$end];

                        while($end != $begin_index){
                            for($i = 0; $i < $SIZE; $i++){
                                if($a[$end][$i] != 0){
                                    $temp = $weight - $a[$end][$i];
                                    if($temp == $d[$i]){
                                        $weight = $temp;
                                        $end = $i;
                                        $ver[$k] = $i + 1;
                                        $k++;
                                    }
                                }
                            }
                        }

                        echo "Вывод кратчайшего пути";
                        for($i = $k - 1; $i >= 0; $i--){
                            echo $ver[$i];
                            return 0;
                        }
                        ?>
                    </p>
                </form>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

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