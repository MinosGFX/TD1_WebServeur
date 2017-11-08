<?php

Class Movie
{
    public $name;
    public $description;
    public $duration;
    public $releaseDate;
    
    public function __construct($Name,$Desc,$Duration,$Release)
    {
        $this->name = $Name;   
        $this->description = $Desc; 
        $this->duration = $Duration; 
        $this->releaseDate = $Release; 
    }
    
    public function getName()
    {
        return $this->name;    
    }
    
    public function setName($Name = "")
    {
        $this->name =$name;    
    }
        
    public function setDesc($Desc = "")
    {
        $this->description = $Desc;    
    }
    
    public function getDesc()
    {
        return $this->description;    
    }
    
    
    public function setDuration($Duration = "")
    {
        $this->duration =$Duration;    
    }
    
    public function getDuration()
    {
        return $this->duration;    
    }
    
    public function setRelease($Release = "")
    {
        $this->releaseDate =$Release;    
    }
    
        public function getRelease()
    {
        return $this->release;    
    }

    
    public function seeMovie($Movie)
    {
        print 'nom : '.$this->name.'<br>';
        print 'description : '.$this->description.'<br>';
        print 'durée : '.$this->duration.'<br>';
        print 'date de sortie : '.$this->releaseDate.'<br>';
    }    
}

    $Film1 = new Movie("Godzilla","Film de merde","2h","20.10.2015");

    $Film1->seeMovie();
    