<?php

Class Movie
{
    public $name;
    public $description;
    public $duration;
    public $releaseDate;
    
    function __construct($Name, $Desc,$Duration,$Release)
    {
        $this->name = $Name;   
        $this->description = $Desc; 
        $this->duration = $Duration; 
        $this->releaseDate = $Release; 
    }
    
    function seeMovie($Movie)
    {
        print 'nom : '.$this->name.'<br>';
        print 'description : '.$this->description.'<br>';
        print 'durée : '.$this->duration.'<br>';
        print 'date de sortie : '.$this->releaseDate.'<br>';
    }    
}

    $Film1 = new Movie("Godzilla","Film de merde","2h","20.10.2015");

    $Film1->seeMovie();
    