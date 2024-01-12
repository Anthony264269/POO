<?php
require_once('../QCM/class/qcm.php');
require_once('../QCM/class/question.php');
require_once('../QCM/class/answer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $question1->addAnswer(new Answer('Php Orienté Objet'));
$question1->addAnswer(new Answer('ProgrammatiOn Orientée Outil'));
$question1->addAnswer(new Answer('Programmation Orientée Objet', Answer::BONNE_REPONSE));
$question1->addAnswer(new Answer('Papillon Onirique Ostentatoire'));
$question1->setExplications('Sans commentaires si vous avez eu faux :-°');
$qcm->addQuestion($question1);
$qcm->generate(); ?>
    
</body>
</html>