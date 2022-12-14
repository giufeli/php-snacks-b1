<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php



    $matchs = array(
        array(
            "Olimpia Milano " => "55",
            "Cantù " => "60",
        ),
        array(
            "Pallacanestro Varese" => "50",
            "Polisportiva Dinamo" => "45",
        ),
        array(
            "De' Longhi Treviso Basket" => "30",
            "Scaligera Basket Verona" => "65",
        )
    );

    $keys = array_keys($matchs);
    for($i = 0; $i < count($matchs); $i++) {
        foreach($matchs[$keys[$i]] as $key => $value) {
            echo $key . " : " . $value . "<br>";
        };
    }
    ?>

</body>
</html>