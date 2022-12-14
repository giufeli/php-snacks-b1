<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<?php
    if (isset($_GET['name'])){
        $name = $_GET['name'];
    } else {
        $name = '';
    };

    $verify_name = strlen($name );

    if ($verify_name > 3 ){
        $name_message = "Valido";
    } else {
        $name_message='Il nome è troppo breve';
    };
?>

<?php
    if (isset($_GET['email'])){
        $email = $_GET['email'];
    } else {
        $email = '';
    };

    $verify_at = strpos($email, '@');
    $verify_dot = strpos($email, '.');

    if ($verify_at && $verify_dot ){
        $email_message = "Valida";
    } else {
        $email_message='Non valida';
    };
?> 

<?php
    if (isset($_GET['eta'])){
        $eta = $_GET['eta'];
    } else {
        $eta = '';
    };

    $verify_age = is_numeric($eta);
   

    if ($verify_age){
        $eta_message = "Valido";
    } else {
        $eta_message='Non è un numero valido';
    };
?> 


<body>
    <form action="" method="get">
        <label for="name">Inserisci il tuo nome</label>
        <input type="text" name="name" id="name">  
        <label for="email">Inserisci la tua email</label>
        <input type="text" name="email" id="email">
        <label for="eta">Inserisci la tua età</label>
        <input type="text" name="eta" id="eta">
        <button>verifica</button>
    </form>

    <h1>Nome: <?= $name_message ?></h1>
    <h1>Email: <?= $email_message ?></h1>
    <h1>Età: <?= $eta_message ?></h1>
</body>
</html>