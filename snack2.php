<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-SNACK-B1</title>
</head>
<body>
    <?php
    $data = $_GET;
    // check presenza valori
    if(empty($data['name']) || empty($data['mail']) || empty($data['age'])){
        echo 'non tutti i parametri sono stati passati';
    } 
    // check name
    elseif(strlen($data['name']) <= 3 ) {
        echo 'Accesso negato';
    }
    // check email
    elseif(strpos($data['mail'], '@') === false || strpos($data['mail'], '.') === false ){
        echo 'Accesso negato';
    }
    // check age
    elseif (! is_numeric($data['age'])){
        echo 'accesso negato';
    }
    else{
        echo 'accesso riuscito';
    }
    ?>
</body>
</html>