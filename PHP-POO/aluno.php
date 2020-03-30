<?php
require_once "people.php";
class aluno extends people {
    private $login, $totWatch;

// construct
    public function __construct($name, $age, $sex, $login){
        parent::__construct($name, $age, $sex);
        $this->login = $login;
        $this->totWatch = 0;
    }

// funcao assistir
    public function watchMore(){
        $this->totWatch++;
    }

// getter e setters;
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($login){
        $this->login = $login;
    }
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
    public function getTotWatch(){
        return $this->totWatch;
    }
    public function setTotWatch($totWatch){
        $this->totWatch = $totWatch;
    }

}