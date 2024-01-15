<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=tp_qcm', 'root', '');
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

