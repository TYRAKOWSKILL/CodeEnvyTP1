<?php
class Movie
{
    private $name = null;
    private $description = "une description";
    private $year = 2015;
    private $duree = 120;
    
    public function __construct($name = "",$description = "",int $year, int $duree)
    {
        $this->name = $name;
        $this->description = $description;
        $this->year = $year;
        $this->duree = $duree;
    }
    public function affichage()
    {
        print "le film est $name, $description, $year, $duree";
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name = "")
    {
        $this->name = $name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description = "")
    {
        $this->description = $description;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function setYear(int $year)
    {
        $this->year = $year;
    }   
    public function getDuree()
    {
        return $this->duree;
    }
    public function setDuree(int $duree)
    {
        $this->duree = $duree;
    }
    
}
$film = new Movie;
echo $film->$titre;
$film->affichage();