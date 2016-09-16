<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <hi>
        <ul>
            <?php

            foreach ($names as $name) {
                echo "<li>$name</li>"; // >br perqué és html!!
            } // Millor forma en php

            ?>

        </ul>
        <ul>
            <?php foreach ($names as $name) : ?>
                <li><?= $name ?></li>
            <?php endforeach;?> <!-- Millor forma en html -->
        </ul>

    </hi> <!-- ! més tabular h1 més tabular -->
</body>
</html>