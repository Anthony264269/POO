<?php
require_once './class/Answer.php';
require_once './class/Question.php';
require_once './class/Qcm.php';
require_once './utils/connexion_database.php';

/**
 * @var PDO $db
 */

$qcm = new Qcm($db);
$qcm->getQuestions();
$qcm->generate();
// $qcm = new Qcm($db);
// $question1 = new Question("Que signifie POO ? ");
// $question1->addAnswer(new Answer("Programmation Orientée Objet", Answer::BONNE_REPONSE));
// $question1->addAnswer(new Answer("Programmation Orientée Procédurale"));
// $question1->addAnswer(new Answer("Programmation Orientée Fonctionnelle"));
// $question1->setExplanation("Sans commentaire, si vous avez eu faux");
// echo "<pre>";
// var_dump($question1);
// echo "</pre>";

// $qcm->addQuestion($question1);



