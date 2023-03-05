<?php

abstract class Shape{
    protected $name;
    function __construct($name){
        $this -> name = $name;
    }
    public function getName(){
        return $this -> name;
    }
    abstract public function getArea();
}

?>