<?php
require_once 'mamal.php';
class wolf extends mamal{
    //açoes
    public function makeNoise(){
        echo "<p>uivando</p>";
    }
    // getters e setters
    public function getWeight(){
        return $this->weight;
    }
    public function setWeight($weight){
        $this->weight = $weight;
    }
    public function getMember(){
        return $this->member;
    }
    public function setMember($member){
        $this->member = $member;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getColorFur(){
        return $this->colorFur;
    }
    public function setColorFur($colorFur){
        $this->colorFur = $colorFur;
    }
}