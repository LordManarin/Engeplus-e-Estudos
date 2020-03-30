<?php
require_once "wolf.php";
class dog extends wolf{
    // acoes
    public function reactFrase($frase){
        if($frase=="Comida!"||$frase=="Ola"){ // ragir conforme frase
            echo "<p>Abanar e latir</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }
    public function reactHora($hour){ // reagir conforme horario
        if($hour<12){
            echo "<p>Abanar</p>";
        }elseif($hour>18){
            echo"<p>...</p>";
        }else{
            echo"<p> abanar e latir</p>";
        }
    }
    public function reactDono($owner){// reagir com o dono
        if($owner==true){
            echo"<p>Latindo feliz</p>";
        }else{
            echo "<p>Rosnar</p>";
        }
    }
    public function reactIdade($age,$weight){// reagir conforme peso e idade
        if($age<5){
            if($weight<10){
                echo "<p>Abanar</p>";
            }else{
                echo "<p>Latir</p>";
            }
        }elseif($weight<10){
            echo"<p>Rosnar</p>";
        }else{
            echo"<p>...</p>";
        }
    }
    public function makeNoise(){
        echo "<p>latindo</p>";
    }

    //getter e setters
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