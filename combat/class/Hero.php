<?php

require_once('../combat/config/autoload.php');
require_once('../combat/config/connexion_database.php');

class Hero {
    private int $id;
    private string $name;
    private int $health_Point;//faire une méthode frapper!!!!!!!!!!!!!!


    
    public function __construct(array $data) { // je récupère un tableau qui correspond à une ligne de ma BDD
        // $this->id = $data['id'];
        $this->name = $data['name'];
        // $this->health_Point = $data['health_point']; 

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

    public function getHealth_Point(): string
    {
        return $this->health_Point;
    }



}