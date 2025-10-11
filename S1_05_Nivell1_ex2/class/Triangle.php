<?php

class Triangle extends Shape implements CalculsPoligon{

     public function calculArea(): string{
         $areaTriangle = ($this->ample * $this->alt) / 2;
         return "L'àrea del triangle és de: $areaTriangle";
     }
}

?>