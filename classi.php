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
        $this->setMaleProt($_maleProt);
        $this->setFemaleProt($_femaleProt);
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of the difference between production year and current year
     */ 
    public function getGapYear() {
        $currYear = date("Y");
        return $currYear - $this->year;
    }

    /**
     * Get the value of genre
     */ 
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of maleProt
     */ 
    public function getMaleProt()
    {
        return $this->maleProt;
    }

    /**
     * Set the value of maleProt
     *
     * @return  self
     */ 
    public function setMaleProt($maleProt)
    {
        $this->maleProt = $maleProt;

        return $this;
    }

    /**
     * Get the value of femaleProt
     */ 
    public function getFemaleProt()
    {
        return $this->femaleProt;
    }

    /**
     * Set the value of femaleProt
     *
     * @return  self
     */ 
    public function setFemaleProt($femaleProt)
    {
        $this->femaleProt = $femaleProt;

        return $this;
    }

    /**
     * Get the sum of male and female cast
     */ 
    public function getFullCast(){
        return $this->maleProt . " e " . $this->femaleProt;
    }

    public function printSampleCard(){
        echo "
        <h3>Titolo: $this->title </h3>
        <div>Direttore: $this->author </div>
        <div>Anno di produzione: $this->year </div>
        <div>Genere: $this->genre </div>";
    }
};
