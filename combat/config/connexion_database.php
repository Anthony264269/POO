<?php

try {
    $dsn = 'mysql:hots=localhost;dbname=hero';

    $username = 'root';

    $password = '';

    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "ça fonctionne";
} catch (PDOException $message) {

    echo "il y a un problème <br>" . $message;
}

