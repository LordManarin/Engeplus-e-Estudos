<?php
require_once 'animals.php';
class fish extends animals{
    private $color;

    public function move()
    {
        echo "<p> nadando </p>";
    }

    public function makeNoise()
    {
        echo "<p> peixe nao faz som </p>";
    }

    public function eat()
    {
        echo "<p> comendo coisas do mar </p>";
    }
    // getter e setters
    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getMember()
    {
        return $this->member;
    }

    public function setMember($member)
    {
        $this->member = $member;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    // funçao
    public function MakeBubble(){
        echo "<p> Spltou uma bolha</p>";
    }
}