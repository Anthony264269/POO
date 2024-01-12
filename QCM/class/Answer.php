<?php
// include_once('./qcm.php');
// include_once('./question.php');

class Answer {

    const BONNEREPONSE = true;
    private string $addAnswer;


    public function __construct($addAnswer, $bonneReponse = false){
        $this->$addAnswer = $addAnswer; 
        $this->BONNEREPONSE = $bonneReponse;
    }


}



 
?>
