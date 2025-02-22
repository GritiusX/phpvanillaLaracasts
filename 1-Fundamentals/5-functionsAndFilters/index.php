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
            "name" => "Libro de Carlitos",
            "author" => "Carlitos",
            "price" => "$500",
            "purchaseUrl" => "callefalsa.com"
        ],
        [
            "name" => "Libro 2 de Carlitos",
            "author" => "Carlitos",
            "price" => "$500",
            "purchaseUrl" => "callefalsa.com"
        ],
        [
            "name" => "Libro de Robertito",
            "author" => "Robertito",
            "price" => "$700",
            "purchaseUrl" => "callefalsa.com"
        ],
    ];

    function filterByAuthor($books, $author): array
    {
        $filteredBooks = [];
        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }
    ?>

    <ul>
        <?php foreach (filterByAuthor($books, 'Robertito') as $book) : ?>
            <li>
                <a href="<?php $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</body>

</html>