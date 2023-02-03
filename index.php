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

    <ul class="list-group p-2">
        <?php
        foreach ($movies as $movie) {
        ?>
            <li class="list-group-item bg-warning">
                <h3 class="m-0 text-danger">
                    <?php
                    echo $movie->getTitle()
                    ?>
                </h3>
            </li>
            <li class="list-group-item">
                <span class="fw-bold">
                    TRAMA -->
                </span>
                <?php
                echo $movie->getPlot()
                ?>
            </li>
            <li class="list-group-item">
                <span class="fw-bold">
                    TIPO -->
                </span>
                <?php
                echo $movie->type
                ?>
            </li>
            <li class="list-group-item">
                <span class="fw-bold">
                    DURATA FILM -->
                </span>
                <?php
                echo $movie->duration
                ?>
                <span> ore</span>
            </li>
        <?php
        };
        ?>
    </ul>
</body>

</html>