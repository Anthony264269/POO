<?php
require_once('./class.php');

if (isset($_POST['marque']) && !empty($_POST['marque'])) {
    $machine = new MachineACafe($_POST['marque']);
    var_dump($machine->getmarque());
}

if (isset($_POST['etat']) && !empty($_POST['etat'])) {
    $machine = $allumage($_POST['etat']);
    var_dump($machine);
}

if (isset($_POST['insertMonaie']) && !empty($_POST['insertMonaie'])) {
    $machine = $insertMonaie($_POST['insertMonaie']);
    var_dump($machine);
}

?>

<!-- $machine = new MachineACafe("Makao");


$machine->allumage(true); // Affichera "Votre machine est éteinte."
$machine->mettreUneDosette();
$machine->insertMonaie(0.90);
$machine->combienDeSucre(1); -->