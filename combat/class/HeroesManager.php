<?php

require_once('./config/autoload.php');
require_once('./config/connexion_database.php');

class HeroesManager
{

    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function checkHeroes(Hero $newPerso)
    {


        $request = $this->db->prepare('SELECT * FROM heroes WHERE name = :name');
        $request->execute([
            'name' => $newPerso->getName()
        ]);
        $result = $request->fetchAll();
        return $result;
    }

    public function addHero(Hero $newPerso)
    {

        $existingHeroes = $this->checkHeroes($newPerso);

        if (!empty($existingHeroes)) {
            echo 'Le héros existe déjà.';
        } else {

            $request = $this->db->prepare('INSERT INTO heroes (name) VALUES (:name)');
            $request->execute([

                'name' => $newPerso->getName()
                
            ]);

            $id = $this->db->lastInsertId();
               $newPerso->setId($id);



        }
    }

    public function findAllAlive()
    {
        $request = $this->db->query('SELECT * FROM heroes WHERE health_point > 0');
        $aliveHeroes = $request->fetchAll();

        $tlb = [];

        foreach ($aliveHeroes as $aliveHeroe) {

            $hero = new Hero($aliveHeroe);
            $hero->setId($aliveHeroe['id']);
            $hero->setName($aliveHeroe['name']);
            $hero->setHealth_Point($aliveHeroe['health_point']);
            $tlb[] = $hero;
        }

        return $tlb;
    }

    public function find($selectId)
    {
        $request = $this->db->prepare("SELECT * FROM heroes WHERE id = :id");
        $request->execute([
            'id' => $selectId,
        ]);
        $selectId = $request->fetch();

        
        $hero = new Hero($selectId);
        $hero->setId($selectId['id']);
        $hero->setHealth_Point(100);
        return $hero;
        // var_dump($hero);
        //     ':id' => $selectId
        // ]);


    }

    public function upDate($hero)
    {


        $request = $this->db->prepare('UPDATE heroes SET health_point = :health_point WHERE id = :id');
        $request->execute([
            'id' => $hero->getId(),
            'health_point' => $hero->getHealth_Point()
        ]);
       
    }

    public function delete($hero){
        if($hero->getHealth_Point()< 0){
       
           $request = $this->db->prepare("DELETE FROM heroes WHERE id = :id");
           $request->execute([
               'id' => $hero->getId(),
           ]);
       }
       }
}
