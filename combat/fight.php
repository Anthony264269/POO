<?php
require_once('./config/autoload.php');
require_once('./config/connexion_database.php');

$alreadyHeros = new HeroesManager($db);
$selectId = $_POST['id'];

$heros = $alreadyHeros->find($selectId);



$fightManager = new FightsManager();
$monster = $fightManager->createMonster();
$combat = $fightManager->fight($heros, $monster);
$heroesManager->update($hero);

