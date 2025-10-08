<?php
abstract class Animal{
    protected $tipusAnimal;

    public function __construct(string $tipusAnimal){
        $this->tipusAnimal = $tipusAnimal;
    }

    public function getTipusAnimal(){
        return $this->tipusAnimal;
    }

    public function setTipusAnimal(string $tipusAnimal){
        $this->tipusAnimal = $tipusAnimal;
    }

    abstract public function soAnimal();

}

class Gos extends Animal{

    public function soAnimal(){
        echo "Guau, Guau";
    }
}

class Gat extends Animal{
    public function soAnimal(){
        echo "Miau, Miau";
    }
}

$gos = new Gos("Gos");
echo $gos->soAnimal();
echo "\n";
$gat = new Gat("Gat");
echo $gat->soAnimal();

?>