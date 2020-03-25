
<?php
class Fighter {
// atributos
    private $name;
    private $nacionality;
    private $age;
    private $high;
    private $weight;
    private $category;
    private $win;
    private $lose;
    private $tie;
//metodos
function __construct($name, $nacio, $age, $high, $weight, $win, $lose, $tie){
  $this->setName($name);
  $this->setNacionality($nacio);
  $this->setAge($age);
  $this->setHigh($high);
  $this->setWeight($weight);
  $this->setWin($win);
  $this->setLose($lose);
  $this->setTie($tie);
} 
function winFight(){
$this->setWins($this->getWins()+1);
}
function loseFight(){
$this->setLose($this->getLose()+1);
}
function tieFight(){
$this->setTies($this->getTies()+1);
}
// metodos especiais
public function getNacionality(){
  return $this->nacionality;
}
public function setNacionality($nacio){
  $this->nacionality=$nacio;
}
public function getAge(){
  return $this->age;
}
public function setAge($age){
  $this->age=$age;
}
public function getCategory(){
  return $this->category;
}
public function getName(){
  return $this->name;
}
public function setName($name){
  $this->name = $name;
}
public function getWeight(){
  return $this->weight;
}
public function setWeight($weight){
  $this->weight=$weight;
  $this->setCategory($weight);
}
public function setHigh($high){
  $this->high=$high;
}
public function getHigh(){
 return $this->high;
}
public function getWin(){
  return $this->wins;
}
public function setWin($wins){
  $this->wins=$wins;
}
public function getLose(){
  return $this->lose;
}
public function setLose($lose){
  $this->lose=$lose;
}
public function getTie(){
  return $this->ties;
}
public function setTie($ties){
  $this->ties=$ties;
  }  

// definir categoria com base no peso
private function setCategory($weight){
  if($weight<52.2){
    $this->category="Inválido";
  }elseif($weight<=70.3){
  $this->category="Peso Leve";
  }elseif($weight<=83){
    $this->category="Peso Medio";
  }elseif($weight<=120){
    $this->category="Peso Pesado";
  }else{
    $this->category="Invalido";
  }
}
//apresentacoes
public function show(){
  echo "<p>________________</p>";
  echo "<p>Vai começar!!! O competidor ".$this->getName(); 
  echo "<p>Diretamente de ". $this->getNacionality();
  echo "<p>Com".$this->getAge(). " anos e pesando ".$this->getWeight()." Kilos!";
  echo "<p> Ele tem " .$this->getWin(). " vitórias, ";
  echo "tem " .$this->getLose(). " derrotas ";
  echo "e empatou ".$this->getTie(). " vezes!";
}
public function status(){
  echo "<p> ______________________</p>";
  echo "<p> Nome: ".$this->getName();
  echo "<p> Categoria: ".$this->getCategory();
  echo "<p> Vitórias: ".$this->getWin();
  echo "<p> Derrotas: ".$this->getLose();
  echo "<p> Empates: ".$this->getTie();
 }
}
?>