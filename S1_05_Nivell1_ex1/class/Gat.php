<?php

class Gat extends Animal implements AnimalInterficie{
    public function soAnimal(): string{
        return "Miau, Miau";
    }
}

?>