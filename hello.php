<?php

Class Movie
{
    public $name = "Godzilla";
    public $description = "film pourri";
    public $duration = "2h";
    public $releaseDate ="20.10.2015";
    
    function seeMovie($Movie)
    {
        print 'nom : '.$this->name.'<br>';
        print 'description : '.$this->description.'<br>';
        print 'durée : '.$this->duration.'<br>';
        print 'date de sortie : '.$this->releaseDate.'<br>';
    }    
}

    $Movie = new Movie;

    $Movie->seeMovie();
    