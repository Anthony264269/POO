<?php

require_once('./config/autoload.php');
require_once('./config/connexion_database.php');

class Hero {
   
    private int $id;
    private string $name;
    private int $health_Point;


    
    public function __construct(array $data) { // je récupère un tableau qui correspond à une ligne de ma BDD
        // $this->id = $data['id'];
        $this->name = $data['name'];
      
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setHealth_Point($health_Point): void
    {
        $this->health_Point = $health_Point;
    }

    public function getHealth_Point(): int
    {
        return $this->health_Point;
    }

    public function setDelete($hero): void
    {
        $this->name = $hero;
    }

    public function getDelete(): int
    {
        return $this->name;
    }
    public function hit(Monster $monster): int{

        $damage = rand(0,50);
        $monsterHealthPoint = $monster->getHealth_Point();
        $monster->setHealth_Point($monsterHealthPoint - $damage);

        return $damage;
    }

}
