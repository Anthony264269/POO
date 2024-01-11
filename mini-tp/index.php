<?php
require_once('./class.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <form action="./process.php" method="post">
        <div>
            <select name="machine" id="">
                <option value="Espresso">Espresso</option>
                <option value="Nespresso">Nespresso</option>
            </select>
            <label for="uname">Marque de la machine à café</label>
        </div>
        <div>
            <label for="uname">La machine est allumée</label>
            <input type="text" id="uname" name="allumage" />
        </div>
        <div>
            <label for="uname">Insérer la monnaie</label>
            <input type="text" id="uname" name="insertMonnaie" />
        </div>
        <div>
            <button type="submit">Payer</button>
        </div>
    </form>



</body>

</html>