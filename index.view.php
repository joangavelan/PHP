<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header {
            background-color: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>


    <ul>


        

        <?php  foreach ($names as $name) : ?>

                <li><?= $name; ?></li>

        <?php endforeach; ?>
        





        <?php

            foreach ($fruits as $fruit) {

                echo "<li>$fruit</li>";

            }

        ?>

    </ul>


</body>
</html>