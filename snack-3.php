<?php

/*
## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
*/
    $posts = [
        "02-01-2022" => [
            [
                "title" => "Titolo 1",
                "author" => "Pinco Pallo",
                "post" => "post 1"
            ],
        ],
        "25-01-2022" => [
            [
                "title" => "Titolo 2",
                "author" => "Pinco Pallo",
                "post" => "post 2"
            ],
            [
                "title" => "Titolo 3",
                "author" => "Pinco Pallo",
                "post" => "post 3"
            ],
        ],
        "07-02-2022" => [
            [
                "title" => "Titolo 4",
                "author" => "Pinco Pallo",
                "post" => "post 4"
            ],
            [
                "title" => "Titolo 5",
                "author" => "Pinco Pallo",
                "post" => "post 5"
            ],
            [
                "title" => "Titolo 6",
                "author" => "Pinco Pallo",
                "post" => "post 6"
            ],
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK TRE</title>
</head>
<body>
    <ul>
        <?php foreach($posts as $data => $post) { ?>
            <li>
                <h2><?php echo $data ?></h2>
            </li>
        <?php } ?>
    </ul>
</body>
</html>