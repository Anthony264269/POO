<?php
require_once('./config/autoload.php');
require_once('./config/connexion_database.php');

$alreadyHeros = new HeroesManager($db);
$selectId = $_POST['id'];
var_dump($alreadyHeros->find($selectId));
 $alreadyHeros->find($selectId);



