<?php
require_once('../combat/config/connexion_database.php');
require_once('../combat/config/autoload.php');
$heroManager = new HeroesManager($db);
$aliveHeroes = $heroManager->findAllAlive();

// var_dump($heroManager->findAllAlive());
if (isset($_POST) && !empty($_POST['name'])) {
    $newPerso = $_POST['name'];
    $hero = new Hero(['name' => $newPerso]);
    $heroManager->addHero($hero);
}

// var_dump($aliveHeroes);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Combats</title>
</head>

<body>
    <form action="" method="post">
        <label>Votre Pseudo : </label>
        <input type="text" name="name">
        <button type="submit">Go</button>
    </form>
    <div class="d-flex flex-wrap container justify-content-center gap-3">

        <?php
        foreach ($aliveHeroes as $result) { ?>
            <form action="./fight.php" method="post">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $result->getname() ?></h3>
                        <h4><?php echo $result->getHealth_Point() . "Points" ?></h4>
                        <input type="hidden" value="<?php echo $result->getId() ?>"name = 'id' >
                        <button type="submit" class="btn btn-primary">choisir
                        </button>
                    </div>
                </div>
            </form>

        <?php }
        ?>
    </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>