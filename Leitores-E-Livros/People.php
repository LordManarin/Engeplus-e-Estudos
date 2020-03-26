<?php
// atributos
class People {
  private $name;
  private $age;
  private $sex;
// metodo construct
function __construct ($name, $age, $sex){
  $this->setName($name);
  $this->setAge($age);
  $this->setSex($sex);
}
// metodos
function getName(){
  return $this->name;
}
function setName($name){
  $this->name=$name;
}
function getAge(){
  return $this->age;
}
function setAge($age){
  $this->age=$age;
}
function getSex(){
  return $this->sex;
}
function setSex($sex){
  $this->sex=$sex;
}
// fazer aniversário
function fazerAno(){
  $this->setAge($this->getAge()+1);
}
// apresentar
function reader(){
  echo "<p>______________________</p>";
  echo "<p> Nome: ". $this->getName();
  echo "<p> Idade: ". $this->getAge();
  echo "<p> Sexo: ".$this->getSex();
  echo "<p>______________________</p>";

}

}

?>