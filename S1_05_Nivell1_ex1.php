<?php

interface AnimalInterficie{
    public function soAnimal(): string;
}
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

class Gos extends Animal implements AnimalInterficie{

    public function soAnimal(): string{
        return "Guau, Guau";
    }
}

class Gat extends Animal implements AnimalInterficie{
    public function soAnimal(): string{
        return "Miau, Miau";
    }
}

$gos = new Gos("Gos");
echo $gos->soAnimal();
echo "\n";
$gat = new Gat("Gat");
echo $gat->soAnimal();

?>