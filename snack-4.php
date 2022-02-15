<?php

/*
## Snack 4
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/
    function randomNum ($min, $max, $limit) {
        $arrayNum = [];
        
        while (count($arrayNum) < $limit) {
            $number = rand($min, $max);

            if (!in_array($number, $arrayNum)) {
                $arrayNum[] = $number;
            }
        }
        return $arrayNum;
    }

    $arrayNum = randomNum(0, 100, 15);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK QUATTRO</title>
</head>
<body>
    <ul>
        <?php foreach ($arrayNum as $num) { ?>
            <li><?php echo $num ?></li>
        <?php } ?>
    </ul>
</body>
</html>