<?php

require_once('./config/autoload.php');
require_once('./config/connexion_database.php');

class Monster {
    // private int $id;
    private string $name;
    private int $health_Point = 100;

    public function hit(Hero $hero): int{

        $damage = rand(0,50);
        $monsterHealthPoint = $hero->getHealth_Point();
        $hero->setHealth_Point($monsterHealthPoint - $damage);

        return $damage;
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
}