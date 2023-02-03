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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1>
        PHP OOP 1
    </h1>
    <div>
        <?php
        $movie1 = new Movie('Avengers', 'Tutti contro il crimine', 'Green', '2 ore');
        $movie2 = new Movie('Spiderman', 'Ragno contro il crimine', 'Yellow', '1.5 ore');
        $movie3 = new Movie('Batman', 'Pipistrello contro il crimine', 'Red', '3 ore');
        $movie4 = new Movie('Superman', 'Uomo contro il crimine', 'Green', '1.5 ore');
        // var_dump($movie1, $movie2, $movie3, $movie4);
        ?>
    </div>
    <ul>
        <li>
            <h3 class="m-0 text-danger">
                <?php
                echo $movie1->getTitle()
                ?>
            </h3>
        </li>
        <li>
            <span class="fw-bold">
                TRAMA -->
            </span>
            <?php
            echo $movie1->getPlot()
            ?>
        </li>
        <li>
            <span class="fw-bold">
                TIPO -->
            </span>
            <?php
            echo $movie1->type
            ?>
        </li>
        <li>
            <span class="fw-bold">
                DURATA FILM -->
            </span>
            <?php
            echo $movie1->duration
            ?>
        </li>
    </ul>
</body>

</html>