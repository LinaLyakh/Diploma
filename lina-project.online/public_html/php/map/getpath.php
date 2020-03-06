<?php
include('Disjkstra.php');
$connection = new PDO("mysql:host=localhost; port=3306; dbname=projectpl_db; charset=utf8","projectpl_db", '*b1dqmH%');
$sth = $connection->prepare("SELECT * FROM user WHERE id=?id");
$sth->execute(array('id' => 1));
$arResult = $sth->fetch(PDO::FETCH_ASSOC);
$map = array(
        array("a", "b", 1),
        array("a", "g", 5),
        array("a", "j", 4),
        array("b", "a", 3),
        array("b", "c", 4),
        array("b", "j", 1),
        array("c", "d", 2),
        array("c", "b", 4),
        array("c", "k", 1),
        array("d", "e", 1),
        array("d", "c", 2),
        array("d", "k", 3),
        array("e", "f", 3),
        array("e", "d", 1),
        array("e", "l", 2),
        array("f", "g", 4),
        array("f", "e", 3),
        array("f", "m", 2),
        array("g", "h", 1),
        array("g", "a", 5),
        array("g", "f", 4),
        array("h", "i", 3),
        array("h", "g", 1),
        array("h", "o", 1),
        array("i", "q", 2),
        array("i", "h", 3),
        array("i", "r", 3),
        array("j", "r", 1),
        array("j", "a", 4),
        array("j", "b", 1),
        array("k", "s", 1),
        array("k", "c", 1),
        array("k", "d", 3),
        array("l", "m", 1),
        array("l", "e", 2),
        array("l", "s", 2),
        array("m", "n", 2),
        array("m", "f", 2),
        array("m", "l", 1),
        array("n", "o", 1),
        array("n", "m", 2),
        array("n", "p", 1),
        array("o", "p", 1),
        array("o", "n", 1),
        array("p", "q", 1),
        array("p", "n", 1),
        array("p", "o", 1),
        array("q", "t", 1),
        array("q", "i", 2),
        array("q", "p", 1),
        array("r", "s", 3),
        array("r", "i", 3),
        array("r", "j", 1),
        array("r", "t", 2),
        array("s", "t", 1),
        array("s", "k", 1),
        array("s", "l", 2),
        array("s", "r", 3),
        array("t", "q", 1),
        array("t", "r", 2),
        array("t", "s", 1)
    );
    $from = $_POST['from'];
    $to = $_POST['to'];
    
    
    if (preg_match("/^[A-z]{1}$/", $from) && preg_match("/^[A-z]{1}$/", $to)) 
    {
        
        $from = strtolower($from);
        $to = strtolower($to);
        
        $Disjkstra = new Disjkstra();
        $path = $Disjkstra->getShortestPath($from, $to, $map);
        
        echo json_encode($path);    
    } 
    else 
    {
        echo 'error';
    }

    
  

?>


