<!-- 
    Descrizione :

    Ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
    - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
-->

<?php

class Movie {
    public $title;
    public $director;
    public $cast;
    public $genre;
    public $language;
    public $budget;
    public $year;

    // constructor
    function __construct(string $title, string $director, string $cast, string $genre, string $language, int $budget, int $year) {
        $this->title = $title;
        $this->director = $director;
        $this->cast = $cast;
        $this->genre = $genre;
        $this->language = $language;
        $this->budget = $budget;
        $this->year = $year;
    }

    // functions

    // retrun main movie info
    public function getMovie() { 
        $movie = [
            $this->title,
            $this->genre,
            $this->language,
            $this->cast
        ];

        return $movie;
    }
    //  return movie title
    public function getTitle() {
        return $this->title;
    }

    //  return movie director
    public function getDirector() {
        return $this->director;
    }

    //  return movie cast
    public function getCast() {
        return $this->cast;
    }

    //  return movie genre
    public function getGenre() {
        return $this->genre;
    }

    //  return movie lenguage
    public function getLenguage() {
        return $this->lenguage;
    }

    //  return movie budget
    public function getBudget() {
        return $this->budget;
    }

    //  return movie year
    public function getYear() {
        return $this->year;
    }
}

// film 1
$movie_1 = new Movie('I puffi', 'Gargamella', 'smurfs, Gargamella e Birba', 'Fanta-Puffo', 'puffese', 24030, 1492);

// film 2
$movie_2 = new Movie('Spongebob', 'Signor Capitano', 'pesci', 'animazione', 'romanaccio', 990123, 2021);

var_dump($movie_1, $movie_2);