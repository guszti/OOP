<?php
include 'Animal.php';

abstract class Dog extends Animal{

  protected $name;

  public abstract function getAttributes();

}

abstract class SledDog extends Dog{

  protected $sex;

  function __construct($age, $food, $name, $sex){
    $this->species = 'Sled dog';
    $this->age = $age;
    $this->food = $food;
    $this->name = $name;
    $this->sex = $sex;
  }

  public abstract function getAttributes();

}

class Malamute extends SledDog{

  protected $subSpecies;

  function __construct($age, $food, $name, $sex){
    parent::__construct($age, $food, $name, $sex);
    $this->subSpecies = 'Alaskan malamute';
  }

  public function getAttributes(){
    return $attr = ['species' => $this->species,
                    'subSpecies' => $this->subSpecies,
                    'age' => $this->age,
                    'food' => $this->food,
                    'name' => $this->name,
                    'sex' => $this->sex
                   ];
  }

}
