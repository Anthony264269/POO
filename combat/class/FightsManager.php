<?php

require_once('../combat/config/autoload.php');
require_once('../combat/config/connexion_database.php');



class FightsManager{

    public function createMonster(){
        $newMonster = new Monster; 
        $newMonster->setName('Monsieur Peabody');
        $newMonster->getHealth_Point();
        $newMonster;
    }



}