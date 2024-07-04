<?php
class Car {
    

    //Properties
    public $model;
    protected $year;
    private $max_speed;
    //Conctructor

    public function __construct($model, $year, $max_speed)
    {
        $this -> model = $model;
        $this -> year = $year;
        $this->max_speed = $max_speed;
    }

    //Methods
    public function setMaxSpeed($speed) {
        $this -> max_speed = $speed;
    }

    public function getYear() {
        return $this->year;
    }
    public function getMaxSpeed() {
        return $this->max_speed;
    }
}


// $merc = new Car('W211', '2007');
// $merc -> setMaxSpeed('234');
// echo $merc -> model;

//PHP OOP - Inheritance

// class ElectroCar extends Car {
//     public function getName() {
//         echo "<h1>$this->model</h1>";
//     }
// }


// $tesla = new ElectroCar('Model 1', '2021');
// $tesla -> setMaxSpeed('250');
// echo $tesla -> getName();
// echo $tesla -> max_speed;


//Public, Protected, Private

class Chevrolet extends Car{
    public function fullParams() {
        $model = $this->model;
        $yili = $this->year;
        return "Model: $model<br>Year: $yili";
    }
}
// $chevrolet = new Chevrolet('Malibu', 2020, 240);
// echo $chevrolet -> fullParams();


//Abstract Class

abstract class Fruit {

    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
}

class Apple extends Fruit {

    public function getParams() {
        return $this->name.$this->color;
    }
}

// $apple = new Apple('apple', 'red');
// echo $apple->getParams();

//Interface

interface Animal {
    public function makeSound();
}


class Dog implements Animal {
    public function makeSound()
    {
        return 'vov vov';
    }
}

$dog = new Dog;
// echo $dog->makeSound();

//Trait
trait message1 {
    public function msg1() {
        echo 'OOP Message Trait';
    }
}

class Welcome {
    use message1;
}

$wel = new Welcome();
$wel -> msg1();



