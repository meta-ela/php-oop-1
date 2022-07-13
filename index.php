<?php

class Movie {
    public $title;
    public $author;
    public $year;
};

$movie1 = new Movie();
$movie1->title = "Arrival";
$movie1->author ="Denis Villeneuve";
$movie1->year = 2016;



$movie2 = new Movie();
$movie2->title = "Stoker";
$movie2->author ="Park Chan-wook";
$movie2->year = 2013;

var_dump($movie1);
var_dump($movie2);

echo "il film in lista da vedere è " . $movie1->title . ", prodotto nel " . $movie1->year . " e diretto da " . $movie1->author;
echo "<br>";
echo "il film in lista da vedere è " . $movie2->title . ", prodotto nel " . $movie2->year . " e diretto da " . $movie2->author;