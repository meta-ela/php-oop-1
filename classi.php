<!-- 
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
    => all’interno della classe sono dichiarate delle variabili d’istanza
    => all’interno della classe è definito un costruttore
    => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ 
e stampati a schermo i valori delle relative proprietà
-->

<?php

class Movie
{
    public $title;
    public $author;
    public $year;
    public $genre;
    public $maleProt;
    public $femaleProt;

    function __construct($_maleProt, $_femaleProt) {
        $this->maleProt = $_maleProt;
        $this->femaleProt = $_femaleProt;
    }

    public function getGapYear() {
        $currYear = date("Y");
        return $currYear - $this->year;
    }

};

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

/* var_dump($movie1);
var_dump($movie2); */

/* echo "il film in lista da vedere è " . $movie1->title . ", prodotto nel " . $movie1->year . " e diretto da " . $movie1->author;
echo "<br>";
echo "il film in lista da vedere è " . $movie2->title . ", prodotto nel " . $movie2->year . " e diretto da " . $movie2->author;
 */