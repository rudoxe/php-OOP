<?php

class Car {
    public $brand;
    private $milage;

    public function __construct() {
        $this->brand = $brand;
        $this->milage = $milage;
    }

    public function __destruct() {
    echo $this->brand ."is dead at milage" . $this->milage;
    }

    public function increaseMilage($amount) {
        $this->milage = $amount + $this->milage;
    }



}