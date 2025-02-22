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
    <?=
    $name = "dark Matter";
    $read = true;

    if ($read) {
        $message = "you have read $name";
    } else {
        $message = "you have NOT read $name";
    }
    ?>
    <h1>
        <?php echo $message; ?>
        <?= $message; ?>
    </h1>
</body>

</html>