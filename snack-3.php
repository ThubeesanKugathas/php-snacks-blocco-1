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
                "paragraph" => "Sometimes it's simply better to ignore the haters. That's the lesson that Tom's dad had been trying to teach him, but Tom still couldn't let it go. He latched onto them and their hate and couldn't let it go, but he also realized that this wasn't healthy. That's when he came up with his devious plan.",
                "post" => "https://unsplash.it/600/300?image=55"
            ],
        ],
        "25-01-2022" => [
            [
                "title" => "Titolo 2",
                "author" => "Pinco Pallo",
                "paragraph" => "Samantha wanted to be famous. The problem was that she had never considered all the downsides to actually being famous. Had she taken the time to objectively consider these downsides, she would have never agreed to publically sing that first song.",
                "post" => "https://unsplash.it/600/300?image=5"
            ],
            [
                "title" => "Titolo 3",
                "author" => "Pinco Pallo",
                "paragraph" => "The wave crashed and hit the sandcastle head-on. The sandcastle began to melt under the waves force and as the wave receded, half the sandcastle was gone. The next wave hit, not quite as strong, but still managed to cover the remains of the sandcastle and take more of it away. The third wave, a big one, crashed over the sandcastle completely covering and engulfing it. When it receded, there was no trace the sandcastle ever existed and hours of hard work disappeared forever.",
                "post" => "https://unsplash.it/600/300?image=32"
            ],
        ],
        "07-02-2022" => [
            [
                "title" => "Titolo 4",
                "author" => "Pinco Pallo",
                "paragraph" => "He lifted the bottle to his lips and took a sip of the drink. He had tasted this before, but he couldn't quite remember the time and place it had happened. He desperately searched his mind trying to locate and remember where he had tasted this when the bicycle ran over his foot.",
                "post" => "https://unsplash.it/600/300?image=12"
            ],
            [
                "title" => "Titolo 5",
                "author" => "Pinco Pallo",
                "paragraph" => "I'll talk to you tomorrow in more detail at our meeting, but I think I've found a solution to our problem. It's not exactly legal, but it won't land us in jail for the rest of our lives either. Are you willing to take the chance? Monroe asked his partner over the phone.",
                "post" => "https://unsplash.it/600/300?image=25"
            ],
            [
                "title" => "Titolo 6",
                "author" => "Pinco Pallo",
                "paragraph" => "The words hadn't flowed from his fingers for the past few weeks. He never imagined he'd find himself with writer's block, but here he sat with a blank screen in front of him. That blank screen taunting him day after day had started to play with his mind. He didn't understand why he couldn't even type a single word, just one to begin the process and build from there. And yet, he already knew that the eight hours he was prepared to sit in front of his computer today would end with the screen remaining blank.",
                "post" => "https://unsplash.it/600/300?image=21"
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
        <?php foreach($posts as $date => $post) { ?>
            <h2><?php echo $date ?></h2>
            <ul>
                <?php foreach ($post as $key => $information) { ?>
                    <h3>Title: <?php echo $information["title"] ?></h3>
                    <h3>Author: <?php echo $information["author"] ?></h3>
                    <h3><?php echo $information["paragraph"] ?></h3>
                    <img src="<?php echo $information["post"] ?>" alt="photo">
                    <hr>
                <?php } ?>
            </ul>
        <?php } ?>
    </ul>
</body>
</html>