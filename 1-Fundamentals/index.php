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

    require 'index.view.php';
