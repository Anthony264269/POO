<?php
require_once('./config/autoload.php');
require_once('./config/connexion_database.php');

$alreadyHeros = new HeroesManager($db);
$selectId = $_POST['id'];


$heros = $alreadyHeros->find($selectId);



$fightManager = new FightsManager();
$monster = $fightManager->createMonster();
$combats = $fightManager->fight($heros, $monster);
$alreadyHeros->upDate($heros);

// $delete = $alreadyHeros->delete($hero);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php foreach($combats as $combat) { ?>
        <pre>
    <?php echo $combat;?>
</pre>
<?php } ?>
<a href="./index.php">Retour Accueil</a>
</body>
</html>