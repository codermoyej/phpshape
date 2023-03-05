<?php
require_once ('shape.php');



class Rectangle extends Shape{
    private $width, $height;
    function __construct($name, $width, $height){
        parent :: __construct($name);
        $this -> width = $width;
        $this -> height = $height;
    }

    public function getArea(){
        return ($this -> width * $this -> height);
    }

}