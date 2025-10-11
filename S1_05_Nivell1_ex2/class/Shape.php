<?php

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

?>