<?php

class Disjkstra {

    public function getShortestPath($source, $target, $map1)
    {
        $graph_array = $map1;
        $vertices = array();
        $neighbours = array();

        foreach ($graph_array as $edge) 
        {
            array_push($vertices, $edge[0], $edge[1]);
            $neighbours[$edge[0]][] = array("end" => $edge[1], "cost" => $edge[2]);
            $neighbours[$edge[1]][] = array("end" => $edge[0], "cost" => $edge[2]);
        }

        $vertices = array_unique($vertices);

        foreach ($vertices as $vertex) 
        {
            $dist[$vertex] = INF;
            $previous[$vertex] = NULL;
        }

        $dist[$source] = 0;
        $Q = $vertices;

        while (count($Q) > 0) 
        {
            $min = INF;
            foreach ($Q as $vertex)
            {
                if ($dist[$vertex] < $min) 
                {
                    $min = $dist[$vertex];
                    $u = $vertex;
                }
            }

            $Q = array_diff($Q, array($u));

            if ($dist[$u] == INF or $u == $target) 
            {
                break;
            }

            if (isset($neighbours[$u])) 
            {
                foreach ($neighbours[$u] as $arr) 
                {
                    $alt = $dist[$u] + $arr["cost"];
                    if ($alt < $dist[$arr["end"]]) 
                    {
                        $dist[$arr["end"]] = $alt;
                        $previous[$arr["end"]] = $u;
                    }
                }
            }
        }


        $path = array();
        $u = $target;

        while (isset($previous[$u])) 
        {
            array_unshift($path, $u);
            $u = $previous[$u];
        }

        array_unshift($path, $u);

        
        
        /*
        *
        * Build the result in the form of 
        * {
        *  'paths' => [{'ab'=>10}, {'bc'=>2}] 
        *  'cost'=> 12
        * }
        *
        */
        $pathsAndCost = array();
        for ($i =0 ; $i < sizeof($path) ; $i++) 
        {

            if (isset($path[$i+1])) 
            {
                $from = $dist[$path[$i]];
                $to = $dist[$path[$i+1]];

                $key = $path[$i] . $path[$i+1];
                $value = ($to-$from);
                array_push($pathsAndCost, array($key => $value));
            }
        }

        $size = sizeof($path)-1;
        $lastElement = $path[$size];

        $result = array('paths'=>$pathsAndCost, 'cost'=>$dist[$lastElement]);

        return $result;
    }

}

?>