<?php
require_once "people.php";
class funcionary extends people {
    //atributos
    private $sector;
    private $working;
    // metodos
    public function changeWork(){
        $this->working = ! $this->working;
    }
    // getters e setters
    public function getSector(){
        return $this->sector;
    }
    public function setSector($sector){
        $this->sector = $sector;
    }
    public function getWorking(){
        return $this->working;
    }
    public function setWorking($working){
        $this->working = $working;
    }



}