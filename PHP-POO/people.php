<?php

abstract class people{
    protected $name, $age, $sex, $exp;
// metodo construct
    public function __construct($name, $age, $sex)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->exp=0;
    }

// metodo protegido
    protected function gainExp($num){
        $this->exp += $num;
    }

// getter e setter
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getSex(){
        return $this->sex;
    }
    public function setSex($sex){
        $this->sex = $sex;
    }
    public function getExp(){
        return $this->exp;
    }
    public function setExp($exp){
        $this->exp = $exp;
    }
}