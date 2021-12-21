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
    function __construct($title, $director, $cast, $genre, $language, $budget, $year) {
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
}