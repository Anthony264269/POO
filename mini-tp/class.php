<?php
class MachineACafe
{
    private $marque;
    private $cafe;
    private $enFonction;
    private $insertMonaie;
    private $combienDeSucre = 0;

    public function __construct($marque)
    {
        $this->marque = $marque;
    }

    public function getmarque(){
        return $this->marque;
    }
    public function allumage($etat)
    {
        if ($etat) {
            $this->enFonction = $etat;
            echo 'Votre ' . $this->marque . ' est en service<br> ';
        } else {
            $this->enFonction = $etat;
            echo "Votre " . $this->marque . " n' est  pas en service<br> ";
        }
    }
    public function mettreUneDosette()
    {
        // mettre une dosette si la machine est allumer
        if ($this->enFonction) {
            echo ' mettre une dosette dans votre machine ' . $this->marque . ' s\'il vous plait<br>';
        } else {
            echo ' allumer votre machine ' . $this->marque . ' pour pouvoir mettre une dosette<br>';
        }
    }
    // mettre du sucre
    
    public function combienDeSucre($sucre)
    {
        
        if ($this->enFonction) {
            
            echo ' Voulez-vous du sucre ?<br>';
        
        if ($sucre > 0) {
            echo "Vous avez pris . $sucre . sucre";
            
        } else {

            echo ' Vous ne voulez pas de sucre!<br>';
        }
    }
}

    public function insertMonaie($monaie)
    {
        if ($this->enFonction) {
            $insertMonaie = 1.5;
            if ($insertMonaie < $monaie) {
                $insertMonaie -= $monaie;
                echo 'le prix est de 1,5 dollards : <br>';
                echo 'vous avez mis : ' . $monaie . ' $ je dois vous rendre : ' . $insertMonaie . ' $';
            } else {
                echo 'le prix est de 1,5 dollards : <br>';
                $insertMonaie -= $monaie;
                echo ' vous avez mis : ' . $monaie . ' $ il vous manque : ' . $insertMonaie . '$';
            }
        }
    }
    // public function faireDuCafe(){
    //     if ($insertMonaie == $insertMonaie) {
    //         echo 'sa marche';
    //     }
    //     echo ' va te faire enculer avec ton cafe';
    // if ($this->enFonction) {
    //     echo'le café est prêt';
    // }else {
    //     echo'';
    // }
    // }
}

// $machine = new MachineACafe("Makao");


// $machine->allumage(true); // Affichera "Votre machine est éteinte."
// $machine->mettreUneDosette();
// $machine->insertMonaie(0.90);
// $machine->combienDeSucre(1);
// $machine->faireDuCafe();
// Output:
// Votre machine est : Senseo
// Votre machine est éteinte.
// Je mets une dosette.
// Le café est prêt !
?>

