<?php
require_once "video.php";
require_once  "aluno.php";
class view{
    private $viewer, $movie;

// metodo construct
    public function __construct($viewer, $movie){
        $this->viewer = $viewer;
        $this->movie = $movie;
        $this->movie->setViews($this->movie->getViews()+1);
        $this->viewer->setTotWatch($this->viewer->getTotWatch()+1);
    }
// avaliar
    public function review(){
        $this->movie->setReview=5;
    }
    public function reviewNote($note){
        $this->movie-> setReview($note);
    }
    public function reviewPercent($percent){
        $newNote = 0;
        if ($percent <= 20) {
            $newNote = 3;
        } elseif ($percent <= 50){
            $newNote = 5;
        } elseif ($percent <= 90){
            $newNote = 8;
        } else {
            $newNote = 10;
        }
        $this->movie->setReview($newNote);
    }
// getter e setters
    public function getViewer(){
        return $this->viewer;
    }
    public function setViewer($viewer){
        $this->viewer = $viewer;
    }
    public function getMovie(){
        return $this->movie;
    }
    public function setMovie($movie){
        $this->movie = $movie;
    }


}