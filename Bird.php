<?php

class Bird {
    public $color;
    private $age;

    //Konstruktors
    public function __construct($c, $a) {
        $this->color = $c;
        $this->age = $a;
    }

// Destruktors
    public function __destruct() {
        echo $this->color . " is dead<br>";
    }


    public function fly() {
        echo "Fly away " . $this->color . " bird<br>";
    }
}