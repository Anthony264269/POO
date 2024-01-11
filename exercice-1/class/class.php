<?php

class Formule1
{
    private $speed = 0;



    public function drive()
    {

        echo "Vroom vroom" . " " .  $this->speed . " " . 'km/h';
    }
    public function shiftGear($speed)
    {
        $this->speed += $speed;
    }
}
$myFormule1 = new Formule1();
$myFormule1->drive();
$myFormule1->shiftGear(10);
$myFormule1->drive();
$myFormule1->shiftGear(200);
$myFormule1->drive();

