<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <?php
    $books = ["Dark Matter 1", "White Matter 2", "Something Amazing 3"];
    ?>
    <ul>
        <!-- Modo 1: -->
        <!-- <?php foreach ($books as $book) {
                    echo "<li>$book</li>";
                }
                ?> -->

        <!-- Modo 2: -->
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>