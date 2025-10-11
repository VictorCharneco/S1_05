<?php

class Rectangle extends Shape implements CalculsPoligon{

     public function calculArea(): string{
         $areaRectangle = $this->ample * $this->alt;
         return "L'àrea del rectangle és de: $areaRectangle";
     }
}

?>