<?php
require_once('../combat/config/connexion_database.php');
require_once('../combat/config/autoload.php');

if (isset($_POST) && !empty($_POST['name'])) {
    $newPerso = $_POST['name'];
    $heroManager = new HeroesManager($db);
    $hero = new Hero(['name' => $newPerso]);
    var_dump($hero);

    // Ajouter le héros à la base de données
    $heroManager->addHero($hero);
}

    

// if(isset($_POST['nom']) && (!empty($_POST['nom'])){


//     };
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Combats</title>
</head>
<body>
    <form action="" method="post">
<label>Votre Pseudo : </label>
<input  type="text" name="name" >
<button type="submit">Go</button>
 </form>

</body>
</html>