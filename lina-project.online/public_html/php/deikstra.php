<?php
interface NodeInterface {
    public function connect(NodeInterface $node, $distance = 1);
    public function getConnections();
    public function getId();
    public function getPotential();
    public function getPotentialFrom();
    public function isPassed();
    public function markPassed();
    public function setPotential($potential, NodeInterface $from);
}

interface GraphInterface {
    public function add(NodeInterface $node);
    public function getNode($id);
    public function getNodes();
}

class Graph implements GraphInterface {
    protected $nodes = array();
    public function add(NodeInterface $node) {
        if (array_key_exists($node->getId(), $this->getNodes())) {
            throw new Exception('Unable to insert multiple Nodes with the same ID in a Graph');
        }
        $this->nodes[$node->getId()] = $node;
        return $this;
    }
    public function getNode($id) {
        $nodes = $this->getNodes();
        if (! array_key_exists($id, $nodes)) {
            throw new Exception("Unable to find $id in the Graph");
        }
        return $nodes[$id];
    }
    public function getNodes() {
        return $this->nodes;
    }
}

class Node implements NodeInterface {
    protected $id;
    protected $potential;
    protected $potentialFrom;
    protected $connections = array();
    protected $passed = false;
    public function __construct($id) {
        $this->id = $id;
    }
    public function connect(NodeInterface $node, $distance = 1) {
        $this->connections[$node->getId()] = $distance;
    }
    public function getDistance(NodeInterface $node) {
        return $this->connections[$node->getId()];
    }
    public function getConnections() {
        return $this->connections;
    }
    public function getId() {
        return $this->id;
    }
    public function getPotential() {
        return $this->potential;
    }
    public function getPotentialFrom() {
        return $this->potentialFrom;
    }
    public function isPassed() {
        return $this->passed;
    }
    public function markPassed() {
        $this->passed = true;
    }
    public function setPotential($potential, NodeInterface $from) {
        $potential = ( int ) $potential;
        if (! $this->getPotential() || $potential < $this->getPotential()) {
            $this->potential = $potential;
            $this->potentialFrom = $from;
            return true;
        }
        return false;
    }
}

class Dijkstra {
    protected $startingNode;
    protected $endingNode;
    protected $graph;
    protected $paths = array();
    protected $solution = false;
    public function __construct(Graph $graph) {
        $this->graph = $graph;
    }
    public function getDistance() {
        if (! $this->isSolved()) {
            throw new Exception("Cannot calculate the distance of a non-solved algorithm:\nDid you forget to call ->solve()?");
        }
        return $this->getEndingNode()->getPotential();
    }
    public function getEndingNode() {
        return $this->endingNode;
    }
    public function getLiteralShortestPath() {
        $path = $this->solve();
        $literal = '';
        foreach ( $path as $p ) {
            $literal .= "{$p->getId()} - ";
        }
        return substr($literal, 0, count($literal) - 4);
    }
    public function getShortestPath() {
        $path = array();
        $node = $this->getEndingNode();
        while ( $node->getId() != $this->getStartingNode()->getId() ) {
            $path[] = $node;
            $node = $node->getPotentialFrom();
        }
        $path[] = $this->getStartingNode();
        return array_reverse($path);
    }
    public function getStartingNode() {
        return $this->startingNode;
    }
    public function setEndingNode(Node $node) {
        $this->endingNode = $node;
    }
    public function setStartingNode(Node $node) {
        $this->paths[] = array($node);
        $this->startingNode = $node;
    }
    public function solve() {
        if (! $this->getStartingNode() || ! $this->getEndingNode()) {
            throw new Exception("Cannot solve the algorithm without both starting and ending nodes");
        }
        $this->calculatePotentials($this->getStartingNode());
        $this->solution = $this->getShortestPath();
        return $this->solution;
    }
    protected function calculatePotentials(Node $node) {
        $connections = $node->getConnections();
        $sorted = array_flip($connections);
        krsort($sorted);
        foreach ( $connections as $id => $distance ) {
            $v = $this->getGraph()->getNode($id);
            $v->setPotential($node->getPotential() + $distance, $node);
            foreach ( $this->getPaths() as $path ) {
                $count = count($path);
                if ($path[$count - 1]->getId() === $node->getId()) {
                    $this->paths[] = array_merge($path, array($v));
                }
            }
        }
        $node->markPassed();

        foreach ( $sorted as $id ) {
            $node = $this->getGraph()->getNode($id);
            if (! $node->isPassed()) {
                $this->calculatePotentials($node);
            }
        }
    }
    protected function getGraph() {
        return $this->graph;
    }
    protected function getPaths() {
        return $this->paths;
    }
    protected function isSolved() {
        return ( bool ) $this->solution;
    }
}
function printShortestPath($from_name, $to_name, $routes) {
    $graph = new Graph();
    foreach ($routes as $route) {
        $from = $route['from'];
        $to = $route['to'];
        $price = $route['price'];
        if (! array_key_exists($from, $graph->getNodes())) {
            $from_node = new Node($from);
            $graph->add($from_node);
        } else {
            $from_node = $graph->getNode($from);
        }
        if (! array_key_exists($to, $graph->getNodes())) {
            $to_node = new Node($to);
            $graph->add($to_node);
        } else {
            $to_node = $graph->getNode($to);
        }
        $from_node->connect($to_node, $price);
    }

    $g = new Dijkstra($graph);
    $start_node = $graph->getNode($from_name);
    $end_node = $graph->getNode($to_name);
    $g->setStartingNode($start_node);
    $g->setEndingNode($end_node);
    echo "Из: " . $start_node->getId() . "\n";
    echo "в: " . $end_node->getId() . "\n";
    echo "Маршрут: " . $g->getLiteralShortestPath() . "\n";
    echo "Протяженность: " . $g->getDistance() . "\n";
}

/*
$routes = array();
$routes[] = array('from'=>'a', 'to'=>'b', 'price'=>100);
$routes[] = array('from'=>'c', 'to'=>'d', 'price'=>300);
$routes[] = array('from'=>'b', 'to'=>'c', 'price'=>200);
$routes[] = array('from'=>'a', 'to'=>'d', 'price'=>900);
$routes[] = array('from'=>'b', 'to'=>'d', 'price'=>300);

printShortestPath('a', 'd', $routes);
*/
