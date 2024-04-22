<?php

// Animal class
class Animal {
    protected $species;
    protected $habitat;
    protected $diet;

    public function __construct($species, $habitat, $diet) {
        $this->species = $species;
        $this->habitat = $habitat;
        $this->diet = $diet;
    }

    public function getSpecies() {
        return $this->species;
    }


    public function getHabitat() {
        return $this->habitat;
    }

    public function getDiet() {
        return $this->diet;
    }

    public function setDiet($diet) {
        $this->diet = $diet;
    }

    public function makeSound() {
        return "Animal Sound: ";
    }
}

// Mammal class
class Mammal extends Animal {
    private $furColor;
    private $numberOfLegs;
    private $isWarmBlooded;

    public function __construct($species, $habitat, $diet, $furColor, $numberOfLegs, $isWarmBlooded) {
        parent::__construct($species, $habitat, $diet);
        $this->furColor = $furColor;
        $this->numberOfLegs = $numberOfLegs;
        $this->isWarmBlooded = $isWarmBlooded;
    }

    public function getFurColor() {
        return $this->furColor;
    }

    public function setFurColor($furColor) {
        $this->furColor = $furColor;
    }

    public function getNumberOfLegs() {
        return $this->numberOfLegs;
    }

    public function setNumberOfLegs($numberOfLegs) {
        $this->numberOfLegs = $numberOfLegs;
    }

    public function getIsWarmBlooded() {
        return $this->isWarmBlooded;
    }

    public function setIsWarmBlooded($isWarmBlooded) {
        $this->isWarmBlooded = $isWarmBlooded;
    }

    public function makeSound() {
        return "Grrrrr!";
    }
}

// Bird class
class Bird extends Animal {
    private $wingSpan;
    private $canFly;
    private $beakLength;

    public function __construct($species, $habitat, $diet, $wingSpan, $canFly, $beakLength) {
        parent::__construct($species, $habitat, $diet);
        $this->wingSpan = $wingSpan;
        $this->canFly = $canFly;
        $this->beakLength = $beakLength;
    }

    public function getWingSpan() {
        return $this->wingSpan;
    }

    public function setWingSpan($wingSpan) {
        $this->wingSpan = $wingSpan;
    }

    public function getCanFly() {
        return $this->canFly;
    }

    public function setCanFly($canFly) {
        $this->canFly = $canFly;
    }

    public function getBeakLength() {
        return $this->beakLength;
    }

    public function setBeakLength($beakLength) {
        $this->beakLength = $beakLength;
    }

    public function makeSound() {
        return "Tweet!";
    }
}

// Instantiate objects of Mammal and Bird classes
$mammal = new Mammal("Tiger", "Jungle", "Carnivore", "Orange", 4, true);
$bird = new Bird("Eagle", "Mountains", "Carnivore", 2, true, "Long");

// Display the information for every instance
echo "Mammal: " . $mammal->getSpecies() . ", Habitat: " . $mammal->getHabitat() . ", Diet: " . $mammal->getDiet() . ", Sound: " . $mammal->makeSound() . "\n";
echo "Bird: " . $bird->getSpecies() . ", Habitat: " . $bird->getHabitat() . ", Diet: " . $bird->getDiet() . ", Sound: " . $bird->makeSound() . "\n";

?>

