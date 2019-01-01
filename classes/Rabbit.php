<?php
  include 'Animal.php';

  abstract class Rabbit extends Animal{

    protected static $available = 0;

    function __construct($age){
      $this->species = 'Rabbit';
      $this->age = $age;
      $this->food = 'Hay';
      self::$available++;
    }

    public abstract function getAttributes();
    public static abstract function getCount();

  }

  class Angora extends Rabbit{

    protected $color;
    protected $subSpecies;

    function __construct($age, $color){
      parent::__construct($age);
      $this->color = $color;
      $this->subSpecies = 'Angora';
    }

    public function getAttributes(){
      return $attr = [
        'species' => $this->species,
        'sub' => $this->subSpecies,
        'age' => $this->age,
        'food' =>$this->food,
        'color' => $this->color
      ];
    }

    public static function getCount(){
      return parent::$available;
    }

  }
