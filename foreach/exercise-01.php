<?php

$animals = ['Lion', 'Tiger', 'Elephant'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>
<body>
    <ul>
    
        <?php foreach ($animals as $animal) : ?>
            
            <?= "<li>$animal</li>" ?>

        <?php endforeach ?>
    
    </ul>
</body>
</html>