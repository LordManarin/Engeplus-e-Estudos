<?php
require_once 'bird.php';
class eagle extends bird{
    public function getWeight()
    {
        return $this->weight;
    }

    public function getMember()
    {
        return $this->member;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getColorFeather()
    {
        return $this->colorFeather;
    }

}