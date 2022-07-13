<?php

class Movie {
    public $title;
    public $author;
    public $year;

    public function getGapYear() {
        $currYear = date("Y");
        return $this->year - $currYear;
    }
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
        <h3>Film nella lista "da vedere ma quando non lo so"</h3>
        <div class="row">
            <div class="col">
                <div class="card text-center">
                    <?php 
                    ?>
                    <div class="card-title">
                        <h4>Titolo: <?php echo $movie1->title?> </h4>
                    </div>
                    <div class="card-body">
                        <div>Nelle sale dal: <?php echo $movie1->year?></div>
                        <div>Diretto da: <?php echo $movie1->author?></div>
                    </div>
                    <?php ?>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <?php 
                    ?>
                    <div class="card-title">
                        <h4>Titolo: <?php echo $movie2->title?> </h4>
                    </div>
                    <div class="card-body">
                        <div>Nelle sale dal: <?php echo $movie2->year?></div>
                        <div>Diretto da: <?php echo $movie2->author?></div>
                    </div>
                    <?php ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>