<?php
include 'Animal.php';

abstract class Cat extends Animal{

  protected $color;
  protected $sex;

  public abstract function getAttributes();

}

abstract class PetCat extends Cat{

  protected $sleepHour;
  protected $name;
  protected $subSpecies;

  function __construct($name, $sex){
    $this->name = $name;
    $this->sex = $sex;
    $this->species = 'Lap cat';
  }

  public abstract function getAttributes();

}

class Munchkin extends PetCat{

  protected $environment;

  function __construct($name, $sex, $age, $food, $color){
    parent::__construct($name, $sex);
    $this->age = $age;
    $this->food = $food;
    $this->color = $color;
    $this->sleepHour = 11;
    $this->environment = 'Inside only';
    $this->subSpecies = 'Munchkin';
  }

  public function getAttributes(){
    return $attr = [
      'name' => $this->name,
      'species' => $this->species,
      'sleep' => $this->sleepHour,
      'age' => $this->age,
      'food' => $this->food,
      'color' => $this->color,
      'env' => $this->environment,
      'sex' => $this->sex,
      'subSpecies' => $this->subSpecies
    ];
  }
  
}
