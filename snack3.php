<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-SNACK-B1></title>
</head>
<body>
    <?php
    $return_matches = array(
        array(
            'home' => 'Lakers',
            'away' => 'Golden State',
            'p_home' => 70,
            'p_away' => 110),
       array( 
            'home' => 'Chicago Bulls',
            'away' => 'Boston Celtic',
            'p_home' => 150,
            'p_away' => 140),
       array(
            'home' => 'Chicago Bulls',
            'away' => 'Boston Celtic',
            'p_home' => 150,
            'p_away' => 140),
       array( 
            'home' => 'San Antonio Spurs',
            'away' => 'Virtus Pallacanestro',
            'p_home' => 10,
            'p_away' => 110),
      array(
            'home' => 'Olimpia Milano',
            'away' => 'Miami Heat',
            'p_home' => 200,
            'p_away' => 1),
    );

    ?>

    <h1>Risultati giornata 1</h1>
    <ul>
        <?php for ($i = 0; $i < count($return_matches); $i++) { ?>
            <li>
            <?php echo $return_matches[$i]['home'];?> - <?php echo $return_matches[$i]['away'];?> | <?php
              echo $return_matches[$i]['p_home'];?> - <?php echo $return_matches[$i]['p_away'];?>
            </li>
        <?php } ?>
    </ul>
</body>
</html>

