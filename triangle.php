<?php
require_once ('shape.php');



class Triangle extends Shape{
    private $base, $height;
    function __construct($name, $base, $height){
        parent :: __construct($name);
        $this -> base = $base;
        $this -> height = $height;
    }

    public function getArea(){
        return ($this -> base * $this -> height)/2;
    }

}