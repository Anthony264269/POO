<?php

require_once('../combat/config/autoload.php');
require_once('../combat/config/connexion_database.php');

class FightsManager{

private PDO $db;
private $createMonster;
private $fight;


public function __construct($db){
    $this->db = $db;
}

}