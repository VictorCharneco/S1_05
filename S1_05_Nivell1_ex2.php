<?php

abstract class Shape{
    protected $ample;
    protected $alt;

    public function __construct(int $ample, int $alt){
        $this->ample = $ample;
        $this->alt = $alt;
    }

    public function getAmple(){
        return "Ample: $this->ample";
    }

    public function getAltura(){
        return "Altura: $this->altura";
    }

    public function setAmple(int $ample){
        $this->ample = $ample;
    }

    public function setAlt(int $alt){
        $this->alt = $alt;
    }

    abstract public function calculArea();

}

class Triangle extends Shape{

     public function calculArea(){
         $areaTriangle = ($this->ample * $this->alt) / 2;
         echo "L'àrea del triangle és de: $areaTriangle";
     }
}

class Rectangle extends Shape{

     public function calculArea(){
         $areaRectangle = $this->ample * $this->alt;
         echo "L'àrea del rectangle és de: $areaRectangle";
     }
}

$triangle1 = new Triangle(4, 8);
$triangle1->calculArea(); 
echo "\n";
$rectangle1 = new Rectangle(8, 18);
$rectangle1->calculArea();

?>