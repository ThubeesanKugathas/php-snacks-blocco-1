<?php

/*
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di
casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/
    $matches = [
        [
            "casa" => "Varese",
            "ospite" => "Virtus Bologna",
            "puntiCasa" => 80,
            "puntiOspite" => 81
        ],
        [
            "casa" => "Brindisi",
            "ospite" => "Reggiana",
            "puntiCasa" => 89,
            "puntiOspite" => 75
        ],
        [
            "casa" => "Fortitudo Bologna",
            "ospite" => "Brescia",
            "puntiCasa" => 86,
            "puntiOspite" => 93
        ],
        [
            "casa" => "Pesaro",
            "ospite" => "Cremona",
            "puntiCasa" => 93,
            "puntiOspite" => 87
        ],
        [
            "casa" => "Treviso",
            "ospite" => "Tortona",
            "puntiCasa" => 72,
            "puntiOspite" => 70
        ],
        [
            "casa" => "Trento",
            "ospite" => "Olimpia Milano",
            "puntiCasa" => 73,
            "puntiOspite" => 79
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style-1.css">
    <title>SNACK UNO</title>
</head>
<body>
    <h1>Partite basket giornata 19:</h1>
    <ul>
        <?php for ($i = 0; $i < count($matches); $i++) { ?>
            <li class="my-1">
                <ul>
                    <li class="d-flex">
                        <div class="text">
                            <?php echo $matches[$i]["casa"] ?> - <?php echo $matches[$i]["puntiCasa"] ?>
                        </div>
                        <div class="text">
                            <?php echo $matches[$i]["puntiOspite"] ?> - <?php echo $matches[$i]["ospite"] ?>
                        </div>
                    </li>
                </ul>
            </li>
        <?php } ?>
    </ul>
</body>
</html>
