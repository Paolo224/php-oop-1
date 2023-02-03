<?php
require_once __DIR__ . '/models/Movie.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 1</title>
</head>

<body>
    <h1>
        PHP OOP 1
    </h1>
    <div>
        <?php
        $movie1 = new Movie('Avengers', 'Tutti contro il crimine', 'green', '2 ore');
        var_dump($movie1);
        ?>
    </div>
</body>

</html>