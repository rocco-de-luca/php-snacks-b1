<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-SNACK-B1></title>
</head>
<body>
    <?php
    $matches = [
        [
         'home' => 'Lakers',
         'away' => 'Golden State',
         'p_home' => 70,
         'p_away' => 110
        ],
        [
         'home' => 'Chicago Bulls',
         'away' => 'Boston Celtic',
         'p_home' => 150,
         'p_away' => 140
        ],
        [
         'home' => 'San Antonio Spurs',
         'away' => 'Virtus Pallacanestro',
         'p_home' => 10,
         'p_away' => 110
        ],
        [
         'home' => 'Olimpia Milano',
         'away' => 'Miami Heat',
         'p_home' => 200,
         'p_away' => 1
        ],
    ];

    ?>

    <h1>Risultati giornata 1</h1>
    <ul>
        <?php for ($i = 0; $i < count($matches); $i++) { ?>
            <li>
            <?php echo $matches[$i]['home'];?> - <?php echo $matches[$i]['away'];?> | <?php
              echo $matches[$i]['p_home'];?> - <?php echo $matches[$i]['p_away'];?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>