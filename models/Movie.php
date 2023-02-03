<?php

class Movie
{
    // CAMPI -->
    public $title;
    public $plot;
    public $type;
    public $duration;

    public function __construct($_title, $_plot, $_type, $_duration)
    {
        $this->title = $_title;
        $this->plot = $_plot;
        $this->type = $_type;
        $this->duration = $_duration;
    }

    // METHODS -->

    public function getTitle()
    {
        return $this->title;
    }
    public function getPlot()
    {
        return $this->plot;
    }
}


$movie1 = new Movie('Avengers', 'Tutti contro il crimine', 'Green', 2);
$movie2 = new Movie('Spiderman', 'Ragno contro il crimine', 'Yellow', 1.5);
$movie3 = new Movie('Batman', 'Pipistrello contro il crimine', 'Red', 3);
$movie4 = new Movie('Superman', 'Uomo contro il crimine', 'Green', 1.2);

$movies = [];

array_push($movies, $movie1, $movie2, $movie3, $movie4);
