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
    $books = [
        [
            "name" => "Titulo del Libro 1",
            "author" => "Autor del libro 1",
            "price" => "$500",
            "purchaseUrl" => "callefalsa.com"
        ],
        [
            "name" => "Titulo del Libro 2",
            "author" => "Autor del libro 2",
            "price" => "$700",
            "purchaseUrl" => "callefalsa.com"
        ],
    ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?php $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>