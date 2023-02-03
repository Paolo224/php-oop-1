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
        $movie2 = new Movie('Spiderman', 'Ragno contro il crimine', 'yellow', '1.5 ore');
        $movie3 = new Movie('Batman', 'Pipistrello contro il crimine', 'red', '3 ore');
        $movie4 = new Movie('Superman', 'Uomo contro il crimine', 'green', '1.5 ore');
        var_dump($movie1, $movie2, $movie3, $movie4);
        ?>
    </div>
</body>

</html>