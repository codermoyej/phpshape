<?php
require_once("shape.php");



class Circle extends Shape{
    private $radious;
    function __construct($name, $radious){
        parent :: __construct($name);
        $this -> radious = $radious;
    }

    public function getArea(){
        return pi() * sqrt($this -> radious);
    }

}