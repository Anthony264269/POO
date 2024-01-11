<?php

class Animal
{
    public function info()
    {

        echo "je suis un animal ";
    }
}

class Mammifère extends Animal{

    public function infoPlus()
    {
        echo "je suis un mammifère ";
    }
}

class Chien extends Mammifère{

    public function crie(){
        echo "j'aboie";
    }
}

$chien = new Chien();
$chien->info();
$chien->infoPlus();
$chien->crie();