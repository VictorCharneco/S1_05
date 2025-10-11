<?php
interface CalculsPoligon{
    public function calculArea():string;
}
abstract class Shape{
    protected int $ample;
    protected int $alt;

    public function __construct(int $ample, int $alt){
        $this->ample = $ample;
        $this->alt = $alt;
    }

    public function getAmple(): string{
        return "Ample: $this->ample";
    }

    public function getAltura(): string{
        return "Altura: $this->alt";
    }

    public function setAmple(int $ample): void{
        $this->ample = $ample;
    }

    public function setAlt(int $alt): void{
        $this->alt = $alt;
    }

    abstract public function calculArea(): string;

}

class Triangle extends Shape implements CalculsPoligon{

     public function calculArea(): string{
         $areaTriangle = ($this->ample * $this->alt) / 2;
         return "L'àrea del triangle és de: $areaTriangle";
     }
}

class Rectangle extends Shape implements CalculsPoligon{

     public function calculArea(): string{
         $areaRectangle = $this->ample * $this->alt;
         return "L'àrea del rectangle és de: $areaRectangle";
     }
}

$triangle1 = new Triangle(4, 8);
echo $triangle1->calculArea(); 
echo "\n";
$rectangle1 = new Rectangle(8, 18);
echo $rectangle1->calculArea();

?>