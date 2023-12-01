<?php

abstract class Vehicle {
    public $brand;
    protected $mileage;

    public function __construct() {
        $this->brand = $brand;
        $this->milage = $milage;
    }

    public function __destruct() {
        echo $this->brand ."is dead at milage" . $this->milage;
    }

    abstract static function makeNoise();
}