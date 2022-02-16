<?php

/*
## Snack 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];
                            /* utilizzo di filter al posto di strpos*/
    if (strlen($name) > 3 && filter_var($email, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
        echo "<h1>ACCESSO RIUSCITO</h1> <h2>Benvenuto " . $name . "!</h2>";
    } else {
        echo "<h1>ACCESSO NEGATO</h1>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style-2.css">
    <title>SNACK DUE</title>
</head>
<body>
    
</body>
</html>