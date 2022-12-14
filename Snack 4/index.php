<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<?php

    $numeri = [];

    while (count($numeri) < 15) {
        $numran = rand (1, 20);
        if (!in_array($numran, $numeri)) {
            $numeri[] = $numran;
        }
    }
    var_dump($numeri)
?>
<body>
   
</body>
</html>