<?php

abstract class Animal{
    protected string $tipusAnimal;

    public function __construct(string $tipusAnimal){
        $this->tipusAnimal = $tipusAnimal;
    }

    public function getTipusAnimal() : string{
        return $this->tipusAnimal;
    }

    public function setTipusAnimal(string $tipusAnimal): void{
        $this->tipusAnimal = $tipusAnimal;
    }

    abstract public function soAnimal() :string;

}

?>