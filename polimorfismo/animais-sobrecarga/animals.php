<?php
abstract class animals{
    // atributos
    protected $weight, $member, $age;
    //ações
    abstract public function move();
    abstract public function makeNoise();
    abstract public function eat();
    // getter e setters
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

}