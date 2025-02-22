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

    /* Lambda or Anonymus function -- RIGID EXAMPLE */
    $filterByAuthor = function ($books, $author) {
        $filteredBooks = [];
        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    };

    /* 1) Named function */
    /*     function filter($items, $key, $value)
    {
        $filteredItems = [];
        foreach ($items as $item) {
            if ($item[$key] === $value) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    }; */

    /* 2) Named function */
    function filter($items, $fn)
    {
        $filteredItems = [];
        foreach ($items as $item) {
            if ($fn($item)) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    };
    $filteredBooks1 = filter($books, function ($book) {
        return $book['price'] > "$600";
    });

    /* 2) PHP function -- this is a PHP function: to check all php reference: https://www.w3schools.com/php/php_ref_overview.asp */
    $filteredBooks = array_filter($books, function ($book) {
        return $book['author'] === "Carlitos";
    });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

</body>

</html>