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

    // public function getTitle(){

    // }
}
