<?php

require_once('./config/autoload.php');
require_once('./config/connexion_database.php');



class FightsManager
{
    private PDO $db;

    public function createMonster()
    {
        $newMonster = new Monster;
        $newMonster->setName('Monsieur Peabody');
        $newMonster->getHealth_Point();
        return $newMonster;
    }

    public function fight($hero, $monster)
    {
        $figthArrays = [];
    
        while ($hero->gethealth_Point() > 0 and $monster->gethealth_Point() > 0) 
        {
        
            
            $damageToMonster = intval($hero->hit($monster));
    
            if ($damageToMonster > 0) {
                $figthArrays[] = ''. $hero->getName() .' tape le monstre et lui inflige : '. $damageToMonster.' de dégats';
            }
            
            if ($monster->gethealth_Point() < 0 or $hero->gethealth_Point() < 0) {
                break; 
            }
            
            $damageToHero = intval($monster->hit($hero));
    
            if ($damageToHero > 0) {
                $figthArrays[] = '' . $monster->getName().' frappe '.$hero->getName().' et lui inflige '.$damageToHero.' de dégats ';
            }
            
            if ($hero->gethealth_Point() < 0 or $monster->gethealth_Point() < 0 ) {
                break; 
            }
        }
    
        return $figthArrays;
    }
    
 

   
}
