<?php

require "classi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>PHP OOP-1</title>
</head>

<body>
    <div class="container py-5 text-center">
        <h3 class="mb-3 text-primary">Film nella lista "da vedere ma quando non lo so"</h3>
        <div class="row row-cols-2 g-4">
            <div class="col">
                <div class="card text-center">
                    <?php
                    ?>
                    <div class="card-title">
                        <h4>Titolo: <?php echo $movie1->title ?> </h4>
                    </div>
                    <div class="card-body">
                        <div>Nelle sale dal: <?php echo $movie1->year ?></div>
                        <div>Diretto da: <?php echo $movie1->author ?></div>
                        <div class="my-3"><strong>Info generiche:</strong>
                            <ul class="list-unstyled">
                                <li>Uscito da ormai <?php echo $movie1->getGapYear() ?> anni</li>
                                <li>Genere: <?php echo $movie1->genre ?></li>
                                <li>Attore protagonista: <?php echo $movie1->maleProt ?></li>
                                <li>Attrice protagonista: <?php echo $movie1->femaleProt ?></li>
                            </ul>
                        </div>
                    </div>
                    <?php ?>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <?php
                    ?>
                    <div class="card-title">
                        <h4>Titolo: <?php echo $movie2->title ?> </h4>
                    </div>
                    <div class="card-body">
                        <div>Nelle sale dal: <?php echo $movie2->year ?></div>
                        <div>Diretto da: <?php echo $movie2->author ?></div>
                        <div class="my-3"><strong>Info generiche:</strong>
                            <ul class="list-unstyled">
                                <li>Uscito da ormai <?php echo $movie2->getGapYear() ?> anni</li>
                                <li>Genere: <?php echo $movie2->genre ?></li>
                                <li>Attore protagonista: <?php echo $movie2->maleProt ?></li>
                                <li>Attrice protagonista: <?php echo $movie2->femaleProt ?></li>
                            </ul>
                        </div>
                    </div>
                    <?php ?>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <?php
                    ?>
                    <div class="card-title">
                        <h4>Titolo: <?php echo $movie3->title ?> </h4>
                    </div>
                    <div class="card-body">
                        <div>Nelle sale dal: <?php echo $movie3->year ?></div>
                        <div>Diretto da: <?php echo $movie3->author ?></div>
                        <div class="my-3"><strong>Info generiche:</strong>
                            <ul class="list-unstyled">
                                <li>Uscito da ormai <?php echo $movie3->getGapYear() ?> anni</li>
                                <li>Genere: <?php echo $movie3->genre ?></li>
                                <li>Attore protagonista: <?php echo $movie3->maleProt ?></li>
                                <li>Attrice protagonista: <?php echo $movie3->femaleProt ?></li>
                            </ul>
                        </div>
                    </div>
                    <?php ?>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <?php
                    ?>
                    <div class="card-title">
                        <h4>Titolo: <?php echo $movie4->title ?> </h4>
                    </div>
                    <div class="card-body">
                        <div>Nelle sale dal: <?php echo $movie4->year ?></div>
                        <div>Diretto da: <?php echo $movie4->author ?></div>
                        <div class="my-3"><strong>Info generiche:</strong>
                            <ul class="list-unstyled">
                                <li>Uscito da ormai <?php echo $movie4->getGapYear() ?> anni</li>
                                <li>Genere: <?php echo $movie4->genre ?></li>
                                <li>Attore protagonista: <?php echo $movie4->maleProt ?></li>
                                <li>Attrice protagonista: <?php echo $movie4->femaleProt ?></li>
                            </ul>
                        </div>
                    </div>
                    <?php ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>