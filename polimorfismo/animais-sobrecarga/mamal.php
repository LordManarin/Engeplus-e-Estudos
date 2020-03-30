<?php
require_once 'animals.php';
class mamal extends animals{
    private $colorFur;
    public function move(){
        echo "<p>Correndo</p>";
    }
    public function makeNoise(){
        echo "<p>Grunhido</p>";
    }
    public function eat(){
        echo "<p>Mamando</p>";
    }
    public function getColorFur(){
        return $this->colorFur;
    }
    public function setColorFur($colorFur){
        $this->colorFur = $colorFur;
    }
}