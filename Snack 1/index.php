<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        li{
            list-style: none;
            font-w
        }
    </style>

</head>
<body>
    <?php

        $arr_partite = [
        [
            'casa' => [
                'nome' => 'Olimpia Milano ',
                'punteggio' => 55
            ],
            'ospite' => [
                'nome' => 'Cantù',
                'punteggio' => 60
            ],
        ],
        [
            'casa' => [
                'nome' => 'Pallacanestro Varese',
                'punteggio' => 50
            ],
            'ospite' => [
                'nome' => 'Polisportiva Dinamo',
                'punteggio' => 45
            ],
        ],
        [
            'casa' => [
                'nome' => 'Longhi Treviso Basket',
                'punteggio' => 30
            ],
            'ospite' => [
                'nome' => 'Scaligera Basket Verona',
                'punteggio' => 65
            ],
        ],
    ]


    ?>

    <h1>Partite di Basket</h1>
    <ul>
        <?php 
        $arr_partite_len = count($arr_partite);
        for ($i = 0; $i < $arr_partite_len; $i++){           
           $match = $arr_partite[$i];
           echo "<li>" .$match['casa']['nome'] .' - ' . $match['ospite']['nome'] . ' | ' . $match['casa']['punteggio'] . ' - ' .  $match['ospite']['punteggio'] ."</li>";
        };
        ?>
    </ul>

</body>
</html>