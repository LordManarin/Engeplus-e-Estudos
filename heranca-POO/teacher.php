<?php
require_once "people.php";
class teacher extends people {
    // atributos
    private$speciality;
    private $salary;
    // funcoes
    public function salaryIncrease($increase){
        $this->salary+=$increase;
    }
    // setter e getters
    public function getSpeciality()
    {
        return $this->speciality;
    }
    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;
    }
    public function getSalary()
    {
        return $this->salary;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }


}