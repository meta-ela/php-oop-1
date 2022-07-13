<?php

require "classi.php";

$movie1 = new Movie("Jeremy Renner", "Amy Adams");
$movie1->title = "Arrival";
$movie1->author = "Denis Villeneuve";
$movie1->year = 2016;
$movie1->genre = "Fantascienza, Drammatico";

$movie2 = new Movie("Matthew Goode", "Mia Wasikowska");
$movie2->title = "Stoker";
$movie2->author = "Park Chan-wook";
$movie2->year = 2013;
$movie2->genre = "Thriller, Drammatico";

$movie3 = new Movie("Jake Gyllenhaal", "Jena Malone");
$movie3->title = "Donnie Darko";
$movie3->author = "Richard Kelly";
$movie3->year = 2001;
$movie3->genre = "Fantascienza, Thriller, Drammatico";

$movie4 = new Movie("Timothée Chalamet", "Rebecca Ferguson");
$movie4->title = "Dune";
$movie4->author = "Denis Villeneuve";
$movie4->year = 2021;
$movie4->genre = "Fantascienza, Avventura, Drammatico";

/* $movie1->printSampleCard(); */

/* var_dump($movie1);
var_dump($movie2); */

/* echo "il film in lista da vedere è " . $movie1->title . ", prodotto nel " . $movie1->year . " e diretto da " . $movie1->author;
echo "<br>";
echo "il film in lista da vedere è " . $movie2->title . ", prodotto nel " . $movie2->year . " e diretto da " . $movie2->author;
 */
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
                                <li>Attori Protagonisti: <?php echo $movie1->getFullCast() ?></li>
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
                                <li>Attori Protagonisti: <?php echo $movie2->getFullCast() ?></li>
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
                                <li>Attori Protagonisti: <?php echo $movie3->getFullCast() ?></li>                            </ul>
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
                                <li>Attori Protagonisti: <?php echo $movie4->getFullCast() ?></li>                            </ul>
                        </div>
                    </div>
                    <?php ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>