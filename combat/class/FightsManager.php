<?php

require_once('../combat/config/autoload.php');
require_once('../combat/config/connexion_database.php');



class FightsManager
{

    public function createMonster()
    {
        $newMonster = new Monster;
        $newMonster->setName('Monsieur Peabody');
        $newMonster->getHealth_Point();
        return $newMonster;
    }

    public function fight($Hero, $Monster)
    {
        // var_dump($Hero, $Monster);
        $tlb = [];
        $combats = 100;
        while ($Hero->gethealth_Point() >= 0 && $Monster->getHealth_Point() >=0 ) :
           
        endwhile;
    }

    public function hit(Monster $monster): int{

        $damage = rand(0,50);
        $monsterHealthPoint = $monster->getHealth_Point();
        $monster->setHealth_Point($monsterHealthPoint - $damage);

        return $damage;
    }
}
