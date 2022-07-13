<?php

/*
Napisati implementaciju abstract klase Shape koja ima jednu metodu „draw()“ te pripadajućih klasa Circle i 
Rectangle koje nasljeđuju klasu Shape. U klasi Test instancirati objekte klasa Circle i Rectangle te 
pozvati metodu „draw()“. (draw metoda treba samo na ekran ispisivati radnju npr. «Drawing circle» ili 
«Drawing rectangle»).
*/

abstract class Shape{
    abstract function draw();
}

class Circle extends Shape{
    public function draw(){
        echo "Drawing Circle...<br/>";
    }
}

class Rectangle extends Shape{
    public function draw(){
        echo "Drawing Rectangle...<br/>";
    }
}

$circle = new Circle();
$circle->draw();

$rectangle = new Rectangle();
$rectangle->draw();

?>