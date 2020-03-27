<?php
require_once "people.php";
class student extends people {
    private $ident;
    private $course;
    // funcoes
    public function cancelIdent(){
        echo "Matricula será cancelada";
    }
    // getter e setters
    public function getIdent(){
        return $this->ident;
    }
    public function setIdent($ident){
        $this->ident = $ident;
    }
    public function getCourse(){
        return $this->course;
    }
    public function setCourse($course){
        $this->course = $course;
    }



}