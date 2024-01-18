<?php

require_once('../combat/config/autoload.php');
require_once('../combat/config/connexion_database.php');

class HeroesManager {

    private PDO $db;
    private $selectHeroes;
    private array $listHeroes;
    private array $checkHeroes;

    public function __construct($db){
        $this->db = $db;
    }

    public function checkHeroes(Hero $newPerso) {

          
        $request = $this->db->prepare('SELECT * FROM heroes WHERE name = :name'); 
        $request->execute([
            'name' => $newPerso->getName()
        ]);
        $result = $request->fetchAll();
        return $result;
       
    }
    
    public function addHero(Hero $newPerso) {

        $existingHeroes = $this->checkHeroes($newPerso);
    
        if (!empty($existingHeroes)) {
            echo 'Le héros existe déjà.';
        } else {
 
            $request = $this->db->prepare('INSERT INTO heroes (name, health_point) VALUES (:name, :health_point)');
            $request->execute([
              
                'name' => $newPerso->getName(),
                'health_point' => 100
            ]);
    
           $lastInsertedId = $this->db->lastInsertId();
           
    
          
        }
       
    } 
    
    }
    
 
