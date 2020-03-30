<?php
require_once 'animals.php';
class bird extends animals {
    private $colorFeather;

    public function move()
    {
        echo "<p> voando </p>";
    }

    public function makeNoise()
    {
        echo "<p> cantando </p>";
    }

    public function eat()
    {
       echo "<p> comendo larva</p>";
    }
//getter e setter
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

    public function getColorFeather()
    {
        return $this->colorFeather;
    }

    public function setColorFeather($colorFeather)
    {
        $this->colorFeather = $colorFeather;
    }


}